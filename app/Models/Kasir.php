<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasir extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_code',
        'product_name',
        'price',
        'quantity',
        'subtotal',
    ];
}
