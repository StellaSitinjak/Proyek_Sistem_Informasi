@extends('layouts.main')
@section('title', 'Cart')
@section('head', 'Rumah Makan Sinar Minang Balige')

@section('content')
<!-- Start Cart -->
<div class="reservation-box">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="heading-title text-center">
					<h2>Cart</h2>
                    <p> Menu yang kamu pesan </p>
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
						<th></th>
			            <th>Picture</th>
    				    <th>Nama Menu</th>
			            <th>Harga</th>
					</tr>
				</thead>
	
				<tbody>
				@foreach($data as $datas)
            	    <tr align="center">
						<td><input type="checkbox" name="nama" id="nama" class="form-control">
						</td>
                        <td width="25%" class="zoom"><img width="85%" src={{ $datas->file }}></td>
						<td>{{ $datas->nama }}</td>
						<td>{{ $datas->harga }}</td>
						<td><input type="number" class="form-control" id="stok"
                            name="stok" value={{ $datas->jumlah }}></td>
				    </tr>
				@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
<!-- End Cart -->
@endsection