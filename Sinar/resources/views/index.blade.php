@extends('layouts.main')
@section('title', 'RM. Sinar Minang Balige')

@section('content')
	<div id="slides" class="cover-slides">
		<ul class="slides-container">
			<li class="text-left">
				<img src="{{ asset('image/slider-01.jpg') }}"> 
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Welcome To Rumah Makan <br> Sinar Minang Balige</strong></h1>
							<p class="m-b-40">Anda puas beritahu teman, Anda tidak puas beritahu kami<br> 
							</p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="reservation.html">Reservation</a></p>
						</div>
					</div>
				</div>
			</li>
			<li class="text-left">
				<img src="{{ asset('image/slider-02.jpg') }}" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Welcome To Rumah Makan  <br> Sinar Minang Balige</strong></h1>
							<p class="m-b-40">Anda puas beritahu teman, Anda tidak puas beritahu kami  <br> 
							</p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Reservation</a></p>
						</div>
					</div>
				</div>
			</li>
			<li class="text-left">
				<img src="{{ asset('image/slider-03.jpg') }}" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Welcome To Rumah Makan<br>  Sinar Minang Balige</strong></h1>
							<p class="m-b-40">Anda puas beritahu teman, Anda tidak puas beritahu kami <br> 
							</p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Reservation</a></p>
						</div>
					</div>
				</div>
			</li>
		</ul>
		<div class="slides-navigation">
			<a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
			<a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
		</div>
	</div>
	<!-- End slides -->
	
	<!-- Start QT -->
	<div class="qt-box qt-background">
		<div class="container">
			<div class="row">
				<div class="col-md-8 ml-auto mr-auto text-center">
					<p class="lead ">
						Nikmati dan Rasakan Hidangan Khas Padang di 
					</p>
					<span class="lead">Rumah Makan Sinar Minang Balige</span>
				</div>
			</div>
		</div>
	</div>
	<!-- End QT -->
	
	<!-- Start Menu -->
	<div class="menu-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Menu Promo Hari Ini</h2>
						<p>Our Special Menu</p>
					</div>
				</div>
			</div>
			
			<div class="row inner-menu-box">
			<div class="col-3">
				<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
					<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Makanan</a>
					<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Minuman</a>
					<a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Kue</a>
					<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Lainnya</a>
				</div>
			</div>
				
			<div class="col-9">
				<div class="tab-content" id="v-pills-tabContent">
					<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
						<div class="row">
                            @foreach($data as $datas)
	                            @if ($datas->jenis == "Makanan")
									@if ($datas->promo != 0)
									<div class="col-lg-4 col-md-6 special-grid drinks">
										<div class="gallery-single fix">
        		                            <img src={{ $datas->file }} class="img-fluid" alt="Image">
											<div class="why-text">
												<h5>{{ $datas->nama }}</h5>
												<h6>Rating: {{ $datas->rating }}</h6>
												<h6>Promo: {{ $datas->promo }}%</h6>
												<p></p>
												<h4><font size="2" color="black"><s>Rp {{ $datas->harga }}</s></font> &nbsp;
												Rp {{ ($datas->harga - (($datas->promo/100)*$datas->harga)) }}</h4>
											</div>
										</div>
									</div>
									@endif
        	                    @endif
                            @endforeach
						</div>
					</div>

					<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <div class="row">
                            @foreach($data as $datas)
	                            @if ($datas->jenis == "Minuman")
									@if ($datas->promo != 0)
									<div class="col-lg-4 col-md-6 special-grid drinks">
										<div class="gallery-single fix">
                            		        <img src={{ $datas->file }} class="img-fluid" alt="Image">
    										<div class="why-text">
												<h5>{{ $datas->nama }}</h5>
												<h6>Rating: {{ $datas->rating }}</h6>
												<h6>Promo: {{ $datas->promo }}%</h6>
												<p></p>
												<h4><font size="2" color="black"><s>Rp {{ $datas->harga }}</s></font> &nbsp;
												Rp {{ ($datas->harga - (($datas->promo/100)*$datas->harga)) }}</h4>
											</div>
    									</div>
									</div>
									@endif
	                            @endif
                            @endforeach
						</div>
					</div>

					<div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
						<div class="row">
                            @foreach($data as $datas)
	                            @if ($datas->jenis == "Kue")
									@if ($datas->promo != 0)
									<div class="col-lg-4 col-md-6 special-grid drinks">
	    								<div class="gallery-single fix">
                            		        <img src={{ $datas->file }} class="img-fluid" alt="Image">
		    								<div class="why-text">
												<h5>{{ $datas->nama }}</h5>
												<h6>Rating: {{ $datas->rating }}</h6>
												<h6>Promo: {{ $datas->promo }}%</h6>
												<p></p>
												<h4><font size="2" color="black"><s>Rp {{ $datas->harga }}</s></font> &nbsp;
												Rp {{ ($datas->harga - (($datas->promo/100)*$datas->harga)) }}</h4>
											</div>
    									</div>
									</div>
									@endif
	                            @endif
                            @endforeach
	    				</div>
					</div>

					<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <div class="row">
                            @foreach($data as $datas)
	                            @if ($datas->jenis == "Lainnya")
									@if ($datas->promo != 0)
									<div class="col-lg-4 col-md-6 special-grid drinks">
										<div class="gallery-single fix">
                            	    	    <img src={{ $datas->file }} class="img-fluid" alt="Image">
    										<div class="why-text">
												<h5>{{ $datas->nama }}</h5>
												<h6>Rating: {{ $datas->rating }}</h6>
												<h6>Promo: {{ $datas->promo }}%</h6>
												<p></p>
												<h4><font size="2" color="black"><s>Rp {{ $datas->harga }}</s></font> &nbsp;
												Rp {{ ($datas->harga - (($datas->promo/100)*$datas->harga)) }}</h4>
											</div>
										</div>
									</div>
									@endif
	                            @endif
                            @endforeach
						</div>
                    </div>
		    	</div>
			</div>
        </div>
	</div>
	<!-- End Menu -->
	
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
	
	<!-- Start Customer Reviews -->
	<div class="customer-reviews-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Apa Kata Mereka ?</h2>
						<p>Review dari Pengunjung</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 mr-auto ml-auto text-center">
					<div id="reviews" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner mt-4">
							<div class="carousel-item text-center active">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="{{ asset('image/quotations-button.png') }}" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Tripheni Simanjuntak</strong></h5>
								<h6 class="text-dark m-0">Web Developer</h6>
								<p class="m-0 pt-3"> Makanan disini sangan enak dan direkomendasikan, tempatnya juga nyaman disertai pelayanan yang memuaskan</p>
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="{{ asset('image/quotations-button.png') }}" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Stella Sitinjak</strong></h5>
								<h6 class="text-dark m-0">Full Stack</h6>
								<p class="m-0 pt-3">Makanannya memang sangat khas padang dan juga tempatnya bagus</p>
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="{{ asset('image/quotations-button.png') }}" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Yessi Pangaribuan</strong></h5>
								<h6 class="text-dark m-0">Business Analyst</h6>
								<p class="m-0 pt-3">Service sangat modern dan makanan disini sangat direkomendasikan dengan harga yang terjangkau</p>
							</div>
						</div>
						<a class="carousel-control-prev" href="#reviews" role="button" data-slide="prev">
							<i class="fa fa-angle-left" aria-hidden="true"></i>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#reviews" role="button" data-slide="next">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
							<span class="sr-only">Next</span>
						</a>
                    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Customer Reviews -->
	
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
@endsection