<?php
    $active =  "promo_dashboard";
    include 'layouts/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Detail PROMO</title>
</head>
<body>

<a href="promo_dashboard.php" class="btn btn-primary">Kembali</a>
<div style="position: relative; height: 450px;">
    <?php
        $id=$_GET['id_promo'];
        $hasil = mysqli_query($mysqli, "SELECT * FROM promo where id_promo='$id'");
        while($b=mysqli_fetch_array($hasil)){
    ?>
    <img class="image-item-dashboard" src="images/logo.jpg">
    <table class="table table-striped tabel-detail">
        <tbody>
            <tr> 
                <td style="width: 260px;">ID PROMO</td>
                <td><span><?php echo $b['id_promo']; ?></span></td>
            </tr>
            <tr> 
                <td style="width: 260px;">Judul Promo</td>
                <td><?php echo $b['judul_promo']; ?></td>
            </tr>
            <tr> 
                <td style="width: 260px;">Berlaku Mulai</td>
                <td><?php echo $b['berlaku_mulai']; ?></td>
            </tr>
            <tr> 
                <td style="width: 260px;">Sampai Dengan</td>
                <td><?php echo $b['sampai_dengan']; ?></td>
            </tr>
            <tr style="width: 260px;"> 
                <td>Keterangan</td>
                <td><p style="white-space: pre-line;"><?php echo $b['keterangan']; ?></p></td>
            </tr>
            <?php
                }
            ?> 
        </tbody>
    </table>
</div>

</body>
</html>