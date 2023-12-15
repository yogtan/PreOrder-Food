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
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>

    @include('partials.navbar')

    <section class="login align-items-center">
        <div class="container mt-1 mx-auto ">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <h2 class="login-tittle text-center">Login</h2>
            <form action="/login" method="post">
                @csrf <!-- Token CSRF untuk melindungi form dari serangan CSRF -->
                <div class="form-group pt-4 ">
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                        placeholder="  Email" required>
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="  Password"
                        required>
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                    <button type="submit" class="login-button btn">Login</button>
                    <div class="text-center">
                    <p class="pt-4">Dont have an account merchant or customer? <br><a href="/register-merchant">Create Merchant</a> <a href="/register">Create Customer</a></p>
                    </div>
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

    @yield("scripts")
</body>

</html>
