<?php
include "../koneksi/koneksi.php";

$id_kelas	 		= $_POST['kelas'];
$nama           	= $_POST['nama_kelas'];


$input = "insert into tb_kelas (id_kelas,nama_kelas) 
		VALUES ('$id_kelas','$nama')";
$hasil = mysqli_query($konek,$input);
	?>
	<?php
	echo "<script type='text/javascript'>alert('Sukses')</script>";
	echo "<meta http-equiv='refresh' content='0.0;url=tampil_kelas.php'>";
	

if ($hasil){
	header ("location:tampil_kelas.php");
}
 else {
	echo "Input Gagal";
}

?>