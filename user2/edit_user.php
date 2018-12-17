<!DOCTYPE html>
<html lang="en">
<head>
	<?php
		include "menu.php";
	?>
	
<body background="../assets/images/b.png">
 		<div class="panel panel-info col-sm-9" style="margin-left:200px;">
          <div class="panel-heading">
            <div class="panel-title"><img src="../../images/karyawan.png" style="margin-top:-10px; float:left; margin-left:10px; height:40px;">&nbsp;<strong>&nbsp;Data Siswa</strong></div>
          </div>
	<div class="container">
		<?php
			include "../koneksi/koneksi.php";
			$edit = "select * from tb_login where Id_login = '$_GET[Id_login]'";
			$hasil = mysqli_query($konek,$edit);
			$data = mysqli_fetch_array($hasil);
	?>

		<div class="container">
			<form class="form-horizontal" role="form" action="update_user.php" method="POST">
								<?php
									include "../koneksi/koneksi.php";
									/*-------------------------------*/
									$sql=mysqli_query($konek,"select * from tb_login order by Id_login DESC ");
									$data=mysqli_fetch_array($sql);
									$kodeawal=substr($data['Id_login'],3,4)+1;
									if($kodeawal<10){
									$kode='US000'.$kodeawal;
									}elseif($kodeawal > 9 && $kodeawal <=99){
									$kode='US00'.$kodeawal;
									}else{
									$kode='US0'.$kodeawal;
									}
									?>	
								<div class="form-group">
									<label class="label-control col-sm-2">ID</label>
										<div class="col-sm-8">
											<input type="text" class="form-control" id="id" name="id_login" value="<?php echo $data['Id_login']; ?>"  readonly>
										</div>
								</div>
			
								
								<div class="form-group">
									<label class="label-control col-sm-2">Username</label>
										<div class="col-sm-8">
											<input type="text" class="form-control" id="user" name="username" placeholder="Username" value="<?php echo $data['username']; ?>"  required>
										</div>
								</div>
								
								
								<div class="form-group">
									<label class="label-control col-sm-2">Password</label>
										<div class="col-sm-8">
											<input type="password" class="form-control" id="pw" name="password" placeholder="Pasword" value="<?php echo $data['password']; ?>"  required>
										</div>
								</div>
				
								<div class="form-group">
									<label class="label-control col-sm-2">Akses</label>
										<div class="col-sm-8">
											<input type="text" class="form-control" id="akses" name="akses" placeholder="Akses" value="<?php echo $data['akses']; ?>" required>
										</div>
								</div>
										<div class="form-group">
									<label class="label-control col-sm-2">Status</label>
										<div class="col-sm-8">
											<input type="text" class="form-control" id="akses" name="status" placeholder="Akses" value="<?php echo $data['status']; ?>" required>
										</div>
								</div>
								<div class="col-sm-10">
									<div class="modal-footer">
									<button type="submit" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
									<button type="submit" class="btn btn-primary">simpan </button>
							</div>
						</div>
						</div>
							<div class="row">
							</div>
	
							</div>
					</form> 
</div>
</body>

<!-- Mirrored from www.w3schools.com/bootstrap/tryit.asp?filename=trybs_form_input&stacked=h by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Mar 2016 11:04:59 GMT -->
</html>