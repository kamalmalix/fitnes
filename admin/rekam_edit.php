<?php
include "../function/koneksi.php";

$id_rekam		= $_POST["id_rekam"];
$kelas			= $_POST["kelas"];
$member			= $_POST["member"];
$bb				= $_POST["bb"];
$kalori			= $_POST["kalori"];
$dj				= $_POST["dj"];
$keterangan		= $_POST["keterangan"];

if ($edit = mysqli_query($conn, "UPDATE rekam SET id_rekam='$id_rekam', id_kelas='$kelas', kode_member='$member', bb='$bb', kalori='$kalori', dj='$dj', keterangan='$keterangan' WHERE id_rekam='$id_rekam'")){
	header("Location: index.php?page=rekam");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($conn));

?>