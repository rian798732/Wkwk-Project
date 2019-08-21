<?php 
$active = "acc_hp";
include 'layouts/header.php';
?>
<h3><span class="fa fa-edit"></span>  Edit Barang</h3>
<a class="btn" href="dashboard.php"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>
<?php
$id = isset($_GET['id']) ? $_GET['id'] : '';
$name = isset($_GET['name']) ? $_GET['nzme'] : '';
$detail=mysqli_query($mysqli, "select * from acc_hp where id='$id'");
while($data=mysqli_fetch_array($detail)){
?>					
	<div class="row">
		<div class="col-md-8"> 
			<form action="edit_act.php" method="post" enctype="multipart/form-data">
			<table class="table" style="width: 100%;">
				<tr>
					<td> 
						<label>Nama Barang</label>
						<input type="text" class="form-control" name="nama" value="<?php echo $data['name'] ?>">
					</td>
					<td><label>Kategori</label>
						<select class="form-control" id="kategori" name="kategori">
							<?php
								$detail=mysqli_query($mysqli, "select * from acc_hp where id='$id'");
								while($data=mysqli_fetch_array($detail)){
							?>
								<option><?php echo $data['kategori'] ?></option>
								<option>---- Pilih Menu Dibawah Untuk Mengganti ----</option>
								<?php
								}
									$merek = mysqli_query($mysqli, "select * from kategori");
									while($data = mysqli_fetch_array($merek)){
								?>
								<option><?php echo $data['nama_kategori']; ?></option>
								<?php
									}
								?>
						</select>
					</td>
					<td>
						<?php
							$detail=mysqli_query($mysqli, "select * from acc_hp where id='$id'");
							while($data=mysqli_fetch_array($detail)){
						?>	
						<input type="hidden" name="id" value="<?php echo $data['id'] ?>"></td>
						<?php
							}
						?>
				</tr>
				<tr>
					<td>
						<label>Merek</label>
						<select class="form-control" id="merek" name="merek">
							<?php
								$detail=mysqli_query($mysqli, "select * from acc_hp where id='$id'");
								while($data=mysqli_fetch_array($detail)){
							?>
								<option><?php echo $data['merek'] ?></option>
								<option>---- Pilih Menu Dibawah Untuk Mengganti ----</option>
								<?php
								}
									$merek = mysqli_query($mysqli, "select * from merek");
									while($data = mysqli_fetch_array($merek)){
								?>
								<option><?php echo $data['nama_merek']; ?></option>
								<?php
									}
								?>
						</select>
					</td>
					<td>
						<label>Warna</label>
						<?php
							$detail=mysqli_query($mysqli, "select * from acc_hp where id='$id'");
							while($data=mysqli_fetch_array($detail)){
						?>
						<input name="warna" type="text" class="form-control" value="<?php echo $data['warna']?>">
						<?php
							}
						?>
					</td>
				</tr>
				<tr>
					
				</tr>
				<tr>
					<td>
						<label>Label</label>
						<select class="form-control" id="label" name="label">
							<?php
								$detail=mysqli_query($mysqli, "select * from acc_hp where id='$id'");
								while($data=mysqli_fetch_array($detail)){
							?>
								<option><?php echo $data['label'] ?></option>
								<option>---- Pilih Menu Dibawah Untuk Mengganti ----</option>
								<?php
								}
								$label = mysqli_query($mysqli, "select * from label");
								while($data = mysqli_fetch_array($label)){
							?>
							<option><?php echo $data['nama_label']; ?></option>
							<?php
								}
							?>
						</select>
					</td>
					<td>
						<?php
							$detail=mysqli_query($mysqli, "select * from acc_hp where id='$id'");
							while($data=mysqli_fetch_array($detail)){
						?>
							<label>Harga</label>
							<input name="harga" type="number" class="form-control" value="<?php echo $data['harga']?>">
						<?php
							}
						?>
					</td>
				</tr>
				<tr>
					<td><label>Deskripsi</label></td>
					<?php
						$detail=mysqli_query($mysqli, "select * from acc_hp where id='$id'");
						while($data=mysqli_fetch_array($detail)){
					?>
					<td colspan="2"><textarea name="desk" style="height: 150px; white-space: pre-line;" type="text" class="form-control" placeholder="Masukkan Deskripsi"><?php echo $data['deskripsi']?></textarea></td>
					<?php
						}
					?>
				</tr>
				<tr>
					<td colspan="3">
						<label>Link Tokopedia</label>
						<?php
							$detail=mysqli_query($mysqli, "select * from acc_hp where id='$id'");
							while($data=mysqli_fetch_array($detail)){
						?>
						<input name="link" type="text" class="form-control" value="<?php echo $data['link_tokped']?>">
						<?php 
							} 
						?>
					</td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="upload" class="btn btn-info" value="Simpan"></td>
				</tr>
			</table>
		</form>
		</div>
		<div class="col-md-4">
			<?php
				$detail=mysqli_query($mysqli, "select * from acc_hp where id='$id'");
				while($data=mysqli_fetch_array($detail)){
			?>
			<img style="width: 70%" src="uploads/<?php echo $data['file_name'];?>">
			<form action="edit_image_item.php" method="post" enctype="multipart/form-data">
				<div class="form-group">	
					<input type="file" name="foto" class="form-control">				
					<input style="matgin-top: 15px;" type="checkbox" name="ubah_foto" value="true"> Ceklis Jika Ingin Mengubah Foto<br>					
					<span style="color: red;"><br/>* Pastikan ukuran gambar tidak terlalu besar atau ambil gambar yang ada di tokopedia</span><br/>
					<span style="color: red;">* Jika tidak ingin mengubah gambar biarkan saja gunakan tombol "SIMPAN"</span>
				</div>
				<div class="form-group">
				<?php
					}
					$detail=mysqli_query($mysqli, "select * from acc_hp where id='$id'");
					while($data=mysqli_fetch_array($detail)){
				?>
					<input type="hidden" name="id" value="<?php echo $data['id']; ?>">	
				<?php
					}
				?>
					<center><input type="submit" class="btn btn-info" style='width: 70%;' value="Ganti"></center>
				</div>		
			</form>
		</div>
	</div>
	
	<?php 
}
?>
<?php include 'footer.php'; ?>