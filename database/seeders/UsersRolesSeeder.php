<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $roles = Role::all();//ophalen rollen uit DB
        User::all()->each(function ($user) use ($roles){
            if($user['id']==1){
                $user->roles()->sync([1]);
            }elseif($user['id']==2){
                $user->roles()->sync([2]);
            }else{
                $user->roles()->attach(
                    $roles->whereIn('id', [2, 3])->pluck('id')->shuffle()->take(1)->toArray()
                );
//                $user->roles()->attach(
//                    $roles->sync([2,3])->random(rand(2,3))->pluck('id')->toArray()
//                );
            }
        });
    }
}
