<?php

include "../function/koneksi.php";

$id_rekam	= $_GET["id_rekam"];

if($delete = mysqli_query($conn, "DELETE FROM rekam WHERE id_rekam='$id_rekam'")){
	header("Location: index.php?page=rekam");
	exit();
}
die("Terdapat Kesalahan : ". mysqli_error($conn));

?>