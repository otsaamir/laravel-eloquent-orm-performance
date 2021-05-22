<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    //order_number, order_date, delivery_date, status
    protected $fillable = ['order_number', 'order_date', 'delivery_date', 'status'];
}
