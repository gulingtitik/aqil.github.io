<?php
session_start();

include('databases.php');
$id = $_SESSION['login'];

$query = "SELECT foto FROM photo,regis_post WHERE id_foto_fk = id_foto AND regis_post.id = $id ";
$result = $con->query($query);

if ($result) {
    $row = $result->fetch_assoc();
    $data_file = $row['foto'];
}

echo '<img src="data:image/jpeg;base64,' . base64_encode($data_file) . '">';

?>

<!-- Features section-->
<section class="py-5 border-bottom" id="features">
    <div class="container px-5 my-5">
        <div class="row gx-5">
            <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-collection"></i>
                </div>

                <!-- menampilkan komunitas -->
                <?php
                include("tmpl_komuproses.php");
                while ($row = mysqli_fetch_assoc($hasil)) : ?>
                <h1><?php echo $row["nama_komunitas"]; ?></h1>
                <p><?php echo $row["deskripsi"]; ?></p>
                <p> <?php echo "di dirikan pada: " . $row["date"]; ?></p>

                <!-- melakukan pemberian nilai kepada button join -->
                <form action="posting.php" method="POST">
                    <button class="btn btn-primary btn-sm " type="submit" name="see[]"
                        value="<?php echo $row['id_komu'] ?>"> see</button>
                </form>
                <?php endwhile; ?>
            </div>

            <div class=" col-lg-4 mb-5 mb-lg-0">

                <!-- menampilkan postingan seluruhan -->
                <?php
                include("tmpl_postproses.php");
                while ($row = mysqli_fetch_assoc($hasil)) : ?>
                <h1><?php echo $row["user"]; ?></h1>
                <p><?php echo $row["posting"]; ?></p>
                <p> <?php echo "di Posting pada: " . $row["time"]; ?></p>
                <button><a href="hapusproses.php?id=<?php echo $row['id_post']; ?>">hapus</a></button>
                <button href="coment.php?id=<?php echo $row['id_post']; ?>">coment</button>
                <form action="save_proses.php" method="POST"><button class="btn btn-primary btn-sm " type="submit"
                        name="save[]" value="<?php echo $row['id_post'] ?>">save</button>
                </form>
                <?php endwhile; ?>
            </div>

        </div>
    </div>
</section>