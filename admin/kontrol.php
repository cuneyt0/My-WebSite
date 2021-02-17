<?php 
//Kontrol.php
if (isset($_POST['girisbutonu'])) {
	ob_start();
	session_start();

	$email = $_POST['email'];
	$sifre = $_POST['sifre'];

	if ($email == "cuneytaykac2@gmail.com" and $sifre == "12345") {

		$_SESSION['mail']=$email;
		$_SESSION['sifre']=$sifre;

		header("Location:index.php");

		exit();

		# code...
	}
	else
	{
		header("Location:login.php?Durum=0");
	}
}
if (isset($_POST['btnCikis'])) {

	session_start();

	$_SESSION['mail']="";
	$_SESSION['sifre']="";

	session_destroy();
	header("Location:login.php?Durum=1");
}



?>