@extends('layouts.main')

@section('container')
    <section class="mt-3 mx-4">
        <div class="hero align-items-center text-center container-sm mx-auto">
            <div class="container pt-5 text-white">
                <h1 class="hero-title">Pre-<span class="hero-title2">Order</span></h1>
                <h3 class="pt-3">Pre-Order Your Fav Food Here!</h3>
                <p>Order your favorite meals here, on our web. Ass smooth as <br> in the app. Some fast delivery. Countless
                    restos to try.</p>
            </div>
        </div>
    </section>

    <section class="product justify-content-center">
        <div class="container pt-5">
            <div class="Inpo">
                <h2 class="product-tittle pt-3"> What's good to eat in USD?</h2>
                <p>Discover our collection of popular food in
                    Sanata Dharma</p>
            </div>
            
            <div class="row pt-5">
                @foreach($produks as $produk)
                <div class="col-md-3  mb-4">
                    <div class="card productMakan" style="width: 19rem; height: 27rem" data-product-id="{{ $produk->produk_id }}">
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
                {{-- <a href="/product/{{ $produk->produk_id }}" class="d-inline" style="text-decoration: none; color: inherit;"> --}}
                @endforeach
            </div>
            {{-- <div class="ProductPertama row pt-5">
                <div class="col-md-3 ">
                    <div class="card" style="width: 19rem; height: 27rem">
                        <img src="img/Poster-Product.svg" class="card-img-top" alt="...">
                        <div style="text-align:left" class="card-body">
                            <h5 class="card-title">Mas Teknik</h5>
                            <p class="card-text"><strong>Nasi Goreng Special</strong></p>
                            <p class="card-text">Rp 15.000</p>
                            <hr>
                            <p class="card-text">Pre Order H - 1</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card" style="width: 19rem; height: 27rem">
                        <img src="img/Poster-Product.svg" class="card-img-top" alt="...">
                        <div style="text-align:left" class="card-body">
                            <h5 class="card-title">Mas Teknik</h5>
                            <p class="card-text"><strong>Nasi Goreng Special</strong></p>
                            <p class="card-text">Rp 15.000</p>
                            <hr>
                            <p class="card-text">Pre Order H - 1</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card" style="width: 19rem; height: 27rem">
                        <img src="img/Poster-Product.svg" class="card-img-top" alt="...">
                        <div style="text-align:left" class="card-body">
                            <h5 class="card-title">Mas Teknik</h5>
                            <p class="card-text"><strong>Nasi Goreng Special</strong></p>
                            <p class="card-text">Rp 15.000</p>
                            <hr>
                            <p class="card-text">Pre Order H - 1</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card" style="width: 19rem; height: 27rem">
                        <img src="img/Poster-Product.svg" class="card-img-top" alt="...">
                        <div style="text-align:left" class="card-body">
                            <h5 class="card-title">Mas Teknik</h5>
                            <p class="card-text"><strong>Nasi Goreng Special</strong></p>
                            <p class="card-text">Rp 15.000</p>
                            <hr>
                            <p class="card-text">Pre Order H - 1</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ProductKedua row pt-5">
                <div class="col-md-3">
                    <div class="card" style="width: 19rem; height: 27rem">
                        <img src="img/Poster-Product2.svg" class="card-img-top" alt="...">
                        <div style="text-align:left" class="card-body">
                            <h5 class="card-title">Johanes Yogtannn</h5>
                            <p class="card-text"><strong>Choco Cokkies</strong></p>
                            <p class="card-text">Rp 10.000</p>
                            <hr>
                            <p class="card-text">Pre Order H - 1</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card" style="width: 19rem; height: 27rem">
                        <img src="img/Poster-Product2.svg" class="card-img-top" alt="...">
                        <div style="text-align:left" class="card-body">
                            <h5 class="card-title">Johanes Yogtannn</h5>
                            <p class="card-text"><strong>Choco Cokkies</strong></p>
                            <p class="card-text">Rp 10.000</p>
                            <hr>
                            <p class="card-text">Pre Order H - 1</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card" style="width: 19rem; height: 27rem">
                        <img src="img/Poster-Product2.svg" class="card-img-top" alt="...">
                        <div style="text-align:left" class="card-body">
                            <h5 class="card-title">Johanes Yogtannn</h5>
                            <p class="card-text"><strong>Choco Cokkies</strong></p>
                            <p class="card-text">Rp 10.000</p>
                            <hr>
                            <p class="card-text">Pre Order H - 1</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                        <div class="card" style="width: 19rem; height: 27rem">
                            <img src="img/Poster-Product2.svg" class="card-img-top" alt="...">
                            <div style="text-align:left" class="card-body">
                                <h5 class="card-title">Johanes Yogtannn</h5>
                                <p class="card-text"><strong>Choco Cokkies</strong></p>
                                <p class="card-text">Rp 10.000</p>
                                <hr>
                                <p class="card-text">Pre Order H - 1</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div> --}}

            <div class="btn-showmore  pt-5">
                {{-- <a class="btn" href="/readmore">Show More</a> --}}
            </div>

        </div>
    </section>
    
@endsection
