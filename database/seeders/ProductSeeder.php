<?php

namespace Database\Seeders;

use App\Models\Color;
use App\Models\Photo;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $colors = Color::all();
        $photos = Photo::all();
        for ($i = 0; $i < 25; $i++) {
            $product = new Product();
            $product->name = fake()->words(2, true);
            $product->description = fake()->paragraphs(3, true);
            $product->quantity = fake()->numberBetween(10, 100);
            $product->price = fake()->numberBetween(0, 1000);
            $product->save();
        }
    }
}
