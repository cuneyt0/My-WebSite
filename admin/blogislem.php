<!-- blogislem.php-->

<?php

include 'baglan.php';

// Blog Ekleme İşlemi
if (isset($_POST['btnEkle'])) {

	//Resim ekleme işlemi
	$target_dir = $_SERVER['DOCUMENT_ROOT'] . '/blogg/resim/';

	$target_file = $target_dir . basename($_FILES["fuResim"]["name"]);

	$uploadOk = 1;

	$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

	$check = getimagesize($_FILES["fuResim"]["tmp_name"]);

	if ($check !== false) {

		if (file_exists($target_file)) {

			$uploadOk = 0;
		}
	}

	move_uploaded_file($_FILES["fuResim"]["tmp_name"], $target_file);

	

	$insert = $baglanti->prepare("INSERT INTO blogum (BlogBaslik, BlogOnizleme, BlogMetin, Resim) VALUES (:BlogBaslik, :BlogOnizleme, :BlogMetin, :Resim)");

	$durum=$insert->execute(array(

		"BlogBaslik" => $_POST['blogbasligi'],
		"BlogOnizleme" => $_POST['blogonizleme'],
		"BlogMetin" => $_POST['txtOzellik'],
		"Resim" => basename($_FILES["fuResim"]["name"])
	));

	if ($durum == true) {

		header("location: BlogListele.php?Durum=1");
	} else {
		header("location: BlogListele.php?Durum=0");
	}
}

if (isset($_POST['btnGuncelle'])) {

	$ID = $_POST['ID'];

	//Resim ekleme işlemi
	
	$target_dir = $_SERVER['DOCUMENT_ROOT'] . '/blogg/resim/';

	$target_file = $target_dir . basename($_FILES["fuResim"]["name"]);

	$uploadOk = 1;

	$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

	$check = getimagesize($_FILES["fuResim"]["tmp_name"]);

	if ($check !== false) {

		if (file_exists($target_file)) {

			$uploadOk = 0;
		}
	}

	move_uploaded_file($_FILES["fuResim"]["tmp_name"], $target_file);


	$update = $baglanti->prepare("UPDATE blogum SET BlogBaslik=:BlogBaslik,  BlogOnizleme=:BlogOnizleme, BlogMetin=:BlogMetin, Resim=:Resim WHERE BlogumID=:id");

	$durum = $update->execute(array(

		"BlogBaslik" => $_POST['blogbasligi'],
		"BlogOnizleme" => $_POST['blogonizleme'],
		"BlogMetin" => $_POST['txtOzellik'],
		"Resim" => basename($_FILES["fuResim"]["name"]),
		"id" => $ID

	));

	if ($durum == true) {

		header("location:BlogListele.php?Durum=1");

	} else {

		header("location:BlogListele.php?Durum=0");

	}
}
?>