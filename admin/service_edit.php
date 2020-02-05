<?php
include "../function/koneksi.php";

$id_type		= $_POST["id_type"];
$nama_kegiatan	= $_POST["nama_kegiatan"];

if ($edit = mysqli_query($conn, "UPDATE type SET nama_kegiatan='$nama_kegiatan' WHERE id_type='$id_type'")){
	header("Location: index.php?page=service");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($conn));

?>