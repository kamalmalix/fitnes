<?php
include "../function/koneksi.php";

$judul		= $_POST["judul"];
$konten		= $_POST["konten"];
$lokasi_file 	= $_FILES['foto']['tmp_name'];
$nama_file  	= $_FILES['foto']['name'];
move_uploaded_file($lokasi_file,"../upload/artikel/$nama_file");

if($add = mysqli_query($conn, "INSERT INTO artikel (id_artikel, judul_artikel, isi_artikel, gambar) VALUES ('', '$judul', '$konten', '$nama_file')")){
	?>
        <script type="text/javascript">
          alert("Data Berhasil di Simpan..!");
          window.location.href = "index.php?page=artikel";
        </script>
    <?php
	exit();
	}
die ("Terdapat Kesalahan : ". mysqli_error($conn) );

?>