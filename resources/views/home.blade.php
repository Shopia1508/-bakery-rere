@extends('layout')

@section('content')

    <div class="slider-container">
        <div class="wrapper">
            <div class="wrapper-holder">
                <div id="slider-img-1"></div>
                <div id="slider-img-2"></div>
                <div id="slider-img-3"></div>
                <div id="slider-img-4"></div>
            </div>
        </div>
    
            <div class="button-holder">
            <a href="#slider-img-1" class="button"></a>
            <a href="#slider-img-2" class="button"></a> 
            <a href="#slider-img-3" class="button"></a>
            <a href="#slider-img-4" class="button"></a>
                  
            </div>
        </div>
    <!--Hero Section-->
<div class="hero">
    <div class="hero-text">
        <h2>
            <span style="color: #5a3b00" data-aos="fade-down" data-aos-duration="2500">SWEET BITE </span><br> 
            <span style="color: #e1a22c" data-aos="fade-down" data-aos-duration="2500">CAKE & COOKIES</span>
        </h2>
        <p> SweetBite Cakes & Cookies — pusat kue ulang tahun, aneka cake, bolu, <br>dan roti setiap hari. 
            Praktis, lezat, dan cocok untuk semua perayaan.</p>
        </div>
        <div class="hero-img"> 
            <h3 data-aos="fade-down" data-aos-duration="2500"> "Handmade with love <br> Tasted with joy." </h3> 
            <img src="{{ asset('images/toko.jpeg') }}" alt="toko" class="float-img">
    </div>
    </div>
</div>

  
<!--Kategori-->
<div class="kategori">
  <div class="container-fluid mt-3">
    <div class="kategori-text">
        <h1>K <span> A<span> T<span> E<span> G <span>O <span>R <span> I</span> </h1>
    </div>

    <div class="row">
        <!-- Birthday Cake -->
        <div class="col-md-4 mb-4">
            <div class="custom-card card shadow-sm">
              <img src="{{ asset('images/birthdaycake.jpeg') }}" class="card-img-top" alt="Birthday Cake">
              <div class="card-body text-center">
                <h5>Birthday Cake</h5>
              </div>
            </div>
        </div>

        <!-- Brownies -->
        <div class="col-md-4 mb-4">
            <div class="custom-card card shadow-sm">
              <img src="{{ asset('images/brownies.jpeg') }}" class="card-img-top" alt="Brownies">
              <div class="card-body text-center">
                <h5 class="card-title">Brownies</h5>
              </div>
            </div>
        </div>

        <!-- Bento Cake -->
        <div class="col-md-4 mb-4">
            <div class="custom-card card shadow-sm">
              <img src="{{ asset('images/bentocake.jpeg') }}" class="card-img-top" alt="Bento Cake">
              <div class="card-body text-center">
                <h5 class="card-title">Bento Cake</h5>
              </div>
            </div>
        </div>

        <!-- Bolu -->
        <div class="col-md-4 mb-4">
            <div class="custom-card card shadow-sm">
              <img src="{{ asset('images/bolu.jpeg') }}" class="card-img-top" alt="Bolu">
              <div class="card-body text-center">
                <h5 class="card-title">Bolu</h5>
              </div>
            </div>
        </div>

        <!-- Dessertbox -->
        <div class="col-md-4 mb-4">
            <div class="custom-card card shadow-sm">
              <img src="{{ asset('images/desertbox.jpeg') }}" class="card-img-top" alt="Dessertbox">
              <div class="card-body text-center">
                <h5 class="card-title">Dessert box</h5>
              </div>
            </div>
        </div>

        <!-- Dry Cake -->
        <div class="col-md-4 mb-4">
            <div class="custom-card card shadow-sm">
              <img src="{{ asset('images/nastar.jpeg') }}" class="card-img-top" alt="Dry Cake">
              <div class="card-body text-center">
                <h5 class="card-tittle">Dry Cake</h5>
              </div>
            </div>
        </div>
    </div>
  </div>
</div>

<div class="kategori">
  <div class="container mt-3">
    <div class="kategori-text">
        <h1>R<span> E<span> V<span> I<span> E <span>W  </h1>
          <div class="underline"></div>
    </div>

    <div class="container my-5">
  
  <div class="row text-center justify-content-center align-items-stretch">
  
    
    <!-- Review /testimoni -->
    <!-- Bagian Testimonials -->
<section class="testimonials-section">
  <h2 class="section-title"></h2>
  <div class="section-content">
    <div class="slider-container">
      <div class="slider-wrapper">
        <ul class="testimonials-list">
          
          <!-- Testimoni 1 -->
          <li class="testimonial">
            <img src="{{asset('images/salma.jpeg')}}" alt="User" class="user-image">
            <h3 class="name">Salma Salsabil</h3>
            <i class="feedback">"Loved the brownies. Perfectly balanced and rich. Will order again."</i>
          </li>

          <!-- Testimoni 2 -->
          <li class="testimonial">
            <img src="{{asset('images/salma 2.jpeg')}}" alt="User" class="user-image">
            <h3 class="name">Alya Putri</h3>
            <i class="feedback">"Cakenya lembut banget, manisnya pas!"</i>
          </li>

          <!-- Testimoni 3 -->
          <li class="testimonial">
            <img src="{{asset('images/salma3.jpeg')}}" alt="User" class="user-image">
            <h3 class="name">Carissa Nur</h3>
            <i class="feedback">"Desain kuenya lucu banget, cocok buat hadiah!"</i>
          </li>

          <!-- Testimoni 4 -->
          <li class="testimonial">
            <img src="{{asset('images/salma.jpeg')}}" alt="User" class="user-image">
            <h3 class="name">Salmine Bakery</h3>
            <i class="feedback">"Best seller banget! Semua suka browniesnya."</i>
          </li>

        </ul>
      </div>
    </div>
  </div>
</div>
    </div>
</section>

  <footer class="footer py-5 text-white">
  <div class="container-fluid px-5">
    <div class="row justify-content-between">
      
      <!-- Kolom 1 -->
      <div class="col-md-4 mb-3">
        <h5 class="fw-bold">SWEET BITE CAKE</h5>
        <p class="mt-3">
          "Nikmati kue lembut dengan bahan berkualitas, desain cantik, dan rasa manis pas, cocok untuk hadiah maupun momen istimewa."
        </p>
      </div>

      <!-- Kolom 2 -->
      <div class="col-md-3 mb-3">
        <h5 class="fw-bold">Menu</h5>
        <ul class="list-unstyled mt-3">
          <li><a href="#" class="footer-link text-white text-decoration-none">Home</a></li>
          <li><a href="#" class="footer-link text-white text-decoration-none">About us</a></li>
          <li><a href="#" class="footer-link text-white text-decoration-none">Produk</a></li>
          <li><a href="#" class="footer-link text-white text-decoration-none">FAQ</a></li>
        </ul>
      </div>

      <!-- Kolom 3 -->
      <div class="col-md-3 mb-3">
        <h5 class="fw-bold">Contact</h5>
        <ul class="list-unstyled mt-3">
          <li><a href="#" class="footer-link text-white text-decoration-none">Contact Us</a></li>
          <li><a href="#" class="footer-link text-white text-decoration-none">Location Us</a></li>
        </ul>

        <div class="social-icons mt-3">
          <a href="#" class="me-3 text-white"><i class="fab fa-tiktok"></i></a>
          <a href="#" class="me-3 text-white"><i class="fab fa-whatsapp"></i></a>
          <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
        </div>
      </div>

    </div>
  </div>
</footer>

       
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({
    once: true,        
    duration: 800,    
    offset: 0         
  });
</script>
@endsection
