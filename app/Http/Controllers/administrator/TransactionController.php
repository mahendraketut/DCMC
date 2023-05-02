<?php

namespace App\Http\Controllers\administrator;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Service;
use App\Models\Transaction;
use App\Http\Requests\StoreTransactionRequest;
use App\Http\Requests\UpdateTransactionRequest;
use App\Models\Invoice;
use Illuminate\Support\Facades\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        // // $serviceChoosen = $request->service;
        // $service = Service::where('id', $request->service)->first();
        // $appointment = Appointment::where('id', $request->appointment_id)->first();
        // $invoice = Invoice::where('appointment_id', $appointment->id)->first();

        // $transaction = Transaction::create([
        //     'invoice_id' => $invoice->id,
        //     'name' => $service->name,
        //     'price' => $service->price,
        //     'qty' => 1,
        //     'total' => $service->price,
        //     'discount' => 0,
        //     'grand_total' => $service->price,
        //     'notes' => $request->notes,
        // ]);

        // Invoice::where('id', $invoice->id)->update([
        //     'total' => $invoice->total + $transaction->total,
        //     'grand_total' => $invoice->grand_total + $transaction->grand_total,
        //     'notes' => $request->notes . ' + ' . $invoice->notes,
        // ]);


        return dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTransactionRequest  $request
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTransactionRequest $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
