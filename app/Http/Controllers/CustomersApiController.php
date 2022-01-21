<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Customer_Customer_Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustomersApiController extends Controller
{

    public function index(){
            return Customer::all();
    }

    public function show($id){
            return Customer::findOrfail($id);
    }

    public function store(){
            request()->validate([
                'customer_name'      =>     'required|string|max:255',
                'customer_surname'   =>     'required|string|max:255',
                'customer_phone'     =>     'required|regex:/^[\+]?([0-9\s\-]*)$/|min:9|max:16',
                'customer_email'     =>     'required|email|unique:customer,customer_email|string|max:255',
                'customer_position'  =>     'required|string|max:255',
                'customer_note'      =>     'nullable|max:180'
            ]);
            return Customer::create([
                'customer_name'      =>     request('customer_name'),
                'customer_surname'   =>     request('customer_surname'),
                'customer_phone'     =>     request('customer_phone'),
                'customer_email'     =>     request('customer_email'),
                'customer_position'  =>     request('customer_position'),
                'customer_note'      =>     request('customer_note')
            ]);
    }

    public function store_group(){
            request()->validate([
                'customer_id'         =>    'required|numeric',
                'group_id'            =>    'required|numeric',
            ]);
            return Customer_Customer_Group::create([
                'customer_id'         =>     request('customer_id'),
                'customer_group_id'   =>     request('group_id')
            ]);
    }

    public function update_group($id){
        request()->validate([
            'customer_id'         =>    'required|numeric',
            'group_id'            =>    'required|numeric',
        ]);
        $customer_group = Customer_Customer_Group::findOrfail($id);
        $success = $customer_group->update([
            'customer_id'         =>     request('customer_id'),
            'customer_group_id'   =>     request('group_id'),
        ]);
        return [
            'success' => $success
        ];
    }

    public function showUserGroups($id){
        return Customer_Customer_Group::showUserGroups($id);
    }

    public function update($id){
        request()->validate([
            'customer_name'      =>     'required|string|max:255',
            'customer_surname'   =>     'required|string|max:255',
            'customer_phone'     =>     'required|regex:/^[\+]?([0-9\s\-]*)$/|min:9|max:16',
            'customer_email'     =>     'required|email|unique:customer,customer_email|string|max:255',
            'customer_position'  =>     'required|string|max:255',
            'customer_note'      =>     'nullable|max:180'
        ]);
        $customer = Customer::findOrfail($id);
        $success = $customer->update([
            'customer_name'      =>     request('customer_name'),
            'customer_surname'   =>     request('customer_surname'),
            'customer_phone'     =>     request('customer_phone'),
            'customer_email'     =>     request('customer_email'),
            'customer_position'  =>     request('customer_position'),
            'customer_note'      =>     request('customer_note')
        ]);

        return [
            'success' => $success
        ];
    }

    public function destroy($id){
        $customer = Customer::findOrfail($id);
        $success = $customer->delete();
        return [
            'success' => $success
        ];
    }
}
