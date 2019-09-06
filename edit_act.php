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
$link_shopee=$_POST['link_shopee'];
$link_lazada=$_POST['link_lazada'];

mysqli_query($mysqli, "UPDATE acc_hp set name='$nama',kategori='$kategori', merek='$merek', warna='$warna', harga='$harga', deskripsi='$desk', label='$label', link_tokped='$link', link_shopee='$link_shopee', link_lazada='$link_lazada' where id='$id'");
header("location:accesoris.php");

?>