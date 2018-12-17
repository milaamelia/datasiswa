
<?php
include "../koneksi/koneksi.php";

$id_kelas			= $_POST['id_kelas'];
$nama		        = $_POST['nama_kelas'];
$update = "UPDATE tb_kelas SET nama_kelas='$nama' where id_kelas='$id_kelas'";
$hasil = mysqli_query($konek,$update);
?>
<?php

if ($hasil){

		echo "<script type='text/javascript'>alert('Sukses')</script>";
	echo "<meta http-equiv='refresh' content='0.0;url=tampil_kelas.php'>";

}
	else{
		echo $update;
}
?>