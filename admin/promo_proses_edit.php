<?php
include "../function/koneksi.php";

$id_promo = $_POST["id_promo"];
$judul		= $_POST["judul"];
$konten		= $_POST["konten"];
$lokasi_file 	= $_FILES['foto']['tmp_name'];
$nama_file  	= $_FILES['foto']['name'];

if (empty($lokasi_file)) {
	if ($edit = mysqli_query($conn, "UPDATE promo SET judul_promo='$judul', isi_promo='$konten' WHERE id_promo='$id_promo'")){
		header("Location: index.php?page=promo");
		exit();
	}
	die ("Terdapat kesalahan : ". mysqli_error($conn));

}else {	
	$hapus=mysqli_query($conn, "SELECT * FROM promo WHERE id_promo='$id_promo'");
    $r=mysqli_fetch_array($hapus);
	$d = '../upload/promo/'.$r[gambar];
	unlink ("$d");
	move_uploaded_file($lokasi_file,"../upload/promo/$nama_file");
	if ($edit = mysqli_query($conn, "UPDATE promo SET judul_promo='$judul', isi_promo='$konten', gambar='$nama_file' WHERE id_promo='$id_promo'")){
			header("Location: index.php?page=promo");
			exit();
		}
	die ("Terdapat kesalahan : ". mysqli_error($conn));
}

?>