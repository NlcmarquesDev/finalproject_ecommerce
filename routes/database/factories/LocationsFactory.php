<?php

namespace Database\Factories;

use App\Models\locations;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\locations>
 */
class LocationsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $model = Locations::class;

        return [
            'user_id' => User::factory(),
            'street' => $this->faker->streetName,
            'city' => $this->faker->city,
            'phone' => $this->faker->e164PhoneNumber,
            'zipcode' => $this->faker->postcode,
        ];
    }
}
