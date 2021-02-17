

<!-- blogSil.php-->
<?php 

include "baglan.php";

if(isset($_GET['ID'])){

	$ID = $_GET['ID']; 

	$delete = $baglanti->prepare("DELETE FROM blogum where BlogumID=:id");

	$durum = $delete->execute(array(
		
		"id" => $ID

	));

	if($durum == true){

		header("location: BlogListele.php?Durum=1");

	}

	else{
		header("location: BlogListele.php?Durum=0");
	}


}

?>