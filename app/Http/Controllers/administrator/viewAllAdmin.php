<?php

namespace App\Http\Controllers\administrator;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\User;
use Yajra\DataTables\Facades\DataTables;

class viewAllAdmin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('role', 'administrator')->get();
        return view('administrator.viewAllAdmin', compact('users'));
    }
}
