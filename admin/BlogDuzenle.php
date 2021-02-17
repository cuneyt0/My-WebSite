

<!-- Blogdüzenle.php-->
<?php include 'giriskontrol.php'?>
<?php include 'header.php'?>

<?php

$id = $_GET['ID'];

include 'baglan.php';

$sorgu = $baglanti->prepare("SELECT * FROM blogum where BlogumID=:id");

$sorgu->execute(array(
	"id" => $id
));

$cek = $sorgu->fetch(PDO::FETCH_ASSOC);

?>

<div class="row">
	<div class="col-xl-8 order-xl-1">
		<div class="card bg-secondary shadow">
			<div class="card-header bg-white border-0">
				<div class="row align-items-center">
					<div class="col-8">
						<h3 class="mb-0">Blog Ekle</h3>
					</div>
				</div>
			</div>
			<div class="card-body">

				<form  enctype="multipart/form-data" action="blogislem.php" method="post">
					<input type="hidden" name="ID" value="<?php echo $cek['BlogumID']; ?>">
					<h6 class="heading-small text-muted mb-4">Blog Ekleme Seçenekleri</h6>
					<div class="pl-lg-4">
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group focused">
									<label class="form-control-label" for="input-username">Blog Başlığı</label>
									<input type="text" name="blogbasligi" id="input-username" class="form-control form-control-alternative" placeholder="Blog Başlığı" value="<?php echo $cek['BlogBaslik'];?>">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label class="form-control-label" for="input-email">Blog Ön İzlemesi</label>
									<input type="text" id="input-username" name="blogonizleme" class="form-control form-control-alternative" placeholder="Blog Ön İzlemesi" value="<?php echo $cek['BlogOnizleme'];?>">
									
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group focused">
									<label class="form-control-label" for="input-last-name">Blog Açıklama</label>
									<textarea type="text" id="ckeditor" name="txtOzellik"><?php echo $cek['BlogMetin'];?></textarea> 
									
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group focused">
									<label class="form-control-label" for="input-last-name">Resim</label><br>
									<p>Düzenleme yaparken resim seçin yoksa yok olarak gözükücektir..</p>
									<input type="file"  name="fuResim">
									<?php
									if ($cek['Resim'] == "") {
										echo "Yok";
									} else {
										?>
										<img src="../resim/<?php echo $cek['Resim'] ?>" width="150px" />
										<?php
									}
									?>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group focused">
									<input type="submit" class="btn btn-success btn-fill mb-3" name="btnGuncelle" value="KAYDET">
									<a href="./BlogListele.php" class="btn btn-primary btn-fill mb-3" >Geri Dön</a>

								</div>
							</div>
						</div>
					</div>


					
				</form>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	CKEDITOR.replace('ckeditor');
</script>
<?php include 'footer.php'?>