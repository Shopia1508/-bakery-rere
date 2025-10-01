<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Bakery</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
   
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}" style="color: white">SWEET BITE CAKE & COOKIES</a> 
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('products') }}">Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('faq') }}">FAQ</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('location') }}">Location</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('order') }}">Order</a></li>
                </ul>
            </div>
        </div>
    </nav>
    

    <!-- Konten Halaman -->
    <div class="container mt-4">
        @yield('content')
          <!--Hero Section-->
          <div class="hero">
            <div class="hero-text">
                <h2>SWEET BITE <br> CAKE & COOKIES </h2>
                <p> SweetBite Cakes & Cookies — pusat kue ulang tahun, aneka cake, bolu, <br>dan roti setiap hari. 
                    Praktis, lezat, dan cocok untuk semua perayaan.</p>
                <button>HAPPY SHOPPING!</button>
            </div>
            <div class="hero-img">
                <h3>"Handmade with love <br> Tasted with joy."</h3> 
                <img src="{{ asset('images/berrys.jpeg') }}" alt="berrys" width="300" class="float-img" >

            </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
