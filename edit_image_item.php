<?php 
include 'scripts/config.php';
$id=$_POST['id'];
$foto=$_FILES['foto']['name'];
$ext = pathinfo($_FILES["myFile"]["name"], PATHINFO_EXTENSION);
$size = $_FILES["foto"]["size"];
$tgl  = date("Y-m-d");

// move_uploaded_file($_FILES['foto']['tmp_name'], "foto/".$_FILES['foto']['name'])or die();
// 	mysqli_query($koneksi, "update admin set foto='$foto' where uname='$user'");


$u=mysqli_query($mysqli, "select * from admin where id='$id'");
$us=mysqli_fetch_array($u);
if(file_exists("uploads/".$us['foto'])){
	unlink("uploads/".$us['foto']);
	move_uploaded_file($_FILES['foto']['tmp_name'], "uploads/".$_FILES['foto']['name']);
	mysqli_query($mysqli, "update smartphone set file_name='$foto', file_size='$size', file_type='$ext', tgl_upload='$tgl' where id='$id'");
	header("location:dashboard.php");
}else{
	move_uploaded_file($_FILES['foto']['tmp_name'], "foto/".$_FILES['foto']['name']);
	mysqli_query($mysqli, "update admin set file_name='$foto', file_size='$size', file_type='$ext', tgl_upload='$tgl' where id='$id'");
	header("location:dashboard.php");
}
?>
