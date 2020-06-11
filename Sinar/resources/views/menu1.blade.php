@extends('layouts.main')
@section('title', 'Masuk Ke Akun')
@section('head', 'Rumah Makan Sinar Minang Balige')

@section('content')
<div class="col-lg-12">
<br><br>
<div class="container" style="margin-top:20px">
    <div class="heading-title text-center">
        <h2>Masuk ke Akun</h2>
        <!-- <p> Tentukan seleramu </p> -->
    </div>
    <div class="row" align="center">
        <div class="col-md-10 offset-md-1">
            @foreach($data as $datas)
            <form action="{{ url('/ratingPost') }}" method="POST">
                {{ csrf_field() }}
                <div class="row-md-4">
                    <div class="col-md-6 border">
                        <div class="form-group">
                            <td width="25%" class="zoom"><img width="50%" src={{ asset($datas->file) }}></td>
                        </div>
                        <div class="form-group">
                            <label for="nama"><b>{{ $datas->nama }}</b></label>
                        </div>
                        <div class="form-group">
                            <textarea rows="20" placeholder="Enter Comments" id="resep"
                            name="resep" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                        @for ($no = 1; $no <= $datas->rating; $no++ )
                            <span class="fa fa-star checked"></span>
                        @endfor
                        @for ($no = 1; $no <= (5 - $datas->rating); $no++ )
                            <span class="fa fa-star"></span>
                        @endfor
                        </div>
						<div class="submit-button text-center">
                            <button type="submit" class="btn btn-md btn-primary">Simpan</button>
                            <button type="reset" class="btn btn-md btn-danger">Cancel</button>
						</div>
                    </div>
                </div>
                <input type="hidden" name="action" value="Masuk">
            </form>
            @endforeach
        </div>
    </div>
</div>
<br><br><br><br>
</div>
@endsection