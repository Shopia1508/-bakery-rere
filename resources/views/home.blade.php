@extends('layout')

@section('content')

 
    {{--banner--}}
    <section class="banner">
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
    </section>

  <!--Hero Section-->
<div class="hero">
  <div class="hero-text">
      <h2>
        <span style="color: #5a3b00">SWEET BITE </span><br> 
        <span style="color: #e1a22c">CAKE&COOKIES</span>
      </h2>
      <p>
        SweetBite Cakes & Cookies — pusat kue ulang tahun, aneka cake, bolu, <br>
        dan roti setiap hari. Praktis, lezat, dan cocok untuk semua perayaan.
      </p>
    </div>
  
    <div class="hero-img"> 
      <h3>"Handmade with love <br> Tasted with joy."</h3> 
      <img src="{{ asset('images/toko.jpeg') }}" alt="toko" class="float-img">
    </div>
  </div>

  {{--kategori--}}
  <section class="kategori">
  <div class="kategori">
  <div class="container-py-5">
    <div class="row align-items-center">

    <div class="col-md-3 mb-4 mb-md-0">
      <h2>Kategori</h2>
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
                  <h5 class="card-tittle">Birthday Cake</h5>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <img src="{{ asset('images/brownies.jpeg') }}" alt="">
                <div class="card-body">
                  <h5 class="card-tittle">Brownies</h5>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <img src="{{ asset('images/bentocake.jpeg') }}" alt="">
                <div class="card-body">
                  <h5 class="card-tittle">Bento Cake</h5>
                </div>
              </div>
            </div>
          </div>
         </div>

         <!-- Slide 2 -->
        <div class="carousel-item">
          <div class="row justify-items-center">
            <div class="col-md-4">
              <div class="card">
                <img src="{{ asset('images/bolu.jpeg') }}" alt="">
                <div class="card-body">
                  <h5 class="card-tittle">Bolu</h5>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <img src="{{ asset('images/desertbox.jpeg') }}" alt="">
                <div class="card-body">
                  <h5 class="card-tittle">Dessert Box</h5>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <img src="{{ asset('images/nastar.jpeg') }}" alt="">
                <div class="card-body">
                  <h5 class="card-tittle">Dry Cake</h5>
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
    </div>
  </section>

<div class="review">
  <div class="container mt-3">
    <div class="container my-5">
  <div class="row text-center justify-content-center align-items-stretch">
    <!-- Review /testimoni -->
    <!-- Bagian Testimonials -->
<section class="testimonials-section">
  <h1 class="section-title">R<span> E<span> V<span> I<span> E <span>W  </span></h1>
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
    </section>
 
  

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({
    once: true,        
    duration: 800,    
    offset: 0         
  });
</script>
@endsection
