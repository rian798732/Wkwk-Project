<?php
    $active =  "acc_hp";
    include 'layouts/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Detail</title>
</head>
<body>

<a href="accesoris_hp.php" class="btn btn-primary">Kembali</a>
<div style="position: relative; height: 450px;">
    <?php
        $detail=$_GET['id'];
        $dataDetail = mysqli_query($mysqli, "select * from acc_hp where id=$detail");
    
        while($b=mysqli_fetch_array($dataDetail)){
    ?>
    <img class="image-item-dashboard" src="uploads/<?php echo $b['file_name']; ?>">
    <table class="table table-striped tabel-detail">
        <tbody>
            <tr> 
                <td style="width: 260px;">Nama Barang</td>
                <td><span><?php echo $b['kategori']; ?>&nbsp;</span><span><?php echo $b['merek']; ?></span></td>
            </tr>
            <tr> 
                <td style="width: 260px;">Label</td>
                <td><?php echo $b['label']; ?></td>
            </tr>
            <tr> 
                <td style="width: 260px;">Warna</td>
                <td><?php echo $b['warna']; ?></td>
            </tr>
            <tr> 
                <td style="width: 260px;">Merek Barang</td>
                <td><?php echo $b['merek']; ?></td>
            </tr>
            <tr> 
                <td style="width: 260px;">Kategori</td>
                <td><?php echo $b['kategori']; ?></td>
            </tr>
            <tr> 
                <td style="width: 260px;">Harga</td>
                <td>Rp. <?php echo $b['harga']; ?></td>
            </tr>
            <tr style="width: 260px;"> 
                <td>Deskripsi</td>
                <td><p style="white-space: pre-line;"><?php echo $b['deskripsi']; ?></p></td>
            </tr>
            <?php
                }
            ?> 
        </tbody>
    </table>
</div>

</body>
</html>