<?php
include "../function/koneksi.php";

$id_kelas		= $_POST["id_kelas"];
$id_type		= $_POST["id_type"];
$kode_ins		= $_POST["kode_instruktur"];
$nama_kelas		= $_POST["nama_kelas"];

if ($_POST['cek'] == "1") {
	$jadwal	= date('Y-m-d H:i',strtotime($_POST['jadwal']));
	if ($edit = mysqli_query($conn, "UPDATE kelas SET id_type='$id_type', kode_ins='$kode_ins', nama_kelas='$nama_kelas', jadwal = '$jadwal' WHERE id_kelas='$id_kelas'")){
	header("Location: index.php?page=kelas");
	exit();
	}
}else {
	if ($edit = mysqli_query($conn, "UPDATE kelas SET id_type='$id_type', kode_ins='$kode_ins', nama_kelas='$nama_kelas', jadwal = NULL WHERE id_kelas='$id_kelas'")){
	header("Location: index.php?page=kelas");
	exit();
	}
}
die ("Terdapat Kesalahan : ". mysqli_error($conn));

?>