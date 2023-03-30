@extends('pharmacist.navbar')

@section('title', 'Add Medicines')

@section('css')

@endsection

@section('content')
<div class="col-xl-12">
    <!--begin::Mixed Widget 2-->
    <div class="card card-xl-stretch mb-5 mb-xl-8">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bolder fs-3 mb-1">Add Medicine</span>
            </h3>
        </div>
        <form method="POST" action="{{route('pharmacist.medicines.store')}}">
            {{ csrf_field() }}
            <div class="card-body border-top p-9">
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label fw-bold fs-6">Medicine Name</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <input type="text" class="form-control form-control-lg form-control-solid @error('name') is-invalid @enderror" name="name" placeholder="Enter Medicine Name" value="{{ old('name') }}"/>
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--end::Col-->
                </div>
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label fw-bold fs-6">Medicine Description</label>
                    <!--end::Label-->
                    <!--begin::Col for textarea-->
                    <div class="col-lg-8">
                        <textarea class="form-control form-control-lg form-control-solid @error('description') is-invalid @enderror" name="description" placeholder="Enter Medicine Description" rows="3">{{ old('description') }}</textarea>
                        @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--end::Col-->
                </div>
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label fw-bold fs-6">Medicine Price</label>
                    <!--end::Label-->
                    <!--begin::Col with input currency-->
                    <div class="col-lg-8">
                        <div class="input-group input-group-lg input-group-solid">
                            <span class="input-group-text">Rp</span>
                            <input type="text" class="form-control form-control-lg form-control-solid @error('price') is-invalid @enderror" name="price" placeholder="Enter Medicine Price" value="{{ old('price') }}"/>
                        </div>
                        @error('price')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--end::Col-->
                </div>
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label fw-bold fs-6">Medicine Quantity</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <input type="text" class="form-control form-control-lg form-control-solid @error('quantity') is-invalid @enderror" name="quantity" placeholder="Enter Medicine Quantity" value="{{ old('quantity') }}"/>
                        @error('quantity')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    <!--end::Col-->
                    </div>
                </div>
                {{-- <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label fw-bold fs-6">Medicine Image</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <input type="file" class="form-control form-control-lg form-control-solid @error('image') is-invalid @enderror" name="image" placeholder="Enter Medicine Image" value="{{ old('image') }}"/>
                        @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    <!--end::Col-->
                    </div>
                </div> --}}
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label fw-bold fs-6">Medicine Category</label>
                    <!--end::Label-->
                    <!--begin::Col get data from medicine_categories-->
                    <div class="col-lg-6">
                        <select class="form-select form-select-lg form-select-solid @error('category') is-invalid @enderror" name="category" aria-label="Select Medicine Category">
                            <option selected>Select Medicine Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                    </div>
                    <div class="col-lg-2"><a href="{{ '#' }}" class="btn btn-primary"><span><i class="fas fa-plus"></i></span>Category</a></div>
                    <!--end::Col-->
                </div>
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label fw-bold fs-6">Medicine Manufacturer</label>
                    <!--end::Label-->
                    <!--begin::Col -->
                    <div class="col-lg-8">
                        <input type="text" class="form-control form-control-lg form-control-solid @error('manufacturer_company') is-invalid @enderror" name="manufacturer_company" placeholder="Enter Medicine Manufacturer" value="{{ old('manufacturer_company') }}"/>
                        @error('manufacturer_company')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--end::Col-->
                </div>
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label fw-bold fs-6">Medicine Expired Date</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <input type="date" class="form-control form-control-lg form-control-solid @error('expiry_date') is-invalid @enderror" name="expiry_date" placeholder="Enter Medicine Expired Date" value="{{ old('expiry_date') }}"/>
                        @error('expiry_date')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--end::Col-->
                </div>
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label fw-bold fs-6">Medicine Manufacture Date</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <input type="date" class="form-control form-control-lg form-control-solid @error('manufacture_date') is-invalid @enderror" name="manufacture_date" placeholder="Enter Medicine Manufacture Date" value="{{ old('manufacture_date') }}"/>
                        @error('manufacture_date')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--end::Col-->
                </div>
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label fw-bold fs-6">Medicine Status</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <select class="form-select form-select-lg form-select-solid @error('status') is-invalid @enderror" name="status" aria-label="Select Medicine Status">
                            <option selected>Select Medicine Status</option>
                            <option value="Available">Available</option>
                            <option value="Not Available">Not Available</option>
                        </select>
                        @error('status')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--end::Col-->
                </div>
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label fw-bold fs-6">Medicine Generic Name</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <input type="text" class="form-control form-control-lg form-control-solid @error('generic_name') is-invalid @enderror" name="generic_name" placeholder="Enter Medicine Generic Name" value="{{ old('generic_name') }}"/>
                        @error('generic_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--end::Col-->
                </div>
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label fw-bold fs-6">Medicine Dosage</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <input type="text" class="form-control form-control-lg form-control-solid @error('dosage') is-invalid @enderror" name="dosage" placeholder="Enter Medicine Dosage" value="{{ old('dosage') }}"/>
                        @error('dosage')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--end::Col-->
                </div>
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label fw-bold fs-6">Medicine Side Effects</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <textarea class="form-control form-control-lg form-control-solid @error('side_effects') is-invalid @enderror" name="side_effects" placeholder="Enter Medicine Side Effects" value="{{ old('side_effects') }}"></textarea>
                        @error('side_effects')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--end::Col-->
                </div>
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label fw-bold fs-6">Medicine Precautions</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <textarea class="form-control form-control-lg form-control-solid @error('precautions') is-invalid @enderror" name="precautions" placeholder="Enter Medicine Precautions" value="{{ old('precautions') }}"></textarea>
                        @error('precautions')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--end::Col-->
                </div>
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label fw-bold fs-6">Storage Technic</label>
                    <!--end::Label-->
                    <!--begin::Col with looping select-->
                    <div class="col-lg-8">
                        <select class="form-select form-select-lg form-select-solid @error('storage') is-invalid @enderror" name="storage" aria-label="Select Medicine Storage Technic">
                            <option selected>Select Medicine Storage Technic</option>
                            <option value="Room Temperature">Room Temperature</option>
                            <option value="Refrigerated">Refrigerated</option>
                            <option value="Frozen">Frozen</option>
                        </select>
                        @error('storage')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--end::Col-->
                </div>
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label fw-bold fs-6">How to Use Medicine</label>
                    <!--end::Label-->
                    <!--begin::Col  enum -->
                    <div class="col-lg-8">
                        <select class="form-select form-select-lg form-select-solid @error('how_to_use') is-invalid @enderror" name="how_to_use" aria-label="Select Medicine How to Use">
                            <option selected>Select Medicine How to Use</option>
                            <option value="Oral">Oral</option>
                            <option value="Topical">Topical</option>
                            <option value="Inhalation">Inhalation</option>
                            <option value="Injection">Injection</option>
                        </select>
                        @error('how_to_use')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--end::Col-->
                </div>
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label fw-bold fs-6">How it Works</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <textarea class="form-control form-control-lg form-control-solid @error('how_it_works') is-invalid @enderror" name="how_it_works" placeholder="Enter Medicine How it Works" value="{{ old('how_it_works') }}"></textarea>
                        @error('how_it_works')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--end::Col-->
                </div>
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label fw-bold fs-6">Other Information</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <textarea class="form-control form-control-lg form-control-solid @error('other_information') is-invalid @enderror" name="other_information" placeholder="Enter Medicine Other Information" value="{{ old('other_information') }}"></textarea>
                        @error('other_information')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--end::Col-->
                </div>
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label fw-bold fs-6">Composition</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <textarea class="form-control form-control-lg form-control-solid @error('composition') is-invalid @enderror" name="composition" placeholder="Enter Medicine Composition" value="{{ old('composition') }}"></textarea>
                        @error('composition')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--end::Col-->
                </div>
                <div class="card-footer d-flex justify-content-end py-6 px-9">
                    <button type="reset" class="btn btn-light btn-active-light-primary me-2">Reset</button>
                    <button type="submit" class="btn btn-primary" id="kt_login_signin_submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@push('scripts')

@endpush
