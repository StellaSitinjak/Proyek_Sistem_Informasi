@extends('layouts.main')
@section('title', 'Masuk Ke Akun')
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
                <form action="{{ route('rate.update', $datas->id) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('POST') }}
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
					    	<div class="submit-button text-center">
                                <button type="submit" class="btn btn-md btn-primary">Simpan</button>
                                <button type="reset" class="btn btn-md btn-danger">Cancel</button>
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