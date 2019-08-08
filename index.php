<?php 
// Create database connection using config file include_once("config.php"); 
include_once("scripts/config.php"); 
// hasil
$hasil = mysqli_query($mysqli, "select * from smartphone");
?>

<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SELAMAT DATANG</title>
    <link rel="stylesheet" type="text/css" href="styles/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styles/fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="styles/style.css">
</head>

<body>
    <div class="row" style="margin-right: 0px">
        <div class="col-lg-12" style="padding: 0;">
            <div class="top">
                <div class="container">
                    <nav class="navbar navbar-expand-lg top-navbar">
                        <div class="navbar-brand">
                            <img src="#" width="30" height="30" class="d-inline-block align-top" alt="">Tekno Shop
                        </div>
                        <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button> -->
                        <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
                            <div class="form">
                                <form class="form-inline" style="margin-bottom: 0px;">
                                    <input class="form-control" type="search" placeholder="Cari Barang"
                                        aria-label="Search">
                                    <button class="btn button-search" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </form>
                            </div>
                            <div class="navbar-nav">
                                <a class="nav-item nav-link active" href="#">Home <span
                                        class="sr-only">(current)</span></a>
                                <a class="nav-item nav-link" href="#">Menu</a>
                                <a class="nav-item nav-link" href="#">Menu</a>
                                <a class="nav-item nav-link" href="#">About</a>
                                <a class="nav-item nav-link" href="#">Contact us</a>
                            </div>
                        </div>

                        <a href="login_page.php"><i class="fa fa-user user-account justify-content-end"></i></a>
                    </nav>
                </div>
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
                            if($item_list['label'] == "BARU"){
                                echo "<div class='label' style='background-color: #349cdd;'><span class='label-text'>".$item_list['label']."</span></div>";
                            }else if($item_list['label'] == "PREORDER"){
                                echo "<div class='label' style='background-color: #5acf60;'><span class='label-text'>".$item_list['label']."</span></div>";
                            }
                            else if($item_list['label'] == "SOLD OUT"){
                                echo "<div class='label' style='background-color: #e94545;'><span class='label-text'>".$item_list['label']."</span></div>";
                            }
                            else if($item_list['label'] == "BEKAS"){
                                echo "<div class='label' style='background-color: #244b68;'><span class='label-text'>".$item_list['label']."</span></div>";
                            }
                            ?>
                        <img class="image-item" src="<?php echo "images/".$item_list['gambar']; ?>">
                        <?php
                            echo "<div class='information'>";
                            echo "<span class='text-bold'>" . strtoupper($item_list['brand']). "&nbsp;" . strtoupper($item_list['merk']) . "&nbsp;</span><span class='text-bold'>".$item_list['ram']."/</span><span class='text-bold'>".$item_list['internal']."</span><br/>";
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