<h2>Daftar komunitas</h2>

<?php

include('databases.php');
$id_fk = $_SESSION['login'];
// Query untuk mengambil postingan
$cek = "SELECT *
        FROM regis_post, komunitas, kategori_komunitas 
        WHERE id_user_fk = id 
        AND id_kategori_fk = id_kategori
        AND id_user_fk = '$id_fk'";
$hasil = mysqli_query($con, $cek);

?>