<?php

include "../function/koneksi.php";

$id_jp	= $_GET["id_jp"];

if($delete = mysqli_query($conn, "DELETE FROM jp WHERE id_jp='$id_jp'")){
	header("Location: index.php?page=jp");
	exit();
}
die("Terdapat Kesalahan : ". mysqli_error($conn));

?>