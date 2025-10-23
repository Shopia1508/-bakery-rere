@extends('layout')

@section('title', 'Location')

@section('content')
<div class="bg-gray-100 min-h-screen pt-[100px]">

  <!-- CONTACT SECTION -->
  <div class="container py-5">
    <h2 class="text-center fw-bold mb-5 mt-5">CONTACT US</h2>

    <div class="row">
      <!-- LEFT: Form -->
      <div class="col-md-6 mb-4">
        <h4 class="fw-bold mb-3">Get In Touch</h4>
        <form>
          <div class="mb-3">
            <input type="text" class="form-control" placeholder="Your Name" required>
          </div>
          <div class="mb-3">
            <input type="email" class="form-control" placeholder="Your Email" required>
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" placeholder="Phone Number">
          </div>
          <div class="mb-3">
            <textarea class="form-control" rows="4" placeholder="Your Message"></textarea>
          </div>
          <button type="submit" class="btn btn-coklat px-4">Submit</button>
        </form>
      </div>

      <!-- RIGHT: Address -->
      <div class="col-md-6">
        <h4 class="fw-bold mb-3">Address</h4>
        <div class="contact-info mb-4">
          <p><i class="bi bi-geo-alt"></i> Jl. Veteran III, Banjar Sari, Kec. Ciawi, Kabupaten Bogor, Jawa Barat 16720</p>
          <p><i class="bi bi-telephone"></i> 0877-7502-9366</p>
          <p><i class="bi bi-envelope"></i> info@rerecake.id</p>
        </div>

        {{-- Google Maps Embed --}}
        <section class="w-full pt-3">
          <div class="w-full">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.743902913968!2d106.8655392!3d-6.678616799999985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c90864ab23db%3A0xbad6d49b7393afd!2sRere%20cake%20n%20Cookies!5e0!3m2!1sid!2sid!4v1760244011078!5m2!1sid!2sid"
              width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy">
            </iframe>
          </div>
        </section>
      </div>
    </div>
  </div>
</div>
@endsection
