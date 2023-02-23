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
		<link href="css/style.css" type="text/css" rel="stylesheet">
	</head>
  
	<body>
        <div class="container my-5">
            <div class="row">
                <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">

                    @if(session()->has('success'))
                    <div class="alert alert-success d-flex align-items-center mt-3" role="alert">
                        <i class="fa-regular fa-circle-check me-2"></i><div>{{ session('success') }}</div>
                    </div>
                    @endif

                    @if(session()->has('loginError'))
                    <div class="alert alert-danger d-flex align-items-center mt-3" role="alert">
                        <i class="fa-regular fa-circle-check me-2"></i><div>{{ session('loginError') }}</div>
                    </div>
                    @endif

                    <div class="card shadow rounded-3">
                        <div class="card-body p-4 p-sm-5">
                            <h4 class="text-center mb-4">Login Singer Jakarta</h4>
                            <form action="/login" method="post">
                                @csrf
                                <div class="form-floating mb-3">
                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                                    <label for="email">Email address</label>
                                    @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                                    <label for="password">Password</label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                                    <label class="form-check-label" for="rememberPasswordCheck">Remember password</label>
                                </div>
                                <div class="d-grid">
                                    <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Log in</button>
                                </div>
                            </form>
                            <small class="d-block text-center mt-2">Not Registered? <a href="/register">Register Now!</a></small>
                            <small class="d-block text-center mt-2"><a href="/">back to Singer</a></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Javascript Libraries --}}
		<script src="js/script.js"></script>

	</body>
</html>