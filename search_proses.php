<?php
session_start();

include("databases.php");

//kondisi bt jika di tekan
if(isset($_POST["search"])){
    
    //jadikan variabel 
    $search = $_POST["search"];
    
    //melakukan pencarian dalam tabel komunitas
    $sql = "SELECT nama_komunitas,deskripsi,date 
            FROM komunitas 
            WHERE nama_komunitas 
            LIKE '%$search%'";
    //mejalankan query
    $cari = mysqli_query($con,$sql);

}