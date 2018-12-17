<!DOCTYPE html>
<html lang="en">
	
	<?php 
		include "menu.php";
	?>
		
	<BR>
	<BR>
		
	<div class="container">
		
<body background="../assets/images/b.png">
	<div class="modal fade" id="modalKasir" role="dialog">
		<div class="modal-dialog">
    
			<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
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
							<form class="form-horizontal" role="form" action="input_guru.php" method="POST"  enctype="multipart/form-data">
						
								<div class="form-group">
									<label class="label-control col-sm-2">ID Guru</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" name=" kode_gru" value="<?php echo $kode ?>" readonly>
										</div>
								</div>
			
								
								<div class="form-group">
									<label class="label-control col-sm-2">Nama Guru</label>
										<div class="col-sm-10">
											<input type="text" class="form-control"  placeholder="Nama Guru" name="nama_guru" required>
										</div>
								</div>
									
								<div class="form-group">
									<label class="label-control col-sm-2">Email</label>
										<div class="col-sm-10">
											<input type="email" class="form-control"  placeholder="Email@..." name="email" required>
										</div>
								</div>
									<div class="form-group">
						            <label>Alamat</label>
						               <textarea class="form-control"  rows="3"  name="alamat" placeholder="Alamat ..."></textarea>
						              </div>

								<div class="form-group">
									<label class="label-control col-sm-2">No. Telp</label>
										<div class="col-sm-10">
											<input type="number" class="form-control"  placeholder="089*****" name="telpon" required>
										</div>
								</div>
									<div class="form-group">
									<label class="label-control col-sm-2">Foto</label>
										<div class="col-sm-12">
											<input type="file"  id="foto" name="foto" required>
										</div>
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
	
<BR>
<BR>

	<div class="form-group">
			<div class="col-sm-2"><input type="text" name="nama_kasir" class="form-control" required="required"></div>
	</div>
		
	<div class="container">           
		<table class="table table-striped">
			<thead>
				<tr>
					
					<th>ID Guru</th>
					<th>Nama Guru</th>
					<th>Email</th>
					<th>Alamat</th>
					<th>No Telphone</th>
					<th>Foto Guru</th>
				</tr>
			</thead>
    <tbody>
     <?php
		include "../koneksi/koneksi.php";
		
			
			$opsi = "select * from tb_guru";
			$hasil = mysqli_query($konek,$opsi);
			
				while ($data = mysqli_fetch_array($hasil)){
				echo "<tr>
					
					<td>$data[kode_gru]</td>
					<td>$data[nama_guru]</td> 
					<td>$data[email]</td>
					<td>$data[alamat]</td>    
					<td>$data[no_tlpn]</td>
					<td>
				     <img src='../assets/images/".$data['foto_guru']."' width='100px' height='100px'/>
					</td>
					<td><a href =edit_guru.php?kode_gru=$data[kode_gru]>
							<input type=submit value=Edit class=btn btn-warning data-toggle=modal data-target=#modalEdit></a>
						<a href =hapus_guru.php?kode_gru=$data[kode_gru]>
							<input type=submit value=Hapus class=btn btn-warning></a>
					</tr>";
					
				}
			

					echo "</table>";
	
											?>

												</thead>
    </tbody>
  </table>
  
  <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalKasir">Tambah Data</button>
</div>

</body>

<!-- Mirrored from www.w3schools.com/bootstrap/tryit.asp?filename=trybs_table_striped&stacked=h by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Mar 2016 11:04:54 GMT -->
</html>
