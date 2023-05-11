@php
    use Carbon\Carbon;
@endphp
<!DOCTYPE html>
<html>
<head>
	<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 10pt;
			border: 1px solid;
			text-align: center;
		}
		table {
			width: 100%;
			border-collapse: collapse;
		}
	</style>
	<center>
		<h3>Juniarta Dental Clinic Monthly Report</h3>
		<p><strong>Appointment Data</strong></p>
		<h5>Monthly Report: {{$currentDate}}</h5>
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
				<th>Appointment ID</th>
				<th>Patient Name</th>
				<th>Doctor Name</th>
				<th>Diagnosis Note</th>
				<th>Status</th>
				<th>Date</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($appointmentData as $p)
			<tr>
				<td>{{ $i++ }}</td>
				<td>{{$p->Appointment->appointment_id}}</td>
				<td>{{$p->Patient->name}}</td>
				<td>{{$p->Doctor->name}}</td>
				<td>{{$p->diagnosis}}</td>
				<td>{{$p->status}}</td>
				<td>{{Carbon::parse($p->created_at)->format('m/d/Y')}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>