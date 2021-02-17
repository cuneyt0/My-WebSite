<?php 
include 'include/header.php';
?>
<!--BLOGgoruntule.php-->

<?php

$id = $_GET['ID'];

include 'Admin/baglan.php';

$sorgu = $baglanti->prepare("SELECT * FROM blogum where BlogumID=:id");

$sorgu->execute(array(
	"id" => $id
));

$cek = $sorgu->fetch(PDO::FETCH_ASSOC);


?>

<section class="breadcrumbs-custom bg-image context-dark" style="background-image: url('resim/<?php echo $cek['Resim'];?>');?>">
	<div class="container">
		<h3 class="breadcrumbs-custom-title"><?php echo $cek['BlogTarih']; ?></h3>
		<pre-footer-classic class="breadcrumbs-custom-subtitle"><?php echo substr($cek['BlogOnizleme'],0,30);?></pre-footer-classic>
	</div>
</section>

<div class="container" style="margin-top:25px; margin-bottom: 25px;">
	<div class="row">
		<div class="col-xl-8">
			<ul class="list-xl">
				<li>
					<h4><?php echo $cek['BlogBaslik']?></h4>
					<p><?php echo $cek['BlogMetin']?></p>
				</li>
			</ul>
		</div>
	</div>
</div>
<a class="button button-default" href="YorumYap.php?ID=<?php echo $cek['BlogumID'];?>" style="margin-left: 19%; margin-top: 25px; margin-bottom: 25px;">YORUM YAP</a>
<?php include 'include/footer.php';?>