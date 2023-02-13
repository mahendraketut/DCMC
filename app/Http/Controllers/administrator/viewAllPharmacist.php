<?php

namespace App\Http\Controllers\administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class viewAllPharmacist extends Controller
{
    public function index()
    {
        $users = User::where('role', 'pharmacist')->get();
        return view('administrator.viewAllPharmacist', compact('users'));
    }
}
