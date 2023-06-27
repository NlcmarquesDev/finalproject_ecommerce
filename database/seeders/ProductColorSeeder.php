<?php

namespace Database\Seeders;

use App\Models\Color;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // $colors = Color::all();
        // Product::all()->each(function ($product) use ($colors) {
        //     $product->colors()->attach(
        //         $colors
        //             ->pluck("id")
        //             ->random(rand(1, $colors->count()))
        //             ->toArray()
        //     );
        // });
        $products = DB::table('products')->pluck('id');
        $colors = DB::table('colors')->pluck('id');

        foreach ($products as $product) {
            $colorCount = rand(1, count($colors));

            $selectedColors = $colors->random($colorCount);

            foreach ($selectedColors as $color) {
                DB::table('color_product')->insert([
                    'product_id' => $product,
                    'color_id' => $color,
                    'quantity' => rand(0, 100),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
