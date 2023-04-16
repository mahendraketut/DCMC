@extends('patient.navbar')
@section('title', 'View Detail Doctor')
@section('css')

@endsection
@section('content')

<div class="d-flex flex-column flex-xl-row">
    <!--begin::Sidebar-->
    <div class="flex-column flex-lg-row-auto w-100 w-xl-350px mb-10">
        <!--begin::Card-->
        <div class="card mb-5 mb-xl-8">
            <!--begin::Card body-->
            <div class="card-body pt-15">
                <!--begin::Summary-->
                <div class="d-flex flex-center flex-column mb-5">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-100px symbol-circle mb-7">
                        @if ($doctor->profile_pic)
                            <img src="{{ asset('storage/' . $doctor->profile_pic) }}" alt="image" />
                        @else
                            <img src="{{asset('admin/assets/media/avatars/blank.png')}}" class="card-img-top" alt="image" />
                        @endif
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Badge-->
                    <div class="badge badge-light-primary d-inline text-uppercase">{{$doctor->role}}</div>
                    <!--begin::Badge-->
                    <!--begin::Name-->
                    <a href="#" class="fs-3 text-gray-800 text-hover-primary fw-bolder mb-1">{{$doctor->name}}</a>
                    <!--end::Name-->
                    <!--begin::Position-->
                    <div class="fs-5 fw-bold text-muted mb-6">{{$doctor->specialist->name}} Specialist</div>
                    <!--end::Position-->
                </div>
                <!--end::Summary-->
                <!--begin::Details toggle-->
                <div class="d-flex flex-stack fs-4 py-3">
                    <div class="fw-bolder rotate collapsible" data-bs-toggle="collapse" href="#kt_customer_view_details" role="button" aria-expanded="false" aria-controls="kt_customer_view_details">Details
                        <span class="ms-2 rotate-180">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                            <span class="svg-icon svg-icon-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                </svg>
                            </span>
                        <!--end::Svg Icon-->
                        </span>
                    </div>
                    {{-- <span data-bs-toggle="tooltip" data-bs-trigger="hover" title="Edit customer details">
                        <a href="#" class="btn btn-sm btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_update_customer">Edit</a>
                    </span> --}}
                </div>
                <!--end::Details toggle-->
                <div class="separator separator-dashed"></div>
                <!--begin::Details content-->
                <div id="kt_customer_view_details" class="collapse show">
                    <div class=" fs-6">
                        <!--begin::Details item-->
                        <div class="fw-bolder mt-5">Doctor ID</div>
                        <div class="text-gray-600">{{$doctor->user_id}}</div>
                        <!--begin::Details item-->
                        <!--begin::Details item-->
                        <div class="fw-bolder mt-5">Email</div>
                        <div class="text-gray-600">
                            <a href="#" class="text-gray-600 text-hover-primary">{{$doctor->email}}</a>
                        </div>
                        <!--begin::Details item-->
                        <!--begin::Details item-->
                        <div class="fw-bolder mt-5">License</div>
                        <div class="text-gray-600">{{$doctor->license}}</div>
                        <!--begin::Details item-->
                        <!--begin::Details item-->
                        <div class="fw-bolder mt-5">Gender</div>
                        <div class="text-gray-600">{{$doctor->gender}}</div>
                        <!--begin::Details item-->
                        <!--begin::Details item-->
                        <div class="fw-bolder mt-5">City</div>
                        <div class="text-gray-600">{{$doctor->city}}</div>
                        <!--begin::Details item-->
                        <!--begin::Details item-->
                        <div class="fw-bolder mt-5">Joined Since</div>
                        <div class="text-gray-600">{{$doctor->created_at->diffForHumans()}}</div>
                        <!--begin::Details item-->
                    </div>
                </div>
                <!--end::Details content-->
            </div>
            <!--end::Card body-->
        </div>
    </div>
    <!--end::Sidebar-->
    <!--begin::Content-->
    <div class="flex-lg-row-fluid ms-lg-15">
        <!--begin:::Tabs-->
        <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mb-8">
            <!--begin:::Tab item-->
            <li class="nav-item">
                <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_customer_view_overview_tab">Overview</a>
            </li>
            <!--end:::Tab item-->
            <!--begin:::Tab item-->
            {{-- <li class="nav-item">
                <a class="nav-link text-active-primary pb-4" data-kt-countup-tabs="true" data-bs-toggle="tab" href="#kt_customer_view_overview_statements">Experience</a>
            </li> --}}
            <!--end:::Tab item-->
            <!--begin:::Tab item-->
            <li class="nav-item">
                <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_customer_view_overview_events_and_logs_tab">Schedule</a>
            </li>
            <!--end:::Tab item-->
            <!--begin:::Tab item-->
            <li class="nav-item ms-auto">
                <!--begin::Action menu-->
                <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to add a user">
                    <a href="" class="btn btn-sm btn-light btn-active-primary" data-bs-toggle="modal" data-bs-target="#modal_add_schedule">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                    <span class="svg-icon svg-icon-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
                            <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->Make an Appointment</a>
                </div>
                <!--begin::Modal Add Schedule-->
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
                                <form class="form" id="modal_add_schedule_form" action="{{route('patient.view.detail.doctor.store')}}" method="POST">
                                    @csrf
                                    <!--begin::Input group-->
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
                                                @foreach($schedule as $day)
                                                    <option value="{{$day->id}}">{{$day->day}} - {{$day->start_time}} - {{$day->end_time}}</option>
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
                                    <input type="hidden" name="doctor_id" value="{{$doctor->id}}">
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
                {{-- <a href="{{route('make.appointment')}}" class="btn btn-primary ps-7" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">Make Appointment</a> --}}
                <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                {{-- <span class="svg-icon svg-icon-2 me-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                    </svg>
                </span> --}}
            </li>
            <!--end:::Tab item-->
        </ul>
        <!--end:::Tabs-->
        <!--begin:::Tab content-->
        <div class="tab-content" id="myTabContent">
            <!--begin:::Tab pane-->
            <div class="tab-pane fade show active" id="kt_customer_view_overview_tab" role="tabpanel">
                <!--begin::Card-->
                <div class="card pt-4 mb-6 mb-xl-9">
                    <!--begin::Card header-->
                    <div class="card-header border-0">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <h2>Doctor Overview</h2>
                        </div>
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0 pb-5">

                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
            <!--begin:::Tab pane-->
            <div class="tab-pane fade" id="kt_customer_view_overview_events_and_logs_tab" role="tabpanel">
                <!--begin::Card-->
                <div class="card pt-4 mb-6 mb-xl-9">
                    <!--begin::Card header-->
                    <div class="card-header border-0">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <h2>Schedule</h2>
                        </div>
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body py-0">
                        <!--begin::Table wrapper-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table align-middle table-row-dashed fw-bold text-gray-600 fs-6 gy-5" id="kt_table_customers_logs">
                                <!--begin::Table body-->
                                <tbody>
                                    <!--begin::Table row-->
                                    @foreach ($schedule as $schedule)
                                    <tr>
                                        <!--begin::Badge=-->
                                        <td class="min-w-70px">
                                            <div class="badge badge-light-success">Available</div>
                                        </td>
                                        <!--end::Badge=-->
                                        <!--begin::Status=-->
                                        <td>{{$schedule->day}}</td>
                                        <!--end::Status=-->
                                        <!--begin::Timestamp=-->
                                        <td class="pe-0 text-end min-w-200px">{{$schedule->start_time}} - {{$schedule->end_time}}</td>
                                        <!--end::Timestamp=-->
                                    </tr>
                                    @endforeach
                                    <!--end::Table row-->
                                </tbody>
                                <!--end::Table body-->
                            </table>
                            <!--end::Table-->
                        </div>
                        <!--end::Table wrapper-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
        <!--end:::Tab content-->
        </div>
    <!--end::Content-->
    </div>
    <!--end::Wrapper-->
</div>


@endsection
@section('js')
<script>
    $('#day').change(function() {
        var options = '';
        if($(this).val() == '') {
            options = '<option value="1">1</option>';
        }
        else if ($(this).val() == 'b'){
            options = '<option value="2">2</option>';
        }

        $(this).next('#time').html(options);
    });
</script>
@endsection
