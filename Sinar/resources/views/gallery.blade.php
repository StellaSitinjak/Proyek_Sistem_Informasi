@extends('layouts.main')
@section('title', 'Gallery')
@section('head', '"Todayʼs Moment Are Tommorow Memories"')

@section('content')
<!-- Start Gallery -->
<div class="gallery-box">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="heading-title text-center">
					<h2>Gallery</h2>
					<p>Kenangan bersama Rumah Makan Sinar Minang Balige</p>
				</div>
			</div>
		</div>
		<div class="tz-gallery">
			<div class="row">
				<div class="col-sm-12 col-md-4 col-lg-4">
					<a class="lightbox" href="{{ asset('image/gallery-img-01.jpg') }}">
						<img class="img-fluid" src="{{ asset('image/gallery-img-01.jpg') }}" alt="Gallery image">
					</a>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-4">
					<a class="lightbox" href="{{ asset('image/gallery-img-02.jpg') }}">
						<img class="img-fluid" src="{{ asset('image/gallery-img-02.jpg') }}" alt="Gallery image">
					</a>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-4">
					<a class="lightbox" href="{{ asset('image/gallery-img-03.jpg') }}">
						<img class="img-fluid" src="{{ asset('image/gallery-img-03.jpg') }}" alt="Gallery image">
					</a>
				</div>
				<div class="col-sm-12 col-md-4 col-lg-4">
					<a class="lightbox" href="{{ asset('image/gallery-img-04.jpg') }}">
						<img class="img-fluid" src="{{ asset('image/gallery-img-04.jpg') }}" alt="Gallery image">
					</a>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-4">
					<a class="lightbox" href="{{ asset('image/gallery-img-05.jpg') }}">
						<img class="img-fluid" src="{{ asset('image/gallery-img-05.jpg') }}" alt="Gallery image">
					</a>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-4">
					<a class="lightbox" href="{{ asset('image/gallery-img-06.jpg') }}">
						<img class="img-fluid" src="{{ asset('image/gallery-img-06.jpg') }}" alt="Gallery image">
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Gallery -->

<!-- Start Contact info -->
<div class="contact-imfo-box">
	<div class="container">
		<div class="row">
			<div class="col-md-4 arrow-right">
				<i class="fa fa-volume-control-phone"></i>
				<div class="overflow-hidden">
					<h4>Phone</h4>
					<p class="lead">
						081 2233 445 667
					</p>
				</div>
			</div>
			<div class="col-md-4 arrow-right">
				<i class="fa fa-envelope"></i>
				<div class="overflow-hidden">
					<h4>Email</h4>
					<p class="lead">
						Sinar_Minang@gmail.com
					</p>
				</div>
			</div>
			<div class="col-md-4">
				<i class="fa fa-map-marker"></i>
				<div class="overflow-hidden">
					<h4>Location</h4>
					<p class="lead">
						Jl. Siborong Borong-Parapat No.2,
						Sibola Hotangas,Balige
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Contact info -->
@endsection