<?php

namespace App\Http\Controllers\patient;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Schedule;
use App\Models\Appointment;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use App\Notifications\AppointmentNotification;

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

    // public function store(Request $request)
    // {

    //     $validatedData = $request->validate([
    //         'day' => 'required',
    //         // 'time' => 'required',
    //         // 'time_end' => 'required',
    //     ]);

    //     $query = DB::table('appointments')->insert([
    //         'appointment_id' => 'AP' . rand(100000, 999999),
    //         'schedule_id' => $request->day,
    //         'patient_id' => Auth::user()->id,
    //         'doctor_id' => $request->doctor_id,
    //         'status' => 'Pending',
    //         'created_at' => Carbon::now(),
    //     ]);

    //     if ($query) {
    //         $request->user()->notify(new AppointmentNotification($request->doctor_id));
    //         return redirect()->route('patient.dashboard')->with('success', 'Appointment Successfully');
    //     } else {
    //         return redirect()->route('patient.view.detail.doctor')->with('error', 'Appointment Failed');
    //     }
    // }

    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'day' => 'required',
        //     'time' => 'required',
        //     'time_end' => 'required',
        // ]);

        $config = [
            'table' => 'appointments',
            'field' => 'appointment_id',
            'length' => 8,
            'prefix' => 'AP-REG' . rand(100000, 999999),
        ];

        $appointmentid = IdGenerator::generate($config);

        //create the appointment
        $appointment = new Appointment(
            [
                'appointment_id' => $appointmentid,
                'schedule_id' => $request->day,
                'patient_id' => Auth::user()->id,
                'doctor_id' => $request->doctor_id,
                'status' => 'Pending',
                'created_at' => Carbon::now(),
            ]
        );

        //save the appointment
        $appointment->save();

        //notify the patient
        $request->user()->notify(new AppointmentNotification($appointment));

        return redirect()->route('patient.dashboard')->with('success', 'Appointment Successfully Created');
    }
}