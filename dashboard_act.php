<?php 

include 'scripts/config.php';
$merek=$_POST['merek'];
$harga=$_POST['harga'];
$var_label=$_POST['label'];
$ram=$_POST['ram'];
$internal=$_POST['internal'];
$spek=$_POST['spek'];
$gambar=$_POST['gambar'];
$link=$_POST['link'];
$label = strtoupper($var_label);

mysqli_query($mysqli, "insert into smartphone values('','$merek','$harga','$spek','$gambar','$link','$ram','$internal','$label')")or die(mysqli_error());
header("location:dashboard.php");

?>