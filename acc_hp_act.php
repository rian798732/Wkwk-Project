<?php 
    include 'scripts/config.php';
    $nama_barang = $_POST['nama_barang'];
    $kategori=$_POST['kategori'];
    $merek=$_POST['merek'];
    $warna=$_POST['warna'];
    $harga=$_POST['harga'];
    $label=$_POST['label'];
    $deskripsi=$_POST['desk'];
    $link=$_POST['link'];
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];
    $size = $_FILES['foto']['size'];
    $ext = pathinfo($foto, PATHINFO_EXTENSION);

        // Rename nama fotonya dengan menambahkan tanggal dan jam upload
    $fotobaru = $foto;
    // Set path folder tempat menyimpan fotonya
    $path = "uploads/".$fotobaru;
    // Proses upload
    if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
      // Proses simpan ke Database
      $query = "INSERT INTO acc_hp(name, kategori, merek, warna, harga, deskripsi, label, link_tokped, file_name, file_size, file_type) VALUES('$nama_barang','$kategori','$merek','$warna','$harga','$deskripsi','$label', '$link','$fotobaru', '$size', '$ext')";

      $sql = mysqli_query($mysqli, $query); // Eksekusi/ Jalankan query dari variabel $query
      if($sql){ // Cek jika proses simpan ke database sukses atau tidak
        // Jika Sukses, Lakukan :
        header("location: accesoris_hp.php"); // Redirect ke halaman index.php
      }else{
        echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
        echo "<br><a href='accesoris_hp.php'>Kembali Ke Form</a>";
      }
    }else if($foto == null){
      // Jika Gagal, Lakukan :
      echo "Maaf, Gambar Belum Di Masukkan";
      echo "<br><a href='accesoris_hp.php'>Kembali Ke Form</a>";
    }
    else{
      // Jika gambar gagal diupload, Lakukan :
      echo "Maaf, Gambar gagal untuk diupload. Mungkin karena ukuran file terlalu besar";
      echo "<br><a href='accesoris_hp.php'>Kembali Ke Halaman Sebelumnya</a>";
    }
?>























        <!-- // definisi folder upload 
//         define("UPLOAD_DIR", "uploads/");

//         if (!empty($_FILES["myFile"])) {
//           $myFile = $_FILES["myFile"];
//           $ext    = pathinfo($_FILES["myFile"]["name"], PATHINFO_EXTENSION);
//           $size   = $_FILES["myFile"]["size"];
//           $tgl   = date("Y-m-d");

//           if ($myFile["error"] !== UPLOAD_ERR_OK) {
//             echo '<div class="alert alert-warning">Gagal upload file.</div>';
//             exit;
//           }

//           // filename yang aman
//           $name = preg_replace("/[^A-Z0-9._-]/i", "_", $myFile["name"]);

//           // mencegah overwrite filename
//           $i = 0;
//           $parts = pathinfo($name);
//           while (file_exists(UPLOAD_DIR . $name)) {
//             $i++;
//             $name = $parts["filename"] . "-" . $i . "." . $parts["extension"];
//           }

//           // upload file
//           $success = move_uploaded_file($myFile["tmp_name"],
//             UPLOAD_DIR . $name);
//           if (!$success) { 
//             echo '<div class="alert alert-warning">Gagal upload file.</div>';
//             exit;
//           }else{

//             $insert = $mysqli->query("INSERT INTO acc_hp(name, kategori, merek, warna, harga, deskripsi, label, file_name, file_size, file_type) VALUES('$name_brg','$kategori','$merek','$warna','$harga','$deskripsi','$label', '$name', '$size', '$ext')");
//             if($insert){
//                 header("location:accesoris_hp.php");
//                 echo '<div class="alert alert-success">File berhasil di upload.</div>';
//             }else{
//               echo '<div class="alert alert-warning">Gagal upload file.</div>';
//               exit;
//             }
//           }

//           // set permisi file
//           chmod(UPLOAD_DIR . $name, 0644);
//         }
//

    // $ekstensi_diperbolehkan	= array('png','jpg');
    // $gambar = $_FILES['file']['name'];
    // $x = explode('.', $gambar);
    // $ekstensi = strtolower(end($x));
    // $ukuran	= $_FILES['file']['size'];
    // $file_tmp = $_FILES['file']['tmp_name'];	

//     mysqli_query($mysqli, "insert into smartphone values('','$merek','$brand','$harga','$spek','$gambar','$link','$ram','$internal','$label')")or die(mysqli_error($mysqli));
//     header("location:dashboard.php"); -->