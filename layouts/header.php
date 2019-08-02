<!DOCTYPE html>
<html>
<head>
	<?php 
	session_start();
	include 'scripts/cek.php';
	include 'scripts/config.php';
	?>
	<title>DASHBOARD</title>
	<link rel="stylesheet" type="text/css" href="styles/bootstrap/css/bootstrap-v3.css">
    <link rel="stylesheet" type="text/css" href="scripts/js/jquery-ui/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="styles/style.css">    
	<script type="text/javascript" src="scripts/js/jquery.js"></script>
	<script type="text/javascript" src="scripts/js/jquery.js"></script>
	<script type="text/javascript" src="scripts/js/bootstrap.js"></script>
    <script type="text/javascript" src="scripts/js/jquery-ui/jquery-ui.js"></script>	
</head>
<body>
	<div class="navbar navbar-default" style="background-color: #eb5656; border-radius: 0px;border: 0px;">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="#" class="navbar-brand" style="color: white;">DASHBOARD</a>
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse">				
				<ul class="nav navbar-nav navbar-right">
					<li><a id="pesan_sedia" href="#" style="color: white;" data-toggle="modal" data-target="#modalpesan"><span class='fa fa-message'></span>  Pesan</a></li>
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

	<div class="col-md-2">
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
			<li class=<?php if($active=='dashboard'){echo 'active';}else{echo'noactive';}?>><a href="dashboard.php"><span class="fa fa-home"></span>  Dashboard</a></li>			
			<li class=<?php if($active=='tambah_laptop'){echo 'active';}else{echo'noactive';}?>><a href="tambah_laptop.php"><span class="fa fa-briefcase"></span>  Data Barang</a></li>
            <li><a href="barang_laku.php"><span class="fa fa-briefcase"></span>  Tambahkan Smartphone</a></li> 
			<li><a href="barang_laku.php"><span class="fa fa-briefcase"></span>  Tambahkan Laptop</a></li>        												                   												
			<li><a href="ganti_foto.php"><span class="fa fa-picture"></span>  Ganti Foto</a></li>
			<li><a href="tambah_admin.php"><span class="fa fa-user"></span>  Tambahkan Admin</a></li>
			<li><a href="ganti_pass.php"><span class="fa fa-lock"></span> Ganti Password</a></li>		
			<li><a href="logout.php"><span class="fa fa-log-out"></span>  Logout</a></li>			
        </ul>
        
	</div>
	<div class="col-md-10">