<?php
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'databases.php';

// menangkap data yang dikirim dari form
$username = $_POST['user'];
$password = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($con, "SELECT * 
							from regis_post 
							where user='$username'
							and password ='$password'
							and id_jenis_fk = 1 ");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if ($cek > 0) {

	// penggunaan satu row saja 
	$row = $data->fetch_assoc();

	// pemasukan kedalam ssession
	$_SESSION['user'] = $username;
	$_SESSION['login'] = $row['id'];

	//mulai cookie
	setcookie('nama', $username, time() + 350);

	header("location:indexuser.html");
	
} else {
	// menyeleksi data admin dengan username dan password yang sesuai
	$data = mysqli_query($con, "SELECT * 
									from regis_post 
									where user='$username'
									and password ='$password'
									and id_jenis_fk = 2");

	// menghitung jumlah data yang ditemukan
	$cek = mysqli_num_rows($data);

	if ($cek > 0) {

		// penggunaan satu row saja 
		$row = $data->fetch_assoc();

		// pemasukan kedalam ssession
		$_SESSION['user'] = $username;
		$_SESSION['login'] = $row['id'];

		//mulai cookie
		setcookie('nama', $username, time() + 350);

		header("location:profil.html");
		exit;
	}
}
