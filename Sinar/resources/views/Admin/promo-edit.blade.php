@extends('layouts.main')
@section('title', 'promo Menu')
@section('head', 'Rumah Makan Sinar Minang Balige')

@section('content')
<div class="menu-box">
    <div class="row">
		<div class="col-lg-12">
			<div class="heading-title text-center">
				<h2>Edit Menu</h2>
			</div>
		</div>
    </div>
	<br>

    <div class="row">
        <div class="col-md-10 offset-md-1">
        @foreach($data as $datas)
            <a href="{{ route('promo.index') }}" class="btn btn-submit">All Menu</a>
            <form action="{{ route('promo.update', $datas->id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <td width="25%" class="zoom"><img width="50%" src={{ asset($datas->file) }}></td>
                        </div>
                        <div class="form-group">
                            <label for="nama"><b>Nama Menu</b></label>
                            <input type="text" placeholder="Enter Menu" name="nama"
                            id="nama" class="form-control" maxlength="40" value={{ $datas->nama }}>
                        </div>
                        <div class="form-group">
                            <label for="jenis"><b>Jenis: </b>{{ $datas->jenis }}</label>
                        </div>
                    </div>

                    <div class="col-md-6 border-left">
                        <div class="form-group">
                            <label for="harga"><b>Harga</b></label>
                            <input type="text" placeholder="Enter Price" name="harga"
                            id="harga" class="form-control" maxlength="40" value={{ $datas->harga }}>
                        </div>
                        <div class="form-group">
                            <label for="promo"><b>Promo</b></label>
                            <input type="text" placeholder="Enter Menu" name="promo"
                            id="promo" class="form-control" maxlength="40" value={{ $datas->promo }}>
                        </div>
                        <div class="form-group">
                            <label for="rating"><b>Rating: </b>{{ $datas->rating }}</label>
                        </div>
                    </div>

                    <div class="col-md-12">
						<div class="submit-button text-center">
                            <button type="submit" class="btn btn-md btn-primary">Simpan</button>
                            <button type="reset" class="btn btn-md btn-danger">Cancel</button>
						</div>
					</div>
                </div>
            </form>
            @endforeach
        </div>
    </div>
</div>
@endsection