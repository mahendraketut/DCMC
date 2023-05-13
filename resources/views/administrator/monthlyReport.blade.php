@php
    use Carbon\Carbon;
@endphp
@extends('administrator.navbar')
@section('title', 'Website Monthly Report')
@section('css')
@endsection
@section('content')
        
<!--begin::Row-->
<div class="row g-5 g-xl-8">
    <div class="col-xl-3">
        
<!--begin::Statistics Widget 5-->
<a href="#" class="card bg-primary hoverable card-xl-stretch mb-xl-8">
    <!--begin::Body-->
    <div class="card-body">
        <i class="ki-duotone ki-cheque text-white fs-2x ms-n1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span></i>        

        <div class="text-white fw-bold fs-2 mb-2 mt-5">           
            {{count($user)}}
            Number of Users                   
        </div>

        <div class="fw-semibold text-white">
           User joined DCMC        </div>
    </div>
    <!--end::Body-->
</a>
<!--end::Statistics Widget 5-->    </div>

<div class="col-xl-3">
        
    <!--begin::Statistics Widget 5-->
    <a href="#" class="card bg-primary hoverable card-xl-stretch mb-xl-8">
        <!--begin::Body-->
        <div class="card-body">
            <i class="ki-duotone ki-cheque text-white fs-2x ms-n1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span></i>        
    
            <div class="text-white fw-bold fs-2 mb-2 mt-5">           
                {{count($appointment)}}
                Number of Appointment                   
            </div>
    
            <div class="fw-semibold text-white">
               Total Appointment        </div>
        </div>
        <!--end::Body-->
    </a>
    <!--end::Statistics Widget 5-->    </div>

    <div class="col-xl-6">
        
        <!--begin::Statistics Widget 4-->
        <div class="card card-xl-stretch mb-5 mb-xl-8">
            <!--begin::Body-->
            <div class="card-body p-0">
                <div class="d-flex flex-stack card-p flex-grow-1">
                    <span class="symbol  symbol-50px me-2">
                        <span class="symbol-label bg-light-primary">
                            <i class="ki-duotone ki-briefcase fs-2x text-primary"><span class="path1"></span><span class="path2"></span></i>                </span>
                    </span>
        
                    <div class="d-flex flex-column text-end">
                        <span class="text-dark fw-bold fs-2">+{{count($new_user)}}</span>
        
                        <span class="text-muted fw-semibold mt-1">New Users In The Last 30 Days</span>
                    </div>
                </div>
        
                <div class="statistics-widget-4-chart card-rounded-bottom" data-kt-chart-color="primary" style="height: 100px"></div>
            </div>
            <!--end::Body-->
        </div>
        <!--end::Statistics Widget 4-->
            </div>

</div>
<!--end::Row-->

<div class="row g-5 g-xl-10 mb-xl-10">
<!--begin::Col-->
<div class="col-lg-12 col-xl-12 col-xxl-12 mb-5 mb-xl-0">
    <!--begin::Chart widget 3-->
<div class="card card-flush overflow-hidden h-md-100">
<!--begin::Header-->
<div class="card-header py-5">
    <!--begin::Title-->
    <h3 class="card-title align-items-start flex-column">            
        <span class="card-label fw-bold text-dark">Income This Months</span>
        <span class="text-gray-400 mt-1 fw-semibold fs-6">Users from all channels</span>
    </h3>
    <!--end::Title-->

    <!--begin::Toolbar-->
    <div class="card-toolbar">    
        <!--begin::Menu-->
        <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" 
            data-kt-menu-trigger="click" 
            data-kt-menu-placement="bottom-end" 
            data-kt-menu-overflow="true">   
                            
            <i class="ki-duotone ki-dots-square fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>                             
        </button>
        
        
<!--begin::Menu 2-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
<!--begin::Menu item-->
<div class="menu-item px-3">
    <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
</div>
<!--end::Menu item-->

<!--begin::Menu separator-->
<div class="separator mb-3 opacity-75"></div>
<!--end::Menu separator-->

<!--begin::Menu item-->
<div class="menu-item px-3">
    <a href="#" class="menu-link px-3">
        New Ticket
    </a>
</div>
<!--end::Menu item-->

<!--begin::Menu item-->
<div class="menu-item px-3">
    <a href="#" class="menu-link px-3">
        New Customer
    </a>
