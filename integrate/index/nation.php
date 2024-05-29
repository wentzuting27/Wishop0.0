<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>國家商品</title>
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
          <li class="dropdown"><a href="portfolio.php" class="active"><span>購物</span></a>
          </li>
          <li><a href="groupshop.php">團購</a></li>
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

  <style>
    /* 主體顏色設置 */
    .section-with-bg {
      padding: 20px;
    }

    /* 標籤導航樣式 */
    .nav-pills .nav-link {
      margin: 0 15px 15px 0;
      display: inline-block;
      padding: 10px 20px;
      font-size: 16px;
      line-height: 20px;
      color: #444444;
      border-radius: 4px;
      text-transform: uppercase;
      background: #fff;
      margin-bottom: 5px;
      transition: all 0.3s ease-in-out;
    }

    /* 激活狀態下的標籤樣式 */
    .nav-pills .nav-link.active,
    .nav-pills .nav-link.active:focus,
    .nav-pills .nav-link.active:hover {
      color: #ffffff;
      /* 激活狀態下的文字顏色 */
      background-color: #E9C9D6;
      /* 激活狀態下的背景顏色 */
    }

    /* 標籤內容樣式 */
    .tab-content {
      background-color: #ffffff;
      /* 標籤內容背景顏色 */
      padding: 20px;
      border-radius: 5px;
      /* 可以選擇是否設置圓角 */
      margin-top: 10px;
      /* 調整標籤內容與標籤之間的間距 */
    }

    mark {
      background-color: #E9C9D6;
      color: #FFF;
      border-radius: 20px;
      display: inline-block;
      line-height: 0.8;
      overflow: visible;
      padding: 0.5em 0.5em;
      margin-top: 5px;
      margin-bottom: 10px;
    }
  </style>

  <style>
    .img-fluid {
      object-fit: cover;
      width: 100%;
      height: 100%;
    }
  </style>


  <main id="main">

    <br>
    <br>
    <br>

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">




        <div style="text-align: center; color:#B0A5C6;">
          <h2><b><?php
          if ($_GET['nation'] != '') {
            $nation = $_GET['nation'];
            switch ($nation) {
              case 1:
                echo "日本";
                break;
              case 2:
                echo "韓國";
                break;
              case 3:
                echo "台灣";
                break;
              case 4:
                echo "法國";
                break;
              case 5:
                echo "美國";
                break;
              case 6:
                echo "義大利";
                break;
              case 7:
                echo "中國";
                break;
              case 8:
                echo "泰國";
                break;
              case 9:
                echo "英國";
                break;
              case 10:
                echo "其他";
                break;
              
            }
          }


          ?>
            </b></h2>
        </div>


        <section id="schedule" class="section-with-bg">

          <div class="row">
            <div class="col-lg-12">
              <ul class="nav nav-pills mb-3 d-flex justify-content-center" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                    type="button" role="tab" aria-controls="pills-home" aria-selected="true">最新</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
                    type="button" role="tab" aria-controls="pills-profile" aria-selected="false">最熱&nbsp;<i
                      class="fa-solid fa-fire"></i></button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-wish-tab" data-bs-toggle="pill" data-bs-target="#pills-wish"
                    type="button" role="tab" aria-controls="pills-wish" aria-selected="false">願望&nbsp;<i
                      class="fa-solid fa-wand-sparkles"></i></button>
                </li>
              </ul>
            </div>

          </div>


          <div class="tab-content" id="pills-tabContent">

            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

              <div class="row portfolio-container">


                <?php
                if (isset($_GET['nation']) && $_GET['nation'] != '') {
                  $topic = $_GET['nation'];
                }

                // 結單日期最晚
                $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');
                $sql = "SELECT * 
                          FROM commodity c
                          JOIN commodity_photo cp ON c.commodity_id = cp.commodity_id 
                          JOIN commodity_group cg ON c.commodity_group_id = cg.commodity_group_id
                          WHERE cg.nation = '$nation'
                          and (close_order_date > NOW() OR close_order_date is null)
                          GROUP BY c.commodity_id
                          ORDER BY cg.close_order_date DESC;";

                $result = mysqli_query($link, $sql);

                if ($result) {
                  while ($row = mysqli_fetch_assoc($result)) {
                    echo '
                          <div class="col-lg-4 col-md-6 portfolio-item wow fadeInUp">
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
                          </div>';
                  }
                }
                ?>









              </div>

            </div>

            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
              <div class="row portfolio-container">


                <?php
                if (isset($_GET['nation']) && $_GET['nation'] != '') {
                  $topic = $_GET['nation'];
                }

                $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');
                $sql2 = "SELECT * , sum(order_details_num)
                        FROM commodity c
                        JOIN commodity_photo cp ON c.commodity_id = cp.commodity_id 
                        JOIN commodity_group cg ON c.commodity_group_id = cg.commodity_group_id
                        LEFT JOIN order_details od ON od.commodity_id = c.commodity_id 
                        WHERE cg.nation = '$nation'
                        and (close_order_date > NOW() OR close_order_date is null)
                        GROUP BY c.commodity_id
                        ORDER BY sum(order_details_num) DESC;";

                $result2 = mysqli_query($link, $sql2);

                if ($result2) {
                  while ($row = mysqli_fetch_assoc($result2)) {
                    echo '
                      <div class="col-lg-4 col-md-6 portfolio-item wow fadeInUp">
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
                      </div>';
                  }
                }
                ?>


              </div>

            </div>

            <div class="tab-pane fade" id="pills-wish" role="tabpanel" aria-labelledby="pills-wish-tab">

              <div class="col-lg-4 col-md-6 portfolio-item  wow fadeInUp">
                <div class="portfolio-wrap">

                  <a href="portfolio-details.php" class="portfolio-details-lightbox" data-glightbox="type: external"
                    title="Portfolio Details">
                    <figure>
                      <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                    </figure>
                  </a>

                  <div class="portfolio-info">
                    <h4><a href="portfolio-details.php" class="portfolio-details-lightbox"
                        data-glightbox="type: external" title="Portfolio Details">願望</a></h4>
                    <p><i class="fa-solid fa-dollar-sign">&nbsp;100</i></p>
                  </div>

                </div>
              </div>

            </div>


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