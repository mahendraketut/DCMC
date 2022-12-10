<?php

namespace App\Http\Controllers\doctor;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class MyprofileController extends Controller
{
    public function index()
    {
        $user = User::find(auth()->user()->id);
        return view('doctor.myprofile', compact('user'));
    }
}