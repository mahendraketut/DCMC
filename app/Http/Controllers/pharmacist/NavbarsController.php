<?php

namespace App\Http\Controllers\pharmacist;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class NavbarsController extends Controller
{
    public function index()
    {
        return view('pharmacist.navbar');
    }
}