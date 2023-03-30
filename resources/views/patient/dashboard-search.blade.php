@extends('patient.navbar')
@section('title', 'Search Products')
@section('css')

@endsection

@section('content')

<div class="card mt-8">
    <div class="card-body">
        <div class="row">
            {{-- <div class="col-md-6">
                <h3 class="card-title">Doctor List</h3>
            </div> --}}
            <form action="{{url('search')}}" method="GET" role="search">
                <div class="col-md-6">
                    <div class="input-group mb-3">
                        <input type="search" name="search" class="form-control" placeholder="Search Doctor" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-primary" type="button" id="button-addon2">Search</button>
                    </div>
                </div>
            </form>
            <div class="col-md-6">
                <div class="input-group mb-3">
                    <select class="form-select" id="inputGroupSelect02">
                        <option selected>Choose Specialist</option>
                        <option value="1">Cardiologist</option>
                        <option value="2">Dentist</option>
                        <option value="3">Dermatologist</option>
                        <option value="4">Endocrinologist</option>
                        <option value="5">Gastroenterologist</option>
                        <option value="6">Gynecologist</option>
                        <option value="7">Neurologist</option>
                        <option value="8">Oncologist</option>
                        <option value="9">Ophthalmologist</option>
                        <option value="10">Orthopedic Surgeon</option>
                        <option value="11">Pediatrician</option>
                        <option value="12">Psychiatrist</option>
                        <option value="13">Pulmonologist</option>
                        <option value="14">Rheumatologist</option>
                        <option value="15">Urologist</option>
                    </select>
                    <button class="btn btn-primary" type="button" id="button-addon2">Filter</button>
                </div>
            </div>
        </div>
        <div class="card border md-12 mt-4">
            <div class="row g-0">
            @foreach ($results as $schedule)
              <div class="col-md-4">
                <img src="$schedule->user->profile_pic" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-6">
                <div class="card-body">
                  <h5 class="card-title">{{$schedule->name}}</h5>
                  <p class="card-text">{{$schedule->specialist}}</p>
                  <p class="card-text">{{$schedule->day}} {{$schedule->start_time}} {{$schedule->end_time}}</p>
                  <p class="card-text"><small class="text-body-secondary">{{$schedule->created_at}}</small></p>
                </div>
              </div>
              <input type="hidden" name="doctor_id" value="{{$schedule->id}}">
              <div class="col-md-2">
                <a href="{{route('patient.view.detail.doctor', Crypt::encrypt($schedule->  id))}}" class="btn btn-primary">Make an Appointment</a>
                {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal_add_schedule">Make an Appointment</button> --}}
              </div>
            @endforeach
    </div>
</div>

@endsection

@section('js')
<script type="text/javascript">
    $('#search').on('keyup',function(){
        $value=$(this).val();
        $.ajax({
            type : 'get',
            url : '{{URL::to('search')}}',
            data:{'search':$value},
            success:function(data){
            $('tbody').html(data);
        }
    });

    })
</script>
<script type="text/javascript">
    $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
</script>
@endsection
