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

    public function addProduct($productId, $productName, $productImage, $productPrice, $productQuantity)
    {
        $products = $this->products ?? [];

        // Verificar se o produto já existe no carrinho
        $existingProductIndex = null;

        foreach ($products as $index => $product) {
            if ($product['id'] == $productId) {
                $existingProductIndex = $index;
                break;
            }
        }

        if ($existingProductIndex !== null) {
            // O produto já existe no carrinho, então incrementar a quantidade
            $products[$existingProductIndex]['quantity'] += 1;
        } else {
            // Adicionar um novo produto ao carrinho
            $newProduct = [
                'id' => $productId,
                'name' => $productName,
                'image' => $productImage,
                'price' => $productPrice,
                'quantity' => $productQuantity,
            ];

            $products[] = $newProduct;
        }

        $this->products = $products;
    }

    public  function content()
    {
        $cartItems = array_map(function ($cartItem) {
            $product = Product::findOrFail($cartItem['id']);
            return new CartItem($product, $cartItem['quantity']);
        }, $this->products);

        return $cartItems;
    }
    public function taxes()
    {
        $cartItems = $this->content();
        $totalTaxes = 0;

        foreach ($cartItems as $cartItem) {
            $totalTaxes += $cartItem->taxes();
        }

        return $totalTaxes;
    }

    public function subtotal()
    {
        $subtotal = 0;
        foreach ($this->content() as $cartItem) {
            $subtotal += $cartItem->subtotal();
        }
        return $subtotal;
    }

    public function total()
    {
        $total = 0;
        foreach ($this->content() as $cartItem) {
            $total += $cartItem->total();
        }
        return $total;
    }
}
