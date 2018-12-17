<?php
	include "../koneksi/koneksi.php";

$id_siswa	 	= $_POST['id_siswa'];
$nama			= $_POST['nama'];
$kelas  		= $_POST['kelas'];
$alamat			= $_POST['alamat'];
$email		    = $_POST['email'];
$kota 		    = $_POST['kota'];
$foto	    	= $_FILES['foto']['name'];
move_uploaded_file($_FILES['foto']['tmp_name'], "image/".$_FILES['foto']['name']);
 echo"<script>alert('Gambar Berhasil diupload !');history.go(-1);</script>";

$query = "insert into tb_siswa (id_siswa,nama,id_kelas,alamat,email_siswa,kota,foto) 
		VALUES ('$id_siswa','$nama','$kelas','$alamat','$email','$kota','$foto')";
$hasil = mysqli_query($konek,$query);
	?>
	<?php
	echo "<script type='text/javascript'>alert('Sukses')</script>";
	echo "<meta http-equiv='refresh' content='0.0;url=tampil_siswa.php'>";
	

if ($hasil){
	header ("location:tampil_siswa.php");
}
 else {
	echo "Input Gagal";
}

?>