<?php

namespace App\Http\Controllers\administrator;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Invoice;
use App\Http\Requests\StoreInvoiceRequest;
use App\Http\Requests\UpdateInvoiceRequest;
use App\Models\MedicalRecord;
use App\Models\Transaction;
use App\Services\Midtrans\CreateSnapTokenService;
use PDF;
use Carbon\Carbon;
use Illuminate\Support\Facades\Crypt;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoices = Invoice::all()->sortByDesc('created_at');
        $medicalRecords = Invoice::all()->sortByDesc('created_at');
        return view('administrator.invoiceList', compact('invoices', 'medicalRecords'));
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
     * @param  \App\Http\Requests\StoreInvoiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInvoiceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Invoice  $invoice
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

        // Set your Merchant Server Key
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

        return view('administrator.invoiceDetail', compact('invoice', 'appointment', 'medicalRecord', 'age', 'transactions', 'snapToken', 'clientKey'));
    }

    public function printPDF($id)
    {
        $id = Crypt::decrypt($id);
        $invoice = Invoice::where('id', $id)->first();
        $appointment = Appointment::where('id', $invoice->appointment_id)->first();
        $medicalRecord = MedicalRecord::where('appointment_id', $appointment->id)->first();
        $transactions = Transaction::where('invoice_id', $invoice->id)->get();
        $age = Carbon::parse($appointment->patient->dob)->diff(Carbon::now())->format('%y years, %m months and %d days');

        // Set your Merchant Server Key
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

        $pdf = PDF::loadView('administrator.invoiceDetail-PDF', compact('invoice', 'appointment', 'medicalRecord', 'age', 'transactions', 'snapToken', 'clientKey'))->setOptions(['defaultFont' => 'sans-serif']);

        return $pdf->stream('invoice.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function edit(Invoice $invoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInvoiceRequest  $request
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInvoiceRequest $request, Invoice $invoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invoice $invoice)
    {
        //
    }
}
