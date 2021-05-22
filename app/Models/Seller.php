<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;
    //name, description, address, phone
    protected $fillable = ['name', 'description', 'address', 'phone'];

}
