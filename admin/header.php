<!DOCTYPE html>
<!-- Giriş kontrol.php-->
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Yönetim Paneli
  </title>
  <!-- Favicon -->
  <link href="./assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="./assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="./assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="./assets/css/argon-dashboard.css?v=1.1.2" rel="stylesheet" />
  <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
  <script>
                        CKEDITOR.replace( 'ckeditor' );
                </script>
  
</head>

<body>
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="./index.php">
        <img src="../logo/logo.png" class="navbar-brand-img" alt="...">
      </a>

      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <ul class="navbar-nav">
          <li class="nav-item <?php if ((basename($_SERVER['PHP_SELF'])=='index.php')){echo 'active';}?>">
            <a class="nav-link  <?php if ((basename($_SERVER['PHP_SELF'])=='index.php')){echo 'active';}?> " href="./index.php">
              <i class="ni ni-tv-2 text-primary"></i> Ana Sayfa
            </a>
          </li>
          <li class="nav-item <?php if ((basename($_SERVER['PHP_SELF'])=='BlogEkle.php')){echo 'active';}?>">
            <a class="nav-link <?php if ((basename($_SERVER['PHP_SELF'])=='BlogEkle.php')){echo 'active';}?>" href="./BlogEkle.php">
              <i class="ni ni-planet text-blue"></i> Blog Ekle
            </a>
          </li>
          <li class="nav-item <?php if ((basename($_SERVER['PHP_SELF'])=='BlogListele.php')){echo 'active';}?>">
            <a class="nav-link <?php if ((basename($_SERVER['PHP_SELF'])=='BlogListele.php')){echo 'active';}?>" href="./BlogListele.php">
              <i class="ni ni-pin-3 text-orange"></i> Blog Listesi
            </a>
          </li>
          <li class="nav-item <?php if ((basename($_SERVER['PHP_SELF'])=='YorumListele.php')){echo 'active';}?>">
            <a class="nav-link <?php if ((basename($_SERVER['PHP_SELF'])=='YorumListele.php')){echo 'active';}?>" href="./YorumListele.php">
              <i class="ni ni-single-02 text-yellow"></i> Yorum Listesi
            </a>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item active active-pro">
            <a class="nav-link" href="../index.php">
              <i class="ni ni-send text-dark"></i> Blog Sitem
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="main-content">
    <!-- Navbar -->
    <form action="kontrol.php" method="POST">
      <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
        <div class="container-fluid">
          <!-- Brand -->
          <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="./index.php">Yönetim Paneli</a>
          <!-- User -->
          <ul class="navbar-nav align-items-center d-none d-md-flex">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="" src="">
                  </span>
                  <div class="media-body ml-2 d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">Cüneyt AYKAÇ</span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                <div class=" dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Merhaba!</h6>
                </div>

                <div class="dropdown-divider"></div>
                <a href="" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <input type="submit" name="btnCikis" value="Çıkış" style="background-color: white; border:0; width:100px;">
                </a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </form>
    <!-- End Navbar -->
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
          
        </div>
      </div>
    </div>
