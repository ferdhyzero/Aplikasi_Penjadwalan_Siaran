<?php
$hostname = "localhost"; // Ganti dengan nama host Anda
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$dbname = "db_psr"; // Ganti dengan nama database Anda

// Membuat koneksi
$conn = new mysqli($hostname, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Jika Anda selesai menggunakan koneksi, Anda dapat menutupnya dengan:
// $conn->close();
?>
