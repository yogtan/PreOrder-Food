@extends('layouts.penjual')
@section('penjualContent')  

<div class="content">
    <section class="container px-5 mt-5 py-2">
        <div id="editPenjual" class="rounded-1  shadow-1 mx-auto mt-2 p-5">
            <h1 class="">Tambah Tanggal Pembuatan {{ $produk->nama_produk }} Baru</h1>
            <form action="/penjual/product/addPembuatan" method="POST" enctype="multipart/form-data">
                @csrf
            <div id="profilePicture" class=" my-2">
                
                <div class="d-flex justify-content-center items-center my-3">
                    <div class="me-2">
                        <div class="d-flex justify-content-between">
                            <div class="w-50 pe-2">
                                <label for="tanggalOpenPreOrder" class=" w-100">Tanggal Open Pre-Order</label>
                                <input type="date" name="tanggal_pembuatan" placeholder="" class="rounded-1 ps-2 fs-5 mb-3 @error('tanggal_pembuatan') is-invalid @enderror" style="width:100%; height:40px;">
                                @error('tanggal_pembuatan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror 
                            </div>
                            <div class="w-50 ps-2">
                                <label for="tanggalOpenPreOrder" class=" w-100">Tanggal Pre-Order Jadi</label>
                                <input type="date" name="tanggal_jadi" placeholder="" class="rounded-1 ps-2 fs-5 mb-3 @error('tanggal_jadi') is-invalid @enderror" style="width:100%; height:40px;">
                                @error('tanggal_jadi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <input type="hidden" name="produk_id" value="{{ $produk->id }}">
                        </div>
                        {{-- <textarea name="deskripsi" id="deskripsiToko" cols="70" rows="5" placeholder="deskripsi produk" class="rounded-1 p-2 fs-5"></textarea> --}}
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success mx-auto d-flex fs-4">Tambah</button>
        </form>
        </div>
    </section>
</div>

@stop


@section("scripts")
<script src="/js/fileUploadEditProduct.js"></script>
@stop
