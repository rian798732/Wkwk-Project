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

    // <?php
        // definisi folder upload
        define("UPLOAD_DIR", "uploads/");

        if (!empty($_FILES["myFile"])) {
          $myFile = $_FILES["myFile"];
          $ext    = pathinfo($_FILES["myFile"]["name"], PATHINFO_EXTENSION);
          $size   = $_FILES["myFile"]["size"];
          $tgl   = date("Y-m-d");

          if ($myFile["error"] !== UPLOAD_ERR_OK) {
            echo '<div class="alert alert-warning">Gagal upload file.</div>';
            exit;
          }

          // filename yang aman
          $name = preg_replace("/[^A-Z0-9._-]/i", "_", $myFile["name"]);

          // mencegah overwrite filename
          $i = 0;
          $parts = pathinfo($name);
          while (file_exists(UPLOAD_DIR . $name)) {
            $i++;
            $name = $parts["filename"] . "-" . $i . "." . $parts["extension"];
          }

          // upload file
          $success = move_uploaded_file($myFile["tmp_name"],
            UPLOAD_DIR . $name);
          if (!$success) { 
            echo '<div class="alert alert-warning">Gagal upload file.</div>';
            exit;
          }else{

            $insert = $mysqli->query("INSERT INTO smartphone(merk, brand, harga, spek, link, ram, internal, label, file_name, file_size, file_type, tgl_upload) VALUES('$merek','$brand','$harga','$spek','$link','$ram','$internal','$label', '$name', '$size', '$ext','$tgl')");
            if($insert){
                header("location:dashboard.php");
                echo '<div class="alert alert-success">File berhasil di upload.</div>';
            }else{
              echo '<div class="alert alert-warning">Gagal upload file.</div>';
              exit;
            }
          }

          // set permisi file
          chmod(UPLOAD_DIR . $name, 0644);
        }
?>

    <!-- // $ekstensi_diperbolehkan	= array('png','jpg');
    // $gambar = $_FILES['file']['name'];
    // $x = explode('.', $gambar);
    // $ekstensi = strtolower(end($x));
    // $ukuran	= $_FILES['file']['size'];
    // $file_tmp = $_FILES['file']['tmp_name'];	

    mysqli_query($mysqli, "insert into smartphone values('','$merek','$brand','$harga','$spek','$gambar','$link','$ram','$internal','$label')")or die(mysqli_error($mysqli));
    header("location:dashboard.php"); -->
<!-- ?> -->