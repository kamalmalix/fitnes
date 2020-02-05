<?php

include "../function/koneksi.php";

$id_promo	= $_GET["id_promo"];

$hapus=mysqli_query($conn, "SELECT * FROM promo WHERE id_promo='$id_promo'");
  $r=mysqli_fetch_array($hapus);
  $d = '../upload/promo/'.$r[gambar];
  unlink ("$d");

if($delete = mysqli_query($conn, "DELETE FROM promo WHERE id_promo='$id_promo'")){
	header("Location: index.php?page=promo");
	exit();
}
die("Terdapat Kesalahan : ". mysqli_error($conn));

?>