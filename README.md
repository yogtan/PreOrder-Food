# Pre Order Makanan dengan Laravel

Proyek ini adalah implementasi sistem pre-order makanan menggunakan framework Laravel. Pengguna dapat melakukan pemesanan makanan melalui platform ini dan sistem akan mengelola pesanan tersebut.

## Fitur Utama

- Pemesanan Makanan: Pengguna dapat melakukan pemesanan makanan melalui antarmuka pengguna yang ramah.
- Manajemen Menu: Admin dapat menambahkan, mengedit, atau menghapus menu makanan yang tersedia.
- Pengelolaan Pesanan: Admin dapat melihat dan mengelola pesanan yang masuk.

## Prasyarat

- PHP 7.4 atau versi terbaru
- Composer
- Laravel 8 atau versi terbaru
- MySQL atau database lainnya

## Instalasi

1. Clone repositori ini ke dalam mesin lokal Anda:

```bash
git clone https://github.com/username/pre-order-makanan.git

# Masuk ke direktori proyek
cd pre-order-makanan

# Instal dependensi menggunakan Composer
composer install

# Salin file .env.example menjadi .env dan sesuaikan pengaturan database
cp .env.example .env

# Generate kunci aplikasi Laravel
php artisan key:generate

# Jalankan migrasi untuk membuat tabel-tabel database
php artisan migrate

# Jalankan server pengembangan
php artisan serve
