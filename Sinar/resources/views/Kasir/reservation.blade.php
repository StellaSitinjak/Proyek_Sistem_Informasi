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
				</div>
			</div>
		</div>

        <div class="row inner-menu-box">
			<table class="table">
			    <thead>
		    	    <tr align="center">
			            <th>No Meja</th>
    				    <th>Kapasitas/Orang</th>
			            <th>Status</th>
        			    <th>Action</th>
					</tr>
				</thead>
	
				<tbody>
					@foreach($data as $datas)
            	    <tr align="center">
						<td>{{ $datas->id }}</td>
						<td>{{ $datas->kapasitas }}</td>
						@if ($datas->status == 0)
						<td>Tersedia</td>
						@elseif ($datas->created_at != NULL)
						<td>Dipesan</td>
						@else
						<td>Tidak Tersedia</td>
						@endif
						<td>
							@if ($datas->status == 0)
								<a href="{{ route('reservation.edit', $datas->id) }}" class="btn btn-submit">Pesan</a>
							@else
							<a class="btn btn-danger" href="{{ route('reservation.destroy', $datas->id) }}" method="delete"
                                onclick="return confirm('Yakin ingin membatalkan?')">Delete</a>
							@endif
							<!-- <form action="{{ route('reservation.destroy', $datas->id) }}" method="DELETE">
								{{ csrf_field() }}
                                {{ method_field('DELETE') }}
								@if ($datas->status == 0)
								<a href="{{ route('reservation.edit', $datas->id) }}" class="btn btn-submit">Pesan</a>
								@else
								<button class="btn btn-danger" type="submit" onclick="return confirm('Yakin ingin membatalkan?')">Batal</button>
								@endif
							</form> -->
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