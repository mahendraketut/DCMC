<?php

namespace App\Http\Controllers\patient;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Schedule;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
// use App\Notifications\AppointmentNotification;

class MyAppointment extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patient = User::where('role', '=', 'patient')->get();
        $appointment = Appointment::where('patient_id', '=', Auth::user()->id)->get()->sortByDesc('created_at');
        return view('patient.my-appointment', compact('appointment'));
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'doctor_name' => 'required',
            'day' => 'required',
            'start_time' => 'required|date_format:Y-m-d\TH:i',
            'end_time' => 'required|date_format:Y-m-d\TH:i|after:start_time',
        ]);

        $query = DB::table('appointment')->insert([
            'doctor_id' => User::where('name', '=', $request->doctor_name)->first()->id,
            'doctor_name' => $request->doctor_name,
            'day' => $request->day,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'status' => 'Pending',
            'created_at' => Carbon::now(),
        ]);
        if ($query) {
            // $request->user()->notify(new AppointmentNotification($request->));
            return redirect()->route('patient.dashboard')->with('success', 'Appointment Successfully');
        } else {
            return redirect()->route('make.appointment')->with('error', 'Appointment Failed');
        }
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
        Appointment::where('id', '=', $id)->delete();
        return redirect()->back()->with('success', 'Schedule Deleted Successfully');
    }

    public function reccomendation()
    {
        //make reccomendation based on the appointment data
        $appointment = Appointment::where('patient_id', '=', Auth::user()->id)->get();
        $doctor = User::where('role', '=', 'doctor')->get();
        $schedule = Schedule::get();
        return view('patient.reccomendation', compact('appointment', 'doctor', 'schedule'));
    }
}
