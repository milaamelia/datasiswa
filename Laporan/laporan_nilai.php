<?php
// memanggil library FPDF
require('fpdf/fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A5');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(190,7,'SMK INFORMATIKA UTAMA',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'DATA NILAI',0,1,'C');
 
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);
 
$pdf->SetFont('Arial','B',10);
$pdf->Cell(30,6,'ID Nilai',1,0);
$pdf->Cell(30,6,'Nama Siswa',1,0);
$pdf->Cell(30,6,'Kelas',1,0);
$pdf->Cell(30,6,'Nama Guru',1,0);
$pdf->Cell(30,6,'Nama Mapel',1,0);
$pdf->Cell(30,6,'UAS',1,0);
$pdf->Cell(30,6,'UTS',1,0);
$pdf->Cell(30,6,'Harian',1,1);	

 
$pdf->SetFont('Arial','',8);
 
include '../koneksi/koneksi.php';
$barang = mysqli_query($konek, "select * from tb_nilai n join tb_siswa s on n.id_siswa=s.id_siswa join tb_guru g ON  g.kode_gru=n.kode_gru join tb_mapel m on n.id_mapel= m.id_mapel join tb_kelas e on e.id_kelas=n.id_kelas");
while ($row = mysqli_fetch_array($barang)){
    $pdf->Cell(30,6,$row['id_nilai'],1,0);
    $pdf->Cell(30,6,$row['nama'],1,0);
    $pdf->Cell(30,6,$row['nama_kelas'],1,0);
     $pdf->Cell(30,6,$row['nama_guru'],1,0);
    $pdf->Cell(30,6,$row['nama_mapel'],1,0);
    $pdf->Cell(30,6,$row['uas'],1,0);
    $pdf->Cell(30,6,$row['uts'],1,0);
    $pdf->Cell(30,6,$row['harian'],1,1);
   
}
 
$pdf->Output();
?>