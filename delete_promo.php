<?php 
include 'scripts/config.php';
$id=$_GET['id_promo'];
mysqli_query($mysqli, "delete from promo where id_promo='$id'");
header("location:promo_dashboard.php");
?>