</div>
<!--end::Menu item-->

<!--begin::Menu item-->
<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
    <!--begin::Menu item-->
    <a href="#" class="menu-link px-3">
        <span class="menu-title">New Group</span>
        <span class="menu-arrow"></span>
    </a>
    <!--end::Menu item-->

    <!--begin::Menu sub-->
    <div class="menu-sub menu-sub-dropdown w-175px py-4">
        <!--begin::Menu item-->
        <div class="menu-item px-3">
            <a href="#" class="menu-link px-3">
                Admin Group
            </a>
        </div>
        <!--end::Menu item-->

        <!--begin::Menu item-->
        <div class="menu-item px-3">
            <a href="#" class="menu-link px-3">
                Staff Group
            </a>
        </div>
        <!--end::Menu item-->

        <!--begin::Menu item-->            
        <div class="menu-item px-3">
            <a href="#" class="menu-link px-3">
                Member Group
            </a>
        </div>
        <!--end::Menu item-->
    </div>
    <!--end::Menu sub-->
</div>
<!--end::Menu item-->

<!--begin::Menu item-->
<div class="menu-item px-3">
    <a href="#" class="menu-link px-3">
        New Contact
    </a>
</div>
<!--end::Menu item-->

<!--begin::Menu separator-->
<div class="separator mt-3 opacity-75"></div>
<!--end::Menu separator-->

<!--begin::Menu item-->
<div class="menu-item px-3">
    <div class="menu-content px-3 py-3">
        <a class="btn btn-primary  btn-sm px-4" href="#">
            Generate Reports
        </a>
    </div>
</div>
<!--end::Menu item-->
</div>
<!--end::Menu 2-->

        <!--end::Menu-->                        
    </div>
    <!--end::Toolbar-->
</div>
<!--end::Header-->

<!--begin::Card body-->
<div class="card-body d-flex justify-content-between flex-column pb-1 px-0">  
    <!--begin::Statistics-->
    <div class="px-9 mb-5">   
        <!--begin::Statistics-->
        <div class="d-flex mb-2">   
            <span class="fs-4 fw-semibold text-gray-400 me-1">RP</span>
            <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">5.250.000</span>                
        </div>
        <!--end::Statistics-->

        <!--begin::Description-->
        <span class="fs-6 fw-semibold text-gray-400">Goal of RP.15.000.000</span>
        <!--end::Description-->
    </div>
    <!--end::Statistics-->

    <!--begin::Chart-->
    <div id="kt_charts_widget_3" class="min-h-auto ps-4 pe-6" style="height: 300px"></div>
    <!--end::Chart--> 
</div>
<!--end::Card body-->
</div>
<!--end::Chart widget 3-->    </div>
<!--end::Col--> 
</div>
<!--end::Row-->

<div>
    <!--begin::Actions-->
    <div class="d-flex align-items-center gap-2 gap-lg-3">
        
                <!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
            <div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left" class="btn btn-sm fw-bold bg-body btn-color-gray-700 btn-active-color-primary d-flex align-items-center px-4">           
                <!--begin::Display range-->
                <div class="text-gray-600 fw-bold">
                    Loading date range...
                </div>
                <!--end::Display range-->
    
                <i class="ki-duotone ki-calendar-8 fs-1 ms-2 me-0"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span></i>          
            </div>  
            <!--end::Daterangepicker--> 
        
        <!--begin::Secondary button-->
            <!--end::Secondary button-->
        
        <!--begin::Primary button-->
                <a href="{{route('admin.monthly.report.print.pdf')}}" class="btn btn-sm fw-bold btn-primary">
                Generate PDF Report       </a>
            <!--end::Primary button-->
    </div>
    <!--end::Actions-->
            </div>
            <!--end::Toolbar container-->

<!--begin::Tables Widget 12-->
<div class="card mb-5 mb-xl-8">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
			<span class="card-label fw-bold fs-3 mb-1">Member Statistics</span>

			<span class="text-muted mt-1 fw-semibold fs-7">Employee members</span>
		</h3>
        <div class="card-toolbar">
            <!--begin::Menu-->
            <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                <i class="ki-duotone ki-category fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>            </button>
            
