@extends('patient.navbar')
@section('title', 'View Doctor')

@section('css')

@endsection

@section('content')
<div class="row row-cols-1 row-cols-md-5 g-8">
    @foreach ($doctors as $doctor)
    <div class="col">
      <div class="card h-100">
        @if ($doctor->profile_pic)
            <img src="{{ asset('storage/' . $doctor->profile_pic) }}" class="card-img-top" alt="image"/>
        @else
            <img src="{{asset('admin/assets/media/avatars/blank.png')}}" class="card-img-top" alt="image" />
        @endif
        <div class="card-body">
          <h5 class="card-title">{{ $doctor->name }}</h5>
          {{-- <p class="card-text">Specialist: {{ $doctor->specialist->name }}</p> --}}
          <a href="{{ route('patient.view.detail.doctor', Crypt::encrypt($doctor->  id)) }}" class="btn btn-primary ">View Detail</a>
        </div>
        </div>
    </div>
    @endforeach
</div>

@endsection

@section('js')

@endsection
