<?php

include "../function/koneksi.php";

$id_type	= $_GET["id_type"];

if($delete = mysqli_query($conn, "DELETE FROM type WHERE id_type='$id_type'")){
	header("Location: index.php?page=service");
	exit();
}
die("Terdapat Kesalahan : ". mysqli_error($conn));

?>