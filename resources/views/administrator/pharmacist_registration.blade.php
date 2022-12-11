@extends('administrator.navbar')
@section('title', 'Register Pharmacist')
@section('css')

@endsection

@section('content')
<div class="card mb-5 mb-xl-10">
    <!--begin::Card header-->
    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
        <!--begin::Card title-->
        <div class="card-title m-0">
            <h3 class="fw-bolder m-0">Register Pharmacist Form</h3>
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
              <!--begin::Input group-->
              <div class="row mb-6">
                <div class="col">
                  <label class="col-lg-12 col-form-label required fw-bold fs-6"> Firstname </label>
                  <div class="col-lg-12 fv-row">
                    <input type="text" name="firstname" placeholder= "Firstname" class="form-control form-control-lg form-control-solid form-control @error('firstname') is-invalid @enderror" required />
                    @error('firstname')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                </div>
                <div class="col">
                  <label class="col-lg-12 col-form-label required fw-bold fs-6"> Lastname </label>
                  <div class="col-lg-12 fv-row">
                    <input type="text" name="lastname" placeholder= "Lastname" class="form-control form-control-lg form-control-solid form-control @error('lastname') is-invalid @enderror" required />
                    @error('lastname')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                </div>
              </div>
              <!--end::Input group-->
              <!--begin::Input gender group-->
              <div class="row mb-6">
                <div class="col">
                  <label class="col-lg-12 col-form-label required fw-bold fs-6">Gender</label>
                  <select id="gender" name="gender" class="form-select form-select-solid form-select-lg fw-bold form-control @error('gender') is-invalid @enderror">
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
              </div>
              <!--end::Input gender group-->
              <!--begin::Input date of birth group-->
              <div class="row mb-6">
                  <div class="col">
                    <label class="col-lg-12 col-form-label required fw-bold fs-6">Date of Birth</label>
                    <div class="col-lg-12 fv-row">
                        <input type="date" name="dob" placeholder= "Date of Birth" class="form-control form-control-lg form-control-solid form-control @error('dateofbirth') is-invalid @enderror" required />
                        @error('dateofbirth')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>
                  </div>
              </div>
              <!--end::Input date of birth group-->
              <!--begin::Input address and city group-->
              <div class="row mb-6">
                  <div class="col-md-9">
                    <label class="col-lg-12 col-form-label fw-bold fs-6"> Address </label>
                    <div class="col-lg-12 fv-row">
                        <input type="text" name="address" placeholder= "Address" class="form-control form-control-lg form-control-solid form-control @error('address') is-invalid @enderror" required />
                        @error('address')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>
                  </div>
                  <div class="col-md-3">
                    <label class="col-lg-12 col-form-label fw-bold fs-6"> City </label>
                    <div class="col-lg-12 fv-row">
                        <input type="text" name="city" placeholder= "City" class="form-control form-control-lg form-control-solid form-control @error('city') is-invalid @enderror" required />
                        @error('city')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>
                  </div>
              </div>
              <!--end::Input address and city group-->
              <!--begin::Input group-->
              <div class="row mb-6">
                <div class="col">
                  <label class="col-lg-12 col-form-label required fw-bold fs-6"> License</label>
                  <div class="col-lg-12 fv-row">
                    <input type="text" name="license" placeholder= "License Number" class="form-control form-control-lg form-control-solid form-control @error('license') is-invalid @enderror" required />
                    @error('license')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                </div>
                <div class="col">
                  <label class="col-lg-12 col-form-label required fw-bold fs-6"> Phone </label>
                  <div class="col-lg-12 fv-row">
                    <input type="text" name="phone" placeholder= "Phone" class="form-control form-control-lg form-control-solid form-control @error('phone') is-invalid @enderror" required />
                    @error('phone')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                </div>
              </div>
              <!--end::Input group-->
              <!--begin::Input username and email group-->
              <div class="row mb-6">
                  <div class="col-md-6">
                    <label class="col-lg-12 col-form-label required fw-bold fs-6"> Username </label>
                    <div class="col-lg-12 fv-row">
                        <input type="text" name="username" placeholder= "Username" class="form-control form-control-lg form-control-solid form-control @error('username') is-invalid @enderror" required />
                        @error('username')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label class="col-lg-12 col-form-label required fw-bold fs-6"> Email </label>
                    <div class="col-lg-12 fv-row">
                        <input type="email" name="email" placeholder= "Email" class="form-control form-control-lg form-control-solid form-control @error('email') is-invalid @enderror" required />
                        @error('email')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>
                  </div>
              </div>
              <!--end::Input username and email group-->
              <!--begin::Input password group-->
              <div class="row">
                <!--begin::Input password group-->
                <div class="col mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-12 col-form-label required fw-bold fs-6">Password</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-12 fv-row">
                        <input type="password" class="form-control form-control-lg form-control-solid form-control @error('password') is-invalid @enderror" name="psw" placeholder="Password" />
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
                        <input type="password" class="form-control form-control-lg form-control-solid form-control @error('confirm_psw') is-invalid @enderror" name="confirm_psw" placeholder="Confirm Password" />
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
          <center>  <h1> JDC Pharmacist Registration</h1> </center>
          <hr>
          <label> Firstname </label>
          <input type="text" name="firstname" placeholder= "Firstname" size="15" required />
          <label> Lastname: </label>
          <input type="text" name="lastname" placeholder="Lastname" size="15"required />
          <div>
              <label>   Gender :  </label><br>
              <input type="radio" value="Male" name="gender" checked > Male
              <input type="radio" value="Female" name="gender"> Female
              <input type="radio" value="Other" name="gender"> Other

          </div>
          <label> Nomor Ijin: </label>
          <input type="text" name="nomorijin" placeholder="Nomor Ijin" size="15"required />
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
      </div>
  </form>
</div> --}}
@endsection

@section('js')

@endsection
{{-- </body>
</html> --}}
