<?php
include "../function/koneksi.php";

$id 			= $_POST['id'];
$username		= $_POST["username"];
$email			= $_POST["email"];
$level			= $_POST["level"];
$lv 			= $_POST['lv'];
$pass			= md5($_POST["pass"]);

if ($level == "user") {
	$tb = "pelanggan";
	$idq = "kode_member";
}elseif ($level == 'instruktur') {
	$tb = "instruktur";
	$idq = "kode_ins";
}else {
	$tb = "admin";
	$idq = "id_admin";
}

if ($lv == "user") {
	$tbu = "pelanggan";
	$idqu = "kode_member";
}elseif ($lv == 'instruktur') {
	$tbu = "instruktur";
	$idqu = "kode_ins";
}else {
	$tbu = "admin";
	$idqu = "id_admin";
}

$sql = mysqli_query($conn,"SELECT * from $tbu WHERE $idqu = '$id'");
$data = mysqli_fetch_assoc($sql);

if ($lv != $level){
	$que = mysqli_query($conn,"INSERT IGNORE INTO $tb ($idq,nama,alamat,tmp_lahir,tgl_lahir,jenkel,tlp,email,gambar) VALUES('$id','$data[nama]','$data[alamat]','$data[tmp_lahir]','$data[tgl_lahir]','$data[jenkel]','$data[tlp]','$data[email]','$data[gambar]')"); 
}

if (isset($pass)) {
 	$sql 	= "UPDATE user SET  username = '$username', email='$email', password = '$pass' , level_user = '$level' WHERE id_user = '$id'";
 	$done 	= mysqli_query($conn,$sql); 
 }else {
 	$sql 	= "UPDATE user SET  username = '$username', email='$email', level_user = '$level' WHERE id_user = '$id'";
 	$done 	= mysqli_query($conn,$sql);
 }

 if ($done) {	
 ?>
 	<script type="text/javascript">
 		alert("Edit Data Berhasil..!");
 		window.location.href = 'index.php?page=user';
 	</script>
 <?php
 }else {
 	echo "kwon";
 }
	echo mysqli_error($conn);	
// die ("Terdapat Kesalahan : ". mysqli_error($conn) );

?>