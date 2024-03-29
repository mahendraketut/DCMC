@extends('patient.navbar')
@section('title', 'Medical Record History')
@section('css')
@endsection

@section('content')
<div class="card shadow-sm">
    <div class="card-header">
        <h3 class="card-title">Medical Record</h3>
        <div class="card-toolbar">
            {{-- <button type="button" class="btn btn-sm btn-light">
                Action
            </button> --}}

        </div>
    </div>
    <div class="card-body">
        @if($medicalrecords->count() == 0)
            <!--begin::Alert-->
            <div class="alert alert-dismissible bg-light-primary d-flex flex-column flex-sm-row w-100 p-5 mb-10">
                <!--begin::Icon-->
                <!--begin::Svg Icon | path: icons/duotune/general/gen007.svg-->
                <span class="svg-icon svg-icon-2hx svg-icon-primary me-4 mb-5 mb-sm-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path opacity="0.3" d="M12 22C13.6569 22 15 20.6569 15 19C15 17.3431 13.6569 16 12 16C10.3431 16 9 17.3431 9 19C9 20.6569 10.3431 22 12 22Z" fill="currentColor" />
                        <path d="M19 15V18C19 18.6 18.6 19 18 19H6C5.4 19 5 18.6 5 18V15C6.1 15 7 14.1 7 13V10C7 7.6 8.7 5.6 11 5.1V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V5.1C15.3 5.6 17 7.6 17 10V13C17 14.1 17.9 15 19 15ZM11 10C11 9.4 11.4 9 12 9C12.6 9 13 8.6 13 8C13 7.4 12.6 7 12 7C10.3 7 9 8.3 9 10C9 10.6 9.4 11 10 11C10.6 11 11 10.6 11 10Z" fill="currentColor" />
                    </svg>
                </span>
                <!--end::Svg Icon-->
                <!--end::Icon-->
                <!--begin::Content-->
                <div class="d-flex flex-column pe-0 pe-sm-10">
                    <h4 class="fw-bold">No Medical Record!</h4>
                    @if (Auth::user()->gender == 'Male')
                        <span>Hi Mr {{Auth::user()->name}}, we found that you have no medical record yet, If you have consult to our doctor, then your medical record will be updated<br>Thank You</span>
                    @elseif (Auth::user()->gender == 'Female')
                        <span>Hi Ms {{Auth::user()->name}}, we found that you have no medical record yet, If you have consult to our doctor, then your medical record will be updated<br>Thank You</span>
                    @else
                        <span>Hi {{Auth::user()->name}}, we found that you have no medical record yet, If you have consult to our doctor, then your medical record will be updated<br>Thank You</span>
                    @endif
                </div>
                <!--end::Content-->
                <!--begin::Close-->
                <button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1 svg-icon-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </button>
                <!--end::Close-->
            </div>
            <!--end::Alert-->
        @else
        @foreach ($medicalrecords as $medicalrecord)
        <div class="card shadow-sm">
            <div class="card-header collapsible cursor-pointer rotate" data-bs-toggle="collapse" data-bs-target="#kt_docs_card_collapsible">
                <h3 class="card-title">Medical Record # {{$medicalrecord->record_id}}</h3>                <div class="card-toolbar rotate-180">
                    <span class="svg-icon svg-icon-1">

                    </span>
                </div>
            </div>
            <div id="kt_docs_card_collapsible" class="collapse show">
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <tbody>
                            <tr>
                                <td>Complaints</td>
                                <td>{{$medicalrecord->complaints}}</td>
                            </tr>
                            <tr>
                                <td>Diagnosis</td>
                                <td>{{$medicalrecord->diagnosis}}</td>
                            </tr>
                            <tr>
                                <td>Medical Category</td>
                                <td>{{$medicalrecord->MedicalCategory->name}}</td>
                            </tr>
                            <tr>
                                <td>Doctor</td>
                                <td>{{$medicalrecord->Doctor->name}}</td>
                            </tr>
                            <tr>
                                <td>Patient In</td>
                                <td>{{$medicalrecord->created_at}}</td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>{{$medicalrecord->status}}</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @endforeach
        @endif

    </div>
    {{-- <div class="card-footer">
        Footer
    </div> --}}
</div>

@endsection
