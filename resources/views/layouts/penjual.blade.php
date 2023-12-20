<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Website Pre-Order</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href='/css/penjual.css'/>
    
    <title></title>
</head>

<body>
    @include('partials.NavbarPenjual')
    @include('partials.headerPenjual')
    @if (auth()->user()->status == "Belum Verifikasi")
    <div class="content">
        <div class="container px-5 mt-5">
            <div class="row">
                <div class="col-md-3 "></div>
                <div class="col">
                    <h1 class="">Akun Anda Belum di Verifikasi</h1>
                </div>
            </div>
        </div>
    </div>
    @else
        @yield('penjualContent')
        
    @endif
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    @yield('scripts')
    <!-- file Upload -->
    <!-- <script src="/js/fileUpload.js"></script> -->
</body>

</html>