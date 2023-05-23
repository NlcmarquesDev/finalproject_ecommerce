<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'products', 'expires_at'];

    protected $casts = [
        'products' => 'array',
        'expires_at' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function addProduct($productId, $productName , $productImage, $productPrice,$productQuantity)
    {
        $products = $this->products ?? [];

        $product = [
            'id' => $productId,
            'name' => $productName,
            'image' => $productImage,
            'price' => $productPrice,
            'quantity' => $productQuantity,
        ];

        $products[] = $product;

        $this->products = $products;
        $this->save();
    }

}
