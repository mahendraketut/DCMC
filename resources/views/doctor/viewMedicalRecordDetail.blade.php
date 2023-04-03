@extends('doctor.navbar')
@section('title', 'View Medical Record Detail')
@section('css')
@endsection

@section('content')
<div class="d-flex flex-column flex-xl-row">
    <!--begin::Sidebar-->
    <div class="flex-column flex-lg-row-auto w-100 w-xl-350px mb-10">
        <!--begin::Card-->
        <div class="card mb-5 mb-xl-8">
            <!--begin::Card body-->
            <div class="card-body pt-15">
                <!--begin::Summary-->
                <div class="d-flex flex-center flex-column mb-5">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-100px symbol-circle mb-7 border border-primary">
                        @if ($patient->profile_pic)
                            <img src="{{ asset('storage/' . $patient->profile_pic) }}" alt="image" />
                        @else
                            <img src="{{asset('admin/assets/media/avatars/blank.png')}}" class="card-img-top" alt="image" />
                        @endif
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Badge-->
                    <div class="badge badge-light-primary d-inline text-uppercase">{{$patient->role}}</div>
                    <!--begin::Badge-->
                    <!--begin::Name-->
                    <a href="#" class="fs-3 text-gray-800 text-hover-primary fw-bolder mb-1">{{$patient->name}}</a>
                    <!--end::Name-->
                    <!--begin::Position-->

                    <!--end::Position-->

                    <!--begin::Info-->
                    {{-- <div class="d-flex flex-wrap flex-center">
                        <!--begin::Stats-->
                        <div class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3">
                            <div class="fs-4 fw-bolder text-gray-700">
                                <span class="w-75px">6,900</span>
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                <span class="svg-icon svg-icon-3 svg-icon-success">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
                                        <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="fw-bold text-muted">Earnings</div>
                        </div>
                        <!--end::Stats-->
                        <!--begin::Stats-->
                        <div class="border border-gray-300 border-dashed rounded py-3 px-3 mx-4 mb-3">
                            <div class="fs-4 fw-bolder text-gray-700">
                                <span class="w-50px">130</span>
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                                <span class="svg-icon svg-icon-3 svg-icon-danger">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
                                        <path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="fw-bold text-muted">Tasks</div>
                        </div>
                        <!--end::Stats-->
                        <!--begin::Stats-->
                        <div class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3">
                            <div class="fs-4 fw-bolder text-gray-700">
                                <span class="w-50px">500</span>
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                <span class="svg-icon svg-icon-3 svg-icon-success">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
                                        <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="fw-bold text-muted">Hours</div>
                        </div>
                        <!--end::Stats-->
                    </div> --}}
                    <!--end::Info-->
                </div>
                <!--end::Summary-->
                <!--begin::Details toggle-->
                <div class="d-flex flex-stack fs-4 py-3">
                    <div class="fw-bolder rotate collapsible" data-bs-toggle="collapse" href="#kt_customer_view_details" role="button" aria-expanded="false" aria-controls="kt_customer_view_details">Details
                    <span class="ms-2 rotate-180">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                        <span class="svg-icon svg-icon-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </span></div>
                    {{-- <span data-bs-toggle="tooltip" data-bs-trigger="hover" title="Edit customer details">
                        <a href="#" class="btn btn-sm btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_update_customer">Edit</a>
                    </span> --}}
                </div>
                <!--end::Details toggle-->
                <div class="separator separator-dashed"></div>
                <!--begin::Details content-->
                <div id="kt_customer_view_details" class="collapse show">
                    <div class=" fs-6">
                        <!--begin::Details item-->
                        <div class="fw-bolder mt-5">Patient ID</div>
                        <div class="text-gray-600">{{$patient->user_id}}</div>
                        <!--begin::Details item-->
                        <!--begin::Details item-->
                        <div class="fw-bolder mt-5">Email</div>
                        <div class="text-gray-600">
                            <a href="#" class="text-gray-600 text-hover-primary">{{$patient->email}}</a>
                        </div>
                        <!--begin::Details item-->
                        <!--begin::Details item-->
                        <div class="fw-bolder mt-5">Patient Age</div>
                        <div class="text-gray-600">{{$age}}</div>
                        <!--begin::Details item-->
                        <!--begin::Details item-->
                        <div class="fw-bolder mt-5">Gender</div>
                        <div class="text-gray-600">{{$patient->gender}}</div>
                        <!--begin::Details item-->
                        <!--begin::Details item-->
                        <div class="fw-bolder mt-5">City</div>
                        <div class="text-gray-600">{{$patient->city}}</div>
                        <!--begin::Details item-->
                        <!--begin::Details item-->
                        <div class="fw-bolder mt-5">Joined Since</div>
                        <div class="text-gray-600">{{$patient->created_at->diffForHumans()}}</div>
                        <!--begin::Details item-->
                    </div>
                </div>
                <!--end::Details content-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
        <!--begin::Connected Accounts-->
        <!--end::Connected Accounts-->
    </div>
    <!--end::Sidebar-->
    <!--begin::Content-->
    <div class="flex-lg-row-fluid ms-lg-15">
        <!--begin:::Tabs-->
        <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mb-8">
            <!--begin:::Tab item-->
            <li class="nav-item">
                <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_customer_view_overview_tab">Medical Record</a>
            </li>
            <!--end:::Tab item-->
            <!--begin:::Tab item-->
            {{-- <li class="nav-item">
                <a class="nav-link text-active-primary pb-4" data-kt-countup-tabs="true" data-bs-toggle="tab" href="#kt_customer_view_overview_statements">Experience</a>
            </li> --}}
            <!--end:::Tab item-->
            <!--begin:::Tab item-->
            <li class="nav-item">
                <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_customer_view_overview_events_and_logs_tab">Prescription</a>
            </li>
            <!--end:::Tab item-->
            <!--begin:::Tab item-->
            {{-- <li class="nav-item ms-auto">
                <!--begin::Action menu-->
                <a href="#" class="btn btn-primary ps-7" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">Make Appointment</a>
                <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                {{-- <span class="svg-icon svg-icon-2 me-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                    </svg>
                </span> --}}
                {{-- <!--end::Svg Icon--></a> --}}
                <!--begin::Menu-->
                {{-- <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold py-4 w-250px fs-6" data-kt-menu="true">
                    <!--begin::Menu item-->
                    <div class="menu-item px-5">
                        <div class="menu-content text-muted pb-2 px-5 fs-7 text-uppercase">Payments</div>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-5">
                        <a href="#" class="menu-link px-5">Create invoice</a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-5">
                        <a href="#" class="menu-link flex-stack px-5">Create payments
                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-5" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start">
                        <a href="#" class="menu-link px-5">
                            <span class="menu-title">Subscription</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <!--begin::Menu sub-->
                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-5">Apps</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-5">Billing</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-5">Statements</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu separator-->
                            <div class="separator my-2"></div>
                            <!--end::Menu separator-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <div class="menu-content px-3">
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                        <input class="form-check-input w-30px h-20px" type="checkbox" value="" name="notifications" checked="checked" id="kt_user_menu_notifications" />
                                        <span class="form-check-label text-muted fs-6" for="kt_user_menu_notifications">Notifications</span>
                                    </label>
                                </div>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu sub-->
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu separator-->
                    <div class="separator my-3"></div>
                    <!--end::Menu separator-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-5">
                        <div class="menu-content text-muted pb-2 px-5 fs-7 text-uppercase">Account</div>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-5">
                        <a href="#" class="menu-link px-5">Reports</a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-5 my-1">
                        <a href="#" class="menu-link px-5">Account Settings</a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-5">
                        <a href="#" class="menu-link text-danger px-5">Delete customer</a>
                    </div>
                    <!--end::Menu item-->
                </div>
                <!--end::Menu-->
                <!--end::Menu-->
            </li> --}}
            <!--end:::Tab item-->
        </ul>
        <!--end:::Tabs-->
        <!--begin:::Tab content-->
        <div class="tab-content" id="myTabContent">
            <!--begin:::Tab pane-->
            <div class="tab-pane fade show active" id="kt_customer_view_overview_tab" role="tabpanel">
                <!--begin::Card-->
                <div class="card pt-4 mb-6 mb-xl-9">
                    <!--begin::Card header-->
                    <div class="card-header border-0">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <h2>Medical Record</h2>
                        </div>
                        <!--end::Card title-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body py-0">
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
                    </div>

                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end:::Tab pane-->
            <!--begin:::Tab pane-->
            <div class="tab-pane fade" id="kt_customer_view_overview_events_and_logs_tab" role="tabpanel">
                <!--begin::Card-->
                <div class="card pt-4 mb-6 mb-xl-9">
                    <!--begin::Card header-->
                    <div class="card-header border-0">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <h2>Prescription</h2>
                        </div>
                    </div>
                    <!--end::Card header-->
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
                                        <td>
                                            <a href="{{url('/doctor.medicalrecord.detailview.delete/'.$prescription->id)}}" class="btn btn-danger" alt="Delete Prescription">
                                                <i class="fas fa-file-medical-alt"></i>
                                                Delete
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
                    </div>
                </div>
                <!--end::Card-->
            </div>
            <!--end:::Tab pane-->
        </div>
        <!--end:::Tab content-->
    </div>
    <!--end::Content-->
</div>
@endsection
