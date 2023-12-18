@extends('layouts/main')

@section('container')
    <section class="herorders ">
        <div class="container ">

            <div class="row justify-content-center">
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
                <div class="col-md-6">
                    <div class="order-makanan">
                        <h3>{{ $produk->name }}</h3>
                    </div>
                    <div class="pt-3"></div>
                    <div id="card" class="card custom-card ">

                        <div class="card-body w-100 ">
                            <p class="pesanan">Ringkasan Pesanan</p>

                            <div class="d-flex">
                                @if ($produk->foto_produk)
                                    <img src="{{ asset('storage/' . $produk->foto_produk) }}"
                                        class="card-img-top custom-card-img" alt="..." width="600">
                                @else
                                    {{-- <img src="/img/Poster-Product.svg" class="card-img-top" alt="Nasi Goreng" width=298> --}}
                                    <img src="/img/Poster-Product.svg" alt="Gambar Produk" class="product-image"
                                        width="400px">
                                @endif
                                <div style="margin-left: 20px">
                                    <p class="produk mb-0">{{ $produk->nama_produk }}</p>
                                    <p class="harga mb-3">Rp {{ number_format($produk->harga, 0, ',', '.') }}</p>
                                    <button class="btn btn-sm btn-dark" onclick="decrementQty()"><b>-</b></button>
                                    <!-- Mengubah warna tombol dan teks -->
                                    <span id="quantity" class="mx-2">1</span>
                                    <button class="btn btn-sm btn-dark" onclick="incrementQty()"><b>+</b></button>
                                    <!-- Mengubah warna tombol dan teks -->
                                </div>
                            </div>

                            <hr>
                            <p id="subtotal" class="">Subtotal Pesanan<span style="float: right;">Rp
                                    {{ number_format($produk->harga, 0, ',', '.') }}</span></p>
                            <p id="total" class="pesanan2">Total Pembayaran<span style="float: right;">Rp
                                    {{ number_format($produk->harga, 0, ',', '.') }}</span></p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center pt-5">
                <div class="col-md-6">
                    <div class="card ">
                        <div class="card-body w-100">
                            <p class="pesanan">Rincian Pembayaran</p>
                            <label class="pesanan2" for="bank">Bank Penjual</label>
                            <div class="position-relative w-100 ms-auto ">
                                <input type="text" name="bank_name" class="form-control  w-100" "
                                            value="{{ $produk->nama_bank }}" readonly />
                                    </div>


                                    <p class="pesanan2 pt-4 mb-0">Transfer to</p>
                                    {{-- <div style="position: relative; width: 100%;"> --}}
                                        <div class=" position-relative w-100">
                                            <input type="text" name="transfer_amount" class="form-control custom-input w-100"
                                                value="{{ $produk->rekening }}" readonly />

                                            <span class="input-group-text copy-text" onclick="copyText()"
                                                style="position: absolute; right: -2px; top: 50%; transform: translateY(-50%); cursor: pointer;">Copy</span>
                                        </div>
                                    {{-- </div> --}}


                                    <p class="pesanan2 pt-3 mb-0">Grand Total</p>
                                    <div style="position: relative; width: 100%;">
                                        <input type="text" id="grandTotalInput" name="grand_total" class="form-control  w-100"
                                             value="{{ $produk->harga }}" readonly />
                                        <span class="input-group-text copy-text" onclick="copyGrandTotal()"
                                            style="position: absolute; right: -2px; top: 50%; transform: translateY(-50%); cursor: pointer;">Copy</span>
                                    </div>
                                    <form action="/order" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <!-- Input hidden untuk ID user pemesan -->
                                        <input type="hidden" name="pembuatan_id" value="{{ $produk->id }}">
                                        <input type="hidden" name="user_id" value="{{ Auth()->user()->id }}">
                                        <input type="hidden" name="tanggal_pemesanan" value="{{ today()->format('Y-m-d') }}">
                                        <input type="hidden" name="total_produk" id="hiddenQuantity" value=1>
                                        <input type="hidden" name="harga_pembayaran" id="harga_pembayaran"
                                            value={{ $produk->harga }}>
                                        {{-- <input type="hidden" name="keterangan" id="keterangan" value="Coba"> --}}
                                        <textarea name="keterangan" id="keterangan" cols="57" rows="5" placeholder="Keterangan Pemesanan produk"
                                            class="rounded-1 p-2 fs-5 mt-3  w-100"></textarea>
                                        <p class="pesanan2 pt-3  mb-0">Upload Payment Image</p>
                                        <input type="file" name="bukti_pembayaran" accept="image/*" id="payment_image"
                                            style=" w-100 height: 30px;"
                                            class=" @error('bukti_pembayaran') is-invalid @enderror" />
                                        @error('bukti_pembayaran')
        <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
    @enderror
                                        <div class="text-center pt-3">
                                            <button id="uploadTransactionButton" type="submit" class="uploadbtn">Order
                                                Now!</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card baru untuk " How to transfer" -->
                                <div class="row justify-content-center pt-5 mb-5">
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <p class="pesanan">How to transfer</p>
                                                <div id="transferDetails" style="display: none;">

                                                    <p>Contohhhh ajaaa</p>
                                                </div>
                                                <button class="btn btn-link" onclick="toggleTransferDetails()">Show
                                                    Transfer Details</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
            <!-- Card baru untuk "How to transfer" -->
            <div class="row justify-content-center pt-5">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <p class="pesanan">How to transfer</p>
                            <div id="transferDetails" style="display: none;">
                                
                                <p>1. Klik jumlah makanan yang ingin dipesan</p>
                                <p>2. Transfer ke Rekening penjual</p>
                                <p>3. Upload bukti transfer</p>
                                <p>4. Tambahkan keterangan pesanan (opsional)</p>
                                <p>5. Klik Tombol Pesan</p>
                            </div>
                            <button class="btn btn-link" onclick="toggleTransferDetails()">Show Transfer Details</button>
                        </div>
                    </div>
                </div>
            </div>

                            </div>

                            <script>
                                function copyText() {
                                    const transferAmount = document.querySelector('input[name="transfer_amount"]');
                                    transferAmount.select();
                                    document.execCommand('copy');
                                    alert('Teks berhasil disalin: ' + transferAmount.value);
                                }

                                function copyGrandTotal() {
                                    const grandTotal = document.querySelector('input[name="grand_total"]');
                                    grandTotal.select();
                                    document.execCommand('copy');
                                    alert('Teks berhasil disalin: ' + grandTotal.value);
                                }

                                function toggleTransferDetails() {
                                    const transferDetails = document.getElementById('transferDetails');
                                    transferDetails.style.display = transferDetails.style.display === 'none' ? 'block' : 'none';
                                }
                            </script>

                            <script>
                                let quantity = 1;
                                const hargaPerProduk = {{ $produk->harga }}; // Ganti dengan harga per produk yang sesuai

                                function updateSubtotal() {
                                    const subtotalElement = document.getElementById('subtotal');
                                    const totalElement = document.getElementById('total');

                                    const subtotal = quantity * hargaPerProduk;
                                    const total = subtotal
                                    const grandTotal = total.toFixed(2);

                                    subtotalElement.innerHTML =
                                        `Subtotal Pesanan<span style="float: right;">Rp ${subtotal.toLocaleString()}</span>`;
                                    totalElement.innerHTML = `Total Pembayaran<span style="float: right;">Rp ${total.toLocaleString()}</span>`;
                                    grandTotalInput.value = `Rp ${grandTotal.replace('.', ',')}`;
                                    document.getElementById("harga_pembayaran").value = grandTotal;
                                }

                                function incrementQty() {
                                    quantity++;
                                    document.getElementById("quantity").innerText = quantity;
                                    updateSubtotal();
                                    updateQuantity();
                                }

                                function decrementQty() {
                                    if (quantity > 1) {
                                        quantity--;
                                        document.getElementById("quantity").innerText = quantity;
                                        updateSubtotal();
                                        updateQuantity();
                                    }
                                }

                                function updateQuantity() {
                                    document.getElementById("hiddenQuantity").value = quantity;
                                }
                            </script>
    </section>
@endsection
