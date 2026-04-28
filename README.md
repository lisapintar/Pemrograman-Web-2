Tugas CRUD Stok Kue - Lisa

📌 Deskripsi

Project ini merupakan aplikasi sederhana berbasis Laravel 12 yang mengimplementasikan fitur CRUD (Create, Read, Update, Delete) untuk pengelolaan stok kue.

Aplikasi ini dibuat untuk tujuan pembelajaran dan latihan pengembangan backend menggunakan Laravel.

🛠️ Teknologi yang Digunakan

Laravel 12

PHP

MySQL

⚙️ Fitur Utama

✅ Menambahkan data (Create)✅ Menampilkan data (Read)✅ Mengubah data (Update)✅ Menghapus data (Delete)

📂 Struktur Proyek

app/
├── Http/
│   └── Controllers/
│       └── ProductController.php
├── Models/
│   └── Product.php
├── Database/
│   └── migrations/
│       └── 2026_04_20_055348_create_produk_table.php

resources/
├── views/
│   └── products/
│       └── index.blade.php
│       └── create.blade.php
│       └── edit.blade.php
│       └── show.blade.php

routes/
└── web.php

🚀 Cara Menjalankan Proyek

1. Kloning Repositori

git clone https://github.com/lisapintar/Tugas_crud_StokKue.git
cd Tugas_crud_StokKue

2. Instal Dependensi

composer install

3. Salin File Environment

cp .env.example .env

4. Generate Key

php artisan key:generate

5. Menyiapkan Database

Buat database baru di MySQL lalu edit file .env

DB_DATABASE=nama_database
DB_USERNAME=root
DB_PASSWORD=

6. Migrasi Database

php artisan migrate

7. Jalankan Server

php artisan serve

Buka di browser:

http://127.0.0.1:8000

📄 Lisensi

Proyek ini dibuat untuk keperluan pembelajaran.

