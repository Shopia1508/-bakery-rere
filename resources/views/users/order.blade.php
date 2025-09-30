@extends('layout')

@section('content')
    <h2>Form Pemesanan</h2>
    <form>
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" placeholder="Nama kamu">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">No. HP/WA</label>
            <input type="text" class="form-control" id="phone" placeholder="08xxxx">
        </div>
        <div class="mb-3">
            <label for="cake" class="form-label">Jenis Kue</label>
            <input type="text" class="form-control" id="cake" placeholder="Tulis jenis kue">
        </div>
        <div class="mb-3">
            <label for="note" class="form-label">Catatan</label>
            <textarea class="form-control" id="note" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Pesan</button>
    </form>
@endsection
