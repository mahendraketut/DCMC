<?php

namespace App\Http\Controllers\doctor;


use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class appointmentQueue extends Controller
{
    public function index()
    {
        //appointments where doctor_id is equal to the logged in user's id and sort by appointment_date and appointment_time in ascending order and make emergency appointments appear first
        $appointments = Appointment::where('doctor_id', auth()->user()->id)->orderBy('clinic_type', 'desc')->orderBy('appointment_date', 'asc')->orderBy('appointment_time', 'asc')->get();
        // $appointments = Appointment::where('doctor_id', auth()->user()->id)->orderBy('appointment_date', 'asc')->orderBy('appointment_time', 'asc')->get();
        // $appointments = Appointment::where('doctor_id', auth()->user()->id)->get();
        return view('doctor.appointmentQueue', compact('appointments'));
    }

    public function show($id)
    {
        $appointment = Appointment::find($id);
        return view('doctor.medicalRecord', compact('appointment'));
    }

    public function update(Request $request, $id)
    {
        $appointment = Appointment::find($id);
        $appointment->status = $request->status;
        $appointment->save();
        return redirect()->route('doctor.appointmentQueue.index');
    }

    public function destroy($id)
    {
        $id = Crypt::decrypt($id);
        Appointment::where('id', '=', $id)->delete();
        return redirect()->back()->with('success', 'Appointment Deleted Successfully');
    }
}
