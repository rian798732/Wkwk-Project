<?php 
$kategori = 'smartphone';
// Create database connection using config file include_once("config.php"); 
include_once("scripts/config.php"); 
// hasil
// $hasil = mysqli_query($mysqli, "select * from acc_hp");
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
        <div class="col-lg-12" style="padding: 0; position: fixed; z-index: 3;">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color: #5877df!important">
                <img class="navbar-image" src="images/logo.png" width="60px">
                <a class="navbar-brand color-white" style="margin-right: 20%;" href="index.php">WKACC Website</a>
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
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="width: 400px;">
                            <div class="row">
                                <div class="col-md-6">
                                    <a class="dropdown-item" href="index.php?kategori=Accesoris Handphone">Accesoris Smartphone</a>
                                    <a class="dropdown-item" href="index.php?kategori=RC Drone">RC Drone</a>
                                    <a class="dropdown-item" href="index.php?kategori=Charger">Charger</a>
                                    <a class="dropdown-item" href="index.php?kategori=Powerbank">Powerbank</a>
                                    <a class="dropdown-item" href="index.php?kategori=Temperglass">Temperglass</a>
                                </div>
                                <div class="col-md-6">
                                    <a class="dropdown-item" href="index.php?kategori=Saver">Saver</a>
                                    <a class="dropdown-item" href="index.php?kategori=Handsfree">Handsfree</a>
                                    <a class="dropdown-item" href="index.php?kategori=Kabel">Kabel</a>
                                    <a class="dropdown-item" href="index.php?kategori=Audio">Audio</a>
                                    <a class="dropdown-item" href="index.php?kategori=Adapter">Adapter</a>
                                </div>
                            </div>
                            <!-- <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                            </div> -->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link color-white" href="#">About us</a>
                        </li>
                    </ul>
                    <!-- <form class="form-inline" style="margin-bottom: 0;">
                        <input class="form-control" style="width: 80%; padding: 20px 26px; border-radius: 25px 0px 0px 25px;" placeholder="Cari barang">
                        <button class="btn btn-primary" style="color: #fff;height: 42px;border-radius: 0px 0px 0px 0px;background-color: #96aaec;border-color: #8a9fe800;" type="submit"><i class="fa fa-search"></i></button>
                    </form> -->
                </div>
            </nav>
        </div>
    </div>    
        
        <?php include("layouts/rekomendasi.php")?>

        <div class="col-sm-9">
            <div class="right-content">
                <div class="row items-group">
                    <?php
                        $per_hal=10;
                        $jumlah_record=mysqli_query($mysqli,"SELECT count(*) from acc_hp");
                        // $jum=mysqli_query($mysqli, '$jumlah_record');
                        $jum = mysqli_fetch_array($jumlah_record, MYSQLI_NUM);

                        if($jum == 0){
                            echo "<span>Tidak ada data yang ditampilkan</span>";
                        }else{
                            $halaman=ceil($jum[0] / $per_hal);
                            $page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
                            $start = ($page - 1) * $per_hal;
                        }

                        if(isset($_GET['kategori'])){
                            $kategori=mysqli_real_escape_string($mysqli, $_GET['kategori']);
                            $brg=mysqli_query($mysqli, "select * from acc_hp where kategori like '$kategori'");
                        }else{
                            $brg=mysqli_query($mysqli, "select * from acc_hp limit $start, $per_hal");
                        }
                        $no=1;

                        while($item_list = mysqli_fetch_array($brg)) { 
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
                            else if($item_list['label'] == "Terbatas"){
                                echo "<div class='label' style='background-color: #965acf;'><span class='label-text'>". strtoupper($item_list['label']). "</span></div>";
                            }
                            ?>
                        <img class="image-item" src="<?php echo "uploads/".$item_list['file_name']; ?>">
                        <?php
                            echo "<div class='information'>";
                            $total_huruf = strlen($item_list['name']);
                            $str = strtoupper($item_list['name']);

                            if($total_huruf > 15){
                                echo "<span class='text-bold'>" . substr($str, 0, 15) . " ..." ."<br/>";
                            }else{
                                echo "<span class='text-bold'>" . $str . "<br/>";
                            }
                            echo "<span>Harga : Rp. " .number_format($item_list['harga']). "</span>";
                            echo "<a href='#' class='btn btn-primary button-detail item-detail-button'>Detail</a>";
                            echo "</div></div></div>";
                        }
                    ?>
            </div>
        </div>
    </div>
</div>

    <?php include 'footer.php';?>
    </body>
</html>