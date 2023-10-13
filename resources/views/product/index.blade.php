@extends('layouts/main')
@section('container')
    <section class="heroproduct text-center">
        <div class="container pt-5">
            <div class="row">
                <!-- Kolom Kiri (Nama Produk dan Pesan) -->
                <div class="col-lg-6">
                    <div class="product-info">
                        <h3>Nama Produk</h3>
                        <p>Ini adalah deskripsi produk atau pesanan. Anda dapat menambahkan teks yang menjelaskan produk
                            atau pesanan di sini.</p>
                    </div>
                </div>

                <!-- Kolom Kanan (Gambar Produk) -->
                <div class="col-lg-6">
                    <img src="img/Poster-Product.svg" alt="Gambar Produk" class="product-image">
                </div>
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
            <div class="ProductPertama row pt-5">
                <div class="col-md-3 ">
                    <div class="card align-items-center" style="width: 18rem; height: 27rem">
                        <img src="img/Poster-Product.svg" class="card-img-top" alt="...">
                        <div style="text-align:left" class="card-body">
                            <h5 class="card-title">Mas Teknik</h5>
                            <p class="card-text"><strong>Nasi Goreng Special</strong></p>
                            <p class="card-text">Rp 15.000</p>
                            <hr>
                            <p class="card-text">Pre Order - 1 h</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card" style="width: 18rem; height: 27rem">
                        <img src="img/Poster-Product.svg" class="card-img-top" alt="...">
                        <div style="text-align:left" class="card-body">
                            <h5 class="card-title">Mas Teknik</h5>
                            <p class="card-text"><strong>Nasi Goreng Special</strong></p>
                            <p class="card-text">Rp 15.000</p>
                            <hr>
                            <p class="card-text">Pre Order - 1 h</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card" style="width: 18rem; height: 27rem">
                        <img src="img/Poster-Product.svg" class="card-img-top" alt="...">
                        <div style="text-align:left" class="card-body">
                            <h5 class="card-title">Mas Teknik</h5>
                            <p class="card-text"><strong>Nasi Goreng Special</strong></p>
                            <p class="card-text">Rp 15.000</p>
                            <hr>
                            <p class="card-text">Pre Order - 1 h</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card" style="width: 18rem; height: 27rem">
                        <img src="img/Poster-Product.svg" class="card-img-top" alt="...">
                        <div style="text-align:left" class="card-body">
                            <h5 class="card-title">Mas Teknik</h5>
                            <p class="card-text"><strong>Nasi Goreng Special</strong></p>
                            <p class="card-text">Rp 15.000</p>
                            <hr>
                            <p class="card-text">Pre Order - 1 h</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ProductKedua row pt-5">
                <div class="col-md-3">
                    <div class="card" style="width: 18rem; height: 27rem">
                        <img src="img/Poster-Product2.svg" class="card-img-top" alt="...">
                        <div style="text-align:left" class="card-body">
                            <h5 class="card-title">Johanes Yogtannn</h5>
                            <p class="card-text"><strong>Choco Cokkies</strong></p>
                            <p class="card-text">Rp 10.000</p>
                            <hr>
                            <p class="card-text">Pre Order - 1 h</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card" style="width: 18rem; height: 27rem">
                        <img src="img/Poster-Product2.svg" class="card-img-top" alt="...">
                        <div style="text-align:left" class="card-body">
                            <h5 class="card-title">Johanes Yogtannn</h5>
                            <p class="card-text"><strong>Choco Cokkies</strong></p>
                            <p class="card-text">Rp 10.000</p>
                            <hr>
                            <p class="card-text">Pre Order - 1 h</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card" style="width: 18rem; height: 27rem">
                        <img src="img/Poster-Product2.svg" class="card-img-top" alt="...">
                        <div style="text-align:left" class="card-body">
                            <h5 class="card-title">Johanes Yogtannn</h5>
                            <p class="card-text"><strong>Choco Cokkies</strong></p>
                            <p class="card-text">Rp 10.000</p>
                            <hr>
                            <p class="card-text">Pre Order - 1 h</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <a href="/product/index" class="card-link">
                        <div class="card" style="width: 18rem; height: 27rem">
                            <img src="img/Poster-Product2.svg" class="card-img-top" alt="...">
                            <div style="text-align:left" class="card-body">
                                <h5 class="card-title">Johanes Yogtannn</h5>
                                <p class="card-text"><strong>Choco Cokkies</strong></p>
                                <p class="card-text">Rp 10.000</p>
                                <hr>
                                <p class="card-text">Pre Order - 1 h</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="btn-showmore  pt-5">
                <a class="btn" href="/readmore">Show More</a>
            </div>

        </div>
    </section>
@endsection
