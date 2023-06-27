<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $table = 'order_item';

    protected $fillable = ['order_id', 'quantity', 'product_name', 'product_taxes', 'product_price', 'product_color'];


    public function orders()
    {
        return $this->belongsTo(Order::class);
    }
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function total()
    {
        return $this->product_price * $this->quantity;
    }
}
