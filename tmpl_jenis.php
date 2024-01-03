<?php
session_start();

include("databases.php");

// Query untuk mengambil postingan
$cek = "SELECT * FROM jenis_user ";
$hasil = mysqli_query($con, $cek);