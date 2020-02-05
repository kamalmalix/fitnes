<?php
include "../function/koneksi.php";

$judul		= $_POST["judul"];
$konten		= $_POST["konten"];
$lokasi_file 	= $_FILES['foto']['tmp_name'];
$nama_file  	= $_FILES['foto']['name'];
move_uploaded_file($lokasi_file,"../upload/event/$nama_file");

if($add = mysqli_query($conn, "INSERT INTO event (id_event, judul_event, isi_event, gambar) VALUES ('', '$judul', '$konten', '$nama_file')")){
	header("Location: index.php?page=event");
	exit();
	}
die ("Terdapat Kesalahan : ". mysqli_error($conn) );

?>