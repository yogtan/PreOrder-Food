@extends('layouts.penjual')
@section('penjualContent')
<?php
$totalProduct = 6;
$menus = [];
?>

<div class="content">
    <div class="container px-5 mt-5 py-2">
        <h1 class="text-white fw-bold">Kelola Produk</h1>
        <div class="rounded-2 bg-white w-100 h-100 mt-4 shadow-1 relative">
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
                        <p class="fs-4">Total <span class="fw-bold">PRODUCT</span></p>
                        <img src="/img/icon_kart_green.svg" alt="Kart_icon">
                    </div>
                    <h1 class="fw-bold">{{ $totalProducts }}</h1>
                    <p class="py-2"><img src="/img/icon_arrow.svg" class="px-2"/>Jumlah produk yang tersedia</p>
                </div>
                <div class="w-100 d-flex justify-content-end py-3">
                    <a href="/penjual/tambahProduk" class="py-2 px-4 rounded-1 bg-green border-0 text-white ms-auto me-0 bTambah text-decoration-none">Tambah</a>
                </div>
                <div class="menus">
                    @if ($produks->isEmpty())
                        <p>No products available. You can add new products <a href="/penjual/tambahProduk">here</a>.</p>
                    @else
                    <div class="row pt-5">
                        @foreach ($produks as $produk)
                        <div class="col-md-3">
                            <div class="card p-1">
                                @if ($produk->foto_produk)
                                <img src="{{ asset('storage/'. $produk->foto_produk) }}" class="card-img-top" alt="..." width="398" height="298">
                                @else
                                <img src="/img/Pre-Order 1.png" class="card-img-top" alt="Nasi Goreng" width=200 height="200">
                                @endif
                                <div class="card-body">
                                    <h5 class="card-title font-weight-bold">{{ $produk->nama_produk }}</h5>
                                    <p class="card-text">Rp {{ number_format($produk->harga, 0, ',', '.') }}</p>
                                    <p class="card-text">{{ $produk->tanggal_jadi }}</p>
                                    <div class="d-flex justify-content-center">
                                        <form action="/penjual/product/{{ $produk->id }}" method="post">
                                            @csrf
                                            @method('Delete')
                                            <button type="submit" class="px-2 text-decoration-none" onclick="return confirm('Are you sure you want to delete this product?')">
                                                <img src="/img/icon_delete.svg" alt="">
                                            </button>
                                        </form>
                                        <a href="/penjual/product/edit/{{ $produk->produk_id }}" class="px-2 button"><img src="/img/icon_edit.svg" alt=""></a>
                                        <a href="/penjual/product/addPembuatan/{{ $produk->produk_id }}" class="px-2 button"><img src="/img/calendar.svg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                                    {{-- <div class="card p-1" style="width: 19rem; height: 27rem">
                                        <!-- Assuming you have a field for the product image -->
                                        
                                        <div style="text-align:left" class="card-body">
                                            
                                            {{-- <p class="card-text"><strong>{{ $produk->nama_produk }}</strong></p>
                                            
                                            <hr>
                                            <p class="card-text">Pre Order {{ $produk->tanggal_jadi }}</p>
                                            <a href="/"></a>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        @endforeach
                    @endif
                      {{-- <div class="card p-1">
                            <img src="/img/Pre-Order 1.png" class="card-img-top" alt="Nasi Goreng" width=298>
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Nasi Goreng</h5>
                                <p class="card-text">Rp.12.000,-</p>
                                <div class="d-flex justify-content-center">
                                    <a href="#" class="px-2"><img src="/img/icon_delete.svg" alt=""></a>
                                    <a href="/penjual/product/edit" class="px-2"><img src="/img/icon_edit.svg" alt=""></a>
                                </div>
                            </div>
                        </div> --}}
                          {{-- <div class="card p-1">
                            <img src="/img/Pre-Order 1.png" class="card-img-top" alt="Nasi Goreng" width=298>
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Nasi Goreng</h5>
                                <p class="card-text">Rp.12.000,-</p>
                                <div class="d-flex justify-content-center">
                                    <a href="#" class="px-2"><img src="/img/icon_delete.svg" alt=""></a>
                                    <a href="/penjual/product/edit" class="px-2"><img src="/img/icon_edit.svg" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="card p-1">
                            <img src="/img/Pre-Order 1.png" class="card-img-top" alt="Nasi Goreng" width=298>
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Nasi Goreng</h5>
                                <p class="card-text">Rp.12.000,-</p>
                                <div class="d-flex justify-content-center">
                                    <a href="#" class="px-2"><img src="/img/icon_delete.svg" alt=""></a>
                                    <a href="/penjual/product/edit" class="px-2"><img src="/img/icon_edit.svg" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="card p-1">
                            <img src="/img/Pre-Order 1.png" class="card-img-top" alt="Nasi Goreng" width=298>
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Nasi Goreng</h5>
                                <p class="card-text">Rp.12.000,-</p>
                                <div class="d-flex justify-content-center">
                                    <a href="#" class="px-2"><img src="/img/icon_delete.svg" alt=""></a>
                                    <a href="/penjual/product/edit" class="px-2"><img src="/img/icon_edit.svg" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="card p-1">
                            <img src="/img/Pre-Order 1.png" class="card-img-top" alt="Nasi Goreng" width=298>
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Nasi Goreng</h5>
                                <p class="card-text">Rp.12.000,-</p>
                                <div class="d-flex justify-content-center">
                                    <a href="#" class="px-2"><img src="/img/icon_delete.svg" alt=""></a>
                                    <a href="/penjual/product/edit" class="px-2"><img src="/img/icon_edit.svg" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="card p-1">
                            <img src="/img/Pre-Order 1.png" class="card-img-top" alt="Nasi Goreng" width=298>
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Nasi Goreng</h5>
                                <p class="card-text">Rp.12.000,-</p>
                                <div class="d-flex justify-content-center">
                                    <a href="#" class="px-2"><img src="/img/icon_delete.svg" alt=""></a>
                                    <a href="/penjual/product/edit" class="px-2"><img src="/img/icon_edit.svg" alt=""></a>
                                </div>
                            </div>
                        </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

