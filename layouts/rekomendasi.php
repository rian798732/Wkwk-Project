<?php
$result = mysqli_query($mysqli, "select * from acc_hp");
?>

<div class="row" style="width: 100%; margin: 80px 0 0 0;">
<div class="col-sm-3">
    <!-- <ul class="list-group content-left kategori">
        <li class="list-group-item title-group">Kategori</li>
        <li class=<?php if($kategori=='smartphone'){echo "'list-group-item title-group active'";}else{echo'list-group-item title-group noactive';}?>>Smartphone</li>
        <li class="list-group-item">Laptop</li>
        <li class="list-group-item">Aksesoris</li>
        <li class="list-group-item">Lainnya</li>
    </ul> -->

    <div class="search">
        <form class="form-inline" style="margin-bottom: 0;">
            <input name="cari" class="form-control" style="width: 80%; padding: 20px 26px; border-radius: 5px 0 0 5px;" placeholder="Cari barang ...">
            <button class="btn btn-primary" style="width:20%; color: #fff;height: 42px;border-radius: 0px 0px 0px 0px;background-color: #6a8af3;border-color: #8a9fe800;" type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>

    <ul class="list-group content-left kategori">
        <li class="list-group-item title-group">PROMO TERBARU</li>
        <div class="row items-group">
            <?php
                $query = mysqli_query($mysqli, "select * from promo order by id_promo desc limit 3");
                while($promo = mysqli_fetch_array($query)){
            ?>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-12">
                        <div class="card-body" style="width: 100%; padding: 12px 20px;">
                            <h5 class="card-title"><?php echo $promo['judul_promo'];?></h5>
                            <p class="card-text"><?php echo $promo['keterangan'];?></p>
                            <a class="card-text" href="promo.php"><small>Lihat Selengkapnya</small></a>
                        </div>
                    </div>
                </div>
            </div>
                <?php }?>
        </div>     
    </ul>
</div>
        