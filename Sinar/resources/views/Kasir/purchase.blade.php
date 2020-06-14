@extends('layouts.main')
@section('title', 'Purchase')
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
			            <th>Picture</th>
    				    <th>Nama Menu</th>
			            <th>Harga</th>
						<th>Jumlah</th>
						<th></th>
					</tr>
				</thead>
	
				<tbody>
					@foreach($data['pesan'] as $datas)
            	    <tr align="center">
                        <td width="25%" class="zoom"><img src={{ $datas->file }} width="85%"></td>
						<td>{{ $datas->nama }}</td>
						<td>{{ $datas->harga }}</td>
						<td>{{ $datas->jumlah }}</td>
						<!-- <td><button class="btn btn-danger" type="button">Remove</button></td> -->
					</tr>
					@endforeach
				</tbody>
			</table>

			<br>

			<section class="container content-section">
			<hr>
			@foreach($data['jumlah'] as $datas)
            	<div class="row cart-total">
					<div class="col-md-6 text-left"><strong class="cart-total-title">Total</strong></div>
					<div class="col-md-4 text-right"><span class="cart-total-price" align="right">Rp {{ $datas->total }}</span></div>
				</div>
				<hr>
            	<div class="row cart-total">
					<div class="col-md-12 text-right"><a class="btn btn-primary btn-purchase"
					type="button" href="{{ route('billing.edit', $datas->userID) }}">Purchase</a></div>
				</div>
			@endforeach
        	</section>
		</div>
	</div>
</div>
<!-- End Cart -->
@endsection