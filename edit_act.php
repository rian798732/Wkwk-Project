<?php 
include 'scripts/config.php';
$id = $_POST['id'];
$merek=$_POST['merek'];
$harga=$_POST['harga'];
$var_label=$_POST['label'];
$ram=$_POST['ram'];
$internal=$_POST['internal'];
$spek=$_POST['spek'];
$link=$_POST['link'];
$label = strtoupper($var_label);

mysqli_query($mysqli, "UPDATE smartphone set merk='$merek', harga='$harga', spek='$spek',label='$label', link='$link', ram='$ram', internal='$internal' where id='$id'");
header("location:dashboard.php");

?>