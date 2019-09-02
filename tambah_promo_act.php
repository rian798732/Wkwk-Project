<?php 
    include 'scripts/config.php';
    $id_promo = $_POST['id_promo'];
    $judul_promo=$_POST['judul_promo'];
    $berlaku=$_POST['berlaku_mulai'];
    $sampai=$_POST['sampai_dengan'];
    $ket = $_POST['keterangan'];

    mysqli_query($mysqli, "insert into promo values('$id_promo', '$judul_promo','$ket', '$berlaku', '$sampai')");
    
    header("location:promo_dashboard.php");
?>
