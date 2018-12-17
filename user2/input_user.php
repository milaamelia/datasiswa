<?php
include "../koneksi/koneksi.php";
$id_user			=$_POST['id_login'];
$username	 	    = $_POST['username'];
$passwors          = $_POST['passwors'];
$akses				= $_POST['akses'];
$status				= $_POST['status'];


$input = "insert into tb_login (id_login,username,password,akses,status) 
		VALUES ('$id_user','$username','$password','$akses','$status')";
$hasil = mysqli_query($konek,$input);
	?>
	<?php
	echo "<script type='text/javascript'>alert('Sukses')</script>";
	echo "<meta http-equiv='refresh' content='0.0;url=tampil_user.php'>";
	

if ($hasil){
	header ("location:tampil_user.php");
}
 else {
	echo "Input Data user Gagal";
}

?>