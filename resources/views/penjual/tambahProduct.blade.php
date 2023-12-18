@extends('layouts.penjual')
@section('penjualContent')  

<div class="content pt-5 overflow-hidden">
    <section class=" py-2 px-2 px-md-0">
        <div class="row border border-primary">
            <div class="col-md-3 border"></div>
            <div class="col border border-danger px-2 px-md-5">
                <div id="editPenjual" class="rounded-1 shadow-1 mx-auto mt-2 p-2 p-md-5 w-100 overflow-hidden">
                    <h1 class="">Tambah Produk</h1>
                    <form action="" method="POST" enctype="multipart/form-data">
                            @csrf
                        <div id="profilePicture" class=" my-2 w-100 border border-danger">
                            <div id="bannerProduk" class="border mx-auto rounded-1 border bg-white d-flex shadow-1 w-100 h-100 p-2">
                                <div  class="mx-auto my-auto text-center overflow-hidden d-block">
                                    <div class="row justify-content-center">
                                        <div class="col-5">
                                            <img id="imageProduct"src="/img/icon_UploadIMG.svg" alt="" class="w-100 d-block mx-auto" >
                                        </div>
                                    </div>
                                    <p>klik untuk memasukkan Gambar</p>
                                    <input type="file" id="file" name="foto_produk" class="border rounded-1 start-0 top-0 w-100 @error('foto_produk') is-invalid @enderror" accept="image/*">
                                    @error('foto_produk')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror   
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="border-danger border">
                                <div class="row">
                                    <div class="col border">
                                        <input type="text" name="nama_produk" id="nama_produk" placeholder="Nama produk" class="rounded-1 ps-2 fs-5 d-block mb-3 w-100 @error('nama_produk') is-invalid @enderror" style="height:40px;">
                                        @error('nama_produk')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                        <input type="text" name="harga" id="harga" placeholder="harga" class="rounded-1 ps-2 fs-5 d-block mb-3 w-100 @error('harga') is-invalid @enderror" style="height:40px;">
                                        @error('harga')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col">
                                        <label for="tanggalOpenPreOrder" class=" w-100">Tanggal Open Pre-Order</label>
                                        <input type="date" name="tanggal_pembuatan" placeholder="" class="rounded-1 ps-2 fs-5 mb-3 @error('tanggal_pembuatan') is-invalid @enderror" style="width:100%; height:40px;">
                                        @error('tanggal_pembuatan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                            @enderror
                                    </div>
                                    <div class="col">
                                        <label for="tanggalOpenPreOrder" class=" w-100">Tanggal Pre-Order Jadi</label>
                                        <input type="date" name="tanggal_jadi" placeholder="" class="rounded-1 ps-2 fs-5 mb-3 @error('tanggal_jadi') is-invalid @enderror" style="width:100%; height:40px;">
                                            @error('tanggal_jadi')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                        
                                    </div>
                                    <textarea name="deskripsi" id="deskripsiToko" cols="70" rows="5" placeholder="deskripsi produk" class="rounded-1 p-2 fs-5 w-100 @error('deskripsi') is-invalid @enderror"></textarea>
                                    @error('deskripsi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success mx-auto d-flex fs-4">Tambah</button>
                    </form>
                </div> 
            </div>
        </div>
    </section>
</div>




@stop


@section("scripts")
<script src="/js/fileUploadEditProduct.js"></script>
@stop
