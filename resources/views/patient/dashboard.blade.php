@extends('patient.navbar')
@section('title', 'Dashboard')
@section('css')

@endsection

@section('content')
<div class="row gy-5 g-xl-8">
    <!--begin::Col-->
    <div class="col-xl-12">
        <!--begin::Mixed Widget 2-->
        <div class="card card-xl-stretch ">
            <!--begin::Header-->
            <div class="card-header border-0 bg-dark py-5" style="background: rgb(0,17,148);
            background: linear-gradient(90deg, rgba(0,17,148,1) 0%, rgba(28,178,194,1) 100%);">
                <h3 class="card-title fw-bolder text-white"></h3>
                <div class="card-toolbar">
                    <!--begin::Menu-->
                    {{-- <button type="button" class="btn btn-sm btn-icon btn-color-white btn-active-white btn-active-color- border-0 me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                        <span class="svg-icon svg-icon-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
                                    <rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
                                    <rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
                                    <rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
                                </g>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </button> --}}
                    <!--begin::Menu 3-->
                    {{-- <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
                        <!--begin::Heading-->
                        <div class="menu-item px-3">
                            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                        </div>
                        <!--end::Heading-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3">Create Invoice</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link flex-stack px-3">Create Payment
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3">Generate Bill</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                            <a href="#" class="menu-link px-3">
                                <span class="menu-title">Subscription</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <!--begin::Menu sub-->
                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Plans</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Billing</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Statements</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator my-2"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content px-3">
                                        <!--begin::Switch-->
                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                            <!--begin::Input-->
                                            <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                            <!--end::Input-->
                                            <!--end::Label-->
                                            <span class="form-check-label text-muted fs-6">Recuring</span>
                                            <!--end::Label-->
                                        </label>
                                        <!--end::Switch-->
                                    </div>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu sub-->
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3 my-1">
                            <a href="#" class="menu-link px-3">Settings</a>
                        </div>
                        <!--end::Menu item-->
                    </div> --}}
                    <!--end::Menu 3-->
                    <!--end::Menu-->
                </div>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body p-0">
                <!--begin::Chart-->
                <div class="card-rounded-bottom bg-dark" data-kt-color="danger" style="height: 300px; background: rgb(0,17,148); background: linear-gradient(90deg, rgba(0,17,148,1) 0%, rgba(28,178,194,1) 100%);">
                    <h1 class="text-left text-center text-white ms-10">
                        <div class="symbol symbol-100px symbol-circle mb-7">
                            @if (Auth::user()->profile_pic)
                                <img src="{{ asset('storage/' . Auth::user()->profile_pic) }}" alt="image" />
                            @else
                                <img src="{{asset('admin/assets/media/avatars/blank.png')}}" class="card-img-top" alt="image" />
                            @endif
                        </div>
                        <br>

                        Welcome to the Patient Page<br> {{ Auth::user()->name }}

                        @php
                            $hour = gmdate('H', time() + 60 * 60 * 7);
                            if ($hour >= 5 && $hour <= 11) {
                                echo "Good Morning";
                            } elseif ($hour >= 12 && $hour <= 14) {
                                echo "Good Afternoon";
                            } elseif ($hour >= 15 && $hour <= 17) {
                                echo "Good Afternoon";
                            } elseif ($hour >= 18 && $hour <= 19) {
                                echo "Good Evening";
                            } elseif ($hour >= 20 && $hour <= 23) {
                                echo "Good Night";
                            } else {
                                echo "Good Night";
                            }
                        @endphp
                        <br>
                        <a href="{{route('patient.profile')}}" class="btn btn-white btn-hover-scale me-5 ms-10 mt-5">Manage your profile here</a>
                    </h1>
                </div>
                <!--end::Chart-->
                <!--begin::Stats-->
                <div class="card-p mt-n20 position-relative">
                    <!--begin::Row-->
                    <div class="row g-0">
                        <!--begin::Col-->
                        <div class="col bg-light-primary px-6 py-8 rounded-2 mb-7 text-center">
                            {{-- count numbers of administrator --}}
                            @if (count($appointment_patient) > 0)
                                <p class="text-primary fw-bolder fs-1">{{count($appointment_patient)}}</p>
                            @else
                                <p class="text-primary fw-bolder fs-1">No Appointment Data</p>
                            @endif
                                <!--end::Svg Icon-->
                            <a href="{{route('patient.appointment')}}" class="text-primary fw-bold fs-6">Appointment</a>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->

                </div>
                <!--end::Stats-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Mixed Widget 2-->
    </div>
</div>

