<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    //name, phone, address, city, state, pincode
    protected $fillable = ['name', 'phone', 'address', 'city', 'state', 'pincode'];
}
