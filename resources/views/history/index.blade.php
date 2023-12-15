@extends('layouts/main')

@section('container')
    <section class="herohistory">
        <div class="container pt-2 text-align-center">
            <h1>Purchase History <br></h1>
            <table class="table table-bordered mt-4">
                <thead class="table-dark">
                  <tr>
                        <th scope="col">Makanan</th>
                        <th scope="col">Total Produk</th>
                        <th scope="col">Harga Produk</th>
                        <th scope="col">Status</th>
                        <th scope="col">Tanggal Jadi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($orders as $orders)
                  <tr>
                     <td>{{ $orders->nama_produk }}</td>
                     <td>{{ $orders->total_produk }}</td>
                     <td>{{ $orders->harga_pembayaran }}</td>
                     <td>{{ $orders->status }}</td>
                     <td>{{ $orders->tanggal_jadi }}</td>
                   </tr>   
                  @endforeach
                </tbody>
              </table>
              <div class="btn-showmore  pt-5">
                
                <a class="btn" href="/home">Home</a>
              </div>
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
    </section>
@endsection
