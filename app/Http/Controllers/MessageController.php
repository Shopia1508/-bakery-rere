<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    // simpan pesan baru
    public function store(Request $request)
    {
        $message = Message::create($request->all());
        return response()->json($message);
    }

    // ambil semua pesan (misalnya berdasarkan order_id)
    public function index(Request $request)
    {
        $messages = Message::where('order_id', $request->order_id)->get();
        return response()->json($messages);
    }
}
