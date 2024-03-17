<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>{{ $title }} | Singer Indonesia</title>

        <link rel="manifest" href="manifest.json">

		{{-- Vendor CSS --}}
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

		<!-- Icon Font Stylesheet -->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

		{{-- Google Fonts --}}
		<link href="https://fonts.googleapis.com" rel="preconnect">
		<link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

		{{-- My CSS --}}
		<link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet">
	</head>
  
	<body>
		{{-- Navbar --}}
		<nav id="main-nav" class="navbar sticky-top navbar-expand-lg navbar-light shadow">
            <div class="container">
                <a class="navbar-brand text-danger" href="/"><strong>Singer Jakarta</strong></a>
                <button class="navbar-toggler border-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav text-center">
                        <li class="nav-item">
                            {{-- <a class="nav-link {{ Request::is('products*') ? 'active' : '' }}" href="/products">Products</a> --}}
                            <a class="nav-link" href="#product">Products</a>
                            <a class="nav-link" href="/login">Login</a>
                        </li>
                        {{-- @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Hello, {{ auth()->user()->username }}
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/dashboard"><i class="fa-solid fa-table-columns me-2"></i>Dashboard</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <form action="/logout" method="post">
                                        @csrf
                                        <button type="submit" class="dropdown-item"><i class="fa-solid fa-right-from-bracket me-2"></i>Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </li>                  
                        @else   
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('logout') ? 'active' : '' }}" href="/login">Login</a>
                        </li>
                        @endauth --}}
                    </ul>
                </div>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav text-center">
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('cekout') ? 'active' : '' }}" aria-current="page" href="/cekout"><i class="fa-solid fa-cart-shopping me-2"></i>Checkout</a>
                        </li>
                    </ul>
                </div>
            </div>
		</nav>
		{{-- End Navbar --}}
        
		<div class="container mt-4">
			@yield('container')
            <a href="https://api.whatsapp.com/send?phone=6281383521987&text=Halo%20Singer" class="float-btn" title="Chat with us">
                <i class="fa-brands fa-whatsapp"></i>
            </a>
		</div>

		{{-- Footer --}}
        <div class="container">
		    <footer id="footer" class="justify-content-center">
                <hr>
                <div class="row justify-content-center text-center mb-3">
                    <span class="header mb-3" style="font-size: 20px">Contact Us</span>
                    <div class="col-12">
                        <a href="sms:081383521987?body=Halo%20Singer Jakarta!" class="me-4">
                            <i class="fa-solid fa-message me-2"></i>081383521987
                        </a>
                        <a href="tel:081383521987" class="me-4">
                            <i class="fa-solid fa-phone me-2"></i>081383521987
                         </a>
                        <a href="https://api.whatsapp.com/send?phone=6281383521987&text=Halo%20Singer Jakarta!" class="me-4" target="blank">
                            <i class="fa-brands fa-whatsapp me-2"></i>+62 81383521987
                        </a>
                        <a href="mailto:singertalent15@gmail.com" class="me-4">
                            <i class="fa-solid fa-envelope me-2"></i>singertalent15@gmail.com
                        </a>
                    </div>
                </div>
                <div class="text-center mb-3">
                    <a href="https://www.singerjakarta.com">Singer Jakarta - Toko Online Termurah & Terpercaya Menjual Produk Resmi Mesin Jahit Singer Portable </a>
                </div>
		    </footer>
        </div>
	    {{-- End Footer --}}

		{{-- Javascript Libraries --}}
		<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script src="{{ asset('js/script.js') }}"></script>
        
        <!-- Global site tag (gtag.js) - Google Analytics -->
	    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-176396517-1"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDRmHyVO4k9KooN1_FGl8sZgNktmT9UlSY&callback=initMap" sasync defer></script>

	</body>
</html>