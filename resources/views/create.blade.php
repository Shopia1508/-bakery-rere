<!DOCTYPE html>
<html>
<head>
  <title>Order Kue</title>
  <style>
    body { font-family: Arial; background: #f8f9fa; text-align: center; margin-top: 100px; }
    input, button { padding: 10px; margin: 5px; width: 200px; }
    .msg { color: green; }
  </style>
</head>
<body>
  <h2>Form Order</h2>

  @if(session('success'))
    <p class="msg">{{ session('success') }}</p>
  @endif

  <form method="POST" action="/order">
    @csrf
    <input type="text" name="nama" placeholder="Nama" required><br>
    <input type="text" name="produk" placeholder="Produk" required><br>
    <input type="number" name="jumlah" placeholder="Jumlah" required><br>
    <input type="date" name="tanggal" required><br>
    <input type="text" name="nomor_telepon" placeholder="nomor_telepon" required><br>
    <button type="submit">Order</button>
  </form>
</body>
</html>
