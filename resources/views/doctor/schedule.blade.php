@extends('doctor.navbar')
@section('title', 'Dashboard')
@section('css')
    <!--begin::Page Vendors Styles(used by this page)-->
    <link href="{{ asset('admin/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <!--end::Page Vendors Styles-->
@endsection

@section('content')
    <!--begin::Col-->
    <div class="col-xl-12">
        <!--begin::Tables Widget 9-->
        <div class="card card-xl-stretch mb-5 mb-xl-8">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1">Schedule Table</span>
                </h3>
                <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover"
                    title="Click to add a new schedule">
                    <a href="{{ route('doctor.schedule.add') }}" class="btn btn-sm btn-light btn-active-primary"
                        data-bs-toggle="modal" data-bs-target="#modal_add_schedule">
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
                        <!--end::Svg Icon-->New Schedule
                    </a>
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
                                <th class="ps-4 min-w-100px text-center">Name</th>
                                <th class="ps-4 min-w-50px text-center">Day</th>
                                <th class="ps-4 min-w-50px text-center">Start Time</th>
                                <th class="ps-4 min-w-50px text-center">End Time</th>
                                <th class="ps-4 min-w-50px text-center">Action</th>
                            </tr>
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody>
                            @if ($schedule->count() == 0)
                                <th class="ps-4 min-w-20px text-center" colspan="6">No Schedule Data</th>
                            @else
                                @foreach ($schedule as $schedule)
                                    <tr>
                                        <td class="ps-4 min-w-20px text-center">{{ $loop->iteration }}</td>
                                        <td class="ps-4 min-w-200px text-center">{{ $schedule->doctor_name }}</td>
                                        <td class="ps-4 min-w-100px text-center">{{ $schedule->day }}</td>
                                        <td class="ps-4 min-w-50px text-center">{{ $schedule->start_time }}</td>
                                        <td class="ps-4 min-w-50px text-center">{{ $schedule->end_time }}</td>
                                        <td class="ps-4 min-w-20px text-center">
                                            <a href="{{ url('/doctor.dashboard/schedule.edit/' . Crypt::encrypt($schedule->id)) }}"
                                                class="btn btn-primary">Edit</a> |
                                            <a href="{{ url('/doctor.dashboard/schedule.delete/' . Crypt::encrypt($schedule->id)) }}"
                                                class="btn btn-danger">Delete</a>
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

    <!--begin::Modal Add Schedule-->
    <div class="modal fade" id="modal_add_schedule" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header" id="modal_add_schedule_header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bolder">Add New Schedule</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                    <!--begin::Form-->
                    <form class="form" id="modal_add_schedule_form" action="{{ route('doctor.schedule.store') }}"
                        method="POST">
                        @csrf
                        <!--begin::Input group-->
                        {{-- <!--begin::Label-->
                    <div class="fv-row mb-10">
                        <!--begin::Label-->
                        <label class="col col-form-label required fw-bold fs-6">Doctor Name</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col fv-row">
                            <select id="doctor_name" name="doctor_name" class="form-select form-select-solid form-select-lg fw-bold form-control @error('doctor_name') is-invalid @enderror">

                                @foreach ($doctor as $doctor)
                                    <option value="{{$doctor->name}}">{{$doctor->name}}</option>
                                @endforeach
                            </select>
                            @error('doctor_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!--end::Col-->
                    </div> --}}
                        <!--end::Input group-->
                        <!--end::Input group-->
                        <!--begin::Input group-->
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
                                    <input type="time"
                                        class="form-control form-control-lg form-control-solid form-control @error('start_time') is-invalid @enderror"
                                        name="start_time" placeholder="Start Time" value="{{ old('start_time') }}" />
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
                                    <input type="time"
                                        class="form-control form-control-lg form-control-solid form-control @error('end_time') is-invalid @enderror"
                                        name="end_time" placeholder="End Time" value="{{ old('end_time') }}" />
                                    @error('end_time')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <!--end::Col-->
                            </div>
                        </div>

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




    {{-- <div class="container" style="margin-top:20px">
    <div class="row">
        <div class="col-md-12">
            <h2>Schedule List</h2>
            <div style="margin-right:10%;float:right;">
                <a href="{{route('admin.schedule.add')}}" class="btn btn-primary">Add Schedule</a>
            </div>
                @if (Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
            @endif
            <div class="table-responsive">
                <table class="table table-rounded table-striped border gy-7 gs-7">
                    <thead>
                        <tr class="fw-bold fs-6 text-gray-800 border-bottom border-gray-200">
                            <th>#</th>
                            <th>Name</th>
                            <th>Day</th>
                            <th>Start Time</th>
                            <th>End Time</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($schedule as $schedule)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$schedule->doctor_name}}</td>
                            <td>{{$schedule->day}}</td>
                            <td>{{$schedule->start_time}}</td>
                            <td>{{$schedule->end_time}}</td>
                            <td><a href="{{url('/admin.dashboard/schedule.edit/'.$schedule->id)}}" class="btn btn-primary">Edit</a> | <a href="{{url('/admin.dashboard/schedule.delete/'.$schedule->id)}}" class="btn btn-danger">Delete</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div> --}}
@endsection

@section('js')
    <script src="{{ asset('admin/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
@endsection
