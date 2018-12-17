<!DOCTYPE html>
<html lang="en">
	
	<?php 
		include "menu.php";
	?>
		
	<BR>
	<BR>

		
	<div class="container">
	<body background="../assets/images/b.png">
	<div class="modal fade" id="modalPasok" role="dialog">
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
									<label class="label-control col-sm-6">ID Kelas</label>
										<div class="col-sm-12">
											<input type="text" class="form-control" name="kelas" value="<?php echo $kode ?>" readonly>
										</div>
								</div>
								<div class="form-group">
									<label class="label-control col-sm-6">Nama Kelas</label>
										<div class="col-sm-12">
											<input type="text" class="form-control"  placeholder="Nama Kelas" name="nama_kelas">
										</div>
										</div>
								<div class="modal-footer">
									<button type="submit" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
									<button type="submit" class="btn btn-primary">simpan </button>
							</div>
						
							<div class="row">
							</div>
	
							</div>
					</form> 
				</div>
			</div>
		</div>
	
	<table class="table table-bordered table-striped">
	<div class="form-group">
			<div class="col-sm-2"><input type="text" name="judul" class="form-control" required="required"></div>
	</div>
	<div class="container">           
		<table class="table table-striped">
			<thead>
				<tr>
					
					<th>ID Kelas</th>
					<th>Nama Kelas</th>
					<th>Aksi</th>
				</tr>
			</thead>
    <tbody>
     <?php
			include "../koneksi/koneksi.php";

		
			$opsi = "SELECT * From tb_kelas ";
			$hasil = mysqli_query($konek,$opsi);
		
				while ($data = mysqli_fetch_array($hasil)){
				echo "<tr>
				
					<td>$data[id_kelas]</td>
					<td>$data[nama_kelas]</td> 
				
					<td><a href =edit_kelas.php?id_kelas=$data[id_kelas]>
							<input type=submit value=Edit class=btn modalEdit data-toggle=modal data-target=#modalEdit></a>
						<a href =hapus_kelas.php?id_kelas=$data[id_kelas]>
							<input type=submit value=Hapus class=btn btn-warning></a>
					</tr>";
					
				}
			

					echo "</table>";
											?>

												</thead>
    </tbody>
  </table>
  <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalPasok">Tambah Data</button>
</div>

</body>

<!-- Mirrored from www.w3schools.com/bootstrap/tryit.asp?filename=trybs_table_striped&stacked=h by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Mar 2016 11:04:54 GMT -->
</html>
