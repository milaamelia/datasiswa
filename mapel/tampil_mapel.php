<!DOCTYPE html>
<html lang="en">
	
	<?php	
		include "menu.php";
	?>
		
		<body background="../assets/images/b.png">
	<div class="container">
		
	<div class="modal fade" id="modalkategori" role="dialog">
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
							<form class="form-horizontal" role="form" action="input_mapel.php" method="POST">
						
								<div class="form-group">
									<label class="label-control col-sm-2">ID Mapel</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" id="id" name="id_mapel" value="<?php echo $kode ?>" readonly>
										</div>
								</div>
			
								
								<div class="form-group">
									<label class="label-control col-sm-2">Nama Mapel</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" id="mapel" name="mapel" placeholder="Nama Mapel" required>
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
			</div>
		</div>
	</div>
<BR>
<BR>

	<div class="form-group">
			<div class="col-sm-2"><input type="text" name="kategori" class="form-control" required="required"></div>
	</div>
		
	<div class="container">           
		<table class="table table-striped">
			<thead>
				<tr>
					
					<th>ID Mapel</th>
					<th>Nama Mapel</th>
					<th>Aksi</th>
				</tr>
			</thead>
    <tbody>
     <?php
		include "../koneksi/koneksi.php";
		
			
			$opsi = "select * from tb_mapel";
			$hasil = mysqli_query($konek,$opsi);
		
				while ($data = mysqli_fetch_array($hasil)){
				echo "<tr>
					
					<td>$data[id_mapel]</td>
					<td>$data[nama_mapel]</td> 
					<td><a href =edit_mapel.php?id_mapel=$data[id_mapel]>
							<input type=submit value=Edit class=btn btn-warning data-toggle=modal data-target=#modalEdit></a>
						<a href =hapus_mapel.php?id_mapel=$data[id_mapel]>
							<input type=submit value=Hapus class=btn btn-warning></a>
					</tr>";
				
				}
			

					echo "</table>";
											?>

												</thead>
    </tbody>
  </table>
	<button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalkategori">Tambah Data</button>
</div>

</body>

<!-- Mirrored from www.w3schools.com/bootstrap/tryit.asp?filename=trybs_table_striped&stacked=h by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Mar 2016 11:04:54 GMT -->
</html>
