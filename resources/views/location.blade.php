@extends('layout')

@section('title', 'Location')

@section('content')
<div class="bg-gray-100 min-h-screen pt-[100px]">


    {{-- Google Maps Embed --}}
    <section class="w-full pt-5 mt-5">
    <div class="w-full h-[100px]">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.743902913968!2d106.8655392!3d-6.678616799999985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c90864ab23db%3A0xbad6d49b7393afd!2sRere%20cake%20n%20Cookies!5e0!3m2!1sid!2sid!4v1760244011078!5m2!1sid!2sid&z=30"
      width="100%"
      height="100%"
      style="height: 700px; border:0; pointer-events:none display:block; margin:0 auto"
      allowfullscreen=""
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade">
    </iframe>
    </div>
    </section>


    {{-- Alamat --}}
    <div class="text-center mt-4 text-gray-700" style="font-size: 20px; font-weight: bold; line-height: 1.5;">
        <p>Rere Cake n Cookies, Jl. Veteran III, Banjar Sari, Kec. Ciawi, Kabupaten Bogor, Jawa Barat 16720</p>
    </div>



    
