<?php

namespace App\Http\Controllers\patient;

use SNMP;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Schedule;
use App\Models\Specialist;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$appointment_patient = Appointment::where('patient_id', '=', Auth::user()->id)->get();
        $doctor = User::where('role', 'doctor')->get();
        $currentDay = Carbon::now()->format('l'); // get the current day
        $schedule = Schedule::orderByRaw("FIELD(day, 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday')")->get();
        $currentDay = strtolower(date('l')); // get the current day in lowercase
        $sortedSchedule = collect([]);
        foreach ($schedule as $day) {
            $dayValue = strtolower($day->day); // make sure the day value is also in lowercase
            if (strtotime($currentDay) > strtotime($dayValue)) {
                // the day value is past the current day
                // push the day to the back of the schedule array
                $sortedSchedule->push($day);
            } else {
                // the day value is not past the current day
                // add the day to the front of the schedule array
                $sortedSchedule->prepend($day);
            }
        }
        // convert the sortedSchedule collection back to an array
        $schedule = $sortedSchedule->all();
        $appointment = Appointment::get();
        $appointment_patient = Appointment::where('patient_id', '=', Auth::user()->id)->get();
        $specialist = Specialist::get();
        return view('patient.dashboard', compact('appointment', 'schedule', 'doctor', 'appointment_patient', 'specialist'));
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
    public function filter(Request $request)
    {
        $search = $request->filter;
        $doctor = User::where('role', 'doctor')->get();
        $doctorFilter = User::where('specialist_id', $search)->get();
        $schedule = collect();
        foreach ($doctorFilter as $value) {
            $filtered = Schedule::where('doctor_id', '=', $value->id)->get();
            $schedule = $schedule->merge($filtered);
        }
        $schedule = $schedule->all();
        $specialist = Specialist::get();
        $appointment_patient = Appointment::where('patient_id', '=', Auth::user()->id)->get();
        return view('patient.dashboard', compact('schedule', 'doctor', 'appointment_patient', 'specialist'));
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $doctor = User::where('name', 'like', '%' . $search . '%')->first();
        $schedule = Schedule::where('doctor_id', $doctor->id)->get();
        $appointment_patient = Appointment::where('patient_id', '=', Auth::user()->id)->get();
        $specialist = Specialist::get();
        return view('patient.dashboard', compact('schedule', 'doctor', 'appointment_patient', 'specialist'));
    }

    public function recommendationDoctor()
    {
        //recommendation where the patient can get the doctor data according to the date of the doctor schedule
    }
}
