<?php
	session_start();
	if($_SESSION['status'] != 'login') {
		header('location:login.php');
	}
?>

<html>
	
	<?php
		include "menu.php";
	?>
	<body background="../assets/images/b.png">	
	<div class="container">
         
		  <div class="row">
			<div class="col-md-3">
				<img src="../assets/images/distributor.png" class="img-circle" width="200" height="200">
					<div class="form-group">
						<ul><div data-toggle="modal" data-target="#myModal" class="label-control">
						<h3>Form Data Siswa</h3></a></ul>
				</div>
		</div>
		<div class="col-md-3">
			<img src="../assets/images/user.png" class="img-circle" width="200" height="200">
				<div class="form-group">
					<ul><div data-toggle="modal" data-target="#modaluser">
					<h3>Form Data User</h3></a></ul>
				</div>
		</div>
		<div class="col-md-3">
			<div class="col-md-12">
				<img src="../assets/images/unduhan.jpg" class="img-circle" width="200" height="200">
					<div class="form-group">
						<ul><div data-toggle="modal" data-target="#modalmapel">
						<h3>Form Data Mapel</h3></div></a></ul>
					</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="col-md-12">
				<img src="../assets/images/bbb.gif" class="img-circle" width="200" height="200">
					<div class="form-group">
						<ul><a href="../Distribusi/tampil_distribusi.php"><div data-toggle="modal">
						<h3></h3></div></a></ul>
					</div>
			</div>
		</div>
	</div>
		 <div class="row">
			<div class="col-md-3">
				<img src="../assets/images/000.jpg" class="img-circle" width="200" height="200">
					<div class="form-group">
						<ul><div data-toggle="modal" data-target="#modalguru">
						<h3>Data Guru</h3></a></ul>
				</div>
		</div>
		<div class="col-md-3">
			<img src="../assets/images/png.png" class="img-circle" width="200" height="200">
				<div class="form-group">
					<ul><div data-toggle="modal" data-target="#modalkelas">
					<h3>Data Kelas</h3></a></ul>
				</div>
		</div>
		<div class="col-md-3">
			<div class="col-md-12">
				<img src="../assets/images/databuku.jpg" class="img-circle" width="200" height="200">
					<div class="form-group">
						<ul><div data-toggle="modal" data-target="#modalToko">
						<h3>Data Nilai</h3></div></ul>
					</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="col-md-12">
			<img src="../assets/images/icon.png" class="img-circle" width="200" height="200">
					<div class="form-group">
						<ul><a href="../laporan/laporan_nilai.php"><div data-toggle="modal">
						<h3>Laporan</h3></div></a></ul>
					</div>
			</div>
		</div>
	</div>
		
  <!-- Modalsiswa-->
	<div class="modal fade" id="myModal"role="dialog">
		<div class="modal-dialog">
    
			<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button"  class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Tambah Data</h4>
					</div>

						<div class="modal-body">
							<form class="form-horizontal" role="form" action="../siswa/input_siswa.php" method="POST" enctype="multipart/form-data">
								<?php
									include "../koneksi/koneksi.php";
									/*-------------------------------*/
									$sql=mysqli_query($konek,"select * from tb_siswa order by id_siswa DESC");
									$data=mysqli_fetch_array($sql);
									$kodeawal=substr($data['id_siswa'],3,4)+1;
									if($kodeawal<10){
									$kode='BK000'.$kodeawal;
									}elseif($kodeawal > 9 && $kodeawal <=99){
									$kode='BK00'.$kodeawal;
									}else{
									$kode='BK0'.$kodeawal;
									}
									?>		
						<div class="col-md-12">
							<div class="form-group">
								<label for="id_siswa">ID Siswa</label>
										<input type="text" class="form-control" id="id_siswa" name="id_siswa" value="<?php echo $kode ?>" readonly>
							</div>
							<div class="form-group">
								<label for="judul">Nama Siswa</label>
									<input type="text" class="form-control" id="nama" placeholder="nama" name="nama">
							</div>
							<div class="form-group">
								<label for="id_kategori">Kelas</label>
									<select name="kelas" class="form-control" id="sel1">
										<option value=0 selected> -Pilih Kelas- </option>
											<?php 
												include "../koneksi/koneksi.php";
												
												$sql = "select * from tb_kelas ";
												$tampil = mysqli_query($konek,$sql);
												while ($data = mysqli_fetch_array($tampil)) {
												echo "<option value=$data[id_kelas]>$data[nama_kelas]</option>";														}
											?>
									</select>
							</div>
								<div class="form-group">
						            <label>Alamat</label>
						               <textarea class="form-control"  rows="3"  name="alamat" placeholder="Alamat ..."></textarea>
						              </div>
							
						  <div class="form-group">
			              <label for="kd">Email</label>
			              <input type="email" name="email" class="form-control" id="kd"  placeholder="Email...">
			            </div>
							<div class="form-group">
			              <label for="kd">Kota</label>
			              <input type="text" name="kota" class="form-control" id="kota"  placeholder="Kota...">
			            </div>
			            	<div class="form-group">
									<label class="label-control col-sm-2">Foto</label>
										<div class="col-sm-12">
										<input id="uploadImage" type="file" name="foto" onchange="PreviewImage();" />
								</div>
								</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">simpan </button>
							</div>
						</div>
							
							
							
							<div class="row">
								
							</div>
							 
					</form>  
				</div>
			</div>
		</div>
	</div>
	
		<!-- Modal Nilai -->

	<div class="modal fade" id="modalToko" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Tambah Data</h4>
						
					</div>
						<div class="modal-body">
								 <?php
								include "../koneksi/koneksi.php";
									/*-------------------------------*/ 
									$sql=mysqli_query($konek,"select * from tb_nilai order by id_nilai DESC ");
									$data=mysqli_fetch_array($sql);
									$kodeawal=substr($data['id_nilai'],3,4)+1;
									if($kodeawal<10){
									$kode='NIL000'.$kodeawal;
									}elseif($kodeawal > 9 && $kodeawal <=99){
									$kode='NIL00'.$kodeawal;
									}else{
									$kode='NIL0'.$kodeawal;
									}
									?>		
							<form class="form-horizontal" role="form" action="../nilai/input_nilai.php" method="POST">
						
								<div class="form-group">
									<label class="label-control col-sm-2">ID Nilai</label>
										<div class="col-sm-12">
											<input type="text" class="form-control" id="nilai" name="id_nilai" value="<?php echo $kode ?>" readonly>
										</div>
								</div>
			
								<div class="form-group">
								<label for="id_kategori">Nama Siswa</label>
									<select name="siswa" class="form-control" id="sel1">
										<option> -Pilih Siswa- </option>
											<?php 
												include "../koneksi/koneksi.php";
												
												$sql = "select * from tb_siswa ";
												$tampil = mysqli_query($konek,$sql);
												while ($data = mysqli_fetch_array($tampil)) {
												echo "<option value=$data[id_siswa]>$data[nama]</option>";														}
											?>
									</select>
							</div>

								<div class="form-group">
								<label for="id_kelas">Nama Kelas</label>
									<select name="kelas" class="form-control" id="sel1">
										<option> -Pilih Kelas- </option>
											<?php 
												include "../koneksi/koneksi.php";
												
												$sql = "select * from tb_kelas";
												$tampil = mysqli_query($konek,$sql);
												while ($data = mysqli_fetch_array($tampil)) {
												echo "<option value=$data[id_kelas]>$data[nama_kelas]</option>";														}
											?>
									</select>
							</div>
									<div class="form-group">
								<label for="id_kategori">Nama Guru</label>
									<select name="guru" class="form-control" id="sel1">
										<option> -Pilih Guru- </option>
											<?php 
												include "../koneksi/koneksi.php";
												
												$sql = "select * from tb_guru ";
												$tampil = mysqli_query($konek,$sql);
												while ($data = mysqli_fetch_array($tampil)) {
												echo "<option value=$data[kode_gru]>$data[nama_guru]</option>";														}
											?>
									</select>
							</div>
								<div class="form-group">
								<label for="id_kategori">Nama Mapel</label>
									<select name="mapel" class="form-control" id="sel1">
										<option> -Pilih Mapel- </option>
											<?php 
												include "../koneksi/koneksi.php";
												
												$sql = "select * from tb_mapel ";
												$tampil = mysqli_query($konek,$sql);
												while ($data = mysqli_fetch_array($tampil)) {
												echo "<option value=$data[id_mapel]>$data[nama_mapel]</option>";														}
											?>
									</select>
							</div>
								
								<div class="form-group">
									<label class="label-control col-sm-2">UAS</label>
										<div class="col-sm-12">
											<input type="number" class="form-control" id="uas" name="uas" placeholder="UAS" required>
										</div>
								</div>
								
								<div class="form-group">
									<label class="label-control col-sm-2">UTS</label>
										<div class="col-sm-12">
											<input type="number" class="form-control" id="uts" name="uts" placeholder="UTS" required>
										</div>
								</div>
								
								<div class="form-group">
									<label class="label-control col-sm-2">Harian</label>
										<div class="col-sm-12">
											<input type="number" class="form-control" id="number" name="harian" placeholder="Harian" required>
										</div>
								</div>
								<div class="modal-footer">
							<button type="submit" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">simpan </button>
							</div>
	
							</div>
					</form> 
				</div>
			</div>
		</div>
	</div>
	
	<!-- Modal mapel -->
	<div class="modal fade" id="modalmapel" role="dialog">
		<div class="modal-dialog">
    
			<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Tambah Data</h4>
					</div>
						<div class="modal-body">
								 <?php
								include "../koneksi/koneksi.php";
									/*-------------------------------*/
									$sql=mysqli_query($konek,"select * from tb_mapel order by id_mapel DESC ");
									$data=mysqli_fetch_array($sql);
									$kodeawal=substr($data['id_mapel'],3,4)+1;
									if($kodeawal<10){
									$kode='MAP000'.$kodeawal;
									}elseif($kodeawal > 9 && $kodeawal <=99){
									$kode='MAP00'.$kodeawal;
									}else{
									$kode='MAP0'.$kodeawal;
									}
									?>		
							<form class="form-horizontal" role="form" action="../mapel/input_mapel.php" method="POST">
						
								<div class="form-group">
									<label class="label-control col-sm-2">ID MAPEL</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" id="id" name="id_mapel" value="<?php echo $kode ?>" readonly>
										</div>
								</div>
			
								
								<div class="form-group">
									<label class="label-control col-sm-2">Nama Mapel</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" id="mapel2" name="mapel" placeholder="Nama Mapel" required>
										</div>
								</div>
							<div class="modal-footer">
							<button type="submit" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">simpan </button>
							</div>
						</div>
								
	
							</div>
					</form> 
				</div>
			</div>
		</div>
	</div>

			
  <!-- Modal User-->
	<div class="modal fade" id="modaluser" role="dialog">
		<div class="modal-dialog">
    
			<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Tambah Data</h4>
					</div>
						<div class="modal-body">
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
							<form class="form-horizontal" role="form" action="../user2/input_user.php" method="POST">
							<div class="form-group">
									<label class="label-control col-sm-2">ID</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" id="id" name="id_login" value="<?php echo $kode ?>" readonly>
										</div>
								</div>
								<div class="form-group">
									<label class="label-control col-sm-2">Username</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" id="user" name="username" placeholder="Username" required>
										</div>
								</div>
								
								
								<div class="form-group">
									<label class="label-control col-sm-2">Passwors</label>
										<div class="col-sm-10">
											<input type="password" class="form-control" id="pw" name="password" placeholder="password" required>
										</div>
								</div>
				
								<div class="form-group">
									<label class="label-control col-sm-2">Akses</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" id="text" name="akses" placeholder="Akses" required>
										</div>
								</div>
								<div class="form-group">
									<label class="label-control col-sm-2">Status</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" id="status" name="status" placeholder="Status" required>
										</div>
								</div>
		
								<div class="modal-footer">
							<button type="submit" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">simpan </button>
							</div>
	
							</div>
					</form> 
				</div>
			</div>
		</div>
	</div>
	
					
  <!-- Modal guru -->
	<div class="modal fade" id="modalguru" role="dialog">
		<div class="modal-dialog">
    
			<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Tambah Data</h4>
					</div>
						<div class="modal-body">
							 <?php
									
									include "../koneksi/koneksi.php";
									/*-------------------------------*/
									$sql=mysqli_query($konek,"select * from tb_guru order by kode_gru DESC ");
									$data=mysqli_fetch_array($sql);
									$kodeawal=substr($data['kode_gru'],3,4)+1;
									if($kodeawal<10){
									$kode='GU000'.$kodeawal;
									}elseif($kodeawal > 9 && $kodeawal <=99){
									$kode='GU00'.$kodeawal;
									}else{
									$kode='GU0'.$kodeawal;
									}
									?>		
							<form class="form-horizontal" role="form" action="../guru/input_guru.php" method="POST"  enctype="multipart/form-data">
						
								<div class="form-group">
									<label class="label-control col-sm-2">ID GURU</label>
										<div class="col-sm-12">
											<input type="text" class="form-control" name="kode_gru" value="<?php echo $kode ?>" readonly>
										</div>
								</div>
			
								
								<div class="form-group">
									<label class="label-control col-sm-2">Nama Guru</label>
										<div class="col-sm-12">
											<input type="text" class="form-control"  placeholder="Nama Guru" name="nama_guru" required>
										</div>
								</div>
								
									<div class="form-group">
									<label class="label-control col-sm-2">Emial</label>
										<div class="col-sm-12">
											<input type="email" class="form-control"  placeholder="Email@..." name="email" required>
										</div>
								</div>
										<div class="form-group">
						            <label>Alamat</label>
						               <textarea class="form-control"  rows="3"  name="alamat" placeholder="Alamat ..."></textarea>
						              </div>
							
								<div class="form-group">
									<label class="label-control col-sm-2">No. Telp</label>
										<div class="col-sm-12">
											<input type="number" class="form-control"  placeholder="089*****" name="telpon" required>
										</div>
								</div>
							<div class="form-group">
									<label class="label-control col-sm-2">Foto</label>
										<div class="col-sm-12">
										<input id="uploadImage" type="file" name="foto" onchange="PreviewImage();" />
										</div>
								</div>
		
								<div class="modal-footer">
							<button type="submit" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">simpan </button>
							</div>
	
							</div>
					</form> 
				</div>
			</div>
		</div>
	</div>
	
	
  <!-- Modal kelas -->
	<div class="modal fade" id="modalkelas" role="dialog">
		<div class="modal-dialog">
    
			<!-- Modal kelas-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Tambah Data</h4>
					</div>
						<div class="modal-body">
						 <?php
									include "../koneksi/koneksi.php";
									/*-------------------------------*/
									$sql=mysqli_query($konek,"select * from tb_kelas order by id_kelas DESC ");
									$data=mysqli_fetch_array($sql);
									$kodeawal=substr($data['id_kelas'],5,4)+1;
									if($kodeawal<10){
									$kode='KTG000'.$kodeawal;
									}elseif($kodeawal > 9 && $kodeawal <=99){
									$kode='KTG00'.$kodeawal;
									}else{
									$kode='KTG0'.$kodeawal;
									}
									?>		
							<form class="form-horizontal" role="form" action="../kelas/input_kelas.php" method="post">
						
								<div class="form-group">
									<label class="label-control col-sm-2">ID Kelas</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" name="kelas" value="<?php echo $kode ?>" readonly>
										</div>
								</div>
								<div class="form-group">
									<label class="label-control col-sm-2">Nama Kelas</label>
										<div class="col-sm-10">
											<input type="text" class="form-control"  placeholder="Nama Kelas" name="nama_kelas">
										</div>
								</div>
							<div class="modal-footer">
							<button type="submit" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">simpan </button>
							</div>
						</div>
	
							</div>
					</form> 
				</div>
			</div>
		</div>
	</div>

</body>
</html>