    @extends('layouts.penjual')
    @section('penjualContent')

    <div class="content">
        <div class="container  py-1 mt-5 px-md-5 py-md-2">
            <div class="row justify-content-center px-2">
                <div class="col-md-3"></div>
                <div class="col">
                    <h1 class="text-secondary fw-bold">Kelola Produk</h1>
                    <div class="rounded-2 bg-white w-100 h-100 mt-4 shadow-1 relative">
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
                        <div class="p-4">
                            <div>
                                <div class="">
                                    <div class="row align-items-center">
                                        <div class="col-9  col-md-10">
                                            <p class="w-50">Total <span class="fw-bold">PRODUCT</span></p>
                                            <h1 class="fw-bold w-100">{{ $totalProducts }}</h1>
                                        </div>
                                        <div class="col-3 col-md-2">
                                            <img src="/img/icon_kart_green.svg" alt="Kart_icon" class="w-100">
                                        </div>
                                    </div>
                                    <p class="py-2"><img src="/img/icon_arrow.svg" class="px-2"/>Jumlah produk yang tersedia</p>
                                </div>
                            </div>
                            <div class="w-100 d-flex  py-3">
                                <a href="/penjual/tambahProduk" class="py-2 px-4 rounded-1 bg-green text-white  bTambah text-decoration-none">
                                    Tambah
                                </a>
                            </div>
                            <div class="w-100">
                                @if ($produks->isEmpty())
                                    <p>No products available. You can add new products <a href="/penjual/tambahProduk">here</a>.</p>
                                @else
                                <div class="row mt-5     h-auto gap-2 justify-content-center align-items-center">
                                    @foreach ($produks as $produk)
                                    <div class="col-12 col-md-4 overflow-hidden">
                                        <div class="card p-2 w-100 shadow-1">
                                            <div class="row overflow-hidden">
                                                <div class="col-6 col-md-12 d-flex justify-content-center align-items-center">
                                                    @if ($produk->foto_produk)
                                                    <img src="{{ asset('storage/'. $produk->foto_produk) }}" class="cardImageProduct mx-auto border rounded" alt="..." >
                                                    @else
                                                    <img src="/img/Pre-Order 1.png" class="card-img-top" alt="Nasi Goreng" width=200 height="200">
                                                    @endif
                                                </div>
                                                <div class="col-6 col-md-12  ">
                                                    <div class="card-body ">
                                                        <h5 class="card-title font-weight-bold">{{ $produk->nama_produk }}</h5>
                                                        <p class="card-text">Rp {{ number_format($produk->harga, 0, ',', '.') }}</p>
                                                        <p class="card-text">{{ $produk->tanggal_jadi }}</p>
                                                        <div class="d-flex justify-content-center">
                                                            <form action="/penjual/product/{{ $produk->id }}" method="post">
                                                                @csrf
                                                                @method('Delete')
                                                                <button type="submit" class="px-2 text-decoration-none" onclick="return confirm('Are you sure you want to delete this product?')">
                                                                    <img src="/img/icon_delete.svg" alt="">
                                                                </button>
                                                            </form>
                                                            <a href="/penjual/product/edit/{{ $produk->produk_id }}" class="px-2 button"><img src="/img/icon_edit.svg" alt=""></a>
                                                            <a href="/penjual/product/addPembuatan/{{ $produk->produk_id }}" class="px-2 button"><img src="/img/calendar.svg" alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

