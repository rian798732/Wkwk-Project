<?php 
$active = "dashboard";
include 'layouts/header.php';
?>
<h3><span class="fa fa-edit"></span>  Edit Barang</h3>
<a class="btn" href="dashboard.php"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>
<?php
$id = isset($_GET['id']) ? $_GET['id'] : '';
$detail=mysqli_query($mysqli, "select * from smartphone where id='$id'")or die(mysqli_error());
while($data=mysqli_fetch_array($detail)){
?>					
	<div class="row">
		<div class="col-md-8"> 
			<form action="edit_act.php" method="post" enctype="multipart/form-data">
			<table class="table" style="width: 90%;">
				<tr>
					<td> 
						<label>Merek Smartphone</label>
						<input type="text" class="form-control" name="brand" value="<?php echo $data['brand'] ?>">
					</td>
					<td><label>Tipe Smartphone</label>
						<input type="text" class="form-control" name="merek" value="<?php echo $data['merk'] ?>">
					</td>
					<td><input type="hidden" name="id" value="<?php echo $data['id'] ?>"></td>
				</tr>
				<tr>
					<td><label>Harga</label></td>
					<td colspan="3"><input type="text" class="form-control" name="harga" value="<?php echo $data['harga'] ?>"></td>
				</tr>
				<tr>
					
				</tr>
				<tr>
					<td>
						<label>Label</label>
						<input type="text" class="form-control" name="label" value="<?php echo $data['label'] ?>">
					</td>
					<td>
						<label>RAM</label>
						<input name="ram" type="number" class="form-control" value="<?php echo $data['ram']?>">
					</td>
					<td>
						<label>Internal</label>
						<input name="internal" type="number" class="form-control" value="<?php echo $data['internal']?>">
					</td>
				</tr>
				<tr>
					<td><label>Spesifikasi  lainnya</label></td>
					<td colspan="3"><textarea name="spek" style="height: 150px;" type="text" class="form-control" placeholder="Masukkan Spesifikasi" value="<?php echo $data['spek']?>"></textarea></td>
				</tr>
				<tr>
					<td colspan="3">
						<label>Link Tokopedia</label>
						<input name="link" type="text" class="form-control" value="<?php echo $data['link']?>">
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
			<img style="width: 100%" src="<?php echo "uploads/".$data['file_name']; ?>">
			<form action="edit_image_item.php" method="post" enctype="multipart/form-data">
				<div class="form-group">	
					<input type="file" name="foto" class="form-control"><span style="color: red;"><br/>* Pastikan gambar berukuran 224 x 224 atau ambil gambar yang ada di tokopedia</span>					
				</div>
				<div class="form-group">
					<input type="hidden" name="id" value="<?php echo $data['id'] ?>">	
					<center><input type="submit" class="btn btn-info" style='width: 70%;' value="Ganti"></center>
				</div>		
			</form>
		</div>
	</div>
	
	<?php 
}
?>
<?php include 'footer.php'; ?>