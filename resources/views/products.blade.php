@extends('layout')

@section('content')
     <div class="products">
        <div class="products-text">
            <h1 class="text-4xl font-bold text-blue-500 text-center mt-10">
                Halo, Tailwind 4 sudah aktif! 💨
              </h1>
        <div class="btn-products">
            <a href="" class="btn">Birthday cake</a>
            <a href="" class="btn">Brownies</a>
            <a href="" class="btn">Bento cake</a>
            <a href="" class="btn">Dessert box</a>
            <a href="" class="btn">Bolu</a>
            <a href="" class="btn">Dry cake</a>
        </div>
</div>
<div class="products-card">
    <img src="{{ asset('images/toko.jpeg') }}" alt="toko">
     <h4>Bolu pandan</h4>
     <div>
        <span>Rp.50.000</span>
        <button>+</button>
     </div>
</div>
</div>             
@endsection
