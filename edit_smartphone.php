<?php 
$active = "dashboard";
include 'layouts/header.php';
?>
<h3><span class="glyphicon glyphicon-briefcase"></span>  Edit Barang</h3>
<a class="btn" href="dashboard.php"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>
<?php
$id = isset($_GET['id']) ? $_GET['id'] : '';
$det=mysqli_query($mysqli, "select * from smartphone where id='$id'")or die(mysqli_error());
while($d=mysqli_fetch_array($det)){
?>					
	<form action="edit_act.php" method="post">
		<table class="table" style="width: 50%;">
			<tr>
				<td>
					<label>Merek Smartphone</label>
					<input type="text" class="form-control" name="merek" value="<?php echo $d['merk'] ?>">
				</td>
				<td><label>Merek Smartphone</label>
					<input type="text" class="form-control" name="merek" value="<?php echo $d['merk'] ?>">
				</td>
				<td><input type="hidden" name="id" value="<?php echo $d['id'] ?>"></td>
			</tr>
			<tr>
				<td><label>Harga</label></td>
				<td colspan="3"><input type="text" class="form-control" name="harga" value="<?php echo $d['harga'] ?>"></td>
			</tr>
			<tr>
				
			</tr>
			<tr>
                <td>
                    <label>Label</label>
				    <input type="text" class="form-control" name="label" value="<?php echo $d['label'] ?>">
                </td>
                <td>
                    <label>RAM</label>
					<input name="ram" type="number" class="form-control" value="<?php echo $d['ram']?>">
                </td>
                <td>
                    <label>Internal</label>
                    <input name="internal" type="number" class="form-control" value="<?php echo $d['internal']?>">
                </td>
			</tr>
			<tr>
				<td><label>Spesifikasi  lainnya</label></td>
				<td colspan="3"><textarea name="spek" style="height: 150px;" type="text" class="form-control" placeholder="Masukkan Spesifikasi" value="<?php echo $d['spek']?>"></textarea></td>
			</tr>
			<tr>
				<td><label>Gambar</label></td>
				<td colspan="3"><input type="text" class="form-control" name="gambar" value="<?php echo $d['gambar'] ?>"></td>
			</tr>
            <tr>
                <td colspan="3">
                    <label>Link Tokopedia</label>
                    <input name="link" type="text" class="form-control" value="<?php echo $d['link_tokped']?>">
                </td>
            </tr>
			<tr>
				<td></td>
				<td><input type="submit" class="btn btn-info" value="Simpan"></td>
			</tr>
		</table>
	</form>
	<?php 
}
?>
<?php include 'footer.php'; ?>