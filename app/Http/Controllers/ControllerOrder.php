<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Http;

class ControllerOrder extends Controller
{
    public function create()
    {
        return view('create'); // form order
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'produk' => 'required|string|max:255',
            'jumlah' => 'required|integer|min:1',
            'tanggal' => 'required|date',
            'nomor_telepon' => 'required|string|max:50',
        ]);

        $order = Order::create($request->all());

        $message = "📦 *Pesanan Baru Masuk!*\n\n"
            . "Nama: {$order->nama}\n"
            . "Produk: {$order->produk}\n"
            . "Jumlah: {$order->jumlah}\n"
            . "Tanggal: {$order->tanggal}\n"
            . "Nomor Telepon: {$order->nomor_telepon}\n\n"
            . "Segera cek halaman admin untuk konfirmasi.";

        Http::withHeaders([
            'Authorization' => env('FONNTE_API_KEY'),
        ])->post('https://api.fonnte.com/send', [
            'target' => env('ADMIN_PHONE'),
            'message' => $message,
        ]);

        return redirect()->back()->with('success', 'Pesanan berhasil dikirim!');
    }

    public function index()
    {
        $orders = Order::latest()->get();
        return view('index', compact('orders'));
    }

    public function edit($id)
    {
        $order = Order::findOrFail($id);
        return view('edit', compact('order')); // pastikan nama view cocok
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'produk' => 'required|string|max:255',
            'jumlah' => 'required|integer|min:1',
            'nomor_telepon' => 'required|string|max:50',
            'tanggal' => 'required|date',
        ]);

        $order = Order::findOrFail($id);
        $order->update($request->all());

        return redirect('/index')->with('success', 'Order diperbarui!');
    }

    public function destroy($id)
    {
        Order::destroy($id);
        return back()->with('success', 'Order dihapus!');
    }
}
