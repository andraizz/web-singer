<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }} | Singer Indonesia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <nav id="main-nav" class="navbar sticky-top navbar-expand-lg navbar-light bg-white shadow">
      <div class="container">
        <a class="navbar-brand mb-0" href="/">
          <img src="https://singerindonesia.com/assets/img/logo.png" class="logo img-fluid" alt="Singer Indonesia" width="200px">
        </a>
        <button class="navbar-toggler border-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav ml-auto py-4 py-lg-0 text-center text-lg-left">
            <li class="nav-item">
              <a class="nav-link {{ ($title === "About") ? 'active' : '' }}" href="/about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ($title === "Products") ? 'active' : '' }}" href="/products">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ($title === "Sewing Club") ? 'active' : '' }}" href="/club">Sewing Club</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ($title === "Our Dealer") ? 'active' : '' }}" href="/dealer">Our Dealer</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ($title === "Service Center") ? 'active' : '' }}" href="/service">Service Center</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
      <div class="container mt-4">
        @yield('container')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>