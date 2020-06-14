@extends('layouts.main')
@section('title', 'Rating')
@section('head', 'Rumah Makan Sinar Minang Balige')

@section('content')
<div class="menu-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading-title text-center">
                    <h2>Rating</h2>
                    <p> Berikan Penilaianmu </p>
                </div>
            </div>
        </div>
        <br>

        <div class="row" align="center">
            <div class="col-md-10 offset-md-1">
                @foreach($data as $datas)
                <form action="{{ route('rating.update', $datas->id) }}" method="PUT">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="row-md-4">
                        <div class="col-md-6 border">
                            <br>
                            <div class="form-group">
                                <td width="25%" class="zoom"><img width="50%" src={{ asset($datas->file) }}></td>
                            </div>
                            <div class="form-group">
                                <label for="nama"><b>{{ $datas->nama }}</b></label>
                            </div>
                            <div class="form-group">
                                <textarea rows="5" placeholder="Enter Comments" id="resep"
                                name="resep" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                @for ($no = 1; $no <= 5; $no++ )
                                &nbsp;
                                <input name="rating" value="{{ $no }}" id="rating" type="radio"> {{ $no }}
                                &nbsp;
                                @endfor
                            </div>
					    	<div class="text-center">
    							<a class="btn btn-md btn-primary" type="submit" href="{{ route('rating.update', $datas->id) }}">Simpan</a>
    							<a class="btn btn-md btn-danger" type="reset" href="{{ route('rating.index') }}">Batal</a>
                            </div>
                            <br>
                        </div>
                    </div>
                    <input type="hidden" name="action" value="Masuk">
                </form>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection