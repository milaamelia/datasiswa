<!DOCTYPE html>
<html lang="en">
<head>
	<?php
		include "menu.php";
	?>
	
	<body>
<body background="../assets/images/b.png">
<div class="panel panel-info col-sm-9" style="margin-left:200px;">
          <div class="panel-heading">
            <div class="panel-title"><img src="../../images/karyawan.png" style="margin-top:-10px; float:left; margin-left:10px; height:40px;">&nbsp;<strong>&nbsp;Data Mapel</strong></div>
          </div>
	<div class="container">
		<?php
		include "../koneksi/koneksi.php";
			$edit = "select * from tb_mapel where id_mapel = '$_GET[id_mapel]'";
			$hasil = mysqli_query($konek,$edit);
			$data = mysqli_fetch_array($hasil);
			
	?>
	
	<BR>
	<BR>
	<BR>
		<div class="container">
							<form class="form-horizontal" role="form" action="update_mapel.php" method="POST">
			
								<div class="form-group">
									<label class="label-control col-sm-2">ID Mapel</label>
										<div class="col-sm-8">
											<input type="text" class="form-control" id="id" name="id_mapel" value="<?php echo $data['id_mapel']; ?>" readonly>
										</div>
								</div>
			
								
								<div class="form-group">
									<label class="label-control col-sm-2">Nama Mapel</label>
										<div class="col-sm-8">
											<input type="text" class="form-control" id="nama" name="mapel" placeholder="Nama Mapel" value="<?php echo $data['nama_mapel']; ?>" required>
										</div>
								</div>
								
							
		
								<div class="form-group">
									<div class="col-sm-10">
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