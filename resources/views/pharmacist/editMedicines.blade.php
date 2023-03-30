@extends('pharmacist.navbar')
@section('title', 'Edit Medicines')
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
        <form method="POST" action="{{route('pharmacist.medicines.update')}}">
            {{ csrf_field() }}
            <!--begin::Card body-->
            <input type="hidden" name="id" value="{{$medicines->id}}">
            <div class="card-body border-top p-9 row">
                <h6 class="text-dark fw-bolder">Medicines Details:</h6>

                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-2 col-form-label required fw-bold fs-6">Name</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-10 fv-row">
                        <input type="text" name="name" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 form-control @error('name') is-invalid @enderror" placeholder="Full name" value="{{old('name', $medicines->name)}}" />
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group description-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-2 col-form-label required fw-bold fs-6">Description</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-10 fv-row">
                        <textarea class="form-control form-control-lg form-control-solid form-control @error('description') is-invalid @enderror" name="description" placeholder="Description" value="{{ old("description") }}">{{$medicines->description}}</textarea>
                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
                <div class="row">
                    <div class="col-lg-6">
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Price</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <div class="input-group input-group-lg input-group-solid">
                                    <span class="input-group-text">Rp</span>
                                    <input type="text" class="form-control form-control-lg form-control-solid @error('price') is-invalid @enderror" name="price" placeholder="Enter Medicine Price" value="{{ old('price', $medicines->price) }}"/>
                                </div>
                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                    </div>
                    <div class="col-lg-6">
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label fw-bold fs-6">Quantity</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="quantity" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 form-control @error('quantity') is-invalid @enderror" placeholder="Quantity" value="{{old('quantity', $medicines->quantity)}}" />
                                @error('quantity')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                    </div>
                </div>
                <!--begin::Input group-->
                <div class="row">
                    <div class="col-lg-6">
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Category</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <select name="category_id" class="form-select form-select-solid form-select-lg fw-bold @error('category') is-invalid @enderror" data-control="select2" data-placeholder="Select Category" data-hide-search="true">
                                    <option value="">Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{$category->id}}" {{ $category->id == $medicines->category_id ? 'selected' : '' }}>{{$category->name}}</option>
                                    @endforeach
                                </select>
                                @error('category')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                    </div>
                    <div class="col-lg-6">
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Status</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <select name="status" class="form-select form-select-solid form-select-lg fw-bold @error('status') is-invalid @enderror" data-control="select2" data-placeholder="Select Status" data-hide-search="true">
                                    <option value="">Select Status</option>
                                    <option value="Available" {{ $medicines->status == 'Available' ? 'selected' : '' }}>Available</option>
                                    <option value="Not Available" {{ $medicines->status == 'Not Available' ? 'selected' : '' }}>Not Available</option>
                                </select>
                                @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                    </div>
                </div>
                <!--begin::Input group-->
                <!--begin::Input group-->
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row">
                    <div class="col-lg-6">
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label fw-bold fs-6">Expiry Date</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="date" name="expiry_date" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 form-control @error('expiry_date') is-invalid @enderror" placeholder="Expiry Date" value="{{old('expiry_date', $medicines->expiry_date)}}" />
                                @error('expiry_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                    </div>
                    <div class="col-lg-6">
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label fw-bold fs-6">Manufacture Date</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="date" name="manufacture_date" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 form-control @error('manufacture_date') is-invalid @enderror" placeholder="Manufacture Date" value="{{old('manufacture_date', $medicines->manufacture_date)}}" />
                                @error('manufacture_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                    </div>
                </div>
                <!--begin::Input group-->
                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-2 col-form-label required fw-bold fs-6">Manufacture Company</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-10 fv-row">
                        <input type="text" name="manufacture_company" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 form-control @error('manufacture_company') is-invalid @enderror" placeholder="Manufacture Company" value="{{old('manufacture_company', $medicines->manufacture_company)}}" />
                        @error('manufacture_company')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-2 col-form-label fw-bold fs-6">Generic Name</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-10 fv-row">
                        <input type="text" name="generic_name" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 form-control @error('generic_name') is-invalid @enderror" placeholder="Generic Name" value="{{old('generic_name', $medicines->generic_name)}}" />
                        @error('generic_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-2 col-form-label fw-bold fs-6">Dosage</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-10 fv-row">
                        <input type="text" name="dosage" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 form-control @error('dosage') is-invalid @enderror" placeholder="Dosage" value="{{old('dosage', $medicines->dosage)}}" />
                        @error('dosage')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-2 col-form-label fw-bold fs-6">Side Effect</label>
                    <!--end::Label-->
                    <!--begin::Col side effect text area-->
                    <div class="col-lg-10 fv-row">
                        <textarea name="side_effects" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 form-control @error('side_effects') is-invalid @enderror" placeholder="Side Effects" rows="3">{{$medicines->side_effects}}</textarea>
                        @error('side_effects')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <!--end::Col side effect text area-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group precautions-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-2 col-form-label fw-bold fs-6">Precautions</label>
                    <!--end::Label-->
                    <!--begin::Col precautions text area-->
                    <div class="col-lg-10 fv-row">
                        <textarea name="precautions" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 form-control @error('precautions') is-invalid @enderror" placeholder="Precautions" rows="3">{{$medicines->precautions}}</textarea>
                        @error('precautions')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <!--end::Col precautions text area-->
                </div>
                <!--end::Input group precautions-->
                <!--begin::Input group for storage and how to use-->
                <div class="row">
                    <div class="col-lg-6">
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Storage</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <select name="storage" class="form-select form-select-solid form-select-lg fw-bold @error('storage') is-invalid @enderror" data-control="select2" data-placeholder="Select Status" data-hide-search="true">
                                    <option value="">Select Storage Method</option>
                                    <option value="Room Temperature" {{ $medicines->storage == 'Room Temperature' ? 'selected' : '' }}>Room Temperature</option>
                                    <option value="Refrigerated" {{ $medicines->storage == 'Refrigerated' ? 'selected' : '' }}>Refrigerated</option>
                                    <option value="Frozen" {{ $medicines->storage == 'Frozen' ? 'selected' : '' }}>Frozen</option>
                                </select>
                                @error('storage')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                    </div>
                    <!--end::Col storage text area-->
                    <!--begin::Label-->
                    <div class="col-lg-6">
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">How To Use</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <select name="how_to_use" class="form-select form-select-solid form-select-lg fw-bold @error('how_to_use') is-invalid @enderror" data-control="select2" data-placeholder="Select Status" data-hide-search="true">
                                    <option value="">Select how to use Method</option>
                                    <option value="Oral" {{ $medicines->how_to_use == 'Oral' ? 'selected' : '' }}>Oral</option>
                                    <option value="Topical" {{ $medicines->how_to_use == 'Topical' ? 'selected' : '' }}>Topical</option>
                                    <option value="Inhalation" {{ $medicines->how_to_use == 'Inhalation' ? 'selected' : '' }}>Inhalation</option>
                                    <option value="Injection" {{ $medicines->how_to_use == 'Injection' ? 'selected' : '' }}>Injection</option>
                                </select>
                                @error('how_to_use')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                    </div>
                    <!--end::Col how to use text area-->
                </div>
                <!--end::Input group for storage and how to use-->
                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-2 col-form-label fw-bold fs-6">How It Works</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-10 fv-row">
                        <textarea name="how_it_works" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 form-control @error('how_it_works') is-invalid @enderror" placeholder="How it works" rows="3">{{$medicines->how_it_works}}</textarea>
                        @error('how_it_works')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-2 col-form-label fw-bold fs-6">Other Information</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-10 fv-row">
                        <textarea name="other_information" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 form-control @error('other_information') is-invalid @enderror" placeholder="Other Information" rows="3">{{$medicines->other_information}}</textarea>
                        @error('other_information')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-2 col-form-label fw-bold fs-6">Composition</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-10 fv-row">
                        <textarea name="composition" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 form-control @error('composition') is-invalid @enderror" placeholder="Composition" rows="3">{{$medicines->composition}}</textarea>
                        @error('composition')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
            </div>
            <!--end::Input group-->
            <!--begin::Actions-->
            <div class="card-footer d-flex justify-content-end py-6 px-9">
                <button type="submit" class="btn btn-primary" >Submit</button>
            </div>
        </form>
        <!--end::Form-->
    </div>
    <!--end::Content-->
</div>
@endsection

@push('scripts')

@endpush
