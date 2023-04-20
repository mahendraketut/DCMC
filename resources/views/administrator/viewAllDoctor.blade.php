@extends('administrator.navbar')
@section('title', 'View All Doctor')
@section('css')
@endsection
@section('content')
<div class="col-xl-12">
    <!--begin::Tables Widget 9-->
    <div class="card card-xl-stretch mb-5 mb-xl-8">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bolder fs-3 mb-1">Doctor List</span>
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
                            <th class="ps-4 min-w-100px text-center">Name</th>
                            <th class="ps-4 min-w-100px text-center">Specialist</th>
                            <th class="ps-4 min-w-50px text-center">Address</th>
                            <th class="ps-4 min-w-50px text-center">Phone</th>
                            <th class="ps-4 min-w-50px text-center">Email</th>
                        </tr>
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody>
                        @if ($users->count() == 0)
                            <th class="ps-4 min-w-20px text-center" colspan="6">No Schedule Data</th>
                        @else
                            @foreach ($users as $user)
                            <tr>
                                <td class="ps-4 text-center">{{$loop->iteration}}</td>
                                <td class="ps-4 text-center">{{$user->name}}</td>
                                <td class="ps-4 text-center">{{$user->specialist->name}}</td>
                                <td class="ps-4 text-center">{{$user->address}}</td>
                                <td class="ps-4 text-center">{{$user->phone}}</td>
                                <td class="ps-4 text-center">{{$user->email}}</td>
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
@endsection
