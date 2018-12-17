<!DOCTYPE html>
<html lang="en">
<head>
	<?php
		include "menu.php";
	?>
	
	<body>
	<body background="../assets/images/b.png">
 		<div class="panel panel-info col-sm-8" style="margin-left:200px;">
          <div class="panel-heading">
            <div class="panel-title"><img src="../../images/karyawan.png" style="margin-top:-10px; float:left; margin-left:10px; height:40px;">&nbsp;<strong>&nbsp;Data GURU</strong></div>
          </div>

	<div class="container">
		 <?php
				include "../koneksi/koneksi.php";
				$edit = "select * from tb_guru where kode_gru = '$_GET[kode_gru]'";
				$hasil = mysqli_query($konek,$edit);
				$data = mysqli_fetch_array($hasil);
		?>

		<div class="container">
			<form class="form-horizontal" role="form" action="update_guru.php" method="POST" enctype="multipart/form-data">
								<div class="form-group">
									<label class="label-control col-sm-2">kode Guru</label>
										<div class="col-sm-8">
											<input type="text" class="form-control" name="kode_guru" value="<?php echo $data['kode_gru']; ?>" readonly>
										</div>
								</div>
			
								
								<div class="form-group">
									<label class="label-control col-sm-2">Nama Guru</label>
										<div class="col-sm-8">
											<input type="text" class="form-control"  placeholder="Nama Guru" name="nama_guru" value="<?php echo $data['nama_guru']; ?>" required>
										</div>
								</div>
								
								<div class="form-group">
									<label class="label-control col-sm-2">Email</label>
										<div class="col-sm-8">
											<input type="text" class="form-control"  placeholder="Email@..." name="email" value="<?php echo $data['email']; ?>" required>
										</div>
								</div>
								<div class="form-group">
						             <label class="label-control col-sm-8"><label>Alamat</label>
						  			<textarea class="form-control"  rows="3"  name="alamat" placeholder="Alamat ..."></textarea>
						              </div>
						              </div>
				
								<div class="form-group">
									<label class="label-control col-sm-2">No. Telp</label>
										<div class="col-sm-8">
											<input type="text" class="form-control"  placeholder="089*****" name="telpon" value="<?php echo $data['no_tlpn']; ?>" required>
										</div>
								</div>
									<div class="form-group">
									<label class="label-control col-sm-5">Foto</label>
										<div class="col-sm-8">
											<input type="File"  id="foto" name="foto" value="<?php echo $data['foto_guru']; ?>" required>
										</div>required>
										</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<button type="submit" class="btn btn-primary">Save</button>
										<button type="sumbit" class="btn btn-success">Close</button>
									</div>
								</div>
	
							</div>
					</form> 
</div>
</body>

<!-- Mirrored from www.w3schools.com/bootstrap/tryit.asp?filename=trybs_form_input&stacked=h by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Mar 2016 11:04:59 GMT -->
</html>