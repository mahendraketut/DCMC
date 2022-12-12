<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $input = $request->all();

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))) {
            if (auth()->user()->role == 'administrator') {
                return redirect()->route('admin.dashboard');
            } elseif (auth()->user()->role == 'doctor') {
                return redirect()->route('doctor.dashboard');
            } elseif (auth()->user()->role == 'pharmacist') {
                return redirect()->route('pharmacist.dashboard');
            } elseif (auth()->user()->role == 'patient') {
                return redirect()->route('patient.dashboard');
            }
        } else {
            // return redirect()->route('login')
            //     ->with('error', 'Email-Address And Password Are Wrong.');
            return back()->with('error', 'Email-Address And Password Are Wrong.');
        }
    }
}