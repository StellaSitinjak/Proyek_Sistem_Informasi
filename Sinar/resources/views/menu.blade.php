@extends('layouts.main')
@section('title', 'Menu')
@section('head', 'Rumah Makan Sinar Minang Balige')

@section('content')
<!-- Start Menu -->
<div class="menu-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading-title text-center">
                    <h2>Our Menu</h2>
                    <p> Tentukan seleramu </p>
                </div>
            </div>
        </div>
        <div class="row inner-menu-box">
			<br><br>
			<table border="0" width="100%" height="85%">
				<tr>
					<h1> <b><font color=#d65106>Makanan</b></h1></font>
					<br>
					@foreach($data as $datas)
                    @if ($datas->jenis == "Makanan")
					<td width="25%" align="center" class="zoom"><img src={{ $datas->file }} width="85%"></td>
					@endif
                    @endforeach
				</tr>
				<tr>
					@foreach($data as $datas)
                    @if ($datas->jenis == "Makanan")
					<td align=center><b><font size="3" color="black">{{ $datas->nama }}</font></b></td>
					@endif
                    @endforeach
				</tr>
				<tr>
				@foreach($data as $datas)
    	        @if ($datas->jenis == "Makanan")
					<td align=center><font size="3" color="black">Rp 35.000</font></td>
				@endif
	            @endforeach
				</tr>
		
				<tr>
				@foreach($data as $datas)
                @if ($datas->jenis == "Makanan")
					<td align= "center">
					@for ($no = 1; $no <= $datas->rating; $no++ )
                        <span class="fa fa-star checked"></span>
                    @endfor
                    @for ($no = 1; $no <= (5 - $datas->rating); $no++ )
                        <span class="fa fa-star"></span>
                    @endfor
					</td>
				@endif
                @endforeach
				</tr>

				<tr>
				@foreach($data as $datas)
                @if ($datas->jenis == "Makanan")
					<td align=center><a class="button" href="#"> <b>Pesan</b></td></a>
				@endif
                @endforeach
				</tr>
			</table>
		</div>

			<br><br>
			
		<div class="row inner-menu-box">
			<table border="0" width="100%" height="85%">
				<tr>
					<h1> <b><font color=#d65106>Minuman</b></h1></font>
					<br>
					@foreach($data as $datas)
                    @if ($datas->jenis == "Minuman")
					<td width="25%" align="center" class="zoom"><img src={{ $datas->file }} width="85%"></td>
					@endif
                    @endforeach
				</tr>
				<tr>
					@foreach($data as $datas)
                    @if ($datas->jenis == "Minuman")
					<td align=center><b><font size="3" color="black">{{ $datas->nama }}</font></b></td>
					@endif
                    @endforeach
				</tr>

				<tr>
				@foreach($data as $datas)
    	        @if ($datas->jenis == "Minuman")
					<td align=center><font size="3" color="black">Rp 35.000</font></td>
				@endif
	            @endforeach
				</tr>
		
				<tr>
				@foreach($data as $datas)
                @if ($datas->jenis == "Minuman")
					<td align= "center">
					@for ($no = 1; $no <= $datas->rating; $no++ )
                        <span class="fa fa-star checked"></span>
                    @endfor
                    @for ($no = 1; $no <= (5 - $datas->rating); $no++ )
                        <span class="fa fa-star"></span>
                    @endfor
					</td>
				@endif
                @endforeach
				</tr>

				<tr>
				@foreach($data as $datas)
                @if ($datas->jenis == "Minuman")
					<td align=center><a class="button" href="#"> <b>Pesan</b></td></a>
				@endif
                @endforeach
				</tr>
			</table>
		</div>

		<br><br>

		<div class="row inner-menu-box">
			<table border="0" width="100%" height="85%">
				<tr>
					<h1> <b><font color=#d65106>Kue</b></h1></font>
					<br>
					@foreach($data as $datas)
                    @if ($datas->jenis == "Kue")
					<td width="25%" align="center" class="zoom"><img width="85%" src={{ $datas->file }}></td>
					@endif
                    @endforeach
				</tr>
				<tr>
					@foreach($data as $datas)
                    @if ($datas->jenis == "Kue")
					<td align=center><b><font size="3" color="black">{{ $datas->nama }}</font></b></td>
					@endif
                    @endforeach
				</tr>
				<tr>
				@foreach($data as $datas)
    	        @if ($datas->jenis == "Kue")
					<td align=center><font size="3" color="black">Rp 35.000</font></td>
				@endif
	            @endforeach
				</tr>
		
				<tr>
				@foreach($data as $datas)
                @if ($datas->jenis == "Kue")
					<td align= "center">
					@for ($no = 1; $no <= $datas->rating; $no++ )
                        <span class="fa fa-star checked"></span>
                    @endfor
                    @for ($no = 1; $no <= (5 - $datas->rating); $no++ )
                        <span class="fa fa-star"></span>
                    @endfor
					</td>
				@endif
                @endforeach
				</tr>

				<tr>
				@foreach($data as $datas)
                @if ($datas->jenis == "Kue")
					<td align=center><a class="button" href="#"> <b>Pesan</b></td></a>
				@endif
                @endforeach
				</tr>
			</table>
		</div>

		<br><br>

		<div class="row inner-menu-box">
			<table border="0" width="100%" height="85%">
				<tr>
					<h1> <b><font color=#d65106>Lainnya</b></h1></font>
					<br>
					@foreach($data as $datas)
                    @if ($datas->jenis == "Lainnya")
					<td width="25%" align="center" class="zoom"><img width="45%" src={{ $datas->file }}></td>
					@endif
                    @endforeach
				</tr>
				<tr>
					@foreach($data as $datas)
                    @if ($datas->jenis == "Lainnya")
					<td align=center><b><font size="3" color="black">{{ $datas->nama }}</font></b></td>
					@endif
                    @endforeach
				</tr>
				<tr>
				@foreach($data as $datas)
    	        @if ($datas->jenis == "Lainnya")
					<td align=center><font size="3" color="black">Rp 35.000</font></td>
				@endif
	            @endforeach
				</tr>
		
				<tr>
				@foreach($data as $datas)
                @if ($datas->jenis == "Lainnya")
					<td align= "center">
					@for ($no = 1; $no <= $datas->rating; $no++ )
                        <span class="fa fa-star checked"></span>
                    @endfor
                    @for ($no = 1; $no <= (5 - $datas->rating); $no++ )
                        <span class="fa fa-star"></span>
                    @endfor
					</td>
				@endif
                @endforeach
				</tr>

				<tr>
				@foreach($data as $datas)
                @if ($datas->jenis == "Lainnya")
					<td align=center><a class="button" href="#"> <b>Pesan</b></td></a>
				@endif
                @endforeach
				</tr>
			</table>
		</div>
    </div>
</div>
@endsection