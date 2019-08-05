<?php 
include 'scripts/config.php';
$id = $_POST['id'];
$merek=$_POST['merek'];
$harga=$_POST['harga'];
$var_label=$_POST['label'];
$ram=$_POST['ram'];
$internal=$_POST['internal'];
$spek=$_POST['spek'];
$gambar=$_POST['gambar'];
$link=$_POST['link'];
$label = strtoupper($var_label);

mysqli_query($mysqli, "update smartphone set merk='$merek', harga='$harga', spek='$spek', gambar='$gambar',label='$label', link_tokped='$link', ram='$ram', internal='$internal' where id='$id'");
header("location:dashboard.php");

?>