<?php
include "../koneksi/koneksi.php";

$id_guru = $_GET['kode_gru'];

$hapus = "DELETE from tb_guru where kode_gru = '$id_guru'";
$hasil = mysqli_query($konek, $hapus);

if ($hasil){
	echo "<script type='text/javascript'>alert('Data Berhasil Di Hapus')</script>";
	echo "<meta http-equiv='refresh' content='0.0;url=tampil_guru.php'>";
}
else{
	echo "Gagal";
}
?>