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
        
        $validatedData = $request->validate([
            'day' => 'required',
            // 'time' => 'required',
            // 'time_end' => 'required',
        ]);

        $query = DB::table('appointments')->insert([
            'schedule_id' => $request->day,
            'patient_id' => Auth::user()->id,
            'admin_id' => $request->doctor_id,
            'day' => '',
            'start_time' => '',
            'end_time' => '',
            'status' => 'pending',
            'created_at' => Carbon::now(),
        ]);
        if ($query) {
            return redirect()->route('patient.dashboard')->with('success', 'Appointment Successfully');
        } else {
            return redirect()->route('patient.view.detail.doctor')->with('error', 'Appointment Failed');
        }
    }
}