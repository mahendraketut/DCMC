@extends('patient.navbar')
@section('title', 'Dashboard')
@section('css')
    <style>
        .data {
            display: none;
        }
    </style>
@endsection

@section('content')
<div class="card mb-5 mb-xl-10">
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
                        <div class="col fv-row">
                            <select id="doctor" name="doctor" class="form-select form-select-solid form-select-lg fw-bold form-control @error('specialist') is-invalid @enderror" value="{{old("doctor")}}">
                                @foreach ($schedule as $schedule)
                                    <option value="{{$schedule->doctor_id}}">{{$schedule->doctor_id->name}}</option>
                                @endforeach
                                
                            </select>
                            @error('doctor')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!--end::Col-->
                        {{-- <div id="content" class="data">
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
                        </div> --}}
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
</div>
@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function(){
            $("#doctor").on('change', function(){
                $(".data").hide();
                alert($(this).val());
            })
        })
    </script>
@endsection
