<?php

namespace App\Http\Controllers\doctor;

use App\Models\User;
use App\Models\Schedule;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $doctor = User::where('role', '=', 'doctor')->get();
        $schedule = Schedule::where('doctor_id', '=', Auth::user()->id)->get();
        return view('doctor.schedule', compact('schedule', 'doctor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $doctor = User::where('role', '=', 'doctor')->get();
        return view('doctor.schedule-add', compact('doctor'));
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
        $request->validate([
            // 'doctor_name' => 'required',
            'day' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
        ]);

        $query = DB::table('schedule')->insert([
            'doctor_id' => Auth::user()->id,
            'doctor_name' => Auth::user()->name,
            'day' => $request->day,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'created_at' => Carbon::now('+08:00'),
        ]);
        return redirect()->route('doctor.schedule')->with('success', 'Schedule Added Successfully');
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
        $data = Schedule::where('id', '=', $id)->first();
        $doctor = User::where('role', '=', 'doctor')->get();
        return view('doctor.schedule-update', compact('data', 'doctor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $request->validate([
            'doctor_name' => 'required',
            'day' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
        ]);

        $id = $request->id;

        Schedule::where('id', '=', $id)->update([
            'doctor_name' => $request->doctor_name,
            'day' => $request->day,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,

        ]);
        return redirect()->route('doctor.schedule')->with('success', 'Schedule Update Successfully');
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
        Schedule::where('id', '=', $id)->delete();
        return redirect()->back()->with('success', 'Schedule Deleted Successfully');
    }
}