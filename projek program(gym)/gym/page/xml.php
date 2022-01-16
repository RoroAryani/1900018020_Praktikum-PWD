<?php
include '../../koneksi.php';
header('Content-Type: text/xml');
$query = "SELECT * FROM pelanggan";
$hasil = mysqli_query($koneksi,$query);
$jumField = mysqli_num_fields($hasil);
echo "<?xml version='1.0'?>";
echo "<data>";
while ($data = mysqli_fetch_array($hasil))
{
 echo "<pelanggan>";
 echo"<nama>",$data['nama'],"</nama>";
 echo"<pelatihan>",$data['pelatihan'],"</pelatihan>";
 echo"<instruktur>",$data['instruktur'],"</instruktur>";
 echo"<hari>",$data['hari'],"</hari>";
 echo"<waktu>",$data['waktu'],"</waktu>";
  echo"<alamat>",$data['alamat'],"</alamat>";
   echo"<no_telp>",$data['no_telp'],"</no_telp>";
 echo "</pelanggan>";
}
echo "</data>";
?>