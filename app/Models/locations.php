<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locations extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'street',
        'city',
        'phone',
        'zipcode',
    ];

    public function users()
    {
        return $this->hasOne(User::class);
    }
}
