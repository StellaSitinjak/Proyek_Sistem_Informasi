@extends('layouts.main')
@section('title', 'Edit Menu')
@section('head', 'Rumah Makan Sinar Minang Balige')

@section('content')
<div class="reservation-box">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="heading-title text-center">
					<h2>Edit Menu</h2>
				</div>
			</div>
		</div>
		<br>

        <div class="row inner-menu-box">
        @foreach($data as $datas)
            <form action="{{ route('promo.update', $datas->id) }}" method="post">
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
                    <label for="harga">Harga</label>
                    <input type="harga" class="form-control" id="harga" name="harga" value="{{ $datas->harga }}">
                </div>
                <div class="form-group">
                    <label for="jenis">Promo</label>
                    <input type="text" class="form-control" id="jenis" name="jenis" value="{{ $datas->jenis }}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
        @endforeach
        </div>
	</div>
</div>
@endsection