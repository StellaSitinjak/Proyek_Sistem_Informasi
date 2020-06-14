@extends('layouts.main')
@section('title', 'Resep Menu')
@section('head', 'Rumah Makan Sinar Minang Balige')

@section('content')
<div class="menu-box">
    <div class="row">
		<div class="col-lg-12">
			<div class="heading-title text-center">
				<h2>Masukkan Resep Baru</h2>
			</div>
		</div>
    </div>
	<br>

    <div class="row">
        <div class="col-md-10 offset-md-1">
        <a href="{{ route('resep.index') }}" class="btn btn-submit">All Menu</a>
            <form action="{{ route('resep.store') }}" method="post">
                {{ csrf_field() }}
                {{ method_field('POST') }}
                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama"><b>Nama Menu</b></label>
                            <input type="text" placeholder="Enter Menu" name="nama"
                            id="nama" class="form-control" maxlength="40" required>
                        </div>
                        <div class="form-group">
                            <label for="jenis"><b>Jenis</b></label>
                            <select name="jenis" class="form-control" id="jenis">
                                <option value="Makanan">Makanan</option>
                                <option value="Minuman">Minuman</option>
                                <option value="Kue">Kue</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="harga"><b>Harga</b></label>
                            <input type="text" placeholder="Enter Price" name="harga"
                            id="harga" class="form-control" maxlength="40" required>
                        </div>
                    </div>

                    <div class="col-md-6 border-left">
                        <div class="form-group">
                            <label for="resep"><b>Resep</b></label>
                            <textarea rows="20" placeholder="Enter Recipe" id="resep"
                            name="resep" class="form-control" required></textarea>
                        </div>
                    </div>

                    <div class="col-md-12">
						<div class="submit-button text-center">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <button type="reset" class="btn btn-danger">Cancel</button>
           					<div id="msgSubmit" class="h3 text-center hidden"></div>
		    				<div class="clearfix"></div>
						</div>
					</div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection