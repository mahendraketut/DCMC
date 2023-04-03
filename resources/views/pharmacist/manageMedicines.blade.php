@extends('pharmacist.navbar')
@section('title', 'Manage Medicines')
@section('css')
@endsection

@section('content')
    <div class="col-xl-12">
        <!--begin::Mixed Widget 2-->
        <div class="card card-xl-stretch mb-5 mb-xl-8">
            <!--begin::Header-->

            {{-- <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1">Medicine Table</span>
                </h3>


                <div class="card-toolbar">
                    <div class="row">
                        <div class="col">
                            <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to add a new medicines">
                                <a href="{{route('pharmacist.medicines.add')}}" class="btn btn-sm btn-light btn-active-primary" data-bs-toggle="modal" data-bs-target="#modal_add_medicines">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                <span class="svg-icon svg-icon-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
                                        <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->New Data</a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to import medicines">
                                <div class="dropdown dropdown-inline">
                                    <a href="#" class="btn btn-sm btn-light btn-active-primary" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-file-import"></i>
                                    Import Data</a>
                                    <!--begin::Menu-->
                                    <div class="dropdown-menu dropdown-menu dropdown-menu-end">
                                        <!--begin::Navigation with no bullet list-->
                                        <div class="d-flex flex-column">
                                            <div class="col">
                                                <div class="navi navi-hover navi-active navi-link-rounded navi-bold navi-icon-center navi-light-icon">
                                                    <div class="navi-item mb-2">
                                                        <a href="" class="navi-link py-4 pl-4">
                                                            <span class="navi-icon">
                                                                <i class="fas fa-file-csv"></i>
                                                            </span>
                                                            <span class="navi-text fs-5">CSV</span>
                                                        </a>
                                                    </div>
                                                    <div class="navi-item mb-2">
                                                        <a href="" class="navi-link py-4">
                                                            <span class="navi-icon">
                                                                <i class="fas fa-file-excel"></i>
                                                            </span>
                                                            <span class="navi-text fs-5">Excel</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!--end::Navigation-->
                                    </div>
                                    <!--end::Menu-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                {{-- <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to add a new medicines">
                    <a href="{{route('pharmacist.medicines.add')}}" class="btn btn-sm btn-light btn-active-primary" data-bs-toggle="modal" data-bs-target="#modal_add_medicines">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                    <span class="svg-icon svg-icon-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
                            <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->New Medicines</a>
                </div>

                <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to import medicines">
                    <div class="dropdown dropdown-inline">
                        <a href="#" class="btn btn-sm btn-light btn-active-primary" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="svg-icon svg-icon-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
                                    <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
                                </svg>
                            </span>
                            Import Medicines
                        </a>
                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                            <ul class="navi flex-column navi-hover py-2">
                                <li class="navi-header fw-bolder text-uppercase fs-7 text-primary pb-2">Choose an option:</li>
                                <li class="navi-item">
                                    <a href="" class="navi-link">
                                        <span class="navi-icon"><i class="fas fa-file-csv"></i></span>
                                        <span class="navi-text">Import CSV File</span>
                                    </a>
                                    {{-- <a href="{{route('pharmacist.medicines.import')}}" class="navi-link">
                                        <span class="navi-icon"><i class="fas fa-file-csv"></i></span>
                                        <span class="navi-text">Import CSV File</span>
                                    </a>
                                </li>
                                <li class="navi-item">
                                    <a href="" class="navi-link">
                                        <span class="navi-icon"><i class="fas fa-file-download"></i></span>
                                        <span class="navi-text">Download CSV Template</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div> --}}

            <div class="card-header pt-8">
                <div class="card-title">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bolder fs-3 mb-1">Medicine Table</span>
                    </h3>
                    {{-- <!--begin::Search-->
                    <div class="d-flex align-items-center position-relative my-1">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                        <span class="svg-icon svg-icon-1 position-absolute ms-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <input type="text" data-kt-filemanager-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="Search Files &amp; Folders" />
                    </div>
                    <!--end::Search--> --}}
                </div>
                <!--begin::Card toolbar-->
                <div class="card-toolbar">
                    <!--begin::Toolbar-->
                    <div class="d-flex justify-content-end" data-kt-filemanager-table-toolbar="base">
                        <!--begin::Add-->
                        <a href="{{route('pharmacist.medicines.add')}}" class="btn btn-light-primary me-3" data-bs-toggle="modal" data-bs-target="#modal_add_medicines">
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
                                    <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
                                </svg>
                            </span>
                            Add Medicine
                        </a>
                        <!--end::Add-->
                        <!--begin::Add customer-->
                        <a class="btn btn-light-success me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_upload">
                            <i class="fas fa-file-csv"></i>
                            Import Data from CSV
                        </a>
                        {{-- <a href="" class="btn btn-light-success">
                            <i class="fas fa-file-download"></i>
                            Download CSV Template
                        </a> --}}
                        <!--end::Add customer-->
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Card toolbar-->
            </div>

            {{-- <div class="separator separator-dashed my-4"></div> --}}
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body pt-5 pb-3">
                <!--begin::Table-->
                <div class="table-responsive">
                    <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4" id="medicines_table">
                        <!--begin::Table head-->
                        <thead>
                            <tr class="fw-bolder text-muted bg-light">
                                <th class="min-w-50px">No</th>
                                <th class="min-w-100px">Name</th>
                                <th class="min-w-50px">Category</th>
                                <th class="min-w-100px">Description</th>
                                <th class="min-w-50px">Action</th>
                            </tr>
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody>
                            @foreach ($medicines as $medicine)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$medicine->name}}</td>
                                    <td>{{$medicine->MedicineCategory->name}}</td>
                                    <td>{{$medicine->description}}</td>
                                    <td>
                                        <a href="{{url('/pharmacist.medicines.edit/'.Crypt::encrypt($medicine->id))}}" class="btn btn-sm btn-light btn-active-primary me-2"><i class="fas fa-pencil-alt"></i></a>

                                        <a href="{{route('pharmacist.medicines.delete', Crypt::encrypt($medicine->id))}}" class="btn btn-sm btn-light btn-active-danger"><i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <!--end::Table body-->
                    </table>

                </div>
                <!--end::Table-->

            </div>
        </div>
    </div>

    <!--begin::Modal Add Medicine-->
    <div class="modal fade" id="modal_add_medicines" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-800px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header" id="modal_add_medicines_header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bolder"><span><i class="fas fa-pills"></i></span>Add New Medicines</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body scroll-y mx-5 mx-xl-15">
                    <!--begin::Form-->
                    <form class="form" id="modal_add_medicines_form" action="{{route('pharmacist.medicines.store')}}" method="POST">
                        @csrf
                        <!--begin::Input group-->
                        <!--begin::Label-->
                        <label class="col-lg-12 col-form-label fw-bold fs-6">Name</label>
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
                        <label class="col-lg-12 col-form-label fw-bold fs-6">Description</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-12 fv-row">
                            <textarea class="form-control form-control-lg form-control-solid form-control @error('description') is-invalid @enderror" name="description" placeholder="Description">{{ old("description") }}</textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!--end::Col-->
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <!--begin::Label-->
                        <div class="row">
                            <div class="col-lg-7">
                                <label class="col-lg-12 col-form-label fw-bold fs-6">Price</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-12 fv-row">
                                    <div class="input-group input-group-lg input-group-solid">
                                        <span class="input-group-text">Rp</span>
                                        <input type="text" class="form-control form-control-lg form-control-solid @error('price') is-invalid @enderror" name="price" placeholder="Enter Medicine Price" value="{{ old('price') }}"/>
                                    </div>                                    @error('price')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <!--end::Col-->
                            </div>
                            <div class="col-lg-5">
                                <label class="col-lg-12 col-form-label fw-bold fs-6">Quantity</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-12 fv-row">
                                    <input type="text" class="form-control form-control-lg form-control-solid form-control @error('quantity') is-invalid @enderror" name="quantity" placeholder="Quantity" value="{{ old("quantity") }}"/>
                                    @error('quantity')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <!--end::Col-->
                            </div>
                        </div>
                        <!--end::Input group-->
                        <div class="row">
                            <div class="col-lg-6">
                                <!--begin::Input group-->
                                <!--begin::Label-->
                                <label class="col-lg-12 col-form-label fw-bold fs-6">Status</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-12 fv-row">
                                    <select class="form-select form-select-solid form-select-lg fw-bold @error('status') is-invalid @enderror" name="status">
                                        <option value="0">Select Status</option>
                                        <option value="1">Available</option>
                                        <option value="2">Not Available</option>
                                    </select>
                                    @error('status')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <!--end::Col-->
                                <!--end::Input group-->
                            </div>
                            <div class="col-lg-6">
                                <!--begin::Input group-->
                                <!--begin::Label-->
                                <label class="col-lg-12 col-form-label fw-bold fs-6">Category</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-12 fv-row">
                                    <select class="form-select form-select-solid form-select-lg fw-bold @error('category_id') is-invalid @enderror" name="category_id">
                                        <option value="0">Select Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <!--end::Col-->
                                <!--end::Input group-->
                            </div>
                        </div>
                        <!--begin::Input group-->
                        <!--begin::Label-->
                        <div class="row">
                            <div class="col-md-6">
                                <label class="col-lg-12 col-form-label fw-bold fs-6">Manufacture Date</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-12 fv-row">
                                    <input type="date" class="form-control form-control-lg form-control-solid form-control @error('manufacture_date') is-invalid @enderror" name="manufacture_date" placeholder="Manufacture Date" value="{{ old("manufacture_date") }}"/>
                                    @error('manufacture_date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <!--end::Col-->
                            </div>
                            <div class="col-md-6">
                                <label class="col-lg-12 col-form-label fw-bold fs-6">Expiry Date</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-12 fv-row">
                                    <input type="date" class="form-control form-control-lg form-control-solid form-control @error('expiry_date') is-invalid @enderror" name="expiry_date" placeholder="Expiry Date" value="{{ old("expiry_date") }}"/>
                                    @error('expiry_date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <!--end::Col-->
                            </div>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <!--begin::Label-->
                        <label class="col-lg-12 col-form-label fw-bold fs-6">Manufacture Company</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-12 fv-row">
                            <input type="text" class="form-control form-control-lg form-control-solid form-control @error('manufacture_company') is-invalid @enderror" name="manufacture_company" placeholder="Manufacture Company" value="{{ old("manufacture_company") }}"/>
                            @error('manufacture_company')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!--end::Col-->
                        <!--end::Input group-->
                        <!--begin::Label-->
                        <label class="col-lg-12 col-form-label fw-bold fs-6">Generic Name</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-12 fv-row">
                            <input type="text" class="form-control form-control-lg form-control-solid form-control @error('generic_name') is-invalid @enderror" name="generic_name" placeholder="Generic Name" value="{{ old("generic_name") }}"/>
                            @error('generic_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!--end::Col-->
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <!--begin::Label-->
                        <label class="col-lg-12 col-form-label fw-bold fs-6">Dosage</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-12 fv-row">
                            <input type="text" class="form-control form-control-lg form-control-solid form-control @error('dosage') is-invalid @enderror" name="dosage" placeholder="Dosage" value="{{ old("dosage") }}"/>
                            @error('dosage')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!--end::Col-->
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <!--begin::Label-->
                        <label class="col-lg-12 col-form-label fw-bold fs-6">Side Effect</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-12 fv-row">
                            <textarea class="form-control form-control-lg form-control-solid form-control @error('side_effects') is-invalid @enderror" name="side_effects" placeholder="Side Effect" value="{{ old("side_effects") }}"></textarea>
                            @error('side_effects')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!--end::Col-->
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <!--begin::Label-->
                        <label class="col-lg-12 col-form-label fw-bold fs-6">Precautions</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-12 fv-row">
                            <textarea class="form-control form-control-lg form-control-solid form-control @error('precautions') is-invalid @enderror" name="precautions" placeholder="precautions" value="{{ old("precautions") }}"></textarea>
                            @error('precautions')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!--end::Col-->
                        <!--end::Input group-->
                        <div class="row">
                            <div class="col-lg-6">
                                <!--begin::Input group-->
                                <!--begin::Label-->
                                <label class="col-lg-12 col-form-label fw-bold fs-6">Storage Method</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-12 fv-row">
                                    <select class="form-select form-select-solid form-select-lg form-control @error('storage') is-invalid @enderror" name="storage" value="{{ old("storage") }}">
                                        <option value="">Select Storage Method</option>
                                        <option value="1">Room Temperature</option>
                                        <option value="2">Refrigerated</option>
                                        <option value="3">Frozen</option>
                                    </select>
                                    @error('storage')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <!--end::Col-->
                                <!--end::Input group-->
                            </div>
                            <div class="col-lg-6">
                                <!--begin::Input group-->
                                <!--begin::Label-->
                                <label class="col-lg-12 col-form-label fw-bold fs-6">How to use</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-12 fv-row">
                                    <select class="form-select form-select-solid form-select-lg form-control @error('how_to_use') is-invalid @enderror" name="how_to_use" value="{{ old("how_to_use") }}">
                                        <option value="">Select How to use</option>
                                        <option value="1">Oral</option>
                                        <option value="2">Topical</option>
                                        <option value="3">Inhalation</option>
                                        <option value="4">Injection</option>
                                    </select>
                                    @error('how_to_use')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <!--end::Col-->
                                <!--end::Input group-->
                            </div>
                        </div>
                        <!--begin::Input group-->
                        <!--begin::Label-->
                        <label class="col-lg-12 col-form-label fw-bold fs-6">How it works</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-12 fv-row">
                            <textarea class="form-control form-control-lg form-control-solid form-control @error('how_it_works') is-invalid @enderror" name="how_it_works" placeholder="How it works" value="{{ old("how_it_works") }}"></textarea>
                            @error('how_it_works')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!--end::Col-->
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <!--begin::Label-->
                        <label class="col-lg-12 col-form-label fw-bold fs-6">Other Information</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-12 fv-row">
                            <textarea class="form-control form-control-lg form-control-solid form-control @error('other_information') is-invalid @enderror" name="other_information" placeholder="Other Information" value="{{ old("other_information") }}"></textarea>
                            @error('other_information')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!--end::Col-->
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <!--begin::Label-->
                        <label class="col-lg-12 col-form-label fw-bold fs-6">Composition</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-12 fv-row">
                            <textarea class="form-control form-control-lg form-control-solid form-control @error('composition') is-invalid @enderror" name="composition" placeholder="Composition" value="{{ old("composition") }}"></textarea>
                            @error('composition')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!--end::Col-->
                        <!--end::Input group-->
                        <!--begin::Actions-->
                        <div class="text-center pt-15">
                            <button type="reset" class="btn btn-light me-3">Discard</button>
                            <button type="submit" id="modal_add_medicines_submit" class="btn btn-primary">
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
    <!--end::Modal - Add task-->

    <!--begin::Modal - Upload CSV-->
    <div class="modal fade" id="kt_modal_upload" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered mw-800px">
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header" id="modal_add_medicines_header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bolder"><span><i class="fas fa-file-csv"></i></span><span class="fs-3">Import Medicines Stock from CSV File<span></h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body scroll-y mx-5 mx-xl-15">
                    <!--begin::Form-->
                    <div class="alert alert-success">

                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column">
                            <!--begin::Content-->
                            <span>Before you want to upload the medicines data via CSV Document, please download the CSV template</span>
                            <a href="{{url('https://drive.google.com/u/2/uc?id=1kn2OtQ_z_BwEFOfrhPUlQMU9ElWWQiZU&export=download')}}" class="btn btn-light-success" target="_blank">
                                <i class="fas fa-file-download"></i>
                                Download CSV Template
                            </a>
                            <!--end::Content-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <form class="form" id="kt_modal_upload_form" method="POST" action="{{route('pharmacist.medicines.import')}}" enctype="multipart/form-data">
                        @csrf
                        <!--begin::Input group-->
                        <!--begin::Label-->
                        <label class="col-lg-12 col-form-label fw-bold fs-6">CSV File</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-12 fv-row">
                            <input type="file" class="form-control form-control-lg form-control-solid form-control @error('file') is-invalid @enderror" name="file" placeholder="CSV File" value="{{ old("file") }}">
                            @error('file')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!--end::Col-->
                        <!--end::Input group-->
                        <!--begin::Actions-->
                        <div class="text-center pt-15">
                            <button type="reset" class="btn btn-light me-3">Discard</button>
                            <button type="submit" id="modal_upload_submit" class="btn btn-primary">
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

@push('scripts')
<script type="text/javascript">
    @if (count($errors) > 0)
        $('#modal_add_medicines').modal('show');
    @endif
    </script>


@endpush
