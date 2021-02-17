<?php include 'giriskontrol.php'?>
<?php include 'header.php'?>
<!--YORUM LİSTELE-->
<div class="col" style="margin-top: 25px;">
	<div class="card bg-default shadow">
		<div class="card-header bg-transparent border-0">
			<h3 class="text-white mb-0">Yorumlar</h3>
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
								<th>Bloğum Resmi</th>
								<th>Ad</th>
								<th>Soyad</th>
								<th>İşlem Seçin</th>
							</tr>
						</thead>
						<tbody>
							
							<?php

							include 'baglan.php';

							$sorgu = $baglanti->prepare("SELECT * FROM yorum");

							$sorgu->execute();

							$cikti = $sorgu->fetchAll(PDO::FETCH_ASSOC);

							foreach ($cikti as $row) { ?>

								<tr>
									<td><?php echo $row["YorumID"]; ?></td>
									<td>
										<?php

										$sorgu2 = $baglanti->prepare("SELECT * FROM blogum where BlogumID=:id");

										$sorgu2->execute(array(
											"id" => $row["BlogumID"]
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
									<td><?php echo $row["Ad"]; ?></td>
									<td><?php echo $row["Soyad"]; ?></td>
									<td>
										<a href="YorumGoruntule.php?ID=<?php echo $row["YorumID"]; ?>" class="btn btn-primary btn-fill ml-3 ">GÖRÜNTÜLE</a>
										<a class="btn btn-danger btn-fill ml-3" href="yorumsil.php?ID=<?php echo $row["YorumID"]; ?>">
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