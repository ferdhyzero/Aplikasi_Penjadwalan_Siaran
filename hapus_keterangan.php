<?php
include "Admin/koneksi.php";

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id_jadwal = $_GET['id'];

    // Hapus data dari tabel keterangan_jadwal
    $query_delete = "DELETE FROM keterangan_jadwal WHERE id_jadwal = '$id_jadwal'";
    if (mysqli_query($conn, $query_delete)) {
        echo "<script>alert('Data berhasil dihapus.')</script>";
    } else {
        echo "<script>alert('Terjadi kesalahan dalam menghapus data.')</script>";
    }
} else {
    echo "<script>alert('ID Jadwal tidak valid.')</script>";
}

mysqli_close($conn);
header("Location: tampil_request.php"); // Ganti "tampil_verifikasi_jadwal.php" dengan halaman asal
exit();
?>