<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/register.css">
</head>

<body>

    @include('partials.navbar')

    <section class="daftar align-items-center">
        <div class="container  mx-auto col-md-6 col-12">
            <h2 class="daftar-title text-center">Create Account Merchant</h2>
            <form action="/register-merchant" method="post" enctype="multipart/form-data" class="mx-auto px-2">
                @csrf <!-- Token CSRF untuk melindungi form dari serangan CSRF -->
                <div class="form-group pt-4">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Nama Toko" required>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <input type="text" class="form-control @error('telepon') is-invalid @enderror" id="telepon" name="telepon"
                        placeholder="  Nomor Telepon" required>
                        @error('telepon')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="ownerEmail" name="email" placeholder="  Email" required>
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
                        <div class="file-input">
                            <label for="ktpUpload" class="form-label">Upload Foto KTP</label>
                            <input type="file" class="input-file @error ('foto_ktp') is-invalid @enderror " id="ktpUpload" name="foto_ktp" accept="image/*" required>
                        </div>
                        @error('foto_ktp')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <button type="submit" class="daftar-button btn">Create Account Merchant</button>
                        
                        <p class="text-center pt-4">Already have an account merchant? <a href="/login">Login here</a></p>
                        
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
