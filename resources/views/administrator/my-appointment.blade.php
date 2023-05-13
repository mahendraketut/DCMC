@extends('administrator.navbar')
@section('title', 'Dashboard')
@section('css')

@endsection

@section('content')

    <!--begin::Col-->
    <div class="col-xl-12">
        <!--begin::Tables Widget 9-->
        <div class="card card-xl-stretch mb-5 mb-xl-8">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1">Appointment Table</span>
                </h3>
                <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover"
                    title="Click to make a new appointment">
                    <a href="" class="btn btn-sm btn-light btn-active-primary" data-bs-toggle="modal"
                        data-bs-target="#modal_add_schedule">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                        <span class="svg-icon svg-icon-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2"
                                    rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
                                <rect x="4.36396" y="11.364" width="16" height="2" rx="1"
                                    fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->Make an Appointment
                    </a>
                </div>
            </div>
            <div class="modal fade" id="modal_add_schedule" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header" id="modal_add_schedule_header">
                            <!--begin::Modal title-->
                            <h2 class="fw-bolder">Appointment Details</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                            <!--begin::Form-->
                            <form class="form" id="modal_add_schedule_form"
                                action="{{ route('admin.appointment.store') }}" method="POST">
                                @csrf
                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold form-label mb-2">
                                        <span class="required">Patient</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                            title="select the patient name"></i>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div class="col fv-row">
                                        <select id="patient" name="patient"
                                            class="form-select form-select-solid form-select-lg fw-bold form-control @error('patient') is-invalid @enderror">
                                            <option value="">Select patient...</option>
                                            @foreach ($patient as $patient)
                                                <option value="{{ $patient->id }}">{{ $patient->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('patient')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <!--end::Input-->
                                </div>
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold form-label mb-2">
                                        <span class="required">Doctor Name</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                            title="select the doctor name"></i>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div class="col fv-row">
                                        <select id="doctor" name="doctor"
                                            class="form-select form-select-solid form-select-lg fw-bold form-control @error('doctor') is-invalid @enderror">
                                            <option value="">Select doctor...</option>
                                            @foreach ($schedule as $day)
                                                <option value="{{ $day->doctor_id }}">{{ $day->user->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('doctor')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <!--end::Input-->
                                </div>
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold form-label mb-2">
                                        <span class="required">Day</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                            title="Specify the day"></i>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div class="col fv-row">
                                        <select id="day" name="day"
                                            class="form-select form-select-solid form-select-lg fw-bold form-control @error('day') is-invalid @enderror">
                                            <option value="">Select Day...</option>
                                            @foreach ($schedule as $day)
                                                <option value="{{ $day->id }}">{{ $day->day }} -
                                                    {{ $day->start_time }} - {{ $day->end_time }}</option>
                                            @endforeach
                                        </select>
                                        @error('day')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <!--end::Input-->
                                </div>

                                <div class="fv-row-mb-10">
                                    <label class="fs-6 fw-bold form-label mb-2">
                                        <span class="required">Clinic type</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                            title="Specify the clinic type (Emergency or Reservaton)"></i>
                                    </label>
                                    <div class="col fv-row">
                                        <select id="clinic_type" name="clinic_type"
                                            class="form-select form-select-solid form-select-lg fw-bold form-control @error('clinic_type') is-invalid @enderror">
                                            <option value="">Select Clinic Type...</option>
                                            <option value="Emergency">Emergency</option>
                                            <option value="Reservation">Reservation</option>
                                        </select>
                                        @error('clinic_type')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        {{-- <input type="text" class="form-control form-control-lg form-control-solid"
                                            name="clinic_type" placeholder="Clinic Type" value="{{ old('clinic_type') }}" /> --}}
                                    </div>
                                </div>
                                {{-- <input type="hidden" name="doctor_id" value="{{$doctor->id}}"> --}}
                                <!--end::Input group-->

                                <!--begin::Actions-->
                                <div class="text-center pt-15">
                                    <button type="submit" id="modal_add_schedule_submit" class="btn btn-primary">
                                        <span class="indicator-label">Submit</span>
                                        <span class="indicator-progress">Please wait...
                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Modal body-->
                    </div>
                </div>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body py-3">
                <!--begin::Table container-->
                <div class="table-responsive">
                    <!--begin::Table-->
                    <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                        <!--begin::Table head-->
                        <thead>
                            <tr class="fw-bold fs-6 text-gray-800 border-bottom border-gray-300">
                                <th class="ps-4 min-w-20px text-center">#</th>
                                <th class="ps-4 min-w-100px text-center">Patient Name</th>
                                <th class="ps-4 min-w-100px text-center">Doctor Name</th>
                                <th class="ps-4 min-w-50px text-center">Day</th>
                                <th class="ps-4 min-w-50px text-center">Time</th>
                                <th class="ps-4 min-w-50px text-center">Category</th>
                                <th class="ps-4 min-w-50px text-center">Status</th>
                                <th class="ps-4 min-w-50px text-center">Action</th>
                            </tr>
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody>
                            @if ($appointment->count() == 0)
                                <th class="ps-4 min-w-20px text-center" colspan="6">No Schedule Data</th>
                            @else
                                @foreach ($appointment as $schedule)
                                    <tr>
                                        <td class="ps-4 min-w-20px text-center">{{ $loop->iteration }}</td>
                                        <td class="ps-4 min-w-200px text-center">{{ $schedule->patient->name }}</td>
                                        <td class="ps-4 min-w-200px text-center">{{ $schedule->doctor->name }}</td>
                                        <td class="ps-4 min-w-50px text-center">{{ $schedule->schedule->day }}</td>
                                        <td class="ps-4 min-w-50px text-center">{{ $schedule->schedule->start_time }} -
                                            {{ $schedule->schedule->end_time }}</td>
                                        <td class="ps-4 min-w-50px text-center">{{ $schedule->clinic_type }}</td>
                                        <td class="ps-4 min-w-50px text-center">{{ $schedule->status }}</td>
                                        <td class="ps-4 min-w-20px text-center">
                                            <a href="{{ url('/admin.dashboard/appointment.update/' . Crypt::encrypt($schedule->id)) }}"
                                                class="btn btn-primary">Update</a>
                                            <a href="{{ url('/admin.dashboard/appointment.delete/' . Crypt::encrypt($schedule->id)) }}"
                                                class="btn btn-danger">Reject</a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Table container-->
            </div>
            <!--begin::Body-->
        </div>
        <!--end::Tables Widget 9-->
    </div>
    <!--end::Col-->

    {{-- <div class="card mb-5 mb-xl-10">
    <!--begin::Card header-->
    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
        <!--begin::Card title-->
        <div class="card-title m-0">
            <h3 class="fw-bolder m-0">Make Appointment</h3>
        </div>
        <!--end::Card title-->
    </div>
    <!--begin::Card header-->
    <!--begin::Content-->
    <div id="kt_account_settings_profile_details" class="collapse show">
        <!--begin::Form-->
        <form method="POST">
            {{ csrf_field() }}
            <!--begin::Card body-->
            <div class="card-body border-top p-9 row">
                <h6 class="text-dark fw-bolder">Details:</h6>
                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <div class="col-md-3">
                        <!--begin::Label-->
                        <label class="col col-form-label required fw-bold fs-6">Doctor</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        @foreach ($schedule_doctor as $user_id)
                                   <p>$user_id->id</p>
                                @endforeach
                        <div class="col fv-row">
                            <select id="doctor" name="doctor" class="form-select form-select-solid form-select-lg fw-bold form-control @error('specialist') is-invalid @enderror" value="{{old("doctor")}}">
                                <option>Select Doctor</option>
                                @foreach ($schedule_doctor as $user_id)
                                    <option value="{{$user_id->id}}">{{$user_id->id}}</option>
                                @endforeach
                            </select>
                            @error('doctor')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <!--end::Input group-->

                </div>
                <!--end::Input group-->
                <div class="fv-row mb-10">
                    <!--begin::Label-->
                    <label class="fs-6 fw-bold form-label mb-2">
                        <span class="required">Day</span>
                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Specify the day"></i>
                    </label>
                    <!--end::Label-->
                    <!--begin::Input-->

                    <div class="col fv-row">
                        <select id="day" name="day" class="form-select form-select-solid form-select-lg fw-bold form-control @error('day') is-invalid @enderror">
                            <option value="">Select Day...</option>
                            <option value="Sunday">Sunday</option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                            <option value="Saturday">Saturday</option>
                        </select>
                        @error('day')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <!--end::Input-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row mb-6">
                    <div class="col">
                        <!--begin::Label-->
                        <label class="col-lg-12 col-form-label required fw-bold fs-6">Start Time</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-12 fv-row">
                            <input type="time" class="form-control form-control-lg form-control-solid form-control @error('start_time') is-invalid @enderror" name="start_time" placeholder="Start Time" value="{{ old("start_time") }}"/>
                            @error('start_time')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="col">
                        <!--begin::Label-->
                        <label class="col-lg-12 col-form-label required fw-bold fs-6">End Time</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-12 fv-row">
                            <input type="time" class="form-control form-control-lg form-control-solid form-control @error('end_time') is-invalid @enderror" name="end_time" placeholder="End Time" value="{{ old("end_time") }}"/>
                            @error('end_time')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!--end::Col-->
                    </div>
                </div>


            </div>
            <!--end::Card body-->
            <!--begin::Actions-->
            <div class="card-footer d-flex justify-content-end py-6 px-9">
                <button type="reset" class="btn btn-white btn-active-light-primary me-2">Reset</button>
                <button type="submit" class="btn btn-primary" >Submit</button>
            </div>
        </form>
        <!--end::Form-->
    </div>
    <!--end::Content-->
</div> --}}
@endsection

@section('js')

@endsection
