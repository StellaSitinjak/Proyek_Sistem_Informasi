@extends('layouts.main')
@section('title', 'Menu')
@section('head', 'Rumah Makan Sinar Minang Balige')

@section('content')
<!-- Start promo -->
<div class="menu-box">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="heading-title text-center">
					<h2>Menu</h2>
					@if(Session::has('alert-success'))
	                <div class="alert alert-success">
    	                <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
        	        </div>
            		@endif
				</div>
			</div>
		</div>

		<br>

        <div class="row inner-menu-box">
			<table class="table">
			    <thead>
		    	    <tr align="center">
			            <th>Picture</th>
    				    <th>Last Update</th>
			            <th>Menu</th>
			            <th>Harga</th>
			            <th>Promo</th>
			            <th>Rating</th>
        			    <th>Action</th>
					</tr>
				</thead>
	
				<tbody>
					@foreach($data as $datas)
            	    <tr align="center">
                        <td width="25%" class="zoom"><img src={{ $datas->file }} width="85%"></td>
						<td>{{ $datas->updated_at }}</td>
						<td>{{ $datas->nama }}</td>
						<td>{{ $datas->harga }}</td>
						<td>{{ $datas->promo }}</td>
						<td>{{ $datas->rating }}</td>
						<td>
							<a class="btn-link" href="{{ route('promo.show', $datas->id) }}">View</a>
							<br><br>
							<a class="btn-link" href="{{ route('promo.edit', $datas->id) }}">Edit</a>
						</td>
				    </tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
<!-- End promo -->
@endsection