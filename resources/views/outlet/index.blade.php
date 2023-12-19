@extends('layouts/main')
@section('container')
    <section class="heroutlet">
        <div class="container pt-5">
            @if ($header !== null && !$header->isEmpty())
                <img src="{{ asset('storage/' . $header) }}" class="card-img-top outletni" alt="header" width="1300px" height="480px">
            @else
                <img src="/img/Poster-Outlet.png" alt="Outlet" width="1300px" height="480px">
            @endif

            <h3 class="nama-outlet pt-5">{{ $name }}</h3>
            
            @if ($deskripsi !== null && !$deskripsi->isEmpty())
                <p>{{ $deskripsi }}</p>
            @endif
        </div>
    </section>



    <section class="product-penjual ">
        <div class="container pt-5">
            <div class="menus ">
                <div class="row pt-5 ">
                    @foreach ($produks as $produk)
                        <div class="my-3 justify-content-center col-sm-6 col-md-3 col-lg-3 ">
                            <div class="card p-2 productMakan  justify-content-center"data-product-id="{{ $produk->id }}">
                                @if ($produk->foto_produk)
                                    <div class="imagecard">
                                        <img src="{{ asset('storage/' . $produk->foto_produk) }}" class="card-img-top"
                                            alt="..." width="100" height="220" style="border-radius: 12px;">
                                    </div>
                                @else
                                    <img src="/img/Poster-Product.svg" class="card-img-top" alt="Nasi Goreng" width=298>
                                @endif
                                <div style="text-align:left" class="deskripsi card-body">
                                    <h5 class="card-title">{{ $produk->name }}</h5>
                                    <p class="card-text">{{ $produk->nama_produk }}</p>
                                    <p class="card-text2">Rp {{ number_format($produk->harga, 0, ',', '.') }}</p>
                                    {{-- <hr>
                                    <p class="card-text">{{ $produk->tanggal_jadi }}</p> --}}
                                </div>
                            </div>
                        </div>
                        {{-- <a href="/product/{{ $produk->produk_id }}" class="d-inline" style="text-decoration: none; color: inherit;"> --}}
                    @endforeach
                </div>
            </div>
        </div>


        </div>
    </section>
@endsection
