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
            <form action="{{ route('booking.update', $datas->id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
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
                            <label for="time"><b>Waktu Reservasi</b></label>
        		        	<input type="datetime-local" name="time" id="time" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-12">
						<div class="submit-button text-center">
                            <button type="submit" class="btn btn-md btn-primary">Simpan</button>
                            <button type="reset" class="btn btn-md btn-warning">Cancel</button>
                            @if($datas->status == 1)
							<a class="btn btn-danger" href="{{ route('booking.destroy', $datas->id) }}" method="delete"
                                onclick="return confirm('Yakin ingin membatalkan?')">Delete</a>
                            @endif
						</div>
					</div>
                </div>
            </form>
            @endforeach
        </div>
    </div>
</div>
@endsection