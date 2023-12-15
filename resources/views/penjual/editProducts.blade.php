@extends('layouts.penjual')
@section('penjualContent')  

<div class="content">
    <section class="container px-5 mt-5 py-2">
        <div id="editPenjual" class="rounded-1  shadow-1 mx-auto mt-2 p-5">
            <h1 class="">Edit Produk</h1>
            <form action="/penjual/product/edit/{{ $produk->id }}" method="POST" enctype="multipart/form-data">
            @method('patch')
            @csrf
            
            <div id="profilePicture" class=" my-2">
                <div id="bannerProduk" class="border mx-auto rounded-1 border bg-white d-flex shadow-1 w-100 h-100 p-2">
                    <div  class="mx-auto my-auto text-center">
                        <!-- <img id="imageBanner" src="" alt="" class="d-none"> -->
                        <img id="imageProduct"src="/img/icon_UploadIMG.svg" alt="" class="" >
                        <div id="placeholder" class="">
                            <p>klik untuk memasukkan Gambar</p>
                            <input type="file" id="file" name="foto_produk" class="border rounded-1 start-0 top-0 @error('foto_produk') is-invalid @enderror" accept="image/*" value="{{ old('foto_produk') }}">
                            @error('foto_produk')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror  
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center items-center my-3">
                    <div class="me-2">
                        <div class="d-flex justify-content-between">
                            <input type="text" name="nama_produk" id="nama_produk" placeholder="Nama produk" class="rounded-1 ps-2 fs-5 d-block mb-3 me-2 @error('nama_produk') is-invalid @enderror" style="width:50%; height:40px;"value="{{ $produk->nama_produk }}">
                            @error('nama_produk')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror  
                            <input type="text" name="harga" id="harga" placeholder="harga" class="rounded-1 ps-2 fs-5 d-block mb-3 ms-2 @error('harga') is-invalid @enderror" style="width:50%; height:40px;" value="{{ $produk->harga }}">
                            @error('harga')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror  

                        </div>
                        {{-- <div class="d-flex justify-content-between">
                            <div class="w-50 pe-2">
                                <label for="tanggalOpenPreOrder" class=" w-100">Tanggal Open Pre-Order</label>
                                <input type="date" name="tanggalOpenPreOrder" placeholder="" class="rounded-1 ps-2 fs-5 mb-3" style="width:100%; height:40px;">
                            </div>
                            <div class="w-50 ps-2">
                                <label for="tanggalOpenPreOrder" class=" w-100">Tanggal close Order</label>
                                <input type="date" name="tanggalOpenPreOrder" placeholder="" class="rounded-1 ps-2 fs-5 mb-3" style="width:100%; height:40px;">
                            </div>
                            
                        </div> --}}
                        <textarea name="deskripsi" id="deskripsiToko" cols="70" rows="5" placeholder="deskripsi produk" class="rounded-1 p-2 fs-5 @error('deskripsi') is-invalid @enderror" value="{{ old('deskripsi') }}"></textarea>
                        @error('deskripsi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror  
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success mx-auto d-flex fs-4">Simpan</button>
        </form>
        </div>
    </section>
</div>

@stop


@section("scripts")
<script src="/js/fileUploadEditProduct.js"></script>
@stop