<!--begin::Menu 2-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu separator-->
    <div class="separator mb-3 opacity-75"></div>
    <!--end::Menu separator-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            New Ticket
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            New Customer
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
        <!--begin::Menu item-->
        <a href="#" class="menu-link px-3">
            <span class="menu-title">New Group</span>
            <span class="menu-arrow"></span>
        </a>
        <!--end::Menu item-->

        <!--begin::Menu sub-->
        <div class="menu-sub menu-sub-dropdown w-175px py-4">
            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="#" class="menu-link px-3">
                    Admin Group
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="#" class="menu-link px-3">
                    Staff Group
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->            
            <div class="menu-item px-3">
                <a href="#" class="menu-link px-3">
                    Member Group
                </a>
            </div>
            <!--end::Menu item-->
        </div>
        <!--end::Menu sub-->
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            New Contact
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu separator-->
    <div class="separator mt-3 opacity-75"></div>
    <!--end::Menu separator-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <div class="menu-content px-3 py-3">
            <a class="btn btn-primary  btn-sm px-4" href="#">
                Generate Reports
            </a>
        </div>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu 2-->
            <!--end::Menu-->
        </div>
    </div>
    <!--end::Header-->

	<!--begin::Body-->
	<div class="card-body py-3">
        <!--begin::Table container-->
        <div class="table-responsive">
            <!--begin::Table-->
            <table class="table align-middle gs-0 gy-4">
                <!--begin::Table head-->
                <thead>
                    <tr class="fw-bold text-muted bg-light">
                        <th class="ps-4 min-w-300px rounded-start">Doctor</th>
                        <th class="min-w-125px">Earnings</th>
                        <th class="min-w-125px">Appointment</th>
                        <th class="min-w-200px">Specialist</th>
                        <th class="min-w-150px">Rating</th>
                        <th class="min-w-200px text-end rounded-end"></th>
                    </tr>
                </thead>
                <!--end::Table head-->

                <!--begin::Table body-->
                <tbody>
                    @foreach ($employee as $employee)
                                            <tr>                            
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-50px me-5">
                                        <span class="symbol-label bg-light">
                                            <img src="/metronic8/demo1/assets/media/svg/avatars/001-boy.svg" class="h-75 align-self-end" alt=""/>
                                        </span>
                                    </div>
                                    
                                    <div class="d-flex justify-content-start flex-column">
                                        <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">{{$employee->name}}</a>
                                        @if ($employee->role == 'administrator')
                                        <span class="text-muted fw-semibold text-muted d-block fs-7">Administrator</span>
                                        @elseif ($employee->role == 'doctor')
                                        <span class="text-muted fw-semibold text-muted d-block fs-7">Doctor</span>
                                        @elseif ($employee->role == 'pharmacist')
                                        <span class="text-muted fw-semibold text-muted d-block fs-7">Pharmacist</span>
                                        @endif
                                    </div>
                                </div>                                
                            </td>

                            <td>
                                <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">RP.4.000.000</a>
                                <span class="text-muted fw-semibold text-muted d-block fs-7">A Month</span>
                            </td>
                            
                            <td>
                                @php
                                    if ($employee->role == 'doctor'):
                                        $appointmentDB = DB::table('appointments')->where('doctor_id', $employee->id)->count();
                                    else:
                                        $appointmentDB = 0;
                                    endif
                                @endphp
                                <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{ $appointmentDB }}</a>
                                <span class="text-muted fw-semibold text-muted d-block fs-7">In-Progress</span>
                            </td>
                            

                            <td>
                                @if ($employee->role == 'administrator')
                                <span class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">System Management</span>
                                @elseif ($employee->role == 'doctor')
                                <span class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$employee->specialist->name}}</span>
                                @elseif ($employee->role == 'pharmacist')
                                <span class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">Pharmacist</span>
                                 @endif
                                <span class="text-muted fw-semibold text-muted d-block fs-7"></span>
                            </td>
                            
                            <td>
                                <div class="rating">
                                                                            <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>                                        </div>
                                                                            <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>                                        </div>
                                                                            <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>                                        </div>
                                                                            <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>                                        </div>
                                                                            <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>                                        </div>
                                                                    </div>
                                
                                <span class="text-muted fw-semibold text-muted d-block fs-7 mt-1">Best Rated</span>
                            </td>                            

                            <td class="text-end">
                                <a href="#" class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4 me-2">
                                    View
                                </a>

                                <a href="#" class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4">
                                    Edit
                                </a>
                            </td>
                        </tr>
                        @endforeach
                                    </tbody>
                <!--end::Table body-->
            </table>
            <!--end::Table-->
        </div>
        <!--end::Table container-->
	</div>
    <!--end::Body-->
