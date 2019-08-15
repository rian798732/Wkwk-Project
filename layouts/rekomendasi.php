<?php
$result = mysqli_query($mysqli, "select * from smartphone");
?>

<div class="row" style="width: 100%; margin: 0;">
<div class="col-sm-3">
            <!-- <ul class="list-group content-left kategori">
                <li class="list-group-item title-group">Kategori</li>
                <li class=<?php if($kategori=='smartphone'){echo "'list-group-item title-group active'";}else{echo'list-group-item title-group noactive';}?>>Smartphone</li>
                <li class="list-group-item">Laptop</li>
                <li class="list-group-item">Aksesoris</li>
                <li class="list-group-item">Lainnya</li>
            </ul> -->

            <ul class="list-group content-left kategori">
                <li class="list-group-item title-group">Rekomendasi</li>
                <div class="row" style="display: flex;  margin-left: 10px; margin-top: 10px;">
                <?php       
                    while($item_data = mysqli_fetch_array($result)) { 
                        echo "<div class='col-md-6 padding-5'>";
                        echo "<div class='card-item'>";
                            if($item_data['label'] == "BARU"){
                                echo "<div class='label' style='background-color: #349cdd;'><span class='label-text'>".$item_data['label']."</span></div>";
                            }else if($item_data['label'] == "PREORDER"){
                                echo "<div class='label' style='background-color: #5acf60;'><span class='label-text'>".$item_data['label']."</span></div>";
                            }
                            else if($item_data['label'] == "SOLD OUT"){
                                echo "<div class='label' style='background-color: #e94545;'><span class='label-text'>".$item_data['label']."</span></div>";
                            }
                            ?>
                        <img class="image-item" src="<?php echo "images/".$item_data['gambar']; ?>">
                        <?php
                            echo "<div class='information'>";
                            echo "<span class='text-bold'>" .$item_data['merk']. "&nbsp;</span><span class='text-bold'>".$item_data['ram']."/</span><span class='text-bold'>".$item_data['internal']."</span><br/>";
                            echo "<span>Harga : Rp. " .number_format($item_data['harga']). "</span>";
                            echo "<button class='btn btn-primary button-detail item-detail-button'>Detail</button>";
                            echo "</div></div></div>";
                        }
                ?>                  
                </div>     
            </ul>
        </div>