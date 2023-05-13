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
    public function index()
    {
        //
        $user = User::get();
        $date = \Carbon\Carbon::today()->subDays(30);
        $new_user = User::where('created_at','>=',$date)->get();
        $employee = User::where('role', '<>', 'patient')->get();
        $appointment = Appointment::get();
        $appointmentData = MedicalRecord::get();
        return view('administrator.monthlyReport',compact('user','new_user','employee','appointment', 'appointmentData'));
    }

    public function printPDF() {
        $currentDate = \Carbon\Carbon::now()->format('d-m-Y');
        $appointmentData = MedicalRecord::get();
 
    	$pdf = PDF::loadview('administrator.monthlyReport-pdf',compact('currentDate', 'appointmentData'))->setOptions(['defaultFont' => 'sans-serif']);
    	return $pdf->download('monthly_report.pdf');
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
}