</div>
	<!--begin::Tables Widget 12-->
<div class="card mb-5 mb-xl-8">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
			<span class="card-label fw-bold fs-3 mb-1">Appointment Statistics</span>

			<span class="text-muted mt-1 fw-semibold fs-7">Appointment Record</span>
		</h3>
        <div class="card-toolbar">
            <!--begin::Menu-->
            <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                <i class="ki-duotone ki-category fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>            </button>
            
<!--begin::Menu 2-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu separator-->
    <div class="separator mb-3 opacity-75"></div>
    <!--end::Menu separator-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            New Ticket
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            New Customer
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
        <!--begin::Menu item-->
        <a href="#" class="menu-link px-3">
            <span class="menu-title">New Group</span>
            <span class="menu-arrow"></span>
        </a>
        <!--end::Menu item-->

        <!--begin::Menu sub-->
        <div class="menu-sub menu-sub-dropdown w-175px py-4">
            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="#" class="menu-link px-3">
                    Admin Group
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="#" class="menu-link px-3">
                    Staff Group
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->            
            <div class="menu-item px-3">
                <a href="#" class="menu-link px-3">
                    Member Group
                </a>
            </div>
            <!--end::Menu item-->
        </div>
        <!--end::Menu sub-->
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            New Contact
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu separator-->
    <div class="separator mt-3 opacity-75"></div>
    <!--end::Menu separator-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <div class="menu-content px-3 py-3">
            <a class="btn btn-primary  btn-sm px-4" href="#">
                Generate Reports
            </a>
        </div>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu 2-->
            <!--end::Menu-->
        </div>
    </div>
    <!--end::Header-->

	<!--begin::Body-->
	<div class="card-body py-3">
        <!--begin::Table container-->
        <div class="table-responsive">
            <!--begin::Table-->
            <table class="table align-middle gs-0 gy-4">
                <!--begin::Table head-->
                <thead>
                    <tr class="fw-bold text-muted bg-light">
                        <th class="ps-4 min-w-250px rounded-start">Patient Name</th>
                        <th class="min-w-250px">Doctor Name</th>
                        <th class="min-w-250px">Diagnosis Note</th>
                        <th class="min-w-150px">Status</th>
                        <th class="min-w-50px">Date</th>
                        <th class="min-w-150px text-end rounded-end"></th>
                    </tr>
                </thead>
                <!--end::Table head-->

                <!--begin::Table body-->
                <tbody>
                    @foreach ($appointmentData as $appointmentData)
                                            <tr>                            
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-50px me-5">
                                        <span class="symbol-label bg-light">
                                            <img src="/metronic8/demo1/assets/media/svg/avatars/001-boy.svg" class="h-75 align-self-end" alt=""/>
                                        </span>
                                    </div>
                                    
                                    <div class="d-flex justify-content-start flex-column">
                                        <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">{{$appointmentData->Patient->name}}</a>
                                        <span class="text-muted fw-semibold text-muted d-block fs-7">Patient</span>
                                    </div>
                                </div>                                
                            </td>

                            <td>
                                <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$appointmentData->Doctor->name}}</a>
                                <span class="text-muted fw-semibold text-muted d-block fs-7">{{$appointmentData->Doctor->specialist->name}}</span>
                            </td>
                            
                            <td>
                                <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$appointmentData->diagnosis}}</a>
                            </td>

                            <td>
                                <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$appointmentData->status}}</a>
                            </td>
                            <td>
                                <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{Carbon::parse($appointmentData->created_at)->format('m/d/Y')}}</a>
                            </td>
                            
                            <td class="text-end">
                                <a href="#" class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4 me-2">
                                    View
                                </a>
                            </td>                           
                        </tr>
                        @endforeach
                                    </tbody>
                <!--end::Table body-->
            </table>
            <!--end::Table-->
        </div>
        <!--end::Table container-->
	</div>
    <!--end::Body-->
</div>
<!--end::Tables Widget 12-->

@endsection
@section('js')
@endsection