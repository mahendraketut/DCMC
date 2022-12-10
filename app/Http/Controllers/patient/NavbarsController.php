<?php

namespace App\Http\Controllers\patient;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class NavbarsController extends Controller
{
    public function index()
    {
        return view('patient.navbar');
    }
}