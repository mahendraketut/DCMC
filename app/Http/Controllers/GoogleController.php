<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Laravel\Socialite\Facades\Socialite;

use Haruncpi\LaravelIdGenerator\IdGenerator;

use App\Models\User;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $config = [
            'table' => 'users',
            'field' => 'user_id',
            'length' => 8,
            'prefix' => 'PAT-' . date('YmdHis')
        ];

        $userid = IdGenerator::generate($config);

        $user = Socialite::driver('google')->user();

        $finduser = User::where('google_id', $user->id)->first();

        if ($finduser) {
            Auth::login($finduser);
            // return redirect()->intended('home');
            return redirect()->intended('patient.dashboard');
        } else {
            $newUser = User::create([
                'user_id' => $userid,
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'google_id' => $user->getId(),
                'password' => bcrypt('123456dummy'),
                'role' => 'patient'
            ]);
            Auth::login($newUser);
            // return redirect()->intended('{{route('home')}}');
            // return to patient dashboard
            return redirect()->intended('patient.dashboard');
        }
    }
}