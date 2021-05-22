<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    //payment_type, payment_amount, payment_detail
    protected $fillable = ['payment_type', 'payment_amount', 'payment_detail', ];
}
