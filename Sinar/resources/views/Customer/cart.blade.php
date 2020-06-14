@extends('layouts.main')
@section('title', 'Cart')
@section('head', 'Rumah Makan Sinar Minang Balige')

@section('content')
<!-- Start Cart -->
<script src="{{ asset('js\store.js') }}" async></script>
<div class="menu-box">
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
						<th>Jumlah</th>
						<th></th>
					</tr>
				</thead>
	
				<tbody>
					@foreach($data as $datas)
            	    <tr align="center">
						<td><input type="checkbox" name="nama" id="nama" class="form-control shop-item-button">
						</td>
                        <td width="25%" class="zoom"><img width="50%" src={{ $datas->file }}></td>
						<td>{{ $datas->nama }}</td>
						<td>{{ $datas->harga }}</td>
						<td><input type="number" class="form-control cart-quantity-input" id="stok"
							name="stok" min="1" style="width: 4em" value={{ $datas->jumlah }}></td>
						<td><button class="btn btn-danger" type="button">Remove</button></td>
					</tr>
					@endforeach
				</tbody>
			</table>

			<br>

			<section class="container content-section">
			<hr>
            	<div class="row cart-total">
					<div class="col-md-6 text-left"><strong class="cart-total-title">Total</strong></div>
					<div class="col-md-4 text-right"><span class="cart-total-price" align="right">Rp0</span></div>
				</div>
				<hr>
            	<div class="row cart-total">
					<div class="col-md-12 text-right"><button class="btn btn-primary btn-purchase" type="button">PURCHASE</button></div>
				</div>
        	</section>
		</div>
	</div>
</div>
<!-- End Cart -->
@endsection