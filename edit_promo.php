<?php 
$active = "promo_dashboard";
include 'layouts/header.php';
?>
<h3><span class="fa fa-edit"></span>  Edit Promo</h3>
<a class="btn" href="dashboard.php"><span class="fa fa-arrow-left"></span>  Kembali</a>
<?php
$id = isset($_GET['id_promo']) ? $_GET['id_promo'] : '';
$name = isset($_GET['name']) ? $_GET['name'] : '';
$detail=mysqli_query($mysqli, "select * from promo where id_promo='$id'");
while($data=mysqli_fetch_array($detail)){
?>					
	<div class="row">
		<div class="col-md-8"> 
			<form action="edit_promo_act.php" method="post" enctype="multipart/form-data">
			<table class="table" style="width: 100%;">
				<tr>
					<td> 
						<label>ID PROMO</label>
						<input type="text" class="form-control" readonly="" name="id_promo" value="<?php echo $data['id_promo']; ?>">
					</td>
					<td><label>Judul Promo</label>
						<input type="text" class="form-control" name="judul_promo"value="<?php echo $data['judul_promo']; ?>">
					</td>
				</tr>
				<tr>
					<td>
						<label>Berlaku Mulai</label>
						<input class="form-control" type="date" id="merek" name="berlaku_mulai" value="<?php echo $data['berlaku_mulai'];?>">
					</td>
					<td>
						<label>Sampai dengan</label>
						<input name="sampai_dengan" type="date" class="form-control" value="<?php echo $data['sampai_dengan'];?>">
					</td>
				</tr>
				
					<td colspan="2">
						<label>Keterangan</label>
						<textarea name="keterangan" style="height: 500px; white-space: pre-line;" type="text" class="form-control" placeholder="Masukkan Deskripsi"><?php echo $data['keterangan']?></textarea>
					</td>
					<?php
						}
					?>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="upload" class="btn btn-info" value="Simpan"></td>
				</tr>
			</table>
		</form>
		</div>
		<div class="col-md-4">
			<img style="width: 80%" src="images/logo.jpg"><br/>
            <span style="color: red;">* Ini adalah gambar default promo untuk sementara</span>
		</div>		
	</form>		
</div>	
</div>

<div class="col-md-12 padding-0">
		<div class="footer2" style="height: 70px; text-align: center; padding-top: 15px; line-height: 1.5; background-color: #03568e; color: white;">
			<span>© WkAcc - 2019 All Rights Reserved <br/> Design by Rian @zainulfebrian70@gmail.com</span>
		</div>
</div>

</head>
</html>