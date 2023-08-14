<?php
session_start();
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jam_mulai = $_POST['jam_mulai'];
    $jam_selesai = $_POST['jam_selesai'];
    $query_jam = "INSERT INTO jam (jam_mulai, jam_selesai) VALUES ('$jam_mulai', '$jam_selesai')";
    
    if ($conn->query($query_jam) === TRUE) {
        header("Location: tambah_jadwal.php"); // Redirect ke halaman utama setelah berhasil menambah DJ
        exit();
    } else {
        echo "Error: " . $insert_query . "<br>" . $conn->error;
    }
}

mysqli_close($conn);
?>
