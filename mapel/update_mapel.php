<?php

	include "../koneksi/koneksi.php";

$id_mapel		= $_POST['id_mapel'];
$mapel			= $_POST['mapel'];

$update = "UPDATE tb_mapel SET nama_mapel='$mapel' where id_mapel='$id_mapel'";
$hasil = mysqli_query($konek,$update);
?>
<?php

if ($hasil){

		echo "<script type='text/javascript'>alert('Sukses')</script>";
	echo "<meta http-equiv='refresh' content='0.0;url=tampil_mapel.php'>";

}
	else{
		echo $update;
}
?>