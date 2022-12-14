@extends('administrator.navbar')
@section('title', 'Dashboard')
@section('css')

@endsection

@section('content')

<div class="card mb-5 mb-xl-10">
    <!--begin::Card header-->
    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
        <!--begin::Card title-->
        <div class="card-title m-0">
            <h3 class="fw-bolder m-0">Edit Schedule</h3>
        </div>
        <!--end::Card title-->
    </div>
    <!--begin::Card header-->
    <!--begin::Content-->
    <div id="kt_account_settings_profile_details" class="collapse show">
        @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{Session::get('success')}}
            </div>
        @endif
        <!--begin::Form-->
        <form method="POST" action="{{route('admin.schedule.update')}}">
            {{ csrf_field() }}
            <!--begin::Card body-->
            <input type="hidden" name="id" value="{{$data->id}}">
            <div class="card-body border-top p-9 row">
                <h6 class="text-dark fw-bolder">Schedule Details:</h6>
                <!--begin::Input name group-->
                <div class="row g-3">
                    <div class="col-md-12">
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
                    </div>
                    <div class="col-md-6">
                        <!--begin::Label-->
                        <label class="col col-form-label required fw-bold fs-6">Day</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col fv-row">
                            <select id="day" name="day" class="form-select form-select-solid form-select-lg fw-bold form-control @error('day') is-invalid @enderror">
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
                    </div>
                    <div class="col-md-3">
                        <!--begin::Label-->
                        <label class="col-lg-12 col-form-label required fw-bold fs-6">Start Time</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-12 fv-row">
                            <input type="time" class="form-control form-control-lg form-control-solid form-control @error('start_time') is-invalid @enderror" name="start_time" placeholder="Start Time" value="{{$data->start_time}}"/>
                            @error('start_time')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!--end::Col-->
                    </div>
                    <div class="col-md-3">
                        <!--begin::Label-->
                        <label class="col-lg-12 col-form-label required fw-bold fs-6">End Time</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-12 fv-row">
                            <input type="time" class="form-control form-control-lg form-control-solid form-control @error('end_time') is-invalid @enderror" name="end_time" placeholder="End Time" value="{{$data->end_time}}"/>
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
            <!--end::Input group-->
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

@endsection
