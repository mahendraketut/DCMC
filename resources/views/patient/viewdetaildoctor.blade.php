@extends('patient.navbar')
@section('title', 'View Detail Doctor')
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
                    <div class="symbol symbol-100px symbol-circle mb-7">
                        @if ($doctor->profile_pic)
                            <img src="{{ asset('storage/' . $doctor->profile_pic) }}" alt="image" />
                        @else
                            <img src="{{asset('admin/assets/media/avatars/blank.png')}}" class="card-img-top" alt="image" />
                        @endif
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Badge-->
                    <div class="badge badge-light-primary d-inline text-uppercase">{{$doctor->role}}</div>
                    <!--begin::Badge-->
                    <!--begin::Name-->
                    <a href="#" class="fs-3 text-gray-800 text-hover-primary fw-bolder mb-1">{{$doctor->name}}</a>
                    <!--end::Name-->
                    <!--begin::Position-->
                    <div class="fs-5 fw-bold text-muted mb-6">{{$doctor->specialist}} Specialist</div>
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
                        <div class="fw-bolder mt-5">Doctor ID</div>
                        <div class="text-gray-600">{{$doctor->user_id}}</div>
                        <!--begin::Details item-->
                        <!--begin::Details item-->
                        <div class="fw-bolder mt-5">Email</div>
                        <div class="text-gray-600">
                            <a href="#" class="text-gray-600 text-hover-primary">{{$doctor->email}}</a>
                        </div>
                        <!--begin::Details item-->
                        <!--begin::Details item-->
                        <div class="fw-bolder mt-5">License</div>
                        <div class="text-gray-600">{{$doctor->license}}</div>
                        <!--begin::Details item-->
                        <!--begin::Details item-->
                        <div class="fw-bolder mt-5">Gender</div>
                        <div class="text-gray-600">{{$doctor->gender}}</div>
                        <!--begin::Details item-->
                        <!--begin::Details item-->
                        <div class="fw-bolder mt-5">City</div>
                        <div class="text-gray-600">{{$doctor->city}}</div>
                        <!--begin::Details item-->
                        <!--begin::Details item-->
                        <div class="fw-bolder mt-5">Joined Since</div>
                        <div class="text-gray-600">{{$doctor->created_at->diffForHumans()}}</div>
                        <!--begin::Details item-->
                    </div>
                </div>
                <!--end::Details content-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
        <!--begin::Connected Accounts-->
        {{-- <div class="card mb-5 mb-xl-8">
            <!--begin::Card header-->
            <div class="card-header border-0">
                <div class="card-title">
                    <h3 class="fw-bolder m-0">Connected Accounts</h3>
                </div>
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-2">
                <!--begin::Notice-->
                <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
                    <!--begin::Icon-->
                    <!--begin::Svg Icon | path: icons/duotune/art/art006.svg-->
                    <span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path opacity="0.3" d="M22 19V17C22 16.4 21.6 16 21 16H8V3C8 2.4 7.6 2 7 2H5C4.4 2 4 2.4 4 3V19C4 19.6 4.4 20 5 20H21C21.6 20 22 19.6 22 19Z" fill="currentColor" />
                            <path d="M20 5V21C20 21.6 19.6 22 19 22H17C16.4 22 16 21.6 16 21V8H8V4H19C19.6 4 20 4.4 20 5ZM3 8H4V4H3C2.4 4 2 4.4 2 5V7C2 7.6 2.4 8 3 8Z" fill="currentColor" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                    <!--end::Icon-->
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-stack flex-grow-1">
                        <!--begin::Content-->
                        <div class="fw-bold">
                            <div class="fs-6 text-gray-700">By connecting an account, you hereby agree to our
                            <a href="#" class="me-1">privacy policy</a>and
                            <a href="#">terms of use</a>.</div>
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Notice-->
                <!--begin::Items-->
                <div class="py-2">
                    <!--begin::Item-->
                    <div class="d-flex flex-stack">
                        <div class="d-flex">
                            <img src="assets/media/svg/brand-logos/google-icon.svg" class="w-30px me-6" alt="" />
                            <div class="d-flex flex-column">
                                <a href="#" class="fs-5 text-dark text-hover-primary fw-bolder">Google</a>
                                <div class="fs-6 fw-bold text-muted">Plan properly your workflow</div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <!--begin::Switch-->
                            <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                <!--begin::Input-->
                                <input class="form-check-input" name="google" type="checkbox" value="1" id="kt_modal_connected_accounts_google" checked="checked" />
                                <!--end::Input-->
                                <!--begin::Label-->
                                <span class="form-check-label fw-bold text-muted" for="kt_modal_connected_accounts_google"></span>
                                <!--end::Label-->
                            </label>
                            <!--end::Switch-->
                        </div>
                    </div>
                    <!--end::Item-->
                    <div class="separator separator-dashed my-5"></div>
                    <!--begin::Item-->
                    <div class="d-flex flex-stack">
                        <div class="d-flex">
                            <img src="assets/media/svg/brand-logos/github.svg" class="w-30px me-6" alt="" />
                            <div class="d-flex flex-column">
                                <a href="#" class="fs-5 text-dark text-hover-primary fw-bolder">Github</a>
                                <div class="fs-6 fw-bold text-muted">Keep eye on on your Repositories</div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <!--begin::Switch-->
                            <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                <!--begin::Input-->
                                <input class="form-check-input" name="github" type="checkbox" value="1" id="kt_modal_connected_accounts_github" checked="checked" />
                                <!--end::Input-->
                                <!--begin::Label-->
                                <span class="form-check-label fw-bold text-muted" for="kt_modal_connected_accounts_github"></span>
                                <!--end::Label-->
                            </label>
                            <!--end::Switch-->
                        </div>
                    </div>
                    <!--end::Item-->
                    <div class="separator separator-dashed my-5"></div>
                    <!--begin::Item-->
                    <div class="d-flex flex-stack">
                        <div class="d-flex">
                            <img src="assets/media/svg/brand-logos/slack-icon.svg" class="w-30px me-6" alt="" />
                            <div class="d-flex flex-column">
                                <a href="#" class="fs-5 text-dark text-hover-primary fw-bolder">Slack</a>
                                <div class="fs-6 fw-bold text-muted">Integrate Projects Discussions</div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <!--begin::Switch-->
                            <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                <!--begin::Input-->
                                <input class="form-check-input" name="slack" type="checkbox" value="1" id="kt_modal_connected_accounts_slack" />
                                <!--end::Input-->
                                <!--begin::Label-->
                                <span class="form-check-label fw-bold text-muted" for="kt_modal_connected_accounts_slack"></span>
                                <!--end::Label-->
                            </label>
                            <!--end::Switch-->
                        </div>
                    </div>
                    <!--end::Item-->
                </div>
                <!--end::Items-->
            </div>
            <!--end::Card body-->
            <!--begin::Card footer-->
            <div class="card-footer border-0 d-flex justify-content-center pt-0">
                <button class="btn btn-sm btn-light-primary">Save Changes</button>
            </div>
            <!--end::Card footer-->
        </div> --}}
        <!--end::Connected Accounts-->
    </div>
    <!--end::Sidebar-->
    <!--begin::Content-->
    <div class="flex-lg-row-fluid ms-lg-15">
        <!--begin:::Tabs-->
        <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mb-8">
            <!--begin:::Tab item-->
            <li class="nav-item">
                <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_customer_view_overview_tab">Overview</a>
            </li>
            <!--end:::Tab item-->
            <!--begin:::Tab item-->
            {{-- <li class="nav-item">
                <a class="nav-link text-active-primary pb-4" data-kt-countup-tabs="true" data-bs-toggle="tab" href="#kt_customer_view_overview_statements">Experience</a>
            </li> --}}
            <!--end:::Tab item-->
            <!--begin:::Tab item-->
            <li class="nav-item">
                <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_customer_view_overview_events_and_logs_tab">Schedule</a>
            </li>
            <!--end:::Tab item-->
            <!--begin:::Tab item-->
            <li class="nav-item ms-auto">
                <!--begin::Action menu-->
                <a href="{{route('make.appointment')}}" class="btn btn-primary ps-7" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">Make Appointment</a>
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
                </div> --}}
                <!--end::Menu-->
                <!--end::Menu-->
            </li>
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
                            <h2>Doctor Overview</h2>
                        </div>
                        <!--end::Card title-->
                        <!--begin::Card toolbar-->
                        {{-- <div class="card-toolbar">
                            <!--begin::Filter-->
                            <button type="button" class="btn btn-sm btn-flex btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_payment">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                            <span class="svg-icon svg-icon-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                                    <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                                    <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->Add payment</button>
                            <!--end::Filter-->
                        </div> --}}
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0 pb-5">


                        <!--begin::Table-->
                        {{-- <table class="table align-middle table-row-dashed gy-5" id="kt_table_customers_payment">
                            <!--begin::Table head-->
                            <thead class="border-bottom border-gray-200 fs-7 fw-bolder">
                                <!--begin::Table row-->
                                <tr class="text-start text-muted text-uppercase gs-0">
                                    <th class="min-w-100px">Invoice No.</th>
                                    <th>Status</th>
                                    <th>Amount</th>
                                    <th class="min-w-100px">Date</th>
                                    <th class="text-end min-w-100px pe-4">Actions</th>
                                </tr>
                                <!--end::Table row-->
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="fs-6 fw-bold text-gray-600">
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Invoice=-->
                                    <td>
                                        <a href="#" class="text-gray-600 text-hover-primary mb-1">8377-7409</a>
                                    </td>
                                    <!--end::Invoice=-->
                                    <!--begin::Status=-->
                                    <td>
                                        <span class="badge badge-light-success">Successful</span>
                                    </td>
                                    <!--end::Status=-->
                                    <!--begin::Amount=-->
                                    <td>$1,200.00</td>
                                    <!--end::Amount=-->
                                    <!--begin::Date=-->
                                    <td>14 Dec 2020, 8:43 pm</td>
                                    <!--end::Date=-->
                                    <!--begin::Action=-->
                                    <td class="pe-0 text-end">
                                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                        <span class="svg-icon svg-icon-5 m-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon--></a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="../../demo1/dist/apps/customers/view.html" class="menu-link px-3">View</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                    <!--end::Action=-->
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Invoice=-->
                                    <td>
                                        <a href="#" class="text-gray-600 text-hover-primary mb-1">5056-2390</a>
                                    </td>
                                    <!--end::Invoice=-->
                                    <!--begin::Status=-->
                                    <td>
                                        <span class="badge badge-light-success">Successful</span>
                                    </td>
                                    <!--end::Status=-->
                                    <!--begin::Amount=-->
                                    <td>$79.00</td>
                                    <!--end::Amount=-->
                                    <!--begin::Date=-->
                                    <td>01 Dec 2020, 10:12 am</td>
                                    <!--end::Date=-->
                                    <!--begin::Action=-->
                                    <td class="pe-0 text-end">
                                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                        <span class="svg-icon svg-icon-5 m-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon--></a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="../../demo1/dist/apps/customers/view.html" class="menu-link px-3">View</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                    <!--end::Action=-->
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Invoice=-->
                                    <td>
                                        <a href="#" class="text-gray-600 text-hover-primary mb-1">6181-6578</a>
                                    </td>
                                    <!--end::Invoice=-->
                                    <!--begin::Status=-->
                                    <td>
                                        <span class="badge badge-light-success">Successful</span>
                                    </td>
                                    <!--end::Status=-->
                                    <!--begin::Amount=-->
                                    <td>$5,500.00</td>
                                    <!--end::Amount=-->
                                    <!--begin::Date=-->
                                    <td>12 Nov 2020, 2:01 pm</td>
                                    <!--end::Date=-->
                                    <!--begin::Action=-->
                                    <td class="pe-0 text-end">
                                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                        <span class="svg-icon svg-icon-5 m-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon--></a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="../../demo1/dist/apps/customers/view.html" class="menu-link px-3">View</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                    <!--end::Action=-->
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Invoice=-->
                                    <td>
                                        <a href="#" class="text-gray-600 text-hover-primary mb-1">9769-5626</a>
                                    </td>
                                    <!--end::Invoice=-->
                                    <!--begin::Status=-->
                                    <td>
                                        <span class="badge badge-light-warning">Pending</span>
                                    </td>
                                    <!--end::Status=-->
                                    <!--begin::Amount=-->
                                    <td>$880.00</td>
                                    <!--end::Amount=-->
                                    <!--begin::Date=-->
                                    <td>21 Oct 2020, 5:54 pm</td>
                                    <!--end::Date=-->
                                    <!--begin::Action=-->
                                    <td class="pe-0 text-end">
                                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                        <span class="svg-icon svg-icon-5 m-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon--></a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="../../demo1/dist/apps/customers/view.html" class="menu-link px-3">View</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                    <!--end::Action=-->
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Invoice=-->
                                    <td>
                                        <a href="#" class="text-gray-600 text-hover-primary mb-1">8000-9296</a>
                                    </td>
                                    <!--end::Invoice=-->
                                    <!--begin::Status=-->
                                    <td>
                                        <span class="badge badge-light-success">Successful</span>
                                    </td>
                                    <!--end::Status=-->
                                    <!--begin::Amount=-->
                                    <td>$7,650.00</td>
                                    <!--end::Amount=-->
                                    <!--begin::Date=-->
                                    <td>19 Oct 2020, 7:32 am</td>
                                    <!--end::Date=-->
                                    <!--begin::Action=-->
                                    <td class="pe-0 text-end">
                                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                        <span class="svg-icon svg-icon-5 m-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon--></a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="../../demo1/dist/apps/customers/view.html" class="menu-link px-3">View</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                    <!--end::Action=-->
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Invoice=-->
                                    <td>
                                        <a href="#" class="text-gray-600 text-hover-primary mb-1">1973-1127</a>
                                    </td>
                                    <!--end::Invoice=-->
                                    <!--begin::Status=-->
                                    <td>
                                        <span class="badge badge-light-success">Successful</span>
                                    </td>
                                    <!--end::Status=-->
                                    <!--begin::Amount=-->
                                    <td>$375.00</td>
                                    <!--end::Amount=-->
                                    <!--begin::Date=-->
                                    <td>23 Sep 2020, 12:38 am</td>
                                    <!--end::Date=-->
                                    <!--begin::Action=-->
                                    <td class="pe-0 text-end">
                                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                        <span class="svg-icon svg-icon-5 m-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon--></a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="../../demo1/dist/apps/customers/view.html" class="menu-link px-3">View</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                    <!--end::Action=-->
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Invoice=-->
                                    <td>
                                        <a href="#" class="text-gray-600 text-hover-primary mb-1">9671-6963</a>
                                    </td>
                                    <!--end::Invoice=-->
                                    <!--begin::Status=-->
                                    <td>
                                        <span class="badge badge-light-success">Successful</span>
                                    </td>
                                    <!--end::Status=-->
                                    <!--begin::Amount=-->
                                    <td>$129.00</td>
                                    <!--end::Amount=-->
                                    <!--begin::Date=-->
                                    <td>11 Sep 2020, 3:18 pm</td>
                                    <!--end::Date=-->
                                    <!--begin::Action=-->
                                    <td class="pe-0 text-end">
                                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                        <span class="svg-icon svg-icon-5 m-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon--></a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="../../demo1/dist/apps/customers/view.html" class="menu-link px-3">View</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                    <!--end::Action=-->
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Invoice=-->
                                    <td>
                                        <a href="#" class="text-gray-600 text-hover-primary mb-1">6987-3957</a>
                                    </td>
                                    <!--end::Invoice=-->
                                    <!--begin::Status=-->
                                    <td>
                                        <span class="badge badge-light-danger">Rejected</span>
                                    </td>
                                    <!--end::Status=-->
                                    <!--begin::Amount=-->
                                    <td>$450.00</td>
                                    <!--end::Amount=-->
                                    <!--begin::Date=-->
                                    <td>03 Sep 2020, 1:08 am</td>
                                    <!--end::Date=-->
                                    <!--begin::Action=-->
                                    <td class="pe-0 text-end">
                                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                        <span class="svg-icon svg-icon-5 m-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon--></a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="../../demo1/dist/apps/customers/view.html" class="menu-link px-3">View</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                    <!--end::Action=-->
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Invoice=-->
                                    <td>
                                        <a href="#" class="text-gray-600 text-hover-primary mb-1">6277-7219</a>
                                    </td>
                                    <!--end::Invoice=-->
                                    <!--begin::Status=-->
                                    <td>
                                        <span class="badge badge-light-warning">Pending</span>
                                    </td>
                                    <!--end::Status=-->
                                    <!--begin::Amount=-->
                                    <td>$8,700.00</td>
                                    <!--end::Amount=-->
                                    <!--begin::Date=-->
                                    <td>01 Sep 2020, 4:58 pm</td>
                                    <!--end::Date=-->
                                    <!--begin::Action=-->
                                    <td class="pe-0 text-end">
                                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                        <span class="svg-icon svg-icon-5 m-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon--></a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="../../demo1/dist/apps/customers/view.html" class="menu-link px-3">View</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                    <!--end::Action=-->
                                </tr>
                                <!--end::Table row-->
                            </tbody>
                            <!--end::Table body-->
                        </table> --}}
                        <!--end::Table-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                {{-- <div class="card pt-4 mb-6 mb-xl-9">
                    <!--begin::Card header-->
                    <div class="card-header border-0">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <h2 class="fw-bolder mb-0">Payment Methods</h2>
                        </div>
                        <!--end::Card title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                            <a href="#" class="btn btn-sm btn-flex btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_new_card">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                            <span class="svg-icon svg-icon-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                                    <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                                    <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->Add new method</a>
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div id="kt_customer_view_payment_method" class="card-body pt-0">
                        <!--begin::Option-->
                        <div class="py-0" data-kt-customer-payment-method="row">
                            <!--begin::Header-->
                            <div class="py-3 d-flex flex-stack flex-wrap">
                                <!--begin::Toggle-->
                                <div class="d-flex align-items-center collapsible rotate" data-bs-toggle="collapse" href="#kt_customer_view_payment_method_1" role="button" aria-expanded="false" aria-controls="kt_customer_view_payment_method_1">
                                    <!--begin::Arrow-->
                                    <div class="me-3 rotate-90">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
                                        <span class="svg-icon svg-icon-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </div>
                                    <!--end::Arrow-->
                                    <!--begin::Logo-->
                                    <img src="assets/media/svg/card-logos/mastercard.svg" class="w-40px me-3" alt="" />
                                    <!--end::Logo-->
                                    <!--begin::Summary-->
                                    <div class="me-3">
                                        <div class="d-flex align-items-center">
                                            <div class="text-gray-800 fw-bolder">Mastercard</div>
                                            <div class="badge badge-light-primary ms-5">Primary</div>
                                        </div>
                                        <div class="text-muted">Expires Dec 2024</div>
                                    </div>
                                    <!--end::Summary-->
                                </div>
                                <!--end::Toggle-->
                                <!--begin::Toolbar-->
                                <div class="d-flex my-3 ms-9">
                                    <!--begin::Edit-->
                                    <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_new_card">
                                        <span data-bs-toggle="tooltip" data-bs-trigger="hover" title="Edit">
                                            <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                            <span class="svg-icon svg-icon-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
                                                    <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </a>
                                    <!--end::Edit-->
                                    <!--begin::Delete-->
                                    <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="tooltip" title="Delete" data-kt-customer-payment-method="delete">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                        <span class="svg-icon svg-icon-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor" />
                                                <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor" />
                                                <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </a>
                                    <!--end::Delete-->
                                    <!--begin::More-->
                                    <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px" data-bs-toggle="tooltip" title="More Options" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                        <span class="svg-icon svg-icon-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="currentColor" />
                                                <path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold w-150px py-3" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-payment-mehtod-action="set_as_primary">Set as Primary</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                    <!--end::More-->
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div id="kt_customer_view_payment_method_1" class="collapse show fs-6 ps-10" data-bs-parent="#kt_customer_view_payment_method">
                                <!--begin::Details-->
                                <div class="d-flex flex-wrap py-5">
                                    <!--begin::Col-->
                                    <div class="flex-equal me-5">
                                        <table class="table table-flush fw-bold gy-1">
                                            <tr>
                                                <td class="text-muted min-w-125px w-125px">Name</td>
                                                <td class="text-gray-800">Emma Smith</td>
                                            </tr>
                                            <tr>
                                                <td class="text-muted min-w-125px w-125px">Number</td>
                                                <td class="text-gray-800">**** 1139</td>
                                            </tr>
                                            <tr>
                                                <td class="text-muted min-w-125px w-125px">Expires</td>
                                                <td class="text-gray-800">12/2024</td>
                                            </tr>
                                            <tr>
                                                <td class="text-muted min-w-125px w-125px">Type</td>
                                                <td class="text-gray-800">Mastercard credit card</td>
                                            </tr>
                                            <tr>
                                                <td class="text-muted min-w-125px w-125px">Issuer</td>
                                                <td class="text-gray-800">VICBANK</td>
                                            </tr>
                                            <tr>
                                                <td class="text-muted min-w-125px w-125px">ID</td>
                                                <td class="text-gray-800">id_4325df90sdf8</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="flex-equal">
                                        <table class="table table-flush fw-bold gy-1">
                                            <tr>
                                                <td class="text-muted min-w-125px w-125px">Billing address</td>
                                                <td class="text-gray-800">AU</td>
                                            </tr>
                                            <tr>
                                                <td class="text-muted min-w-125px w-125px">Phone</td>
                                                <td class="text-gray-800">No phone provided</td>
                                            </tr>
                                            <tr>
                                                <td class="text-muted min-w-125px w-125px">Email</td>
                                                <td class="text-gray-800">
                                                    <a href="#" class="text-gray-900 text-hover-primary">smith@kpmg.com</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-muted min-w-125px w-125px">Origin</td>
                                                <td class="text-gray-800">Australia
                                                <div class="symbol symbol-20px symbol-circle ms-2">
                                                    <img src="assets/media/flags/australia.svg" />
                                                </div></td>
                                            </tr>
                                            <tr>
                                                <td class="text-muted min-w-125px w-125px">CVC check</td>
                                                <td class="text-gray-800">Passed
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                <span class="svg-icon svg-icon-2 svg-icon-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                        <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon--></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Option-->
                        <div class="separator separator-dashed"></div>
                        <!--begin::Option-->
                        <div class="py-0" data-kt-customer-payment-method="row">
                            <!--begin::Header-->
                            <div class="py-3 d-flex flex-stack flex-wrap">
                                <!--begin::Toggle-->
                                <div class="d-flex align-items-center collapsible collapsed rotate" data-bs-toggle="collapse" href="#kt_customer_view_payment_method_2" role="button" aria-expanded="false" aria-controls="kt_customer_view_payment_method_2">
                                    <!--begin::Arrow-->
                                    <div class="me-3 rotate-90">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
                                        <span class="svg-icon svg-icon-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </div>
                                    <!--end::Arrow-->
                                    <!--begin::Logo-->
                                    <img src="assets/media/svg/card-logos/visa.svg" class="w-40px me-3" alt="" />
                                    <!--end::Logo-->
                                    <!--begin::Summary-->
                                    <div class="me-3">
                                        <div class="d-flex align-items-center">
                                            <div class="text-gray-800 fw-bolder">Visa</div>
                                        </div>
                                        <div class="text-muted">Expires Feb 2022</div>
                                    </div>
                                    <!--end::Summary-->
                                </div>
                                <!--end::Toggle-->
                                <!--begin::Toolbar-->
                                <div class="d-flex my-3 ms-9">
                                    <!--begin::Edit-->
                                    <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_new_card">
                                        <span data-bs-toggle="tooltip" data-bs-trigger="hover" title="Edit">
                                            <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                            <span class="svg-icon svg-icon-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
                                                    <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </a>
                                    <!--end::Edit-->
                                    <!--begin::Delete-->
                                    <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="tooltip" title="Delete" data-kt-customer-payment-method="delete">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                        <span class="svg-icon svg-icon-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor" />
                                                <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor" />
                                                <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </a>
                                    <!--end::Delete-->
                                    <!--begin::More-->
                                    <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px" data-bs-toggle="tooltip" title="More Options" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                        <span class="svg-icon svg-icon-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="currentColor" />
                                                <path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold w-150px py-3" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-payment-mehtod-action="set_as_primary">Set as Primary</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                    <!--end::More-->
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div id="kt_customer_view_payment_method_2" class="collapse fs-6 ps-10" data-bs-parent="#kt_customer_view_payment_method">
                                <!--begin::Details-->
                                <div class="d-flex flex-wrap py-5">
                                    <!--begin::Col-->
                                    <div class="flex-equal me-5">
                                        <table class="table table-flush fw-bold gy-1">
                                            <tr>
                                                <td class="text-muted min-w-125px w-125px">Name</td>
                                                <td class="text-gray-800">Melody Macy</td>
                                            </tr>
                                            <tr>
                                                <td class="text-muted min-w-125px w-125px">Number</td>
                                                <td class="text-gray-800">**** 9411</td>
                                            </tr>
                                            <tr>
                                                <td class="text-muted min-w-125px w-125px">Expires</td>
                                                <td class="text-gray-800">02/2022</td>
                                            </tr>
                                            <tr>
                                                <td class="text-muted min-w-125px w-125px">Type</td>
                                                <td class="text-gray-800">Visa credit card</td>
                                            </tr>
                                            <tr>
                                                <td class="text-muted min-w-125px w-125px">Issuer</td>
                                                <td class="text-gray-800">ENBANK</td>
                                            </tr>
                                            <tr>
                                                <td class="text-muted min-w-125px w-125px">ID</td>
                                                <td class="text-gray-800">id_w2r84jdy723</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="flex-equal">
                                        <table class="table table-flush fw-bold gy-1">
                                            <tr>
                                                <td class="text-muted min-w-125px w-125px">Billing address</td>
                                                <td class="text-gray-800">UK</td>
                                            </tr>
                                            <tr>
                                                <td class="text-muted min-w-125px w-125px">Phone</td>
                                                <td class="text-gray-800">No phone provided</td>
                                            </tr>
                                            <tr>
                                                <td class="text-muted min-w-125px w-125px">Email</td>
                                                <td class="text-gray-800">
                                                    <a href="#" class="text-gray-900 text-hover-primary">melody@altbox.com</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-muted min-w-125px w-125px">Origin</td>
                                                <td class="text-gray-800">United Kingdom
                                                <div class="symbol symbol-20px symbol-circle ms-2">
                                                    <img src="assets/media/flags/united-kingdom.svg" />
                                                </div></td>
                                            </tr>
                                            <tr>
                                                <td class="text-muted min-w-125px w-125px">CVC check</td>
                                                <td class="text-gray-800">Passed
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr012.svg-->
                                                <span class="svg-icon svg-icon-2 svg-icon-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3" d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="currentColor" />
                                                        <path d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon--></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Option-->
                        <div class="separator separator-dashed"></div>
                        <!--begin::Option-->
                        <div class="py-0" data-kt-customer-payment-method="row">
                            <!--begin::Header-->
                            <div class="py-3 d-flex flex-stack flex-wrap">
                                <!--begin::Toggle-->
                                <div class="d-flex align-items-center collapsible collapsed rotate" data-bs-toggle="collapse" href="#kt_customer_view_payment_method_3" role="button" aria-expanded="false" aria-controls="kt_customer_view_payment_method_3">
                                    <!--begin::Arrow-->
                                    <div class="me-3 rotate-90">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
                                        <span class="svg-icon svg-icon-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </div>
                                    <!--end::Arrow-->
                                    <!--begin::Logo-->
                                    <img src="assets/media/svg/card-logos/american-express.svg" class="w-40px me-3" alt="" />
                                    <!--end::Logo-->
                                    <!--begin::Summary-->
                                    <div class="me-3">
                                        <div class="d-flex align-items-center">
                                            <div class="text-gray-800 fw-bolder">American Express</div>
                                            <div class="badge badge-light-danger ms-5">Expired</div>
                                        </div>
                                        <div class="text-muted">Expires Aug 2021</div>
                                    </div>
                                    <!--end::Summary-->
                                </div>
                                <!--end::Toggle-->
                                <!--begin::Toolbar-->
                                <div class="d-flex my-3 ms-9">
                                    <!--begin::Edit-->
                                    <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_new_card">
                                        <span data-bs-toggle="tooltip" data-bs-trigger="hover" title="Edit">
                                            <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                            <span class="svg-icon svg-icon-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
                                                    <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </a>
                                    <!--end::Edit-->
                                    <!--begin::Delete-->
                                    <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="tooltip" title="Delete" data-kt-customer-payment-method="delete">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                        <span class="svg-icon svg-icon-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor" />
                                                <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor" />
                                                <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </a>
                                    <!--end::Delete-->
                                    <!--begin::More-->
                                    <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px" data-bs-toggle="tooltip" title="More Options" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                        <span class="svg-icon svg-icon-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="currentColor" />
                                                <path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold w-150px py-3" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-payment-mehtod-action="set_as_primary">Set as Primary</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                    <!--end::More-->
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div id="kt_customer_view_payment_method_3" class="collapse fs-6 ps-10" data-bs-parent="#kt_customer_view_payment_method">
                                <!--begin::Details-->
                                <div class="d-flex flex-wrap py-5">
                                    <!--begin::Col-->
                                    <div class="flex-equal me-5">
                                        <table class="table table-flush fw-bold gy-1">
                                            <tr>
                                                <td class="text-muted min-w-125px w-125px">Name</td>
                                                <td class="text-gray-800">Max Smith</td>
                                            </tr>
                                            <tr>
                                                <td class="text-muted min-w-125px w-125px">Number</td>
                                                <td class="text-gray-800">**** 8853</td>
                                            </tr>
                                            <tr>
                                                <td class="text-muted min-w-125px w-125px">Expires</td>
                                                <td class="text-gray-800">08/2021</td>
                                            </tr>
                                            <tr>
                                                <td class="text-muted min-w-125px w-125px">Type</td>
                                                <td class="text-gray-800">American express credit card</td>
                                            </tr>
                                            <tr>
                                                <td class="text-muted min-w-125px w-125px">Issuer</td>
                                                <td class="text-gray-800">USABANK</td>
                                            </tr>
                                            <tr>
                                                <td class="text-muted min-w-125px w-125px">ID</td>
                                                <td class="text-gray-800">id_89457jcje63</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="flex-equal">
                                        <table class="table table-flush fw-bold gy-1">
                                            <tr>
                                                <td class="text-muted min-w-125px w-125px">Billing address</td>
                                                <td class="text-gray-800">US</td>
                                            </tr>
                                            <tr>
                                                <td class="text-muted min-w-125px w-125px">Phone</td>
                                                <td class="text-gray-800">No phone provided</td>
                                            </tr>
                                            <tr>
                                                <td class="text-muted min-w-125px w-125px">Email</td>
                                                <td class="text-gray-800">
                                                    <a href="#" class="text-gray-900 text-hover-primary">max@kt.com</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-muted min-w-125px w-125px">Origin</td>
                                                <td class="text-gray-800">United States of America
                                                <div class="symbol symbol-20px symbol-circle ms-2">
                                                    <img src="assets/media/flags/united-states.svg" />
                                                </div></td>
                                            </tr>
                                            <tr>
                                                <td class="text-muted min-w-125px w-125px">CVC check</td>
                                                <td class="text-gray-800">Failed
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                <span class="svg-icon svg-icon-2 svg-icon-danger">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                                        <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon--></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Option-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card pt-4 mb-6 mb-xl-9">
                    <!--begin::Card header-->
                    <div class="card-header border-0">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <h2 class="fw-bolder">Credit Balance</h2>
                        </div>
                        <!--end::Card title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                            <a href="#" class="btn btn-sm btn-flex btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_adjust_balance">
                            <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                            <span class="svg-icon svg-icon-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
                                    <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->Adjust Balance</a>
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <div class="fw-bolder fs-2">$32,487.57
                        <span class="text-muted fs-4 fw-bold">USD</span>
                        <div class="fs-7 fw-normal text-muted">Balance will increase the amount due on the customer's next invoice.</div></div>
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card pt-2 mb-6 mb-xl-9">
                    <!--begin::Card header-->
                    <div class="card-header border-0">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <h2>Invoices</h2>
                        </div>
                        <!--end::Card title-->
                        <!--begin::Toolbar-->
                        <div class="card-toolbar m-0">
                            <!--begin::Tab nav-->
                            <ul class="nav nav-stretch fs-5 fw-bold nav-line-tabs nav-line-tabs-2x border-transparent" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a id="kt_referrals_year_tab" class="nav-link text-active-primary active" data-bs-toggle="tab" role="tab" href="#kt_customer_details_invoices_1">This Year</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a id="kt_referrals_2019_tab" class="nav-link text-active-primary ms-3" data-bs-toggle="tab" role="tab" href="#kt_customer_details_invoices_2">2020</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a id="kt_referrals_2018_tab" class="nav-link text-active-primary ms-3" data-bs-toggle="tab" role="tab" href="#kt_customer_details_invoices_3">2019</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a id="kt_referrals_2017_tab" class="nav-link text-active-primary ms-3" data-bs-toggle="tab" role="tab" href="#kt_customer_details_invoices_4">2018</a>
                                </li>
                            </ul>
                            <!--end::Tab nav-->
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Tab Content-->
                        <div id="kt_referred_users_tab_content" class="tab-content">
                            <!--begin::Tab panel-->
                            <div id="kt_customer_details_invoices_1" class="py-0 tab-pane fade show active" role="tabpanel">
                                <!--begin::Table-->
                                <table id="kt_customer_details_invoices_table_1" class="table align-middle table-row-dashed fs-6 fw-bolder gy-5">
                                    <!--begin::Thead-->
                                    <thead class="border-bottom border-gray-200 fs-7 text-uppercase fw-bolder">
                                        <tr class="text-start text-muted gs-0">
                                            <th class="min-w-100px">Order ID</th>
                                            <th class="min-w-100px">Amount</th>
                                            <th class="min-w-100px">Status</th>
                                            <th class="min-w-125px">Date</th>
                                            <th class="min-w-100px text-end pe-7">Invoice</th>
                                        </tr>
                                    </thead>
                                    <!--end::Thead-->
                                    <!--begin::Tbody-->
                                    <tbody class="fs-6 fw-bold text-gray-600">
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">102445788</a>
                                            </td>
                                            <td class="text-success">$38.00</td>
                                            <td>
                                                <span class="badge badge-light-info">In progress</span>
                                            </td>
                                            <td>Nov 01, 2020</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">423445721</a>
                                            </td>
                                            <td class="text-danger">$-2.60</td>
                                            <td>
                                                <span class="badge badge-light-info">In progress</span>
                                            </td>
                                            <td>Oct 24, 2020</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                            </td>
                                            <td class="text-success">$76.00</td>
                                            <td>
                                                <span class="badge badge-light-warning">Pending</span>
                                            </td>
                                            <td>Oct 08, 2020</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                            </td>
                                            <td class="text-success">$5.00</td>
                                            <td>
                                                <span class="badge badge-light-warning">Pending</span>
                                            </td>
                                            <td>Sep 15, 2020</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">523445943</a>
                                            </td>
                                            <td class="text-danger">$-1.30</td>
                                            <td>
                                                <span class="badge badge-light-success">Approved</span>
                                            </td>
                                            <td>May 30, 2020</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">231445943</a>
                                            </td>
                                            <td class="text-success">$204.00</td>
                                            <td>
                                                <span class="badge badge-light-warning">Pending</span>
                                            </td>
                                            <td>Apr 22, 2020</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">426445943</a>
                                            </td>
                                            <td class="text-success">$31.00</td>
                                            <td>
                                                <span class="badge badge-light-info">In progress</span>
                                            </td>
                                            <td>Feb 09, 2020</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">984445943</a>
                                            </td>
                                            <td class="text-success">$52.00</td>
                                            <td>
                                                <span class="badge badge-light-success">Approved</span>
                                            </td>
                                            <td>Nov 01, 2020</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">324442313</a>
                                            </td>
                                            <td class="text-danger">$-0.80</td>
                                            <td>
                                                <span class="badge badge-light-info">In progress</span>
                                            </td>
                                            <td>Jan 04, 2020</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!--end::Tbody-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Tab panel-->
                            <!--begin::Tab panel-->
                            <div id="kt_customer_details_invoices_2" class="py-0 tab-pane fade" role="tabpanel">
                                <!--begin::Table-->
                                <table id="kt_customer_details_invoices_table_2" class="table align-middle table-row-dashed fs-6 fw-bolder gy-5">
                                    <!--begin::Thead-->
                                    <thead class="border-bottom border-gray-200 fs-7 text-uppercase fw-bolder">
                                        <tr class="text-start text-muted gs-0">
                                            <th class="min-w-100px">Order ID</th>
                                            <th class="min-w-100px">Amount</th>
                                            <th class="min-w-100px">Status</th>
                                            <th class="min-w-125px">Date</th>
                                            <th class="min-w-100px text-end pe-7">Invoice</th>
                                        </tr>
                                    </thead>
                                    <!--end::Thead-->
                                    <!--begin::Tbody-->
                                    <tbody class="fs-6 fw-bold text-gray-600">
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">523445943</a>
                                            </td>
                                            <td class="text-danger">$-1.30</td>
                                            <td>
                                                <span class="badge badge-light-danger">Rejected</span>
                                            </td>
                                            <td>May 30, 2020</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">231445943</a>
                                            </td>
                                            <td class="text-success">$204.00</td>
                                            <td>
                                                <span class="badge badge-light-info">In progress</span>
                                            </td>
                                            <td>Apr 22, 2020</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">426445943</a>
                                            </td>
                                            <td class="text-success">$31.00</td>
                                            <td>
                                                <span class="badge badge-light-success">Approved</span>
                                            </td>
                                            <td>Feb 09, 2020</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">984445943</a>
                                            </td>
                                            <td class="text-success">$52.00</td>
                                            <td>
                                                <span class="badge badge-light-danger">Rejected</span>
                                            </td>
                                            <td>Nov 01, 2020</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">324442313</a>
                                            </td>
                                            <td class="text-danger">$-0.80</td>
                                            <td>
                                                <span class="badge badge-light-success">Approved</span>
                                            </td>
                                            <td>Jan 04, 2020</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">102445788</a>
                                            </td>
                                            <td class="text-success">$38.00</td>
                                            <td>
                                                <span class="badge badge-light-success">Approved</span>
                                            </td>
                                            <td>Nov 01, 2020</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">423445721</a>
                                            </td>
                                            <td class="text-danger">$-2.60</td>
                                            <td>
                                                <span class="badge badge-light-success">Approved</span>
                                            </td>
                                            <td>Oct 24, 2020</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                            </td>
                                            <td class="text-success">$76.00</td>
                                            <td>
                                                <span class="badge badge-light-info">In progress</span>
                                            </td>
                                            <td>Oct 08, 2020</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                            </td>
                                            <td class="text-success">$5.00</td>
                                            <td>
                                                <span class="badge badge-light-success">Approved</span>
                                            </td>
                                            <td>Sep 15, 2020</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!--end::Tbody-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Tab panel-->
                            <!--begin::Tab panel-->
                            <div id="kt_customer_details_invoices_3" class="py-0 tab-pane fade" role="tabpanel">
                                <!--begin::Table-->
                                <table id="kt_customer_details_invoices_table_3" class="table align-middle table-row-dashed fs-6 fw-bolder gy-5">
                                    <!--begin::Thead-->
                                    <thead class="border-bottom border-gray-200 fs-7 text-uppercase fw-bolder">
                                        <tr class="text-start text-muted gs-0">
                                            <th class="min-w-100px">Order ID</th>
                                            <th class="min-w-100px">Amount</th>
                                            <th class="min-w-100px">Status</th>
                                            <th class="min-w-125px">Date</th>
                                            <th class="min-w-100px text-end pe-7">Invoice</th>
                                        </tr>
                                    </thead>
                                    <!--end::Thead-->
                                    <!--begin::Tbody-->
                                    <tbody class="fs-6 fw-bold text-gray-600">
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">426445943</a>
                                            </td>
                                            <td class="text-success">$31.00</td>
                                            <td>
                                                <span class="badge badge-light-warning">Pending</span>
                                            </td>
                                            <td>Feb 09, 2020</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">984445943</a>
                                            </td>
                                            <td class="text-success">$52.00</td>
                                            <td>
                                                <span class="badge badge-light-warning">Pending</span>
                                            </td>
                                            <td>Nov 01, 2020</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">324442313</a>
                                            </td>
                                            <td class="text-danger">$-0.80</td>
                                            <td>
                                                <span class="badge badge-light-success">Approved</span>
                                            </td>
                                            <td>Jan 04, 2020</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                            </td>
                                            <td class="text-success">$5.00</td>
                                            <td>
                                                <span class="badge badge-light-danger">Rejected</span>
                                            </td>
                                            <td>Sep 15, 2020</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">102445788</a>
                                            </td>
                                            <td class="text-success">$38.00</td>
                                            <td>
                                                <span class="badge badge-light-danger">Rejected</span>
                                            </td>
                                            <td>Nov 01, 2020</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">423445721</a>
                                            </td>
                                            <td class="text-danger">$-2.60</td>
                                            <td>
                                                <span class="badge badge-light-info">In progress</span>
                                            </td>
                                            <td>Oct 24, 2020</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                            </td>
                                            <td class="text-success">$76.00</td>
                                            <td>
                                                <span class="badge badge-light-warning">Pending</span>
                                            </td>
                                            <td>Oct 08, 2020</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">523445943</a>
                                            </td>
                                            <td class="text-danger">$-1.30</td>
                                            <td>
                                                <span class="badge badge-light-info">In progress</span>
                                            </td>
                                            <td>May 30, 2020</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">231445943</a>
                                            </td>
                                            <td class="text-success">$204.00</td>
                                            <td>
                                                <span class="badge badge-light-warning">Pending</span>
                                            </td>
                                            <td>Apr 22, 2020</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!--end::Tbody-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Tab panel-->
                            <!--begin::Tab panel-->
                            <div id="kt_customer_details_invoices_4" class="py-0 tab-pane fade" role="tabpanel">
                                <!--begin::Table-->
                                <table id="kt_customer_details_invoices_table_4" class="table align-middle table-row-dashed fs-6 fw-bolder gy-5">
                                    <!--begin::Thead-->
                                    <thead class="border-bottom border-gray-200 fs-7 text-uppercase fw-bolder">
                                        <tr class="text-start text-muted gs-0">
                                            <th class="min-w-100px">Order ID</th>
                                            <th class="min-w-100px">Amount</th>
                                            <th class="min-w-100px">Status</th>
                                            <th class="min-w-125px">Date</th>
                                            <th class="min-w-100px text-end pe-7">Invoice</th>
                                        </tr>
                                    </thead>
                                    <!--end::Thead-->
                                    <!--begin::Tbody-->
                                    <tbody class="fs-6 fw-bold text-gray-600">
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">102445788</a>
                                            </td>
                                            <td class="text-success">$38.00</td>
                                            <td>
                                                <span class="badge badge-light-warning">Pending</span>
                                            </td>
                                            <td>Nov 01, 2020</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">423445721</a>
                                            </td>
                                            <td class="text-danger">$-2.60</td>
                                            <td>
                                                <span class="badge badge-light-info">In progress</span>
                                            </td>
                                            <td>Oct 24, 2020</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">102445788</a>
                                            </td>
                                            <td class="text-success">$38.00</td>
                                            <td>
                                                <span class="badge badge-light-warning">Pending</span>
                                            </td>
                                            <td>Nov 01, 2020</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">423445721</a>
                                            </td>
                                            <td class="text-danger">$-2.60</td>
                                            <td>
                                                <span class="badge badge-light-warning">Pending</span>
                                            </td>
                                            <td>Oct 24, 2020</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">426445943</a>
                                            </td>
                                            <td class="text-success">$31.00</td>
                                            <td>
                                                <span class="badge badge-light-warning">Pending</span>
                                            </td>
                                            <td>Feb 09, 2020</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">984445943</a>
                                            </td>
                                            <td class="text-success">$52.00</td>
                                            <td>
                                                <span class="badge badge-light-danger">Rejected</span>
                                            </td>
                                            <td>Nov 01, 2020</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">324442313</a>
                                            </td>
                                            <td class="text-danger">$-0.80</td>
                                            <td>
                                                <span class="badge badge-light-success">Approved</span>
                                            </td>
                                            <td>Jan 04, 2020</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                            </td>
                                            <td class="text-success">$76.00</td>
                                            <td>
                                                <span class="badge badge-light-warning">Pending</span>
                                            </td>
                                            <td>Oct 08, 2020</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                            </td>
                                            <td class="text-success">$76.00</td>
                                            <td>
                                                <span class="badge badge-light-success">Approved</span>
                                            </td>
                                            <td>Oct 08, 2020</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!--end::Tbody-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Tab panel-->
                        </div>
                        <!--end::Tab Content-->
                    </div>
                    <!--end::Card body-->
                </div> --}}
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
                            <h2>Schedule</h2>
                        </div>
                        <!--end::Card title-->
                        <!--begin::Card toolbar-->
                        {{-- <div class="card-toolbar">
                            <!--begin::Button-->
                            <button type="button" class="btn btn-sm btn-light-primary">
                            <!--begin::Svg Icon | path: icons/duotune/files/fil021.svg-->
                            <span class="svg-icon svg-icon-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path opacity="0.3" d="M19 15C20.7 15 22 13.7 22 12C22 10.3 20.7 9 19 9C18.9 9 18.9 9 18.8 9C18.9 8.7 19 8.3 19 8C19 6.3 17.7 5 16 5C15.4 5 14.8 5.2 14.3 5.5C13.4 4 11.8 3 10 3C7.2 3 5 5.2 5 8C5 8.3 5 8.7 5.1 9H5C3.3 9 2 10.3 2 12C2 13.7 3.3 15 5 15H19Z" fill="currentColor" />
                                    <path d="M13 17.4V12C13 11.4 12.6 11 12 11C11.4 11 11 11.4 11 12V17.4H13Z" fill="currentColor" />
                                    <path opacity="0.3" d="M8 17.4H16L12.7 20.7C12.3 21.1 11.7 21.1 11.3 20.7L8 17.4Z" fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->Download Report</button>
                            <!--end::Button-->
                        </div> --}}
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body py-0">
                        <!--begin::Table wrapper-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table align-middle table-row-dashed fw-bold text-gray-600 fs-6 gy-5" id="kt_table_customers_logs">
                                <!--begin::Table body-->
                                <tbody>
                                    <!--begin::Table row-->
                                    <tr>
                                        <!--begin::Badge=-->
                                        <td class="min-w-70px">
                                            <div class="badge badge-light-success">ROOM 4</div>
                                        </td>
                                        <!--end::Badge=-->
                                        <!--begin::Status=-->
                                        <td>Sunday, 21 January 2023</td>
                                        <!--end::Status=-->
                                        <!--begin::Timestamp=-->
                                        <td class="pe-0 text-end min-w-200px">9.23 AM - 1.00 PM</td>
                                        <!--end::Timestamp=-->
                                    </tr>
                                    <!--end::Table row-->
                                    <!--begin::Table row-->
                                    {{-- <tr>
                                        <!--begin::Badge=-->
                                        <td class="min-w-70px">
                                            <div class="badge badge-light-danger">500 ERR</div>
                                        </td>
                                        <!--end::Badge=-->
                                        <!--begin::Status=-->
                                        <td>POST /v1/invoice/in_9688_2667/invalid</td>
                                        <!--end::Status=-->
                                        <!--begin::Timestamp=-->
                                        <td class="pe-0 text-end min-w-200px">25 Oct 2022, 6:05 pm</td>
                                        <!--end::Timestamp=-->
                                    </tr>
                                    <!--end::Table row-->
                                    <!--begin::Table row-->
                                    <tr>
                                        <!--begin::Badge=-->
                                        <td class="min-w-70px">
                                            <div class="badge badge-light-warning">404 WRN</div>
                                        </td>
                                        <!--end::Badge=-->
                                        <!--begin::Status=-->
                                        <td>POST /v1/customer/c_624475fdc3e9c/not_found</td>
                                        <!--end::Status=-->
                                        <!--begin::Timestamp=-->
                                        <td class="pe-0 text-end min-w-200px">22 Sep 2022, 2:40 pm</td>
                                        <!--end::Timestamp=-->
                                    </tr>
                                    <!--end::Table row-->
                                    <!--begin::Table row-->
                                    <tr>
                                        <!--begin::Badge=-->
                                        <td class="min-w-70px">
                                            <div class="badge badge-light-danger">500 ERR</div>
                                        </td>
                                        <!--end::Badge=-->
                                        <!--begin::Status=-->
                                        <td>POST /v1/invoice/in_9688_2667/invalid</td>
                                        <!--end::Status=-->
                                        <!--begin::Timestamp=-->
                                        <td class="pe-0 text-end min-w-200px">20 Jun 2022, 2:40 pm</td>
                                        <!--end::Timestamp=-->
                                    </tr>
                                    <!--end::Table row-->
                                    <!--begin::Table row-->
                                    <tr>
                                        <!--begin::Badge=-->
                                        <td class="min-w-70px">
                                            <div class="badge badge-light-success">200 OK</div>
                                        </td>
                                        <!--end::Badge=-->
                                        <!--begin::Status=-->
                                        <td>POST /v1/invoices/in_3102_4131/payment</td>
                                        <!--end::Status=-->
                                        <!--begin::Timestamp=-->
                                        <td class="pe-0 text-end min-w-200px">10 Nov 2022, 8:43 pm</td>
                                        <!--end::Timestamp=-->
                                    </tr>
                                    <!--end::Table row-->
                                    <!--begin::Table row-->
                                    <tr>
                                        <!--begin::Badge=-->
                                        <td class="min-w-70px">
                                            <div class="badge badge-light-danger">500 ERR</div>
                                        </td>
                                        <!--end::Badge=-->
                                        <!--begin::Status=-->
                                        <td>POST /v1/invoice/in_9094_8155/invalid</td>
                                        <!--end::Status=-->
                                        <!--begin::Timestamp=-->
                                        <td class="pe-0 text-end min-w-200px">22 Sep 2022, 11:05 am</td>
                                        <!--end::Timestamp=-->
                                    </tr>
                                    <!--end::Table row-->
                                    <!--begin::Table row-->
                                    <tr>
                                        <!--begin::Badge=-->
                                        <td class="min-w-70px">
                                            <div class="badge badge-light-success">200 OK</div>
                                        </td>
                                        <!--end::Badge=-->
                                        <!--begin::Status=-->
                                        <td>POST /v1/invoices/in_3102_4131/payment</td>
                                        <!--end::Status=-->
                                        <!--begin::Timestamp=-->
                                        <td class="pe-0 text-end min-w-200px">10 Mar 2022, 10:30 am</td>
                                        <!--end::Timestamp=-->
                                    </tr>
                                    <!--end::Table row-->
                                    <!--begin::Table row-->
                                    <tr>
                                        <!--begin::Badge=-->
                                        <td class="min-w-70px">
                                            <div class="badge badge-light-danger">500 ERR</div>
                                        </td>
                                        <!--end::Badge=-->
                                        <!--begin::Status=-->
                                        <td>POST /v1/invoice/in_2607_4645/invalid</td>
                                        <!--end::Status=-->
                                        <!--begin::Timestamp=-->
                                        <td class="pe-0 text-end min-w-200px">19 Aug 2022, 10:10 pm</td>
                                        <!--end::Timestamp=-->
                                    </tr>
                                    <!--end::Table row-->
                                    <!--begin::Table row-->
                                    <tr>
                                        <!--begin::Badge=-->
                                        <td class="min-w-70px">
                                            <div class="badge badge-light-warning">404 WRN</div>
                                        </td>
                                        <!--end::Badge=-->
                                        <!--begin::Status=-->
                                        <td>POST /v1/customer/c_624475fdc3e9a/not_found</td>
                                        <!--end::Status=-->
                                        <!--begin::Timestamp=-->
                                        <td class="pe-0 text-end min-w-200px">05 May 2022, 2:40 pm</td>
                                        <!--end::Timestamp=-->
                                    </tr>
                                    <!--end::Table row-->
                                    <!--begin::Table row-->
                                    <tr>
                                        <!--begin::Badge=-->
                                        <td class="min-w-70px">
                                            <div class="badge badge-light-danger">500 ERR</div>
                                        </td>
                                        <!--end::Badge=-->
                                        <!--begin::Status=-->
                                        <td>POST /v1/invoice/in_9094_8155/invalid</td>
                                        <!--end::Status=-->
                                        <!--begin::Timestamp=-->
                                        <td class="pe-0 text-end min-w-200px">20 Dec 2022, 10:10 pm</td>
                                        <!--end::Timestamp=-->
                                    </tr> --}}
                                    <!--end::Table row-->
                                </tbody>
                                <!--end::Table body-->
                            </table>
                            <!--end::Table-->
                        </div>
                        <!--end::Table wrapper-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                {{-- <div class="card pt-4 mb-6 mb-xl-9">
                    <!--begin::Card header-->
                    <div class="card-header border-0">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <h2>Events</h2>
                        </div>
                        <!--end::Card title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                            <!--begin::Button-->
                            <button type="button" class="btn btn-sm btn-light-primary">
                            <!--begin::Svg Icon | path: icons/duotune/files/fil021.svg-->
                            <span class="svg-icon svg-icon-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path opacity="0.3" d="M19 15C20.7 15 22 13.7 22 12C22 10.3 20.7 9 19 9C18.9 9 18.9 9 18.8 9C18.9 8.7 19 8.3 19 8C19 6.3 17.7 5 16 5C15.4 5 14.8 5.2 14.3 5.5C13.4 4 11.8 3 10 3C7.2 3 5 5.2 5 8C5 8.3 5 8.7 5.1 9H5C3.3 9 2 10.3 2 12C2 13.7 3.3 15 5 15H19Z" fill="currentColor" />
                                    <path d="M13 17.4V12C13 11.4 12.6 11 12 11C11.4 11 11 11.4 11 12V17.4H13Z" fill="currentColor" />
                                    <path opacity="0.3" d="M8 17.4H16L12.7 20.7C12.3 21.1 11.7 21.1 11.3 20.7L8 17.4Z" fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->Download Report</button>
                            <!--end::Button-->
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body py-0">
                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed fs-6 text-gray-600 fw-bold gy-5" id="kt_table_customers_events">
                            <!--begin::Table body-->
                            <tbody>
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Event=-->
                                    <td class="min-w-400px">
                                    <a href="#" class="text-gray-600 text-hover-primary me-1">Brian Cox</a>has made payment to
                                    <a href="#" class="fw-bolder text-gray-900 text-hover-primary">#OLP-45690</a></td>
                                    <!--end::Event=-->
                                    <!--begin::Timestamp=-->
                                    <td class="pe-0 text-gray-600 text-end min-w-200px">25 Oct 2022, 6:43 am</td>
                                    <!--end::Timestamp=-->
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Event=-->
                                    <td class="min-w-400px">
                                    <a href="#" class="text-gray-600 text-hover-primary me-1">Brian Cox</a>has made payment to
                                    <a href="#" class="fw-bolder text-gray-900 text-hover-primary">#OLP-45690</a></td>
                                    <!--end::Event=-->
                                    <!--begin::Timestamp=-->
                                    <td class="pe-0 text-gray-600 text-end min-w-200px">15 Apr 2022, 2:40 pm</td>
                                    <!--end::Timestamp=-->
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Event=-->
                                    <td class="min-w-400px">Invoice
                                    <a href="#" class="fw-bolder text-gray-900 text-hover-primary me-1">#SEP-45656</a>status has changed from
                                    <span class="badge badge-light-warning me-1">Pending</span>to
                                    <span class="badge badge-light-info">In Progress</span></td>
                                    <!--end::Event=-->
                                    <!--begin::Timestamp=-->
                                    <td class="pe-0 text-gray-600 text-end min-w-200px">24 Jun 2022, 8:43 pm</td>
                                    <!--end::Timestamp=-->
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Event=-->
                                    <td class="min-w-400px">Invoice
                                    <a href="#" class="fw-bolder text-gray-900 text-hover-primary me-1">#SEP-45656</a>status has changed from
                                    <span class="badge badge-light-warning me-1">Pending</span>to
                                    <span class="badge badge-light-info">In Progress</span></td>
                                    <!--end::Event=-->
                                    <!--begin::Timestamp=-->
                                    <td class="pe-0 text-gray-600 text-end min-w-200px">05 May 2022, 5:20 pm</td>
                                    <!--end::Timestamp=-->
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Event=-->
                                    <td class="min-w-400px">
                                    <a href="#" class="text-gray-600 text-hover-primary me-1">Max Smith</a>has made payment to
                                    <a href="#" class="fw-bolder text-gray-900 text-hover-primary">#SDK-45670</a></td>
                                    <!--end::Event=-->
                                    <!--begin::Timestamp=-->
                                    <td class="pe-0 text-gray-600 text-end min-w-200px">21 Feb 2022, 6:05 pm</td>
                                    <!--end::Timestamp=-->
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Event=-->
                                    <td class="min-w-400px">
                                    <a href="#" class="text-gray-600 text-hover-primary me-1">Brian Cox</a>has made payment to
                                    <a href="#" class="fw-bolder text-gray-900 text-hover-primary">#OLP-45690</a></td>
                                    <!--end::Event=-->
                                    <!--begin::Timestamp=-->
                                    <td class="pe-0 text-gray-600 text-end min-w-200px">21 Feb 2022, 8:43 pm</td>
                                    <!--end::Timestamp=-->
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Event=-->
                                    <td class="min-w-400px">Invoice
                                    <a href="#" class="fw-bolder text-gray-900 text-hover-primary me-1">#WER-45670</a>is
                                    <span class="badge badge-light-info">In Progress</span></td>
                                    <!--end::Event=-->
                                    <!--begin::Timestamp=-->
                                    <td class="pe-0 text-gray-600 text-end min-w-200px">05 May 2022, 10:30 am</td>
                                    <!--end::Timestamp=-->
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Event=-->
                                    <td class="min-w-400px">Invoice
                                    <a href="#" class="fw-bolder text-gray-900 text-hover-primary me-1">#KIO-45656</a>status has changed from
                                    <span class="badge badge-light-succees me-1">In Transit</span>to
                                    <span class="badge badge-light-success">Approved</span></td>
                                    <!--end::Event=-->
                                    <!--begin::Timestamp=-->
                                    <td class="pe-0 text-gray-600 text-end min-w-200px">10 Mar 2022, 10:30 am</td>
                                    <!--end::Timestamp=-->
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Event=-->
                                    <td class="min-w-400px">
                                    <a href="#" class="text-gray-600 text-hover-primary me-1">Max Smith</a>has made payment to
                                    <a href="#" class="fw-bolder text-gray-900 text-hover-primary">#SDK-45670</a></td>
                                    <!--end::Event=-->
                                    <!--begin::Timestamp=-->
                                    <td class="pe-0 text-gray-600 text-end min-w-200px">05 May 2022, 6:05 pm</td>
                                    <!--end::Timestamp=-->
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Event=-->
                                    <td class="min-w-400px">
                                    <a href="#" class="text-gray-600 text-hover-primary me-1">Max Smith</a>has made payment to
                                    <a href="#" class="fw-bolder text-gray-900 text-hover-primary">#SDK-45670</a></td>
                                    <!--end::Event=-->
                                    <!--begin::Timestamp=-->
                                    <td class="pe-0 text-gray-600 text-end min-w-200px">10 Mar 2022, 8:43 pm</td>
                                    <!--end::Timestamp=-->
                                </tr>
                                <!--end::Table row-->
                            </tbody>
                            <!--end::Table body-->
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Card body-->
                </div> --}}
                <!--end::Card-->
            </div>
            <!--end:::Tab pane-->
            <!--begin:::Tab pane-->
            {{-- <div class="tab-pane fade" id="kt_customer_view_overview_statements" role="tabpanel">
                <!--begin::Earnings-->
                <div class="card mb-6 mb-xl-9">
                    <!--begin::Header-->
                    <div class="card-header border-0">
                        <div class="card-title">
                            <h2>Experiences</h2>
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body py-0">
                        <div class="fs-5 fw-bold text-gray-500 mb-4">Last 30 day earnings calculated. Apart from arranging the order of topics.</div>
                        <!--begin::Left Section-->
                        <div class="d-flex flex-wrap flex-stack mb-5">
                            <!--begin::Row-->
                            <div class="d-flex flex-wrap">
                                <!--begin::Col-->
                                <div class="border border-dashed border-gray-300 w-150px rounded my-3 p-4 me-6">
                                    <span class="fs-1 fw-bolder text-gray-800 lh-1">
                                        <span data-kt-countup="true" data-kt-countup-value="6,840" data-kt-countup-prefix="$">0</span>
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                        <span class="svg-icon svg-icon-1 svg-icon-success">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
                                                <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <span class="fs-6 fw-bold text-muted d-block lh-1 pt-2">Net Earnings</span>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="border border-dashed border-gray-300 w-125px rounded my-3 p-4 me-6">
                                    <span class="fs-1 fw-bolder text-gray-800 lh-1">
                                    <span class="" data-kt-countup="true" data-kt-countup-value="16">0</span>%
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                                    <span class="svg-icon svg-icon-1 svg-icon-danger">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
                                            <path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></span>
                                    <span class="fs-6 fw-bold text-muted d-block lh-1 pt-2">Change</span>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="border border-dashed border-gray-300 w-150px rounded my-3 p-4 me-6">
                                    <span class="fs-1 fw-bolder text-gray-800 lh-1">
                                        <span data-kt-countup="true" data-kt-countup-value="1,240" data-kt-countup-prefix="$">0</span>
                                        <span class="text-primary">--</span>
                                    </span>
                                    <span class="fs-6 fw-bold text-muted d-block lh-1 pt-2">Fees</span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                            <a href="#" class="btn btn-sm btn-light-primary flex-shrink-0">Withdraw Earnings</a>
                        </div>
                        <!--end::Left Section-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Earnings-->
                <!--begin::Statements-->
                <div class="card mb-6 mb-xl-9">
                    <!--begin::Header-->
                    <div class="card-header">
                        <!--begin::Title-->
                        <div class="card-title">
                            <h2>Statement</h2>
                        </div>
                        <!--end::Title-->
                        <!--begin::Toolbar-->
                        <div class="card-toolbar">
                            <!--begin::Tab nav-->
                            <ul class="nav nav-stretch fs-5 fw-bold nav-line-tabs nav-line-tabs-2x border-transparent" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link text-active-primary active" data-bs-toggle="tab" role="tab" href="#kt_customer_view_statement_1">This Year</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link text-active-primary ms-3" data-bs-toggle="tab" role="tab" href="#kt_customer_view_statement_2">2020</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link text-active-primary ms-3" data-bs-toggle="tab" role="tab" href="#kt_customer_view_statement_3">2019</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link text-active-primary ms-3" data-bs-toggle="tab" role="tab" href="#kt_customer_view_statement_4">2018</a>
                                </li>
                            </ul>
                            <!--end::Tab nav-->
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Card body-->
                    <div class="card-body pb-5">
                        <!--begin::Tab Content-->
                        <div id="kt_customer_view_statement_tab_content" class="tab-content">
                            <!--begin::Tab panel-->
                            <div id="kt_customer_view_statement_1" class="py-0 tab-pane fade show active" role="tabpanel">
                                <!--begin::Table-->
                                <table id="kt_customer_view_statement_table_1" class="table align-middle table-row-dashed fs-6 text-gray-600 fw-bold gy-4">
                                    <!--begin::Table head-->
                                    <thead class="border-bottom border-gray-200">
                                        <!--begin::Table row-->
                                        <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                            <th class="w-125px">Date</th>
                                            <th class="w-100px">Order ID</th>
                                            <th class="w-300px">Details</th>
                                            <th class="w-100px">Amount</th>
                                            <th class="w-100px text-end pe-7">Invoice</th>
                                        </tr>
                                        <!--end::Table row-->
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        <tr>
                                            <td>Nov 01, 2021</td>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">102445788</a>
                                            </td>
                                            <td>Darknight transparency 36 Icons Pack</td>
                                            <td class="text-success">$38.00</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Oct 24, 2021</td>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">423445721</a>
                                            </td>
                                            <td>Seller Fee</td>
                                            <td class="text-danger">$-2.60</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Oct 08, 2021</td>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                            </td>
                                            <td>Cartoon Mobile Emoji Phone Pack</td>
                                            <td class="text-success">$76.00</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Sep 15, 2021</td>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                            </td>
                                            <td>Iphone 12 Pro Mockup Mega Bundle</td>
                                            <td class="text-success">$5.00</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>May 30, 2021</td>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">523445943</a>
                                            </td>
                                            <td>Seller Fee</td>
                                            <td class="text-danger">$-1.30</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Apr 22, 2021</td>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">231445943</a>
                                            </td>
                                            <td>Parcel Shipping / Delivery Service App</td>
                                            <td class="text-success">$204.00</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Feb 09, 2021</td>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">426445943</a>
                                            </td>
                                            <td>Visual Design Illustration</td>
                                            <td class="text-success">$31.00</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Nov 01, 2021</td>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">984445943</a>
                                            </td>
                                            <td>Abstract Vusial Pack</td>
                                            <td class="text-success">$52.00</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jan 04, 2021</td>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">324442313</a>
                                            </td>
                                            <td>Seller Fee</td>
                                            <td class="text-danger">$-0.80</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Nov 01, 2021</td>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">102445788</a>
                                            </td>
                                            <td>Darknight transparency 36 Icons Pack</td>
                                            <td class="text-success">$38.00</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Oct 24, 2021</td>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">423445721</a>
                                            </td>
                                            <td>Seller Fee</td>
                                            <td class="text-danger">$-2.60</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Oct 08, 2021</td>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                            </td>
                                            <td>Cartoon Mobile Emoji Phone Pack</td>
                                            <td class="text-success">$76.00</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Sep 15, 2021</td>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                            </td>
                                            <td>Iphone 12 Pro Mockup Mega Bundle</td>
                                            <td class="text-success">$5.00</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>May 30, 2021</td>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">523445943</a>
                                            </td>
                                            <td>Seller Fee</td>
                                            <td class="text-danger">$-1.30</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Apr 22, 2021</td>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">231445943</a>
                                            </td>
                                            <td>Parcel Shipping / Delivery Service App</td>
                                            <td class="text-success">$204.00</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Feb 09, 2021</td>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">426445943</a>
                                            </td>
                                            <td>Visual Design Illustration</td>
                                            <td class="text-success">$31.00</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Nov 01, 2021</td>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">984445943</a>
                                            </td>
                                            <td>Abstract Vusial Pack</td>
                                            <td class="text-success">$52.00</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jan 04, 2021</td>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">324442313</a>
                                            </td>
                                            <td>Seller Fee</td>
                                            <td class="text-danger">$-0.80</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Tab panel-->
                            <!--begin::Tab panel-->
                            <div id="kt_customer_view_statement_2" class="py-0 tab-pane fade" role="tabpanel">
                                <!--begin::Table-->
                                <table id="kt_customer_view_statement_table_2" class="table align-middle table-row-dashed fs-6 text-gray-600 fw-bold gy-4">
                                    <!--begin::Table head-->
                                    <thead class="border-bottom border-gray-200">
                                        <!--begin::Table row-->
                                        <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                            <th class="w-125px">Date</th>
                                            <th class="w-100px">Order ID</th>
                                            <th class="w-300px">Details</th>
                                            <th class="w-100px">Amount</th>
                                            <th class="w-100px text-end pe-7">Invoice</th>
                                        </tr>
                                        <!--end::Table row-->
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        <tr>
                                            <td>May 30, 2020</td>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">523445943</a>
                                            </td>
                                            <td>Seller Fee</td>
                                            <td class="text-danger">$-1.30</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Apr 22, 2020</td>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">231445943</a>
                                            </td>
                                            <td>Parcel Shipping / Delivery Service App</td>
                                            <td class="text-success">$204.00</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Feb 09, 2020</td>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">426445943</a>
                                            </td>
                                            <td>Visual Design Illustration</td>
                                            <td class="text-success">$31.00</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Nov 01, 2020</td>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">984445943</a>
                                            </td>
                                            <td>Abstract Vusial Pack</td>
                                            <td class="text-success">$52.00</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jan 04, 2020</td>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">324442313</a>
                                            </td>
                                            <td>Seller Fee</td>
                                            <td class="text-danger">$-0.80</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Nov 01, 2020</td>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">102445788</a>
                                            </td>
                                            <td>Darknight transparency 36 Icons Pack</td>
                                            <td class="text-success">$38.00</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Oct 24, 2020</td>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">423445721</a>
                                            </td>
                                            <td>Seller Fee</td>
                                            <td class="text-danger">$-2.60</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Oct 08, 2020</td>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                            </td>
                                            <td>Cartoon Mobile Emoji Phone Pack</td>
                                            <td class="text-success">$76.00</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Sep 15, 2020</td>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                            </td>
                                            <td>Iphone 12 Pro Mockup Mega Bundle</td>
                                            <td class="text-success">$5.00</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>May 30, 2020</td>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">523445943</a>
                                            </td>
                                            <td>Seller Fee</td>
                                            <td class="text-danger">$-1.30</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Apr 22, 2020</td>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">231445943</a>
                                            </td>
                                            <td>Parcel Shipping / Delivery Service App</td>
                                            <td class="text-success">$204.00</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Feb 09, 2020</td>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">426445943</a>
                                            </td>
                                            <td>Visual Design Illustration</td>
                                            <td class="text-success">$31.00</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Nov 01, 2020</td>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">984445943</a>
                                            </td>
                                            <td>Abstract Vusial Pack</td>
                                            <td class="text-success">$52.00</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jan 04, 2020</td>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">324442313</a>
                                            </td>
                                            <td>Seller Fee</td>
                                            <td class="text-danger">$-0.80</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Nov 01, 2020</td>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">102445788</a>
                                            </td>
                                            <td>Darknight transparency 36 Icons Pack</td>
                                            <td class="text-success">$38.00</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Oct 24, 2020</td>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">423445721</a>
                                            </td>
                                            <td>Seller Fee</td>
                                            <td class="text-danger">$-2.60</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Oct 08, 2020</td>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                            </td>
                                            <td>Cartoon Mobile Emoji Phone Pack</td>
                                            <td class="text-success">$76.00</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Sep 15, 2020</td>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                            </td>
                                            <td>Iphone 12 Pro Mockup Mega Bundle</td>
                                            <td class="text-success">$5.00</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Tab panel-->
                            <!--begin::Tab panel-->
                            <div id="kt_customer_view_statement_3" class="py-0 tab-pane fade" role="tabpanel">
                                <!--begin::Table-->
                                <table id="kt_customer_view_statement_table_3" class="table align-middle table-row-dashed fs-6 text-gray-600 fw-bold gy-4">
                                    <!--begin::Table head-->
                                    <thead class="border-bottom border-gray-200">
                                        <!--begin::Table row-->
                                        <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                            <th class="w-125px">Date</th>
                                            <th class="w-100px">Order ID</th>
                                            <th class="w-300px">Details</th>
                                            <th class="w-100px">Amount</th>
                                            <th class="w-100px text-end pe-7">Invoice</th>
                                        </tr>
                                        <!--end::Table row-->
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        <tr>
                                            <td>Feb 09, 2019</td>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">426445943</a>
                                            </td>
                                            <td>Visual Design Illustration</td>
                                            <td class="text-success">$31.00</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Nov 01, 2019</td>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">984445943</a>
                                            </td>
                                            <td>Abstract Vusial Pack</td>
                                            <td class="text-success">$52.00</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jan 04, 2019</td>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">324442313</a>
                                            </td>
                                            <td>Seller Fee</td>
                                            <td class="text-danger">$-0.80</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Sep 15, 2019</td>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                            </td>
                                            <td>Iphone 12 Pro Mockup Mega Bundle</td>
                                            <td class="text-success">$5.00</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Nov 01, 2019</td>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">102445788</a>
                                            </td>
                                            <td>Darknight transparency 36 Icons Pack</td>
                                            <td class="text-success">$38.00</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Oct 24, 2019</td>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">423445721</a>
                                            </td>
                                            <td>Seller Fee</td>
                                            <td class="text-danger">$-2.60</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Oct 08, 2019</td>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                            </td>
                                            <td>Cartoon Mobile Emoji Phone Pack</td>
                                            <td class="text-success">$76.00</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>May 30, 2019</td>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">523445943</a>
                                            </td>
                                            <td>Seller Fee</td>
                                            <td class="text-danger">$-1.30</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Apr 22, 2019</td>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">231445943</a>
                                            </td>
                                            <td>Parcel Shipping / Delivery Service App</td>
                                            <td class="text-success">$204.00</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Feb 09, 2019</td>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">426445943</a>
                                            </td>
                                            <td>Visual Design Illustration</td>
                                            <td class="text-success">$31.00</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Nov 01, 2019</td>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">984445943</a>
                                            </td>
                                            <td>Abstract Vusial Pack</td>
                                            <td class="text-success">$52.00</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jan 04, 2019</td>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">324442313</a>
                                            </td>
                                            <td>Seller Fee</td>
                                            <td class="text-danger">$-0.80</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Sep 15, 2019</td>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                            </td>
                                            <td>Iphone 12 Pro Mockup Mega Bundle</td>
                                            <td class="text-success">$5.00</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Nov 01, 2019</td>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">102445788</a>
                                            </td>
                                            <td>Darknight transparency 36 Icons Pack</td>
                                            <td class="text-success">$38.00</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Oct 24, 2019</td>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">423445721</a>
                                            </td>
                                            <td>Seller Fee</td>
                                            <td class="text-danger">$-2.60</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Oct 08, 2019</td>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                            </td>
                                            <td>Cartoon Mobile Emoji Phone Pack</td>
                                            <td class="text-success">$76.00</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>May 30, 2019</td>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">523445943</a>
                                            </td>
                                            <td>Seller Fee</td>
                                            <td class="text-danger">$-1.30</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Apr 22, 2019</td>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">231445943</a>
                                            </td>
                                            <td>Parcel Shipping / Delivery Service App</td>
                                            <td class="text-success">$204.00</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Tab panel-->
                            <!--begin::Tab panel-->
                            <div id="kt_customer_view_statement_4" class="py-0 tab-pane fade" role="tabpanel">
                                <!--begin::Table-->
                                <table id="kt_customer_view_statement_table_4" class="table align-middle table-row-dashed fs-6 text-gray-600 fw-bold gy-4">
                                    <!--begin::Table head-->
                                    <thead class="border-bottom border-gray-200">
                                        <!--begin::Table row-->
                                        <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                            <th class="w-125px">Date</th>
                                            <th class="w-100px">Order ID</th>
                                            <th class="w-300px">Details</th>
                                            <th class="w-100px">Amount</th>
                                            <th class="w-100px text-end pe-7">Invoice</th>
                                        </tr>
                                        <!--end::Table row-->
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        <tr>
                                            <td>Nov 01, 2018</td>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">102445788</a>
                                            </td>
                                            <td>Darknight transparency 36 Icons Pack</td>
                                            <td class="text-success">$38.00</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Oct 24, 2018</td>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">423445721</a>
                                            </td>
                                            <td>Seller Fee</td>
                                            <td class="text-danger">$-2.60</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Nov 01, 2018</td>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">102445788</a>
                                            </td>
                                            <td>Darknight transparency 36 Icons Pack</td>
                                            <td class="text-success">$38.00</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Oct 24, 2018</td>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">423445721</a>
                                            </td>
                                            <td>Seller Fee</td>
                                            <td class="text-danger">$-2.60</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Feb 09, 2018</td>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">426445943</a>
                                            </td>
                                            <td>Visual Design Illustration</td>
                                            <td class="text-success">$31.00</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Nov 01, 2018</td>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">984445943</a>
                                            </td>
                                            <td>Abstract Vusial Pack</td>
                                            <td class="text-success">$52.00</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jan 04, 2018</td>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">324442313</a>
                                            </td>
                                            <td>Seller Fee</td>
                                            <td class="text-danger">$-0.80</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Oct 08, 2018</td>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                            </td>
                                            <td>Cartoon Mobile Emoji Phone Pack</td>
                                            <td class="text-success">$76.00</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Oct 08, 2018</td>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                            </td>
                                            <td>Cartoon Mobile Emoji Phone Pack</td>
                                            <td class="text-success">$76.00</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Feb 09, 2019</td>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">426445943</a>
                                            </td>
                                            <td>Visual Design Illustration</td>
                                            <td class="text-success">$31.00</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Nov 01, 2019</td>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">984445943</a>
                                            </td>
                                            <td>Abstract Vusial Pack</td>
                                            <td class="text-success">$52.00</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jan 04, 2019</td>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">324442313</a>
                                            </td>
                                            <td>Seller Fee</td>
                                            <td class="text-danger">$-0.80</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Sep 15, 2019</td>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                            </td>
                                            <td>Iphone 12 Pro Mockup Mega Bundle</td>
                                            <td class="text-success">$5.00</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Nov 01, 2019</td>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">102445788</a>
                                            </td>
                                            <td>Darknight transparency 36 Icons Pack</td>
                                            <td class="text-success">$38.00</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Oct 24, 2019</td>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">423445721</a>
                                            </td>
                                            <td>Seller Fee</td>
                                            <td class="text-danger">$-2.60</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Oct 08, 2019</td>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                            </td>
                                            <td>Cartoon Mobile Emoji Phone Pack</td>
                                            <td class="text-success">$76.00</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>May 30, 2019</td>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">523445943</a>
                                            </td>
                                            <td>Seller Fee</td>
                                            <td class="text-danger">$-1.30</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Apr 22, 2019</td>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">231445943</a>
                                            </td>
                                            <td>Parcel Shipping / Delivery Service App</td>
                                            <td class="text-success">$204.00</td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Tab panel-->
                        </div>
                        <!--end::Tab Content-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Statements-->
            </div> --}}
            <!--end:::Tab pane-->
        </div>
        <!--end:::Tab content-->
    </div>
    <!--end::Content-->
</div>


@endsection
@section('js')

@endsection
