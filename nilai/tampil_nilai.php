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
								<?php
									include "../koneksi/koneksi.php";
									/*-------------------------------*/
									$sql=mysqli_query($konek,"select * from tb_nilai order by id_nilai DESC");
									$data=mysqli_fetch_array($sql);
									$kodeawal=substr($data['id_nilai'],3,4)+1; 
									if($kodeawal<10){
									$kode='NIL000'.$kodeawal;
									}elseif($kodeawal > 9 && $kodeawal <=99){
									$kode='NIL00'.$kodeawal;
									}else{
									$kode='BK0'.$kodeawal;
									}
									?>
									<form class="form-horizontal" role="form" action="input_nilai.php" method="post">		
						<div class="col-md-12">
							<div class="form-group">
								<label for="id_siswa">ID Nilai</label>
										<input type="text" class="form-control" id="id_nilai" name="id_nilai" value="<?php echo $kode ?>" readonly>
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
								<label for="id_kategori">Kelas</label>
									<select name="kelas" class="form-control" id="sel1">
										<option> -Pilih Kelas- </option>
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
						<label for="id_guru">Nama Guru</label>
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
			              <label for="kd">Niali UAS</label>
			              <input type="number" name="uas" class="form-control" id="uas"  placeholder="Beri Nilai yang Jujur">
			            </div>
			            	<div class="form-group">
			              <label for="kd">Niali UTS</label>
			              <input type="number" name="uts" class="form-control" id="uts"  placeholder="Beri Nilai yang Jujur">
			              <div class="form-group"> 	
			              <label for="kd">Niali Harian</label>
			              <input type="number" name="harian" class="form-control" id="harian"  placeholder="Beri Nilai yang Jujur">
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
			
			<th>ID Nilai</th>
			<th>Nama Siswa</th>
			<th>Kelas</th>
			<th>Nama Guru</th>
			<th>Nama Mapel</th>
			<th>UAS</th>
			<th>UTS</th>
			<th>Harian</th>
			<th>Rata-rata</th>
			<th>Keterangan</th>
			<th>Aksi</th>
		</tr>
			</thead>
    <tbody>
     <?php
		include "../koneksi/koneksi.php";
		
			
			$opsi = "select * from tb_nilai n join tb_siswa s on n.id_siswa=s.id_siswa join tb_guru g ON  g.kode_gru=n.kode_gru join tb_mapel m on n.id_mapel= m.id_mapel join tb_kelas e on e.id_kelas=n.id_kelas";
			$hasil = mysqli_query($konek,$opsi);

			while ($data = mysqli_fetch_array($hasil)){
			echo "<tr>";
				echo "<td>".$data['id_nilai']."</td>";
				echo "<td>".$data['nama']."</td>";
				echo "<td>".$data['nama_kelas']."</td>";
				echo "<td>".$data['nama_guru']."</td>";
				echo "<td>".$data['nama_mapel']."</td>";
				echo "<td>".$data['uas']."</td>";
				echo "<td>".$data['uts']."</td>";
				echo "<td>".$data['harian']."</td>";
				echo "<td>".(($data['uas']*0.4)+($data['uts']*0.4)+($data['harian']*0.2))."</td>";
				echo "<td>";
					if ((($data['uas']*0.4)+($data['uts']*0.4)+($data['harian']*0.2)) < 75) {
						echo 'Tdk Lulus'; 
					} else {
						echo 'lulus'; 
					}
				"</td>";
				echo "<td>
					<a href =edit_nilai.php?id_nilai=$data[id_nilai]>
						<input type=submit value=Edit class=btn btn-primary data-toggle=modal data-target=#edit></a>
					<a href =hapus_nilai.php?id_nilai=$data[id_nilai]>
						<input type=submit value=Hapus class=btn btn-warning></a>";
			echo "</tr>";
			}
			echo "</table>";
			$query = mysqli_query($konek,"SELECT * from tb_nilai");
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
