<?php
session_start();

include "../koneksi/koneksi.php";
if (isset($_POST['btn_login']))
{
	$user = mysqli_real_escape_string($konek,stripslashes(strip_tags(htmlspecialchars($_POST['username']))));
	$pass = mysqli_real_escape_string($konek,stripslashes(strip_tags(htmlspecialchars($_POST['password']))));
	$user_error = $pass_error = "";

	$pass = ($_POST['password']);
	$cek = mysqli_query($konek,"select * from tb_login where password = '$pass'");				
	$data = mysqli_fetch_array($cek);
	$ketemu = mysqli_num_rows($cek);


	if($ketemu != 0)
	{
		 $_SESSION['user']=$data['username'];
		 $_SESSION['pass']=$data['password'];
		 $_SESSION['status']='login';
		 $_SESSION['lev']=$data['akses'];
		

		 if ($_SESSION['lev'] =='admin')
		 {
	 		?><script language="javascript">
      			alert("Selamat Datang ");
       			window.location = "menu_utama.php";
      </script><?php
  		}
		
		if ($_SESSION['lev'] =='user')
		 {
	 		?><script language="javascript">
      			alert("Selamat Datang ");
       			window.location = "../User/form_user.php";
      </script> <?php
  		}
	}
	else { 
		?>
		<script language="javascript">
				alert("Maaf, Data Yang Anda Input Salah!!");
				document.location="login.php";
				</script><?php
		} 
}
else{
	
}
?>