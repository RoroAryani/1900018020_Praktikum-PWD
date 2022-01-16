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

    <title>Beranda Admin | GYM</title>
    <link rel="stylesheet" type="text/css" href="css/halaman admin.css">

</head>
<body>
    <div class="menu-halaman-admin">
        <ul>
            <a href="beranda-admin.php" class="bg-blue">
                <li>Beranda</li>
            </a>
            <a href="daftar-pelanggan.php" class="bg-blue-active">
                <li>Daftar Member </li>
            </a>
            <a href="proses-logout-admin.php" class="bg-blue">
                <li>Logout</li>
            </a>
            </ul>
    </div>
    <div class="container-konten-halaman-admin">
        <div class="header-judul-halaman-admin">
            <h1 class="color-blue">DATA MEMBER</h1>
        </div>
        <div class="box-konten-halaman-admin">
<div class="content-wrapper">
            <section class="content">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <a href="cetak data.php" class="color-green">CETAK DATA </a>
                    </div>
                        <table border="3">
                            <thead>
                                <tr class="color-blue">
                                    <th>No</th>
                                    <th>Nama Member</th>
                                    <th>Jenis Pelatihan</th>
                                    <th>Instruktur</th>
                                    <th>Hari</th>
                                    <th>Waktu</th>
                                    <th>Alamat</th>
                                    <th>No.Telp</th>
                                    <th>Aksi</th>
                                </tr>
                                <?php
                                if (isset($_GET['cari'])) {
                                    $cari = mysqli_real_escape_string($koneksi, $_GET['cari']);
                                    $query_cari = mysqli_query($koneksi, "SELECT * FROM pelanggan where pelatihan like '%" . $cari . "%' ");
                                    if (mysqli_num_rows($query_cari) > 0) {
                                        echo "<p><center>Hasil pencarian dengan pelatihan '$cari' ditemukan</center></p>";
                                    } else {
                                        echo "<p><center>Hasil pencarian dengan pelatihan '$cari' tidak ditemukan</center></p>";
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
                                            <td>
                                                <a href="update.php?nama=<?php echo $r['nama']; ?>">Update</a>
                                                ||
                                                <a href="delete.php?nama=<?php echo $r['nama']; ?>">Delete</a>
                                            </td>
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

<footer class="main-footer">
        <div class="pull-right hidden-xs">
        </div>
        <strong>Copyright &copy; 2021 <a href="#">Website</a>.</strong> GYM LIFE CENTER.
    </footer>
    </div>