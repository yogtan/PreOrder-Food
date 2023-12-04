<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('tanggal_pemesanan');
            $table->integer('total_produk'); 
            $table->string('status')->default("Belum Konfirmasi"); 
            $table->string('bukti_pembayaran'); 
            $table->bigInteger('harga_pembayaran'); 
            $table->string('keterangan');

            // Foreign key untuk user_id yang mengacu pada id di tabel users
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            // Foreign key untuk produk_id yang mengacu pada id di tabel produks
            $table->unsignedBigInteger('pembuatan_id');
            $table->foreign('pembuatan_id')->references('id')->on('pembuatans');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
