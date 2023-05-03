@extends('administrator.navbar')
@section('title', 'Update Services')
@section('css')
@endsection
@section('content')
    <div class="card mb-5 mb-xl-10">
        <!--begin::Card header-->
        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
            data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
            <!--begin::Card title-->
            <div class="card-title m-0">
                <h3 class="fw-bolder m-0">Edit Service</h3>
            </div>
            <!--end::Card title-->
        </div>
        <!--begin::Card header-->
        <!--begin::Content-->
        <div id="kt_account_settings_profile_details" class="collapse show">
            @if (Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('success') }}
                </div>
            @endif
            <!--begin::Form-->
            <form method="POST" action="{{ route('admin.services.update') }}">
                {{ csrf_field() }}
                <!--begin::Card body-->
                {{-- <input type="hidden" name="id" value="{{$specialist->id}}"> --}}
                <div class="card-body border-top p-9 row">
                    <!--begin::Input name group-->
                    <input type="hidden" name="id" id="id" value="{{ $services->id }}">
                    <!--begin::Input group-->
                    <!--begin::Label-->
                    <label class="col-lg-12 col-form-label required fw-bold fs-6">Service Name</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-12 fv-row">
                        <input type="text"
                            class="form-control form-control-lg form-control-solid form-control @error('service_name') is-invalid @enderror"
                            name="service_name" placeholder="Service Name"
                            value="{{ old('name', $services->service_name) }}" />
                        @error('service_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <!--end::Input-->
                    </div>
                    <!--end::Col-->
                    <!--begin::label-->
                    <label class="col-lg-12 col-form-label required fw-bold fs-6">Description</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-12 fv-row">
                        <textarea name="description"
                            class="form-control form-control-lg form-control-solid form-control @error('description') is-invalid @enderror"
                            rows="5" placeholder="Enter Description">{{ old('description', $services->description) }}</textarea>
                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <!--end::Input-->
                    </div>
                    <!--end::Col-->
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <!--begin::Label-->
                    <label class="col-lg-12 col-form-label required fw-bold fs-6">Price</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Rp</span>
                        <input type="text" name="price" class="form-control" placeholder="Enter Price"
                            value="{{ old('price', $services->price) }}" />
                        @error('price')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <!--end::Col-->
                    <!--end::Input group-->
                </div>
                <!--end::Input group-->
                <!--begin::Actions-->
                <div class="card-footer d-flex justify-content-end py-6 px-9">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
            <!--end::Form-->
        </div>
        <!--end::Content-->
    </div>
@endsection
@section('js')
@endsection
