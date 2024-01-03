<?php

    include('databases.php');

    // Query untuk mengambil postingan
    $cek = "SELECT user,posting,`time`,id_post 
            FROM regis_post, postingan 
            WHERE id_fk = id  ";
    $hasil = mysqli_query($con, $cek);
    
    ?>