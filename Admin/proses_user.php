<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include 'koneksi.php'; // Sertakan file koneksi database
    
    // Ambil data dari formulir
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password']; // Harap diingat untuk mengenkripsi password secara aman sebelum menyimpannya dalam database
    
    // Buat query INSERT untuk menyimpan data ke dalam tabel User
    $insertQuery = "INSERT INTO users (nama, username, password) VALUES ('$nama', '$username', '$password')";
    
    // Jalankan query
    if (mysqli_query($conn, $insertQuery)) {
        header("Location: tambah_pengguna.php"); // Redirect ke halaman utama setelah berhasil menambah DJ
        exit();
    } else {
        echo "Terjadi kesalahan: " . mysqli_error($conn);
    }
    
    // Tutup koneksi database
    mysqli_close($conn);
}
?>
