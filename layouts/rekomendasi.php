<?php
$result = mysqli_query($mysqli, "select * from smartphone");
?>

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