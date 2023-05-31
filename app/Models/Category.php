<?php

namespace App\Models;

use App\Models\Product;
use App\Traits\Slugify;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory, SoftDeletes, Slugify;

    protected $fillable = ["name"];

    public function products()
    {

        return $this->belongsToMany(Product::class, 'product_category', 'category_id', 'product_id');
    }
}
