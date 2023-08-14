<?php 
session_start();
include("koneksi.php"); 
session_destroy(); 
header('location: ../index.php');
?>