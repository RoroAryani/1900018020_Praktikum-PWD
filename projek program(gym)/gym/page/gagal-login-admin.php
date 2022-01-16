<!DOCTYPE html>
<html>
<head>
	<title>Gagal Login Admin</title>
	<link rel="stylesheet" type="text/css" href="css/css-login-admin.css">
</head>
<body>
	<div class="box-form">
		<div class="box-form-header">
			<h1 class="color-white">PORTAL ADMIN</h1>
		</div>

		<div class="box-form-konten">

			<form method="POST" action="proses-login-admin.php">

				<p class="color-red">* Username dan Password yang anda masukkan salah</p>

				<input type="text" name="in_username" placeholder="Masukkan username" required>

				<br /><br /><br />

				<input type="password" name="in_password" placeholder="Masukkan password" required>

				<button type="submit" class="bg-blue">LOGIN</button>

			</form>

		</div>

	</div>

</body>
</html>