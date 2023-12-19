@extends('layouts.penjual')
@section('penjualContent')  

<section class="mt-2 mb-5 pb-5 d-flex justify-content-center d-block">
    <div class="row  w-100 justify-content-center">
        <div class="col-md-3 col-12 "></div>
        <div class="col-md-9 col-12 ">
            <div class=" w-100 mb-3">
                <h1 class="fw-bold mb-3">Laporan Bulanan</h1>
                <div id="" class="row">
                    <div id="GrafikDLL" class=" col-12 col-md-8 d-flex justify-content-center">
                        <div class="bg-white p-5 h-100 rounded-1 shadow-1 w-100 shadow-1 d-flex align-items-center" id="chartContainer">
                            <canvas id="lineChart"></canvas>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 mt-2 mt-md-0">
                        <div id="" class="bg-white w-15 d-flex items-center p-5 rounded-1 w-100 justify-content-center shadow-1">
                            <div class="my-auto">
                                <div>
                                    <p class="subTitle-2">total Pendapatan Bulan ini</p>
                                    <h1 class="color-green fw-700">Rp {{ number_format($thisMonthEarn, 0, ',', '.') }}</h1>
                                    <p class="subTitle-1">jumlah total penjual bulan ini</p>
                                </div>
                                <hr>
                                <div>
                                    <p class="subTitle-2">total Pendapatan Bulan lalu</p>
                                    <h1 class="color-red fw-700">Rp {{ number_format($lastMonthEarn, 0, ',', '.') }}</h1>
                                    <p class="subTitle-1">jumlah total penjual bulan lalu</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4">
                        <div class="bg-white totalPenjualan mb-2 shadow-1 p-4 rounded-1 text-center">
                            <p>total penjualan bulan ini</p>
                            <h1 class="color-green fw-700">{{ $totalOrdersThisMonth }}</h1>
                            <p>jumlah total penjualan bulan ini</p>
                        </div>
                        <div class="bg-white totalPenjualan shadow-1 p-4 rounded-1 text-center">
                            <p>total penjualan bulan lalu</p>
                            <h1 class="color-red fw-700">{{ $totalOrdersLastMonth }}</h1>
                            <p>jumlah total penjualan bulan lalu</p>
            
                        </div>
                </div>
                <div class="col-12 col-md-8 mt-2 md-mt-0">
                    <div class="bg-white shadow-1 rounded-1  p-md-3 border  ">
                        <table id="laporanTable" class="border w-100 rounded-1">
                            <thead class="border text-center bg-hijau text-white fw-bold position-sticky">
                                <th class="py-4">No</th>
                                <th class="py-4">Nama Pembeli</th>
                                <th class="py-4">Nama Produk</th>
                                <th class="py-4">Kuantitas</th>
                                <th class="py-4">Total harga</th>
                            </thead>
                            <tbody class="text-center">
                                @foreach ( $orderThisMonth as $order)
                                <tr class="">
                                        
                                    <td class="py-4">{{ $loop->iteration }}</td>
                                    <td class="py-4">{{ $order->name }}</td>
                                    <td class="py-4">{{ $order->nama_produk }}</td>
                                    <td class="py-4">{{ $order->total_produk }}</td>
                                    <td class="py-4">Rp {{ number_format($order->harga_pembayaran, 0, ',', '.') }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div> 
                </div>
            </div>
        </div>
        
    </div>
</section>

@endsection
@section("scripts")
<script>
    const canvas = document.getElementById("lineChart");
    const data = {
        labels: {!! json_encode($months) !!},
        datasets: [{
            label: 'Earnings by Month',
            data: {!! json_encode(array_values($earningsByMonth)) !!},
            backgroundColor: 'rgba(255, 99, 132, 0.2)',
            borderColor: 'rgb(255, 99, 132)',
            borderWidth: 1
        }]
    };

    new Chart(canvas, {
        type: 'bar',
        data: data,
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
@endsection