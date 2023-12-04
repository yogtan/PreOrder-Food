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

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/product.css">
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/outlet.css">
    <link rel="stylesheet" href="../css/orders.css">
    <link rel="stylesheet" href="../css/users.css">
    <link rel="stylesheet" href="../css/history.css">
</head>

<body>

    @include('partials.navbar')
    @yield('container')
    @include('partials.footer')



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        // $(document).ready(function() {
        //     // Menangani klik pada card ProductPertama
        //     $('.Product .card').click(function() {
        //         window.location.href = '/product';
        //     });
    
        //     // Menangani klik pada card ProductKedua
        //     $('.ProductKedua .card').click(function() {
        //         window.location.href = '/product';
        //     });
        // });
        // $(document).ready(function() {
        //     // Menangani klik pada card product
        //     $('.card').click(function() {
        //         // Dapatkan ID produk atau jalankan aksi yang sesuai
        //         var productId = $(this).data('product-id');
        //         window.location.href = '/product/' + productId;
        //     });
        // });


        
    </script>
    
</body>

</html>
