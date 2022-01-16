<?php 
    session_start();
    include '../../koneksi.php';
    // function ini harus ada di setiap halaman, gunanya untuk memanggil koneksi database yang sebelumnya sudah kita buat di folder functions

    if (empty($_SESSION['username'])){

        // fungsi di atas akan mengecek, apakah sesinya kosong atau tidak. Jika sesinya kosong maka akan di redirect ke halaman login-admin.php, namun jika berhasil maka boleh mekakses halaman ini

        header('location:login-admin.php');
        // fungsi di atas adalah untuk meredirect apabila sesinya kosong atau belum melakukan login

    }

?>

<!DOCTYPE html>
<html>
<head>

    <title>Beranda Admin | GYM</title>

    <link rel="stylesheet" type="text/css" href="css/halaman admin.css">

</head>
<body>
    <div class="menu-halaman-admin">
        <ul>
            <a href="beranda-admin.php" class="bg-blue-active">
                <li>Beranda</li>
            </a>
            <a href="daftar-pelanggan.php" class="bg-blue">
                <li>Daftar Member</li>
            </a>
            <a href="proses-logout-admin.php" class="bg-blue">
                <li>Logout</li>
            </a>
            </ul>
    </div>

    <div class="container-konten-halaman-admin">
        
        <div class="header-judul-halaman">
            <h1 class="color-blue">SELAMAT DATANG DI PORTAL ADMIN GYM LIFE CENTER </h1>
        </div>
    </div>
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
        </div>
        <strong>Copyright &copy; 2021 <a href="#">Website</a>.</strong> GYM LIFE CENTER.
    </footer>
    </body>
</html>