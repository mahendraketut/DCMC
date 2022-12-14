@extends('administrator.navbar')
@section('title', 'Proposed Admin Account')
@section('css')
<!--begin::Page Vendors Styles(used by this page)-->
<link href="{{ asset('admin/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
<!--end::Page Vendors Styles-->
@endsection

@section('content')
{{-- @include('administrator.schedule-add') --}}
<!--begin::Col-->
<div class="col-xl-12">
    <!--begin::Tables Widget 9-->
    <div class="card card-xl-stretch mb-5 mb-xl-8">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bolder fs-3 mb-1">Proposed Administrator Account</span>
            </h3>
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
                            <th class="ps-4 min-w-20px text-center">Proposed ID</th>
                            <th class="ps-4 min-w-50px text-center">Proposed Day</th>
                            <th class="ps-4 min-w-2000px text-center">Admin Name</th>
                            <th class="ps-4 min-w-50px text-center">Admin Email</th>
                            <th class="ps-4 min-w-50px text-center">Action</th>
                        </tr>
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody>
                        @if ($tempAdmins->count() == 0)
                            <th class="ps-4 min-w-20px text-center" colspan="6">No Schedule Data</th>
                        @else
                            @foreach ($tempAdmins as $admin)
                            <tr>
                                <td class="ps-4 min-w-20px text-center">{{$loop->iteration}}</td>
                                <td class="ps-4 min-w-200px text-center">#{{$admin->request_id}}</td>
                                <td class="ps-4 min-w-100px text-center">{{$admin->created_at}}</td>
                                <td class="ps-4 min-w-50px text-center">{{$admin->name}}</td>
                                <td class="ps-4 min-w-50px text-center">{{$admin->email}}</td>
                                <td class="ps-4 min-w-20px text-center">
                                    <a href="{{url('/admin.dashboard/proposed-admin.approve/'.$admin->id)}}" class="btn btn-primary">Approve</a>
                                    <a href="{{url('/admin.dashboard/proposed-admin.reject/'.$admin->id)}}" class="btn btn-danger">Reject</a>
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






@endsection

@section('js')
<script src="{{asset('admin/assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
@endsection


