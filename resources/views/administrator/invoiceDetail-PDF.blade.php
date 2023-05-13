<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 9pt;
        }

        .table-item {
            border-collapse: collapse;
        }

        td {
            padding: 5px;
        }

        th {
            background-color: #eee;
            padding: 10px;
        }

        td,
        /* th {
            border-top: 0.5px solid black;
            border-bottom: 0.5px solid black;
        } */
        /* .table-bordered {
            border-top: 0.5px solid black;
            border-bottom: 0.5px solid black;
        } */

        .subtotal,
        .discount,
        .grand-total {
            border-top: none;
            border-bottom: none;
        }
    </style>
</head>

<body>
    <div class="col-xl-12">
        <!--begin::Mixed Widget 2-->
        <div class="card card-xl-stretch mb-5 mb-xl-8">


            <div class="card-body pt-5 pb-3">
                <table>
                    <tbody>
                        <tr>
                            <td>
                                <h2 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bolder fs-3 mb-1">JDC DENTAL CLINIC</span>
                                </h2>
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bolder fs-3 mb-1">INVOICE</span>
                                </h3>
                            </td>
                        </tr>
                </table>
                <table style="width: 100%; margin-bottom: 20px">
                    <tbody>
                        <tr>
                            <td style="width: 20%">Invoice ID</td>
                            <td style="width: 30%">: #{{ $invoice->invoice_id }}</td>
                            <td style="width: 20%">Appointmment ID</td>
                            <td style="width: 30%">: #{{ $invoice->appointment->appointment_id }}</td>
                        </tr>
                        <tr>
                            <td style="width: 20%">Date of Admission</td>
                            <td style="width: 30%">: {{ $invoice->created_at->format('d-M-Y h:m:s') }}</td>
                            <td style="width: 20%">Date of discharge</td>
                            <td style="width: 30%">: {{ $invoice->updated_at->format('d-M-Y h:m:s') }}</td>
                        </tr>
                        <tr>
                            <td style="width: 20%">Patient ID</td>
                            <td style="width: 30%">: #{{ $invoice->patient->user_id }}</td>
                            <td style="width: 20%">Invoice Status</td>
                            <td style="width: 30%">: {{ $invoice->transaction_status }}</td>
                        </tr>
                        <tr>
                            <td style="width: 20%">Patient Name</td>
                            <td style="width: 30%">: {{ $invoice->patient->name }},
                                {{ $invoice->patient->gender }}</td>
                            <td style="width: 20%">Payment Method</td>
                            <td style="width: 30%">: {{ $invoice->transaction_method }}</td>
                        </tr>
                        <tr>
                            <td style="width: 20%">Date of Birth</td>
                            <td style="width: 30%">
                                :
                                {{ \Carbon\Carbon::createFromFormat('Y-m-d', $invoice->patient->dob)->format('d M Y') }}
                            </td>
                            <td style="width: 20%">Age</td>
                            <td style="width: 30%">: {{ $age }}</td>
                        </tr>
                        <tr>
                            <td style="width: 20%">Address </td>
                            <td style="width: 30%">: {{ $invoice->patient->address }},
                                {{ $invoice->patient->city }}
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table class="table-item">
                    <thead>
                        <tr class="fw-bolder text-active bg-light"
                            style="border-bottom: 1px solid black;border-top: 1px solid black">
                            <th class="min-w-50pxtable-bordered">Date</th>
                            <th class="min-w-75px table-bordered">Item</th>
                            <th class="min-w-20px table-bordered">Qty</th>
                            <th class="min-w-75px table-bordered">Price</th>
                            <th class="min-w-75px table-bordered">Discount</th>
                            <th class="min-w-75px table-bordered">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transactions as $transaction)
                            <tr>
                                <td style="min-width: 100px">
                                    {{ $transaction->created_at->format('d-M-Y h:m:s') }}
                                </td>
                                <td style="min-width: 190px">
                                    {{ $transaction->name }}
                                    <br>
                                    @if ($transaction->name == 'Specialist Consultation')
                                        Doctor: {{ $invoice->doctor->name }}
                                    @endif
                                </td>
                                <td style="min-width: 25px; text-align: center">
                                    {{ $transaction->quantity }}</td>
                                <td style="min-width: 100px; text-align: left">Rp
                                    {{ number_format($transaction->price) }}</td>
                                <td style="min-width: 100px; text-align: left">Rp
                                    {{ number_format($transaction->discount) }}</td>
                                <td style="min-width: 100px; text-align: left">Rp
                                    {{ number_format($transaction->grand_total) }}</td>
                            </tr>
                        @endforeach
                        <tr class="subtotal" style="border-top: 1px solid black;">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="fw-bolder">Sub Total</td>
                            <td class="fw-bolder">Rp {{ number_format($invoice->total) }}</td>
                        </tr>
                        <tr class="discount">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="fw-bolder">Discount</td>
                            <td class="fw-bolder">Rp {{ number_format($invoice->discount) }}</td>
                        </tr>
                        <tr class="grand-total" style="font-weight: bold">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="fw-bolder">Grand Total</td>
                            <td class="fw-bolder">Rp {{ number_format($invoice->grand_total) }}</td>
                        </tr>
                    </tbody>
                </table>
                <table style="width: 100%; margin-top: 50px">
                    <tr>
                        <td>
                            <p style="text-align: center">
                                Patient<br><br><br><br><br>{{ $invoice->patient->name }}
                        </td>
                        <td>
                            <p style="text-align: center">
                                Clinic Administrator<br><br><br><br><br>{{ Auth::user()->name }}
                            </p>
                        </td>
                    </tr>
                </table>
            </div>
            <!--end::Mixed Widget 2-->
        </div>
    </div>
</body>

</html>
