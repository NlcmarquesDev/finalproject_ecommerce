<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['user_id', 'order_email', 'order_name', 'order_adress', 'order_bus', 'order_postcode', 'order_city', 'shipment_id', 'order_status', 'order_taxes', 'order_total', 'order_total_with_ship'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('quantity');
    }
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function isPaid()
    {
        return Payment::where('order_id', $this->id)->where('payment_status', 'paid')->count() > 0;
    }
    public function shipment()
    {
        return $this->belongsTo(Shipment::class);
    }
}
