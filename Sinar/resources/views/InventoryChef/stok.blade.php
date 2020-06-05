@extends('layouts.main')
@section('title', 'Bahan')
@section('head', 'Rumah Makan Sinar Minang Balige')

@section('content')
<!-- Start stok -->
<div class="reservation-box">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="heading-title text-center">
					<h2>Daftar Stok Bahan</h2>
					@if(Session::has('alert-success'))
	                <div class="alert alert-success">
    	                <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
        	        </div>
            		@endif
				</div>
			</div>
            <a href="{{ route('stok.create') }}" class="btn btn-submit">+ Tambah Bahan</a>
		</div>

		<br>

        <div class="row inner-menu-box">
			<table class="table">
			    <thead>
		    	    <tr align="center">
                        <th>No</th>
			            <!-- <th>Picture</th> -->
    				    <th>Name</th>
			            <th>Current Inventory</th>
    				    <th>Action</th>
					</tr>
				</thead>
	
				<tbody>
                    @php $no=1 @endphp
					@foreach($data as $datas)
            	    <tr align="center">
                        <td>{{ $no++ }}</td>
                        <!-- <td width="25%" class="zoom"><img src="image/Bahan/".{{ $datas->file }} width="85%"></td> -->
						<td>{{ $datas->nama }}</td>
						<td>{{ $datas->stok }}</td>
						<td>
							<a class="btn-link" href="{{ route('stok.edit', $datas->id) }}">Edit</a>
						</td>
				    </tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
<!-- End stok -->
@endsection