<!DOCTYPE html>
<html lang="en">
	
	<?php 
		include "menu.php";
	?>
		
	<BR>
	<BR>
	<body background="../assets/images/b.png">
	<div class="container">
	<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
				<div class="modal-content">
				
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
	 <table class="table table-bordered table-striped">
	<div class="form-group">
			<div class="col-sm-2"><input type="text" name="judul" class="form-control" required></div>
	</div>
	<div class="container">  
   <table class="table table-bordered table-striped">
	<thead>
		<tr>
			
			<th>ID buku</th>
			<th>Nama Siswa</th>
			<th>Kelas</th>
			<th>Alamat</th>
			<th>Email</th>
			<th>Kota</th>
			<th>Foto</th>
			<th>Aksi</th>
		</tr>
			</thead>
    <tbody>
     <?php
		include "../koneksi/koneksi.php";
		
			
			$opsi = "select * from tb_siswa B Join tb_kelas K On B.id_kelas=K.id_kelas ";
			$hasil = mysqli_query($konek,$opsi);

				while ($data = mysqli_fetch_array($hasil)){
				echo "<tr>
					<td>$data[id_siswa]</td>
					<td>$data[nama]</td>
					<td>$data[nama_kelas]</td>
					<td>$data[alamat]</td> 
					<td>$data[email_siswa]</td>
					<td>$data[kota]</td>
					<td>
					  <img src='../assets/images/".$data['foto']."' width='100px' height='100px'/>
					  </td>
					<td><a href =edit_siswa.php?id_siswa=$data[id_siswa]>
							<input type=submit value=Edit class=btn btn-primary data-toggle=modal data-target=#edit></a>
						<a href =hapus_siswa.php?id_siswa=$data[id_siswa]>
							<input type=submit value=Hapus class=btn btn-warning></a>
					</tr>";
					
				}
				
					echo "</table>";
					$query = mysqli_query($konek,"SELECT * from tb_siswa");
	
			?>

		</thead>
    </tbody>
  </table>
	<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Tambah Data</button>

    </div>
		
</div>

</body>

<!-- Mirrored from www.w3schools.com/bootstrap/tryit.asp?filename=trybs_table_striped&stacked=h by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Mar 2016 11:04:54 GMT -->
</html>
