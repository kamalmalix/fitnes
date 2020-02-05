<?php
include "../function/koneksi.php";

$id_artikel = $_POST["id_artikel"];
$judul		= $_POST["judul"];
$konten		= $_POST["konten"];
$lokasi_file 	= $_FILES['foto']['tmp_name'];
$nama_file  	= $_FILES['foto']['name'];

if (empty($lokasi_file)) {
	if ($edit = mysqli_query($conn, "UPDATE artikel SET judul_artikel='$judul', isi_artikel='$konten' WHERE id_artikel='$id_artikel'")){
		?>
        <script type="text/javascript">
          alert("Data Berhasil di Edit..!");
          window.location.href = "index.php?page=artikel";
        </script>
      	<?php
		exit();
	}
	die ("Terdapat kesalahan : ". mysqli_error($conn));

}else {	
	$hapus=mysqli_query($conn, "SELECT * FROM artikel WHERE id_artikel='$id_artikel'");
    $r=mysqli_fetch_array($hapus);
	$d = '../upload/artikel/'.$r[gambar];
	unlink ("$d");
	move_uploaded_file($lokasi_file,"../upload/artikel/$nama_file");
	if ($edit = mysqli_query($conn, "UPDATE artikel SET judul_artikel='$judul', isi_artikel='$konten', gambar='$nama_file' WHERE id_artikel='$id_artikel'")){
		?>
        <script type="text/javascript">
          alert("Data Berhasil di Edit..!");
          window.location.href = "index.php?page=artikel";
        </script>
      	<?php
			exit();
		}
	die ("Terdapat kesalahan : ". mysqli_error($conn));
}

?>