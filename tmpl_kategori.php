<?php
session_start();

include("databases.php");

// Query untuk mengambil postingan
$cek = "SELECT * FROM kategori_komunitas ";
$hasil = mysqli_query($con, $cek);