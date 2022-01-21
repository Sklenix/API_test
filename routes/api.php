<?php

use App\Http\Controllers\CustomersApiController;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/customers/{id}', [CustomersApiController::class, 'show']);
Route::get('/customers', [CustomersApiController::class, 'index']);
Route::get('/customers/groups/{id}', [CustomersApiController::class, 'showUserGroups']);

Route::post('/customers', [CustomersApiController::class, 'store']);
Route::put('/customers/{id}', [CustomersApiController::class, 'update']);
Route::delete('/customers/{id}', [CustomersApiController::class, 'destroy']);

Route::post('/customer/store/group', [CustomersApiController::class, 'store_group']);
Route::put('/customer/store/group/{id}', [CustomersApiController::class, 'update_group']);
