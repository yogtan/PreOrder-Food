@extends('layouts/main')

@section('container')
    <section class="herorders">
        <div class="container pt-2 mt-5">

            <div class="row justify-content-center">

                <div class="col-md-6">
                    <div class="order-makanan">
                        <h3>Mas-Teknik</h3>
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

                                <img src="img/Poster-Product.svg" height="80px" style="border-radius: 10px;"
                                    class="mr-3 ml-3" alt="...">
                                <div style="margin-left: 20px">
                                    <p class="produk mb-0">Nasi Goreng</p>
                                    <p class="harga mb-0">Rp 50,000</p>
                                </div>
                            </div>

                            <hr>
                            <p class="">Subtotal Pesanan<span style="float: right;">Rp 500,000</span></p>
                            <p class="pesanan2">Total Pembayaran<span style="float: right;">Rp 550,000</span></p>

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
                                <input type="text" name="grand_total" class="form-control" style="width: 605px"
                                    value="Rp. 15.000" readonly />
                                <span class="input-group-text copy-text" onclick="copyGrandTotal()"
                                    style="position: absolute; right: -2px; top: 50%; transform: translateY(-50%); cursor: pointer;">Copy</span>
                            </div>


                            <p class="pesanan2 pt-3  mb-0">Upload Payment Image</p>
                            <input type="file" name="payment_image" accept="image/*" id="payment_image"
                                style="width: 605px; height: 30px;" />
                            <div class="text-center pt-3">
                                <button id="uploadTransactionButton" type="button" class="uploadbtn">Upload
                                    Transaction Image</button>
                            </div>
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
                if (transferDetails.style.display === 'none') {
                    transferDetails.style.display = 'block';
                } else {
                    transferDetails.style.display = 'none';
                }
            }
        </script>
        <script>
            let quantity = 1;

            function incrementQty() {
                quantity++;
                document.getElementById("quantity").innerText = quantity;
            }

            function decrementQty() {
                if (quantity > 1) {
                    quantity--;
                    document.getElementById("quantity").innerText = quantity;
                }
            }
        </script>
    </section>
@endsection
