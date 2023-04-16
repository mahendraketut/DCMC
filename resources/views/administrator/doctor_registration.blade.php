@extends('administrator.navbar')
@section('title', 'Register Doctor')
@section('css')

@endsection

@section('content')
<div class="card mb-5 mb-xl-10">
    <!--begin::Card header-->
    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
        <!--begin::Card title-->
        <div class="card-title m-0">
            <h3 class="fw-bolder m-0">Register Doctor Form</h3>
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
                <h6 class="text-dark fw-bolder">Doctor Details:</h6>
                <!--begin::Input name group-->
                <div class="row mb-6">
                    <div class="col">
                        <!--begin::Label-->
                        <label class="col-lg-12 col-form-label required fw-bold fs-6">First Name</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-12 fv-row">
                            <input type="text" class="form-control form-control-lg form-control-solid form-control @error('firstname') is-invalid @enderror" name="firstname" placeholder="First Name" value="{{old("firstname")}}" />
                            @error('firstname')
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
                        <label class="col-lg-12 col-form-label required fw-bold fs-6">Last Name</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-12 fv-row">
                            <input type="text" class="form-control form-control-lg form-control-solid form-control @error('lastname') is-invalid @enderror" name="lastname" placeholder="Last Name" value="{{old("lastname")}}"/>
                            @error('lastname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!--end::Col-->
                    </div>
                </div>
                <!--end::Input name group-->
                <!--begin::Input dob group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <div class="col-md-6">
                        <!--begin::Label-->
                        <label class="col col-form-label fw-bold fs-6">Date of Birth</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col fv-row">
                            <input type="date" class="form-control form-control-lg form-control-solid form-control @error('dateofbirth') is-invalid @enderror" name="dob" placeholder="Date of Birth" value="{{old("dob")}}"/>
                            @error('dateofbirth')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Label-->
                    <div class="col-md-6">
                        <!--begin::Label-->
                        <label class="col col-form-label required fw-bold fs-6">Gender</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col fv-row">
                            <select id="gender" name="gender" class="form-select form-select-solid form-select-lg fw-bold form-control @error('gender') is-invalid @enderror" value="{{old("gender")}}">
                                <option value="">Select one...</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                            @error('gender')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                </div>
                <!--end::Input dob group-->
                <!--begin::Input address and city group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <div class="col-md-9">
                        <!--begin::Label-->
                        <label class="col col-form-label fw-bold fs-6">Address</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col fv-row">
                            <input type="text" class="form-control form-control-lg form-control-solid form-control @error('address') is-invalid @enderror" name="address" placeholder="Address" value="{{old("address")}}"/>
                            @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="col-md-3">
                        <!--begin::Label-->
                        <label class="col col-form-label fw-bold fs-6">City</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col fv-row">
                            <input type="text" class="form-control form-control-lg form-control-solid form-control @error('city') is-invalid @enderror" name="city" placeholder="City" value="{{old("city")}}"/>
                            @error('city')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                </div>
                <!--end::Input address and city group-->
                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <div class="col-md-3">
                        <!--begin::Label-->
                        <label class="col col-form-label required fw-bold fs-6">Specialist</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col fv-row">
                            <select id="specialist" name="specialist" class="form-select form-select-solid form-select-lg fw-bold form-control @error('specialist') is-invalid @enderror" value="{{old("specialist")}}">
                                {{-- <option value="Mouth Surgery">Mouth Surgery</option>
                                <option value="Tooth Conservation">Tooth Conservation</option>
                                <option value="Oral Disease">Oral Disease</option>
                                <option value="Orthodontics">Orthodontics</option>
                                <option value="Periodontics">Periodontics</option>
                                <option value="Prosthodontics">Prosthodontics</option>
                                <option value="Dental Radiology">Dental Radiology</option> --}}
                                @foreach ($specialists as $specialist)
                                    <option value="{{$specialist->id}}">{{$specialist->name}}</option>

                                @endforeach
                            </select>
                            @error('specialist')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input license group-->
                    <div class="col-md-9">
                        <!--begin::Label-->
                        <label class="col col-form-label required fw-bold fs-6">License</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col fv-row">
                            <input type="text" class="form-control form-control-lg form-control-solid form-control @error('license') is-invalid @enderror" name="license" placeholder="License" value="{{old("license")}}"/>
                            @error('license')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!--end::Col-->
                    </div>
                </div>
                <!--end::Input group-->

                <h6 class="text-dark fw-bolder mt-10">Account Details:</h6>
                <!--begin::Input username-->
                <div class="row">
                    <div class="col mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-12 col-form-label required fw-bold fs-6">Username</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-12 fv-row">
                            <input type="text" class="form-control form-control-lg form-control-solid form-control @error('username') is-invalid @enderror" name="username" placeholder="Username" value="{{old("username")}}"/>
                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!--end::Col-->
                    </div>
                </div>
                <!--end::Input username-->
                <!--begin::Input email-->
                <div class="row">
                    <div class="col mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-12 col-form-label required fw-bold fs-6">Email</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-12 fv-row">
                            <input type="email" class="form-control form-control-lg form-control-solid form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{old("email")}}"/>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!--end::Col-->
                    </div>
                    <div class="col mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-12 col-form-label required fw-bold fs-6">Phone Number</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-12 fv-row">
                            <input type="text" class="form-control form-control-lg form-control-solid form-control @error('phone') is-invalid @enderror" name="phone" placeholder="Phone Number" value="{{old("phone")}}"/>
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!--end::Col-->
                    </div>
                </div>
                <!--end::Input email-->
                <!--begin::Input password group-->
                <div class="row">
                    <!--begin::Input password group-->
                    <div class="col mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-12 col-form-label required fw-bold fs-6">Password</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-12 fv-row">
                            <input type="password" class="form-control form-control-lg form-control-solid form-control @error('password') is-invalid @enderror" name="psw" placeholder="Password" value="{{old("psw")}}"/>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input confirm password group-->
                    <div class="col">
                        <!--begin::Label-->
                        <label class="col-lg-12 col-form-label required fw-bold fs-6">Confirm Password</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-12 fv-row">
                            <input type="password" class="form-control form-control-lg form-control-solid form-control @error('confirm_psw') is-invalid @enderror" name="confirm_psw" placeholder="Confirm Password" value="{{old("confirm_psw")}}"/>
                            @error('confirm_psw')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input confirm password group-->
                </div>
                <!--end::Input password group-->
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

{{-- <div>
    <form method="post">
        {{ csrf_field() }}
        <div class="container">
            <center>  <h1> JDC Doctor Registration</h1> </center>
            <hr>
            <label> Firstname </label>
            <input type="text" name="firstname" placeholder= "Firstname" size="15" required />
            <label> Lastname: </label>
            <input type="text" name="lastname" placeholder="Lastname" size="15"required />
            <div>
                <label>   Specialist  </label>

                <select id="specialist" name="specialist">
                    <option value="Mouth Surgery">Mouth Surgery</option>
                    <option value="Tooth Conservation">Tooth Conservation</option>
                    <option value="Oral Disease">Oral Disease</option>
                    <option value="Orthodontics">Orthodontics</option>
                    <option value="Periodontics">Periodontics</option>
                    <option value="Prosthodontics">Prosthodontics</option>
                    <option value="Dental Radiology">Dental Radiology</option>
                </select>
            </div>
            <div>
                <label>   Gender :  </label><br>
                <input type="radio" value="Male" name="gender" checked > Male
                <input type="radio" value="Female" name="gender"> Female
                <input type="radio" value="Other" name="gender"> Other

            </div>
            <label>   Phone :  </label>
            <input type="text" name="phone" placeholder="phone no." size="15"/ required>
            <label> Current Address : </label>
            <input type="text" name="address" placeholder="Current Address" size="15" required/>
            <label for="email"><b>Email</b></label>
            <input type="email" placeholder="Enter Email" name="email" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <label for="psw-repeat"><b>Re-type Password</b></label>
            <input type="password" placeholder="Retype Password" name="psw-repeat" required>
            <button type="submit" class="registerbtn">Register</button>
    </form>
</div> --}}
@endsection

@section('js')

@endsection

