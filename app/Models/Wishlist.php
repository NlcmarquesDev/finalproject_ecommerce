<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
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

    public function addProductWishlist($productId, $productName, $productImage, $productPrice)
    {
        $products = $this->products ?? [];

        $product = [
            'id' => $productId,
            'name' => $productName,
            'image' => $productImage,
            'price' => $productPrice,
        ];

        $products[] = $product;

        $this->products = $products;
        $this->save();
    }

    public  function content()
    {
        $wishItems = array_map(function ($wishlist) {
            $product = Product::findOrFail($wishlist['id']);
            return new CartItem($product);
        }, $this->products);

        return $wishItems;
    }
}
