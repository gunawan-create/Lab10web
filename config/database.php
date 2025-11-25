<?php
// Konfigurasi koneksi database
$host = "localhost";
$user = "root";       // username XAMPP / Laragon
$pass = "";           // password (kosong default XAMPP)
$db   = "latihan1"; // ganti sesuai nama database kamu

// Membuat koneksi
$conn = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi
if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}