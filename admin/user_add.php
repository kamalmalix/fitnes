<?php
include "../function/koneksi.php";

$username		= $_POST["username"];
$email			= $_POST["email"];
$pass			= $_POST["pass"];
$level			= $_POST["level"];


if($add = mysqli_query($conn, "INSERT INTO user (id_user, username, email, password, level_user) VALUES ('', '$username', '$email', md5('$pass'), '$level')")){
	$last_id = mysqli_insert_id($conn);
	if ($level =="user") {
		mysqli_query($conn, "INSERT INTO pelanggan (kode_member,email) VALUES('$last_id','$email')");
	} else if ($level =="instruktur"){
		mysqli_query($conn, "INSERT INTO instruktur (kode_ins,email) VALUES('$last_id','$email') ");
	} else {
		mysqli_query($conn, "INSERT INTO admin (id_admin,email) VALUES('$last_id','$email') ");
	}

	?>
	<script type="text/javascript">
		alert("Data Berhasil di Tambah..!");
		window.location.href = 'index.php?page=user';
	</script>
	<?php
	exit();
	}
die ("Terdapat Kesalahan : ". mysqli_error($conn) );


?>