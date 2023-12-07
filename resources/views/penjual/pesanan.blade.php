@extends('layouts.penjual')
@section('penjualContent')
<?php
$totalProduct = 6;
$menus = [];
?>

<div class="content">
    <div class="container px-5 mt-5 py-2 ">
        <h1 class="text-white fw-bold">Kelola Pesanan</h1>
        <div class="rounded-2 bg-white w-100 h-100 mt-4 shadow-1 relative">
            <div class="p-5">
                <div>
                    <div class="d-flex justify-content-between items-top">
                        <p class="fs-4">Total <span class="fw-bold">PESANAN</span></p>
                        <img src="/img/icon_document_green.svg" alt="Kart_icon" width=70>
                    </div>
                    <h1 class="fw-bold text-red">{{ $totalOrders }}</h1>
                    <p class="py-2"><img src="/img/icon_arrow.svg" class="px-2"/>Jumlah produk yang tersedia</p>
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
                            <th>Bukti</th>
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
                                <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Lihat Bukti
                                  </button>
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
                                </td>
                            </tr>
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Foto KTP</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    <img src="{{ asset('storage/'. $order->bukti_pembayaran) }}" class="card-img-top" alt="..." width="398" height="298">
                                    
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                                    </div>
                                </div>
                                </div>
                            </div>
                            @endforeach
                            {{-- <tr class="">
                                <td>2</td>
                                <td>Ami</td>
                                <td class="">
                                    <p style="width:100px;" class="text-break m-auto">Nasi Goreng Udang Sambel Matah</p>
                                </td>
                                <td>1</td>
                                <td>Rp.10.000</td>
                                <td class="">
                                    <p style="width:100px;" class="text-break m-auto">Tanpa Menggunakan Nasi</p>
                                </td>
                                <td><button class="rounded-pill bg-red px-3 py-1 text-white border-0">Selesai</button></td>
                            </tr> --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
