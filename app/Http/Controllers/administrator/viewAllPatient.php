<?php

namespace App\Http\Controllers\administrator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class viewAllPatient extends Controller
{
    public function index()
    {
        $users = User::where('role', 'patient')->get();
        return view('administrator.viewAllPatient', compact('users'));
    }
}
