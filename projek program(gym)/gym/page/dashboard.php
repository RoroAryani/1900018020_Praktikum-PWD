<?php  
    include '../../koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>dashboard</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../dist/css/skins/skin-blue.min.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <header class="main-header">
        <a href="index.php" class="logo">
            <span class="logo-mini"><b>GLC</b></span>
            <span class="logo-lg"><b>GYM LIFE CENTER</b></span>
        </a>
        <nav class="navbar navbar-static-top" role="navigation">
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
        </nav>
    </header>
    <aside class="main-sidebar">
        <section class="sidebar">
            <ul class="sidebar-menu">
                <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
                <li><a href="pelanggan.php"><i class="fa fa-list"></i> <span>Member</span></a></li>
                <li><a href="transaksi.php"><i class="fa fa-list"></i> <span>Data Transaksi</span></a></li>
                <li><a href="logout.php"><i class="glyphicon glyphicon-off"></i> <span>Logout</span></a></li>
            </ul>
        </section>
    </aside>
    <div class="content-wrapper">
        <section class="content">
            <div class="box box-primary">
                <div class="box-body">
                    <marquee scrolldelay="10" loop="infinite" bgcolor="#6E6E6E" style="font-family:oswald; font-size:20px; color:#ffffff; font-weight: bold;" title="efek freeze" behavior="alternate" onmouseover="this.stop()" onmouseout="this.start()">silahkan klik menu member untuk mengisi data formulir anda
  </marquee>
                    <h1 class="text-center text-primary">HAI,SELAMAT DATANG</h1>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            Anything you want
        </div>
        <strong>Copyright &copy; 2021 <a href="#">Website</a>.</strong> GYM LIFE CENTER.
    </footer>
</div>
<script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../dist/js/app.min.js"></script>
</body>
</html>
