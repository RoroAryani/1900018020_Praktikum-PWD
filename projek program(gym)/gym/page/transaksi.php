<?php
// Mmemanggil koneksi databas 
include '../../koneksi.php';
$sql_get = "SELECT * FROM pelanggan";
$query_jual = mysqli_query($koneksi, $sql_get);
$result = [];
while ($row = mysqli_fetch_assoc($query_jual)) {
    $result[] = $row;
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>datatransaksi</title>

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
                    <li><a href="pelanggan.php"><i class="fa fa-list"></i> <span>Member</span></a></li>
                    <li><a href="#"><i class="fa fa-list"></i> <span>Data Transaksi</span></a></li>
                    <li><a href="logout.php"><i class="glyphicon glyphicon-off"></i> <span>Logout</span></a></li>
                </ul>
                <!-- /.sidebar-menu -->
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <section class="content">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <a href="#" class="btn btn-block btn-success">DATA MEMBER</a>
                    </div>
                    <form action="" method="get">
                        <label>Cari :</label>
                        <input type="text" name="cari">
                        <input type="submit" value="Cari">
                    </form>
                    <div class="box-body">
                        <?php
                        if (isset($_GET['cari'])) {
                            $cari = $_GET['cari'];
                            echo "<b>Hasil pencarian : " . $cari . "</b>";
                        } ?>
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Member</th>
                                    <th>Jenis Pelatihan</th>
                                    <th>Instruktur</th>
                                    <th>Hari</th>
                                    <th>Waktu</th>
                                    <th>Alamat</th>
                                    <th>No.Telp</th>
                                </tr>
                                <?php
                                if (isset($_GET['cari'])) {
                                    $cari = mysqli_real_escape_string($koneksi, $_GET['cari']);
                                    $query_cari = mysqli_query($koneksi, "SELECT * FROM pelanggan where pelatihan like '%" . $cari . "%' ");
                                    if (mysqli_num_rows($query_cari) > 0) {
                                        echo "<p><center>Hasil pencarian dengan nama '$cari' ditemukan</center></p>";
                                    } else {
                                        echo "<p><center>Hasil pencarian dengan nama '$cari' tidak ditemukan</center></p>";
                                    }
                                } else {
                                    $query_cari = mysqli_query($koneksi, "select * from pelanggan");
                                }
                                ?>
                            </thead>
                            <tbody>

                                <?php
                                $no = 1;
                                //tampil list data
                                if (mysqli_num_rows($query_cari)) {
                                    while ($r = mysqli_fetch_array($query_cari)) {
                                ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $r['nama']; ?></td>
                                            <td><?php echo $r['pelatihan']; ?></td>
                                            <td><?php echo $r['instruktur']; ?></td>
                                            <td><?php echo $r['hari']; ?></td>
                                            <td><?php echo $r['waktu']; ?></td>
                                            <td><?php echo $r['alamat']; ?></td>
                                            <td><?php echo $r['no_telp']; ?></td>
                                        </tr>

                                <?php
                                        $no++;
                                    }
                                } 


                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>

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