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
    <form action="makecomuproses.php" method="POST">
        <div class="form-group">
            <label for="nama">nama komunitas anda</label>
            <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp"
                placeholder="enter nama" required />
        </div>
        <div class="form-group">
            <label for="desk">deskrippsi</label>
            <input type="text" class="form-control" id="desk" name="desk" aria-describedby="emailHelp"
                placeholder="komunitas kamu itu apa sih" required />
        </div>
        <!-- menampilkan kategori -->
        <?php
        include("tmpl_kategori.php");
        while ($row = mysqli_fetch_assoc($hasil)) : ?>

        <!-- memasukan data dalam button checkbox -->
        <input type="checkbox" name="kategori[]" value="<?php echo $row['id_kategori']; ?>" />
        <label for="kategori"><?php echo $row['kategori']; ?></label>

        <?php endwhile; ?>
        </div><br>
        <button class=" btn btn-primary btn-sm " type="submit" name="submit">make</button>
    </form>
</body>

</html>