<?php
include "../koneksi/koneksi.php";

$id_login = $_GET['Id_login'];

$hapus = "DELETE from tb_login  where Id_login = '$id_login'";
$hasil = mysqli_query($konek, $hapus);

if ($hasil){
	header("location:tampil_user.php");
}
else{
	echo "Gagal";
}
?>