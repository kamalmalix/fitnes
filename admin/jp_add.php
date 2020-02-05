<?php
include "../function/koneksi.php";

$hari			= $_POST["hari"];
$kode_ins		= $_POST["kode_ins"];

if($add = mysqli_query($conn, "INSERT INTO jp(kode_ins, hari) VALUES ('$kode_ins','$hari')")){
		header("Location: index.php?page=jp");
		exit();	
}

die ("Terdapat Kesalahan : ". mysqli_error($conn));

?>