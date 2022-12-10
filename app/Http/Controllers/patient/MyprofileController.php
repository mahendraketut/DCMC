<?php

namespace App\Http\Controllers\patient;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class MyprofileController extends Controller
{
    public function index()
    {
        $user = User::find(auth()->user()->id);
        return view('patient.myprofile', compact('user'));
    }
}