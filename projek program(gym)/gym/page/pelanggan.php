<?php

// Mmemanggil koneksi databas 
include '../../koneksi.php';

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>WELCOME TO RORO</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link rel="stylesheet" href="../dist/css/skins/skin-blue.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="../https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="../https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <!-- Main Header -->
        <header class="main-header">

            <!-- Logo -->
            <a href="index.php" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>GLC</b></span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>GYM LIFE CENTER</b></span>
            </a>

            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
            </nav>
        </header>

        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">

            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar Menu -->
                <ul class="sidebar-menu">

                    <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
                    <li><a href="#"><i class="fa fa-user"></i> <span>Member</span></a></li>
                    <li><a href="transaksi.php"><i class="fa fa-list"></i> <span>Data Transaksi</span></a></li>
                    <li><a href="logout.php"><i class="glyphicon glyphicon-off"></i> <span>Logout</span></a></li>
                </ul>
                <!-- /.sidebar-menu -->
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <!-- Main content -->
            <section class="content">

                <div class="box box-primary">

                    <div class="box-body">

                        <div class="alert alert-info alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h4><i class="icon fa fa-info"></i> ISI FORM MEMBER!</h4>
                            Mohon di isi dengan lengkap.
                        </div>

                        <!-- enctype="multipart/form-data" adalah sebuah function untuk upload gambar -->
                        <form action="" name='submit_data_pelanggan' method="post" role="form">

                            <div class="form-group">
                                <label for="nama">Nama Member</label>
                                <input class="form-control form-control-sm" type="text" placeholder="Nama Anggota" aria-label=".form-control-sm example" name='nama' required>
                            </div>

                            <div class="form-group">
                                <label for="pelatihan">Jenis Pelatihan</label>
                                <input class="form-control form-control-sm" type="text" placeholder="Pelatihan" aria-label=".form-control-sm example" name='pelatihan' required>
                            </div>

                            <div class="form-group">
                                <label for="instruktur">Instruktur</label>
                                <input class="form-control form-control-sm" type="text" placeholder="instruktur" aria-label=".form-control-sm example" name='instruktur' required>
                            </div>

                            <div class="form-group">
                                <label for="instruktur">Hari</label>
                                <input class="form-control form-control-sm" type="text" placeholder="Hari" aria-label=".form-control-sm example" name='hari' required>
                            </div>

                            <div class="form-group">
                                <label for="instruktur">Waktu</label>
                                <input class="form-control form-control-sm" type="text" placeholder="Jam" aria-label=".form-control-sm example" name='jam' required>
                            </div>

                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input class="form-control form-control-sm" type="text" placeholder="Alamat" aria-label=".form-control-sm example" name='alamat' required>
                            </div>

                            <div class="form-group">
                                <label for="no_telp">No. Telp.</label>
                                <input class="form-control form-control-sm" type="text" placeholder="Nomor Telepon" aria-label=".form-control-sm example" name='no_telp' required>
                            </div>
                            <button type="submit" class="btn btn-info btn-lg btn-block mt-4" name='submit_data_pelanggan'>Kirim</button>
                        </form>
                    </div>
                </div>

                <?php
                if (isset($_POST['submit_data_pelanggan'])) {
                    $nama = htmlspecialchars($_POST['nama']);
                    $pelatihan = htmlspecialchars($_POST['pelatihan']);
                    $instruktur = htmlspecialchars($_POST['instruktur']);
                    $hari = htmlspecialchars($_POST['hari']);
                    $jam = htmlspecialchars($_POST['jam']);
                    $alamat = htmlspecialchars($_POST['alamat']);
                    $no_telp = htmlspecialchars($_POST['no_telp']);

                    $query = mysqli_query($koneksi, "SELECT * FROM pelanggan WHERE nama ='$nama'");
                    $insert = mysqli_query($koneksi, "INSERT INTO pelanggan VALUES ('$nama', '$pelatihan', '$instruktur','$hari','$jam','$alamat','$no_telp')");

                    if ($insert) {
                        echo "<div class='alert alert-success mt-4' role='alert'>";
                        echo "<p><center>Data Berhasil Masuk</center></p>";
                        echo "</div>";
                    } else {
                        echo "<div class='alert alert-danger mt-4' role='alert'>";
                        echo "<p><center>Data Gagal Masuk</center></p>";
                        echo "</div>";
                    }
                }


                ?>

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="pull-right hidden-xs">
                Anything you want
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2021 <a href="#">Website</a>.</strong> GYM LIFE CENTER.
        </footer>

    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.2.3 -->
    <script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/app.min.js"></script>

    <!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>

</html>