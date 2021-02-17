<!-- bloggoruntule.php-->

<?php include 'giriskontrol.php';?>

<?php include 'header.php'; ?>

<?php

$id = $_GET['ID'];

include 'baglan.php';

$sorgu = $baglanti->prepare("SELECT * FROM blogum where BlogumID=:id");

$sorgu->execute(array(
	"id" => $id
));

$cek = $sorgu->fetch(PDO::FETCH_ASSOC);

?>

<div class="col" style="margin-top: 25px;">
	<div class="card bg-default shadow">
		<div class="card-header bg-transparent border-0">
			<h3 class="text-white mb-0">Blog Görüntüleme</h3>
		</div>
		<div class="table-responsive">
			<table class="table align-items-center table-dark table-flush">
				<thead class="thead-dark">
					<tr>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="150">Blog kodu</td>
						<td width="1">:</td>
						<td><?php echo $cek["BlogumID"]; ?></td>
					</tr>

					<tr>
						<td width="150">Blog başlık</td>
						<td width="1">:</td>
						<td><?php echo $cek["BlogBaslik"]; ?></td>
					</tr>

					<tr>
						<td width="150">Blog Ön izleme</td>
						<td width="1">:</td>
						<td><?php echo $cek["BlogOnizleme"]; ?></td>
					</tr>

					<tr>
						<td width="150">Blog Metin</td>
						<td width="1">:</td>
						<td><?php echo substr($cek["BlogMetin"],0,250); ?><br>
							<?php echo substr($cek["BlogMetin"],250,250); ?><br>
							<?php echo substr($cek["BlogMetin"],500,250); ?><br>
							<?php echo substr($cek["BlogMetin"],750,200); ?><br>
							<?php echo substr($cek["BlogMetin"],950,250); ?><br>
							<?php echo substr($cek["BlogMetin"],1200,250); ?><br>
						</td>
					</tr>

					<tr>
						<td width="150">Tarih</td>
						<td width="1">:</td>
						<td><?php echo $cek["BlogTarih"]; ?></td>
					</tr>

					<tr>
						<td width="150">Resim</td>
						<td width="1">:</td>
						<td>
							<?php

							if ($cek['Resim'] == "") {
								echo "Yok";
							}  else{ ?>
								<img width="150"  src="../resim/<?php echo $cek["Resim"]; ?>">
							<?php }

							?>
						</td>
					</tr>
				</tbody>
			</table>
			<div class="col text-center" style="margin-bottom: 10px;">
				<a href="./BlogListele.php" class="btn btn-primary btn-fill col-md-3">Geri Dön</a>
			</div>
		</div>
	</div>
</div>




<?php include 'footer.php'; ?>