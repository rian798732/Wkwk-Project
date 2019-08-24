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
        <li class="list-group-item title-group">Rekomendasi</li>
        <div class="row items-group">
            <?php
                $brg=mysqli_query($mysqli, "select * from acc_hp limit 1, 2");
                $no=1;

                while($item_list = mysqli_fetch_array($brg)) { 
                    echo "<div class='col-sm-12 padding-5'>";
                    echo "<div class='card-item'>";
                    // if($item_list['label'] == "Baru"){
                    //     echo "<div class='label' style='background-color: #349cdd;'><span class='label-text'>". strtoupper($item_list['label']). "</span></div>";
                    // }else if($item_list['label'] == "Preorder"){
                    //     echo "<div class='label' style='background-color: #5acf60;'><span class='label-text'>". strtoupper($item_list['label']). "</span></div>";
                    // }
                    // else if($item_list['label'] == "Habis"){
                    //     echo "<div class='label' style='background-color: #e94545;'><span class='label-text'>". strtoupper($item_list['label']). "</span></div>";
                    // }
                    // else if($item_list['label'] == "Bekas"){
                    //     echo "<div class='label' style='background-color: #244b68;'><span class='label-text'>". strtoupper($item_list['label']). "</span></div>";
                    // }
                    // else if($item_list['label'] == "Terbatas"){
                    //     echo "<div class='label' style='background-color: #965acf;'><span class='label-text'>". strtoupper($item_list['label']). "</span></div>";
                    // }
                    ?>
                <img class="image-item" src="<?php echo "uploads/".$item_list['file_name']; ?>">
                <?php
                    echo "<div class='information'>";
                    $total_huruf = strlen($item_list['name']);
                    $str = strtoupper($item_list['name']);

                    if($total_huruf > 10){
                        echo "<span class='text-bold'>" . substr($str, 0, 10) . " ..." ."<br/>";
                    }else{
                        echo "<span class='text-bold'>" . $str . "<br/>";
                    }
                    echo "<span>Harga : Rp. " .number_format($item_list['harga'],0,',','.'). "</span>";
                    echo "<a href='#' class='btn btn-primary button-detail item-detail-button'>Detail</a>";
                    echo "</div></div></div>";
                }
            ?>
        </div>     
    </ul>
</div>
        