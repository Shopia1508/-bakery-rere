@extends('layout')

@section('content')
<div class="about-container">

    <h2 class="about-title">About Us </h2>
    <div class="title-underline"></div>

    <div class="about-image">
        <img src="{{ asset('images/toko caffe.jpg') }}" alt="About CoffeeShop">
    </div>

    <p class="about-text">
        CoffeShop ini memulai perjalanan pada tahun 2022, berawal dari ide sederhana 
        untuk menghadirkan tempat yang hangat dan nyaman. Dari proses meracik kopi hingga
        menyiapkan ruangannya, semuanya tumbuh perlahan hingga akhirnya menjadi CoffeShop yang 
        dapat di nikmati siapa saja. Setiap cangkir yang tersaji membawa sedikit cerita dari langkah awal kami di tahun 2022.
    </p>

</div>
@endsection