@extends('layouts/main')
@section('container')
    <section class="heroproduct">
        <div class="container pt-5">
            <div class="row">
                <!-- Kolom Kiri (Nama Produk dan Pesan) -->
                <div class="col-lg-6">
                    <div class="product-info" data-product-id="{{ $produk->produk_id }}">
                        <h5 class="info-profile">{{ $produk->name }}</h5>
                        <h2>{{ $produk->nama_produk }}</h2>
                        <h4>Rp {{ number_format($produk->harga, 0, ',', '.') }}</h4>
                        <p class="deskrip">{{ $produk->deskripsi }}</p>
                        <hr>

                        {{-- <div class="info-preorder">Pre Order H-1</div> --}}
                        <div class="info-pesan">
                            <div class="info-kirim">Tanggal Pengiriman {{ $produk->tanggal_jadi }}</div>
                            <button class="btn btn-dark btn-panjang" id="btnPesan">Pesan</button>

                        </div>
                    </div>
                </div>


                <!-- Kolom Kanan (Gambar Produk) -->
                <div class="col-lg-6 text-center">
                    @if ($produk->foto_produk)
                    <img src="{{ asset('storage/'. $produk->foto_produk) }}" class="card-img-top" alt="...">
                    @else
                    {{-- <img src="/img/Poster-Product.svg" class="card-img-top" alt="Nasi Goreng" width=298> --}}
                    <img src="/img/Poster-Product.svg" alt="Gambar Produk" class="product-image" width="400px">
                    @endif
                </div>
            </div>
        </div>
    </section>



    <section class="product-penjual ">
        <div class="container pt-5">
            <div class="row">
                <!-- Kolom Kiri (Nama Produk dan Pesan) -->
                <div class="col-lg-6">
                    <div class="product-info-produk">
                        <h5>Lihat produk lain toko ini</h5>
                    </div>
                </div>

                <!-- Kolom Kanan (Gambar Produk) -->
                <div class="col-lg-6 ">
                    <div class="product-info-penjual text-right" >
                        <a href="/outlet/{{ $produk->user_id }}">Lihat Semua</a>
                    </div>
                </div>
            </div>
            @if (!$others)
                <h1 class="mt-3">No Other Products</h1>
            @else
                
            
            <div class="ProductPertama row pt-5">
                @foreach($others as $produk)
                    <div class="col-md-3 Product">
                        <a href="/product/{{ $produk->produk_id }}" style="text-decoration: none; color: inherit;">
                        <div class="card" style="width: 19rem; height: 27rem" data-product-id="{{ $produk->produk_id }}">
                            <!-- Assuming you have a field for the product image -->
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
