<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Customer_Customer_Group extends Model
{
    use HasFactory;

    protected $primaryKey = 'customer_customer_group_id';
    protected $table = 'customer_customer_group';
    public $timestamps = false;
    protected $fillable = ['customer_id', 'customer_group_id'];

    public static function showUserGroups($id){
        return DB::table('customer_customer_group')
            ->select('customer.customer_name','customer.customer_surname',
                'customer.customer_phone','customer.customer_email','customer.customer_position','customer.customer_note','customer_customer_group.customer_group_id', 'customer_group.customer_group_name')
            ->join('customer','customer_customer_group.customer_id','=','customer.customer_id')
            ->join('customer_group','customer_customer_group.customer_group_id','=','customer_group.customer_group_id')
            ->where(['customer.customer_id' => $id])
            ->distinct()
            ->get();
    }

}
