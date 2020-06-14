@extends('layouts.main')
@section('title', 'Table Reservation')
@section('head', 'Rumah Makan Sinar Minang Balige')

@section('content')
<!-- Start Reservation -->
<div class="menu-box">
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
						@if($datas->booking != 0)
						<td>{{ $datas->booking }}</td>
						@endif
						<td>
						@if ($datas->status == 0)
							<a class="btn btn-submit" href="{{ route('booking.edit', $datas->id) }}">Pesan</a>
						@else
							<a class="btn btn-submit" href="{{ route('booking.show', $datas->id) }}">View</a>
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