<?php

namespace Database\Seeders;

use App\Models\Color;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $colors= Color::all();
        Product::all()->each(function ($product) use ($colors) {
            $product->colors()->attach(
                $colors
                    ->pluck("id")
                    ->random(rand(1, $colors->count()))
                    ->toArray()
            );
        });
    }
}
