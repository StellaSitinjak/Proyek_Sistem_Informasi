@extends('layouts.main')
@section('title', 'promo Menu')
@section('head', 'Rumah Makan Sinar Minang Balige')

@section('content')
<div class="menu-box">
    @foreach($data as $datas)
    <div class="row">
		<div class="col-lg-12">
			<div class="heading-title text-center">
				<h2>{{ $datas->nama }}</h2>
                @if(Session::has('alert-success'))
                <div class="alert alert-success">
                    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
   	            </div>
       	    	@endif
			</div>
		</div>
    </div>
	<br>

    <div class="row">
        <div class="col-md-10 offset-md-1">
            <a href="{{ route('promo.index') }}" class="btn btn-submit">All Menu</a>
            <form action="{{ route('promo.destroy', $datas->id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <td width="25%" class="zoom"><img width="50%" src={{ asset($datas->file) }}></td>
                        </div>
                        <div class="form-group">
                            <label for="nama"><b>Nama Menu: </b>{{ $datas->nama }}</label>
                        </div>
                        <div class="form-group">
                            <label for="jenis"><b>Jenis: </b>{{ $datas->jenis }}</label>
                        </div>
                    </div>

                    <div class="col-md-6 border-left">
                        <div class="form-group">
                            <label for="harga"><b>Harga: </b>{{ $datas->harga }}</label>
                        </div>
                        <div class="form-group">
                            <label for="nama"><b>Promo: </b>{{ $datas->promo }}</label>
                        </div>
                        <div class="form-group">
                            <label for="rating"><b>Rating: </b>{{ $datas->rating }}</label>
                        </div>
                    </div>

                    <div class="col-md-12">
						<div class="submit-button text-center">
                            <a href="{{ route('promo.edit', $datas->id) }}" class="btn btn-md btn-primary">Edit</a>
                            <button class="btn btn-danger" type="submit"
                            onclick="return confirm('Yakin ingin membatalkan?')">Delete</button>
						</div>
					</div>
                </div>
            </form>
            @endforeach
        </div>
    </div>
</div>
@endsection