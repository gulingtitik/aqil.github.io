<?php
session_start();

//koneksi data yang dibutuhkan
include( 'databases.php');

//penangkapan id dari tabel posting
$id = $_GET['id'];

//query pengurangan
$sql = "DELETE FROM postingan WHERE postingan.id_post = '$id'
AND id_fk = '$_SESSION[login]'";

mysqli_query($con,$sql);
  


header("location: indexuser.php");
return mysqli_affected_rows($con);  