@extends('patient.navbar')
@section('title', 'Review and Feedback')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/patient/review.css') }}">
    <style>
        .rate {
            float: left;
            /* height: 46px;
                                                                                                        padding: 0 10px; */
        }

        .rate:not(:checked)>input {
            position: absolute;
            display: none;
        }

        .rate:not(:checked)>label {
            float: right;
            width: 1em;
            overflow: hidden;
            white-space: nowrap;
            cursor: pointer;
            font-size: 30px;
            color: #ccc;
        }

        .rated:not(:checked)>label {
            float: right;
            width: 1em;
            overflow: hidden;
            white-space: nowrap;
            cursor: pointer;
            font-size: 30px;
            color: #ccc;
        }

        .rate:not(:checked)>label:before {
            content: "★ ";
        }

        .rate>input:checked~label {
            color: #ffc700;
        }

        .rate:not(:checked)>label:hover,
        .rate:not(:checked)>label:hover~label {
            color: #deb217;
        }

        .rate>input:checked+label:hover,
        .rate>input:checked+label:hover~label,
        .rate>input:checked~label:hover,
        .rate>input:checked~label:hover~label,
        .rate>label:hover~input:checked~label {
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

        .rated:not(:checked)>input {
            position: absolute;
            display: none;
        }

        .rated:not(:checked)>label {
            float: right;
            width: 1em;
            overflow: hidden;
            white-space: nowrap;
            cursor: pointer;
            font-size: 30px;
            color: #ffc700;
        }

        .rated:not(:checked)>label:before {
            content: "★ ";
        }

        .rated>input:checked~label {
            color: #ffc700;
        }

        .rated:not(:checked)>label:hover,
        .rated:not(:checked)>label:hover~label {
            color: #deb217;
        }

        .rated>input:checked+label:hover,
        .rated>input:checked+label:hover~label,
        .rated>input:checked~label:hover,
        .rated>input:checked~label:hover~label,
        .rated>label:hover~input:checked~label {
            color: #c59b08;
        }
    </style>
@endsection
@section('content')
    <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
        <!--begin::Card header-->
        <div class="card-header cursor-pointer">
            <!--begin::Card title-->
            <div class="card-title m-0">
                <h3 class="fw-bold m-0">Review Appointment</h3>
            </div>
            <!--end::Card title-->

            <!--begin::Action-->
            {{-- <a href="/metronic8/demo1/../demo1/account/settings.html"  class="btn btn-sm btn-primary align-self-center">Edit Profile</a> --}}
            <!--end::Action-->
        </div>
        <!--begin::Card header-->
        <!--begin::Card body-->
        <div class="card-body p-9">
            @foreach ($appointments as $appointment)
                <div class="card border md-12 mt-4">
                    <div class="card">
                        <div class="row g-0">
                            <div class="col">
                                @if ($appointment->doctor->profile_pic)
                                    <img src="{{ asset('storage/' . $appointment->doctor->profile_pic) }}"
                                        class="img-fluid rounded-start" alt="image" />
                                @else
                                    <img src="{{ asset('admin/assets/media/avatars/blank.png') }}"
                                        class="img-fluid rounded-start" alt="image" />
                                @endif
                            </div>
                            <div class="col-md-11">
                                <div class="card-body d-flex align-items-center justify-content-between"
                                    style="padding: 2%">
                                    <div>
                                        <h4 class="card-title">Doctor {{ $appointment->doctor->name }} |
                                            {{ $appointment->doctor->specialist->name }}</h4>
                                        @if ($medicalrecords->where('appointment_id', $appointment->id)->isEmpty())
                                            <p class="card-text">No Medical Record</p>
                                        @else
                                            @foreach ($medicalrecords->where('appointment_id', $appointment->id) as $medicalrecord)
                                                <p class="card-text">Case:
                                                    <strong>{{ $medicalrecord->MedicalCategory->name }}</strong> on
                                                    <strong>{{ $medicalrecord->created_at->format('l, F jS, Y h:i A') }}</strong>
                                                </p>
                                            @endforeach
                                        @endif
                                    </div>
                                    @if ($reviews->where('appointment_id', $appointment->id)->isEmpty())
                                        <a href="{{ url('/patient.review.create/' . Crypt::encrypt($appointment->id)) }}"
                                            class="btn btn-primary"><i class="fas fa-star"></i>Review</a>
                                    @else
                                        <a href="{{ url('/patient.review.create/' . Crypt::encrypt($appointment->id)) }}"
                                            class="btn btn-primary"><i class="fas fa-eye"></i>View Review</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!--end::Card body-->
    </div>
@endsection
@section('js')
@endsection
