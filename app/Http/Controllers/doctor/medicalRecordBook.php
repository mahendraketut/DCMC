<?php

namespace App\Http\Controllers\doctor;

use App\Models\Appointment;
use App\Models\medicalCategory;
use App\Models\MedicalRecord;
use App\Models\User;
use App\Models\Schedule;

use App\Http\Controllers\Controller;
use Brick\Math\Internal\Calculator;
use Carbon\Carbon;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class medicalRecordBook extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = User::where('role', '=', 'patient')->get();
        return view('doctor.medicalRecord', compact('patients'));
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
        $id = Crypt::decrypt($id);
        // $appointment = Appointment::where('id', '=', $id)->first();
        // $age = Carbon::parse($appointment->patient->dob)->diff(Carbon::now())->format('%y years, %m months and %d days');


        $medicalrecords = MedicalRecord::where('id', '=', $id)->first();
        $medicalcategories = medicalCategory::all();
        $age = Carbon::parse($medicalrecords->patient->dob)->diff(Carbon::now())->format('%y years, %m months and %d days');

        return view('doctor.detailMedicalRecord', compact('medicalrecords', 'medicalcategories', 'age'));
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
        // $request->validate([
        //     'patient_id' => 'required',
        //     'doctor_id' => 'required',
        //     'complaints' => 'required',
        //     'diagnosis' => 'required',
        //     'medical_category' => 'required',
        //     'notes' => 'required',
        //     'status' => 'required',
        // ]);

        $id = $request->id;

        MedicalRecord::where('id', '=', $id)->update([
            'patient_id' => $request->patient_id,
            'doctor_id' => $request->doctor_id,
            'complaints' => $request->complaints,
            'diagnosis' => $request->diagnosis,
            'medical_category_id' => $request->medical_category_id,
            'notes' => $request->notes,
            'status' => $request->status,
        ]);

        return redirect()->back()->with('success', 'Medical Record Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }

    public function makeNewRecord($id)
    {
        $id = Crypt::decrypt($id);
        $appointment = Appointment::where('id', '=', $id)->first();
        $age = Carbon::parse($appointment->patient->dob)->diff(Carbon::now())->format('%y years, %m months and %d days');
        $medicalrecords = MedicalRecord::where('patient_id', '=', $appointment->patient->id)->get();
        $countMR = MedicalRecord::where('patient_id', '=', $id)->count();
        $medicalCategories = medicalCategory::all();
        //change the appointment status to
        return view('doctor.addNewRecord', compact('appointment', 'age', 'medicalrecords', 'countMR', 'medicalCategories'));
        // return dd($appointment);
    }

    public function saveRecord(Request $request)
    {
        $request->validate([
            'complaints' => 'required',
            'diagnosis' => 'required',
            'medical_category' => 'required',
            'notes' => 'required',
            'status' => 'required',
        ]);

        $id = $request->appointment_id;

        $config = [
            'table' => 'medicines',
            'field' => 'medicine_id',
            'length' => 10,
            'prefix' => 'REC' . date('YmdHis')
        ];

        $record_id = IdGenerator::generate($config);

        $query = MedicalRecord::create([
            'record_id' => $record_id,
            'patient_id' => $request->patient_id,
            'doctor_id' => $request->doctor_id,
            'appointment_id' => $request->appointment_id,
            'date' => Carbon::now(),
            'complaints' => $request->complaints,
            'diagnosis' => $request->diagnosis,
            'medical_category_id' => $request->medical_category,
            'notes' => $request->notes,
            'status' => $request->status,
        ]);

        return redirect()->back()->with('success', 'Medical Record Added Successfully');
        // return dd($request->all());
    }

    //add new medical category
    public function addNewCategory(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $query = medicalCategory::create([
            'name' => $request->name,
            'category' => $request->category,
        ]);

        return redirect()->back()->with('success', 'Medical Category Added Successfully');
    }

    public function viewMedicalRecordDetail($id)
    {
        $id = Crypt::decrypt($id);
        $patient = User::where('id', '=', $id)->first();
        $medicalrecords = MedicalRecord::where('patient_id', '=', $id)->get();
        $medicalcategories = medicalCategory::all();
        $age = Carbon::parse($patient->dob)->diff(Carbon::now())->format('%y years, %m months and %d days');
        return view('doctor.viewMedicalRecordDetail', compact('patient', 'medicalrecords', 'medicalcategories', 'age'));
    }
}
