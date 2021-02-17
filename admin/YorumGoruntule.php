<?php include 'giriskontrol.php';?>
<!-- YORUM GÖRÜNTÜLE-->
<?php include 'header.php'; ?>

<?php

$id = $_GET['ID'];

include 'baglan.php';

$sorgu = $baglanti->prepare("SELECT * FROM yorum where YorumID=:id");

$sorgu->execute(array(
	"id" => $id
));

$cek = $sorgu->fetch(PDO::FETCH_ASSOC);

?>

<div class="col" style="margin-top: 25px;">
	<div class="card bg-default shadow">
		<div class="card-header bg-transparent border-0">
			<h3 class="text-white mb-0">Mesaj Detayları</h3>
		</div>
		<div class="table-responsive">
			<table class="table align-items-center table-dark table-flush">
				<thead class="thead-dark">
					<tr>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="150">Yorum kodu</td>
						<td width="1">:</td>
						<td><?php echo $cek["YorumID"]; ?></td>
					</tr>

					<tr>
						<td width="150">Blog Resmi</td>
						<td width="1">:</td>
						<td>
							<?php

							$sorgu2 = $baglanti->prepare("SELECT * FROM blogum where BlogumID=:id");

							$sorgu2->execute(array(
								"id" => $cek["BlogumID"]
							));

							$resim = $sorgu2->fetch(PDO::FETCH_ASSOC);


							if ($resim['Resim'] == "") {
								echo "Yok";
							}
							else{ ?>
								<img width="75" max-height="100" src="../resim/<?php echo $resim["Resim"]; ?>">
							<?php }

							?>
							

						</td>
					</tr>

					<tr>
						<td width="150">Ad</td>
						<td width="1">:</td>
						<td><?php echo $cek["Ad"]; ?></td>
					</tr>

					<tr>
						<td width="150">Soyad</td>
						<td width="1">:</td>
						<td><?php echo $cek["Soyad"]; ?></td>
					</tr>

					<tr>
						<td width="150">Email</td>
						<td width="1">:</td>
						<td><?php echo $cek["Email"]; ?></td>
					</tr>

					<tr>
						<td width="150">Mesaj</td>
						<td width="1">:</td>
						<td><?php echo $cek["Mesaj"]; ?></td>
					</tr>

					<tr>
						<td width="150">Tarih</td>
						<td width="1">:</td>
						<td><?php echo $cek["Tarih"]; ?></td>
					</tr>

					
				</tbody>
			</table>
			<div class="col text-center" style="margin-bottom: 10px;">
				<a href="./YorumListele.php" class="btn btn-primary btn-fill col-md-3">Geri Dön</a>
			</div>
		</div>
	</div>
</div>




<?php include 'footer.php'; ?>