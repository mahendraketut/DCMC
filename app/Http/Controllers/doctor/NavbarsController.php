<?php

namespace App\Http\Controllers\doctor;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class NavbarsController extends Controller
{
    public function index()
    {
        return view('doctor.navbar');
    }
}