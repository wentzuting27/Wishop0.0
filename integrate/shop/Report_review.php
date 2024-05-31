<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>檢舉審核</title>
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
  <script src="https://kit.fontawesome.com/ed695e7084.js" crossorigin="anonymous"></script>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

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

      <h1 class="logo me-auto"><a href="../index/index.php">WISHOP</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="../index/index.php">首頁</a></li>
          <li><a href="../index/portfolio.php">購物</a></li>
          <li><a href="../index/groupshop.php">團購</a></li>
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
                  <li><a href="../index/logout.php" style="font-weight: 600;">登出&nbsp;<i class="fa-solid fa-right-from-bracket"></i></a></li>
                </ul>
              </li>
              ';
          } else {
            echo "<a href='../index/login.php' class='getstarted' style='color: white;'>登入</a>";
          }
          ?>


          <!-- <li><a href="contact.php">Contact</a></li> -->

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>


    </div>
  </header><!-- End Header -->


  <main id="main">

    <!-- ======= shop_group Section ======= -->
    <section id="shop_group" class="shop_group" style="padding-top: 90px;">
      <div class="container">

        <!-- ======= Schedule Section ======= -->
        <section id="schedule" class="section-with-bg">


          <div class="flex-container">
            <!-- Section Title -->
            <div class="section-title" data-aos="fade-up">
              <h2><i class="fa-solid fa-circle-exclamation"></i>&nbsp;&nbsp;檢舉審核</h2>
            </div><!-- End Section Title -->
          </div><!-- End flex-container -->


          <ul class="nav nav-tabs" role="tablist" data-aos="fade-up" data-aos-delay="100">
            <li class="nav-item">
              <a class="nav-link active" href="#day-1" role="tab" data-bs-toggle="tab"><i
                  class="fa-solid fa-hourglass-half"></i>&nbsp;待審核</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#day-3" role="tab" data-bs-toggle="tab"><i
                  class="fa-solid fa-hourglass-end"></i>&nbsp;已審核</a>
            </li>
          </ul>

          <div class="tab-content row justify-content-center" data-aos="fade-up" data-aos-delay="200">

            <!-- Schdule Day 1 -->
            <div role="tabpanel" class="col-lg-12 tab-pane fade show active" id="day-1">

              <div class="row shop_group-container">

                <?php
                $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');
                $sql = "SELECT *
                FROM report r
                NATURAL JOIN commodity_group
                WHERE r.report_time = (
                    SELECT MAX(r2.report_time)
                    FROM report r2
                    WHERE r2.commodity_group_id = r.commodity_group_id
                )
                AND r.report_results = 3
                ORDER BY r.report_time DESC;";
                $result = mysqli_query($link, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                  echo '
                  <div class="col-lg-4 col-md-6 shop_group-item">
                    <div class="shop_group-wrap">
                    <a href="rr_details.php?commodity_group_id=' . $row['commodity_group_id'] . '" class="portfolio-details-lightbox"
                          data-glightbox="type: external" title="' . $row['commodity_group_name'] . '">
                      <figure>
                        <img src="', $row["commodity_group_bg"], '" alt="" width="100%" height="100%">
                      </figure></a>

                      <div class="shop_group-info">
                        <h4><a href="rr_details.php?commodity_group_id=' . $row['commodity_group_id'] . '" class="portfolio-details-lightbox"
                        data-glightbox="type: external" title="' . $row['commodity_group_name'] . '">', $row["commodity_group_name"], '</a></h4>
                        <div class="flex-container">
                          <p><i class="bi bi-clock-history"></i>&nbsp;', $row["report_time"], '</p>
                          <p><i class="fa-regular fa-user"></i>&nbsp;';

                  $sql_withgroup_num = "select *
                          from report
                          where commodity_group_id='{$row["commodity_group_id"]}'";
                  $result_withgroup_num = mysqli_query($link, $sql_withgroup_num);
                  echo mysqli_num_rows($result_withgroup_num);
                  echo '</p>
                        </div>
                      </div>
                    </div>
                  </div>

                  ';
                }
                ?>



              </div>

            </div>
            <!-- End Schdule Day 1 -->

            <!-- Schdule Day 2 -->
            <div role="tabpanel" class="col-lg-12  tab-pane fade" id="day-2">

              <div class="row">
              <?php
                $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');
                $sql = "SELECT *
                FROM report r
                NATURAL JOIN commodity_group
                WHERE r.report_time = (
                    SELECT MAX(r2.report_time)
                    FROM report r2
                    WHERE r2.commodity_group_id = r.commodity_group_id
                )
                AND r.report_results != 3
                ORDER BY r.report_time DESC;";
                $result = mysqli_query($link, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                  echo '
                  <div class="col-lg-12">
                    
                    <div class="evaluate_card2">
                      <table class="evaluate_table">
                        <tr>
                          <td width="5%"><img src="', $row["commodity_group_bg"], '" class="people_photo"></td>
                          <td width="60%">
                            <span><a href="rr_details.php?commodity_group_id=' . $row['commodity_group_id'] . '" class="portfolio-details-lightbox"
                            data-glightbox="type: external" title="' . $row['commodity_group_name'] . '"></span><br>
                            <p>東京-排球少年×三麗鷗聯名快閃店</p>
                          </td>
                          <td width="35%" style="vertical-align: top;" align="right"><i class="fa-solid fa-wand-sparkles" style="font-size: 20px;"></i><i class="fa-solid fa-wand-sparkles" style="font-size: 20px;"></i><i class="fa-solid fa-wand-sparkles" style="font-size: 20px;"></i><i class="fa-solid fa-wand-sparkles" style="font-size: 20px;"></i><i class="fa-solid fa-wand-sparkles" style="font-size: 20px;"></i></td>
                        </tr>
                        <tr>
                          <td colspan="3">這次的代購經驗真是讓我非常滿意！商品包裝精美，完好無損地送達，而且速度快得令人驚訝。代購商的服務態度也非常好，及時回覆我的疑問並提供了專業的建議。下次有需要我一定會再次光顧！</td>
                        </tr>
                        <tr>
                          <td colspan="3"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://i.pinimg.com/564x/f5/fa/ad/f5faadb7550f067819e859b62c3dd784.jpg" class="goods_photo"><img src="https://i.pinimg.com/236x/2a/c8/b6/2ac8b69c8f02d00e2a17fa0202cc68d5.jpg" class="goods_photo"><img src="https://i.pinimg.com/236x/6b/c3/a7/6bc3a791734a08b8428b99586cbda1bd.jpg" class="goods_photo"></td>
                        </tr>
                      </table>
                    </div>
                    
                  </div>';                }
                ?>


              </div>

            </div>
            <!-- End Schdule Day 2 -->


          </div>



        </section><!-- End Schedule Section -->


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