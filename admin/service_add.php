<?php
include "../function/koneksi.php";

$id_type		= $_POST["id_type"];
$nama_kegiatan	= $_POST["nama_kegiatan"];

if($add = mysqli_query($conn, "INSERT INTO type (id_type, nama_kegiatan) VALUES ('$id_type', '$nama_kegiatan')")){
	header("Location: index.php?page=service");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($conn));

?>