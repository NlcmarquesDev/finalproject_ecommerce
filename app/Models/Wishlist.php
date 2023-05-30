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

    public function addToWishlist($productId, $productName, $productImage, $productPrice)
    {
        $products = $this->products ?? [];

        $existingProductIndex = null;

        foreach ($products as $index => $product) {
            if ($product['id'] == $productId) {
                $existingProductIndex = $index;
                break;
            }
        }

        if ($existingProductIndex == null) {
            // Adicionar um novo produto ao carrinho
            $newProduct = [
                'id' => $productId,
                'name' => $productName,
                'image' => $productImage,
                'price' => $productPrice,
            ];

            $products[] = $newProduct;
        }

        $this->products = $products;
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
