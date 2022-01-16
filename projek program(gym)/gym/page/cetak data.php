<?php
// memanggil library FPDF
require('FPDF/fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A5');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string
$pdf->Cell(190,7,'GYM LIFE CENTER',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'DAFTAR TRANSAKSI MEMBER',0,1,'C');
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Arial','B',11);
$pdf->Cell(30,7,'Nama Member',1,0,'C');
$pdf->Cell(30,7,'Jenis Pelatihan',1,0,'C');
$pdf->Cell(29,7,'Instruktur',1,0,'C');
$pdf->Cell(20,7,'Hari',1,0,'C');
$pdf->Cell(27,7,'Waktu',1,0,'C');
$pdf->Cell(25,7,'Alamat',1,0,'C');
$pdf->Cell(27,7,'No.Telp',1,1,'C');
$pdf->SetFont('Arial','',10);
include '../../koneksi.php'; // include database connection file
$pelanggan = mysqli_query($koneksi, "select * from pelanggan"); 
while ($row = mysqli_fetch_array($pelanggan)){ 
 $pdf->Cell(30,6,$row['nama'],1,0); 
 $pdf->Cell(30,6,$row['pelatihan'],1,0); 
 $pdf->Cell(29,6,$row['instruktur'],1,0); 
 $pdf->Cell(20,6,$row['hari'],1,0); 
 $pdf->Cell(27,6,$row['waktu'],1,0); 
 $pdf->Cell(25,6,$row['alamat'],1,0); 
 $pdf->Cell(27,6,$row['no_telp'],1,1);
}
$pdf->Output(); //untuk menampilkan outputnya
?>