<?php

namespace App\Http\Controllers\patient;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ViewDoctorController extends Controller
{
    public function index()
    {
        $doctors = User::where('role', 'doctor')->get();
        return view('patient.viewdoctor', compact('doctors'));
    }

    public function show($username)
    {
        $doctor = User::where('username', $username)->first();
        return view('patient.viewdetaildoctor', compact('doctor'));
    }
}