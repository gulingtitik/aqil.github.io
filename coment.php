<?php
session_start();

if (!isset($_SESSION["login"])) {
    if (!isset($_SESSION['id_komu'])) {
        header("location: index.html");
        exit;
    }
}

?>

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
    <form action="comentproses.php" method="post">

        <div class="form-group">
            <label for="exampleInputEmail1">coment</label>
            <input type="text" class="form-control" id="coment" name="coment" aria-describedby="emailHelp"
                placeholder="mau nanya apa?" required />
        </div>
        <button class="btn btn-primary btn-sm " type="submit" name="post[]"
            value="<?php echo $row['id_post'] ?>">post</button>

    </form>
</body>

</html>