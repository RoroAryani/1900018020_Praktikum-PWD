<?php
include '../../koneksi.php';
$sql="select * from pelanggan order by nama";
$tampil = mysqli_query($koneksi,$sql);
if (mysqli_num_rows($tampil) > 0) {
$no=1;
$response = array();
$response["data"] = array();
while ($r = mysqli_fetch_array($tampil)) {
 $h['nama'] = $r['nama'];
 $h['pelatihan'] = $r['pelatihan'];
 $h['instruktur'] = $r['instruktur'];
 $h['hari'] = $r['hari'];
 $h['waktu'] = $r['waktu'];
 $h['alamat'] = $r['alamat'];
 $h['no_telp'] = $r['no_telp'];
 array_push($response["data"], $h);
 }
 echo json_encode($response);
}
else {
 $response["message"]="tidak ada data";
 echo json_encode($response);
 }
?>