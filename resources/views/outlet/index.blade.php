@extends('layouts/main')
@section('container')
    <section class="heroutlet">
        <div class="container pt-5">

            <img src="/img/Poster-Outlet.png" alt="Outlet" width="1300px" height="480px">

            <h3 class="nama-outlet pt-5">{{ $name }}</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam minus, porro eligendi dignissimos voluptate nobis, reprehenderit tempora cumque saepe quo qui, illo corporis est blanditiis facilis error non nam vero!</p>
        </div>
    </section>



    <section class="product-penjual ">
        <div class="container pt-5">

            <div class="row pt-5">
                @foreach($produks as $produk)
                <div class="col-md-3 ">
                    {{-- <a href="/product/{{ $produk->produk_id }}" style="text-decoration: none; color: inherit;"> --}}
                    <div class="card" style="width: 19rem; height: 27rem" data-product-id="{{ $produk->produk_id }}">
                        @if ($produk->foto_produk)
                        <img src="{{ asset('storage/'. $produk->foto_produk) }}" class="card-img-top" alt="...">
                        @else
                        <img src="/img/Poster-Product.svg" class="card-img-top" alt="Nasi Goreng" width=298>
                        @endif
                        <div style="text-align:left" class="card-body">
                            <h5 class="card-title">{{ $produk->name }}</h5>
                            <p class="card-text"><strong>{{ $produk->nama_produk }}</strong></p>
                            <p class="card-text">Rp {{ number_format($produk->harga, 0, ',', '.') }}</p>
                            <hr>
                            <p class="card-text">{{ $produk->tanggal_jadi }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>


        </div>
    </section>
@endsection
