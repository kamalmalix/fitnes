<?php
include "../function/koneksi.php";

$kelas			= $_POST["kelas"];
$member			= $_POST["member"];
$kode_ins		= $_POST["kode_ins"];
$bb				= $_POST["bb"];
$kalori			= $_POST['kalori'];
$dj				= $_POST['dj'];
$keterangan		= $_POST["keterangan"];

if($add = mysqli_query($conn, "INSERT INTO rekam (id_kelas , kode_member, bb, kalori, dj, keterangan) VALUES ('$kelas', '$member','$bb', '$kalori', '$dj', '$keterangan')")){
	header("Location: index.php?page=rekam");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($conn));

?>