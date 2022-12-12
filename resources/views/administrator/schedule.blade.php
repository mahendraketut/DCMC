@extends('administrator.navbar')
@section('title', 'Dashboard')
@section('css')

@endsection

@section('content')
    <div class="container" style="margin-top:20px">
        <div class="row">
            <div class="col-md-12">
                <h2>Schedule List</h2>
                <div style="margin-right:10%;float:right;">
                    <a href="{{route('admin.schedule.add')}}" class="btn btn-primary">Add Schedule</a>
                </div>
                @if (Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('success')}}
                    </div>
                @endif
                <div class="table-responsive">
                    <table class="table table-rounded table-striped border gy-7 gs-7">
                    <thead>
                    <tr class="fw-bold fs-6 text-gray-800 border-bottom border-gray-200">
                    <th>Name</th>
                    <th>Day</th>
                    <th>Start Time</th>
                    <th>End Time</th>
                    <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($schedule as $schedule)
                        <tr>
                            <td>{{$schedule->doctor_name}}</td>
                            <td>{{$schedule->day}}</td>
                            <td>{{$schedule->start_time}}</td>
                            <td>{{$schedule->end_time}}</td>
                            <td><a href="{{url('/admin.dashboard/schedule.edit/'.$schedule->id)}}" class="btn btn-primary">Edit</a> | <a href="{{url('/admin.dashboard/schedule.delete/'.$schedule->id)}}" class="btn btn-danger">Delete</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection