<?php 
$kategori = 'smartphone';
// Create database connection using config file include_once("config.php"); 
include_once("scripts/config.php"); 
// hasil
$hasil = mysqli_query($mysqli, "select * from acc_hp");
?>

<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SELAMAT DATANG</title>
    <link rel="stylesheet" type="text/css" href="styles/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styles/fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <script type="text/javascript" src="scripts/js/jquery.js"></script>
	<script type="text/javascript" src="scripts/js/jquery.js"></script>
	<script type="text/javascript" src="scripts/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="scripts/js/jquery-ui/jquery-ui.js"></script>
</head>

<body>
    <div class="row" style="width: 100%; margin: 0;">
        <div class="col-lg-12" style="padding: 0;">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color: #5877df!important">
                <img class="navbar-image" src="images/logo.png" width="60px">
                <a class="navbar-brand color-white" style="margin-right: 20%;" href="#">WKACC Website</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link color-white" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link color-white" href="#">Promo</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle color-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Kategori
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Accesoris Laptop</a>
                            <a class="dropdown-item" href="#">Accesoris Smartphone</a>
                            <a class="dropdown-item" href="#">Accesoris Kamera</a>
                            <a class="dropdown-item" href="#">Paket Data</a>
                            <!-- <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                            </div> -->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link color-white" href="#">About us</a>
                        </li>
                    </ul>
                    <form class="form-inline" style="margin-bottom: 0;">
                        <input class="form-control" style="width: 80%; padding: 20px 26px; border-radius: 25px 0px 0px 25px;" placeholder="Cari barang">
                        <button class="btn btn-primary" style="color: #fff;height: 42px;border-radius: 0px 0px 0px 0px;background-color: #96aaec;border-color: #8a9fe800;" type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </nav>
        </div>
    </div>    
        
        <?php include("layouts/rekomendasi.php")?>

        <div class="col-sm-9">
            <div class="right-content">
                <img class="promo-banner" src="" alt="Banner Promo">
                
                <div class="row items-group">
                    <?php
                        while($item_list = mysqli_fetch_array($hasil)) { 
                            echo "<div class='col-sm-2 padding-5'>";
                            echo "<div class='card-item'>";
                            if($item_list['label'] == "Baru"){
                                echo "<div class='label' style='background-color: #349cdd;'><span class='label-text'>". strtoupper($item_list['label']). "</span></div>";
                            }else if($item_list['label'] == "Preorder"){
                                echo "<div class='label' style='background-color: #5acf60;'><span class='label-text'>". strtoupper($item_list['label']). "</span></div>";
                            }
                            else if($item_list['label'] == "Habis"){
                                echo "<div class='label' style='background-color: #e94545;'><span class='label-text'>". strtoupper($item_list['label']). "</span></div>";
                            }
                            else if($item_list['label'] == "Bekas"){
                                echo "<div class='label' style='background-color: #244b68;'><span class='label-text'>". strtoupper($item_list['label']). "</span></div>";
                            }
                            ?>
                        <img class="image-item" src="<?php echo "uploads/".$item_list['file_name']; ?>">
                        <?php
                            echo "<div class='information'>";
                            $total_huruf = strlen($item_list['kategori']) + strlen($item_list['merek']);

                            if($total_huruf < 18){
                                echo "<span class='text-bold'>" . strtoupper($item_list['kategori']). "&nbsp;" . strtoupper($item_list['merek']) . "<br/>";
                            }else{
                                echo "<span class='text-bold'>" . strtoupper($item_list['kategori']). "&nbsp;" . strtoupper($item_list['merek']) . "<br/>";
                            }
                            echo "<span>Harga : Rp. " .number_format($item_list['harga']). "</span>";
                            echo "<button class='btn btn-primary button-detail item-detail-button'>Detail</button>";
                            echo "</div></div></div>";
                        }
                    ?>
            </div>
        </div>
    </div>
</body>

</html> 