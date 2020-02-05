<?php
include "../function/koneksi.php";
$id_jp			= $_POST["id_jp"];	
$hari			= $_POST["hari"];
$kode_ins		= $_POST["kode_ins"];

if($add = mysqli_query($conn, "UPDATE jp SET hari='$hari', kode_ins='$kode_ins' WHERE id_jp= '$id_jp'")){
		header("Location: index.php?page=jp");
		exit();	
}

die ("Terdapat Kesalahan : ". mysqli_error($conn));

?>