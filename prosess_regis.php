<?php
// koneksi database
include 'databases.php';

// pengambilan foto secara random
if (isset($_POST['submit_regis'])) {
    $query = "SELECT id_foto,foto 
              FROM photo 
              ORDER BY RAND() LIMIT 10";
    $result = $con->query($query);

    if ($result) {
        $row = $result->fetch_assoc();
        $data_file = $row['foto'];
        $id_foto_fk = $row['id_foto'];

        //kondisi jika gambar telah dipilih
        if ($data_file) {

            //pengambilan data dari bt radio
            if (isset($_POST['jenis'])) {
                // Loop melalui radio yang dipilih
                foreach ($_POST['jenis'] as $ambildata) {

                    $sql = "SELECT * FROM jenis_user 
                            WHERE id_jenis = $ambildata";
                    $hasil = mysqli_query($con, $sql);
                    // penggunaan dalam satu row
                    $baris = mysqli_fetch_assoc($hasil);

                    if ($baris) {
                        $nilai = $baris['id_jenis'];

                        //kondisi jika gambar telah dipilih
                        if ($nilai) {

                            // menangkap data yang di kirim dari form
                            $user = $_POST['user'];
                            $password = $_POST['password'];
                            // Query untuk melakukan pengecekan pada tabel
                            $cek = "SELECT * FROM regis_post 
                                    WHERE user = '$user'";
                            $result = mysqli_query($con, $cek);

                            //kondisi bila nilai yang di cari ada
                            if (!$result->num_rows > 0) {

                                // menginput data ke database
                                mysqli_query($con, "INSERT INTO regis_post 
                                                    VALUES ('','$user','$password','$id_foto_fk','$nilai')");

                                // mengalihkan halaman kembali ke index.php
                                header("location:loginpost.php");
                            }else{
                                echo"user telah di pakai!!";
                            }
                        } else {
                            echo "gak masuk";
                        }
                    }
                }
                echo "gak masuk";
            }
        }
    }
}