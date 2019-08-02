<?php 
include 'scripts/config.php';
$id=$_GET['id'];
mysqli_query($mysqli, "delete from smartphone where id='$id'");
header("location:dashboard.php");
?>