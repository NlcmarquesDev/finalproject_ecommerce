<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ColorProduct extends Model
{
    use HasFactory;
    protected $table = 'color_product';

    protected $fillable = [
        'product_id',
        'color_id',
        'quantity',
    ];
}
