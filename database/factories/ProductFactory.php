<?php

namespace Database\Factories;

use App\Models\Photo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nameid = ['sofa', 'light', 'table', 'shoes', "glass", 'candels'];


        return [
            //

            "name" => fake()->randomElement($nameid),
            "photo_id" => Photo::inRandomOrder()->first()->id,
            "description" =>"<p>". $this->faker->paragraph(100, true). "</p>",
            "price" => fake()->numberBetween(0,500),
            "rating" =>fake()->numberBetween(0,5),

        ];
    }

}
