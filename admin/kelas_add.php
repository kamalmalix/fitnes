<?php
include "../function/koneksi.php";

$id_kelas		= $_POST["id_kelas"];
$id_type		= $_POST["id_type"];
$kode_ins		= $_POST["kode_ins"];
$nama_kelas		= $_POST["nama_kelas"];
$jadwal			= $_POST["jadwal"];


if ($_POST['cek'] == "1") {
	$jadwal			= date('Y-m-d H:i',strtotime($_POST['jadwal']));
	if($add = mysqli_query($conn, "INSERT INTO kelas (id_kelas, id_type, kode_ins, nama_kelas, jadwal) VALUES ('$id_kelas', '$id_type', '$kode_ins', '$nama_kelas','$jadwal')")){
		header("Location: index.php?page=kelas");
		exit();
	}
}else {
	if($add = mysqli_query($conn, "INSERT INTO kelas (id_kelas, id_type, kode_ins, nama_kelas) VALUES ('$id_kelas', '$id_type', '$kode_ins', '$nama_kelas')")){
	header("Location: index.php?page=kelas");
	exit();
	}	
}

die ("Terdapat Kesalahan : ". mysqli_error($conn));

?>