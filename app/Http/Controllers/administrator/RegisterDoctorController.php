<?php

namespace App\Http\Controllers\administrator;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterDoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('administrator.doctor_registration');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function registerDoctor(Request $request) 
    {
        $request -> validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'psw' => 'required',
        ]);

        // $school->save();
        $query = DB::table('users')->insert([
            'name' => $request->firstname . ' ' . $request->lastname,
            'email' => $request->email,
            'role' => 'doctor',
            'password' => Hash::make($request->psw),
            'phone_number' => $request->phone,
            'specialist' => $request->input('specialist'),
            'gender' => $request->input('gender'),
            'address' => $request->address,
            'created_at' => now(),
        ]);
        return redirect()->route('admin.dashboard');
        // if($query) {
        //     return back()->with('success', 'School added successfully');
        // } else {
        //     return back()->with('fail', 'Something went wrong');
        // }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
