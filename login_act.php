<?php 
session_start();
include 'scripts/config.php';
$uname=$_POST['uname'];
$pass=$_POST['pass'];
// $pas=md5($pass);

$query=mysqli_query($mysqli,"select * from admin where uname='$uname' and pass='$pass'")or die(mysql_error());
if(mysqli_num_rows($query)==1){
	$_SESSION['uname']=$uname;
	header("location:dashboard.php");
}else{
	header("location:login_page.php?pesan=gagal")or die(mysql_error());
	// mysql_error();
}
// echo $pas;
 ?>