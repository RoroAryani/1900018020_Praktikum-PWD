<?php 

	include '../../koneksi.php';
	// function ini harus ada di setiap halaman, gunanya untuk memanggil koneksi database yang sebelumnya sudah kita buat di folder functions

	$username	= $_POST['username']; // in_username didapatkan di name form pada halaman sebelumnya
	$password	= $_POST['password']; // in_password didapatkan di name form pada halaman sebelumnya

	$queryUser		= "SELECT * FROM users WHERE username='$username' AND password='$password' ";
	//di gunakan untuk mencari nama tabel yang ada di database koneksinya.

	$resultUser	= mysqli_query($koneksi, $queryUser);
	// di gunakan untuk masuk ke tabel admin yang ada di database koneksinya.

	$rowsUser	= mysqli_fetch_assoc($resultUser);
	// mysqli_fetch_assoc : di gunakan untuk memanggil array yang ada di tabel admin (memanggil data perbaris yang ada di tabel admin)

	if (!empty($resultUser)) {
			// jika yang di inputkan tidak kosong, maka inputan berhasil dan arahkan ke beranda-member.php
			echo "<script>alert('Anda berhasil daftar'); window.location = 'login.php';</script>";
		
	} else {

		// jika login gagal, maka akan di arahkan ke halaman gagal-login-admin.php
		header('location:regsiter.php');

	}
	

?>