<?php 
$active= 'dashboard';
include 'layouts/header.php'; 
include 'scripts/config.php';
?>

<div class="jumbotron text-center" style="margin-top: 30px;">
    <div class="container">
        <h3 class="jumbotron-heading">Selamat Datang, <span style="text-transform: capitalize"><?php echo $_SESSION['uname']?></span></h3>
        <p style="font-size: 18px;" class="lead text-muted">
            Halaman Dashboard v1 ini yang dibuat untuk WK ACC. Apabila ingin penambahan fitur, perubahan tampilan ataupun melaporkan kesalahan yang terjadi pada program silahkan hubungi saya melalui</p>
        <p>
        <a href="#" class="btn btn-danger my-2" style="background-color: #red">Gmail</a>
        <a href="#" class="btn btn-success my-2">WhatsApp</a>
        <p style="font-size: 12px;" class="lead text-muted">Selagi saya bisa menambahkan fitur yang anda inginkan dengan catatan saya  sudah mempelajari itu. <br/>akan saya kerjakan apabila fitur itu terlalu sulit bagi saya mohon maaf karena saya juga masih dalam tahap belajar</p>
        </p>
    </div>
</div>