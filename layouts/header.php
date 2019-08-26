<?php 
	session_start();
	include 'scripts/cek.php';
	include 'scripts/config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>DASHBOARD</title>
	<link rel="stylesheet" type="text/css" href="styles/bootstrap/css/bootstrap-v3.css">
	<link rel="stylesheet" type="text/css" href="styles/fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="scripts/js/jquery-ui/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="styles/style.css">    
	<script type="text/javascript" src="scripts/js/jquery.js"></script>
	<script type="text/javascript" src="scripts/js/jquery.js"></script>
	<script type="text/javascript" src="scripts/js/bootstrap.js"></script>
	<script type="text/javascript" src="scripts/js/jquery-ui/jquery-ui.js"></script>	
	
	<style>
		@media (min-width: 768px) {
			.modal-dialog {
				width: 800px;
				margin: 30px auto;
			}	
		}
		.nav li a:hover, .nav li a:focus {
			text-decoration: none;
			background-color: #1a6496;
			transition: 0.3s;
		}
		.nav-pills > li > a {
			border-radius: 0px;
			height: 45px;
			line-height: 2;
			padding: 10px 30px
		}
		.btn-info {
			color: #fff;
			background-color: #347cad;
			border-color: #347cad;
			border-radius: 0px;
		}
		.btn-primary{
			color: #fff;
			background-color: #347cad;
			border-color: #347cad;
			border-radius: 0px;
		}
		.modal-content {
			position: relative;
			background-color: #fff;
			background-clip: padding-box;
			border: 1px solid rgba(0, 0, 0, .2);
			border-radius: 0;
			outline: 0;
			padding: 5px 20px;
			box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
		}
		.btn-info:active{
			color: #fff;
			background-color: #3396da;
			border-color: #3396da;
		}
		.btn-info:hover{
			color: #fff;
			background-color: #3396da;
			border-color: #3396da;
			transition: 0.3s;
		}
		.btn-info:active{
			color: #fff;
			background-color: #3396da;
			border-color: #3396da;
		}
		.form-control {
			display: block;
			width: 100%;
			height: 34px;
			margin-top: 4px;
			padding: 6px 12px;
			font-size: 14px;
			line-height: 1.42857143;
			color: #555;
			border-radius: 0px;
			background-color: #fff;
			background-image: none;
			border: 1px solid #c7c7c7;
			-webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
			-o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
			transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
		}
	</style>
</head>
<body>
	<div class="navbar navbar-default" style="background-color: #03568e;border-radius: 0px;border: 0px;margin-bottom: 0;z-index: 4;width: 100%;position: fixed;">
		<div class="container-fluid">
			<div class="navbar-header">
				<span class="navbar-brand" style="color: white;">DASHBOARD <span style="font-size: 12px">v1</span></span>
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse">				
				<ul class="nav navbar-nav navbar-right">
					<li><a id="pesan_sedia" href="#" style="color: white;" data-toggle="modal" data-target="#modalpesan"><span class='fa fa-envelope'></span>  Pesan</a></li>
					<li><a class="dropdown-toggle" data-toggle="dropdown" role="button" href="#" style="color: white;">Hy , <?php echo $_SESSION['uname']  ?>&nbsp&nbsp<span class="fa fa-user"></span></a></li>
				</ul>
			</div>
		</div>
	</div>

	<!-- modal input -->
	<div id="modalpesan" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Pesan Notification</h4>
				</div>
				<div class="modal-body">
					<?php 
						$periksa=mysqli_query($mysqli, "select * from barang where jumlah <=3");
						while($q=mysqli_fetch_array($periksa)){	
							if($q['jumlah']<=3){			
								echo "<div style='padding:5px' class='alert alert-warning'><span class='fa fa-info-sign'></span> Stok  <a style='color:red'>". $q['nama']."</a> yang tersisa sudah kurang dari 3 . silahkan pesan lagi !!</div>";	
							}
						}
					?>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>						
				</div>
				
			</div>
		</div>
	</div>

	<div class="col-md-2" style="background-color: #0a3450; max-height: 1180px; height: 1180px;;padding: 25px 0;margin-top: 40px;position: fixed;"">
		<!-- <div class="row">
			<?php 
			$use=$_SESSION['uname'];
			echo $use;
			$fo=mysqli_query($mysqli, "select foto from admin where uname='$use'");
			while($f=mysqli_fetch_array($fo)){
				?>				

				<div class="col-xs-6 col-md-12">
					<a class="thumbnail">
						<img class="img-responsive" src="foto/<?php echo $f['foto']; ?>">
					</a>
				</div>
				<?php 
			}
			?>		
		</div> -->

		<div class="row"></div>
		<ul class="nav nav-pills nav-stacked">
			<li class=<?php if($active=='dashboard'){echo 'active';}else{echo'noactive';}?>><a style="color: white;" href="dashboard.php"><span class="fa fa-home"></span>&nbsp;&nbsp;Dashboard</a></li>
			<li class=<?php if($active=='acc_hp'){echo 'active';}else{echo'noactive';}?>><a style="color: white;" href="accesoris_hp.php"><span class="fa fa-briefcase"></span>&nbsp;&nbsp;Data Barang</a></li>			
			<li class=<?php if($active=='kartu_perdana'){echo 'active';}else{echo'noactive';}?>><a style="color: white;" href="kartu_perdana.php"><span class="fa fa-briefcase"></span>&nbsp;&nbsp;Kartu Perdana</a></li>      												                   												
			<li><a style="color: white;" href="promo.php"><span class="fa fa-percent"></span>&nbsp;&nbsp;Promo</a></li>
			<li><a style="color: white;" href="index.php"><span class="fa fa-tv"></span>&nbsp;&nbsp;Lihat Website</a></li>
			<li class=<?php if($active=='tambah_admin'){echo 'active';}else{echo'noactive';}?>><a style="color: white;" href="tambah_admin.php"><span class="fa fa-user-plus"></span>&nbsp;&nbsp;Tambahkan Admin</a></li>
			<li class=<?php if($active=='ganti_pass'){echo 'active';}else{echo'noactive';}?>><a style="color: white;" href="ganti_pass.php"><span class="fa fa-lock"></span>&nbsp;&nbsp;Ganti Password</a></li>		
			<li><a style="color: white;" href="logout.php"><span class="fa fa-reply"></span>&nbsp;&nbsp;Logout</a></li>			
        </ul>
        
	</div>
	<div class="col-md-10" style="min-height: 700px;width: 81%;margin: 70px 0 65px 18%;padding: 10px 25px;"">