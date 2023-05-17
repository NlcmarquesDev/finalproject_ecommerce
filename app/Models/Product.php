<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable=[ 'name', 'description', 'price', 'stock', 'rating'];
    public function photos(){
        return $this->hasMany(Photo::class);
    }
    public function colors(){
        return $this->belongsToMany(Color::class,'product_color','product_id', 'color_id');
    }


}