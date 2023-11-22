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
            <div class="p-5">
                <div>
                    <div class="d-flex justify-content-between items-top">
                        <p class="fs-4">Total <span class="fw-bold">PRODUCT</span></p>
                        <img src="/img/icon_kart_green.svg" alt="Kart_icon">
                    </div>
                    <h1 class="fw-bold"><?= $totalProduct ?></h1>
                    <p class="py-2"><img src="/img/icon_arrow.svg" class="px-2"/>Jumlah produk yang tersedia</p>
                </div>
                <div class="w-100 d-flex justify-content-end py-3">
                    <button class="py-2 px-4 rounded-1 bg-green border-0 text-white ms-auto me-0 bTambah">Tambah</button>
                </div>
                <div class="menus">
                        <div class="card p-1">
                            <img src="/img/Pre-Order 1.png" class="card-img-top" alt="Nasi Goreng" width=298>
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Nasi Goreng</h5>
                                <p class="card-text">Rp.12.000,-</p>
                                <div class="d-flex justify-content-center">
                                    <a href="#" class="px-2"><img src="/img/icon_delete.svg" alt=""></a>
                                    <a href="#" class="px-2"><img src="/img/icon_edit.svg" alt=""></a>
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
                                    <a href="#" class="px-2"><img src="/img/icon_edit.svg" alt=""></a>
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
                                    <a href="#" class="px-2"><img src="/img/icon_edit.svg" alt=""></a>
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
                                    <a href="#" class="px-2"><img src="/img/icon_edit.svg" alt=""></a>
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
                                    <a href="#" class="px-2"><img src="/img/icon_edit.svg" alt=""></a>
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
                                    <a href="#" class="px-2"><img src="/img/icon_edit.svg" alt=""></a>
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
                                    <a href="#" class="px-2"><img src="/img/icon_edit.svg" alt=""></a>
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
                                    <a href="#" class="px-2"><img src="/img/icon_edit.svg" alt=""></a>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
