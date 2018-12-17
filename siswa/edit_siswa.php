<!DOCTYPE html>
<html lang="en">
<head>
	<?php
		include "menu.php";
	?>
	
	<body background="../assets/images/b.png">
 		<div class="panel panel-info col-sm-9" style="margin-left:200px;">
          <div class="panel-heading">
            <div class="panel-title"><img src="../../images/karyawan.png" style="margin-top:-10px; float:left; margin-left:10px; height:40px;">&nbsp;<strong>&nbsp;Data Siswa</strong></div>
          </div>
		<div class="container">
		 <?php
				include "../koneksi/koneksi.php";

				$edit = "select * from tb_siswa where id_siswa = '$_GET[id_siswa]'";
				$hasil = mysqli_query($konek,$edit);
				$data = mysqli_fetch_array($hasil);
		?>

		<div class="container">
			<form role="form"action="update_siswa.php" method="POST" enctype="multipart/form-data">
				<div class="col-md-10">
				<div class="form-group">
					<label for="id_buku">ID Siswa</label>
						<input type="text" class="form-control" id="id_siswa" name="siswa" value="<?php echo $data['id_siswa'];  ?>">
				</div>
					<div class="form-group">
						<label for="judul">Nama Siswa</label>
							<input type="text" class="form-control" id="nama" placeholder="Nama Siswa" name="nama" value="<?php echo $data['nama'];  ?>">
							</div>
							<div class="form-group">
								<label for="id_kelas">Kelas</label>
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
							<div class="form-group">
					            <label>Alamat</label>
					               <textarea class="form-control"  rows="3"  name="alamat" placeholder="Alamat ..." value="<?php echo $data['alamat'];  ?>"></textarea>
						      </div>
							<div class="form-group">
								<label for="penerbit">Email</label>
									<input type="email" class="form-control" id="email" placeholder="Email" name="email" value="<?php echo $data['email_siswa'];  ?>" >
							</div>
							<div class="form-group">
								<label for="stok">Kota</label>
									<input type="text" class="form-control" id="kota" placeholder="kota" name="kota" value="<?php echo $data['kota'];  ?>" >
							</div>
								<div class="form-group">
									<label class="label-control col-sm-5">Foto</label>
										<div class="col-sm-8">
											<input type="file"  id="foto" name="foto" value="<?php echo $data['foto']; ?>">
										</div>
										</div>
							<div class="col-sm-10">
							<div class="modal-footer">
									<button type="submit" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
									<button type="submit" class="btn btn-primary">simpan </button>
							</div>
							</div>
						</div>
							<div class="row">
							</div>
  </form>
</div>
</body>

<!-- Mirrored from www.w3schools.com/bootstrap/tryit.asp?filename=trybs_form_input&stacked=h by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Mar 2016 11:04:59 GMT -->
</html>