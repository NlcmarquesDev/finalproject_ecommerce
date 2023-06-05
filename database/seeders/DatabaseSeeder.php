<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        $this->call([RoleSeeder::class, PhotoSeeder::class, UserSeeder::class, CategorySeeder::class, ColorsSeeder::class, FaqSeeder::class, LocationsSeeder::class, ProductSeeder::class, ProductColorSeeder::class, ProductCategorySeeder::class, HastagSeeder::class, HastagProductSeeder::class]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        //        $this->call([
        //            UserSeeder::class,
        //            RoleSeeder::class,
        //            PhotoSeeder::class,
        //            UsersRolesSeeder::class,
        //            FaqSeeder::class,
        //            CategorySeeder::class,
        //            ProductSeeder::class,
        //        ]);
    }
}
