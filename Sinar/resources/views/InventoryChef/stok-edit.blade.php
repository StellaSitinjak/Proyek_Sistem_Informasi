@extends('layouts.main')
@section('title', 'Bahan')
@section('head', 'Rumah Makan Sinar Minang Balige')

@section('content')
<div class="menu-box">
    <div class="row">
		<div class="col-lg-12">
			<div class="heading-title text-center">
				<h2>Edit Bahan</h2>
			</div>
		</div>
    </div>
	<br>

    <div class="row">
        <div class="col-md-10 offset-md-1">
        @foreach($data as $datas)
            <a href="{{ route('stok.index') }}" class="btn btn-submit">All Bahan</a>
            <form action="{{ route('stok.update', $datas->id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama"><b>Nama Bahan</b></label>
                            <input type="text" name="nama" id="nama" 
                            class="form-control" maxlength="40" value={{ $datas->nama }}>
                        </div>
                    </div>

                    <div class="col-md-6 border-left">
                        <div class="form-group">
                            <label for="stok"><b>Stok</b></label>
                            <input type="number" class="form-control" id="stok"
                            name="stok" style="width: 6em" value="{{ $datas->stok }}">
                        </div>
                        <div class="form-group">
                            <label for="satuan"><b>Satuan</b></label>
                            <input type="text" name="satuan" id="satuan" 
                            class="form-control" maxlength="10" value="{{ $datas->satuan }}">
                        </div>
                    </div>

                    <div class="col-md-12">
						<div class="submit-button text-center">
                            <button type="submit" class="btn btn-md btn-primary">Simpan</button>
                            <button type="reset" class="btn btn-md btn-warning">Cancel</button>
                            <button class="btn btn-danger" href="{{ route('resep.destroy', $datas->id) }}"
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