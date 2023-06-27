<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    public function addProduct(Product $product, $quantity, $color)
    {


        $products = $this->products ?? [];

        // Verificar se o produto já existe no carrinho
        $existingProductIndex = null;

        foreach ($products as $index => $cartProduct) {
            if ($cartProduct['id'] == $product->id && $cartProduct['color'] == $color) {
                $existingProductIndex = $index;
                break;
            }
        }

        if ($existingProductIndex !== null) {
            // O produto com a mesma cor já existe no carrinho, então incrementar a quantidade
            $products[$existingProductIndex]['quantity'] += $quantity;
        } else {
            // Verificar se existe um produto com o mesmo ID, mas cor diferente
            $existingProductDifferentColorIndex = null;

            foreach ($products as $index => $cartProduct) {
                if ($cartProduct['id'] == $product->id && $cartProduct['color'] != $color) {
                    $existingProductDifferentColorIndex = $index;
                    break;
                }
            }

            if ($existingProductDifferentColorIndex !== null) {
                // O produto com o mesmo ID, mas cor diferente, já existe no carrinho
                // Neste caso, criamos um novo produto com a cor diferente
                $products[] = [
                    'id' => $product->id,
                    'quantity' => $quantity,
                    'color' => $color,
                ];
            } else {
                // Adicionar um novo produto ao carrinho
                $newProduct = [
                    'id' => $product->id,
                    'quantity' => $quantity,
                    'color' => $color,
                ];

                $products[] = $newProduct;
            }
        }

        $this->products = $products;
    }

    public function content()
    {
        $cartItems = array_map(function ($cartItem) {
            $product = Product::findOrFail($cartItem['id']);
            return new CartItem($product, $cartItem['quantity'], $cartItem['color']);
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
    public function totalWithShip($shipment)
    {
        return $this->total() + $shipment;
    }
}
