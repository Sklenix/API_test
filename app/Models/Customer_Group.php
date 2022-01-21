<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Customer_Group extends Model
{
    use HasFactory;
    protected $primaryKey = 'customer_group_id';
    protected $table = 'customer_group';
    public $timestamps = false;
    protected $fillable = ['customer_group_name'];

}
