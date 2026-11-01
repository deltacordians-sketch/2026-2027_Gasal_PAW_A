PROJECT TP MODUL 5 - FORMAT SEPERTI CONTOH TEMAN

ISI FOLDER
- database.sql           : membuat database tp_modul5 beserta 7 tabel
- koneksi.php            : koneksi PHP ke MySQL
- supplier.php           : menampilkan data supplier
- tambah_supplier.php    : form tambah supplier
- edit_supplier.php      : form edit supplier
- hapus_supplier.php     : proses hapus supplier
- css/style.css          : tampilan tabel, form, dan tombol

CARA MENJALANKAN
1. Ekstrak folder tp_modul5_seperti_contoh ke C:\xampp\htdocs\
2. Buka XAMPP Control Panel, lalu Start Apache dan MySQL.
3. Buka http://localhost/phpmyadmin
4. Pilih menu Import, lalu pilih file database.sql dari folder project.
5. Jalankan http://localhost/tp_modul5_seperti_contoh/supplier.php

CATATAN
- Paket ini mengikuti susunan contoh teman: database memiliki 7 tabel, sedangkan contoh halaman CRUD yang dibuat lengkap adalah tabel supplier (tampil, tambah, edit, hapus).
- File SQL menyertakan 3 data supplier contoh agar halaman bisa langsung diuji. Jika Anda sudah memiliki 10 data supplier dari tugas, tambahkan/import data tersebut setelah database dibuat.
- Jika database tp_modul5 sudah ada dan berisi data tugas, jangan import ulang tanpa backup. Cukup salin file PHP dan folder css ke folder project Anda, lalu sesuaikan koneksi jika diperlukan.
