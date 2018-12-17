<?php

	include "../koneksi/koneksi.php";

$id_siswa				= $_POST['siswa'];
$nama					= $_POST['nama'];
$kelas				    = $_POST['kelas'];
$alamat 				= $_POST['alamat'];
$email				    = $_POST['email'];
$kota				    = $_POST['kota'];
$foto	    	        = $_FILES['foto']['name'];


 echo"<script>alert('Gambar Berhasil diupload !');history.go(-1);</script>";
$update = "UPDATE tb_siswa SET nama='$nama', id_kelas='$kelas' ,alamat='$alamat',email_siswa='$email',kota='$kota',foto='$foto' where id_siswa='$id_siswa'";
$hasil = mysqli_query($konek,$update);
?>
<?php

if ($hasil){

		echo "<script type='text/javascript'>alert('Sukses')</script>";
	echo "<meta http-equiv='refresh' content='0.0;url=tampil_siswa.php'>";

}
	else{
		echo "gagal";
		
	}
?>