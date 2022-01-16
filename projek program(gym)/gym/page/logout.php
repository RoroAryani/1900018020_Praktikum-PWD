<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title>Logout</title>
</head>
<body>
	<script> 
			var yakin = confirm("apakah kamu yakin mau keluar ?");
			if(yakin){
			window.location = "home.php";
			}
			else{
			window.location = "pelanggan.php";
			}
			</script>

</body>
</html>