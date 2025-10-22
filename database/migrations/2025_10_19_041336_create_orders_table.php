<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->string('nama')->nullable();
            $table->string('produk')->nullable();
            $table->integer('jumlah')->nullable();
            $table->date('tanggal')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn(['nama', 'produk', 'jumlah', 'tanggal']);
        });
    }
};
