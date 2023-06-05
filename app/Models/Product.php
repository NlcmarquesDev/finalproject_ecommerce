<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'description', 'price', 'quantity', 'rating'];

    public static function Slugify($value)
    {
        return Str::slug($value);
    }

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }
    public function colors()
    {
        return $this->belongsToMany(Color::class, 'product_color', 'product_id', 'color_id');
    }
    public function hastags()
    {
        return $this->belongsToMany(Hastag::class, 'hastag_product');
    }
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function taxRate()
    {
        return 21;
    }

    public function priceExclTax()
    {
        return $this->price / ($this->taxRate() / 100 + 1);
    }
    public function hastag()
    {
        return $this->morphToMany(Hastag::class, 'hastagable');
    }
}
