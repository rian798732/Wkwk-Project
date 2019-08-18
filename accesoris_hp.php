<?php 
$active= 'acc_hp';
include 'layouts/header.php'; 
include 'scripts/config.php';?>

<h3><span class="fa fa-briefcase"></span>&nbsp;&nbsp;Data Aksesoris Smartphone</h3>
<button style="margin-bottom:20px" data-toggle="modal" data-target="#myModal" class="btn btn-info col-md-2"><span class="fa fa-plus">&nbsp;&nbsp;&nbsp;</span>Tambah Data Barang</button>

<br/>
<br/>

<?php
$per_hal=10;
$jumlah_record=mysqli_query($mysqli,"SELECT count(*) from acc_hp");
// $jum=mysqli_query($mysqli, '$jumlah_record');
$jum = mysqli_fetch_array($jumlah_record, MYSQLI_NUM);

if($jum == 0){
    echo "Tidak ada data yang ditampilkan";
}else{
    $halaman=ceil($jum[0] / $per_hal);
    $page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
    $start = ($page - 1) * $per_hal;
}
?>

<form action="cari_acc_hp_act.php" method="get">
	<div class="input-group col-md-5 col-md-offset-7">
		<span class="input-group-addon" id="basic-addon1"><span class="fa fa-search"></span></span>
		<input type="text" class="form-control" placeholder="Cari barang di sini .." aria-describedby="basic-addon1" name="cari">	
	</div>
</form>
<br/>
<table class="table table-hover">
	<tr>
		<th class="col-md-1">No</th>
		<th class="col-md-2">Nama Barang</th>
		<th class="col-md-1">Warna</th>	
        <th class="col-md-2">Deskripsi</th>		
		<th class="col-md-1">Harga</th>
		<th class="col-md-1">Label</th>		
		<th class="col-md-2">Kategori</th>
		<th class="col-md-2">Opsi</th>
	</tr>
	<?php 
	if(isset($_GET['cari'])){
		$cari=mysqli_real_escape_string($mysqli, $_GET['cari']);
		$brg=mysqli_query($mysqli, "select * from acc_hp where merek like '$cari' or kategori like '$cari'");
	}else{
		$brg=mysqli_query($mysqli, "select * from acc_hp limit $start, $per_hal");
	}
	$no=1;
	while($b=mysqli_fetch_array($brg)){
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<?php echo "<td>". $b['name'];?></td>
            <td><?php echo $b['warna']?></td>
			<td>
				<span>
                    <?php 
                        $str = $b['deskripsi'];
                        if(strlen($str) > 20){
							echo substr($str, 0, 19) . " ...";
						}else{
							echo $str;
						}
                    ?>
				</span>
            </td>
            <td>
				<span>
					Rp.<?php echo number_format($b['harga']);?>
				</span>
			</td>
			<td>
                <?php 
                    echo $b['label']; 
                ?></td>
			<td><?php echo $b['kategori']?></td>			
			<td>
				<a href="detail_acc_hp.php?id=<?php echo $b['id']; ?>" style="font-size: 24px; margin-right: 10px;"><i class="fa fa-book"></i></a>
				<a href="edit.php?id=<?php echo $b['id']; ?>" style="font-size: 24px; margin-right: 10px;"><i class="fa fa-edit"></i></a>
				<a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href='delete_acc_hp.php?id=<?php echo $b['id']; ?>' }" style="font-size: 24px; margin-right: 10px;"><i class="fa fa-trash"></i></a>
			</td>
		</tr>		
		<?php 
	}
	?>
</table>
<ul class="pagination">			
	<?php 
	for($x=1;$x<=$halaman;$x++){
		?>
		<li><a href="?page=<?php echo $x ?>"><?php echo $x ?></a></li>
		<?php
	}
	?>						
</ul>
<!-- modal input -->
<div id="myModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Tambah Acc Smartphone Baru</h4>
			</div>
			<div class="modal-body">
				<form action="acc_hp_act.php" method="post" enctype="multipart/form-data">
					<div class="col-md-3 padding-0 form-group" style="margin-right: 5px;">
						<label>Kategori</label>
						<select class="form-control" id="kategori" name="kategori">
							<option>Belum Dipilih</option>
							<?php
								$kategori = mysqli_query($mysqli, "select * from kategori");
								while($data = mysqli_fetch_array($kategori)){
							?>
							<option><?php echo $data['nama_kategori']; ?></option>
							<?php
								}
							?>
						</select>
					</div>
					<div class="col-md-3 padding-0 form-group" style="margin-right: 5px;">
						<label>Merek</label>
						<select class="form-control" id="kategori" name="merek">
							<option>Belum Dipilih</option>
							<?php
								$merek = mysqli_query($mysqli, "select * from merek");
								while($data = mysqli_fetch_array($merek)){
							?>
							<option><?php echo $data['nama_merek']; ?></option>
							<?php
								}
							?>
						</select>
					</div>
					<div class="col-md-3 padding-0 form-group">
						<label>Warna</label>
						<input name="warna" type="text" class="form-control" placeholder="Warna">
					</div>
                    <div class="col-md-2 padding-0 form-group" style="margin-left: 10px;">
						<label>Harga</label>
						<input name="harga" type="text" class="form-control" placeholder="Harga">
					</div>
                    <div class="col-md-6 padding-0 form-group" style="margin-right: 10px;">
						<label>Label</label>
						<select class="form-control" id="kategori" name="label">
							<option>Belum Dipilih</option>
							<?php
								$label = mysqli_query($mysqli, "select * from label");
								while($data = mysqli_fetch_array($label)){
							?>
							<option><?php echo $data['nama_label']; ?></option>
							<?php
								}
							?>
						</select>
					</div>
					<div class="col-md-5 form-group padding-0">
						<label>Link Tokopedia</label>
                        <input name="link" type="text" class="form-control" placeholder="Masukkan Link">
                    </div>
					<div class="col-md-12 form-group padding-0">
						<label>Gambar</label>
						<input type="file" name="myFile"> <span style="color: red;"><br/>* Pastikan gambar berukuran 224 x 224 atau ambil gambar yang ada di tokopedia</span>
                    </div>
					<div class="col-md-12 form-group padding-0" style="min-height: 50px;">
						<label>Deskripsi</label>
                        <textarea name="desk" type="text" class="form-control" placeholder="Masukkan Spesifikasi"></textarea>
                    </div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					<input type="submit" class="btn btn-primary" name="upload" value="Simpan">
				</div>
			</form>
		</div>
	</div>
</div>

<?php
include 'footer.php';
?>