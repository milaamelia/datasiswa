<?php 

include "../koneksi/koneksi.php";

$id_nilai	 	= $_POST['id_nilai'];
$siswa			= $_POST['siswa'];
$kelas  		= $_POST['kelas'];
$guru			= $_POST['guru'];
$mapel		    = $_POST['mapel'];
$uas 		    = $_POST['uas'];
$uts		    = $_POST['uts'];
$harian 		 = $_POST['harian'];


$query = "insert into tb_nilai (id_nilai,id_siswa,id_kelas,kode_gru,id_mapel,uas,uts,harian) 
		VALUES ('$id_nilai','$siswa','$kelas','$guru','$mapel','$uas','$uts','$harian')";
$hasil = mysqli_query($konek,$query);
	?>
	<?php
	echo "<script type='text/javascript'>alert('Sukses')</script>";
	echo "<meta http-equiv='refresh' content='0.0;url=tampil_nilai.php'>";
	

if ($hasil){
	header ("location:tampil_nilai.php");
}
 else {
	echo "Input Gagal";
}

?>