<?php
session_start();
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tanggal = $_POST["tanggal"];
    $jam_mulai = $_POST["jam_mulai"];
    $jam_selesai = $_POST["jam_selesai"];
    $dj_nama_udara = $_POST["dj_nama_udara"];

    $insert_query = "INSERT INTO jadwal_siaran (tanggal, jam_mulai, jam_selesai, dj_nama_udara) 
                     VALUES ('$tanggal', '$jam_mulai', '$jam_selesai', '$dj_nama_udara')";
    if ($conn->query($insert_query) === TRUE) {
        header("Location: index.php"); // Redirect ke halaman utama setelah berhasil menambah jadwal siaran
        exit();
    } else {
        echo "Error: " . $insert_query . "<br>" . $conn->error;
    }
}
?>
