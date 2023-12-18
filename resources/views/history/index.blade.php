@extends('layouts/main')

@section('container')
    <section class="herohistory">
        <div class="container pt-2 text-align-center ">
            <h1>Purchase History <br></h1>
            <table class="table table-bordered mt-4 w-100 ">
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
    </section>
@endsection
