<?php
    include 'scripts/config.php';
    $id = $_POST['id'];
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];
    $pas=md5($pass);

    $query=mysqli_query($mysqli, "INSERT INTO admin(id, uname, pass) VALUES ('$id','$uname','$pas')");
    session_start();
    session_destroy();
    header("location:tambah_admin.php?tambah_admin=sukses");
?>