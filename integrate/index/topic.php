<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>主題商品</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


  <!--icon-->
  <script src="https://kit.fontawesome.com/ca83b2e10a.js" crossorigin="anonymous"></script>

  <!-- =======================================================
  * Template Name: Sailor
  * Template URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
<?php session_start(); ?>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php">WISHOP</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php">首頁</a></li>
          <li class="dropdown"><a href="portfolio.php"><span>購物</span></a>
          </li>
          <li><a href="groupshop.php" class="active">團購</a></li>
          <li><a href="../wish/wish.php">許願池</a></li>

          <?php
          if (!empty($_SESSION['user_name'])) {
            echo '
              <li><a href="#"><i class="fa-solid fa-bell"></i></a></li>

              <li class="dropdown"><a href="../profile/Profile_settings.php"><img src="', $_SESSION["user_avatar"], '" class="nav-photo"></a>
                <ul>
                  <li><a style="color:#FFF;font-weight: 600;margin-bottom: 0px;">', $_SESSION["user_name"], '</a></li>
                  <hr>
                  <li><a href="../profile/Wishlist.php" style="font-weight: 600;">收藏清單</a></li>
                  <li><a href="../profile/Purchase_history.php" style="font-weight: 600;">購買紀錄</a></li>
                  <li><a href="logout.php" style="font-weight: 600;">登出&nbsp;<i class="fa-solid fa-right-from-bracket"></i></a></li>
                </ul>
              </li>
              ';
          } else {
            echo "<a href='login.php' class='getstarted' style='color: white;'>登入</a>";
          }
          ?>


          <!-- <li><a href="contact.php">Contact</a></li> -->

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>


    </div>
  </header><!-- End Header -->

  <main id="main">

  <br>
  <br>
  <br>

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="seven">
          <h1>#主題</h1>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">最新</li>
              <li data-filter=".filter-follow">最熱</li>
              <li data-filter=".filter-wish">願望</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item  wow fadeInUp">
            <div class="portfolio-wrap">

              <a href="portfolio-details.php" class="portfolio-details-lightbox" data-glightbox="type: external"
                title="Portfolio Details">
                <figure>
                  <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                </figure>
              </a>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.php" class="portfolio-details-lightbox" data-glightbox="type: external"
                    title="Portfolio Details">商品1</a></h4>
                <p><i class="fa-solid fa-dollar-sign">&nbsp;100</i></p>
              </div>


            </div>
          </div>

          
        </div>

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->

  
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>



</body>

</html>