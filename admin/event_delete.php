<?php

include "../function/koneksi.php";

$id_event	= $_GET["id_event"];

$hapus=mysqli_query($conn, "SELECT * FROM event WHERE id_event='$id_event'");
  $r=mysqli_fetch_array($hapus);
  $d = '../upload/event/'.$r[gambar];
  unlink ("$d");

if($delete = mysqli_query($conn, "DELETE FROM event WHERE id_event='$id_event'")){
	header("Location: index.php?page=event");
	exit();
}
die("Terdapat Kesalahan : ". mysqli_error($conn));

?>