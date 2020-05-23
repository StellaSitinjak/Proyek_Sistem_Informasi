@extends('layouts.main')
@section('title', 'Table Resep')

@section('content')
<!-- Start Resep -->
<div class="reservation-box">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="heading-title text-center">
					<h2>Resep</h2>
				</div>
			</div>
		</div>
		<br>

        <div class="row inner-menu-box">
            @foreach($data as $datas)
            <form action="{{ route('resep.destroy', $datas->id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <div class="form-group">
                    <label for="nama">Nama Menu</label>
                    <input type="text" class="form-control" id="usr" name="nama" value="{{ $datas->nama }}">
                </div>
                <div class="form-group">
                    <div width="25%" class="zoom"><img src={{ $datas->file }} width="85%"></div>
                </div>
                <div class="form-group">
                    <label for="email">Jenis</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $datas->jenis }}">
                </div>
                <div class="form-group">
                    <label for="alamat">Resep</label>
                    <textarea class="form-control" id="alamat" name="alamat">{{ $datas->resep }}</textarea>
                </div>
                <div class="form-group">
                    <a href="{{ route('resep.edit', $datas->id) }}" class="btn btn-submit">Edit</a>
                    <button class="btn btn-danger" type="submit"
                    onclick="return confirm('Yakin ingin membatalkan?')">Delete</button>
                </div>
            </form>
            @endforeach
        </div>
	</div>
</div>
<!-- End Resep -->
@endsection