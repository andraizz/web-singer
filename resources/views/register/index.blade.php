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
                    <div class="card shadow rounded-3">
                        <div class="card-body p-4 p-sm-5">
                            <h4 class="text-center mb-4">Registration</h4>
                            <form action="/register" method="post">
                                @csrf
                                <div class="form-floating mb-3">
                                    <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
                                    <label for="username">Username</label>
                                    @error('username')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com" required value="{{ old('email') }}">
                                    <label for="email">Email address</label>
                                    @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                                    <label for="password">Password</label>
                                    @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="d-grid">
                                    <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Register</button>
                                </div>
                            </form>
                            <small class="d-block text-center mt-2">Already Registered? <a href="/login">Login</a></small>
                            <small class="d-block text-center mt-2"><a href="/">back to singer</a></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Javascript Libraries --}}
		<script src="js/script.js"></script>

	</body>
</html>