<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Dashboard | Singer Jakarta</title>

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

        {{-- Trix Editor --}}
        <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
        <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>

        <style>
            trix-toolbar [data-trix-button-group="file-tools"] {
                display: none;
            }
        </style>
	</head>
  
	<body>
        <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
            <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="/">Singer Jakarta</a>
            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
            <div class="navbar-nav">
                <div class="nav-item text-nowrap">
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="nav-link px-3 bg-dark border-0">Logout <i class="fa-solid fa-right-from-bracket"></i></button>
                    </form>
                </div>
            </div>
        </header>

        <div class="container-fluid">
            <div class="row">
                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
                    <div class="position-sticky pt-3 sidebar-sticky">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                                    <i class='bx bx-home-smile me-2'></i>Dashboard
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('dashboard/products*') ? 'active' : '' }}" href="/dashboard/products">
                                    <i class='bx bx-file me-2'></i>Data Produk
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    @yield('container')
                </main>
            </div>
        </div>

        {{-- Javascript Libraries --}}
		<script src="js/script.js"></script>

	</body>
</html>