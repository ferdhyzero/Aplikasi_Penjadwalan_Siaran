<?php
session_start();
include 'Admin/koneksi.php';

if(isset($_POST['proses'])){
    $keterangan = $_POST['keterangan'];
    $id_tanggal = $_POST['id_tanggal'];
    $id_jam = $_POST['id_jam'];
    $id_dj = $_POST['id_dj'];

    $query = "INSERT INTO keterangan_jadwal (keterangan, id_tanggal, id_jam, id_dj)
              VALUES ('$keterangan', '$id_tanggal', '$id_jam', '$id_dj')";

    if(mysqli_query($conn, $query)){
        echo "<script>alert('Data telah tersimpan')</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
mysqli_close($conn);
header("Location: request_jadwal.php"); // Ganti "tabel_awal.php" dengan halaman asal tabel awal
exit();
?>