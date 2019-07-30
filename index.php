<?php 
// Create database connection using config file include_once("config.php"); 
include_once("scripts/config.php"); 
// hasil
$result = mysqli_query($mysqli, "SELECT * FROM smartphone ORDER BY id DESC");
?>

<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
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
                                <a class="nav-item nav-link" href="#">Menu</a>
                                <a class="nav-item nav-link" href="#">Menu</a>
                            </div>
                        </div>

                        <i class="fa fa-user user-account justify-content-end"></i>
                    </nav>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <ul class="list-group content-left kategori">
                <li class="list-group-item title-group">Kategori</li>
                <li class="list-group-item">Smartphone</li>
                <li class="list-group-item">Laptop</li>
                <li class="list-group-item">Aksesoris</li>
                <li class="list-group-item">Lainnya</li>
            </ul>

            <ul class="list-group content-left kategori">
                <li class="list-group-item title-group">Rekomendasi</li>
                <?php       
                    while($item_data = mysqli_fetch_array($result)) { 
                        echo "<div class='padding-5'>";
                        echo "<div class='card-item'>";
                        echo "<img class='image-item-recommendation' src=" .$item_data['gambar']. " alt='gambar item'>";
                        echo "<div class='information'>";
                        echo "<span class='text-bold'>" .$item_data['merk']. "</span><br/>";
                        echo "<span>Harga : Rp. " .number_format($item_data['harga']). "</span>";
                        echo "<button class='btn btn-primary button-detail item-detail-button'>Detail</button>";
                        echo "</div></div></div>";
                    }
                ?>                       
            </ul>
        </div>

        <div class="col-sm-9">
            <div class="right-content">
                <img class="promo-banner" src="" alt="Banner Promo">
                
                <div class="row items-group">
                    <div class="col-sm-2 padding-5">
                        <div class="card-item">
                            <div class="label">
                                <span class="label-text">BARU!</span>
                            </div>
                            <img class="image-item" src="images/Realme_3.jpg" alt="gambar item">
                            <div class="information">
                                <span class="text-bold">SAMSUNG J9 PRO 4/32</span><br/>
                                <span>Harga : Rp 1.500.000</span>
                                <button class='btn btn-primary button-detail item-detail-button'>Detail</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>