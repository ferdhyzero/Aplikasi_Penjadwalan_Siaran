<?php
session_start();
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tanggal = $_POST['tanggal'];
    $insert_query = "INSERT INTO tanggal (tanggal) VALUES ('$tanggal')";
    
    if ($conn->query($insert_query) === TRUE) {
        header("Location: tambah_jadwal.php"); // Redirect ke halaman utama setelah berhasil menambah DJ
        exit();
    } else {
        echo "Error: " . $insert_query . "<br>" . $conn->error;
    }
}
mysqli_close($conn);
?>
