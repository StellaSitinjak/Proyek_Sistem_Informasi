@extends('layouts.main')
@section('title', 'Table Reservation')
@section('head', 'Rumah Makan Sinar Minang Balige')

@section('content')
<!-- Start Reservation -->
<div class="reservation-box">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="heading-title text-center">
					<h2>Reservation</h2>
					<p>Book a table</p>
					@if(Session::has('alert-success'))
	                <div class="alert alert-success">
    	                <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
        	        </div>
            		@endif
				</div>
			</div>
		</div>

        <div class="row inner-menu-box">
			<table class="table">
			    <thead>
		    	    <tr align="center">
			            <th>No Meja</th>
    				    <th>Kapasitas/Orang</th>
					</tr>
				</thead>
	
				<tbody>
					@foreach($data as $datas)
            	    <tr align="center">
						<td>{{ $datas->id }}</td>
						<td>{{ $datas->kapasitas }}</td>
						<td>{{ $datas->booking }}</td>
						<td>
						@if ($datas->status == 0)
							<a class="btn btn-submit" href="{{ route('booking.show', $datas->id) }}">Pesan</a>
						@else
							<a class="btn btn-submit" href="{{ route('booking.show', $datas->id) }}">Edit</a>
							<br><br>
							<a class="btn btn-danger" href="{{ route('booking.destroy', $datas->id) }}" method="delete"
                                onclick="return confirm('Yakin ingin membatalkan?')">Delete</a>
						@endif
						</td>
				    </tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
<!-- End Reservation -->
@endsection