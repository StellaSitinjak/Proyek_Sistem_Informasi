@extends('layouts.main')
@section('title', 'Rating')
@section('head', 'Rumah Makan Sinar Minang Balige')

@section('content')
<!-- Start promo -->
<div class="menu-box">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="heading-title text-center">
                    <h2>Rating</h2>
                    <p>Berikan penilaianmu</p>
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
			            <th>Menu</th>
        			    <th>Action</th>
					</tr>
				</thead>
	
				<tbody>
					@foreach($data as $datas)
            	    <tr align="center">
                        <td width="25%" class="zoom"><img src={{ $datas->file }} width="85%"></td>
						<td>{{ $datas->nama }}</td>
						<td>
							<a class="btn-link" href="{{ route('rating.show', $datas->id) }}">Rate</a>
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