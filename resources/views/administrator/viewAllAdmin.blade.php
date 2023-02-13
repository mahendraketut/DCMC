@extends('administrator.navbar')
@section('title', 'View All Administrator')
@section('css')
<link href="{{asset('admin/assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.13.2/b-2.3.4/b-html5-2.3.4/b-print-2.3.4/datatables.min.css"/>
@endsection
@section('content')
<div class="col-xl-12">
    <!--begin::Tables Widget 9-->
    <div class="card card-xl-stretch mb-5 mb-xl-8">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bolder fs-3 mb-1">Administrator List</span>
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
@section('js')

<script src="{{asset('admin/assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.13.2/b-2.3.4/b-html5-2.3.4/b-print-2.3.4/datatables.min.js"></script>

@endsection
@push('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#kt_datatable_example_5').DataTable({
                processing: true,
                serverSide: true,
                ajax: 'route('admin.ViewAlladministrator'),
                columns: [
                    { data: 'no', name: 'id', render: function (data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    } },
                    { data: 'name', name: 'name' },
                    { data: 'address', name: 'address' },
                    { data: 'phone', name: 'phone' },
                    { data: 'email', name: 'email' },
                ]
            });
        });
@endpush
