<?php
// include database connection file
include_once '../../koneksi.php';



	$nama		= $_POST['nama'];
	$instruktur	= $_POST['instruktur'];
	$hari		= $_POST['hari'];
	$waktu		= $_POST['waktu'];


	$queryEditMember	= "UPDATE pelanggan SET instruktur='$instruktur', hari='$hari', waktu='$waktu' WHERE nama='$nama' ";
	


	$resultEditMember	= mysqli_query($koneksi, $queryEditMember);
	

	if (!empty($resultEditMember)) {
		// jika yang di inputkan tidak kosong, maka inputan berhasil 
		header('location:daftar-pelanggan.php');
	}else{
		// jika inputan gagal, maka akan muncul informasi gagal
		echo "Gagal, silahkan edit ulang <a href='edit-sesi.php'>Edit Lagi</a>";
	}


?>
