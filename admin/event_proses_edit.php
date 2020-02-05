<?php
include "../function/koneksi.php";

$id_event = $_POST["id_event"];
$judul		= $_POST["judul"];
$konten		= $_POST["konten"];
$lokasi_file 	= $_FILES['foto']['tmp_name'];
$nama_file  	= $_FILES['foto']['name'];

if (empty($lokasi_file)) {
	if ($edit = mysqli_query($conn, "UPDATE event SET judul_event='$judul', isi_event='$konten' WHERE id_event='$id_event'")){
		header("Location: index.php?page=event");
		exit();
	}
	die ("Terdapat kesalahan : ". mysqli_error($conn));

}else {	
	$hapus=mysqli_query($conn, "SELECT * FROM event WHERE id_event='$id_event'");
    $r=mysqli_fetch_array($hapus);
	$d = '../upload/event/'.$r[gambar];
	unlink ("$d");
	move_uploaded_file($lokasi_file,"../upload/event/$nama_file");
	if ($edit = mysqli_query($conn, "UPDATE event SET judul_event='$judul', isi_event='$konten', gambar='$nama_file' WHERE id_event='$id_event'")){
			header("Location: index.php?page=event");
			exit();
		}
	die ("Terdapat kesalahan : ". mysqli_error($conn));
}

?>