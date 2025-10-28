@extends('layout')

@section('content')

{{-- Banner --}}
<section class="banner">
  <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="2000">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('images/banners1.jpeg') }}" class="d-block w-100" alt="Banners 1">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/banners2.jpg') }}" class="d-block w-100" alt="Banners 2">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/banners3.jpg') }}" class="d-block w-100" alt="Banners 3">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/banners4.jpeg') }}" class="d-block w-100" alt="Banners 4">
      </div>
    </div>

    <!-- Teks tetap -->
    <div class="banner-text text-start">
      <p>
        SweetBite – Cita Rasa Premium di Setiap Gigitan.
        Kami menghadirkan kue istimewa yang dibuat dari bahan terbaik,
        sempurna untuk setiap momen berharga dalam hidupmu. ✨
      </p>
      <a href="{{ route('products') }}" class="btn-order" >Pesan Sekarang</a>
    </div>
  </div>
</section>

<!-- Hero Section -->
<div class="hero">
  <div class="hero-text">
    <h2>
      <span style="color: #5a3b00" data-aos="fade-right">SWEET BITE </span><br>
      <span style="color: #e1a22c" data-aos="fade-right">CAKE &COOKIES</span>
    </h2>
    <p data-aos="zoom-in-up">
      SweetBite Cakes & Cookies — pusat kue ulang tahun, aneka cake, bolu, <br>
      dan roti setiap hari. Praktis, lezat, dan cocok untuk semua perayaan.
    </p>
  </div>

  <div class="hero-img">
    <img src="{{ asset('images/toko.jpeg') }}" alt="toko" class="float-img">
  </div>
</div>

{{-- Service --}}
<section class="sec service" id="services">
  <div class="head">
    <h1 class="heading_1" data-aos="fade-down">Layanan kami</h1>
  </div>
  <div class="boxes">
    <div class="box">
      <img src="{{ asset('images/delivery.png') }}" alt="">
      <h4>Pengiriman cepat</h4>
      <p>Pengiriman selalu tepat waktu</p>
    </div>
    <div class="box">
      <img src="{{ asset('images/cake.png') }}" alt="">
      <h4>Bisa custom cake</h4>
      <p>Buat kue unikmu sendiri sesuai keinginanmu</p>
    </div>
    <div class="box">
      <img src="{{ asset('images/order.png') }}" alt="">
      <h4>Mudah dipesan</h4>
      <p>Hanya beberapa langkah untuk memesan kue sesuai keinginanmu</p>
    </div>
  </div>
</section>

{{-- Kategori --}}
<section class="kategori py-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-3 mb-4 mb-md-0">
        <h2 data-aos="fade-right">Kategori</h2>

      </div>

      <div class="col-md-9">
        <div id="multiCardCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
          <div class="carousel-inner">

            <!-- Slide 1 -->
            <div class="carousel-item active">
              <div class="row justify-content-center">
                <div class="col-md-4">
                  <div class="card">
                    <img src="{{ asset('images/birthdaycake.jpeg') }}" alt="">
                    <div class="card-body">
                      <h5 class="card-title">Birthday Cake</h5>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card">
                    <img src="{{ asset('images/brownies.jpeg') }}" alt="">
                    <div class="card-body">
                      <h5 class="card-title">Brownies</h5>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card">
                    <img src="{{ asset('images/bentocake.jpeg') }}" alt="">
                    <div class="card-body">
                      <h5 class="card-title">Bento Cake</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
              <div class="row justify-content-center">
                <div class="col-md-4">
                  <div class="card">
                    <img src="{{ asset('images/bolu.jpeg') }}" alt="">
                    <div class="card-body">
                      <h5 class="card-title">Bolu</h5>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card">
                    <img src="{{ asset('images/desertbox.jpeg') }}" alt="">
                    <div class="card-body">
                      <h5 class="card-title">Dessert Box</h5>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card">
                    <img src="{{ asset('images/nastar.jpeg') }}" alt="">
                    <div class="card-body">
                      <h5 class="card-title">Dry Cake</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <!-- Tombol navigasi -->
          <button class="carousel-control-prev" type="button" data-bs-target="#multiCardCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#multiCardCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
          </button>

        </div>
      </div>
    </div>
  </div>
</section>

{{-- Review --}}
<section class="testimonials-section">
  <h1 class="section-title" data-aos="fade-up"   data-aos-offset="200" data-aos-duration="1000">R<span>E</span>V<span>I</span>E<span>W</span></h1>
  <div class="section-content">
    <div class="slider-container">
      <div class="slider-wrapper">
        <ul class="testimonials-list">
          <li class="testimonial">
            <img src="{{ asset('images/salma.jpeg') }}" alt="User" class="user-image">
            <h3 class="name">Salma Salsabil</h3>
            <i class="feedback">"Loved the brownies. Perfectly balanced and rich. Will order again."</i>
          </li>
          <li class="testimonial">
            <img src="{{ asset('images/salma 2.jpeg') }}" alt="User" class="user-image">
            <h3 class="name">Alya Putri</h3>
            <i class="feedback">"Cakenya lembut banget, manisnya pas!"</i>
          </li>
          <li class="testimonial">
            <img src="{{ asset('images/salma3.jpeg') }}" alt="User" class="user-image">
            <h3 class="name">Carissa Nur</h3>
            <i class="feedback">"Desain kuenya lucu banget, cocok buat hadiah!"</i>
          </li>
          <li class="testimonial">
            <img src="{{ asset('images/salma.jpeg') }}" alt="User" class="user-image">
            <h3 class="name">Salmine Bakery</h3>
            <i class="feedback">"Best seller banget! Semua suka browniesnya."</i>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

@endsection

@section('scripts')
<script>
  const myCarousel = document.querySelector('#heroCarousel');
  const carousel = new bootstrap.Carousel(myCarousel, {
    interval: 3000, // dipercepat dari 5000 ke 3000
    ride: 'carousel',
    pause: false
  });

  AOS.init({
    once: true,
    duration: 800,
    offset: 0
  });
</script>
@endsection
