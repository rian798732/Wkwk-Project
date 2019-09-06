<?php 
$active = "ganti_pass";
include 'layouts/header.php';
?>

<h3><span class="fa fa-lock"></span>  Password</h3>
<br/><br/>
<?php 
if(isset($_GET['pesan'])){
	$pesan=mysqli_real_escape_string($mysqli, $_GET['pesan']);
	if($pesan=="gagal"){
		echo "<div class='alert alert-danger'>Password gagal di ganti !!     Periksa Kembali Password yang anda masukkan !!</div>";
	}else if($pesan=="tidaksama"){
		echo "<div class='alert alert-warning'>Password baru yang anda masukkan tidak sama  !!     Silahkan ulangi lagi!! </div>";
	}else if($pesan=="oke"){
		echo "<div class='alert alert-success'>BERHASIL!! Password Sukses Di ganti</div>";
	}
}
?>

<br/>
<div class="col-md-5 col-md-offset-3">
	<form action="ganti_pass_act.php" method="post">
		<div class="form-group">
			<input name="user" type="hidden" value="<?php echo $_SESSION['uname']; ?>">
		</div>
		<div class="form-group">
			<label>Password Lama</label>
			<input name="lama" type="password" class="form-control" placeholder="Password Lama ..">
		</div>
		<div class="form-group">
			<label>Password Baru</label>
			<input name="baru" type="password" class="form-control" placeholder="Password Baru ..">
		</div>
		<div class="form-group">
			<label>Ulangi Password</label>
			<input name="ulang" type="password" class="form-control" placeholder="Ulangi Password ..">
		</div>	
		<div class="form-group">
			<label></label>
			<input type="submit" class="btn btn-info" value="Simpan">
			<input type="reset" class="btn btn-danger" value="reset">
		</div>																	
	</form>
</div>
</div>

<div class="col-md-12 padding-0">
		<div class="footer2" style="height: 70px; text-align: center; padding-top: 10px; line-height: 1.5; background-color: #5877df; color: white;">
			<span>© WkAcc - 2019 All Rights Reserved <br/> Design by Rian @zainulfebrian70@gmail.com</span>
		</div>
</div>

</head>
</html>