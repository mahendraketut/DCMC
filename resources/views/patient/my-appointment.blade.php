@php
use Carbon\Carbon;
@endphp
@extends('patient.navbar')
@section('title', 'Dashboard')
@section('css')
    {{-- <style>
        .data {
            display: none;
        }
    </style> --}}
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
                            {{-- <th class="ps-4 min-w-100px text-center">Name</th> --}}
                            <th class="ps-4 min-w-20px text-center">Queue Number</th>
                            <th class="ps-4 min-w-50px text-center">Day</th>
                            <th class="ps-4 min-w-50px text-center">Appointment Time</th>
                            <th class="ps-4 min-w-50px text-center">Estimated Time</th>
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
                                <td class="ps-4 min-w-20px text-center">{{$loop->iteration}}</td>
                                {{-- <td class="ps-4 min-w-200px text-center">{{$appointment->doctor_name}}</td> --}}
                                <td class="ps-4 min-w-20px text-center">{{$schedule->appointment_number}}</td>
                                <td class="ps-4 min-w-50px text-center">{{$schedule->schedule->day}} - {{$schedule->schedule->date}}</td>
                                <td class="ps-4 min-w-50px text-center">{{$schedule->schedule->start_time}} - {{$schedule->schedule->end_time}}</td>
                                @php   
                                              
                                // Get the current date and time
                                    $currentDateTime = Carbon::now();
                                // Get the schedule date and time from the database
                                    $scheduleDateTime = Carbon::parse($schedule->schedule->date . ' ' . $schedule->schedule->start_time);
                                
                                // Calculate the remaining time
                                    $remainingTime = $scheduleDateTime->diff($currentDateTime);
                                @endphp
                                <td class="ps-4 min-w-50px text-center">{{ $remainingTime->format('%d days, %h hours, %i minutes, %s seconds') }}</td>
                                <td class="ps-4 min-w-50px text-center">
                                    @if ($schedule->status == 'Pending')
                                        <span class="badge badge-light-warning">Pending</span>
                                    @elseif($schedule->status == 'Approved')
                                        <span class="badge badge-light-success">Approved</span>
                                    @elseif ($schedule->status == 'Waiting Call')
                                        <span class="badge badge-light-success">Waiting Call</span>
                                    @elseif ($schedule->status == 'Under Examination')
                                        <span class="badge badge-light-success">Under Examination</span>
                                    @elseif ($schedule->status == 'Waiting Payment')
                                        <span class="badge badge-light-success">Waiting Payment</span>
                                    @elseif($schedule->status == 'Rejected')
                                        <span class="badge badge-light-danger">Rejected</span>
                                    @elseif($schedule->status == 'Canceled')
                                        <span class="badge badge-light-danger">Canceled</span>
                                    @elseif($schedule->status == 'Completed')
                                        <span class="badge badge-light-success">Completed</span>
                                    @endif
                                </td>
                                <td class="ps-4 min-w-20px text-center">
                                    @if ($schedule->status == 'Completed')
                                        <a href="{{url('/patient.review.create/'.Crypt::encrypt($schedule->id))}}" class="btn btn-primary">Review</a>
                                    @elseif($schedule->status == 'Waiting Payment')
                                        <a href="{{url('/patient.payment/'.$schedule->id)}}" class="btn btn-success">Pay</a>
                                    @else
                                        <a href="{{url('/patient.appointment.delete/'.$schedule->id)}}" class="btn btn-danger">Delete</a>
                                    @endif
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
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function(){
            $("#doctor").on('change', function(){
                $(".data").hide();
                alert($(this).val());
            })
        })
    </script> --}}
@endsection
