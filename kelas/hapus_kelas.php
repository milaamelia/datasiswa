<?php
	include "../koneksi/koneksi.php";
$id_kelas = $_GET['id_kelas'];

$hapus = "DELETE from tb_kelas where id_kelas = '$id_kelas'";
$hasil = mysqli_query($konek, $hapus);

if ($hasil){
	
	echo "<script type='text/javascript'>alert('Data Berhasil Di Hapus')</script>";
	echo "<meta http-equiv='refresh' content='0.0;url=tampil_kelas.php'>";
}
else{
	echo "Gagal";
}
?>