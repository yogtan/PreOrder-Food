@extends('layouts/main')

@section('container')
    <section class="herohistory mx-3 px-1">
      <div>
        <div class=" container pt-2 text-align-center col-12 col-sm-12 mx-auto">
            <h1>Purchase History <br></h1>
        </div>
        <div class="overflow-x-auto py-5 d-flex justify-content-center">
            <table class="table table-bordered mt-4 " style="width: 1000px">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Total Produk</th>
                        <th scope="col">Harga Produk</th>
                        <th scope="col">Status</th>
                        <th scope="col">Tanggal Jadi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $orders)
                        <tr>

                            <td>{{ $orders->total_produk }}</td>
                            <td>{{ $orders->harga_pembayaran }}</td>
                            <td>{{ $orders->status }}</td>
                            <td>{{ $orders->tanggal_jadi }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- <div class="card" style="width: 80rem; height: 10rem">
                <p class="pt-1" >  Pengiriman 28 Nov 2023</p> 
                <hr>
                </div>
            </div>

            <div class="card" style="width: 80rem; height: 10rem">
                <p class="pt-1" >  Pengiriman 28 Nov 2023</p> 
                <hr>
                </div>
            </div>

            <div class="card" style="width: 80rem; height: 10rem">
                <p class="pt-1" >  Pengiriman 28 Nov 2023</p> 
                <hr>
                </div>
            </div>  
        </div> --}}
      </div>

      </div>
    </section>
@endsection
