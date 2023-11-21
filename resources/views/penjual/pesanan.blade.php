@extends('layouts.penjual')
@section('penjualContent')
<?php
$totalProduct = 6;
$menus = [];
?>

<div class="content">
    <header>
        <div class="container px-5 my-auto justify-content-end d-flex">
            <h2 class="my-auto me-3 d-inline text-white">DodolMaem</h2>
            <img src="/img/icon_Profile white.svg" alt="Img Profile">
        </div>
    </header>
    <div class="container px-5 mt-5 py-2">
        <h1 class="text-white fw-bold">Kelola Pesanan</h1>
        <div class="rounded-2 bg-white w-100 h-100 mt-4 produk relative">
            <div class="p-5">
                <div>
                    <div class="d-flex justify-content-between items-top">
                        <p class="fs-4">Total <span class="fw-bold">PESANAN</span></p>
                        <img src="/img/icon_document_green.svg" alt="Kart_icon" width=70>
                    </div>
                    <h1 class="fw-bold text-red"><?= $totalProduct ?></h1>
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
                            <th>Tindakan</th>
                        </thead>
                        <tbody class="">
                            <tr class="" >
                                <td>1</td>
                                <td>Jarwo</td>
                                <td class="">
                                    <p class="text-break m-auto" style="width:100px;">Gado-gado</p>
                                </td>
                                <td>1</td>
                                <td>Rp.10.000</td>
                                <td class="">
                                    <p class="text-break text-center d-block m-auto" style="width:100px;">Tidak Menggunakan Lontong</p>
                                </td>
                                <td><button class="rounded-pill bg-red px-3 py-1 text-white border-0">Selesai</button></td>
                            </tr>
                            <tr class="">
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
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
