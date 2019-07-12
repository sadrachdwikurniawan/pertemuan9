<?php 
	$server	= "localhost";
	$user = "root";
	$password = "";
	$nama_db = "latihan";

	$db=mysqli_connect($server, $user, $password, $nama_db);

	if (mysqli_connect_errno()) {
		echo "koneksi database gagal : " . mysqli_connect_error(
			);	
	}else{
		echo "database berhasil tersambung.";
	}

 ?>