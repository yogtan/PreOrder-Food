@extends('layouts.penjual')
@section('penjualContent')

<div class="content">
    <div class="container px-5 mt-5 py-2 ">
        <h1 class="text-white fw-bold">Kelola Pesanan</h1>
        <div class="rounded-2 bg-white w-100 h-100 mt-4 shadow-1 relative">
            <div class="p-5 text-center">
                <p>Bukti Pembayaran</p>
                <img src="{{ asset('storage/'. $order->bukti_pembayaran) }}" alt="View Photo" width="398" height="298">
                <p>Keterangan Pemesanan</p>
                <p>{{ $order->keterangan }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
