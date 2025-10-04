@extends('layout')

@section('content')

<!--Hero Section-->
<div class="hero">
    <div class="hero-img">
    <div class="container">
        <div class="wrapper">
            <div class="wrapper-holder">
                <div id="slider-img-1" ></div>
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
    </div>
    </div>
    
    <div class="hero-text">
        <h2>SWEET BITE <br> CAKE & COOKIES </h2>
        <p> SweetBite Cakes & Cookies — pusat kue ulang tahun, aneka cake, bolu, <br>dan roti setiap hari. 
            Praktis, lezat, dan cocok untuk semua perayaan.</p>
        <button>HAPPY SHOPPING!</button>
    </div>
    <div class="hero-img">
        
        
    </div>
</div>
  
<!--Kategori-->
<div class="kategori">
  <div class="container mt-3">
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
