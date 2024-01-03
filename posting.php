<?php
session_start();
if (!isset($_SESSION['id_komu'])) {
    include'loading.html';
    echo '<script>
    setTimeout(function() {
        window.location.href = "indexuser.php";
    }, 4000); // Menunggu 4 detik sebelum berpindah ke halaman lain
  </script>';
        exit;
    if (!isset($_SESSION["login"])) {
        header("location: index.html");
        exit;
    }
}
date_default_timezone_set('Asia/Jakarta');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link href="./style.css" rel="stylesheet" />
    <title>Registrasi | Studity</title>
</head>

<body>
    <form action="posting_proses.php" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">posting</label>
            <input type="text" class="form-control" id="posting" name="posting" aria-describedby="emailHelp"
                placeholder="mau nanya apa?" required />
        </div>
        <button class="btn btn-primary btn-sm " type="submit">post</button>


</body>

</html>