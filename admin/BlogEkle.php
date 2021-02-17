
<?php include 'giriskontrol.php'?>
<?php include 'header.php'?>

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

				<form action="blogislem.php" method="POST" enctype="multipart/form-data">
					<h6 class="heading-small text-muted mb-4">Blog Ekleme Seçenekleri</h6>
					<div class="pl-lg-4">
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group focused">
									<label class="form-control-label" for="input-username">Blog Başlığı</label>
									<input type="text" name="blogbasligi" id="input-username" class="form-control form-control-alternative" placeholder="Blog Başlığı">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label class="form-control-label" for="input-email">Blog Ön İzlemesi</label>
									<input type="text" id="input-username" name="blogonizleme" class="form-control form-control-alternative" placeholder="Blog Ön İzlemesi">
									
								</div>
							</div>
							<div class="col-lg-8">
								<div class="form-group focused">
									<label class="form-control-label" for="input-last-name">MAKALE RESMİ EKLE</label><br>
									<input type="file"  name="fuResim">

								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<div class="form-group focused">
									<label class="form-control-label" for="input-last-name">Blog Açıklama</label>
									<textarea type="text" id="ckeditor" name="txtOzellik"></textarea> 
									
								</div>
							</div>
							
							
						</div>
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group focused">
									<input type="submit" class="btn btn-success btn-fill mb-3" name="btnEkle" value="EKLE">

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