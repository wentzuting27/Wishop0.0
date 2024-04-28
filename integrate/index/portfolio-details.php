<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio Details - Sailor Bootstrap Template</title>
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

  <!-- icon -->
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
  <main id="main">


  

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">


              <?php
          if ($_GET['commodity_id'] != '') {
            $commodity_id = $_GET['commodity_id'];

          }


          $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');
          $sql = "SELECT 
                    cp.commodity_photo,

                    c.commodity_id,
                    c.commodity_name,
                    c.commodity_price,
                    c.c_original_product_link,
                    c.commodity_narrate,

                    s.shop_name,

                    cg.commodity_group_name,
                    cg.nation
                    
                FROM 
                    commodity c
                JOIN 
                    commodity_photo cp ON c.commodity_id = cp.commodity_id
                JOIN 
                    commodity_group cg ON c.commodity_group_id = cg.commodity_group_id
                JOIN 
                    shop s ON cg.shop_id = s.shop_id
                    
                    where c.commodity_id='$commodity_id'";


          $result = mysqli_query($link, $sql);

          if ($row = mysqli_fetch_assoc($result)) {
            $commodity_id = $row['commodity_id'];
            $commodity_name = $row['commodity_name'];
            $commodity_price = $row['commodity_price'];
            $c_original_product_link = $row['c_original_product_link'];
            $commodity_narrate = $row['commodity_narrate'];

            $commodity_photo = $row['commodity_photo'];

            $shop_name = $row['shop_name'];

            $commodity_group_name = $row['commodity_group_name'];
            $nation = $row['nation'];

          }

          if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="swiper-slide">';
                echo '<img src="' . $row['commodity_photo'] . '" style="width: 70%; height: auto; display: block; margin: 0 auto;" alt="">';
                echo '</div>';
            }
        }
        

          ?>


<!-- 圖片還有問題 -->
                <div class="swiper-slide">
                  <img src="<?php echo $commodity_photo; ?>"
                    style="width: 70%; height: auto; display: block; margin: 0 auto;" alt="">
                </div>

                

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>


          

          <div class="col-lg-4">

            <div class="portfolio-info">
              <h3>
                <?php echo $commodity_name; ?>
              </h3>

              <ul>
                <li><strong><i class="fa-solid fa-dollar-sign"></i>&nbsp;售價</strong>: <?php echo $commodity_price; ?>
                </li>
                <li><strong><i class="fa-solid fa-paperclip"></i>&nbsp;參考網址</strong>: <a
                    href="<?php echo $c_original_product_link; ?>" target="_blank">前往連結</a>
                </li>
              </ul>
              <p><?php echo $commodity_narrate; ?></p>

              <a type="button" href="#" class="btn btn-light-like" onclick="toggleHeartIcon(this)"><i id="heartIcon"
                  class="fa-regular fa-heart"></i>&nbsp;收藏</a>

              <script>
                function toggleHeartIcon(button) {
                  var heartIcon = document.getElementById('heartIcon');
                  if (heartIcon.classList.contains('fa-regular')) {
                    heartIcon.classList.remove('fa-regular');
                    heartIcon.classList.add('fa-solid');
                    button.style.backgroundColor = getComputedStyle(document.documentElement).getPropertyValue('--bs-btn-bg-solid');
                  } else {
                    heartIcon.classList.remove('fa-solid');
                    heartIcon.classList.add('fa-regular');
                    button.style.backgroundColor = getComputedStyle(document.documentElement).getPropertyValue('--bs-btn-bg-regular');
                  }
                }
              </script>


            </div>


            <style>
              .category {
                background: #b9b0c8;
                color: #fff;
                font-size: 14px;
                font-weight: bold;
                padding: 6px 14px;
                margin: 0;
                border-radius: 5px;
              }
            </style>
            <div class="portfolio-info">
              <h3><?php echo $commodity_group_name; ?></h3>
              <ul>
                <li><i class="fa-solid fa-user"></i>&nbsp;<strong><?php echo $shop_name; ?></strong>: <a href="../shop/shop.php"
                    target="_blank">三麗鷗快樂購</a></li>
                <li><i class="fa-solid fa-earth-asia"></i>&nbsp;<strong>國家</strong>: <?php echo $nation; ?></li>
                <li><i class="fa-solid fa-credit-card"></i>&nbsp;<strong>付款方式</strong>:</li>
                <li><i class="fa-solid fa-bars"></i>&nbsp;<strong>主題</strong>: 主題</li>
                <li><i class="fa-solid fa-tags"></i>&nbsp;<strong>標籤</strong>:
                  <span class="category">tag</span>
                  <span class="category">tag</span>
                </li>
              </ul>
              <hr>
              <div style="text-align: center;">
                <a type="button" href="../lisa/InnerPage.php" target="_blank" class="btn btn-light-more">前往團購購買</a>
              </div>
            </div>

            <div class="portfolio-description">
              <h2></h2>
              <p>

              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

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