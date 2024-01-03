<?php
session_start();

// koneksi database
include 'databases.php';

date_default_timezone_set('Asia/Jakarta');

// menangkap data yang di kirim dari form dan dari session
$posting = $_POST['posting'];
$id_fk = $_SESSION['login']; 
$id_komu = $_SESSION['id_komu'];
    //pemasukan dalam database
    $sql = "INSERT INTO postingan
            values('','$id_fk','$posting',current_timestamp(),'$id_komu')";

    mysqli_query($con, $sql);

    // mengalihkan halaman kembali ke index.php
    header("location:indexuser.php");