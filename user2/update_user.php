<?php

	include "../koneksi/koneksi.php";

$id 					= $_POST['id_login'];
$username		        = $_POST['username'];
$password				= $_POST['password'];
$akses					= $_POST['akses'];
$status					= $_POST['status'];

$update = "UPDATE tb_login SET username='$username', password='$password', akses='$akses',status='$status' where Id_login='$id'";
$hasil = mysqli_query($konek,$update);
?>
<?php

if ($hasil){

		echo "<script type='text/javascript'>alert('Sukses')</script>";
	echo "<meta http-equiv='refresh' content='0.0;url=tampil_user.php'>";

}
	else{
		echo $update;
}
?>