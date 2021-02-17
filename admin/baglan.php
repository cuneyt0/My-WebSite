
<!-- BAGLAN.php-->
<?php
try {
	
	$baglanti = new PDO("mysql:host=localhost;dbname=blogg;charset=UTF8","root", "");

}

catch (PDOexception $e) {

	echo "Hata: " . $e->getMessage();

}

?>