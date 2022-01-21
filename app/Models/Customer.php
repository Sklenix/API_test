<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Customer extends Model
{
    use HasFactory;
    protected $primaryKey = 'customer_id';
    protected $table = 'customer';
    public $timestamps = false;
    protected $fillable = ['customer_name', 'customer_surname', 'customer_phone', 'customer_email', 'customer_position', 'customer_note'];

}
