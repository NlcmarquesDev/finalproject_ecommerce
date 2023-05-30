<?php

namespace Database\Seeders;

use App\Models\Hastag;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HastagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $hastags = ['minimalist', 'lightning', 'classic', 'bathroom', 'interior', 'essentials', 'dinning', 'decor', 'comtemporany'];

        foreach ($hastags as $hastag) {
            Hastag::create([
                'name' => $hastag,

            ]);
        }
    }
}
