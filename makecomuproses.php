<?php
session_start();

// koneksi database
include 'databases.php';

date_default_timezone_set('Asia/Jakarta');

// menangkap data yang di kirim dari form dan dari session
$nama = $_POST['nama'];
$desk = $_POST['desk'];
$id_fk = $_SESSION['login'];

// Periksa apakah formulir disubmit
if (isset($_POST['submit'])) {

    if (isset($_POST['kategori'])) {
        // Loop melalui checkbox yang dipilih
        foreach ($_POST['kategori'] as $ambildata) {
            // Lakukan pengecekan dengan tabel lain
            $cek_data = "SELECT id_kategori 
                         FROM kategori_komunitas 
                         WHERE id_kategori = '$ambildata'";
            $hasil = mysqli_query($con, $cek_data);

            // penggunaan dalam satu row
            $row = mysqli_fetch_assoc($hasil);

            // Jika data ada di tabel lain, masukkan ke dalam tabel tujuan
            if ($row) {
                $id_kategori = $row['id_kategori']; 
                $masuk_data = "INSERT INTO komunitas (id_komu,id_user_fk,nama_komunitas,deskripsi,date,id_kategori_fk)
                               VALUES ('','$id_fk','$nama','$desk',utc_date,'$id_kategori')";
                mysqli_query($con, $masuk_data);
            }
        }
   
    // Tutup koneksi ke database
    mysqli_close($con);
    }
} 
header("location:indexuser.php");