@extends('layouts.penjual')

@section('penjualContent')
<div class="content">
    <header>
        <div class="container px-5 my-auto justify-content-end d-flex">
            <h2 class="my-auto me-3 d-inline text-white">DodolMaem</h2>
            <img src="/img/icon_Profile white.svg" alt="Img Profile">
            
        </div>
    </header>
    <div class="container px-5 mt-5">
        <h1 class="text-white">Dashboard</h1>
        <div class="cards mt-5">
            <div class="card mx-auto p-3" style="width: 30rem; height:20rem;">
                <div class="card-body">
                    <div class="mb-6 card-content">
                        <h6 class="fs-3">PRODUCT</h6>
                        <h3 class=" text-success fs-1 fw-bold ">8</h3>
                        <div class=" d-flex justify-content-center">
                            <img src="/img/icon_house.svg" alt="" width="100" class="">
                        </div>
                    </div>
                    <div class="d-flex items-center">
                        <img src="/img/icon_arrow.svg" alt="arrow" class="">
                        <p class="ms-2 fs-4 my-auto">Jumlah Produk yang tersedia</p>
                    </div>
                </div>
            </div>
            <div class="card mx-auto p-3" style="width: 30rem; height:20rem;">
                <div class="card-body">
                    <div class="mb-6 card-content">
                        <h6 class="fs-3">PESANAN</h6>
                        <h3 class="text-success fs-1 fw-bold ">8</h3>
                        <div class=" d-flex justify-content-center">
                            <img src="/img/icon_house.svg" alt="" width="100" class="">
                        </div>
                    </div>
                    <div class="d-flex items-center">
                        <img src="/img/icon_arrow.svg" alt="arrow" class="">
                        <p class="ms-2 fs-4 my-auto">Jumlah pesanan baru</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="pendapatan container">
            <div class="title d-flex justify-content-between items-center">
                <h3>PENDAPATAN</h6>
                <img src="/img/icon_money green.svg" alt="moneyicon" width="80">
            </div>
            <h1 class="text-success">Rp.60.000.000,00</h1>
            <div class="d-flex items-center mt-4 mb-5">
                <img src="/img/icon_arrow.svg" alt="arrow">
                <p class="fs-5 my-auto ms-2">Total Pendapatan</p>
            </div>
            <hr>
            <table class="border w-100">
                <thead class="border text-center bg-hijau text-white fw-bold">
                    <th class="border py-4">No</th>
                    <th class="border py-4">Nama Pembeli</th>
                    <th class="border py-4">Nama Produk</th>
                    <th class="border py-4">Kuantitas</th>
                    <th class="border py-4">Total harga</th>
                </thead>
                <tbody class="text-center">
                    <tr>
                        <td class="py-4">1</td>
                        <td class="py-4">Abdi sang</td>
                        <td class="py-4">Risoles</td>
                        <td class="py-4">1</td>
                        <td class="py-4">Rp.10.000</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection