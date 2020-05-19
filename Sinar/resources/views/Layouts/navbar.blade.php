<header class="top-navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
        <img src="{{ asset('image/logoputih.jpg') }}" width="200"> 
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbars-rs-food">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a class="nav-link" href="/home">Home</a></li>
					<li class="nav-item"><a class="nav-link" href="/menu">Menu</a></li>
					<li class="nav-item"><a class="nav-link" href="/daftar-pesanan">Daftar Pesanan</a></li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Pages</a>
						<div class="dropdown-menu" aria-labelledby="dropdown-a">
							<a class="dropdown-item" href="/reservation">Reservation</a>
							<a class="dropdown-item" href="/gallery">Gallery</a>
						</div>
					</li>
                    @if (Auth::guest())
    				<li class="nav-item"><a class="nav-link" href="/register">Register</a></li>
                    <li class="nav-item"><a class="nav-link" href="/login">Masuk</a></li>
                    @else
                    <li class="nav-item">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }}
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                                </form>
                                <a class="dropdown-item" href="#">Dashboard</a>
                                <a class="dropdown-item" href="/cart">Menu Cart</a>
                            </div>
                        </div>
                    </li>
                    @endif
        		</ul>
    		</div>
		</div>
	</nav>
</header>
