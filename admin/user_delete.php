<?php

include "../function/koneksi.php";

$id_user	= $_GET["id_user"];
$lv 		= $_GET['lv'];

if ($lv == 'user') {
	$sql = mysqli_query($conn,"DELETE FROM pelanggan WHERE kode_member = '$id_user'");
} else if ($lv == 'instruktur') {
	$sql = mysqli_query($conn,"DELETE FROM instruktur WHERE kode_ins = '$id_user'");
} else {
	$sql = mysqli_query($conn,"DELETE FROM admin WHERE id_admin = '$id_user'");
}
	
if($delete = mysqli_query($conn, "DELETE FROM user WHERE id_user='$id_user'")){
	header("Location: index.php?page=user");
	exit();
}
die("Terdapat Kesalahan : ". mysqli_error($conn));

?>