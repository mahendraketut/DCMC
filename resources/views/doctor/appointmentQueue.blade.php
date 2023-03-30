@extends('doctor.navbar')
@section('title', 'Appointment Queue')
@section('css')
@endsection
@section('content')


    <div class="col-xl-12">
        <!--begin::Mixed Widget 2-->
        <div class="card card-xl-stretch mb-5 mb-xl-8">
            <div class="card-header pt-8">
                <div class="card-title">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bolder fs-3 mb-1">Queues</span>
                    </h3>
                    {{-- <!--begin::Search-->
                    <div class="d-flex align-items-center position-relative my-1">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                        <span class="svg-icon svg-icon-1 position-absolute ms-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <input type="text" data-kt-filemanager-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="Search Files &amp; Folders" />
                    </div>
                    <!--end::Search--> --}}
                </div>
                <!--begin::Card toolbar-->
                <div class="card-toolbar">
                    <!--begin::Toolbar-->
                    <div class="d-flex justify-content-end" data-kt-filemanager-table-toolbar="base">
                        <!--begin::Add-->
                        <a href="{{route('pharmacist.medicines.add')}}" class="btn btn-light-primary me-3" data-bs-toggle="modal" data-bs-target="#modal_add_medicines">
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
                                    <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
                                </svg>
                            </span>
                            Registering Patient
                        </a>
                        <!--end::Add-->
                        <!--begin::Add customer-->
                        {{-- <a class="btn btn-light-success me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_upload">
                            <i class="fas fa-file-csv"></i>
                            Import Data from CSV
                        </a> --}}
                        {{-- <a href="" class="btn btn-light-success">
                            <i class="fas fa-file-download"></i>
                            Download CSV Template
                        </a> --}}
                        <!--end::Add customer-->
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Card toolbar-->
            </div>

            {{-- <div class="separator separator-dashed my-4"></div> --}}
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body pt-5 pb-3">
                <!--begin::Table-->
                <div class="table-responsive">
                    <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4" id="medicines_table">
                        <!--begin::Table head-->
                        <thead>
                            <tr class="fw-bolder text-muted bg-light">
                                <th class="min-w-50px">No</th>
                                <th class="min-w-100px">Appointment ID</th>
                                <th class="min-w-100px">Session</th>
                                <th class="min-w-150px">Patient ID</th>
                                <th class="min-w-300px">Patient Name</th>
                                <th class="min-w-150px">Clinic</th>
                                <th class="min-w-100px">Status</th>
                                <th class="min-w-20px">Action</th>
                            </tr>
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody>
                            @foreach ($appointments as $appointment)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$appointment->appointment_id}}</td>
                                    <td>{{$appointment->schedule->start_time}} - {{$appointment->schedule->end_time}}</td>
                                    <td>{{$appointment->patient->user_id}}</td>
                                    <td>{{$appointment->patient->name}}</td>
                                    <td>{{$appointment->clinic_type}}</td>
                                    <td>
                                        @if ($appointment->status == 'Pending')
                                            <span class="badge badge-light-dark">Pending</span>
                                        @elseif ($appointment->status == 'Approved')
                                            <span class="badge badge-light-info">Approved</span>
                                        @elseif ($appointment->status == 'Cancelled')
                                            <span class="badge badge-light-danger">Cancelled</span>
                                        @elseif ($appointment->status == 'completed')
                                            <span class="badge badge-light-success">Done</span>
                                        @elseif ($appointment->status == 'Waiting')
                                            <span class="badge badge-light-warning">Waiting</span>
                                        @elseif ($appointment->status == 'In Service')
                                            <span class="badge badge-light-primary">In Queue</span>
                                        @endif
                                    <td>
                                        <a href="{{url('/doctor.medicalrecord.addRecord/'.Crypt::encrypt($appointment->id))}}" class="btn btn-sm btn-light btn-active-success me-2" alt="Make Medical Record Data">
                                            <i class="fas fa-file-medical"></i>
                                        </a>
                                        <a href="{{url('/doctor.queue.delete/'.Crypt::encrypt($appointment->id))}}" class="btn btn-sm btn-light btn-active-danger" alt="Delete data">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <!--end::Table body-->
                    </table>
                    {{-- {{$dataTable->table()}} --}}
                </div>
                <!--end::Table-->

            </div>
        </div>
    </div>
@endsection
@push('scripts')

@endpush
