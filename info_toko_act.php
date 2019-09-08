<?php 
    include 'scripts/config.php';
    $id = 1;
    $nama_toko=$_POST['nama_toko'];
    $desk_toko=$_POST['desk_toko'];
    $alamat_toko=$_POST['alamat_toko'];
    $no_telp=$_POST['no_telp'];
    $no_wa=$_POST['no_wa'];
    $email=$_POST['email'];
    $link_facebook=$_POST['link_facebook'];
    $link_instagram=$_POST['link_instagram'];
    $link_tokopedia=$_POST['link_tokped'];
    $link_lazada=$_POST['link_lazada'];
    $link_shopee=$_POST['link_shopee'];

    mysqli_query($mysqli, "UPDATE info_toko set nama_toko='$nama_toko', desk_toko='$desk_toko', alamat_toko='$alamat_toko', no_telp='$no_telp', no_wa='$no_wa', email='$email', link_tokopedia='$link_tokopedia', link_shopee='$link_shopee', link_lazada='$link_lazada', link_ig='$link_instagram', link_facebook='$link_facebook' where id=1");

    header("location:info_toko.php?hasil=sukses");
?>