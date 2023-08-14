<?php
include "koneksi.php";

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id_jadwal = $_GET['id'];

    // Ambil data dari tabel keterangan_jadwal berdasarkan id_jadwal
    $query_select = "SELECT * FROM keterangan_jadwal WHERE id_jadwal = '$id_jadwal'";
    $result = mysqli_query($conn, $query_select);

    if ($row = mysqli_fetch_assoc($result)) {
        $id_tanggal = $row['id_tanggal'];
        $id_jam = $row['id_jam'];
        $id_dj = $row['id_dj'];
        $keterangan = $row['keterangan'];

        // Masukkan data ke dalam tabel konfirmasi
        $query_insert = "INSERT INTO konfirmasi (id_tanggal, id_jam, id_dj, keterangan)
                         VALUES ('$id_tanggal', '$id_jam', '$id_dj', '$keterangan')";

        if (mysqli_query($conn, $query_insert)) {
            // Hapus data dari tabel keterangan_jadwal setelah dipindahkan
            $query_delete = "DELETE FROM keterangan_jadwal WHERE id_jadwal = '$id_jadwal'";
            mysqli_query($conn, $query_delete);
            echo "<script>alert('Data berhasil dikonfirmasi dan dipindahkan.')</script>";
        } else {
            echo "<script>alert('Terjadi kesalahan dalam memindahkan data.')</script>";
        }
    } else {
        echo "<script>alert('Data tidak ditemukan.')</script>";
    }
} else {
    echo "<script>alert('ID Jadwal tidak valid.')</script>";
}

mysqli_close($conn);
header("Location: tampil_verifikasi_jadwal.php"); // Ganti "tabel_awal.php" dengan halaman asal tabel awal
exit();
?>