<div class="py-5">
    <div class="row">
        <div class="col-md-3">
            <a href="{{route('patient.view.doctor')}}" class="card hover-elevate-up shadow-sm parent-hover">
                <div class="card-body d-flex align-items">
                    <i class="fas fa-user-md fs-1"></i>
                    <span class="ms-3 text-gray-700 parent-hover-primary fs-6 fw-bold">
                        Doctor
                    </span>
                </div>
            </a>
        </div>

        <div class="col-md-3">
            <a href="{{route('patient.medicalrecordBook')}}" class="card hover-elevate-up shadow-sm parent-hover">
                <div class="card-body d-flex align-items">
                    <i class="fas fa-user-injured fs-1"></i>
                    <span class="ms-3 text-gray-700 parent-hover-primary fs-6 fw-bold">
                       Medical Record
                    </span>
                </div>
            </a>
        </div>

        <div class="col-md-3">
            <a href="#" class="card hover-elevate-up shadow-sm parent-hover">
                <div class="card-body d-flex align-items">
                    <i class="fas fa-prescription-bottle-alt fs-1"></i>
                    <span class="ms-3 text-gray-700 parent-hover-primary fs-6 fw-bold">
                        Prescription
                    </span>
                </div>
            </a>
        </div>

        <div class="col-md-3">
            <a href="#" class="card hover-elevate-up shadow-sm parent-hover">
                <div class="card-body d-flex align-items">
                    <i class="fas fa-money-bill-wave fs-1"></i>
                    <span class="ms-3 text-gray-700 parent-hover-primary fs-6 fw-bold">
                        Payment
                    </span>
                </div>
            </a>
        </div>
    </div>
</div>
<!--end::Block-->
{{-- <div class="card shadow-sm">
    <div class="card-header">
        <div class="col py-6 rounded-2 text-center">
            <p class="text-primary fw-bolder fs-1">Find Recommended Doctor</p>
        </div>
    </div>
    <div class="card-body card-scroll h-200px">
        Lorem Ipsum is simply dummy text...
    </div>
</div> --}}

<div class="card mt-8">
    <div class="card-header">
        <div class="col py-6 rounded-2 text-center">
            <p class="text-primary fw-bolder fs-1">Find Recommended Doctor</p>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            {{-- <div class="col-md-6">
                <h3 class="card-title">Doctor List</h3>
            </div> --}}
            <form action="/patient.dashboard/search" method="GET" class="col-md-6">
                <div class="input-group mb-3">
                    <input type="search" name="search" class="form-control" placeholder="Search Doctor" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-primary" type="submit" value="search">Search</button>
                </div>
            </form>
            <form action="/patient.dashboard/filter" method="GET" class="col-md-6">
                <div class="input-group mb-3">
                    <select name="filter" class="form-select" id="filter-select">
                        <option selected>Choose Specialist</option>
                        @foreach ($specialist as $specialist)
                            <option value="{{$specialist->id}}">{{$specialist->name}}</option>
                        @endforeach
                    </select>
                    <button class="btn btn-primary" type="submit" value="filter">Filter</button>
                </div>
            </form>
        </div>
        <div class="card border md-12 mt-4">
            <div class="row g-0">
            @foreach ($schedule as $schedule)
              <div class="col-md-2">
                {{-- <img src="$schedule->user->profile_pic" class="img-fluid rounded-start" alt="..."> --}}
                @if ($schedule->user->profile_pic)
                    <img src="{{ asset('storage/' . $schedule->user->profile_pic) }}" class="img-fluid rounded-start" alt="image"/>
                @else
                    <img src="{{asset('admin/assets/media/avatars/blank.png')}}" class="img-fluid rounded-start" alt="image" />
                @endif
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">{{$schedule->user->name}}</h5>
                  {{-- need to fix the below name --}}
                  {{-- <p class="card-text">{{$schedule->user->specialist->name}}</p> --}}
                  <p class="card-text">{{$schedule->day}} {{$schedule->start_time}} {{$schedule->end_time}}</p>
                  <p class="card-text"><small class="text-body-secondary">{{$schedule->created_at}}</small></p>
                </div>
              </div>
              <input type="hidden" name="doctor_id" value="{{$schedule->user->id}}">
              <div class="col-md-2">
                <a href="{{route('patient.view.detail.doctor', Crypt::encrypt($schedule->user->  id))}}" class="btn btn-primary">Make an Appointment</a>
                {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal_add_schedule">Make an Appointment</button> --}}
              </div>
            @endforeach
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
{{-- <script>
  $(document).ready(function() {
      $('#button-addon2').on('click', function() {
          var filter = $(this).val();

          $.ajax({
              url: '{{ route('filter') }}',
              type: 'GET',
              data: {
                  filter: filter
              },
              success: function(data) {
                  var html = '';
                  $.each(data, function(key, value) {
                      html += '<tr>';
                      html += '<td>' + value.name + '</td>';
                      html += '<td>' + value.description + '</td>';
                      html += '</tr>';
                  });
                  $('#data-table tbody').html(html);
              }
          });
      });
  });
</script> --}}
{{-- <script type="text/javascript">
    $(document).ready(function() {
        $('#search').on('click', function() {
            alert('hello');
        });
    });
</script> --}}
@endsection
