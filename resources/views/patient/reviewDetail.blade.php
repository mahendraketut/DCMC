@extends('patient.navbar')
@section('title', 'Review and Feedback Detail')
@section('css')
<style>
    .rate {
        float: left;
        /* height: 46px;
        padding: 0 10px; */
    }
    .rate:not(:checked) > input {
        position: absolute;
        display: none;
    }
    .rate:not(:checked) > label {
        float: right;
        width: 1em;
        overflow: hidden;
        white-space: nowrap;
        cursor: pointer;
        font-size: 30px;
        color: #ccc;
    }
    .rated:not(:checked) > label {
        float: right;
        width: 1em;
        overflow: hidden;
        white-space: nowrap;
        cursor: pointer;
        font-size: 30px;
        color: #ccc;
    }
    .rate:not(:checked) > label:before {
        content: "★ ";
    }
    .rate > input:checked ~ label {
        color: #ffc700;
    }
    .rate:not(:checked) > label:hover,
    .rate:not(:checked) > label:hover ~ label {
        color: #deb217;
    }
    .rate > input:checked + label:hover,
    .rate > input:checked + label:hover ~ label,
    .rate > input:checked ~ label:hover,
    .rate > input:checked ~ label:hover ~ label,
    .rate > label:hover ~ input:checked ~ label {
        color: #c59b08;
    }
    .star-rating-complete {
        color: #c59b08;
    }
    .rating-container .form-control:hover,
    .rating-container .form-control:focus {
        background: #fff;
        border: 1px solid #ced4da;
    }
    .rating-container textarea:focus,
    .rating-container input:focus {
        color: #000;
    }
    .rated {
        float: left;
        /* height: 46px;
        padding: 0 10px; */
    }
    .rated:not(:checked) > input {
        position: absolute;
        display: none;
    }
    .rated:not(:checked) > label {
        float: right;
        width: 1em;
        overflow: hidden;
        white-space: nowrap;
        cursor: pointer;
        font-size: 30px;
        color: #ffc700;
    }
    .rated:not(:checked) > label:before {
        content: "★ ";
    }
    .rated > input:checked ~ label {
        color: #ffc700;
    }
    .rated:not(:checked) > label:hover,
    .rated:not(:checked) > label:hover ~ label {
        color: #deb217;
    }
    .rated > input:checked + label:hover,
    .rated > input:checked + label:hover ~ label,
    .rated > input:checked ~ label:hover,
    .rated > input:checked ~ label:hover ~ label,
    .rated > label:hover ~ input:checked ~ label {
        color: #c59b08;
    }

</style>
@endsection

