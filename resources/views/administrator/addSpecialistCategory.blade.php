@extends('administrator.navbar')
@section('title', 'Specialist Category')
@section('css')
<!--begin::Page Vendors Styles(used by this page)-->
<link href="{{ asset('admin/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
<!--end::Page Vendors Styles-->
@endsection

@section('content')
<!--begin::Col-->
<div class="col-xl-12">
    <!--begin::Tables Widget 9-->
    <div class="card card-xl-stretch mb-5 mb-xl-8">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bolder fs-3 mb-1">Specialist Table</span>
            </h3>
            <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to add a user">
                <a href="{{route('admin.specialist.add')}}" class="btn btn-sm btn-light btn-active-primary" data-bs-toggle="modal" data-bs-target="#modal_add_schedule">
                <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                <span class="svg-icon svg-icon-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
                        <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
                    </svg>
                </span>
                <!--end::Svg Icon-->New Specialist</a>
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
                            <th class="ps-4 min-w-100px text-center">Name</th>
                            <th class="ps-4 min-w-50px text-center">Description</th>
                            <th class="ps-4 min-w-50px text-center">Total Doctor</th>
                            <th class="ps-4 min-w-50px text-center">Action</th>
                        </tr>
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody>
                        @if ($specialists->count() == 0)
                            <th class="ps-4 min-w-20px text-center" colspan="6">No Specialist Data Inputted</th>
                        @else
                            @foreach ($specialists as $specialist)
                            <tr>
                                <td class="ps-4 min-w-20px text-center">{{$loop->iteration}}</td>
                                <td class="ps-4 min-w-200px text-center">{{$specialist->name}}</td>
                                <td class="ps-4 min-w-50px text-center">{{$specialist->description}}</td>
                                {{-- <td class="ps-4 min-w-50px text-center">{{$schedule->start_time}}</td> --}}
                                <td class="ps-4 min-w-50px text-center">0</td>
                                <td class="ps-4 min-w-20px text-center">
                                    {{-- <a href="{{url('/admin.dashboard/schedule.edit/'.$specialist->id)}}" class="btn btn-primary">Edit</a> --}}
                                    {{-- button to go to edit specialist modal --}}
                                    {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal_edit_schedule" data-id="Crypt::encrypt($specialist->id)">Edit</button> --}}
                                    <a href="{{url('/admin.specialist.edit/'.Crypt::encrypt($specialist->id))}}" class="btn btn-primary">Edit</a>
                                    {{-- <a href="{{url('/admin.specialist.delete/'.$specialist->id)}}" class="btn btn-danger">Delete</a> --}}

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
<!--end::Col-->

<!--begin::Modal Add Schedule-->
<div class="modal fade" id="modal_add_schedule" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header" id="modal_add_schedule_header">
                <!--begin::Modal title-->
                <h2 class="fw-bolder">Add New Specialist</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                <!--begin::Form-->
                <form class="form" id="modal_add_schedule_form" action="{{route('admin.specialist.store')}}" method="POST">
                    @csrf
                    <!--begin::Input group-->
                    <!--begin::Label-->
                    <label class="col-lg-12 col-form-label required fw-bold fs-6">Name</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-12 fv-row">
                        <input type="text" class="form-control form-control-lg form-control-solid form-control @error('name') is-invalid @enderror" name="name" placeholder="Name" value="{{ old("name") }}"/>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <!--end::Col-->
                    <!--begin::label-->
                    <label class="col-lg-12 col-form-label required fw-bold fs-6">Description</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-12 fv-row">
                        <textarea class="form-control form-control-lg form-control-solid form-control @error('description') is-invalid @enderror" name="description" placeholder="Description" value="{{ old("description") }}"></textarea>
                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <!--end::Col-->
                    <!--end::Input group-->


                    <!--begin::Actions-->
                    <div class="text-center pt-15">
                        <button type="submit" id="modal_add_schedule_submit" class="btn btn-primary">
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

<!--end::Modal Add Schedule-->

<!--begin::Modal Edit Schedule-->
{{-- <div class="modal fade" id="modal_edit_schedule" tabindex="-1" aria-hidden="true" role="dialog">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header" id="modal_edit_schedule_header">
                <!--begin::Modal title-->
                <h2 class="fw-bolder">Edit Specialist</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <!--end::Close-->
                <span aria-hidden="true">&times;</span>
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                <!--begin::Form-->
                <form class="form" id="modal_edit_schedule_form" action="{{route('admin.specialist.update')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id" id="id" value="{{$specialist->id}}">
                    <!--begin::Input group-->
                    <!--begin::Label-->
                    <label class="col-lg-12 col-form-label required fw-bold fs-6">Specialist</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-12 fv-row">
                        <input type="text" class="form-control form-control-lg form-control-solid form-control @error('name') is-invalid @enderror" name="name" placeholder="Specialist" value="{{ old('name', $specialist->name) }}"/>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <!--end::Col-->
                    <!--begin::label-->
                    <label class="col-lg-12 col-form-label required fw-bold fs-6">Description</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-12 fv-row">
                        <input type="text" class="form-control form-control-lg form-control-solid form-control @error('description') is-invalid @enderror" name="description" placeholder="Description" value="{{ old('description', $specialist->description) }}"/>
                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <!--end::Col-->
                    <!--end::Input group-->
                    <!--begin::Actions-->
                    <div class="text-center pt-15">
                        <button type="submit" id="modal_edit_schedule_submit" class="btn btn-primary">
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
</div> --}}
@endsection

@push('scripts')

@endpush

