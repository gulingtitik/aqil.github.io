<?php
session_start();
include("databases.php");

//penangkapan data dari session 
$id_fk = $_SESSION['login'];

if (isset($_POST['join'])) {

    // Loop melalui button yang di pilih
    foreach ($_POST['join'] as $ambildata) {

        // Lakukan pengecekan dengan tabel lain
        $cek_data = "SELECT id_komu 
                     FROM komunitas 
                     WHERE id_komu = '$ambildata'";
                     
        $hasil = mysqli_query($con, $cek_data);

        // penggunaan dalam satu row
        $row = mysqli_fetch_assoc($hasil);

        // Jika data ada di tabel lain
        if ($row > 0) {
            //pengambilan data id dari tabel lain
            $data = mysqli_query($con, "SELECT id
                                        FROM regis_post 
                                        WHERE id = '$id_fk'");

            //pengecekan data apakah sudah terdaftar atau belum
            while ($baris = mysqli_fetch_assoc($data)) {
                // Lakukan pengecekan dengan tabel lain
                $cek_data = "SELECT id_fk,id_com_fk 
                             FROM peserta 
                             WHERE peserta.id_fk = $baris[id] 
                             AND peserta.id_com_fk = $row[id_komu]";
                             
                $hasil = mysqli_query($con, $cek_data);

                // penggunaan dalam satu row
                $cek = mysqli_fetch_assoc($hasil);

                //jika ada data dalam tabel lain 
                if ($cek > 0) {
                    //masukkan ke dalam tabel 
                    $id_komu = $row['id_komu'];
                    echo "anda sudah terdaftar";
                    break;
                    
                }else {
                    //masukkan ke dalam tabel 
                    $id_komu = $row['id_komu'];
                    $masuk_data = "INSERT INTO peserta
                                   VALUES ('','$id_komu','$id_fk',current_timestamp())";
                    mysqli_query($con, $masuk_data);
                    echo "data berhasil";
                    $_SESSION['id_komu'] = $id_komu;
                    //location pindah
                    header("location:posting.php");
                    break;
                    
                }
            }
        }
    }
}
// elseif (isset($_POST['view'])) {
    
// }
    else {
}