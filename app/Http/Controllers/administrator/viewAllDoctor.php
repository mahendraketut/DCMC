<?php

namespace App\Http\Controllers\administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class viewAllDoctor extends Controller
{
    public function index()
    {
        $users = User::where('role', 'doctor')->get();
        return view('administrator.viewAllDoctor', compact('users'));
    }
}
