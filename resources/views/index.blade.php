<!DOCTYPE html>
<html>
<head>
  <title>Data Harian Order</title>
  <style>
    body { font-family: Arial; background: #f8f9fa; padding: 20px; }
    table { border-collapse: collapse; width: 100%; background: white; }
    th, td { border: 1px solid #ccc; padding: 8px; text-align: center; }
    th { background: #eee; }
    tr:hover { background: #f2f2f2; }
    h2 { text-align: center; }
  </style>
</head>
<body>
  <h2>Data Harian Order</h2>
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Produk</th>
        <th>Jumlah</th>
        <th>Tanggal</th>
      </tr>
    </thead>
    <tbody>
      @foreach($orders as $order)
      <tr>
        <td>{{ $order->id }}</td>
        <td>{{ $order->nama }}</td>
        <td>{{ $order->produk }}</td>
        <td>{{ $order->jumlah }}</td>
        <td>{{ $order->tanggal }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</body>
</html>
