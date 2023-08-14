<?php 
session_start();
include("Admin/koneksi.php"); 
session_destroy(); 
header('location:tampil_jadwal_siaran.php');
?>