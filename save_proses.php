<?php
session_start();
include('databases.php');

//PENANGKAPAN ID SESSION
$id_fk = $_SESSION['login'];

//kondisi
if (isset($_POST['save'])) {

    // Loop melalui button yang di pilih
    foreach ($_POST['save'] as $cek_id) {
        // Lakukan pengecekan dengan tabel lain
        $cek_data = "SELECT id_post 
                     FROM postingan 
                     WHERE id_post = '$cek_id'";
        $hasil = mysqli_query($con, $cek_data);

        // penggunaan dalam satu row
        $row = mysqli_fetch_assoc($hasil);

        //jika telah ditemukan data maka masukan data
        if ($row > 0) {

            //pengambilan data id dari tabel lain
            $data = mysqli_query($con, "SELECT id
                                        FROM regis_post 
                                        WHERE id = '$id_fk'
                                                    ");
             //pengecekan data apakah sudah terdaftar atau belum
             while ($baris = mysqli_fetch_assoc($data)) {
                // Lakukan pengecekan dengan tabel lain
                $cek_data = "SELECT id_fk,id_post_fk 
                             FROM save_tabel 
                             WHERE save_tabel.id_fk = $baris[id] 
                             AND save_tabel.id_post_fk = $row[id_post]";
                $hasil = mysqli_query($con, $cek_data);

                // penggunaan dalam satu row
                $cek = mysqli_fetch_assoc($hasil);

                //jika ada data dalam tabel lain 
                if ($cek > 0) {
                    echo "anda sudah menyimpan postingan ini";
                    break;
                } else {
                    //masukkan ke dalam tabel 
                    $id_post_fk = $row['id_post'];
                    $masuk_data = "INSERT INTO save_tabel
                                   VALUES ('','$id_fk','$id_post_fk')";
                    mysqli_query($con, $masuk_data);
                    echo "tersimpan";
                    break;
                }
            }
        }
        //location pindah ya aqil 
        echo " udah";
    }
} else {
    echo "gak muncul";
}