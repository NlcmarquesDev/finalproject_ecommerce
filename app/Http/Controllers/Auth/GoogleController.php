<?php

namespace App\Http\Controllers\Auth;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Locations;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use RealRashid\SweetAlert\Facades\Alert;

class GoogleController extends Controller
{
    //

    public function googleRedirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function googleCallback()
    {
        try {

            $user = Socialite::driver('google')->user();
            $userExists = User::where('email', $user->email)->first();

            if ($userExists) {
                Auth::login($userExists);


                return redirect()->route('welcome');
            } else {
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'oauth_id' => $user->id,
                    'password' => Hash::make($user->password),
                    'oauth_type' => 'google',
                ]);

                $location = Locations::create([
                    'user_id' => $newUser->id,
                    'street' => 'Your Street',
                    'postcode' => '0000',
                    'number' => ' number',
                    'city' => 'city',
                ]);
                Auth::login($newUser);
                Alert::success('Login Successfully');
                return redirect()->route('welcome');
            }
        } catch (Exception $e) {
            dd($e);
        }
    }
}
