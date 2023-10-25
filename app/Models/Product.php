<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'description', 'price', 'quantity', 'is_available', 'category'
    ];

    protected $casts = [
        'is_available' => 'boolean', // Mengonversi kolom is_available ke tipe boolean
    ];
}
