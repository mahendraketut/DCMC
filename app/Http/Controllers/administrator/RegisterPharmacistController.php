<?php

namespace App\Http\Controllers\administrator;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class RegisterPharmacistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('administrator.pharmacist_registration');
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

    public function registerPharmacist(Request $request)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'username' => 'required|unique:users,username',
            'phone' => ['required', 'regex:/^(?:\+?62|0?)\d{9,12}$/'],
            'email' => 'required',
            'psw' => 'required',
            'confirm_psw' => 'required|same:psw',
        ]);

        $config = [
            'table' => 'users',
            'field' => 'user_id',
            'length' => 8,
            'prefix' => 'PHA-' . date('YmdHis')
        ];

        $userid = IdGenerator::generate($config);

        $phoneNumber = $request->phone;

        if (preg_match('/^0/', $phoneNumber)) {
            $phoneNumber = preg_replace('/^0/', '+62', $phoneNumber);
        } elseif (preg_match('/^62/', $phoneNumber)) {
            $phoneNumber = preg_replace('/^62/', '+62', $phoneNumber);
        } elseif (preg_match('/^\+62/', $phoneNumber)) {
            $phoneNumber = $phoneNumber;
        } else {
            $phoneNumber = '+62' . $phoneNumber;
        }

        // $school->save();
        $query = DB::table('users')->insert([
            'user_id' => $userid,
            'name' => $request->firstname . ' ' . $request->lastname,
            'username' => $request->username,
            'email' => $request->email,
            'dob' => $request->dob,
            'role' => 'pharmacist',
            'password' => bcrypt($request->psw),
            'phone' => $phoneNumber,
            'license' => $request->license,
            'gender' => $request->input('gender'),
            'address' => $request->address,
            'city' => $request->city,
            'created_at' => now(),
        ]);
        return redirect()->route('admin.dashboard')->with('success', 'Pharmacist registered successfully!');
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
