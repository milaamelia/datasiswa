<!DOCTYPE html>
<html lang="en">
<head>
	<?php
		include "menu.php";
	?>
	

<body background="../assets/images/b.png">
 		<div class="panel panel-info col-sm-8" style="margin-left:200px;">
          <div class="panel-heading">
            <div class="panel-title"><img src="../../images/karyawan.png" style="margin-top:-10px; float:left; margin-left:10px; height:40px;">&nbsp;<strong>&nbsp;Data Nilai</strong></div>
          </div>
	<div class="container">
		<?php
			include "../koneksi/koneksi.php";
			$edit = "select * from tb_nilai where id_nilai = '$_GET[id_nilai]'";
			$hasil = mysqli_query($konek,$edit);
			$data = mysqli_fetch_array($hasil);
	?>
		<div class="container">
							<form class="form-horizontal" role="form" action="update_nilai.php" method="post">
						
								<div class="form-group">
									<label class="label-control col-sm-11">ID Nilai</label>
										<div class="col-sm-8">
											<input type="text" class="form-control" name="id_nilai" value="<?php echo $data['id_nilai']; ?>" readonly>
										</div>
								</div>
								<div class="form-group">
									<div class="col-sm-8">
								<label for="id_kelas">Nama Siswa</label>
									<select name="siswa" class="form-control" id="sel1">
										<option> - Pilih Siswa- </option>
											<?php 
												include "../koneksi/koneksi.php";
												
												$sql = "select * from tb_siswa ";
												$tampil = mysqli_query($konek,$sql);
												while ($data = mysqli_fetch_array($tampil)) {
												echo "<option value=$data[id_siswa]>$data[nama]</option>";														}
											?>
									</select>
							</div>
							</div>
				
								<div class="form-group">
								<div class="col-sm-8">
								<label for="id_kelas">Nama Kelas</label>
									<select name="kelas" class="form-control" id="sel1">
										<option> - Pilih Kelas- </option>
											<?php 
												include "../koneksi/koneksi.php";
												
												$sql = "select * from tb_kelas ";
												$tampil = mysqli_query($konek,$sql);
												while ($data = mysqli_fetch_array($tampil)) {
												echo "<option value=$data[id_kelas]>$data[nama_kelas]</option>";														}
											?>
									</select>
							</div>
							</div>
									<div class="form-group">
									<div class="col-sm-8">
								<label for="id_kelas">Nama Guru</label>
									<select name="guru" class="form-control" id="sel1">
										<option> - Pilih Guru- </option>
											<?php 
												include "../koneksi/koneksi.php";
												
												$sql = "select * from tb_guru ";
												$tampil = mysqli_query($konek,$sql);
												while ($data = mysqli_fetch_array($tampil)) {
												echo "<option value=$data[kode_gru]>$data[nama_guru]</option>";														}
											?>
									</select>
							</div>
							</div>		
									<div class="form-group">
									<div class="col-sm-8">
								<label for="id_kelas">Nama Mapel</label>
										<select name="mapel" class="form-control" id="sel1">
										<option> - Pilih Mapel- </option>
											<?php 
												include "../koneksi/koneksi.php";
												
												$sql = "select * from tb_mapel ";
												$tampil = mysqli_query($konek,$sql);
												while ($data = mysqli_fetch_array($tampil)) {
												echo "<option value=$data[id_mapel]>$data[nama_mapel]</option>";														}
											?>
									</select>
						</div>
					</div>
							<div class="form-group">
									<label class="label-control col-sm-11">UAS</label>
										<div class="col-sm-8">
											<input type="number" class="form-control" id="number" name="uas" placeholder="UAS" value="<?php echo $data['uas']; ?>">
										</div>
								</div>
						     <div class="form-group">
									<label class="label-control col-sm-11">UTS</label>
										<div class="col-sm-8">
											<input type="number" class="form-control" id="number" name="uts" placeholder="UTS" value="<?php echo $data['uts']; ?>">
										</div>
								</div>
						      <div class="form-group">
									<label class="label-control col-sm-11">Harian</label>
										<div class="col-sm-8">
											<input type="number" class="form-control" id="number" name="harian" placeholder="Harian" value="<?php echo $data['harian'];?>">
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