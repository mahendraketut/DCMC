<?php

namespace App\Http\Controllers\administrator;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Schedule;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MyAppointment extends Controller
{
    public function index()
    {
        // $doctor = User::where('id', $id)->first();
        // $schedule = Schedule::where('doctor_id', $id)->get();
        $patient = User::where('role', 'patient')->get();
        $schedule = Schedule::get();
        $appointment = Appointment::get();
        return view('administrator.my-appointment', compact('appointment', 'patient', 'schedule'));
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
        $max_patient = Schedule::where('id', $request->day)->first();
        if ($max_patient->remaining_patient == 0) {
            return redirect()->route('patient.view.detail.doctor')->with('error', 'Schedule Already Full');
        } else {
            $query = DB::table('schedule')->where('id', $request->day)->update([
                'max_patient' => $max_patient->remaining_patient - 1,
            ]);
        }
        //
        $validatedData = $request->validate([
            'day' => 'required',
            // 'time' => 'required',
            // 'time_end' => 'required',
        ]);

        $query = DB::table('appointments')->insert([
            'appointment_id' => 'AP' . rand(100000, 999999),
            'schedule_id' => $request->day,
            'patient_id' => $request->patient,
            'doctor_id' => $request->doctor,
            'appointment_number' => $max_patient->max_patient - $max_patient->remaining_patient,
            'status' => 'Pending',
            'created_at' => Carbon::now(),
        ]);
        if ($query) {
            return redirect()->route('patient.dashboard')->with('success', 'Appointment Successfully');
        } else {
            return redirect()->route('patient.view.detail.doctor')->with('error', 'Appointment Failed');
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
        $id = $request->id;

        Appointment::where('id', '=', $id)->update([
            'status' => 'Waiting Call',
        ]);
        return redirect()->route('admin.appointment')->with('success', 'Appointment Update Successfully');
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
        return redirect()->back()->with('success', 'Appointment Deleted Successfully');
    }
}
