<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeSilder extends Model
{
    use HasFactory;

    protected $fillable = [
        'top_title',
        'title',
        'sub_title',
        'offer',
        'image',
        'status',
    ];
}