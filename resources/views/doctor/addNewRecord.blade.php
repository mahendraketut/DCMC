@extends('doctor.navbar')

@section('title', 'New Medical Record')

@section('css')

@endsection

@section('content')
<div class="col-xl-12">
    <!--begin::Mixed Widget 2-->
    <div class="card card-xl-stretch mb-5 mb-xl-8">
        <div class="card-header pt-8">
            <div class="card-title">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1">Add New Record for {{$appointment->patient->name}}</span>
                </h3>
            </div>
        </div>

        <div class="card-body pt-5 pb-3">
            @if ($appointment->patient->username == null || $appointment->patient->gender == null || $appointment->patient->dob == null || $appointment->patient->phone == null || $appointment->patient->address == null || $appointment->patient->city == null)
            <div class="alert alert-dismissible bg-light-primary d-flex flex-column flex-sm-row w-100 p-5 mb-10">
                <!--begin::Icon-->
                <!--begin::Svg Icon | path: icons/duotune/general/gen007.svg-->
                <span class="svg-icon svg-icon-2hx svg-icon-primary me-4 mb-5 mb-sm-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path opacity="0.3" d="M12 22C13.6569 22 15 20.6569 15 19C15 17.3431 13.6569 16 12 16C10.3431 16 9 17.3431 9 19C9 20.6569 10.3431 22 12 22Z" fill="currentColor" />
                        <path d="M19 15V18C19 18.6 18.6 19 18 19H6C5.4 19 5 18.6 5 18V15C6.1 15 7 14.1 7 13V10C7 7.6 8.7 5.6 11 5.1V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V5.1C15.3 5.6 17 7.6 17 10V13C17 14.1 17.9 15 19 15ZM11 10C11 9.4 11.4 9 12 9C12.6 9 13 8.6 13 8C13 7.4 12.6 7 12 7C10.3 7 9 8.3 9 10C9 10.6 9.4 11 10 11C10.6 11 11 10.6 11 10Z" fill="currentColor" />
                    </svg>
                </span>
                <!--end::Svg Icon-->
                <!--end::Icon-->
                <!--begin::Content-->
                <div class="d-flex flex-column pe-0 pe-sm-10">
                    <h4 class="fw-bold">Alert</h4>
                    <span>
                        @if ($appointment->patient->gender == 'Male')
                            We found that Mr {{$appointment->patient->name}} is not completing his account profile. Please ask him to complete his profile to get better experience. Thank you.
                        @elseif ($appointment->patient->gender == 'Female')
                            We found that Mrs {{$appointment->patient->name}} is not completing her account profile. Please ask her to complete her profile to get better experience. Thank you.
                        @else
                            We found that your patient is not completing his/her account profile. Please ask him/her to complete his/her profile to get better experience. Thank you.
                        @endif
                    </span>
                </div>
                <!--end::Content-->
                <!--begin::Close-->
                <button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1 svg-icon-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </button>
                <!--end::Close-->
            </div>
            <!--end::Alert-->
            @endif
            <div class="accordion" id="kt_accordion_1">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="kt_accordion_1_header_1">
                        <button class="accordion-button fs-4 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#kt_accordion_1_body_1" aria-expanded="true" aria-controls="kt_accordion_1_body_1">
                            Appointment Detail
                        </button>
                    </h2>
                    <div id="kt_accordion_1_body_1" class="accordion-collapse collapse show" aria-labelledby="kt_accordion_1_header_1" data-bs-parent="#kt_accordion_1">
                        <div class="accordion-body">
                            <label class="col col-col col-form-label fw-bold fs-6 fw-bold fs-6">Appointment ID</label>
                            <div class="col md-12">
                                <input type="text" class="form-control" value="{{$appointment->appointment_id}}" disabled>
                            </div>
                            <label class="col col-col col-form-label fw-bold fs-6 fw-bold fs-6">Appointment Time</label>
                            <div class="col md-12">
                                <input type="text" class="form-control" value="{{$appointment->schedule->start_time}} - {{$appointment->schedule->end_time}}" disabled>
                            </div>
                            <label class="col col-col col-form-label fw-bold fs-6 fw-bold fs-6">Appointment Status</label>
                            <div class="col md-12">
                                <input type="text" class="form-control" value="{{$appointment->status}}" disabled>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="kt_accordion_1_header_2">
                        <button class="accordion-button fs-4 fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#kt_accordion_1_body_2" aria-expanded="false" aria-controls="kt_accordion_1_body_2">
                        Patient Detail
                        </button>
                    </h2>
                    <div id="kt_accordion_1_body_2" class="accordion-collapse collapse" aria-labelledby="kt_accordion_1_header_2" data-bs-parent="#kt_accordion_1">
                        <div class="accordion-body">
                            <div class="row g-3">
                                <div class="col md-6">
                                    <label class="col col-col col-form-label fw-bold fs-6 fw-bold fs-6">Patient ID</label>
                                    <div class="col md-12">
                                        <input type="text" class="form-control" value="{{$appointment->patient->user_id}}" disabled>
                                    </div>
                                </div>
                                <div class="col md-6">
                                    <label class="col col-col col-form-label fw-bold fs-6 fw-bold fs-6">Patient Name</label>
                                    <div class="col md-12">
                                        <input type="text" class="form-control" value="{{$appointment->patient->name}}" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col md-6">
                                    <label class="col col-col col-form-label fw-bold fs-6 fw-bold fs-6">Patient Gender</label>
                                    <div class="col md-12">
                                        <input type="text" class="form-control" value="{{$appointment->patient->gender}}" disabled>
                                    </div>
                                </div>
                                <div class="col md-6">
                                    <label class="col col-col col-form-label fw-bold fs-6 fw-bold fs-6">Patient Age</label>
                                    <div class="col md-12">
                                        <input type="text" class="form-control" value="{{$age}}" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col md-6">
                                    <label class="col col-col col-form-label fw-bold fs-6 fw-bold fs-6">Patient Email</label>
                                    <div class="col md-12">
                                        <input type="text" class="form-control" value="{{$appointment->patient->email}}" disabled>
                                    </div>
                                </div>
                                <div class="col md-6">
                                    <label class="col col-col col-form-label fw-bold fs-6 fw-bold fs-6">Patient Phone</label>
                                    <div class="col md-12">
                                        @if ($appointment->patient->phone == null)
                                            <input type="text" class="form-control" value="-" disabled>
                                        @else
                                            <input type="text" class="form-control" value="{{$appointment->patient->phone}}" disabled>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col md-8">
                                    <label class="col col-col col-form-label fw-bold fs-6 fw-bold fs-6">Patient Address</label>
                                    <div class="col md-12">
                                        @if ($appointment->patient->address == null)
                                            <input type="text" class="form-control" value="-" disabled>
                                        @else
                                            <input type="text" class="form-control" value="{{$appointment->patient->address}}" disabled>
                                        @endif
                                    </div>
                                </div>
                                <div class="col md-4">
                                    <label class="col col-col col-form-label fw-bold fs-6 fw-bold fs-6">City</label>
                                    <div class="col md-12">
                                        @if ($appointment->patient->city == null)
                                            <input type="text" class="form-control" value="-" disabled>
                                        @else
                                            <input type="text" class="form-control" value="{{$appointment->patient->city}}" disabled>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="kt_accordion_1_header_3">
                        <button class="accordion-button fs-4 fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#kt_accordion_1_body_3" aria-expanded="false" aria-controls="kt_accordion_1_body_3">
                        Medical Record History
                        </button>
                    </h2>
                    <div id="kt_accordion_1_body_3" class="accordion-collapse collapse" aria-labelledby="kt_accordion_1_header_3" data-bs-parent="#kt_accordion_1">
                        <div class="accordion-body">
                            <div class="table-responsive">
                                <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4" id="medicalrecord_table">
                                    <!--begin::Table head-->
                                    <thead>
                                        <tr class="fw-bolder text-muted bg-light">
                                            <th class="min-w-50px">No</th>
                                            <th class="min-w-100px">Record ID</th>
                                            <th class="min-w-100px">Date</th>
                                            <th class="min-w-150px">Doctor</th>
                                            <th class="min-w-100px">Medical Category</th>
                                            <th class="min-w-100px">Notes</th>
                                            <th class="min-w-20px">Action</th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        @foreach ($medicalrecords as $medicalrecord)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$medicalrecord->record_id}}</td>
                                                <td>{{$medicalrecord->date}}</td>
                                                <td>{{$medicalrecord->Doctor->name}}</td>
                                                <td>{{$medicalrecord->MedicalCategory->name}}</td>
                                                <td>{{$medicalrecord->notes}}</td>
                                                <td>
                                                    <a href="{{url('/doctor.medicalrecord.edit/'.Crypt::encrypt($medicalrecord->id))}}" class="btn btn-sm btn-light btn-active-success me-2" alt="Make Medical Record Data">
                                                        <i class="fas fa-file-medical-alt"></i>
                                                        Detail
                                                    </a>
                                                    {{-- <a href="{{url('/doctor.medicalrecord.edit/'.$medicalrecord->id)}}" class="btn btn-sm btn-light btn-active-success me-2" alt="Make Medical Record Data">
                                                        <i class="fas fa-file-medical-alt"></i>
                                                        Detail
                                                    </a> --}}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                {{-- {{$dataTable->table()}} --}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="kt_accordion_1_header_4">
                        <button class="accordion-button fs-4 fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#kt_accordion_1_body_4" aria-expanded="false" aria-controls="kt_accordion_1_body_4">
                        Diagnosis form
                        </button>
                    </h2>
                    <div id="kt_accordion_1_body_4" class="accordion-collapse collapse" aria-labelledby="kt_accordion_1_header_4" data-bs-parent="#kt_accordion_1">
                        <div class="accordion-body">
                            <form method="POST" action="{{route('doctor.medicalrecordBook.saverecord')}}">
                                {{ csrf_field() }}
                                <!--begin:card body-->
                                <input type="hidden" name="appointment_id" value="{{$appointment->id}}">
                                <input type="hidden" name="doctor_id" value="{{Auth::user()->id}}">
                                <input type="hidden" name="patient_id" value="{{$appointment->patient->id}}">

                                <label class="col col-form-label fw-bold fs-6">Complaints</label>
                                <textarea class="form-control" name="complaints" id="complaints" rows="6" maxlength="255" required></textarea>
                                <div class="invalid-feedback">
                                    Please enter complaints.
                                </div>

                                <label class="col col-form-label fw-bold fs-6">Diagnosis</label>
                                <textarea class="form-control" name="diagnosis" id="diagnosis" rows="6" maxlength="255" required></textarea>
                                <div class="invalid-feedback">
                                    Please enter diagnosis.
                                </div>

                                <label class="col col-form-label fw-bold fs-6">Medical Category</label>
                                <div class="row">
                                    <div class="col-md-9">
                                        <select class="form-select" name="medical_category" id="medical_category" required>
                                            <option value="">Choose one...</option>
                                            @foreach ($medicalCategories as $medicalcategory)
                                                <option value="{{$medicalcategory->id}}">{{$medicalcategory->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addMedicalCategoryModal">
                                            {{-- <i class="fas fa-plus"></i> --}}
                                            <span class="d-none d-md-inline">Add New Medical Category</span>
                                        </button>
                                    </div>
                                </div>


                                {{-- <label class="col col-form-label fw-bold fs-6">Prescription</label>
                                <textarea class="form-control" name="prescription" id="prescription" rows="6" maxlength="255" required></textarea>
                                <div class="invalid-feedback">
                                    Please enter prescription.
                                </div> --}}

                                <label class="col col-form-label fw-bold fs-6">Notes</label>
                                <textarea class="form-control" name="notes" id="notes" rows="6" maxlength="255" required></textarea>
                                <div class="invalid-feedback">
                                    Please enter notes.
                                </div>

                                <label class="col col-form-label fw-bold fs-6">Status</label>
                                <select class="form-select" name="status" id="status" required>
                                    <option value="Pending">Pending</option>
                                    <option value="Follow Up">Follow Up</option>
                                    <option value="Closed">Closed</option>
                                </select>

                                <div class="d-flex justify-content-end mt-5">
                                    <button type="submit" class="btn btn-primary me-3">Submit</button>
                                    <button type="reset" class="btn btn-light">Reset</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="kt_accordion_1_header_5">
                        <button class="accordion-button fs-4 fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#kt_accordion_1_body_5" aria-expanded="false" aria-controls="kt_accordion_1_body_5">
                        Prescription Form
                        </button>
                    </h2>
                    <div id="kt_accordion_1_body_5" class="accordion-collapse collapse" aria-labelledby="kt_accordion_1_header_5" data-bs-parent="#kt_accordion_1">
                        <div class="accordion-body">
                            <form method="POST" action="{{route('doctor.medicalrecordBook.recordPrescription')}}">
                                {{ csrf_field() }}
                                <div class="card-body py-0">
                                    <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4" id="medicalrecord_table">
                                        <!--begin::Table head-->
                                        <thead>
                                            <tr class="fw-bolder text-muted bg-light">
                                                <th class="min-w-50px">No</th>
                                                <th class="min-w-100px">Medicine Name</th>
                                                <th class="min-w-100px">Number of Medicine</th>
                                                <th class="min-w-150px">Dosage</th>
                                                <th class="min-w-100px">Date Given</th>
                                                <th class="min-w-100px">Status</th>
                                                <th class="min-w-20px">Action</th>
                                            </tr>
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody>
                                            @foreach ($prescription as $prescription)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$prescription->medicine->name}}</td>
                                                    <td>{{$prescription->number_medicine}}</td>
                                                    <td>{{$prescription->dosage}}</td>
                                                    <td>{{$prescription->created_at->diffForHumans()}}</td>
                                                    <td>{{$prescription->status}}</td>
                                                    @if ($prescription->status == 'New')
                                                    <td>
                                                        <a href="{{url('/doctor.medicalrecord.addRecord.request/'.$prescription->id)}}" class="btn btn-primary" alt="Request Prescription">
                                                            <i class="fas fa-file-medical-alt"></i>
                                                            Request
                                                        </a>
                                                        {{-- <a href="{{url('/doctor.medicalrecord.edit/'.$medicalrecord->id)}}" class="btn btn-sm btn-light btn-active-success me-2" alt="Make Medical Record Data">
                                                            <i class="fas fa-file-medical-alt"></i>
                                                            Detail
                                                        </a> --}}
                                                    </td>
                                                    @else
                                                    @endif
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-md-5">
                                        <label class="col col-form-label fw-bold fs-6">Prescription</label>
                                        <select id="medicine" name="medicine" class="form-select form-select-solid form-select-lg fw-bold form-control @error('medicine') is-invalid @enderror">
                                            <option value="">Select Medicine...</option>
                                            @foreach($medicine as $medicine)
                                                <option value="{{$medicine->id}}">{{$medicine->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('medicine')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <input type="hidden" name="appointment_id" value="{{$appointment->id}}">
                                    <input type="hidden" name="patient_id" value="{{$appointment->patient->id}}">
                                    <input type="hidden" name="doctor_id" value="{{auth()->id()}}">
                                    <div class="col-md-3">
                                        <label class="col col-form-label fw-bold fs-6">No.</label>
                                        <input type="text" class="form-control" name="number_medicine" id="number_medicine" required placeholder="number of medicines prescribed ">
                                    </div>
                                    <div class="col-md-3">
                                        <label class="col col-form-label fw-bold fs-6">Dosage</label>
                                        <input type="text" class="form-control" name="dosage" id="dosage" required placeholder="dosage of the medicines">
                                    </div>
                                    <div class="col-md-1">
                                        <label class="col col-form-label fw-bold fs-6">Action</label>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" id="add-input">
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-end mt-5">
                                    <button type="submit" class="btn btn-primary me-3">Submit</button>
                                    <button type="reset" class="btn btn-light">Reset</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="addMedicalCategoryModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Medical Category</h5>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="bi bi-x fs-2"></i>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body">
                <form method="POST" action="{{route('doctor.medicalrecordBook.addcategory')}}">
                    {{ csrf_field() }}
                    <!--begin:card body-->

                    <label class="col col-form-label fw-bold fs-6">Medical Category Name</label>
                    <input class="form-control" type="text" name="name" id="name" required>
                    <div class="invalid-feedback">
                        Please enter medical category name.
                    </div>

                    <label class="col col-form-label fw-bold fs-6">Medical Category Description</label>
                    <textarea class="form-control" name="description" id="description" rows="6" maxlength="255"></textarea>
                    <div class="invalid-feedback">
                        Please enter medical category description.
                    </div>

                    <div class="d-flex justify-content-end mt-5">
                        <button type="submit" class="btn btn-primary me-3">Submit</button>
                        <button type="reset" class="btn btn-light">Reset</button>
                    </div>
                </form>
            </div>


        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="admin/assets/plugins/global/plugins.bundle.js"></script>
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script> --}}

@endpush

{{-- @section('js')
<script>
    $(document).ready(function() {
    var max_fields      = 4; //maximum input boxes allowed
    var wrapper         = $(".row"); //Fields wrapper
    var add_button      = $("#add-input"); //Add button ID

    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $("#rm").remove(); 

            $(wrapper).append('<div id="divs"><input type="text" name="mytext[1]"/>'); //add input box
             $(wrapper).append('<div id="divs"><input type="text" name="mytext[2]"/>'); //add input box
              $(wrapper).append('<div id="divs"><input type="text" name="mytext[3]"/></div>'); //add input box
               $(wrapper).append('<div id="divs"><input type="text" name="mytext[4]"/><a href="#" id="rm" class="remove_field">Remove</a></div>'); //add input box
                $(wrapper).append('<br>')
        }
    });

    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $("#divs").remove(); x--;
        $("#divs").remove(); x--;
        $("#divs").remove(); x--;
        $("#divs").remove(); x--;

    })
});
</script>
@endsection --}}