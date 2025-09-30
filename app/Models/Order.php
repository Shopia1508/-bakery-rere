<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
     use HasFactory;

    // Kolom yang bisa diisi lewat form
    protected $fillable = [
        'customer_name',
        'customer_phone',
        'cake_type',
        'custom_note',
        'status',
    ];

    // Relasi: satu order bisa punya banyak message (chat)
    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}
