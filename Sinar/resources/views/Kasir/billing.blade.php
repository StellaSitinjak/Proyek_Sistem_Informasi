@extends('layouts.main')
@section('title', 'Billing')
@section('head', 'Rumah Makan Sinar Minang Balige')

@section('content')
<!-- Start Billing -->
<div class="menu-box">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="heading-title text-center">
					<h2>Billing</h2>
					<p>Pembayaran</p>
				</div>
			</div>
		</div>

        <div class="row inner-menu-box">
			<table class="table">
			    <thead>
		    	    <tr align="center">
			            <th>No Meja</th>
			            <th>Nama Customer</th>
        			    <th>Action</th>
					</tr>
				</thead>
	
				<tbody>
					@foreach($data as $datas)
            	    <tr align="center">
						<td>{{ $datas->mejaID }}</td>
						<td>{{ $datas->nama }}</td>
						<td>
							<form action="{{ route('billing.show', $datas->pesananID) }}" method="GET">
								{{ csrf_field() }}
                                {{ method_field('GET') }}
								<button class="btn btn-submit" type="submit">Detail</button>
							</form>
						</td>
				    </tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
<!-- End Billing -->
@endsection