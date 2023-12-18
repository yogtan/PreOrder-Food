@extends('layouts/main')
@section('container')
    <section class="heroproduct">
        <div class="container tes pt-5 mt-5">
            <div class="pt-4"></div>
            <div class="row">

                <!-- Kolom Kanan (Gambar Produk) -->
                <div class="col-lg-4 col-md-3 col-lg-3 text-center">
                    @if ($produk->foto_produk)
                        <img src="{{ asset('storage/' . $produk->foto_produk) }}" class="card-img-top" alt="..." width="300" height="300px" style="border-radius: 10px">
                    @else
                        {{-- <img src="/img/Poster-Product.svg" class="card-img-top" alt="Nasi Goreng" width=298> --}}
                        <img src="/img/Poster-Product.svg" alt="Gambar Produk" class="product-image img-fluid" width="400px">
                    @endif
                </div>

                <!-- Kolom Kiri (Nama Produk dan Pesan) -->
                <div class="col-lg-8">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    <div class="product-info" data-product-id="{{ $produk->produk_id }}">
                        <h5 class="info-profile">{{ $produk->name }}</h5>
                        <h2 class="nama-produk">{{ $produk->nama_produk }}</h2>
                        <h4 class="harga" >Rp {{ number_format($produk->harga, 0, ',', '.') }}</h4>
                        <hr>
                        <p class="deskrip">{{ $produk->deskripsi }}</p>

                        {{-- <div class="info-preorder">Pre Order H-1</div> --}}
                        <div class="info-pesan  ">
                            <div class="info-kirim">
                                Tanggal Pengiriman <input type="text" id="tanggalPengiriman"
                                    name="tanggal_pengiriman"class="border-0" value="{{ $produk->tanggal_jadi }}" readonly>
                            </div>
                            <button class="btn btn-dark btn-panjang btn-pesan" id="btnPesan">Pesan</button>
                        </div>
                    </div>
                </div>


                
            </div>
        </div>
    </section>



    <section class="product-penjual ">
        <div class="container pt-5">
            <div class="row">
                <!-- Kolom Kiri (Nama Produk dan Pesan) -->
                <div class="box1 col-lg-4 ">
                    <div class="product-info-produk">
                        <h5>Produk lain toko ini</h5>
                    </div>
                </div>

                <!-- Kolom Kanan (Gambar Produk) -->
                <div class="box2 col-lg-8 text-lg-end ">
                    
                        <a href="/outlet/{{ $produk->user_id }}">Lihat Semua</a>
                    
                </div>
            </div>
            @if ($others->isEmpty())
                <h1 class="mt-3">No Other Products</h1>
            @else
            <div class="menus ">
                <div class="row pt-5 ">
                    @foreach ($others as $produk)
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
            @endif

            <script>
                document.getElementById('btnPesan').addEventListener('click', function() {
                    // Mengarahkan ke folder "orders" dan file "index"
                    var productId = document.querySelector('.product-info').getAttribute('data-product-id');
                    window.location.href = '/order/' + productId;
                    // window.location.href = '/orders';
                });
            </script>

    </section>

@endsection
