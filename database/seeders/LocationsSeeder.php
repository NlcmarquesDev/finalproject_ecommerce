<?php

namespace Database\Seeders;

use App\Models\locations;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::each(function ($user) {
            locations::factory()->create(['user_id' => $user->id]);
        });
    }
}
