<?php 
// yorumsil.php
include "baglan.php";

if(isset($_GET['ID'])){

	$ID = $_GET['ID']; 

	$delete = $baglanti->prepare("DELETE FROM yorum where YorumID=:id");

	$durum = $delete->execute(array(
		
		"id" => $ID

	));

	if($durum == true){

		header("location: YorumListele.php?Durum=1");

	}

	else{
		header("location: YorumListele.php?Durum=0");
	}


}

?>