@extends('layouts.penjual')
@section('penjualContent')
<?php
$totalProduct = 6;
$menus = [];
?>

<div class="content">
    <div class="container px-md-5 mt-5 py-2 ">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-9">
                <h1 class=" fw-bold">Kelola Pesanan</h1>
                <div class="rounded-2 bg-white w-100 h-100 mt-2 shadow-1 relative">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    <div class="p-5">
                        <div class="row align-items-center">
                            <div class="col-6 col-md-10">
                                <p class="fs-4">Total <span class="fw-bold">PESANAN</span></p>
                                <h1 class="fw-bold ">{{ $totalOrders }}</h1>
                            </div>
                            <div class="col-6 col-md-2 d-flex justify-content-end">
                                <img src="/img/icon_document_green.svg" alt="Kart_icon" class="w-50">
                            </div>
                            <p class="py-2"><img src="/img/icon_arrow.svg" class="px-2"/>Jumlah pesanan</p>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="w-100 text-center t-Pesanan">
                                <thead class="bg-red text-white px-6">
                                    <th class="px-3">No</th>
                                    <th class="px-3">Nama Pembeli</th>
                                    <th class="px-3">Pesanan</th>
                                    <th class="px-3">Kuantitas</th>
                                    <th class="px-3">Total Harga</th>
                                    <th class="px-3">Catatan</th>
                                    <th class="px-3">View More</th>
                                    <th class="px-3">Status</th>
                                    <th class="px-3">Tindakan</th>
                                </thead>
                                <tbody class="">
                                    @foreach ($orders as $order)
                                    <tr class="" >
                                        
                                        <td>{{ $loop->iteration  }}</td>
                                        <td>{{ $order->name }}</td>
                                        <td class="">
                                            <p class="text-break m-auto" style="width:100px;">{{ $order->nama_produk }}</p>
                                        </td>
                                        <td>{{ $order->total_produk }}</td>
                                        <td>Rp {{ number_format($order->harga_pembayaran, 0, ',', '.') }}</td>
                                        <td class="">
                                            <p class="text-break text-center d-block m-auto" style="width:100px;">{{ $order->keterangan }}</p>
                                        </td>
                                        <td>
                                            <a href="/view-photo/{{ $order->id }}" class="btn btn-danger">View More</a>
                                        </td>
                                        <td>{{ $order->status }}</td>
                                        <td>
                                            @if ($order->status == "Selesai")
                                                <button type="submit" class="rounded-pill bg-green px-3 py-1 text-white border-0 "disabled
                                                onclick="return confirm('Order {{ $order->name }} sudah selesai?')">
                                                Selesai
                                                </button>
                                            @else
                                                
                                            <form action="/penjual/kelolaPesanan/{{ $order->id }}" method="post" class="d-inline">
                                            @method('patch')
                                            @csrf
                                            <button type="submit" class="rounded-pill bg-red px-3 py-1 text-white border-0"
                                                onclick="return confirm('Order {{ $order->name }} sudah selesai?')">
                                                Selesai
                                            </button>
                                            </form>
                                            @endif

                                            @if ($order->status == "Selesai")
                                                <button type="submit" class="rounded-pill bg-red px-3 py-1 text-white border-0" disabled
                                                    onclick="return confirm('Hapus Order {{ $order->name }}?')">
                                                    Hapus
                                                </button>
                                            @else
                                                
                                            
                                            <form action="/penjual/kelolaPesanan/{{ $order->id }}" method="post" class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="rounded-pill bg-red px-3 py-1 text-white border-0"
                                                    onclick="return confirm('Hapus Order {{ $order->name }}?')">
                                                    Hapus
                                                </button>
                                            </form>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
            </div>
        </div>
        
        </div>
    </div>
</div>
@endsection
