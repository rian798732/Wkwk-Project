<?php 
include 'scripts/config.php';
$id=$_POST['id'];

if(isset($_POST['ubah_foto'])){ // Jika user menceklis checkbox yang ada di form ubah, lakukan :
	// Ambil data foto yang dipilih dari form
	$foto = $_FILES['foto']['name'];
	$tmp = $_FILES['foto']['tmp_name'];
	
	// Rename nama fotonya dengan menambahkan tanggal dan jam upload
	$fotobaru = date('dmYHis').$foto;
	
	// Set path folder tempat menyimpan fotonya
	$path = "uploads/".$fotobaru;
	// Proses upload
	if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
	  // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
	  $query = "SELECT * FROM acc_hp WHERE id='".$id."'";
	  $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
	  $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
	  // Cek apakah file foto sebelumnya ada di folder images
	  if(is_file("uploads/".$data['foto'])) // Jika foto ada
		unlink("uploads/".$data['foto']); // Hapus file foto sebelumnya yang ada di folder images
	  
	  // Proses ubah data ke Database
	  $query = "UPDATE acc_hp SET file_name='".$fotobaru."' WHERE id='".$id."'";
	  $sql = mysqli_query($mysqli, $query); // Eksekusi/ Jalankan query dari variabel $query
	  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
		// Jika Sukses, Lakukan :
		header("location: edit.php?id=$id"); // Redirect ke halaman index.php
	  }else{
		// Jika Gagal, Lakukan :
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='accesoris_hp.php'>Kembali Ke Form</a>";
	  }
	}else{
	  // Jika gambar gagal diupload, Lakukan :
	  echo "Maaf, Gambar gagal untuk diupload.";
	  echo "<br><a href='accesoris_hp.php'>Kembali Ke Form</a>";
	}
  }else{ // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :
	// Proses ubah data ke Database
	  // Jika Gagal, Lakukan :
		header("location: edit.php?id=$id");
	}
?>