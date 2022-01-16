<?php
// include database connection file
include_once '../../koneksi.php';

?>
<!DOCTYPE html>
<html>
<head>

    <title>Edit Data | GYM</title>
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

            <h1 class="color-blue">Edit Data Member</h1>
            <h5 class="color-blue">* Isi form di bawah ini dengan lengkap</h5>

        </div>
        <div class="box-konten-form-halaman-admin">
            
            <form method="POST" action="proses-update.php">
                <!-- enctype="multipart/form-data" adalah sebuah function untuk upload gambar -->

                <?php

                    $nama          = $_GET['nama'];
                    $queryNamaPel  = "SELECT * FROM pelanggan WHERE nama='$nama'";
                    
                    $resultNamaPel = mysqli_query($koneksi, $queryNamaPel);
                    // di gunakan untuk masuk ke tabel barang yang ada di database

                    $rowNamaPel    = mysqli_fetch_assoc($resultNamaPel);

                ?>
                <input type="hidden" name="nama" value="<?php echo $rowNamaPel['nama']; ?>" required>

                <span class="color-blue">
                    Instruktur:
                </span>
                <input type="text" name="instruktur" value="<?php echo $rowNamaPel['instruktur'];?>"required>
                
                <span class="color-blue">
                    Hari:
                </span>
                <input type="text" name="hari" value="<?php echo $rowNamaPel['hari'];?>"required>

                <span class="color-blue">
                    Waktu:
                </span>
                <input type="text" name="waktu" value="<?php echo $rowNamaPel['waktu'];?>"required>

                

                <button type="submit" class="bg-blue">SELESAI</button>

                <button>
                    <a href="daftar-pelanggan.php">BATAL</a>
                </button>
            </form>
        </div>
    </div>
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
        </div>
        <strong>Copyright &copy; 2021 <a href="#">Website</a>.</strong> GYM LIFE CENTER.
    </footer>

</body>
</html>