<?php

include "../function/koneksi.php";

$id_kelas	= $_GET["id_kelas"];

if($delete = mysqli_query($conn, "DELETE FROM kelas WHERE id_kelas='$id_kelas'")){
	header("Location: index.php?page=kelas");
	exit();
}
die("Terdapat Kesalahan : ". mysqli_error($conn));

?>