@extends('administrator.navbar')
@section('title', 'Invoice Detail')
@section('css')

@endsection
@section('content')
    <div class="col-xl-12">
        <!--begin::Mixed Widget 2-->
        <div class="card card-xl-stretch mb-5 mb-xl-8">
            <div class="card-header pt-8">
                <div class="card-title">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bolder fs-3 mb-1">INVOICE</span>
                    </h3>
                </div>
                <!--begin::Card toolbar-->
                <div class="card-toolbar">
                    <!--begin::Toolbar-->
                    <div class="d-flex justify-content-end" data-kt-filemanager-table-toolbar="base">
                        <!--begin::Add-->
                        {{-- @if ($invoice->transaction_status == 'unpaid')
                            <button class="btn btn-light-primary me-3" id="pay-button">
                                <i class="fas fa-money-bill-wave"></i>
                                Pay Now
                            </button>
                        @else
                            <a href="" class="btn btn-light-primary me-3" disabled>
                                <i class="fas fa-money-bill-wave"></i>
                                Already Paid
                            </a>
                        @endif --}}
                        <!--end::Add-->
                        <a class="btn btn-light-primary me-3"
                            href="{{ route('admin.invoice.printPDF', Crypt::encrypt($invoice->id)) }}" target="_blank"">
                            <i class="fas fa-print"></i>
                            Print Invoice
                        </a>
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Card toolbar-->
            </div>

            <div class="card-body pt-5 pb-3">
                <div class="row">
                    <div class="col-md-6">
                        <div class="col mb-5">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="fw-bold text-gray-800">Invoice ID</div>
                                </div>
                                <div class="col-md-7">
                                    <div class="fw-bold fs-6 text-gray-800">: #{{ $invoice->invoice_id }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col mb-5">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="fw-bold text-gray-800">Appointment ID</div>
                                </div>
                                <div class="col-md-7">
                                    <div class="fw-bold fs-6 text-gray-800">: #{{ $invoice->invoice_id }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!--begin::Col-->
                    <div class="col-md-6">
                        <div class="col mb-5">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="fw-bold text-gray-800">Date of admission</div>
                                </div>
                                <div class="col-md-7">
                                    <div class="fw-bold fs-6 text-gray-800">:
                                        @if ($invoice->created_at != null)
                                            {{ $invoice->created_at->format('d-M-Y h:m:s') }}
                                        @else
                                            -
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col mb-5">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="fw-bold text-gray-800">Date of discharge</div>
                                </div>
                                <div class="col-md-7">
                                    <div class="fw-bold fs-6 text-gray-800">:
                                        @if ($invoice->updated_at == null)
                                            -
                                        @else
                                            {{ $invoice->updated_at->format('d-M-Y h:m:s') }}
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="col mb-5">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="fw-bold text-gray-800">Patient ID</div>
                                </div>
                                <div class="col-md-7">
                                    <div class="fw-bold fs-6 text-gray-800">: #{{ $invoice->patient->user_id }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col mb-5">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="fw-bold text-gray-800">Invoice Status</div>
                                </div>
                                <div class="col-md-7">
                                    <div class="fw-bold fs-6
                                    text-gray-800">:
                                        {{ $invoice->transaction_status }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="col mb-5">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="fw-bold text-gray-800">Patient Name</div>
                                </div>
                                <div class="col-md-7">
                                    <div class="fw-bold fs-6 text-gray-800">: {{ $invoice->patient->name }},
                                        {{ $invoice->patient->gender }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col mb-5">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="fw-bold text-gray-800">Payment</div>
                                </div>
                                <div class="col-md-7">
                                    <div class="fw-bold fs-6 text-gray-800">: {{ $invoice->transaction_method }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!--begin::Col-->
                    <div class="col-md-6">
                        <div class="col mb-5">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="fw-bold text-gray-800">Date of Birth</div>
                                </div>
                                <div class="col-md-7">
                                    <div class="fw-bold fs-6 text-gray-800">:
                                        {{ \Carbon\Carbon::createFromFormat('Y-m-d', $invoice->patient->dob)->format('d M Y') }}
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-6">
                        <div class="col mb-5">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="fw-bold text-gray-800">Age</div>
                                </div>
                                <div class="col-md-7">
                                    <div class="fw-bold fs-6
                                    text-gray-800">:
                                        {{ $age }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Col-->
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="col mb-5">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="fw-bold text-gray-800">Address</div>
                                </div>
                                <div class="col-md-7">
                                    <div class="fw-bold fs-6 text-gray-800">:
                                        {{ $invoice->patient->address }}, {{ $invoice->patient->city }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4 mt-5">
                    <thead>
                        <tr class="fw-bolder text-active bg-light">
                            <th class="min-w-50px">Date</th>
                            <th class="min-w-75px">Item</th>
                            <th class="min-w-50px"></th>
                            <th class="min-w-20px">Qty</th>
                            <th class="min-w-75px">Price</th>
                            <th class="min-w-75px">Discount</th>
                            <th class="min-w-75px">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transactions as $transaction)
                            <tr>
                                <td>{{ $transaction->created_at->format('d-M-Y h:m:s') }}</td>
                                <td>{{ $transaction->name }}</td>
                                @if ($transaction->name == 'Specialist Consultation')
                                    <td>Doctor: {{ $invoice->doctor->name }}</td>
                                @else
                                    <td></td>
                                @endif
                                <td>{{ $transaction->quantity }}</td>
                                <td>Rp {{ number_format($transaction->price) }}</td>
                                <td>Rp {{ number_format($transaction->discount) }}</td>
                                <td>Rp {{ number_format($transaction->grand_total) }}</td>
                            </tr>
                        @endforeach
                        <tr class="fw-bolder text-active bg-light">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="fw-bolder">Sub Total</td>
                            <td></td>
                            <td class="fw-bolder">: Rp {{ number_format($invoice->total) }}</td>
                        </tr>
                        <tr class="fw-bolder text-active bg-light">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="fw-bolder">Discount</td>
                            <td></td>
                            <td class="fw-bolder">: Rp {{ number_format($invoice->discount) }}</td>
                        </tr>
                        <tr class="fw-bolder text-active bg-light">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="fw-bolder">Grand Total</td>
                            <td></td>
                            <td class="fw-bolder">: Rp {{ number_format($invoice->grand_total) }}</td>
                    </tbody>
                </table>
            </div>
            <!--end::Mixed Widget 2-->
        </div>
    </div>
@endsection
@section('js')

@endsection
