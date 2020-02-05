<?php
include "../function/koneksi.php";

$judul		= $_POST["judul"];
$konten		= $_POST["konten"];
$lokasi_file 	= $_FILES['foto']['tmp_name'];
$nama_file  	= $_FILES['foto']['name'];
move_uploaded_file($lokasi_file,"../upload/promo/$nama_file");

if($add = mysqli_query($conn, "INSERT INTO promo (id_promo, judul_promo, isi_promo, gambar) VALUES ('', '$judul', '$konten', '$nama_file')")){
	header("Location: index.php?page=promo");
	exit();
	}
die ("Terdapat Kesalahan : ". mysqli_error($conn) );

?>