@extends('layouts.penjual')
@section('penjualContent')  

<div class="content d-flex justify-content-center">
    <div class="row container ">
        <div class="col-md-4 col"></div>
        <div class="col-md-8 col">
            <div class="mt-5 ">
                <h1 class="fw-bold mb-3">Laporan Bulanan</h1>
                <div id="" class="row gap-2">
                    <div id="GrafikDLL" class="col">
                        <div class="bg-white p-5 h-100 rounded-1 shadow-1 w-100 shadow-1" id="chartContainer">
                            <canvas id="lineChart"></canvas>
                        </div>
                    </div>
                    <div class="col">
                        <div id="ketPendapatan" class="bg-white w-15 d-flex items-center p-5 rounded-1 justify-content-center shadow-1">
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
            <div class="row mt-2 gap-2">
                <div class="col-12 col-md-6 ">
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
                <div class="col col-md-6 bg-white shadow-1 rounded-1 overflow-auto container p-md-3 border">
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