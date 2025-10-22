<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;


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
        ]);

        Order::create($request->all());
        return redirect('/order')->with('success', 'Order berhasil disimpan!');
    }

    // halaman tersembunyi
    public function index()
    {
        $orders = Order::latest()->get();
        return view('index', compact('orders'));
    }

    public function edit($id)
    {
        $order = Order::findOrFail($id);
        return view('order.edit', compact('order'));
    }

    public function update(Request $request, $id)
    {
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