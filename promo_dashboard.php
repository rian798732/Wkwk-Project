<?php 
$active= 'promo_dashboard';
include 'layouts/header.php'; 
include 'scripts/config.php';?>

<?php
$per_hal=20;
$jumlah_record=mysqli_query($mysqli,"SELECT count(*) from promo");
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
	<button style="margin-bottom:20px" data-toggle="modal" data-target="#myModal" class="btn btn-info col-md-2"><span class="fa fa-plus">&nbsp;&nbsp;&nbsp;</span>Tambah Promo Baru</button>
	<!-- <button style="margin-bottom:20px;background-color: #f1a117;border-color: #f1a117; margin-left: 10px;" data-toggle="modal" data-target="#modalLabel" class="btn btn-info col-md-2"><span class="fa fa-plus">&nbsp;&nbsp;&nbsp;</span>Tambah Label</button> -->
	<form action="cari_promo_act.php" method="get">
	<div class="input-group col-md-5 col-md-offset-7">
		<button class="btn btn-primary" id="basic-addon1"><span class="fa fa-search"></span></button>
		<input type="text" style="width:70%; margin: 0;" class="form-control" placeholder="Cari Barang .." aria-describedby="basic-addon1" name="cari">	
	</div>
</form>
</div>
<table class="table table-striped" style="margin-top: 15px;">
	<tr>
		<th class="col-md-1">ID PROMO</th>
		<th class="col-md-2">Judul Promo</th>
		<th class="col-md-3">Keterangan</th>	
        <th class="col-md-2">Berlaku Mulai</th>		
		<th class="col-md-2">Sampai dengan</th>
		<th class="col-md-2">Opsi</th>
	</tr>
	<?php 
	if(isset($_GET['cari'])){
		$cari=mysqli_real_escape_string($mysqli, $_GET['cari']);
		$brg=mysqli_query($mysqli, "select * from promo where judul_promo like '%$cari%' or keterangan like '%$cari%'");
		echo '<span>Hasil Pencarian : "'. $cari . '"</span>';
	}else{
		$brg=mysqli_query($mysqli, "select * from promo order by id_promo desc limit $start, $per_hal");
	}
	$show = $page * $per_hal - $per_hal;
	$no = $show + 1;

	while($b=mysqli_fetch_array($brg)){
		?>
		<tr>
            <td><?php echo $b['id_promo']?></td>
            <td><?php echo $b['judul_promo']?></td>
			<td><?php echo $b['keterangan']?></td>
            <td><?php echo $b['berlaku_mulai']?></td>
            <td><?php echo $b['sampai_dengan']?></td>
			<td>
				<a href="detail_promo.php?id_promo=<?php echo $b['id_promo']; ?>" style="font-size: 24px; margin-right: 10px;"><i class="fa fa-book"></i></a>
				<a href="edit_promo.php?id_promo=<?php echo $b['id_promo']; ?>" style="font-size: 24px; margin-right: 10px;"><i class="fa fa-edit"></i></a>
				<a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href='delete_promo.php?id_promo=<?php echo $b['id_promo']; ?>' }" style="font-size: 24px; margin-right: 10px;"><i class="fa fa-trash"></i></a>
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
				<h4 class="modal-title">Tambah Promo Baru</h4>
			</div>
			<div class="modal-body">
				<div class="row">
				<form action="tambah_promo_act.php" method="post">
					<div class="col-md-5 padding-0 form-group" style="margin-right: 5px;">
						<label>ID Promo</label>
						<?php
							$query = "SELECT max(id_promo) as maxId FROM promo";
							$hasil=mysqli_query($mysqli, $query);
							$data = mysqli_fetch_array($hasil);
							$idLabel = $data['maxId'];

							$noUrut = (int) substr($idLabel, 3, 3);

							$noUrut++;

							$char = "PRM";
							$idPromo = $char . sprintf("%03s", $noUrut);
						?>
						<input name="id_promo" type="text" class="form-control" readonly="" value="<?php echo $idPromo;?>">
					</div>
                    <div class="col-md-6 padding-0 form-group" style="margin-right: 5px;">
						<label>Judul Promo</label>
						<input text="text" name="judul_promo" class="form-control">
					</div>
                    <div class="col-md-6 padding-0 form-group" style="margin-right: 5px;">
						<label>Berlaku Mulai</label>
						<input class="form-control" type="date" name="berlaku_mulai">
					</div>
                    <div class="col-md-5 padding-0 form-group" style="margin-right: 5px;">
						<label>Sampai Dengan</label>
						<input class="form-control" type="date" name="sampai_dengan">
					</div>
                    <!-- <div class="col-md-4 form-group padding-0">
						<label>Gambar</label>
						<input type="file" name="foto"> <span style="color: red;"><br/>* Masukkan gambar</span>
                    </div> -->
                    <div class="col-md-12 form-group padding-0" style="min-height: 50px;">
						<label>Berikan Keterangan</label>
                        <textarea name="keterangan" type="text" class="form-control" placeholder="Masukkan Detail Promo"></textarea>
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