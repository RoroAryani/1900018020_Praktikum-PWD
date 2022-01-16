<?php 
	include '../../koneksi.php';
	// function ini harus ada di setiap halaman, gunanya untuk memanggil koneksi database yang sebelumnya sudah kita buat di folder functions
	$usernamenya	= $_POST['in_username']; // in_username didapatkan di name form pada halaman sebelumnya
	$passwordnya	= $_POST['in_password']; // in_password didapatkan di name form pada halaman sebelumnya

	$queryAdmin		= "SELECT * FROM admin WHERE username='$usernamenya' AND password='$passwordnya' ";
	//di gunakan untuk mencari nama tabel yang ada di database koneksinya.

	$resultAdmin	= mysqli_query($koneksi, $queryAdmin);
	// di gunakan untuk masuk ke tabel admin yang ada di database koneksinya.

	$rowsAdmin	= mysqli_fetch_assoc($resultAdmin);
	// mysqli_fetch_assoc : di gunakan untuk memanggil array yang ada di tabel admin (memanggil data perbaris yang ada di tabel admin)
	if (!empty($rowsAdmin)) {

		// jika berhasil login, maka sesi login aka di mulai
		session_start();
		$_SESSION['username']	= $usernamenya;

		// dan akan di redirect ke halaman beranda admin
		header('location:beranda-admin.php');
	} else {
		// jika login gagal, maka akan di arahkan ke halaman gagal-login-admin.php
		header('location:gagal-login-admin.php');
	}
?>