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

<h1 class="vismis-title">Visi & Misi</h1>
<div class="vismis-container">
    <div class="vismis-card">
        <div class="vismis-box">
            <div class="vismis-content">
                <h2>01</h2>
                <h3>Visi</h3>
                <p>
                    Menjadi ruang kopi yang menghadirkan kehangatan, kualitas, dan keindahan dalam setiap pengalaman; 
                    menjadi destinasi yang menginspirasi, memberdayakan komunitas, serta merayakan seni dalam setiap cangkir.
                </p>
            </div>
        </div>
    </div>
    <div class="vismis-card">
        <div class="vismis-box">
            <div class="vismis-content">
                <h2>02</h2>
                <h3>Misi</h3>
                <ul class="vismis-list">
                    <li>Menyajikan kopi berkualitas tinggi melalui pemilihan biji terbaik dan proses peracikan yang teliti.</li>
                    <li>Menciptakan suasana yang hangat dan estetis, sehingga setiap kunjungan menjadi pengalaman yang berkesan.</li>
                    <li>Memberikan pelayanan ramah dan penuh perhatian kepada setiap pelanggan.</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="about-section">
    <div class="about-image">
        <img src="{{ asset('images/Mocha.jpg') }}" alt="Cofffe and Cake">

    </div>

    <div class="about-right">
        <p>
            Setiap cangkir kopi yang kami adalah hasil dari perhatian kecil yang kami
            berikan pada detail dari pemilihan biji hingga cara menyeduhnya. Karena bagi kami,
            kopi bukan sekedar minuman, melainkan teman yang menemani cerita, menghangatkan
            suasana, dan membawa kenyamanan dalam setiap tegukan.
        </p>
    </div>

</div>

@endsection