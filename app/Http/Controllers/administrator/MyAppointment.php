<?php

namespace App\Http\Controllers\administrator;

use App\Models\Invoice;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Schedule;
use App\Models\Appointment;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Transaction;
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

        $config = [
            'table' => 'invoices',
            'field' => 'invoice_id',
            'length' => 10,
            'prefix' => 'INV' . date('Ymd') . rand(100000, 999999)
        ];

        $invoiceId = IdGenerator::generate($config);

        //get admission fee from service table
        $service = Service::where('service_name', 'Admission Fee')->first();
        $appointment = Appointment::where('id', $id)->first();
        if ($appointment->status == 'Pending') {
            DB::table('invoices')->insert([
                'invoice_id' => $invoiceId,
                'appointment_id' => $id,
                'patient_id' => $appointment->patient_id,
                'doctor_id' => $appointment->doctor_id,
                'total' => $service->price,
                'discount' => 0,
                'grand_total' => $service->price,
                'notes' => 'Admission Fee',
                'payment_method' => 'Cash',
                'payment_status' => 'Unpaid',
                'created_at' => Carbon::now(),
            ]);

            $invoice = Invoice::where('invoice_id', $invoiceId)->first();

            DB::table('transactions')->insert([
                'invoice_id' => $invoice->id,
                'name' => $service->service_name,
                'price' => $service->price,
                'quantity' => 1,
                'total' => $service->price,
                'discount' => 0,
                'grand_total' => $service->price,
                'notes' => 'Admission Fee',
                'created_at' => Carbon::now(),
            ]);

            Appointment::where('id', '=', $id)->update([
                'status' => 'Waiting Call',
            ]);
        }


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
