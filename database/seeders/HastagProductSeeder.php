<?php

namespace Database\Seeders;

use App\Models\Hastag;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HastagProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $hastags = Hastag::all();
        Product::all()->each(function ($product) use ($hastags) {
            $product->hastags()->attach(
                $hastags
                    ->pluck("id")
                    ->random(rand(1, $hastags->count()))
                    ->toArray()
            );
        });
    }
}
