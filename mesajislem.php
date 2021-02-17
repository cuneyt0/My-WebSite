<?php
//mesajlaşma.php
include 'Admin/baglan.php';

// Blog Ekleme İşlemi
if (isset($_POST['btnGonder'])) {

	$id = $_POST["ID"];

	$insert = $baglanti->prepare("INSERT INTO yorum (BlogumID, Ad, Soyad, Email, Mesaj) VALUES (:BlogumID, :Ad, :Soyad, :Email, :Mesaj)");

	$durum=$insert->execute(array(

		"BlogumID" => $id,
		"Ad" => $_POST['ad'],
		"Soyad" => $_POST['soyad'],
		"Email" => $_POST['email'],
		"Mesaj" => $_POST['txtMesaj']
	));

	if ($durum == true) {

		header("location: index.php?Durum=1");
	} else {
		header("location: index.php?Durum=0");
	}
}