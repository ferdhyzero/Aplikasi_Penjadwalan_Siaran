<?php
include "Admin/koneksi.php";

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id_konfirmasi = $_GET['id']; // Mengubah variabel menjadi $id_konfirmasi

    // Hapus data dari tabel konfirmasi
    $query_delete = "DELETE FROM konfirmasi WHERE id_konfirmasi = '$id_konfirmasi'";
    if (mysqli_query($conn, $query_delete)) {
        echo "<script>alert('Data berhasil dihapus.')</script>";
    } else {
        echo "<script>alert('Terjadi kesalahan dalam menghapus data.')</script>";
    }
} else {
    echo "<script>alert('ID Konfirmasi tidak valid.')</script>"; // Mengubah pesan error
}

mysqli_close($conn);
header("Location: tampil_request.php");
exit();
?>
