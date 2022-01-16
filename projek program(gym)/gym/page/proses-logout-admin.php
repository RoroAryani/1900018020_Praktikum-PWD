<?php 

	session_start(); // ini di gunakan untuk menandakan bahwa sesi login pada halaman ini dimulai
	session_destroy(); // ini di gunakan untuk menandakan bahwa sesi login sudah berakhir, jika sesinya sudah berakhir, maka akan di redicet ke halaman yang di tuju seperti script di bawah
	
	header('location:login-admin.php');

?>