<?php 
include 'include/header.php';
?>
<!--index.php--->

<?php
include 'Admin/baglan.php';

$sorgu = $baglanti->prepare("SELECT * FROM blogum");

$sorgu->execute();

$cikti = $sorgu->fetchAll(PDO::FETCH_ASSOC);


?>
<!-- Preview section-->
<section class="section context-dark section-jumbotron bg-cover" style="background: url(images/bg-image.jpg) #151515; height:600px" >
  <div class="panel-left"><a class="brand" href="index.php"><img class="brand-logo-dark" src="" alt="" width="232" height="67"><img class="brand-logo-light" src="logo/logo.png" alt="" width="86" height="104"></a>
   
  </div>
  <div class="section-fullheight">
    <div class="section-fullheight-inner section-md text-center text-lg-left">
      <div class="container">
        <div class="row justify-content-center justify-content-lg-start">
          <div class="col-md-10 offset-lg-1 col-lg-8 offset-xl-1 col-xl-9 offset-xxl-2 col-xxl-7">
            <div class="jumbotron-custom-1">
              
             
              <div class="title">Blog Sitesi</div><br><br><br><br>
              <p class="big-8 text-white" style="font-size:34px;">YAZILIM &TEKNOLOJİ</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <ul class="project-list">
    <li class="bg-image" style="background-image: url(./resim/hakkimizda.jpg)"><a href="hakkımızda.php">Hakkımızda</a></li>
  </ul>
</section>
</section>
<!-- Portfolio-->
<section class="section section-lg bg-default section-lined">
  <div class="container container-lined">
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4"></div>
      <div class="col-md-4"></div>
    </div>
  </div>

  <!-- Created -->
  <a name="blog"></a>
  

  <div class="container container-custom-width">
    <h3 class="text-center">Bloglarım</h3>
    <div class="row row-custom-width row-30 row-xxl-100 row-flex">
      <?php 
      foreach ($cikti as $row) { ?>
        <div class="col-sm-6 col-lg-4 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
          <div class="project-grid" style="background-image: url('./resim/<?php echo $row['Resim'];?>'); width: 50px; ">
            <div class="inner"><img width="100px" src="./resim/<?php echo $row['Resim'];?>" alt="">
              <h5 class="title text-capitalize font-weight-medium"><a href="#"><?php echo $row['BlogBaslik']; ?></a></h5>
              <p class="font-weight-regular exeption"><?php echo $row['BlogOnizleme']; ?></p><a class="button button-default" href="BlogGoruntule.php?ID=<?php echo $row['BlogumID'];?>">GÖRÜNTÜLE</a>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
    <div class="button-wrap-1 text-center"><a class="button button-default" href="BloglariGoruntule.php">TÜM BLOGLARI GÖRÜNTÜLE</a></div>
  </div>

  <!-- END -->
</section>
<?php include 'include/footer.php';?>