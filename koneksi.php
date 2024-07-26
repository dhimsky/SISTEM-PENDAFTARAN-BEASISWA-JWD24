<?php
    $servername = "localhost"; // Nama server database
    $username = "root"; // Nama pengguna database
    $password = ""; // Kata sandi database
    $dbname = "beasiswa"; // Nama database yang akan digunakan

    $conn = new mysqli($servername, $username, $password, $dbname); 
    // Membuat koneksi ke database menggunakan MySQLi

    if ($conn->connect_error) { 
        die("Koneksi gagal: " . $conn->connect_error); 
        // Mengecek apakah terjadi kesalahan koneksi, jika iya, tampilkan pesan error
    }
?>