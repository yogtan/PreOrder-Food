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
    <link rel="stylesheet" href="../css/register.css">

    <link rel="stylesheet" href="../css/admin.css">
</head>

<body>

    @include('partials.navbar')

    <section class="daftar align-items-center">
        <div class="container mt-1  mx-auto ">
            <h2 class="daftar-title text-center">Create Account Merchant</h2>
            <form action="/login" method="post">
                @csrf <!-- Token CSRF untuk melindungi form dari serangan CSRF -->
                <div class="form-group pt-4">
                    <input type="text" class="form-control" id="restaurantName" name="restaurantName"
                        placeholder="  Nama Restoran" required>

                    <input type="text" class="form-control" id="fullName" name="fullName"
                        placeholder="  Nama Lengkap" required>

                        
                        
                        
                        
                        
                        <input type="text" class="form-control" id="ownerPhone" name="ownerPhone"
                        placeholder="  Nomor Telepon" required>
                        
                        <input type="text" class="form-control" id="ownerEmail" name="ownerEmail" placeholder="  Email"
                        required>
                        
                        <input type="password" class="form-control" id="password" name="password" placeholder="  Password"
                        required>
                        
                        <div class="file-input">
                            <label for="ktpUpload" class="form-label">Upload Foto KTP</label>
                            <input type="file" class="input-file" id="ktpUpload" name="ktpUpload" accept="image/*" required>
                           
                          </div>
                        
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

</body>

</html>
