<?php

namespace App\Http\Controllers\patient;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class ViewDoctorController extends Controller
{
    public function index()
    {
        $doctors = User::where('role', 'doctor')->get();
        return view('patient.viewdoctor', compact('doctors'));
    }

    public function show($id)
    {
        $id = Crypt::decrypt($id);
        $doctor = User::where('id', $id)->first();
        $schedule = Schedule::where('doctor_id', $id)->get();
        return view('patient.viewdetaildoctor', compact('doctor', 'schedule'));
    }

    public function store(Request $request)
    {
        $max_patient = Schedule::where('id', $request->day)->first();
        if ($max_patient->remaining_patient == 0) {
            return redirect()->route('patient.view.detail.doctor', Crypt::encrypt($request->doctor_id))->with('error', 'Schedule Already Full');
        } else {
            $query = DB::table('schedule')->where('id', $request->day)->update([
                'remaining_patient' => $max_patient->remaining_patient - 1,
            ]);
        }

        $validatedData = $request->validate([
            'day' => 'required',
            // 'time' => 'required',
            // 'time_end' => 'required',
        ]);

        $query = DB::table('appointments')->insert([
            'appointment_id' => 'AP' . rand(100000, 999999),
            'schedule_id' => $request->day,
            'patient_id' => Auth::user()->id,
            'doctor_id' => $request->doctor_id,
            'appointment_number' => $max_patient->max_patient + 1 - $max_patient->remaining_patient,
            'status' => 'Pending',
            'created_at' => Carbon::now(),
        ]);
        if ($query) {
            return redirect()->route('patient.dashboard')->with('success', 'Appointment Successfully');
        } else {
            return redirect()->route('patient.view.detail.doctor')->with('error', 'Appointment Failed');
        }
    }
}