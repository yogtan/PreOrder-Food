@extends('layouts.penjual')
@section('penjualContent')

<div class="content">
    <div class="  mt-5 py-2 d-flex justify-content-center ">
        <div class="row w-100">
            <div class="col col-lg-3"></div>
            <div class="col w-100">
                <h1 class=" fw-bold">Detail Pemesanan</h1>
                <div class="rounded-2 bg-white w-100 h-100 mt-4 shadow-1 h-auto">
                    <div class="p-5 text-center">
                        <p class="fw-bold fs-3">Bukti Pembayaran</p>
                        <div class="d-flex justify-content-center align-items-center object-fit-cover">
                            <img src="{{ asset('storage/'. $order->bukti_pembayaran) }}" alt="View Photo" width="398" height="298">
                        </div>
                        <p class="mt-4">Keterangan Pemesanan</p>
                        <p>{{ $order->keterangan }}</p>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection
