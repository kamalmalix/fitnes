<?php

include "../function/koneksi.php";

$id_artikel	= $_GET["id_artikel"];

$hapus=mysqli_query($conn, "SELECT * FROM artikel WHERE id_artikel='$id_artikel'");
  $r=mysqli_fetch_array($hapus);
  $d = '../upload/artikel/'.$r[gambar];
  unlink ("$d");

if($delete = mysqli_query($conn, "DELETE FROM artikel WHERE id_artikel='$id_artikel'")){
	header("Location: index.php?page=artikel");
	exit();
}
die("Terdapat Kesalahan : ". mysqli_error($conn));

?>