<?php
include "../koneksi/koneksi.php";

$id_mapel	 	   = $_POST['id_mapel'];
$mapel		    = $_POST['mapel'];

$input = "insert into tb_mapel (id_mapel,nama_mapel) 
		VALUES ('$id_mapel','$mapel')";
$hasil = mysqli_query($konek,$input);
	?>
	<?php
	echo "<script type='text/javascript'>alert('Sukses')</script>";
	echo "<meta http-equiv='refresh' content='0.0;url=tampil_mapel.php'>";
	

if ($hasil){
	header ("location:tampil_mapel.php");
}
 else {
	echo "Input Data Kategori Gagal";
}

?>