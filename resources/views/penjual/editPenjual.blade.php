@extends('layouts.penjual')
@section('penjualContent')  

<div class="content">
    <section class="container px-5 mt-5 py-2">
        <h1 class="text-white">Edit Profile</h1>
        <div id="bannerPenjual" class="border mx-auto rounded-1 border bg-white d-flex shadow-1 mt-3">
            <div id="placeHolder" class="mx-auto my-auto text-center">
                <img id="imageBanner" src="" alt="" class="d-none">
                <img id="placeholderImage"src="/img/icon_UploadIMG.svg" alt="" class="" width="100" height="100" >
                <p>klik untuk memasukkan Gambar</p>
                <input type="file" id="file" class="border rounded-1 start-0 top-0" accept="image/*">    
            </div>
        </div>
        <div id="editPenjual" class="rounded-1  shadow-1 mx-auto mt-2 p-5">
            <div id="profilePicture" class=" my-2">
                <div class="mb-2 text-center">
                    <img id="profilePic" src="/img/icon_Profile.svg" alt="Img Profile" class="rounded-circle" style="width:100px; height:100px;">
                    <p class="fs-5 my-2">Ganti Foto profil</p>
                    <input id="fileProfile" type="file" accept="image/*" class="d-block border mx-auto my-2">
                </div>
                <div class="d-flex justify-content-center items-center my-3">
                    <div class="me-2">
                        <input type="text" name="nama" placeholder="Nama toko" class="rounded-1 ps-2 fs-5 d-block mb-3" style="width:100%; height:40px;">
                        <input type="password" name="password" placeholder="password" class="rounded-1 ps-2 fs-5 d-block mb-3" style="width:100%; height:40px;">
                        <input type="password" name="konfirmasi" placeholder="konfirmasi password" class="rounded-1 ps-2 fs-5 d-block mb-3" style="width:100%; height:40px;">
                        <textarea name="" id="deskripsiToko" cols="60" rows="5" placeholder="deskripsi toko" class="rounded-1 p-2 fs-5"></textarea>
                    </div>
                </div>
            </div>
            <button class="btn btn-success mx-auto d-flex fs-4">Simpan</button>
        </div>
    </section>
</div>

@endsection

@section('scripts')
<script src="/js/fileUploadEditProfile.js"></script>
@endsection