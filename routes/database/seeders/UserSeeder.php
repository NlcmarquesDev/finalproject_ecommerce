<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            'is_active' => 1,
            'role_id' => 1,
            'name' => 'Administrator',
            'email' => 'admin@admin.com',
            'role_id' => 1,
            "photo_id" => 1,
            'password' => bcrypt(12345678),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('users')->insert([
            'is_active' => 1,
            'role_id' => 2,
            'name' => 'ines',
            'email' => 'ines@gmail.com',

            'password' => bcrypt(12345678),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        User::factory()->count(20)->create();
    }
}
