<?php
include "../koneksi/koneksi.php";

$id_guru		= $_POST['kode_guru'];
$nama_guru		= $_POST['nama_guru'];
$email			= $_POST['email'];
$alamat			= $_POST['alamat'];
$telpon		    = $_POST['telpon'];
$foto	    	= $_FILES['foto']['name'];


 echo"<script>alert('Gambar Berhasil diupload !');history.go(-1);</script>";
$update = "UPDATE tb_guru SET nama_guru='$nama_guru', email='$email', alamat='$alamat', no_tlpn='$telpon',foto_guru='$foto' where kode_gru='$id_guru'";
$hasil = mysqli_query($konek,$update);
?>
<?php

 
if ($hasil){

		echo "<script type='text/javascript'>alert('Sukses')</script>";
	echo "<meta http-equiv='refresh' content='0.0;url=tampil_guru.php'>";

}
	else{
		echo $update;
}
?>