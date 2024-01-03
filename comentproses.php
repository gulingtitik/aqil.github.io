<?php 
session_start();

//koneksi database 
include 'databases.php' ; 

// menangkap data yang di kirim dari form dan dari session 
 $coment= $_POST["coment"];
$id_post_fk= $_GET['$id_post_fk']; 
 
 //pemasukan dalam database
    $sql= mysqli_query($con, "INSERT INTO `coment` (`id_com`, `id_post_fk`, `coment`, `time`) 
VALUES (NULL, '$id_post_fk', '$coment', current_timestamp())"); 


// mengalihkan halaman kembali ke index.php 
header("location:indexuser.php");
    
    
    ?>