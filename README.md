# Aplikasi Kasir Sederhana - UKK RPL 2023

Aplikasi ini merupakan implementasi dari soal UKK RPL 2023 untuk membuat aplikasi kasir sederhana menggunakan Laravel.

## Requirement

- PHP >= 8.1
- Composer
- MySQL/MariaDB
- Node.js & NPM
- Git

## Instalasi

1. Clone repository ini
```bash
git clone https://github.com/yourusername/test-ukk.git
cd test-ukk
```

2. Install dependencies PHP
```bash
composer install
```

3. Copy file .env.example menjadi .env
```bash
copy .env.example .env
```

4. Generate application key
```bash
php artisan key:generate
```

5. Konfigurasi database di file .env
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=test_ukk
DB_USERNAME=root
DB_PASSWORD=
```

6. Jalankan migrasi dan seeder
```bash
php artisan migrate --seed
```

7. Jalankan development server
```bash 
php artisan serve
```

## Fitur

1. CRUD Data Toko
   - Melihat daftar toko
   - Menambah toko baru
   - Mengubah data toko
   - Menghapus data toko

2. CRUD Data Produk
   - Melihat daftar produk per toko
   - Menambah produk baru
   - Mengubah data produk
   - Menghapus data produk

## Struktur Database

1. Tabel Toko
   - id (primary key)
   - nama_toko
   - alamat
   - nomor_telepon
   - created_at
   - updated_at

2. Tabel Produk
   - id (primary key)
   - nama_produk
   - harga
   - stok
   - id_toko (foreign key)
   - created_at
   - updated_at
