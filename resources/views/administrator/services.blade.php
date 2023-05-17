@extends('administrator.navbar')
@section('title', 'Services')
@section('css')
@endsection
@section('content')
    <div class="col-xl-12">
        <!--begin::Tables Widget 9-->
        <div class="card card-xl-stretch mb-5 mb-xl-8">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1">Clinic Services Table</span>
                </h3>
                <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover"
                    title="Click to add a new services">
                    <a href="{{ route('admin.services.add') }}" class="btn btn-sm btn-light btn-active-primary"
                        data-bs-toggle="modal" data-bs-target="#modal_add_services">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                        <span class="svg-icon svg-icon-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2"
                                    rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
                                <rect x="4.36396" y="11.364" width="16" height="2" rx="1"
                                    fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->New Service
                    </a>
                </div>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body py-3">
                <!--begin::Table container-->
                <div class="table-responsive">
                    <!--begin::Table-->
                    <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                        <!--begin::Table head-->
                        <thead>
                            <tr class="fw-bold fs-6 text-gray-800 border-bottom border-gray-300">
                                <th class="ps-4 min-w-20px text-center">#</th>
                                <th class="ps-4 min-w-100px text-center">Service ID</th>
                                <th class="ps-4 min-w-50px text-center">Service Name</th>
                                <th class="ps-4 min-w-50px text-center">Description</th>
                                <th class="ps-4 min-w-50px text-center">Price</th>
                                <th class="ps-4 min-w-50px text-center">Action</th>
                            </tr>
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody>
                            @if ($services->count() == 0)
                                <th class="ps-4 min-w-20px text-center" colspan="6">No services Data</th>
                            @else
                                @foreach ($services as $service)
                                    <tr>
                                        <td class="ps-4 min-w-20px text-center">{{ $loop->iteration }}</td>
                                        <td class="ps-4 min-w-200px text-center">{{ $service->service_id }}</td>
                                        <td class="ps-4 min-w-100px text-center">{{ $service->service_name }}</td>
                                        <td class="ps-4 min-w-50px text-center">{{ $service->description }}</td>
                                        <td class="ps-4 min-w-50px text-center">Rp {{ number_format($service->price) }}</td>
                                        <td class="ps-4 min-w-20px text-center">
                                            <a href="{{ url('admin.dashboard.services.edit/' . Crypt::encrypt($service->id)) }}"
                                                class="btn btn-primary">Edit</a>
                                            <a href="{{ url('admin.dashboard.services.delete/' . Crypt::encrypt($service->id)) }}"
                                                class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Table container-->
            </div>
            <!--begin::Body-->
        </div>
        <!--end::Tables Widget 9-->
    </div>

    <div class="modal fade" id="modal_add_services" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header" id="modal_add_services_header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bolder">Add New Service</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body scroll-y mx-5 mx-xl my-7">
                    <!--begin::Form-->
                    <form class="form" id="modal_add_services_form" action="{{ route('admin.services.store') }}"
                        method="POST">
                        @csrf
                        <!--begin::Input group-->
                        <!--begin::Label-->
                        <div class="fv-row mb-5">
                            <!--begin::Label-->
                            <label class="col col-form-label required fw-bold fs-6">Service Name</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col fv-row">
                                <input type="text" name="service_name"
                                    class="form-control form-control-lg form-control-solid" placeholder="Enter Service Name"
                                    value="{{ old('service_name') }}" />
                                @error('service_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <!--end::Input-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-5">
                            <label class="col col-form-label fw-bold fs-6">Description</label>
                            <div class="col fv-row">
                                <textarea name="description" class="form-control form-control-lg form-control-solid" rows="5"
                                    placeholder="Enter Description">{{ old('description') }}</textarea>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <!--end::Input-->
                            </div>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-5">
                            <label class="col col-form-label fw-bold fs-6">Price</label>
                            <!--begin::Col-->
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Rp</span>
                                <input type="text" name="price" class="form-control" placeholder="Enter Price"
                                    value="{{ old('price') }}" />
                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!--begin::Actions-->
                        <div class="text-center pt-10">
                            <button type="submit" id="modal_add_services_submit" class="btn btn-primary">
                                <span class="indicator-label">Submit</span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Modal body-->
            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection
