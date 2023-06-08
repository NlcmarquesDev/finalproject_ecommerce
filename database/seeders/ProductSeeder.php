<?php

namespace Database\Seeders;

use App\Models\Color;
use App\Models\Photo;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $products = [
            [
                'name' => 'Sunglasses',
                'description' => 'Stylish sunglasses for a trendy look.',
                'price' => 49.99,
                'rating' => rand(1, 5),
                'quantity' => rand(1, 100),
            ],
            [
                'name' => 'Wallet',
                'description' => 'Classic leather wallet for everyday use.',
                'price' => 29.99,
                'rating' => rand(1, 5),
                'quantity' => rand(1, 100),
            ],
            [
                'name' => 'Light for table',
                'description' => 'Modern lamp for ambient lighting.',
                'price' => 19.99,
                'rating' => rand(1, 5),
                'quantity' => rand(1, 100),
            ],
            [
                'name' => 'Dinner Table',
                'description' => 'Large dinner table for family gatherings.',
                'price' => 299.99,
                'rating' => rand(1, 5),
                'quantity' => rand(1, 100),
            ],
            [
                'name' => 'Lamp',
                'description' => 'Modern lamp for ambient lighting.',
                'price' => 39.99,
                'rating' => rand(1, 5),
                'quantity' => rand(1, 100),
            ],
            [
                'name' => 'Handbag',
                'description' => 'Stylish handbag for carrying essentials.',
                'price' => 79.99,
                'rating' => rand(1, 5),
                'quantity' => rand(1, 100),
            ],
            [
                'name' => 'Watch',
                'description' => 'Beautiful watch for a touch of elegance.',
                'price' => 14.99,
                'rating' => rand(1, 5),
                'quantity' => rand(1, 100),
            ],
            [
                'name' => 'Tea bottle',
                'description' => 'Stainless steel tea bottle for mixing your hot favorite drinks.',
                'price' => 9.99,
                'rating' => rand(1, 5),
                'quantity' => rand(1, 100),
            ],
            [
                'name' => 'Candle Holder',
                'description' => 'Decorative candle holder for a cozy atmosphere.',
                'price' => 24.99,
                'rating' => rand(1, 5),
                'quantity' => rand(1, 100),
            ],
            [
                'name' => 'Tote Bag',
                'description' => 'Spacious tote bag for carrying your essentials.',
                'price' => 34.99,
                'rating' => rand(1, 5),
                'quantity' => rand(1, 100),
            ],
            [
                'name' => 'Ring',
                'description' => 'Elegant ring to enhance your style.',
                'price' => 17.99,
                'rating' => rand(1, 5),
                'quantity' => rand(1, 100),
            ],
            [
                'name' => 'Dining Chair',
                'description' => 'Comfortable dining chair for your home.',
                'price' => 79.99,
                'rating' => rand(1, 5),
                'quantity' => rand(1, 100),
            ],
            [
                'name' => 'Headphones',
                'description' => 'Wireless headphones for an immersive music experience.',
                'price' => 129.99,
                'rating' => rand(1, 5),
                'quantity' => rand(1, 100),
            ],
            [
                'name' => 'Dining Lamp',
                'description' => 'Modern lamp for ambient lighting.',
                'price' => 399.99,
                'rating' => rand(1, 5),
                'quantity' => rand(1, 100),
            ],
            [
                'name' => 'Pendant Necklace',
                'description' => 'Charming pendant necklace to complete your look.',
                'price' => 39.99,
                'rating' => rand(1, 5),
                'quantity' => rand(1, 100),
            ],
            [
                'name' => 'Cocktail Shaker',
                'description' => 'Stainless steel cocktail shaker for mixing your favorite drinks.',
                'price' => 19.99,
                'rating' => rand(1, 5),
                'quantity' => rand(1, 100),
            ],
            [
                'name' => 'Cufflinks',
                'description' => 'Classy cufflinks for a polished look.',
                'price' => 24.99,
                'rating' => rand(1, 5),
                'quantity' => rand(1, 100),
            ],
            [
                'name' => 'Throw Pillow',
                'description' => 'Soft and cozy throw pillow for your living room.',
                'price' => 14.99,
                'rating' => rand(1, 5),
                'quantity' => rand(1, 100),
            ],
            [
                'name' => 'Coffee Table',
                'description' => 'Modern coffee table for your living space.',
                'price' => 149.99,
                'rating' => rand(1, 5),
                'quantity' => rand(1, 100),
            ],
            [
                'name' => 'Scarf',
                'description' => 'Fashionable scarf to keep you warm and stylish.',
                'price' => 19.99,
                'rating' => rand(1, 5),
                'quantity' => rand(1, 100),
            ],
            [
                'name' => 'Speaker',
                'description' => 'Portable speaker for music on the go.',
                'price' => 79.99,
                'rating' => rand(1, 5),
                'quantity' => rand(1, 100),
            ],
            [
                'name' => 'Candle Set',
                'description' => 'Set of scented candles for a relaxing atmosphere.',
                'price' => 29.99,
                'rating' => rand(1, 5),
                'quantity' => rand(1, 100),
            ],
            [
                'name' => 'Backpack',
                'description' => 'Spacious backpack for all your essentials.',
                'price' => 49.99,
                'rating' => rand(1, 5),
                'quantity' => rand(1, 100),
            ],
            [
                'name' => 'Smartwatch',
                'description' => 'Feature-packed smartwatch for tracking your fitness.',
                'price' => 199.99,
                'rating' => rand(1, 5),
                'quantity' => rand(1, 100),
            ],
            [
                'name' => 'Perfume',
                'description' => 'Elegant perfume for a captivating scent.',
                'price' => 69.99,
                'rating' => rand(1, 5),
                'quantity' => rand(1, 100),
            ],
            [
                'name' => 'Throw Blanket',
                'description' => 'Cozy throw blanket for chilly nights.',
                'price' => 34.99,
                'rating' => rand(1, 5),
                'quantity' => rand(1, 100),
            ],
        ];

        foreach ($products as $productData) {
            Product::create($productData);
        }
    }
}
