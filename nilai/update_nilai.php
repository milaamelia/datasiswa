
<?php
include "../koneksi/koneksi.php";

$id_nilai			= $_POST['id_nilai'];
$siswa 		        = $_POST['siswa'];
$kelas  			= $_POST['kelas'];
$guru 				= $_POST['guru'];
$mapel 				= $_POST['mapel'];
$uas				= $_POST['uas'];
$uts				= $_POST['uts'];
$harian				= $_POST['harian'];
$update = "UPDATE tb_nilai SET id_siswa='$siswa', id_kelas='$kelas', kode_gru='$guru', id_mapel='$mapel', uas='$uas', uts='$uts', harian='$harian' where id_nilai='$id_nilai'";
$hasil = mysqli_query($konek,$update);
?>
<?php

if ($hasil){

		echo "<script type='text/javascript'>alert('Sukses')</script>";
	echo "<meta http-equiv='refresh' content='0.0;url=tampil_nilai.php'>";

}
	else{
		echo $update;
}
?>