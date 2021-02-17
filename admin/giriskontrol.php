
<!-- Giriş kontrol.php-->
<?php
include 'baglan.php';

session_start();
if (isset($_SESSION['mail']) && isset($_SESSION['sifre'])) {

}
else
{
	session_destroy();
	header("Location:login.php?Durum=3");
	exit();
}

?>