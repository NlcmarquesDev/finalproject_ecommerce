<?php

namespace App\Models;

class CartItem
{
    public function __construct(private Product $product, private int $quantity = 1, public ?string $color = null)
    {
    }

    public function product()
    {
        return $this->product;
    }

    public function quantity()
    {
        return $this->quantity;
    }
    public function color()
    {
        return $this->color;
    }

    public function total()
    {
        return $this->product()->price * $this->quantity();
    }

    /**
     * Total excluding tax
     * @return float|int
     */
    public function subtotal()
    {
        return $this->product()->priceExclTax() * $this->quantity();
    }

    public function taxes()
    {
        return $this->total() - $this->subtotal();
    }
}
