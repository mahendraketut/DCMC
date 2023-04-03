@extends ('pharmacist.navbar')
@section('title', 'View Prescription')
@section('css')
@endsection
@section('content')
<div class="flex-column flex-lg-row-auto w-100 w-xl-350px mb-10">
    <!--begin::Card-->
    <div class="card mb-5 mb-xl-8">
        <!--begin::Card body-->
        <div class="card-body pt-15">
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
                    <div class="fw-bolder mt-5">Medicine Name</div>
                    <div class="text-gray-600">{{$prescription->medicine->name}}</div>
                    <!--begin::Details item-->
                    <!--begin::Details item-->
                    <div class="fw-bolder mt-5">Medicine ID</div>
                        <div class="text-gray-600">{{$prescription->medicine->medicine_id}}</div>
                    <!--begin::Details item-->
                    <!--begin::Details item-->
                    <div class="fw-bolder mt-5">Number of Medicine</div>
                    <div class="text-gray-600">{{$prescription->number_medicine}}</div>
                    <!--begin::Details item-->
                    <!--begin::Details item-->
                    <div class="fw-bolder mt-5">Dosage</div>
                    <div class="text-gray-600">{{$prescription->dosage}}</div>
                    <!--begin::Details item-->
                    <!--begin::Details item-->
                    <div class="fw-bolder mt-5">Patient Name</div>
                    <div class="text-gray-600">{{$prescription->patient->name}}</div>
                    <!--begin::Details item-->
                    <!--begin::Details item-->
                    <div class="fw-bolder mt-5">Created at</div>
                    <div class="text-gray-600">{{$prescription->created_at->diffForHumans()}}</div>
                    <!--begin::Details item-->
                    <div class="fw-bolder mt-5">Status</div>
                    <div class="text-gray-600">{{$prescription->status}}</div>
                </div>
            </div>
            <!--end::Details content-->
        </div>
        <!--end::Card body-->
    </div>
</div>
@endsection
@section('js')
<script>

</script>
@endsection
