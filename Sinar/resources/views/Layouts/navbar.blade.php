<header class="top-navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
        <img src="{{ asset('image/logoputih.jpg') }}" width="200"> 
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbars-rs-food">
				<ul class="navbar-nav ml-auto">
                    @if (Session::get('login'))
                        @if (Session::get('email') == "admin@gmail.com")
                            <li class="nav-item"><a class="nav-link" href="/menu">Home</a></li>
        	    			<li class="nav-item"><a class="nav-link" href="/gallery">Gallery</a></li>
    	        			<li class="nav-item"><a class="nav-link" href="/promo">Edit Promo</a></li>
    	        			<li class="nav-item"><a class="nav-link" href="/laporan-keuangan">Laporan</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Admin</a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <!-- <a class="dropdown-item" href="#">Profil</a> -->
                                        <a class="dropdown-item" href="/register-pegawai">Registrasi Pegawai</a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">Logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                        </form>
                                    </div>
                                </div>
                            </li>
                        @elseif (Session::get('role') == "Kasir")
        	    			<li class="nav-item"><a class="nav-link" href="/billing">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="/menu">Menu</a></li>
    	        			<li class="nav-item"><a class="nav-link" href="/reservation">Reservation</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">{{ Session::get('nama') }}</a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <!-- <a class="dropdown-item" href="#">Profil</a> -->
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">Logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                        </form>
                                    </div>
                                </div>
                            </li>
                        @elseif (Session::get('role') == "Inventory/Chef")
        	    			<li class="nav-item"><a class="nav-link" href="/stok">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="/menu">Menu</a></li>
    	        			<li class="nav-item"><a class="nav-link" href="/resep">Resep</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">{{ Session::get('nama') }}</a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <!-- <a class="dropdown-item" href="#">Profil</a> -->
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">Logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                        </form>
                                    </div>
                                </div>
                            </li>
                        @else
    					    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="/menu">Menu</a></li>
        	    			<li class="nav-item"><a class="nav-link" href="/gallery">Gallery</a></li>
    	        			<li class="nav-item"><a class="nav-link" href="/booking">Reservation</a></li>
		        			<li class="nav-item"><a class="nav-link" href="/cart">Cart</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">{{ Session::get('nama') }}</a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="/rating">Rating</a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">Logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                        </form>
                                    </div>
                                </div>
                            </li>
                        @endif
                    @else
    					<li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="/menu">Menu</a></li>
    	    			<li class="nav-item"><a class="nav-link" href="/gallery">Gallery</a></li>
        				<li class="nav-item"><a class="nav-link" href="/register">Daftar</a></li>
                        <li class="nav-item"><a class="nav-link" href="/login">Masuk</a></li>
                    @endif
        		</ul>
    		</div>
		</div>
	</nav>
</header>

<!-- Start All Pages -->
<div class="all-page-title page-breadcrumb">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-12">
                <h1>@yield('head')</h1>
            </div>
        </div>
    </div>
</div>
<!-- End All Pages -->