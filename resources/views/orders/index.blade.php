@extends('layouts/main')

@section('container')
    <section class="herorders">
        <div class="container pt-2 mt-5">

            <div class="row justify-content-center">

                <div class="col-md-6">
                    <div class="order-makanan">
                        <h3>{{ $produk->name }}</h3>
                    </div>
                    <div class="pt-3"></div>
                    <div class="card">

                        <div class="card-body">
                            <p class="pesanan">Ringkasan Pesanan</p>
                            <div style="float: right;" class="d-flex pt-5 ">
                                <button class="btn btn-sm btn-dark" onclick="decrementQty()"><b>-</b></button>
                                <!-- Mengubah warna tombol dan teks -->
                                <span id="quantity" class="mx-2">1</span>
                                <button class="btn btn-sm btn-dark" onclick="incrementQty()"><b>+</b></button>
                                <!-- Mengubah warna tombol dan teks -->
                            </div>
                            <div class="d-flex pt-4">
                                @if ($produk->foto_produk)
                                <img src="{{ asset('storage/'. $produk->foto_produk) }}" class="card-img-top" alt="...">
                                @else
                                {{-- <img src="/img/Poster-Product.svg" class="card-img-top" alt="Nasi Goreng" width=298> --}}
                                <img src="/img/Poster-Product.svg" alt="Gambar Produk" class="product-image" width="400px">
                                @endif
                                <div style="margin-left: 20px">
                                    <p class="produk mb-0">{{ $produk->nama_produk }}</p>
                                    <p class="harga mb-0">Rp {{ number_format($produk->harga, 0, ',', '.') }}</p>
                                </div>
                            </div>

                            <hr>
                            <p id="subtotal" class="">Subtotal Pesanan<span style="float: right;">Rp {{ number_format($produk->harga, 0, ',', '.') }}</span></p>
                            <p id="total" class="pesanan2">Total Pembayaran<span style="float: right;">Rp {{ number_format($produk->harga, 0, ',', '.') }}</span></p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center pt-5">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <p class="pesanan">Rincian Pembayaran</p>
                            <label class="pesanan2" for="bank">Choose a Bank</label>
                            <select name="bank" id="bank" size="1" style="width: 605px; height: 30px;">
                                <option value="bank1">BRI - Bank Rakyat Indonesia</option>
                                <option value="bank2">DANA</option>
                            </select>



                            <p class="pesanan2 pt-4 mb-0">Transfer to</p>
                            <div style="position: relative; width: 100%;">
                                <input type="text" name="transfer_amount" class="form-control" style="width: 605px;"
                                    value="45689340500" readonly />
                                <span class="input-group-text copy-text" onclick="copyText()"
                                    style="position: absolute; right: -2px; top: 50%; transform: translateY(-50%); cursor: pointer;">Copy</span>
                            </div>


                            <p class="pesanan2 pt-3 mb-0">Grand Total</p>
                            <div style="position: relative; width: 100%;">
                                <input type="text" id="grandTotalInput" name="grand_total" class="form-control" style="width: 605px" value="Rp. 15.000" readonly />
                                <span class="input-group-text copy-text" onclick="copyGrandTotal()" style="position: absolute; right: -2px; top: 50%; transform: translateY(-50%); cursor: pointer;">Copy</span>
                            </div>
                            <form action="/order" method="POST" enctype="multipart/form-data">
                                @csrf
                            <!-- Input hidden untuk ID user pemesan -->
                            <input type="hidden" name="pembuatan_id" value="{{ $produk->id }}">
                            <input type="hidden" name="user_id" value="{{ Auth()->user()->id }}">
                            <input type="hidden" name="tanggal_pemesanan" value="{{ today()->format('Y-m-d') }}">
                            <input type="hidden" name="total_produk" id="hiddenQuantity" value=1>
                            <input type="hidden" name="harga_pembayaran" id="harga_pembayaran" value=1>
                            <input type="hidden" name="keterangan" id="keterangan" value="Coba">

                            <p class="pesanan2 pt-3  mb-0">Upload Payment Image</p>
                            <input type="file" name="bukti_pembayaran" accept="image/*" id="payment_image"
                                style="width: 605px; height: 30px;" />
                            <div class="text-center pt-3">
                                <button id="uploadTransactionButton" type="submit" class="uploadbtn">Order Now!</button>
                            </div>
                        </form>
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
                                
                                <p>Contohhhh ajaaa</p>
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
        
                subtotalElement.innerHTML = `Subtotal Pesanan<span style="float: right;">Rp ${subtotal.toLocaleString()}</span>`;
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
