<?php

namespace App\Http\Controllers\administrator;

use PDF;
use App\Models\User;
use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Models\MedicalRecord;
use App\Http\Controllers\Controller;

class MonthlyReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function appointmentReport()
    {
        //
        $user = User::get();
        $date = \Carbon\Carbon::today()->subDays(30);
        $new_user = User::where('created_at', '>=', $date)->get();
        $employee = User::where('role', '<>', 'patient')->get();
        $appointment = Appointment::get();
        $appointmentData = MedicalRecord::get();
        return view('administrator.monthlyReport', compact('user', 'new_user', 'employee', 'appointment', 'appointmentData'));
    }

    public function appointmentReportPrintPDF()
    {
        $currentDate = \Carbon\Carbon::now()->format('d-m-Y');
        $appointmentData = MedicalRecord::get();

        $pdf = PDF::loadview('administrator.appointmentReport-pdf', compact('currentDate', 'appointmentData'))->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download('monthly_report.pdf');
    }

    public function userReport()
    {
        //
        $user = User::get();
        $date = \Carbon\Carbon::today()->subDays(30);
        $new_user = User::where('created_at', '>=', $date)->get();
        $employee = User::where('role', '<>', 'patient')->get();
        $appointment = Appointment::get();
        return view('administrator.monthlyReport', compact('user', 'new_user', 'employee', 'appointment', 'appointmentData'));
    }

    public function userReportPrintPDF()
    {
        $currentDate = \Carbon\Carbon::now()->format('d-m-Y');
        $user = User::get();

        $pdf = PDF::loadview('administrator.userReport-pdf', compact('currentDate', 'user'))->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download('monthly_report.pdf');
    }
}
