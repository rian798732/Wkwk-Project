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
    <title>WKACC WEBSITE | WELCOME</title>
    <?php include 'scripts/komponen.php';?>
</head>

<body>
    <div class="row" style="width: 100%; margin: 0;">
        <?php include 'layouts/navbar.php';?>
    </div>    
        
        <?php include("layouts/rekomendasi.php")?>

        <div class="col-sm-9">
            <div class="right-content">
                <div class="row items-group">
                    <?php
                        $per_hal=12;
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
                            echo "<div class='col-md-12 padding-0' style='text-align: center; margin-bottom: 10px;'>". $_GET['kategori'] ."</h5></div>";
                        }
                        else if(isset($_GET['cari'])){
                            $cari=mysqli_real_escape_string($mysqli, $_GET['cari']);
                            $brg=mysqli_query($mysqli, "select * from acc_hp where merek like '%$cari%' or kategori like '%$cari%' or name like '%$cari%'");
                            
                            if($_GET['cari'] != null){
                                echo "<div class='col-md-12 padding-0' style='text-align: center; margin-bottom: 10px;'> Hasil Pencarian : &quot;". $_GET['cari'] ."&quot;</h5></div>";
                            }
                        }
                        else{
                            $brg=mysqli_query($mysqli, "select * from acc_hp order by id desc limit $start, $per_hal");
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

                            if($total_huruf > 14){
                                echo "<span class='text-bold'>" . substr($str, 0, 13) . " ..." ."<br/>";
                            }else{
                                echo "<span class='text-bold'>" . $str . "<br/>";
                            }
                            echo "<span>Harga : Rp. " .number_format($item_list['harga'],0,',','.'). "</span>";
                            echo "<a href='detail_barang.php?id=" . $item_list['id'] ."' class='btn btn-primary button-detail item-detail-button'>Detail</a>";
                            echo "</div></div></div>";
                        }
                    ?>
            </div>
        </div>

        <nav aria-label="Page navigation" style="margin-top: 10px;">
            <ul class="pagination">
                <li class="page-item">
                <?php 
                    for($x=1;$x<=$halaman;$x++){
                ?>
                    <li class="page-item">
                        <a class="page-link" href="?page=<?php echo $x ?>">
                        <?php echo $x ?></a></li>
                    <?php
                }?>
                </li>
            </ul>
        </nav>
    </div>
</div>

    <?php include 'footer.php';?>
    </body>
</html>