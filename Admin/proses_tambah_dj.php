<?php
session_start();
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_lengkap = $_POST["nama_lengkap"];
    $nama_udara = $_POST["nama_udara"];
    $alamat = $_POST["alamat"];

    $insert_query = "INSERT INTO dj (nama_lengkap, nama_udara, alamat) VALUES ('$nama_lengkap', '$nama_udara', '$alamat')";
    if ($conn->query($insert_query) === TRUE) {
        header("Location: index.php"); // Redirect ke halaman utama setelah berhasil menambah DJ
        exit();
    } else {
        echo "Error: " . $insert_query . "<br>" . $conn->error;
    }
}
?>
