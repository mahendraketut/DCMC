<?php

namespace App\Http\Controllers\patient;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Invoice;
use App\Models\MedicalRecord;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoices = Invoice::where('patient_id', auth()->user()->id)->get();
        $medicalRecords = Invoice::where('patient_id', auth()->user()->id)->get();
        return view('patient.paymentPage', compact('invoices', 'medicalRecords'));
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
        $id = Crypt::decrypt($id);
        $invoice = Invoice::where('id', $id)->first();
        $appointment = Appointment::where('id', $invoice->appointment_id)->first();
        $medicalRecord = MedicalRecord::where('appointment_id', $appointment->id)->first();
        $transactions = Transaction::where('invoice_id', $invoice->id)->get();
        $age = Carbon::parse($appointment->patient->dob)->diff(Carbon::now())->format('%y years, %m months and %d days');

        // Set Merchant Server Key
        \Midtrans\Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => $invoice->invoice_id,
                'gross_amount' => $invoice->grand_total,
            ),

            'item_details' => array(),

            'customer_details' => array(
                'first_name' => $invoice->patient->name,
                'last_name' => '',
                'email' => $invoice->patient->email,
                'phone' => $invoice->patient->phone,
            ),
        );

        foreach ($transactions as $transaction) {
            $item = array(
                'id' => $transaction->id,
                'price' => $transaction->price,
                'quantity' => $transaction->quantity,
                'name' => $transaction->name,
            );
            array_push($params['item_details'], $item);
        }


        $snapToken = \Midtrans\Snap::getSnapToken($params);

        $clientKey = env('MIDTRANS_CLIENT_KEY');

        return view('patient.paymentDetail', compact('invoice', 'appointment', 'medicalRecord', 'age', 'transactions', 'snapToken', 'clientKey'));
    }

    public function payment_post(Request $request)
    {
        $json = json_decode($request->get('json'));
        $invoice = Invoice::where('invoice_id', $json->order_id)->first();
        $invoice->transaction_status = $json->transaction_status;
        $invoice->transaction_method = $json->payment_type;
        $invoice->transaction_id = $json->transaction_id;
        $invoice->payment_code = isset($json->payment_code) ? $json->payment_code : null;
        $invoice->pdf_link = isset($json->pdf_url) ? $json->pdf_url : null;
        $invoice->updated_at = Carbon::now();
        $invoice->save();

        return dd($invoice);
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
