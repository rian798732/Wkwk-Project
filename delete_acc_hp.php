<?php 
include 'scripts/config.php';
$id=$_GET['id'];
mysqli_query($mysqli, "delete from acc_hp where id='$id'");
header("location:accesoris_hp.php");
?>