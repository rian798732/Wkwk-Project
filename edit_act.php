<?php 
include 'scripts/config.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$merek=$_POST['merek'];
$warna =  $_POST['warna'];
$kategori = $_POST['kategori'];
$harga=$_POST['harga'];
$label=$_POST['label'];
$desk=$_POST['desk'];
$link=$_POST['link'];

mysqli_query($mysqli, "UPDATE acc_hp set name='$nama',kategori='$kategori', merek='$merek', warna='$warna', harga='$harga', deskripsi='$desk', label='$label', link_tokped='$link' where id='$id'");
header("location:accesoris.php");

?>