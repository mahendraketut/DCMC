<?php

namespace App\Http\Controllers\doctor;

use App\Models\Invoice;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Medicine;
use App\Models\Schedule;
use App\Models\Appointment;

use App\Models\Prescription;
use Illuminate\Http\Request;
use App\Models\MedicalRecord;
use App\Models\medicalCategory;
use Illuminate\Support\Facades\DB;
use Brick\Math\Internal\Calculator;
use App\Http\Controllers\Controller;
use App\Models\Medicines;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Haruncpi\LaravelIdGenerator\IdGenerator;

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
        //change the appointment status to Under Examination
        Appointment::where('id', '=', $id)->update([
            'status' => 'Under Examination',
        ]);
        $medicine = Medicines::get();
        $prescription = Prescription::where('appointment_id', '=', $appointment->id)->get();
        $services = Service::all();
        return view('doctor.addNewRecord', compact('appointment', 'age', 'medicalrecords', 'countMR', 'medicalCategories', 'medicine', 'prescription', 'services'));
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
        $prescription = Prescription::where('patient_id', '=', $id)->get();
        return view('doctor.viewMedicalRecordDetail', compact('patient', 'medicalrecords', 'medicalcategories', 'age', 'prescription'));
    }

    public function recordPrescription(Request $request)
    {
        $validatedData = $request->validate([
            'number_medicine' => 'required',
            'dosage' => 'required',
        ]);

        $query = DB::table('prescriptions')->insert([
            'appointment_id' => $request->appointment_id,
            'medicine_id' => $request->medicine,
            'patient_id' => $request->patient_id,
            'doctor_id' => $request->doctor_id,
            'number_medicine' => $request->number_medicine,
            'dosage' => $request->dosage,
            'status' => 'New',
            'created_at' => Carbon::now(),
        ]);
        if ($query) {
            return redirect()->back()->with('success', 'Prescription Successfully');
        } else {
            return redirect()->back()->with('error', 'Prescription Failed');
        }
    }

    public function deletePrescription($id)
    {
        Prescription::where('id', '=', $id)->delete();
        return redirect()->back()->with('success', 'Prescription Deleted Successfully');
    }

    public function requestPrescription($id)
    {
        $prescription = Prescription::where('id', '=', $id)->first();
        $prescription->status = 'Request';
        $prescription->save();
        return redirect()->back()->with('success', 'Prescription Requested Successfully');
    }

    //make function to add new transaction with comparing to appointment id, if appointment id is same, then add new transaction
    public function addTransaction(Request $request)
    {
        $validatedData = $request->validate([
            'service' => 'required',
        ]);

        $appointment = Appointment::where('id', '=', $request->appointment_id)->first();
        $invoice = Invoice::where('appointment_id', '=', $request->appointment_id)->first();
        $service = Service::where('id', '=', $request->service)->first();

        $query = DB::table('transactions')->insert([
            'invoice_id' => $invoice->id,
            'name' => $service->service_name,
            'quantity' => 1,
            'price' => $service->price,
            'total' => $service->price,
            'discount' => 0,
            'grand_total' => $service->price,
            'created_at' => Carbon::now(),
        ]);

        Invoice::where('id', '=', $invoice->id)->update([
            'total' => $invoice->total + $service->price,
            'grand_total' => $invoice->grand_total + $service->price,
            'discount' => 0,
            'notes' => $invoice->notes . ', ' . $request->notes,
        ]);
        if ($query) {
            return redirect()->back()->with('success', 'Transaction Successfully');
        } else {
            return redirect()->back()->with('error', 'Transaction Failed');
        }
    }
}
