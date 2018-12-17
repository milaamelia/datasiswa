<?php
include "../koneksi/koneksi.php";

$id_mapel = $_GET['id_mapel'];

$hapus = "DELETE from tb_mapel where id_mapel = '$id_mapel'";
$hasil = mysqli_query($konek, $hapus);

if ($hasil){
	header("location:tampil_mapel.php");
}
else{
	echo "Gagal";
}
?>