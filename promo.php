<?php include 'scripts/config.php';?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Barang</title>
    <?php include 'scripts/komponen.php';?>
</head>
<body>
    <div class="row" style="width: 150%; margin: 0;">
        <?php include 'layouts/navbar.php';?>
    </div>    
    <div class="row" style="padding:20px; margin: 80px 0 0 0;;">
        <div class="col-sm-12">
            <div class="row padding-0">
                <?php
                    $query = mysqli_query($mysqli, "select * from promo");
                    while($promo = mysqli_fetch_array($query)){
                ?>
                <div class="col-md-4">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4 padding-0">
                            <img src="images/logo.jpg" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo strtoupper($promo['judul_promo']); ?></h5>
                                <p class="card-text"><?php echo $promo['keterangan']; ?></p>
                                <p class="card-text"><small class="text-muted">Berlaku&nbsp;<span><?php echo $promo['berlaku_mulai'];?></span><span>&nbsp;-&nbsp;<?php echo $promo['sampai_dengan']; ?></span></small></p>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
</div>
</body>
</html>