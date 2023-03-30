@extends('doctor.navbar')
@section('title', 'Medical Record Book')
@section('css')
{{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/> --}}
<link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">

@endsection
@section('content')
<div class="col-xl-12">
    <!--begin::Mixed Widget 2-->
    <div class="card card-xl-stretch mb-5 mb-xl-8">
        <div class="card-header pt-8 py-3">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bolder fs-3 mb-1">List of All Patient Medical Records</span>
            </h3>
            <!--begin::Search-->
            <div class="d-flex align-items-center position-relative my-1">
                <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                <span class="svg-icon svg-icon-1 position-absolute ms-6">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                        <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
                    </svg>
                </span>
                <!--end::Svg Icon-->
                <input type="text" data-kt-filemanager-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="Search Patient Name" />
            </div>
            <!--end::Search-->
        </div>

        <div class="card-body pt-8">
            {{-- <select class="form-select" name="medical_category" id="medical_category" required>
                <option value="">Select Medical Category</option>
                @foreach ($patients as $patient)
                    <option value="{{ $patient->id }}">{{ $patient->name }}</option>
                @endforeach
            </select> --}}
            <div class="row row-cols-1 row-cols-md-5 g-8">
                @foreach ($patients as $patient)
                <div class="col">
                    <div class="card h-100 border">
                        @if ($patient->profile_pic)
                            <img src="{{ asset('storage/' . $patient->profile_pic) }}" class="card-img-top" alt="image"/>
                        @else
                            <img src="{{asset('admin/assets/media/avatars/blank.png')}}" class="card-img-top" alt="image" />
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $patient->name }}</h5>
                            <p class="card-text">{{ $patient->user_id}}</p>
                            <p class="card-text"><span><i class="fas fa-map-marker-alt"></i></span> {{ $patient->city}}</p>
                            <a href="{{ route('doctor.medicalrecordBook.detailview', Crypt::encrypt($patient->id)) }}" class="btn btn-primary">
                            <span>
                               <i class="fas fa-file-medical-alt"></i>
                            </span>
                            Medical Rec.
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(function () {
        var table = $('.yajra-datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('doctor.medicalrecordBook.list') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'user_id', name: 'user_id'},
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'phone', name: 'phone'},
                {data: 'address', name: 'address'},
                {data: 'action', name: 'action', orderable: true, searchable: true},
            ]
        });
        });

</script>
@endpush
