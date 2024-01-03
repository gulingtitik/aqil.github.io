<?php
session_start();
include"databases.php";

//mengambil data dari form agenda
$nm_agenda  = $_POST['agenda1'];
// $deskripsi  = $_post['deskripsi'];
$lokasi     = $_POST['lokasi'];
$tanggal    = $_POST['tanggal'];
$time       = $_POST['time'];
$id_komu = $_SESSION['id_komu'];

//melakukan kondisi jika bt ditekan 
if(isset($_POST['agenda'])){
//pemasukan data dalam tabel
$sql = "INSERT INTO agenda 
        VALUES ('','$nm_agenda','$lokasi','$time','$tanggal');";
        
    $hasil = mysqli_query($con,$sql);
    //pengecekan jika berhasil
    if($hasil >0){
        echo"berhasil";
    }else{
        echo"gak masuk";
    }
}else{
    echo"
    hahahaha
    ";
}