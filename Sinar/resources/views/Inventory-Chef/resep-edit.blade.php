@extends('layouts.main')
@section('title', 'Table Resep')
@section('head', 'Rumah Makan Sinar Minang Balige')

@section('content')
<div class="reservation-box">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="heading-title text-center">
					<h2>Edit Resep</h2>
				</div>
			</div>
		</div>
		<br>

        <div class="row inner-menu-box">
        @foreach($data as $datas)
            <form action="{{ route('resep.update', $datas->id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="usr" name="nama" value="{{ $datas->nama }}">
                </div>
                <div class="form-group">
                    <label for="jenis">Jenis</label>
                    <input type="text" class="form-control" id="jenis" name="jenis" value="{{ $datas->jenis }}">
                </div>
                <div class="form-group">
                    <label for="resep">Resep</label>
                    <textarea class="form-control" id="resep" name="resep">{{ $datas->resep }}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
        @endforeach
        </div>
	</div>
</div>
@endsection