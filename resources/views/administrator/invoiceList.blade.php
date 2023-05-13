@extends('administrator.navbar')
@section('title', 'Invoice Lists')
@section('css')
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

                <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                    <!--begin::Table head-->
                    <thead>
                        <tr class="fw-bold fs-6 text-gray-800 border-bottom border-gray-300">
                            <th class="ps-4 min-w-20px text-center">#</th>
                            <th class="ps-4 min-w-100px text-center">Invoice ID</th>
                            <th class="ps-4 min-w-50px text-center">Patient Name</th>
                            <th class="ps-4 min-w-50px text-center">Doctor Name</th>
                            <th class="ps-4 min-w-50px text-center">Total</th>
                            <th class="ps-4 min-w-50px text-center">Status</th>
                            <th class="ps-4 min-w-50px text-center">Action</th>
                        </tr>
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody>
                        @if ($invoices->count() == 0)
                            <th class="ps-4 min-w-20px text-center" colspan="6">No invoices data</th>
                        @else
                            @foreach ($invoices as $invoice)
                                <tr>
                                    <td class="ps-4 min-w-20px text-center">{{ $loop->iteration }}</td>
                                    <td class="ps-4 min-w-200px text-center">{{ $invoice->invoice_id }}</td>
                                    <td class="ps-4 min-w-100px text-center">{{ $invoice->patient->name }}</td>
                                    <td class="ps-4 min-w-100px text-center">{{ $invoice->doctor->name }}</td>
                                    <td class="ps-4 min-w-100px text-center">Rp {{ number_format($invoice->grand_total) }}
                                    </td>
                                    <td class="ps-4 min-w-100px text-center">{{ $invoice->transaction_status }}</td>
                                    <td class="ps-4 min-w-20px text-center">
                                        <a href="{{ route('admin.invoice.detail', Crypt::encrypt($invoice->id)) }}"
                                            class="btn btn-primary">View</a>
                                        <a href="{{ route('admin.invoice.delete', Crypt::encrypt($invoice->id)) }}"
                                            class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                    <!--end::Table body-->
                </table>
            </div>




        </div>
    </div>
@endsection
@section('js')
@endsection
