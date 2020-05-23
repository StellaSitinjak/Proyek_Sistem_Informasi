@extends('layouts.main')
@section('title', 'Table Resep')
@section('head', 'Rumah Makan Sinar Minang Balige')

@section('content')
<!-- Start Resep -->
<div class="reservation-box">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="heading-title text-center">
					<h2>Resep</h2>
					@if(Session::has('alert-success'))
	                <div class="alert alert-success">
    	                <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
        	        </div>
            		@endif
				</div>
				<button class="btn btn-submit" type="submit"
				action="{{ route('resep.create') }}">+ Tambah Menu</button>
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
        			    <th>Action</th>
					</tr>
				</thead>
	
				<tbody>
					@foreach($data as $datas)
            	    <tr align="center">
                        <td width="25%" class="zoom"><img src={{ $datas->file }} width="85%"></td>
						<td>{{ $datas->updated_at }}</td>
						<td>{{ $datas->nama }}</td>
						<td>
							<a class="btn-link" href="{{ route('resep.show', $datas->id) }}">View</a>
							<br><br>
							<a class="btn-link" href="{{ route('resep.edit', $datas->id) }}">Edit</a>
							<br><br>
							<a class="btn-link" href="{{ route('resep.destroy', $datas->id) }}"
                                onclick="return confirm('Yakin ingin menghapus menu?')">Delete</a>
						</td>
				    </tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
<!-- End Resep -->
@endsection