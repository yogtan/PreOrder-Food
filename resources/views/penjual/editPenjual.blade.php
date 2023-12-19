@extends('layouts.penjual')
@section('penjualContent')  

<div class="content mt-md-5 h-100 px-2 ">
    <div class=" py-2 px-2 px-md-0">
        <div class="row ">
            <div class="col-12 col-md-3 col-xxl-2 "></div>
            <div class="col-12 col-md-9 col-xxl-10 px-md-5 px-2">
                <div id="editPenjual" class=" px-2 rounded-1 shadow-1 mx-auto mt-2 p-3 p-md-5 w-100 h-100 ">
                    <h1 class="">Edit Penjual</h1>
                    <form action="/penjual/editPenjual" method="post" enctype="multipart/form-data">
                            @csrf
                        <div id="" class=" my-2 w-100 ">
                            <div id="bannerPenjual" class=" mx-auto rounded-1  bg-white d-flex shadow-1 w-100 h-100 p-2">
                                <div class="mx-auto my-auto py-5 text-center overflow-hidden d-block">
                                    <div  class="row justify-content-center">
                                        <div class="col-5">
                                            <img id="imageBanner"src="/img/icon_UploadIMG.svg" alt="" class="w-100 d-block mx-auto" >
                                        </div>
                                    </div>
                                    <p>klik untuk memasukkan Gambar</p>
                                    <input type="file" id="file" name="header" class="border rounded-1 start-0 top-0 d-none @error('header') is-invalid @enderror" accept="image/*">
                                    @error('header')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="">
                                <div class="row">
                                    <div class="col ">
                                        <input type="hidden" name="user_id" value="{{ $id }}">
                                        <input type="text" name="nama_bank" placeholder="Nama Bank" class="rounded-1 ps-2 fs-5 d-block mb-3 @error('nama_bank') is-invalid @enderror" style="width:100%; height:40px;">
                                        @error('nama_bank')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror  
                                        <input type="text" name="rekening" placeholder="rekening" class="rounded-1 ps-2 fs-5 d-block mb-3 @error('rekening') is-invalid @enderror" style="width:100%; height:40px;">
                                        @error('rekening')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror  
                                    </div>
                                </div>
                                    <textarea name="deskripsi" id="deskripsiToko" cols="60" rows="5" placeholder="deskripsi toko" class="rounded-1 p-2 fs-5 w-100 @error('deskripsi') is-invalid @enderror"></textarea>
                                    @error('deskripsi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror  
                            </div>
                            <button type="submit" class="btn btn-success mx-auto d-flex fs-4">Simpan</button>
                        </div>
                    </form>
                </div> 
            </div>
        </div>
    </div>
</div>
@endsection



@section('scripts')
<script src="/js/fileUploadEditProfile.js"></script>
@endsection