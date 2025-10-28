@extends('layout')

@section('content')
<section class="order-section">
  <div class="container">
    <div class="order-card">
      <h2 class="order-title">
        <i class="fa-solid fa-cake-candles cake-fa"></i>
        Form Pemesanan
      </h2>

      {{-- INFORMASI TOKO --}}
      <div class="order-info">
        <p><i class="fa-solid fa-clock"></i> <strong>Jam Buka:</strong> 08.00 - 20.00 WIB</p>
        <p><i class="fa-brands fa-whatsapp"></i> <strong>WA:</strong> 0812-3456-7890</p>
        <p><i class="fa-solid fa-location-dot"></i> <strong>Alamat:</strong> Jl. Veteran III, Banjar Sari, Kec. Ciawi, Kabupaten Bogor, Jawa Barat 16720</p>
        <hr>
      </div>

      {{-- PESANAN FORM --}}
      <form method="POST" action="/order">
        @csrf
        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan nama kamu" required>
        </div>

        <div class="mb-3">
          <label for="produk" class="form-label">Produk</label>
          <input type="text" name="produk" id="produk" class="form-control" placeholder="Nama produk kue" required>
        </div>

        <div class="mb-3">
          <label for="jumlah" class="form-label">Jumlah</label>
          <input type="number" name="jumlah" id="jumlah" class="form-control" placeholder="Jumlah pesanan" required>
        </div>

        <div class="mb-3">
          <label for="tanggal" class="form-label">Tanggal Pengambilan</label>
          <input type="date" name="tanggal" id="tanggal" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-order">Pesan Sekarang</button>
      </form>
    </div>
  </div>
</section>
@endsection
