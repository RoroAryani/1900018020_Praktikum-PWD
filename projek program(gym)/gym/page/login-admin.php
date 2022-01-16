<?php

	include '../../koneksi.php';
	// function ini harus ada di setiap halaman, gunanya untuk memanggil koneksi database yang sebelumnya sudah kita buat di folder functions
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Admin</title>
	<link rel="stylesheet" type="text/css" href="css/css-login-admin.css">
</head>
<body>
	<div class="box-form">
		<div class="box-form-header">
			<h1 class="color-white">PORTAL ADMIN</h1>
		</div>
		<div class="box-form-konten">
			<form method="POST" action="proses-login-admin.php">
				<input type="text" name="in_username" placeholder="Masukkan username" required>
				<br /><br /><br />
				<input type="password" name="in_password" placeholder="Masukkan password" required>
				<div class="field">
        		<img src='captcha.php'/><td><input type="text" name="captcha_code"></td>
        		</div>
				<button type="submit" name="login" class="bg-blue">LOGIN</button>
				
			</form>
		</div>
	</div>
</body>
</html>