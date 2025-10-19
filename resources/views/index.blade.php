<!DOCTYPE html>
<html>
<head>
  <title>Data Harian Order</title>
  <style>
    body { font-family: Arial; margin: 40px; background: #fff; }
    table { border-collapse: collapse; width: 100%; }
    th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
    tr:nth-child(even) { background: #f9f9f9; }
  </style>
</head>
<body>
  <h2>Data Order Harian</h2>

  @if(session('success'))
    <p style="color: green">{{ session('success') }}</p>
  @endif

  <table>
    <tr>
      <th>Nama Pembeli</th>
      <th>Produk</th>
      <th>Jumlah</th>
      <th>Total Harga</th>
      <th>Tanggal</th>
      <th>Aksi</th>
    </tr>
    @foreach($orders as $o)
      <tr>
        <td>{{ $o->nama_pembeli }}</td>
        <td>{{ $o->produk }}</td>
        <td>{{ $o->jumlah }}</td>
        <td>Rp{{ number_format($o->total_harga, 0, ',', '.') }}</td>
        <td>{{ $o->tanggal }}</td>
        <td>
          <form method="POST" action="/dataharian/{{ $o->id }}">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Hapus order ini?')">Hapus</button>
          </form>
        </td>
      </tr>
    @endforeach
  </table>
</body>
</html>
