<!DOCTYPE html>
<html lang="en">
<head>
	<?php
		include "menu.php";
	?>
	

<body background="../assets/images/b.png">
 		<div class="panel panel-info col-sm-8" style="margin-left:200px;">
          <div class="panel-heading">
            <div class="panel-title"><img src="../../images/karyawan.png" style="margin-top:-10px; float:left; margin-left:10px; height:40px;">&nbsp;<strong>&nbsp;Data Kelas</strong></div>
          </div>
	<div class="container">
		<?php
			include "../koneksi/koneksi.php";
			$edit = "select * from tb_kelas where id_kelas = '$_GET[id_kelas]'";
			$hasil = mysqli_query($konek,$edit);
			$data = mysqli_fetch_array($hasil);
	?>
		<div class="container">
							<form class="form-horizontal" role="form" action="update_kelas.php" method="post">
						
								<div class="form-group">
									<label class="label-control col-sm-11">ID kelas</label>
										<div class="col-sm-8">
											<input type="text" class="form-control" name="id_kelas" value="<?php echo $data['id_kelas']; ?>" readonly>
										</div>
								</div>
								<div class="form-group">
									<label class="label-control col-sm-11">Nama Kelas</label>
										<div class="col-sm-8">
											<input type="text" class="form-control" name="nama_kelas" value="<?php echo $data['nama_kelas'];?> ">
										</div>
								</div>
				
								
									<div class="col-sm-10">
								<div class="form-group">
								
										<button type="submit" class="btn btn-primary">Save</button>
										<button type="submit" class="btn btn-success">Close</button>
									</div>
								</div>
	
							</div>
					</form> 
</div>
</body>

<!-- Mirrored from www.w3schools.com/bootstrap/tryit.asp?filename=trybs_form_input&stacked=h by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Mar 2016 11:04:59 GMT -->
</html>