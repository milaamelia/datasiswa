<?php
include "../koneksi/koneksi.php";

$kode_guru	 	= $_POST['kode_gru'];
$nama_guru   	= $_POST['nama_guru'];
$email			= $_POST['email'];
$alamat			= $_POST['alamat'];
$telpon 		= $_POST['telpon'];
$foto	    	= $_FILES['foto']['name'];
move_uploaded_file($_FILES['foto']['tmp_name'], "image/".$_FILES['foto']['name']);
 echo"<script>alert('Gambar Berhasil diupload !');history.go(-1);</script>";

$input = "insert into tb_guru (kode_gru, nama_guru, email, alamat, no_tlpn, foto_guru) 
		VALUES ('$kode_guru','$nama_guru','$email','$alamat','$telpon','$foto')";
$hasil = mysqli_query($konek,$input);
	?>
	<?php
	echo "<script type='text/javascript'>alert('Sukses')</script>";
	echo "<meta http-equiv='refresh' content='0.0;url=tampil_guru.php'>";
	

if ($hasil){
	header ("location:tampil_guru.php");
}
 else {
	echo "Input Data Guru Gagal";
}

?>

