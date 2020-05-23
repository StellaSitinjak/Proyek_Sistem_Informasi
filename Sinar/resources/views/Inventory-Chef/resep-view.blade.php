@extends('layouts.main')
@section('title', 'Table Resep')
@section('head', 'Rumah Makan Sinar Minang Balige')

@section('content')
<!-- Start Resep -->
<div class="reservation-box">
	<div class="container">
    @foreach($data as $datas)
		<div class="row">
			<div class="col-lg-12">
				<div class="heading-title text-center">
					<h2>{{ $datas->nama }}</h2>
				</div>
			</div>
		</div>
		<br>

        <div class="row inner-menu-box">
            <form action="{{ route('resep.destroy', $datas->id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <td width="25%" class="zoom"><img src={{ $datas->file }} width="85%"></td>
                        </div>
                    </div>

                    <div class="col-md-6 border-left">
                        <div class="form-group">
                            <p for="jenis"><b>Jenis: </b>{{ $datas->jenis }}</p>
                        </div>
                        <div class="form-group">
                            <label for="resep"><b>Resep</b></label>
                            <textarea id="resep" name="resep" class="form-control"
                            onkeyup="resizeTextarea('InputTextArea')">{{ $datas->resep }}</textarea>
                        </div>
                    </div>
                </div>

                <div class="submit-button text-center">
                    <a href="{{ route('resep.edit', $datas->id) }}" class="btn btn-submit">Edit</a>
                    <button class="btn btn-danger" type="submit"
                    onclick="return confirm('Yakin ingin membatalkan?')">Delete</button>
                </div>
            </form>
        </div>
    @endforeach
	</div>
</div>
<!-- End Resep -->
@endsection