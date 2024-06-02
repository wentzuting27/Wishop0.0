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
 

              <li class="dropdown"><a href="../profile/Profile_settings.php"><img src="', $_SESSION["user_avatar"], '" class="nav-photo"></a>
                <ul>
                  <li><a style="color:#FFF;font-weight: 600;margin-bottom: 0px;">', $_SESSION["user_name"], '</a></li>
                  <hr>';
                  if(isset($_SESSION["user_shop_id"])){
                    echo'
                    <li><a href="shop.php?shop_id=', $_SESSION['user_shop_id'] . '" style="font-weight: 600;">我的賣場</a></li>';
                  }
                  if($_SESSION['permissions']==2){
                    echo'
                    <li><a href="Report_review.php" style="font-weight: 600;">檢舉審核</a></li>';
                  }
                    echo'
                    <li><a href="../profile/Wishlist.php" style="font-weight: 600;">收藏清單</a></li>
                    <li><a href="../profile/Purchase_history.php" style="font-weight: 600;">購買紀錄</a></li>
                    <li><a href="logout.php" style="font-weight: 600;">登出&nbsp;<i class="fa-solid fa-right-from-bracket"></i></a></li>';
                  
                echo '  
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
              <a class="nav-link" href="#day-2" role="tab" data-bs-toggle="tab"><i
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
              <table> 
                <tr style="border-bottom: 3px solid #979797;" align="center">
                <td><b>商品團體</b></td>
                <td><b>檢舉人</b></td>
                <td><b>檢舉類型</b></td>
                <td><b>檢舉理由</b></td>
                <td><b>檢舉時間</b></td>
                <td><b>審核時間</b></td>
                <td><b>審核狀態</b></td>
                
                </tr>
              <?php
                $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');
                $sql = "SELECT *
                FROM report r
                NATURAL JOIN commodity_group
                WHERE r.report_results != 3
                -- 審核結果不等於待審核
                ORDER BY r.review_time DESC;
                -- 從最新的審核時間開始顯示
                ";
                $result = mysqli_query($link, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                  echo "
                  <tr style='border-bottom: 3px dashed #979797;' align='center'>
                  <td><a href='../lisa/InnerPage.php?commodity_group_id=",$row['commodity_group_id'],"' target='_blank'>",$row['commodity_group_name'],"</a></td>
                      <td>@",$row['account'],"</td>
                      <td>";                      
                      switch ($row["report_type"]) {
                        case 1:
                            echo "酒類 / 菸類商品";
                            break;
                        case 2:
                            echo "武器 / 彈藥 / 軍事用品";
                            break;
                        case 3:
                            echo "藥品、醫療器材";
                            break;
                        case 4:
                            echo "此商品可能令人感到不適或違反善良風俗";
                            break;
                        case 5:
                            echo "活體動物、保育動物及其製品";
                            break;
                        case 6:
                            echo "仿冒品";
                            break;
                        case 7:
                            echo "濫用文字誤導搜尋";
                            break;
                        case 8:
                            echo "重覆刊登";
                            break;
                        case 9:
                            echo "複製他人商品圖文";
                            break;
                        case 10:
                            echo "其他";
                            break;
                        default:
                            echo "無";
                    }
                    echo "</td>
                      <td style='width: 30%; padding: 20px 20px;'>",$row['report_why'],"</td>
                      <td>",$row['report_time'],"</td>
                      <td>",$row['review_time'],"</td>
                      <td>";                      
                      switch ($row["report_results"]) {
                        case 1:
                            echo "成功";
                            break;
                        case 2:
                            echo "失敗";
                            break;
                        default:
                            echo "無";
                    }
                    echo "</td>
                      </tr>";
                  };
                 
              ?>
            </table>              
                


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