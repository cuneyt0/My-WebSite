
<!-- blogGoruntule.php-->


<?php include 'giriskontrol.php'?>
<?php include 'header.php'?>

<div class="col" style="margin-top: 25px;">
	<div class="card bg-default shadow">
		<div class="card-header bg-transparent border-0">
			<h3 class="text-white mb-0">Bloglarım</h3>
		</div>
		<?php
		if (isset($_GET['Durum'])) {
			if ($_GET['Durum'] == 1) { ?>
				<div class="alert alert-success">
					<button type="button" aria-hidden="true" class="close" data-dismiss="alert">
						<i class="nc-icon nc-simple-remove"></i>
					</button>
					<span>
						<b> Başarılı. </b> İşlem tamam</span>
					</div>
				<?php } else if ($_GET['Durum'] == 0) { ?>

					<div class="alert alert-danger">
						<button type="button" aria-hidden="true" class="close" data-dismiss="alert">
							<i class="nc-icon nc-simple-remove"></i>
						</button>
						<span>
							<b> Başarısız. </b> İşlem hatası</span>
						</div>

					<?php }
				}?>
				<div class="table-responsive">
					<table class="table align-items-center table-dark table-flush">
						<thead class="thead-dark">
							<tr>
								<th>ID</th>
								<th>Başlık</th>
								<th>Resim</th>
								<th>Tarih</th>
								<th>İşlem Seç</th>
							</tr>
						</thead>
						<tbody>

							<?php

							include 'baglan.php';

							$sorgu = $baglanti->prepare("SELECT * FROM blogum");

							$sorgu->execute();

							$cikti = $sorgu->fetchAll(PDO::FETCH_ASSOC);

							foreach ($cikti as $row) { ?>

								<tr>
									<td><?php echo $row["BlogumID"]; ?></td>
									<td><?php echo $row["BlogBaslik"]; ?></td>
									<td>
										<?php

										if ($row['Resim'] == "") {
											echo "Yok";
										}
										else{ ?>
											<img width="75" max-height="100" src="../resim/<?php echo $row["Resim"]; ?>">
										<?php }

										?>
									</td>
									<td><?php echo $row["BlogTarih"]; ?></td>
									<td>
										<a href="BlogGoruntule.php?ID=<?php echo $row["BlogumID"]; ?>" class="btn btn-primary btn-fill ml-3 ">GÖRÜNTÜLE</a>
										<a href="BlogDuzenle.php?ID=<?php echo $row["BlogumID"]; ?>" class="btn btn-warning btn-fill ml-3">DÜZENLE</a>
										<a class="btn btn-danger btn-fill ml-3" href="BlogSil.php?ID=<?php echo $row["BlogumID"]; ?>">
											SİL
										</a>
									</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>



		<?php include 'footer.php'?>