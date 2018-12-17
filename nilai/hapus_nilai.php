<?php
	include "../koneksi/koneksi.php";
$id_nilai = $_GET['id_nilai'];

$hapus = "DELETE from tb_nilai where id_nilai = '$id_nilai'";
$hasil = mysqli_query($konek, $hapus);

if ($hasil){
	
	echo "<script type='text/javascript'>alert('Data Berhasil Di Hapus')</script>";
	echo "<meta http-equiv='refresh' content='0.0;url=tampil_nilai.php'>";
}
else{
	echo "Gagal";
}
?>