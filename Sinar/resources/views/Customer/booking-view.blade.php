@extends('layouts.main')
@section('title', 'Table Reservation')
@section('head', 'Rumah Makan Sinar Minang Balige')

@section('content')
<div class="menu-box">
    <div class="row">
		<div class="col-lg-12">
			<div class="heading-title text-center">
				<h2>Pesan Meja</h2>
			</div>
		</div>
    </div>
	<br>

    <div class="row">
        <div class="col-md-10 offset-md-1">
        @foreach($data as $datas)
            <a href="{{ route('booking.index') }}" class="btn btn-submit">Back</a>
            <form action="{{ route('booking.edit', $datas->id) }}" method="GET">
                {{ csrf_field() }}
                {{ method_field('GET') }}
                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="time"><b>Nomor Meja</b></label>
        		        	<input type="text" name="time" id="time" class="form-control" value="{{ $datas-> id }}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="time"><b>Kapasitas: </b>{{ $datas->kapasitas }} orang</label>
                        </div>
                    </div>

                    <div class="col-md-6 border-left">
                        <div class="form-group">
                            <label for="time"><b>Waktu Reservasi: </b>{{ $datas->booking }}</label>
                        </div>
                    </div>

                    <div class="col-md-12 text-center">
                    <br>
                        <a class="btn btn-submit" href="{{ route('booking.edit', $datas->id) }}">Edit</a>
						<a class="btn btn-danger" href="{{ route('booking.destroy', $datas->id) }}" method="get"
                            onclick="return confirm('Yakin ingin membatalkan?')">Batal</a>
					</div>
                </div>
            </form>
            @endforeach
        </div>
    </div>
</div>
@endsection