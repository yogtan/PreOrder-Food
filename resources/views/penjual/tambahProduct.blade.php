@extends('layouts.penjual')
@section('penjualContent')  

<div class="content">
    <section class="container px-5 mt-5 py-2">
        <div id="editPenjual" class="rounded-1  shadow-1 mx-auto mt-2 p-5">
            <h1 class="">Tambah Produk</h1>
            <div id="profilePicture" class=" my-2">
                <div id="bannerProduk" class="border mx-auto rounded-1 border bg-white d-flex shadow-1 w-100 h-100 p-2">
                    <div  class="mx-auto my-auto text-center">
                        <!-- <img id="imageBanner" src="" alt="" class="d-none"> -->
                        <img id="imageProduct"src="/img/icon_UploadIMG.svg" alt="" class="" >
                        <div id="placeholder" class="">
                            <p>klik untuk memasukkan Gambar</p>
                            <input type="file" id="file" class="border rounded-1 start-0 top-0" accept="image/*">    
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center items-center my-3">
                    <div class="me-2">
                        <div class="d-flex justify-content-between">
                            <input type="text" name="nama" placeholder="Nama produk" class="rounded-1 ps-2 fs-5 d-block mb-3 me-2" style="width:50%; height:40px;">
                            <input type="text" name="harga" placeholder="harga" class="rounded-1 ps-2 fs-5 d-block mb-3 ms-2" style="width:50%; height:40px;">

                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="w-50 pe-2">
                                <label for="tanggalOpenPreOrder" class=" w-100">Tanggal Open Pre-Order</label>
                                <input type="date" name="tanggalOpenPreOrder" placeholder="" class="rounded-1 ps-2 fs-5 mb-3" style="width:100%; height:40px;">
                            </div>
                            <div class="w-50 ps-2">
                                <label for="tanggalOpenPreOrder" class=" w-100">Tanggal close Order</label>
                                <input type="date" name="tanggalOpenPreOrder" placeholder="" class="rounded-1 ps-2 fs-5 mb-3" style="width:100%; height:40px;">
                            </div>
                            
                        </div>
                        <textarea name="" id="deskripsiToko" cols="70" rows="5" placeholder="deskripsi produk" class="rounded-1 p-2 fs-5"></textarea>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success mx-auto d-flex fs-4">Tambah</button>
        </div>
    </section>
</div>

@stop


@section("scripts")
<script src="/js/fileUploadEditProduct.js"></script>
@stop
