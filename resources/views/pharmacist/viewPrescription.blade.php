@extends ('pharmacist.navbar')
@section('title', 'View Prescription')
@section('css')
@endsection
@section('content')
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
                    <th class="ps-4 min-w-50px text-center">Number of Medicine</th>
                    <th class="ps-4 min-w-50px text-center">Dosage</th>
                </tr>
            </thead>
            <!--end::Table head-->
            <!--begin::Table body-->
            <tbody>
                @if ($prescription->count() == 0)
                    <th class="ps-4 min-w-20px text-center" colspan="6">No Prescription Data</th>
                @else
                    @foreach ($prescription as $prescription)
                    <tr>
                        <td class="ps-4 min-w-20px text-center">{{$loop->iteration}}</td>
                        <td class="ps-4 min-w-200px text-center">{{$prescription->medicine->name}}</td>
                        <td class="ps-4 min-w-100px text-center">{{$prescription->number_medicine}}</td>
                        <td class="ps-4 min-w-50px text-center">{{$prescription->dosage}}</td>
                        <td class="ps-4 min-w-20px text-center">
                            <a href="{{url('/pharmacisst.view.prescription.detail/'.$prescription->id)}}" class="btn btn-primary">View Detail</a>
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
@endsection
@section('js')
<script>

</script>
@endsection
