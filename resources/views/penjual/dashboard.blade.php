@extends('layouts.penjual')

@section('penjualContent')
<div class="content overflow-hidden pe-xl-3 p-2">
    <div class="row">
        <div class="col-md-5 col-lg-4 col-xl-3 col-xxl-2 "></div>
        <div class="col justify-content-center ">
            <div class="px-2 mt-5 d-sm-block ">
                <div class="row">
                    <div class="col ">
                        <h1 class="text-black">Dashboard</h1>
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
                    </div>
                </div>
                <div class="row gap-3 ">
                    <div class="col col-sm-12 col-xl justify-content-end d-flex">
                        <div class="card mx-auto p-3 shadow-1 h-100" >
                            <div class="card-body">
                                <div class=" card-content mb-5">
                                    <div class="row">
                                        <div class="col-xl-10 col-8">
                                            <h6 class="fs-3">PRODUCT</h6>
                                            <h3 class=" text-success fs-1 fw-bold ">{{ $totalProducts }}</h3>
                                        </div>
                                        <div class="col-4 col-xl-2 d-flex justify-content-end align-items-center">
                                            <img src="/img/icon_kart_green.svg" alt=""  class="w-100">
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex items-center ">
                                    <img src="/img/icon_arrow.svg" alt="arrow" class="">
                                    <p class="ms-2 fs-4 my-auto">Jumlah Produk</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-xl col-sm-12">
                        <div class="card mx-auto p-3 shadow-1 h-100">
                            <div class="card-body">
                                <div class=" card-content mb-5">
                                    <div class="row align-items-center">
                                        <div class="col-xl-10 col-8">
                                            <h6 class="fs-3">PESANAN</h6>
                                            <h3 class="text-success fs-1 fw-bold ">{{ $totalOrder }}</h3>
                                        </div>
                                        <div class="col-4 col-xl-2 d-flex justify-content-end align-items-center">
                                            <img src="/img/icon_pesananGreen.svg" alt="" class="w-100">
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex items-center">
                                    <img src="/img/icon_arrow.svg" alt="arrow" class="">
                                    <p class="ms-2 fs-4 my-auto">Jumlah pesanan baru hari ini</p>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>       
                <div class="row">
                    <div class="col">
                        <div class="pendapatan p-4  shadow-1 rounded-1 h-auto ">
                            <div class=" align-items-center row ">
                                <div class=" col-xl-11 col-9" >
                                    <h3>PENDAPATAN</h6>
                                    <h1 class="text-success">Rp {{ number_format($totalEarn, 0, ',', '.') }}</h1>
                                </div>
                                <div class="col-3 col-xl-1 d-flex justify-content-end align-items-center">
                                    <img src="/img/icon_money green.svg" alt="moneyicon" class="w-100">
                                </div>
                            </div>
                            <div class="d-flex items-center mt-4 mb-5">
                                <img src="/img/icon_arrow.svg" alt="arrow">
                                <p class="fs-5 my-auto ms-2">Total Pendapatan</p>
                            </div>
                            <hr>
                            <div class="row justify-content-center align-items-center">
                                <div class="col-12 col-sm-12 overflow-x-auto ">
                                    <!-- table for mobile -->
                                    <table class="border h-auto  d-table d-md-none w-100 ">
                                        <thead class="border text-center bg-hijau text-white fw-bold">
                                            <th class=" py-sm-4 py-2 px-2">No</th>
                                            <th class=" py-sm-4 py-2 px-2">Nama Pembeli</th>
                                            <th class=" py-sm-4 py-2 px-2">Nama Produk</th>
                                            <th class=" py-sm-4 py-2 px-2">Kuantitas</th>
                                            <th class=" py-sm-4 py-2 px-2">Total Harga</th>
                                        </thead>
                                        <tbody class="text-center">
                                        @foreach ( $orders as $order)
                                            <tr class="">
                                                <td class="py-4">{{ $loop->iteration }}</td>
                                                <td class="py-4">{{ $order->name }}</td>
                                                <td class="py-4">{{ $order->nama_produk }}</td>
                                                <td class="py-4">{{ $order->total_produk }}</td>
                                                <td class="py-4">Rp {{ number_format($order->harga_pembayaran, 0, ',', '.') }}</td>
                                            </tr>
                                        @endforeach
                                       {{-- <tr class="">
                                                <td class="py-4">1</td>
                                                <td class="py-4">Abdi sang</td>
                                                <td class="py-4">Risoles</td>
                                                <td class="py-4">1</td>
                                                <td class="py-4">Rp.10.000</td>
                                            </tr> --}}
                                        </tbody>
                                    </table>
                                    <table class=" h-auto w-100 d-none d-md-table border">
                                        <thead class="border text-center bg-hijau text-white fw-bold">
                                            <th class=" py-sm-4 py-2 px-2">No</th>
                                            <th class=" py-sm-4 py-2 px-2">Nama Pembeli</th>
                                            <th class=" py-sm-4 py-2 px-2">Nama Produk</th>
                                            <th class=" py-sm-4 py-2 px-2">Kuantitas</th>
                                            <th class=" py-sm-4 py-2 px-2">Total Harga</th>
                                        </thead>
                                        <tbody class="text-center">
                                        @foreach ( $orders as $order)
                                            <tr class="">
                                                <td class="py-4">{{ $loop->iteration }}</td>
                                                <td class="py-4">{{ $order->name }}</td>
                                                <td class="py-4">{{ $order->nama_produk }}</td>
                                                <td class="py-4">{{ $order->total_produk }}</td>
                                                <td class="py-4">Rp {{ number_format($order->harga_pembayaran, 0, ',', '.') }}</td>
                                            </tr>
                                        @endforeach
                                       {{-- <tr class="">
                                                <td class="py-4">1</td>
                                                <td class="py-4">Abdi sang</td>
                                                <td class="py-4">Risoles</td>
                                                <td class="py-4">1</td>
                                                <td class="py-4">Rp.10.000</td>
                                            </tr> --}}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
</div>
@endsection