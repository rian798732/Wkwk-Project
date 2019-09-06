<?php
	$active = "info_toko";

	include 'scripts/config.php';
    include 'layouts/header.php';
?>
<html>
<head>
    <title>Informasi Toko</title>
    <style>
        .input-group{
            width: 100%;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>	
	<div class="container">
		<div class="tambah-admin">
            <div class="col-md-12">
                <h3 style="margin-bottom: 20px;">Informasi Toko</h3>
            </div>
			<form action="tambah_admin_act.php" method="post">
                <center>
                    <div class="col-md-12 kotak">
                        <div class="col-md-5">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-home"></span></span>
                                <input type="text" style="margin-top: 0; height: 36px;" class="form-control" placeholder="Nama Toko" name="nama_toko">
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-book"></span></span>
                                <input type="text" style="margin-top: 0; height: 36px;;" class="form-control" placeholder="Deskripsi Singkat" name="desk_toko">
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-home"></span></span>
                                <input type="text" style="margin-top: 0; height: 36px;" class="form-control" placeholder="Alamat Toko" name="alamat_toko">
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-phone"></span></span>
                                <input type="text" style="margin-top: 0; height: 36px;" class="form-control" placeholder="Masukkan No.telp" name="no_telp">
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fab fa-facebook"></span></span>
                                <input type="text" style="margin-top: 0; height: 36px;" class="form-control" placeholder="Masukkan link facebook" name="link_facebook">
                            </div>
                        </div>
                        <div class="col-md-5">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="fab fa-instagram"></span></span>
                            <input type="text" style="margin-top: 0; height: 36px;" class="form-control" placeholder="Masukkan link instagram" name="link_instagram">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><span class="fab fa-whatsapp"></span></span>
                            <input type="text" style="margin-top: 0; height: 36px;;" class="form-control" placeholder="Masukkan No. Whastapp" name="no_wa">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><img class="logo_tokopedia" src="images/tokopedia.png" style="width: 15px; height: 15px;"></span>
                            <input type="text" style="margin-top: 0; height: 36px;;" class="form-control" placeholder="Link Toko Online (Tokopedia)" name="link_tokped">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><img class="logo_shopee" src="images/shopee.png" style="width: 15px; height: 15px;"></span>
                            <input type="text" style="margin-top: 0; height: 36px;" class="form-control" placeholder="Link Toko Online (Shopee)" name="link_shopee">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><img class="logo_lazada" src="images/lazada.png" style="width: 15px; height: 15px;"></span>
                            <input type="text" style="margin-top: 0; height: 36px;;" class="form-control" placeholder="Link Toko Online (Lazada)" name="link_lazada">
                        </div>
                        </div>
                    </div>
                </center>
                <div class="col-md-12" style="margin-top: 30px;">
					<div class="input-group">			
						<center><input type="submit" class="btn btn-primary" value="Update Indormasi"></center>
					</div>
                </div>
			</form>
		</div>
	</div>
</body>
</html>