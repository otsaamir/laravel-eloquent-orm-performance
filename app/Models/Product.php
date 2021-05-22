<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    //name, description, price, in_stock
    protected $fillable = ['name', 'description', 'price', 'in_stock'];

}
