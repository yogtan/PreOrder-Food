@extends('layouts.penjual')
@section('penjualContent')
<?php
$totalProduct = 6;
$menus = [];
?>

<div class="content">
    <div class="container px-md-5 mt-5 py-2 ">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col">
                <h1 class="text-secondary fw-bold">Kelola Pesanan</h1>
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
                        <div>
                            <div class="d-flex justify-content-between items-top">
                                <p class="fs-4">Total <span class="fw-bold">PESANAN</span></p>
                                <img src="/img/icon_document_green.svg" alt="Kart_icon" width=70>
                            </div>
                            <h1 class="fw-bold text-red">{{ $totalOrders }}</h1>
                            <p class="py-2"><img src="/img/icon_arrow.svg" class="px-2"/>Jumlah pesanan</p>
                        </div>
                        <div>
                            <table class="w-100 text-center t-Pesanan">
                                <thead class="bg-red text-white">
                                    <th>No</th>
                                    <th>Nama Pembeli</th>
                                    <th>Pesanan</th>
                                    <th>Kuantitas</th>
                                    <th>Total Harga</th>
                                    <th>Catatan</th>
                                    <th>View More</th>
                                    <th>Status</th>
                                    <th>Tindakan</th>
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
