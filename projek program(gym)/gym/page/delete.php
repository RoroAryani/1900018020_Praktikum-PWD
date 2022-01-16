<?php
// include database connection file
include_once '../../koneksi.php';


$nama	= $_GET['nama'];
	// kali ini kita akan memanggil id member dengan metode GET yang sebelumnya sudah di link di daftar member

	$queryHapusMember	= "DELETE FROM pelanggan WHERE nama='$nama'";
	// di gunakan untuk mencari nama tabel yang ada di database koneksi, cari data berdasarkan id yang di maksud untuk menghapus baris

	$resultHapusMember	= mysqli_query($koneksi, $queryHapusMember);
	// di gunakan untuk masuk ke tabel member yang ada di database koneksi, kemudian melaksanakan proses penghapusan

	if (!empty($resultHapusMember)) {
		// jika $resultHapusMember mengembalikan nilai TRUE, maka program ini akan di eksekusi

		// jika proses hapus berhasil, akan di arahkan ke halaman yang di tuju
		header('location:daftar-pelanggan.php');
	}else{
		echo "Maaf, anda tidak bisa menghapus member ini";
		echo "<a href='daftar-pelanggan.php'><h3>KEMBALI KE DAFTAR MEMBER</h3></a>";
	}
?>

