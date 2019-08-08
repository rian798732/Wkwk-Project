<?php 
    include 'scripts/config.php';
    $brand=$_POST['brand'];
    $merek=$_POST['merek'];
    $harga=$_POST['harga'];
    $var_label=$_POST['label'];
    $ram=$_POST['ram'];
    $internal=$_POST['internal'];
    $spek=$_POST['spek'];
    $link=$_POST['link'];
    $label = strtoupper($var_label);

    $ekstensi_diperbolehkan	= array('png','jpg');
    $gambar = $_FILES['file']['name'];
    $x = explode('.', $gambar);
    $ekstensi = strtolower(end($x));
    $ukuran	= $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];	

    mysqli_query($mysqli, "insert into smartphone values('','$merek','$brand','$harga','$spek','$gambar','$link','$ram','$internal','$label')")or die(mysqli_error($mysqli));
    header("location:dashboard.php");
?>