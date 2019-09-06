<?php include 'scripts/config.php';?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.9">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Barang</title>
    <?php include 'scripts/komponen.php';?>
</head>
<body>
    <div class="row" style="width: 100%; margin: 0;">
        <?php include 'layouts/navbar.php';?>
    </div>    
    
    <?php include("layouts/rekomendasi.php")?>

    <div class="col-sm-9">
        <div class="right-content" style="background: #e0e0e040;">
        <div class="row" style="width: 100%; margin: 15px 0;">
            <div class="col-md-5">
                <?php
                    $detail_barang=$_GET['id'];
                    $data = mysqli_query($mysqli, "select * from acc_hp where id=$detail_barang");
                
                    while($b=mysqli_fetch_array($data)){
                ?>
                <div class="bg-item" style="padding: 5px;border: 1px solid #ececec;border-radius: 5px;">
                    <img width="100%" src="uploads/<?php echo $b['file_name'];?>">
                </div>
            </div>
            <div class="col-md-6">
                <span style="font-size: 24px;" class="detail-title text-bold"><?php echo strtoupper($b['name']);?></span><br/>
                <span style="font-size: 18px;" class="text-bold">Rp.&nbsp;<?php echo number_format($b['harga'],0,',','.')?></span><br/>  
                <table class="table table-stoke" style="table-layout: unset; font-size: 14px">
                    <tbody>
                        <tr> 
                            <td style="width: 150px;border-top: none;padding-left: 0;">Kondisi</td>
                            <td style="width: 150px;;border-top: none;padding-left: 0;"><?php echo $b['label']?></td>
                        </tr>
                        <tr> 
                            <td style="width: 150px;padding-left: 0;">Warna</td>
                            <td style="width: 150px;padding-left: 0;"><?php echo $b['warna']?></td>
                        </tr>
                        <tr> 
                            <td style="width: 150px;padding-left: 0;">Merek Barang</td>
                            <td style="width: 150px;padding-left: 0;"><?php echo $b['merek']?></td>
                        </tr>
                        <tr> 
                            <td style="width: 150px;padding-left: 0;">Kategori</td>
                            <td style="width: 150px;padding-left: 0;"><?php echo $b['kategori']?></td>
                        </tr>
                    </tbody>
                </table>
                <div class="row padding-0">
                    <div class="col-md-12" style="margin-bottom: 10px;"><center>Pesan sekarang melalui :</center></div>
                    <div class="col-md-5 padding-0" style="margin: 5px 5px; <?php if($b['link_tokped'] == null){ echo 'display: none;';}?>">
                        <a href="<?php echo $b['link_tokped']?>" class="btn btn-success" style="width: 100%; color: white; background: #44953e; border-color: #44953e;">Tokopedia</a>
                    </div>

                    <div class="col-md-5 padding-0" style="margin: 5px 5px; <?php if($b['link_lazada'] == null){ echo 'display: none;';}?>">
                        <a href="<?php echo $b['link_lazada']?>" class="btn btn-warning" style="width: 100%; color: white; background: #f79108; border-color: #f79108;">Lazada</a>
                    </div>

                    <div class="col-md-5 padding-0" style="margin: 5px 5px; <?php if($b['link_shopee'] == null){ echo 'display: none;';}?>">
                        <a href="<?php echo $b['link_shopee']?>" class="btn btn-warning" style="width: 100%; color: white; background: #ff6300;">Shopee</a>
                    </div>
                    <div class="col-md-5 padding-0" style="margin: 5px 5px;">
                        <a href="#" class="btn btn-success" style="width: 100%; color: white;">WhatsApp</a>
                    </div>
                </div>
                <!-- <div class="share">
                    <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                    <a class="a2a_button_facebook"></a>
                    <a class="a2a_button_twitter"></a>
                    <a class="a2a_button_whatsapp"></a>
                    </div>
                    <script async src="https://static.addtoany.com/menu/page.js"></script>
                </div> -->
            </div>
        </div>
        <div class="row" style="width: 100%; margin: 15px 0;">
            <div class="col-md-12">
                <div class="information-item" style="width: 100%">
                    <table class="table table-stoke">
                        <tr>
                            <td>Deskripsi</td>
                        </tr>
                        <tr>
                            <td style="border-top: none;padding: 0 .75rem; white-space: pre-line;"><?php echo $b['deskripsi']?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php }?>
</div> </div>
<?php include 'footer.php';?>
</body>
</html>