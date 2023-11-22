@extends('layouts.penjual')
@section('penjualContent')  

<div class="content">
    <section class="container px-5 mt-5 py-2">
        <h1 class="text-white fw-bold mb-3">Laporan Bulanan</h1>
        <div id="GrafikDLL" class="d-flex justify-content-between">
            <div class="bg-white p-5 h-full rounded-1 shadow-1" id="chartContainer">
                <canvas id="lineChart"></canvas>
            </div>
            <div id="ketPendapatan" class="bg-white w-15 d-flex items-center p-5 rounded-1 justify-content-center shadow-1">
                <div class="my-auto">
                    <div>
                        <p class="subTitle-2">total Pendapatan Bulan ini</p>
                        <h1 class="color-green fw-700">Rp.210.000</h1>
                        <p class="subTitle-1">jumlah total penjual bulan ini</p>
                    </div>
                    <hr>
                    <div>
                        <p class="subTitle-2">total Pendapatan Bulan lalu</p>
                        <h1 class="color-red fw-700">Rp.110.000</h1>
                        <p class="subTitle-1">jumlah total penjual bulan ini</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container px-5 mt-2 py-2 d-flex justify-content-between">
        <div class="">
            <div class="bg-white totalPenjualan mb-2 shadow-1 p-4 rounded-1 text-center">
                <p>total penjualan bulan ini</p>
                <h1 class="color-green fw-700">10</h1>
                <p>jumlah total penjualan bulan ini</p>
            </div>
            <div class="bg-white totalPenjualan shadow-1 p-4 rounded-1 text-center">
                <p>total penjualan bulan lalu</p>
                <h1 class="color-red fw-700">10</h1>
                <p>jumlah total penjualan bulan lalu</p>

            </div>
        </div>
        <div class="tabelLaporan bg-white shadow-1 rounded-1 overflow-auto">
            
            <table class="border w-100 h-100 rounded-1">
                <thead class="border text-center bg-hijau text-white fw-bold position-sticky">
                    <th class="py-4">No</th>
                    <th class="py-4">Nama Pembeli</th>
                    <th class="py-4">Nama Produk</th>
                    <th class="py-4">Kuantitas</th>
                    <th class="py-4">Total harga</th>
                </thead>
                <tbody class="text-center">
                    <tr class="">
                        <td class="py-4">1</td>
                        <td class="py-4">Abdi sang</td>
                        <td class="py-4">Risoles</td>
                        <td class="py-4">1</td>
                        <td class="py-4">Rp.10.000</td>
                    </tr>
                    <tr class="">
                        <td class="py-4">1</td>
                        <td class="py-4">Abdi sang</td>
                        <td class="py-4">Risoles</td>
                        <td class="py-4">1</td>
                        <td class="py-4">Rp.10.000</td>
                    </tr>
                    <tr class="">
                        <td class="py-4">1</td>
                        <td class="py-4">Abdi sang</td>
                        <td class="py-4">Risoles</td>
                        <td class="py-4">1</td>
                        <td class="py-4">Rp.10.000</td>
                    </tr>
                    <tr class="">
                        <td class="py-4">1</td>
                        <td class="py-4">Abdi sang</td>
                        <td class="py-4">Risoles</td>
                        <td class="py-4">1</td>
                        <td class="py-4">Rp.10.000</td>
                    </tr>
                    <tr class="">
                        <td class="py-4">1</td>
                        <td class="py-4">Abdi sang</td>
                        <td class="py-4">Risoles</td>
                        <td class="py-4">1</td>
                        <td class="py-4">Rp.10.000</td>
                    </tr>
                    <tr class="">
                        <td class="py-4">1</td>
                        <td class="py-4">Abdi sang</td>
                        <td class="py-4">Risoles</td>
                        <td class="py-4">1</td>
                        <td class="py-4">Rp.10.000</td>
                    </tr>
                    <tr class="">
                        <td class="py-4">1</td>
                        <td class="py-4">Abdi sang</td>
                        <td class="py-4">Risoles</td>
                        <td class="py-4">1</td>
                        <td class="py-4">Rp.10.000</td>
                    </tr>
                    <tr class="">
                        <td class="py-4">1</td>
                        <td class="py-4">Abdi sang</td>
                        <td class="py-4">Risoles</td>
                        <td class="py-4">1</td>
                        <td class="py-4">Rp.10.000</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</div>

@endsection
@section("scripts")
<script>
        const canvas = document.getElementById("lineChart");
        const monthNames = ["January", "February", "March", "April", "May", "June",
"July", "August", "September", "October", "November", "December"
];
        const data = {
        labels: monthNames,
        datasets: [{
            label: 'My First Dataset',
            data: [65, 59, 80, 81, 56, 55, 40],
            backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(255, 159, 64, 0.2)',
            'rgba(255, 205, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(201, 203, 207, 0.2)'
            ],
            borderColor: [
            'rgb(255, 99, 132)',
            'rgb(255, 159, 64)',
            'rgb(255, 205, 86)',
            'rgb(75, 192, 192)',
            'rgb(54, 162, 235)',
            'rgb(153, 102, 255)',
            'rgb(201, 203, 207)'
            ],
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