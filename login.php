<?php
session_start();
include "function/koneksi.php";

$username = $_POST["username"];
$password = $_POST["password"];

//Validasi Login
if ($_POST){
	$asd =  md5($password);
	$queryuser = mysqli_query($conn,"SELECT * FROM user WHERE username= '$username' AND password='$asd'");
	
	$user = mysqli_fetch_array($queryuser);
						
	if(mysqli_num_rows($queryuser) > 0){		
				$_SESSION["username"] 			= $user["username"];
				$_SESSION["email"]				= $user["email"];
				$_SESSION["password"] 			= $user["password"];
				$_SESSION["level_user"] 		= $user["level_user"];
				$_SESSION["id_user"] 			= $user["id_user"];
				//$_SESSION["Foto"]				= $user["Foto"];
				$_SESSION["Login"] 				= true;
				
				if ($_SESSION["level_user"] == "admin"){
					header ("Location: admin/index.php");
					exit();
				}
				else if($_SESSION["level_user"] == "user"){
					header ("Location: member/index.php");
					exit();
					}
				else if($_SESSION["level_user"] == "instruktur"){
					header ("Location: instruktur/index.php");
					exit();
				}
				else {header ("Location: index.php?Err=1");}
	}
	else if (empty ($username) && empty ($password)){
		header ("Location: index.php?Err=1");
		exit();
	}
	else if(empty ($username)){
		header ("Location: index.php?Err=2");
		exit();
	}
	else if(empty ($password)){
		header ("Location: index.php?Err=3");
		exit();
	}
	else{
		header ("Location: index.php?Err=5");
		exit();
	}
}
	
?>