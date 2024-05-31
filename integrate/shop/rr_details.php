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
        <div class="tab-content row justify-content-center" data-aos="fade-up" data-aos-delay="200">

          <!-- 5star -->
          <div role="tabpanel" class="col-lg-12 tab-pane fade show active" id="5star" style="padding: 50px 0px">
          <div class="flex-container">
            <!-- Section Title -->



                <?php
                $commodity_group_id = $_GET['commodity_group_id'];
                $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');
                $sql = "SELECT *
                FROM report r
                NATURAL JOIN commodity_group
                NATURAL JOIN account
                WHERE commodity_group_id = '$commodity_group_id'
                AND r.report_results = 3
                ORDER BY r.report_time DESC;";
                $result = mysqli_query($link, $sql);
                $row = mysqli_fetch_assoc($result);
                $commodity_group_name = $row["commodity_group_name"];
                
                echo '            
                <div class="section-title" data-aos="fade-up">
                    <h2><i class="fa-solid fa-circle-exclamation"></i>&nbsp;&nbsp;' . $commodity_group_name . '
                    <a href="../lisa/InnerPage.php?commodity_group_id=',$commodity_group_id,'" target="_blank"><button type="button" class="btn insert_button" style="margin-left: 10px; margin-bottom: 8px;">&nbsp;商品團體詳細</button></a>
                    </h2>
                </div><!-- End Section Title -->
                </div><!-- End flex-container -->
                <div class="row">';
                
                // 重制row
                mysqli_data_seek($result, 0);


                while ($row = mysqli_fetch_assoc($result)) {
                  echo '              
                <div class="col-lg-6">
                  <div class="portfolio-info">
                    <div class="evaluate_card" style=" padding: 20px">
                      <table class="evaluate_table">
                        <tr>
                        <td width="15%"><img
                            src="',$row["user_avatar"],'"
                            class="people_photo"></td>
                        <td width="60%">
                          <span>',$row["user_name"],'</span><br>
                          <p>',$row["report_time"],'</p>
                        </td>
                      </tr>
                      <tr>
                      <td colspan="3">
                      <center><p style="color: #B0A5C6;">';

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

echo '                  </p></center>
                      <div class="scrollable-row">
                          ' . $row["report_why"] . '
                          </div>
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>';
                }
              ?>

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