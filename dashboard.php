<?php 
$active= 'dashboard';
include 'layouts/header.php'; 
include 'scripts/config.php';
?>
<div class="alert alert-warning">
- MEMBUAT DESAIN PADA TAMPILAN USER <br/>
- MEMBUAT PERUBAHAN TATA LETAK PADA HALAMAN USER <br/>
- PENGOPTIMALAN PADA HALAMAN USER
</div>
<div class="alert alert-danger">TO DO LIST : <br/> 
- MEMPERNAIKI SIMBOL YANG TIDAK MUNCUL PADA TAMPILAN TERTENTU <br/>
- MEMBUAT SCRIPT EDIT, DAN DETAIL PADA DASHBOARD <br/> 
- MEMBUAT BEBERAPA SCRIPT YANG ADA DI MENU <br/> 
- MENCARI CARA AGAR GAMBAR BISA DI TAMPILKAN PADA DATABASE <br/> 
- CEK PAGINASI APAKAH SUDAH BERJALAN DENGAN SEMESTINYA <br/>
- MENAMBAHKAN KOLOM PADA TABEL DATA BARANG <br/> 
- MEMBUAT TABEL BARU DI PHP MY ADMIN UNTUK LAPTOP DAN BARANG LAINNYA <br/> 
- MERUBAH INPUTAN LABEL MENJADI DROPDOWN</div>

<h3><span class="fa fa-briefcase"></span>  Data smartphone</h3>
<button style="margin-bottom:20px" data-toggle="modal" data-target="#myModal" class="btn btn-info col-md-2"><span class="fa fa-add"></span>Tambah smartphone</button>
<br/>
<br/>

<?php
$per_hal=10;
$jumlah_record=mysqli_query($mysqli,"SELECT count(*) from smartphone");
// $jum=mysqli_query($mysqli, '$jumlah_record');
$jum = mysqli_fetch_array($jumlah_record, MYSQLI_NUM);
$halaman=ceil($jum[0] / $per_hal);
$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $per_hal;
?>

<form action="cari_act.php" method="get">
	<div class="input-group col-md-5 col-md-offset-7">
		<span class="input-group-addon" id="basic-addon1"><span class="fa fa-search"></span></span>
		<input type="text" class="form-control" placeholder="Cari smartphone di sini .." aria-describedby="basic-addon1" name="cari">	
	</div>
</form>
<br/>
<table class="table table-hover">
	<tr>
		<th class="col-md-1">No</th>
		<th class="col-md-2">Nama smartphone</th>
		<th class="col-md-1">RAM / ROM</th>		
		<th class="col-md-3">Spesifikasi</th>
		<th class="col-md-1">Harga Jual</th>
		<th class="col-md-1">Label</th>		
		<th class="col-md-3">Opsi</th>
	</tr>
	<?php 
	if(isset($_GET['cari'])){
		$cari=mysqli_real_escape_string($mysqli, $_GET['cari']);
		$brg=mysqli_query($mysqli, "select * from smartphone where merk like '$cari' or harga like '$cari'");
	}else{
		$brg=mysqli_query($mysqli, "select * from smartphone limit $start, $per_hal");
	}
	$no=1;
	while($b=mysqli_fetch_array($brg)){
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $b['merk'] ?></td>
			<td>
				<span>
					<?php echo $b['ram'];?>
				</span>
				<span>/</span>
				<span>
					<?php echo $b['internal'];?>
				</span>
			</td>
			<td>
                <?php 
                    $str = $b['spek'];
                    
                    if(strlen($str) > 140) 
                        echo substr($str, 0, 138) . " ...";
                ?></td>
			<td>Rp.<?php echo number_format($b['harga']) ?>,-</td>						
			<td><?php echo $b['label']?></td>			
			<td>
				<a href="det_smartphone.php?id=<?php echo $b['id']; ?>" class="btn btn-info">Detail</a>
				<a href="edit_smartphone.php?id=<?php echo $b['id']; ?>" class="btn btn-warning">Edit</a>
				<a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href='delete.php?id=<?php echo $b['id']; ?>' }" class="btn btn-danger">Hapus</a>
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
				<h4 class="modal-title">Tambah smartphone Baru</h4>
			</div>
			<div class="modal-body">
				<form action="dashboard_act.php" method="post">
					<div class="col-md-6 padding-0 form-group">
						<label>Merek smartphone</label>
						<input name="merek" type="text" class="form-control" placeholder="Contoh : SAMSUNG J2 PRIME">
					</div>
					<div class="col-md-5 padding-0 form-group" style="margin-left: 10px;">
						<label>Harga</label>
						<input name="harga" type="text" class="form-control" placeholder="Harga">
					</div>
					<div class="col-md-5 padding-0 form-group">
						<label>Label</label>
						<input name="label" type="text" class="form-control" placeholder="Label (Baru, Preorder, Bekas) ..">
					</div>
                    <div class="col-md-3 form-group padding-0" style="margin-left: 10px;">
                        <label>RAM</label>
						<input name="ram" type="number" class="form-control" placeholder="0">
                    </div>
                    <div class="col-md-3 form-group padding-0" style="margin-left: 10px;">
                        <label>Internal</label>
						<input name="internal" type="number" class="form-control" placeholder="0">
                    </div>
                    <div class="col-md-12 form-group padding-0">
						<label>Spesifikasi  lainnya</label>
                        <textarea name="spek" type="text" class="form-control" placeholder="Masukkan Spesifikasi"></textarea>
                    </div>
                    <div class="col-md-12 form-group padding-0">
						<label>Gambar</label>
                        <input name="gambar" type="file" class="form-control">
                    </div>
                    <div class="col-md-12 form-group padding-0">
						<label>Link Tokopedia</label>
                        <input name="link" type="text" class="form-control" placeholder="Masukkan Link">
                    </div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					<input type="submit" class="btn btn-primary" value="Simpan">
				</div>
			</form>
		</div>
	</div>
</div>



<?php 
include 'footer.php';

?>