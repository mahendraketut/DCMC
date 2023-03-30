@extends('doctor.navbar')
@section('title', 'Detail Medical Record')
@section('css')
@endsection

@section('content')
<div class="col-xl-12">
    <!--begin::Mixed Widget 2-->
    <div class="card card-xl-stretch mb-5 mb-xl-8">
        <div class="card-header pt-8">
            <div class="card-title">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1">Detail for Medical Record Number #{{$medicalrecords->record_id}}</span>
                </h3>
            </div>
        </div>
        <div class="card-body pt-8">
            <form method="POST" action="{{route('doctor.medicalrecordBook.update')}}">
                {{ csrf_field() }}
                <!--begin:card body-->
                <input type="hidden" name="id" value="{{$medicalrecords->id}}">
                <input type="hidden" name="doctor_id" value="{{Auth::user()->id}}">
                <input type="hidden" name="patient_id" value="{{$medicalrecords->Patient->id}}">

                <label class="col col-form-label fw-bold fs-6">Complaints</label>
                <textarea class="form-control" name="complaints" id="complaints" rows="6" maxlength="255" required>{{$medicalrecords->complaints}}</textarea>
                <div class="invalid-feedback">
                    Please enter complaints.
                </div>

                <label class="col col-form-label fw-bold fs-6">Diagnosis</label>
                <textarea class="form-control" name="diagnosis" id="diagnosis" rows="6" maxlength="255" required>{{$medicalrecords->diagnosis}}</textarea>
                <div class="invalid-feedback">
                    Please enter diagnosis.
                </div>

                <label class="col col-form-label fw-bold fs-6">Medical Category</label>
                <div class="row">
                    <div class="col-md-9">

                        <select class="form-select" name="medical_category_id" id="medical_category_id" required>
                            <option value="">Select Medical Category...</option>
                            @foreach ($medicalcategories as $medicalcategory)
                                <option value="{{$medicalcategory->id}}" {{($medicalcategory->id == $medicalrecords->medical_category_id) ? 'selected' : ''}}>{{$medicalcategory->name}}</option>
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
                <textarea class="form-control" name="notes" id="notes" rows="6" maxlength="255" required>{{$medicalrecords->notes}}</textarea>
                <div class="invalid-feedback">
                    Please enter notes.
                </div>

                <label class="col col-form-label fw-bold fs-6">Status</label>
                <div class="row">
                    <div class="col-md-9">
                        <select class="form-select" name="status" id="status" required>
                            <option value="Pending" {{($medicalrecords->status == "Pending") ? 'selected' : ''}}>Pending</option>
                            <option value="Follow Up" {{($medicalrecords->status == "Follow Up") ? 'selected' : ''}}>Follow Up</option>
                            <option value="Closed" {{($medicalrecords->status == "Closed") ? 'selected' : ''}}>Closed</option>
                        </select>
                    </div>

                <div class="d-flex justify-content-end mt-5">
                    <button type="submit" class="btn btn-primary me-3">Submit</button>
                    <button type="reset" class="btn btn-light">Reset</button>
                </div>
            </form>
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
