<?php 
$active= 'acc_hp';
include 'layouts/header.php'; 
include 'scripts/config.php';?>

<?php
$per_hal=20;
$jumlah_record=mysqli_query($mysqli,"SELECT count(*) from acc_hp");
$jum=mysqli_query($mysqli, '$jumlah_record');
$jum = mysqli_fetch_array($jumlah_record, MYSQLI_NUM);

if($jum == 0){
    echo "Tidak ada data yang ditampilkan";
}else{
    $halaman=ceil($jum[0] / $per_hal);
    $page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
    $start = ($page - 1) * $per_hal;
}
?>

<div class="col-md-12 padding-0">
	<button style="margin-bottom:20px" data-toggle="modal" data-target="#myModal" class="btn btn-info col-md-2"><span class="fa fa-plus">&nbsp;&nbsp;&nbsp;</span>Tambah Barang</button>
	<button style="margin-bottom:20px;background-color: #f1a117;border-color: #f1a117; margin-left: 10px;" data-toggle="modal" data-target="#modalLabel" class="btn btn-info col-md-2"><span class="fa fa-plus">&nbsp;&nbsp;&nbsp;</span>Tambah Label</button>
	<form action="cari_acc_hp_act.php" method="get">
	<div class="input-group col-md-5 col-md-offset-7">
		<button class="btn btn-primary" id="basic-addon1"><span class="fa fa-search"></span></button>
		<input type="text" style="width:70%; margin: 0;" class="form-control" placeholder="Cari Barang .." aria-describedby="basic-addon1" name="cari">	
	</div>
</form>
</div>
<table class="table table-striped" style="margin-top: 15px;">
	<tr>
		<th class="col-md-1">No</th>
		<th class="col-md-2">Nama Barang</th>
		<th class="col-md-1">Merek</th>	
        <th class="col-md-2">Deskripsi</th>		
		<th class="col-md-1">Harga</th>
		<th class="col-md-1">Label</th>		
		<th class="col-md-2">Kategori</th>
		<th class="col-md-2">Opsi</th>
	</tr>
	<?php 
	if(isset($_GET['cari'])){
		$cari=mysqli_real_escape_string($mysqli, $_GET['cari']);
		$brg=mysqli_query($mysqli, "select * from acc_hp where merek like '%$cari%' or kategori like '%$cari%' or name like '%$cari%'");

		echo '<span>Hasil Pencarian : "'. $cari . '"</span>';
	}else{
		$brg=mysqli_query($mysqli, "select * from acc_hp order by id desc limit $start, $per_hal");
	}
	$show = $page * $per_hal - $per_hal;
	$no = $show + 1;

	while($b=mysqli_fetch_array($brg)){
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<?php echo "<td>". $b['name'];?></td>
            <td><?php echo $b['merek']?></td>
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
<div id="modalLabel" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Tambah Label Baru</h4>
			</div>
			<div class="modal-body">
				<div class="row">
				<form action="tambah_label_act.php" method="post" enctype="multipart/form-data">
					<div class="col-md-4 padding-0 form-group" style="margin-right: 5px;">
						<label>ID Label</label>
						<?php
							$query = "SELECT max(id_label) as maxId FROM label";
							$hasil=mysqli_query($mysqli, $query);
							$data = mysqli_fetch_array($hasil);
							$idLabel = $data['maxId'];

							$noUrut = (int) substr($idLabel, 3, 3);

							$noUrut++;

							$char = "LBL";
							$idLabel = $char . sprintf("%03s", $noUrut);
						?>
						<input name="id_label" type="text" class="form-control" readonly="" value="<?php echo $idLabel;?>">
					</div>
					<div class="col-md-3 padding-0 form-group" style="margin-right: 5px;">
						<label>Label</label>
						<input class="form-control" type="text" id="kategori" name="nama_label" placeholder="Masukkan Merek">
					</div>
                    <div class="col-md-4 padding-0 form-group" style="margin-right: 5px;">
						<label>Warna Background</label>
						<select name="warna_bg" class="form-control">
							<option>Kuning</option>
							<option>Merah</option>
							<option>Biru</option>
							<option>Hijau</option>
						</select>
					</div>
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

<div id="myModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Tambah Accessoris Baru</h4>
			</div>
			<div class="modal-body">
				<div class="row">
				<form action="acc_hp_act.php" method="post" enctype="multipart/form-data">
					<div class="col-md-4 padding-0 form-group" style="margin-right: 5px;">
						<label>Nama Barang</label>
						<input name="nama_barang" type="text" class="form-control" placeholder="Nama Barang">
					</div>
					<div class="col-md-4 padding-0 form-group" style="margin-right: 5px;">
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
					<div class="col-md-3 padding-0 form-group" style="margin-right: 10px;">
						<label>Merek</label>
						<input class="form-control" type="text" id="kategori" name="merek" placeholder="Masukkan Merek">
					</div>
                    <div class="col-md-3 padding-0 form-group" style="margin-right: 10px;">
						<label>Harga</label>
						<input name="harga" type="text" class="form-control" placeholder="Harga">
					</div>
                    <div class="col-md-3 padding-0 form-group" style="margin-right: 10px;">
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
					<div class="col-md-4 padding-0 form-group" style="margin-right: 10px;">
						<label>Warna</label>
						<input name="warna" type="text" class="form-control" placeholder="Masukkan Warna Barang">
					</div>
					<div class="col-md-3 form-group padding-0" style="margin-right: 10px;">
						<label>Link Tokopedia</label>
                        <input name="link" type="text" class="form-control" placeholder="Masukkan Tokopedia">
                    </div>
					<div class="col-md-3 form-group padding-0" style="margin-right: 10px;">
						<label>Link Shopee</label>
                        <input name="link_shopee" type="text" class="form-control" placeholder="Masukkan Link Shopee">
                    </div>
					<div class="col-md-4 form-group padding-0">
						<label>Link Lazada</label>
                        <input name="link_lazada" type="text" class="form-control" placeholder="Masukkan Link Lazada">
                    </div>
					<div class="col-md-6 form-group padding-0">
						<label>Gambar</label>
						<input type="file" name="foto"> <span style="color: red;"><br/>* Pastikan ukuran gambar < 2MB atau ambil gambar yang ada di tokopedia</span>
                    </div>
					<div class="col-md-12 form-group padding-0" style="min-height: 50px;">
						<label>Deskripsi</label>
                        <textarea name="desk" type="text" class="form-control" placeholder="Masukkan Spesifikasi"></textarea>
                    </div>
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
</div>

<div class="col-md-12 padding-0">
		<div class="footer2" style="height: 70px; text-align: center; padding-top: 10px; line-height: 1.5; background-color: #03568e; color: white;">
			<span>© WkAcc - 2019 All Rights Reserved <br/> Design by Rian @zainulfebrian70@gmail.com</span>
		</div>
</div>

</head>
</html>