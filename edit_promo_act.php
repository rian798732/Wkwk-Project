<?php 
include 'scripts/config.php';
$id = $_POST['id_promo'];
$judul = $_POST['judul_promo'];
$berlaku=$_POST['berlaku_mulai'];
$sampai =  $_POST['sampai_dengan'];
$keterangan = $_POST['keterangan'];

mysqli_query($mysqli, "UPDATE promo set judul_promo='$judul', keterangan='$keterangan', berlaku_mulai='$berlaku', sampai_dengan='$sampai' where id_promo='$id'");
header("location:promo_dashboard.php");
?>