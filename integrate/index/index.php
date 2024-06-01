<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>WISHOP 首頁</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo2.png" rel="icon">
  <link href="assets/img/logo2.png" rel="apple-touch-icon">

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

  <!-- Icon -->
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

      <h1 class="logo me-auto"><a href="index.php"></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php" class="active">首頁</a></li>
          <li><a href="portfolio.php">購物</a></li>
          <li><a href="groupshop.php">團購</a></li>
          <li><a href="../wish/wish.php">許願池</a></li>


          <!-- <li><a href="pricing.php">Pricing</a></li>
          <li><a href="blog.php">Blog</a></li> -->
          <!-- <li><a href="contact.php">Contact</a></li> -->
          <?php
          if (!empty($_SESSION['user_name'])) {
            echo '
 

              <li class="dropdown"><a href="../profile/Profile_settings.php"><img src="', $_SESSION["user_avatar"], '" class="nav-photo"></a>
                <ul>
                  <li><a style="color:#FFF;font-weight: 600;margin-bottom: 0px;">', $_SESSION["user_name"], '</a></li>
                  <hr>';
                  if($_SESSION['permissions']==2){
                    echo'
                    <li><a href="../shop/Report_review.php" style="font-weight: 600;">檢舉審核</a></li>
                    <li><a href="../profile/Wishlist.php" style="font-weight: 600;">收藏清單</a></li>
                    <li><a href="../profile/Purchase_history.php" style="font-weight: 600;">購買紀錄</a></li>
                    <li><a href="logout.php" style="font-weight: 600;">登出&nbsp;<i class="fa-solid fa-right-from-bracket"></i></a></li>';
                  }else{
                    echo'
                    <li><a href="../profile/Wishlist.php" style="font-weight: 600;">收藏清單</a></li>
                    <li><a href="../profile/Purchase_history.php" style="font-weight: 600;">購買紀錄</a></li>
                    <li><a href="logout.php" style="font-weight: 600;">登出&nbsp;<i class="fa-solid fa-right-from-bracket"></i></a></li>';
                  }
                echo '  
                </ul>
              </li>
              ';
          } else {
            echo "<a href='login.php' class='getstarted' style='color: white;'>登入</a>";
          }
          ?>


        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="2800" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active"
          style="background-image: url(https://images.unsplash.com/photo-1516633886686-2a2ffb459273?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">WISHOP</h2>
              <p class="animate__animated animate__fadeInUp">WISH AND BUY U WANT<br>許願代購</p>
              <a href="portfolio.php"
                class="btn-get-started animate__animated animate__fadeInUp scrollto"><b>開始購物</b></a>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item"
          style="background-image: url(https://i.pinimg.com/originals/27/b0/41/27b04138dc48c4d5d433f2c5839203c8.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">許願池</h2>
              <p class="animate__animated animate__fadeInUp">想要什麼卻買不到嗎？歡迎許願讓賣家們看到吧！</p>
              <a href="/integrate/wish/wish.php"
                class="btn-get-started animate__animated animate__fadeInUp scrollto"><b>去許願</b></a>
            </div>
          </div>
        </div>


        <?php
        $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');

        $sql = "SELECT commodity_group.*, shop.shop_name, COUNT(*) 
            FROM commodity_group
            INNER JOIN shop ON commodity_group.shop_id = shop.shop_id
           
            INNER JOIN withgroup ON commodity_group.commodity_group_id = withgroup.commodity_group_id
            WHERE commodity_group_state <> 2 AND close_order_date > NOW() and close_order_date is not null
            GROUP BY commodity_group.commodity_group_id, shop.shop_name
            ORDER BY COUNT(*) DESC
            LIMIT 5";

        $result = mysqli_query($link, $sql);

        if ($result) {
          while ($row = mysqli_fetch_assoc($result)) {



            echo '
            <!-- Slide 熱門商品 -->
            <div class="carousel-item" style="background-image: url(' . $row['commodity_group_bg'] . ')">
              <div class="carousel-container">

                <div style="padding:40px; text-align:center;" class="col-lg-7">
                    <h5 class="animate__animated animate__fadeInDown" style="color:#FFF"><i class="fa-solid fa-fire"></i>&nbsp;熱門團購</h5>
                    <h2 class="animate__animated animate__fadeInDown">' . $row['commodity_group_name'] . '</h2>
                    <p class="animate__animated animate__fadeInUp"><i class="bi bi-clock"></i>&nbsp;截單日期：' . $row['close_order_date'] . '</p>
                </div>

                <div class="container"  class="col-lg-5" style="padding-right:100px;">
                  <p class="animate__animated animate__fadeInUp">' . $row['commodity_group_narrate'] . ' ...</p>
                  <a href="../lisa/InnerPage.php?commodity_group_id=' . $row['commodity_group_id'] . '" class="btn-get-started animate__animated animate__fadeInUp scrollto"><b>前往團購</b></a>
                </div>
              
              </div>
          </div>';
          }
        } else {
          echo "查詢失敗：" . mysqli_error($link);
        }

        mysqli_close($link);
        ?>



      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->


  <style>
    .testimonial-item img {
      object-fit: cover;
      width: 100%;
      height: 100%;
    }

    .tags-container {
      display: flex;
      overflow-x: auto;
      padding: 5px 0;
      /* 根據需要添加其他樣式 */
    }
  </style>

  <main id="main">

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="seven">
          <h1>推薦商品</h1>
        </div>



        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-1">日本</li>
              <li data-filter=".filter-2">韓國</li>
              <li data-filter=".filter-3">台灣</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <style>
            .img-fluid {
              object-fit: cover;
              width: 100%;
              height: 100%;
            }
          </style>


          <?php
          $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');

          $sql3 = "SELECT c.*, cg.*, cp.commodity_photo 
          FROM commodity c 
          JOIN commodity_group cg ON c.commodity_group_id = cg.commodity_group_id 
          JOIN commodity_photo cp ON c.commodity_id = cp.commodity_id 
          GROUP BY c.commodity_id
          ORDER BY RAND() 
          LIMIT 12";

          $result3 = mysqli_query($link, $sql3);

          while ($row = mysqli_fetch_assoc($result3)) {
            echo '
              <div class="col-lg-4 col-md-6 portfolio-item filter-' . $row['nation'] . ' wow fadeInUp">
                  <div class="portfolio-wrap">
                      <a href="portfolio-details.php?commodity_id=' . $row['commodity_id'] . '" class="portfolio-details-lightbox"
                          data-glightbox="type: external" title="' . $row['commodity_name'] . '">
                          <figure>
                              <img src="' . $row['commodity_photo'] . '" class="img-fluid" alt="">
                          </figure>
                      </a>
                      <div class="portfolio-info">
                          <h4>' . $row['commodity_name'] . '</h4>
                          <p><i class="fa-solid fa-dollar-sign">&nbsp;' . $row['commodity_price'] . '</i></p>
                      </div>
                  </div>
              </div>
              ';
          }
          ?>




        </div>

        <div style="text-align: center;">
          <a type="button" href="portfolio.php" class="btn btn-light-more">More</a>
        </div>

      </div>
    </section><!-- End Portfolio Section -->




    <!-- ======= Team Section ======= -->
    <section id="team" class="team">

      <div class="container" data-aos="fade-up">

        <div class="seven">
          <h1>推薦店家</h1>
        </div>



        <div class="row gy-4 mt-3">

          <?php
          $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');

          $sql2 = "SELECT * FROM shop ORDER BY RAND() LIMIT 4";

          $result2 = mysqli_query($link, $sql2);
          ?>

          <div class="container">
            <div class="row">
              <?php while ($row = mysqli_fetch_assoc($result2)): ?>
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-2 mb-2" data-aos="fade-up"
                  data-aos-delay="100">
                  <div class="member" style="width: 300px;">
                    <div class="member-img">
                      <img src="<?php echo $row['shop_avatar']; ?>" class="img-fluid" alt="">
                      <div class="social">
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-linkedin"></i></a>
                      </div>
                    </div>
                    <div class="member-info">
                      <a href="../shop/shop.php?shop_id=<?php echo $row['shop_id']; ?>">
                        <h4><?php echo $row['shop_name']; ?></h4>
                      </a>
                      <span></span>
                      <p><?php echo $row['shop_narrat']; ?></p>
                    </div>
                  </div>
                </div>
              <?php endwhile; ?>
            </div>
          </div>

          <?php mysqli_close($link); ?>



          <!-- <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="https://i.pinimg.com/564x/92/19/18/9219184f7722f46823d5334e0355230c.jpg" class="img-fluid"
                  alt="">
                <div class="social">
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <a href="../shop/shop.php">
                  <h4>三麗鷗快樂購</h4>
                </a>
                <span>三麗鷗</span>
                <p>
                  如果你對可愛、療癒的三麗鷗商品著迷，但由於地理或其他原因無法直接購買，我可以幫助你實現這個夢想🩷！
                </p>
              </div>
            </div>
          </div> -->








        </div>

      </div>

    </section><!-- End Team Section -->




















  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>WISHOP</h3>
              <p>
                2024<br>
                Taiwan FJU <br><br>
                <!-- <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br> -->
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>導覽列</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">首頁</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">購物</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">團購</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">許願池</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>新手教學</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">#</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>聯繫客服</h4>
            <p>0912345678</p>
            
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
       
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/sailor-free-bootstrap-theme/ -->
       
      </div>
    </div>
  </footer><!-- End Footer -->

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