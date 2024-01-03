<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("location: index.html");
    exit;
}

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
    <form action="agenda_proses.php " method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">nama agenda</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="agenda1" aria-describedby="emailHelp"
                placeholder="agenda " required />
        </div>
        <!-- <div class="form-group">
            <label for="exampleInputEmail1">deskripsi </label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="deskripsi"
                aria-describedby="emailHelp" placeholder="deskripsi " required />
        </div> -->
        <div class="form-group">
            <label for="exampleInputEmail1">tempat</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="lokasi" aria-describedby="emailHelp"
                placeholder="lokasi" required />
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">tanggal</label>
            <input type="date" class="form-control" id="exampleInputEmail1" name="tanggal" aria-describedby="emailHelp"
                required />
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">time</label>
            <input type="time" class="form-control" id="exampleInputEmail1" name="time" aria-describedby="emailHelp"
                required />
        </div>
        <button class="btn btn-primary btn-sm " type="submit" name="agenda">masukan</button>
    </form>
</body>

</html>