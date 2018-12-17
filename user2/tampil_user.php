<!DOCTYPE html>
<html lang="en">
	
	<?php	
		include "menu.php";
	?>
		
			<body background="../assets/images/b.png">
	
	<div class="container">
		
	<div class="modal fade" id="modaluser" role="dialog">
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
									$sql=mysqli_query($konek,"select * from tb_login order by Id_login DESC ");
									$data=mysqli_fetch_array($sql);
									$kodeawal=substr($data['Id_login'],3,4)+1;
									if($kodeawal<10){
									$kode='DT000'.$kodeawal;
									}elseif($kodeawal > 9 && $kodeawal <=99){
									$kode='DT00'.$kodeawal;
									}else{
									$kode='DT0'.$kodeawal;
									}
									?>		
							<form class="form-horizontal" role="form" action="input_user.php" method="POST">
						
								<div class="form-group">
									<label class="label-control col-sm-2">ID </label>
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
									<label class="label-control col-sm-2">Password</label>
										<div class="col-sm-10">
											<input type="password" class="form-control" id="pw" name="passwors" placeholder="Password" required>
										</div>
								</div>
				
								<div class="form-group">
									<label class="label-control col-sm-2">Akses</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" id="akses" name="akses" placeholder="Akses" required>
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
							</div
	
							</div>
					</form> 
				</div>
			</div>
		</div>
	</div>
	
<BR>
<BR>

	<div class="form-group">
			<div class="col-sm-2"><input type="text" name="nama_distributor" class="form-control" required="required"></div>
	</div>
		
	<div class="container">           
		<table class="table table-striped">
			<thead>
				<tr>
					
					<th>ID</th>
					<th>Username</th>
					<th>Akses</th>
					<th>Status</th>
					<th>Aksi</th>
				</tr>
			</thead>
    <tbody>
     <?php
		include "../koneksi/koneksi.php";
		
			
			$opsi = "select * from tb_login";
			$hasil = mysqli_query($konek,$opsi);
		
				while ($data = mysqli_fetch_array($hasil)){
				echo "<tr>
					
					<td>$data[Id_login]</td>
					<td>$data[username]</td> 
					<td>$data[akses]</td>
					<td>$data[status]</td>
					<td><a href =edit_user.php?Id_login=$data[Id_login]>
							<input type=submit value=Edit class=btn btn-warning data-toggle=modal data-target=#modalEdit></a>
						<a href =hapus_user.php?Id_login=$data[Id_login]>
							<input type=submit value=Hapus class=btn btn-warning></a>
					</tr>";
				
				}
			

					echo "</table>";
											?>

												</thead>
    </tbody>
  </table>
	<button type="button" class="btn btn-info" data-toggle="modal" data-target="#modaluser">Tambah Data</button>
</div>

</body>

<!-- Mirrored from www.w3schools.com/bootstrap/tryit.asp?filename=trybs_table_striped&stacked=h by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Mar 2016 11:04:54 GMT -->
</html>
