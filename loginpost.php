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
    <form action="loginproses.php" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">username</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="user" aria-describedby="emailHelp"
                placeholder="enter username" required />
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">password</label>
            <input type="password" class="form-control" id="exampleInputEmail1" name="password"
                aria-describedby="emailHelp" placeholder="password" required />
        </div>
        <div>
            <input type="checkbox" id="remember" name="remember" />
            <label for="remember">remember me</label>
        </div>
        <button class="btn btn-primary btn-sm " type="submit">Log In</button>
    </form>
</body>

</html>