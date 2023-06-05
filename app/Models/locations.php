<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locations extends Model
{
    use HasFactory;

    protected $fillable = [
        'street', 'user_id',
        'city', 'number', 'zipcode', 'adrees2', 'is_primary', 'is_delivery',
    ];

    public function users()
    {
        return $this->hasOne(User::class);
    }
}
