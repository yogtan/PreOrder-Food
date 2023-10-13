<!DOCTYPE html>
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
    <link rel="stylesheet" href="../css/daftar.css">

    <link rel="stylesheet" href="../css/admin.css">
</head>

<body>

    @include('partials.navbar')
    <section class="daftar align-items-center">
        <div class="container mt-5 mx-auto">
            <h2 class="daftar-title text-center">Daftar</h2>
            <form action="/daftar" method="post">
                @csrf <!-- Token CSRF untuk melindungi form dari serangan CSRF -->
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required>
    
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name "email" required>
    
                    <label for="phone_number">Nomor Handphone</label>
                    <input type="text" class="form-control" id="phone_number" name="phone_number" required>
    
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
    
                    <button type="submit" class="daftar-button btn">Daftar</button>
                </div>
            </form>
        </div>
    </section>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            // Menangani klik pada card ProductPertama
            $('.ProductPertama .card').click(function() {
                window.location.href = '/product/index';
            });

            // Menangani klik pada card ProductKedua
            $('.ProductKedua .card').click(function() {
                window.location.href = '/product/index';
            });
        });
    </script>

</body>

</html>
