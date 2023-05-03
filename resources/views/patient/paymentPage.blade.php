@extends('patient.navbar');
@section('title', 'Payment Page');
@section('css');
@endsection
@section('content')
    <div class="col-xl-12">
        <!--begin::Mixed Widget 2-->
        <div class="card card-xl-stretch mb-5 mb-xl-8">
            <div class="card-header pt-8">
                <div class="card-title">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bolder fs-3 mb-1">Invoices List</span>
                    </h3>
                </div>
            </div>

            <div class="card-body pt-5 pb-3">
                @foreach ($invoices as $invoice)
                    <div class="card card-dashed">
                        <div class="card-header">
                            <h3 class="card-title">#{{ $invoice->invoice_id }} </h3>
                            <div class="card-toolbar">
                                <a href="{{ route('patient.payment.detail', Crypt::encrypt($invoice->id)) }}"
                                    class="btn btn-light-primary me-3">
                                    <i class="bi bi-file-earmark-text"></i>
                                    View Invoice
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                {{-- <div class="col-md-6">
                                    <div class="col">
                                        <div class="fw-bolder fs-6 text-gray-800">{{ $invoice->patient->name }}</div>
                                        <div class="fw-bold text-gray-400">Patient Name</div>
                                    </div>
                                </div> --}}
                                <div class="col-md-3 mb-5">
                                    <div class="col">
                                        <div class="fw-bolder fs-6 text-gray-800">{{ $invoice->doctor->name }}</div>
                                        <div class="fw-bold text-gray-400">Doctor Name</div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-5">
                                    <div class="col">
                                        <div class="fw-bolder fs-6 text-gray-800">
                                            {{ $invoice->appointment->appointment_id }}
                                        </div>
                                        <div class="fw-bold text-gray-400">Appointment ID</div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-5">
                                    <div class="col">
                                        <div class="fw-bolder fs-6 text-gray-800">
                                            Rp {{ number_format($invoice->grand_total) }}
                                        </div>
                                        <div class="fw-bold text-gray-400">Total</div>
                                    </div>
                                </div>

                                <div class="col-md-3 mb-5">
                                    <div class="col">
                                        <div class="fw-bolder fs-6 text-gray-800">
                                            {{ $invoice->transaction_status }}
                                        </div>
                                        <div class="fw-bold text-gray-400">Status</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        {{-- <div class="card-footer">
                            Footer
                        </div> --}}
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
@section('js');
@endsection
