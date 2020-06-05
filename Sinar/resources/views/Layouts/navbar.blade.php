<header class="top-navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
        <img src="{{ asset('image/logoputih.jpg') }}" width="200"> 
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbars-rs-food">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/menu">Menu</a></li>
                    <li class="nav-item"><a class="nav-link" href="/gallery">Gallery</a></li>
                    @if (Auth::guest())
                        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Daftar</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Masuk</a></li>
                    @elseif (Auth::user()->name == "Admin")
					<li class="nav-item"><a class="nav-link" href="/promo">Promo</a></li>

					<li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" id="dropdown-a" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
						<div class="dropdown-menu" aria-labelledby="dropdown-a">
                            <a class="dropdown-item" href="#">Laporan Keuangan</a>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
						</div>
					</li>
                    @else
    				<li class="nav-item"><a class="nav-link" href="/gallery">Gallery</a></li>
    				<li class="nav-item"><a class="nav-link" href="/cart">Cart</a></li>

					<li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" id="dropdown-a" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
						<div class="dropdown-menu" aria-labelledby="dropdown-a">
                            <a class="dropdown-item" href="/reservation">Reservation</a>
                            <a class="dropdown-item" href="#">Dashboard</a>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
						</div>
					</li>
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