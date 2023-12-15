@extends('layouts.penjual')
@section('penjualContent')  

<div class="content">
    <section class="container px-5 mt-5 py-2 mx-auto">
        <h1 class="text-white">Edit Profile</h1>
        
        <form action="/penjual/editPenjual" method="post" enctype="multipart/form-data">
        @csrf
        <div id="bannerPenjual" class="border mx-auto rounded-1 border bg-white d-flex shadow-1 mt-3">
            <div id="placeHolder" class="mx-auto my-auto text-center">
                <img id="imageBanner" src="" alt="" class="d-none">
                <img id="placeholderImage"src="/img/icon_UploadIMG.svg" alt="" class="" width="100" height="100" >
                <p>klik untuk memasukkan Gambar Header Toko</p>
                <input type="file" id="file" name="header" class="border rounded-1 start-0 top-0 @error('header') is-invalid @enderror" accept="image/*">
                @error('header')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror    
            </div>
        </div>
        <div id="editPenjual" class="rounded-1  shadow-1 mx-auto mt-2 p-5">
            <div id="profilePicture" class=" my-2">
                {{-- <div class="mb-2 text-center">
                    <img id="profilePic" src="/img/icon_Profile.svg" alt="Img Profile" class="rounded-circle" style="width:100px; height:100px;">
                    <p class="fs-5 my-2">Ganti Foto profil</p>
                    <input id="fileProfile" type="file" accept="image/*" class="d-block border mx-auto my-2">
                </div> --}}
                <div class="d-flex justify-content-center items-center my-3">
                    <div class="me-2">
                        <input type="hidden" name="user_id" value="{{ $id }}">
                        <input type="text" name="nama_bank" placeholder="Nama Bank" class="rounded-1 ps-2 fs-5 d-block mb-3 @error('nama_bank') is-invalid @enderror" style="width:100%; height:40px;">
                        @error('nama_bank')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror  
                        <input type="text" name="rekening" placeholder="password" class="rounded-1 ps-2 fs-5 d-block mb-3 @error('rekening') is-invalid @enderror" style="width:100%; height:40px;">
                        @error('rekening')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror  
                        {{-- <input type="password" name="konfirmasi" placeholder="konfirmasi password" class="rounded-1 ps-2 fs-5 d-block mb-3" style="width:100%; height:40px;"> --}}
                        <textarea name="deskripsi" id="deskripsiToko" cols="60" rows="5" placeholder="deskripsi toko" class="rounded-1 p-2 fs-5 @error('deskripsi') is-invalid @enderror"></textarea>
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

@endsection

@section('scripts')
<script src="/js/fileUploadEditProfile.js"></script>
@endsection