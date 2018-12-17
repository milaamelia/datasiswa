<?php
	include "../koneksi/koneksi.php";
$id_siswa = $_GET['id_siswa'];

$hapus = "DELETE from tb_siswa where id_siswa = '$id_siswa'";
$hasil = mysqli_query($konek, $hapus);

if ($hasil){
	
	echo "<script type='text/javascript'>alert('Data Berhasil Di Hapus')</script>";
	echo "<meta http-equiv='refresh' content='0.0;url=tampil_siswa.php'>";
}
else{
	echo "Gagal";
}
?>