@section('content')
<div class="row">
    {{-- <div class="col-lg-5"> --}}
        <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
            <!--begin::Card header-->
            <div class="card-header cursor-pointer">
                <!--begin::Card title-->
                <div class="card-title m-0">
                    <h3 class="fw-bold m-0">Appointment Details</h3>
                </div>
                <!--end::Card title-->

                <!--begin::Action-->
                {{-- <a href="/metronic8/demo1/../demo1/account/settings.html"  class="btn btn-sm btn-primary align-self-center">Edit Profile</a> --}}
                <!--end::Action-->
            </div>
            <!--begin::Card header-->
            <!--begin::Card body-->
            <div class="card-body p-9">
                <!--begin::Row-->
                <div class="row mb-7">
                    <!--begin::Label-->
                    <label class="col-lg-4 fw-semibold text-muted">Appointment ID</label>
                    <!--end::Label-->

                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <span class="fw-bold fs-6 text-gray-800">#{{$appointment->appointment_id}}</span>
                    </div>
                    <!--end::Col-->
                </div>
                <div class="row mb-7">
                    <!--begin::Label-->
                    <label class="col-lg-4 fw-semibold text-muted">Appointment Type</label>
                    <!--end::Label-->

                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <span class="fw-bold fs-6 text-gray-800">{{$appointment->clinic_type}}</span>
                    </div>
                    <!--end::Col-->
                </div>
                <div class="row mb-7">
                    <!--begin::Label-->
                    <label class="col-lg-4 fw-semibold text-muted">Doctor</label>
                    <!--end::Label-->

                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <span class="fw-bold fs-6 text-gray-800">{{$appointment->doctor->name}}</span>
                    </div>
                    <!--end::Col-->
                </div>
                <div class="row mb-7">
                    <!--begin::Label-->
                    <label class="col-lg-4 fw-semibold text-muted">Doctor Specialist</label>
                    <!--end::Label-->

                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <span class="fw-bold fs-6 text-gray-800">{{$appointment->doctor->specialist->name}}</span>
                    </div>
                    <!--end::Col-->
                </div>
                <div class="row mb-7">
                    <!--begin::Label-->
                    <label class="col-lg-4 fw-semibold text-muted">Patient Name</label>
                    <!--end::Label-->

                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <span class="fw-bold fs-6 text-gray-800">{{$appointment->patient->name}}</span>
                    </div>
                    <!--end::Col-->
                </div>
                <div class="row mb-7">
                    <!--begin::Label-->
                    <label class="col-lg-4 fw-semibold text-muted">Patient Address</label>
                    <!--end::Label-->

                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <span class="fw-bold fs-6 text-gray-800">{{$appointment->patient->address}}</span>
                    </div>
                    <!--end::Col-->
                </div>
                <div class="row mb-7">
                    <!--begin::Label-->
                    <label class="col-lg-4 fw-semibold text-muted">Status</label>
                    <!--end::Label-->

                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <span class="fw-bold fs-6 text-gray-800">{{$appointment->status}}</span>
                    </div>
                    <!--end::Col-->
                </div>
            </div>
            <!--end::Card body-->
        </div>
    {{-- </div> --}}
    {{-- <div class="col-lg-7"> --}}
        <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
            <!--begin::Card header-->
            <div class="card-header cursor-pointer">
                <!--begin::Card title-->
                <div class="card-title m-0">
                    <h3 class="fw-bold m-0">Review and Feedback</h3>
                </div>
                <!--end::Card title-->

                <!--begin::Action-->
                {{-- <a href="/metronic8/demo1/../demo1/account/settings.html"  class="btn btn-sm btn-primary align-self-center">Edit Profile</a> --}}
                <!--end::Action-->
            </div>
            <!--begin::Card header-->
            <!--begin::Card body-->
            <div class="card-body p-9">
                @if ($review != null)
                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">Rating for {{$appointment->doctor->name}}</label>
                        <!--end::Label-->

                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <div class="rated">
                                @for ($i = 0; $i < $review->rating_for_doctor; $i++)
                                    <input type="radio" id="star5_for_doctor" class="rate" name="rating_for_doctor"/>
                                    <label for="star5_for_doctor" title="text"></label>
                                @endfor
                            </div>
                        </div>
                        <!--end::Col-->

                    </div>

                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">Rating for clinic</label>
                        <!--end::Label-->

                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <div class="rated">
                                @for ($i = 0; $i < $review->rating_for_clinic; $i++)
                                    <input type="radio" id="star5_for_clinic" class="rate" name="rating_for_clinic"/>
                                    <label for="star5_for_clinic" title="text"></label>
                                @endfor
                            </div>
                        </div>
                        <!--end::Col-->

                    </div>

                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">Review for Doctor</label>
                        <!--end::Label-->

                        <!--begin::Col-->
                        <div class="col-lg-8">
                            @if ($review->review_for_doctor == null)
                                <span class="fw-bold fs-6 text-gray-800">No review</span>
                            @else
                                <span class="fw-bold fs-6 text-gray-800">{{$review->review_for_doctor}}</span>
                            @endif
                        </div>
                        <!--end::Col-->

                    </div>

                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">Review for Clinic</label>
                        <!--end::Label-->

                        <!--begin::Col-->
                        <div class="col-lg-8">
                            @if ($review->review_for_clinic == null)
                                <span class="fw-bold fs-6 text-gray-800">No review</span>
                            @else
                                <span class="fw-bold fs-6 text-gray-800">{{$review->review_for_clinic}}</span>
                            @endif
                        </div>
                        <!--end::Col-->

                    </div>

                @else
                <form action="{{route('patient.review.store')}}" method="POST">
                    @csrf
                    <input type="hidden" name="appointment_id" value="{{$appointment->id}}">
                    <input type="hidden" name="doctor_id" value="{{$appointment->doctor_id}}">
                    <input type="hidden" name="patient_id" value="{{$appointment->patient_id}}">
                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">Rating for {{$appointment->doctor->name}}</label>
                        <!--end::Label-->

                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <div class="rate">
                                <input type="radio" id="star5_for_doctor" class="rate" name="rating_for_doctor" value="5" {{old('rating_for_doctor')}} />
                                <label for="star5_for_doctor" title="text">5 stars</label>
                                <input type="radio" id="star4_for_doctor" class="rate" name="rating_for_doctor" value="4" {{old('rating_for_doctor')}} />
                                <label for="star4_for_doctor" title="text">4 stars</label>
                                <input type="radio" id="star3_for_doctor" class="rate" name="rating_for_doctor" value="3" {{old('rating_for_doctor')}} />
                                <label for="star3_for_doctor" title="text">3 stars</label>
                                <input type="radio" id="star2_for_doctor" class="rate" name="rating_for_doctor" value="2" {{old('rating_for_doctor')}} />
                                <label for="star2_for_doctor" title="text">2 stars</label>
                                <input type="radio" id="star1_for_doctor" class="rate" name="rating_for_doctor" value="1" {{old('rating_for_doctor')}} />
                                <label for="star1_for_doctor" title="text">1 star</label>
                             </div>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--review-->
                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">Feedback for {{$appointment->doctor->name}}</label>
                        <!--end::Label-->

                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <textarea class="form-control" name="review_for_doctor" rows="6 " placeholder="Comment" maxlength="200"></textarea>
                        </div>
                        <!--end::Col-->
                    </div>

                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">Rating for Clinic</label>
                        <!--end::Label-->

                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <diyv class="rate">
                                <input type="radio" id="star5_for_clinic" class="rate" name="rating_for_clinic" value="5"/>
                                <label for="star5_for_clinic" title="text">5 stars</label>
                                <input type="radio" id="star4_for_clinic" class="rate" name="rating_for_clinic" value="4"/>
                                <label for="star4_for_clinic" title="text">4 stars</label>
                                <input type="radio" id="star3_for_clinic" class="rate" name="rating_for_clinic" value="3"/>
                                <label for="star3_for_clinic" title="text">3 stars</label>
                                <input type="radio" id="star2_for_clinic" class="rate" name="rating_for_clinic" value="2">
                                <label for="star2_for_clinic" title="text">2 stars</label>
                                <input type="radio" id="star1_for_clinic" class="rate" name="rating_for_clinic" value="1"/>
                                <label for="star1_for_clinic" title="text">1 star</label>
                             </diyv>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--review-->
                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">Feedback for Clinic</label>
                        <!--end::Label-->

                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <textarea class="form-control" name="review_for_clinic" rows="6 " placeholder="Comment" maxlength="200"></textarea>
                        </div>
                        <!--end::Col-->
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                @endif


            </div>
            <!--end::Card body-->
        </div>
    {{--     --}}
</div>
@endsection

@section('js')
@endsection
