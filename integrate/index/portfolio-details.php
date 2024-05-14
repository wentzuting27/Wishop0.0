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
                    s.shop_id,

                    cg.commodity_group_id,
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
                    
                    where c.commodity_id='$commodity_id
                '";



                $result = mysqli_query($link, $sql);

                if ($row = mysqli_fetch_assoc($result)) {
                  $commodity_id = $row['commodity_id'];
                  $commodity_name = $row['commodity_name'];
                  $commodity_price = $row['commodity_price'];
                  $c_original_product_link = $row['c_original_product_link'];
                  $commodity_narrate = $row['commodity_narrate'];

                  $commodity_photo = $row['commodity_photo'];

                  $shop_name = $row['shop_name'];
                  $shop_id = $row['shop_id'];

                  $commodity_group_id = $row['commodity_group_id'];
                  $commodity_group_name = $row['commodity_group_name'];
                  $nation = $row['nation'];

                }

                if ($result) {
                  while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="swiper-slide">';
                    echo '<img src="' . $row['commodity_photo'] . '" style="width: 60%; height: auto; display: block; margin: 0 auto;" alt="">';
                    echo '</div>';
                  }
                }


                ?>


                <!-- 圖片還有問題 -->
                <div class="swiper-slide">
                  <img src="<?php echo $commodity_photo; ?>"
                    style="width: 60%; height: auto; display: block; margin: 0 auto;" alt="">
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




            </div>


            <style>
              .category {
                border-radius: 50px;
                border: 2px solid #B0A5C6;
                color: #B0A5C6;
                background-color: transparent;
                padding: 2px 15px;
                margin: 3px;
                transition: border-color 0.3s, color 0.3s;
                /* 添加過渡效果 */

                display: inline-block;
                /* 将<a>标签转换为内联块级元素 */
                margin-right: 5px;
                /* 增加<a>标签之间的空间 */
                margin-bottom: 5px;
                /* 增加底部间距 */

              }

              .category:hover {
                border-color: #E9C9D6;
                /* 滑鼠移過去時框線顏色 */
                color: #E9C9D6;
                /* 滑鼠移過去時字體顏色 */
              }


              .topic {
                border-radius: 5px;
                color: #FFF;
                background-color: #B0A5C6;
                padding: 3px 10px;
                margin: 3px;
                transition: border-color 0.3s, color 0.3s;
                /* 添加過渡效果 */
              }

              .topic:hover {
                background-color: #E9C9D6;
              }
            </style>
            <div class="portfolio-info">
              <h3><?php echo $commodity_group_name; ?></h3>
              <ul>
                <li><i class="fa-solid fa-user"></i>&nbsp;<strong>賣家</strong>: <a
                    href="../shop/shop.php?shop_id=<?php echo $shop_id; ?>" target="_blank">
                    <?php echo $shop_name; ?></a></li>
                <li><i class="fa-solid fa-earth-asia"></i>&nbsp;<strong>國家</strong>: <a href="portfolio.php?nation=<?php echo $nation; ?>" target="_blank">
                    <?php

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
                        echo "加拿大";
                        break;
                      default:
                        echo "其他";
                    }
                    ?>
                </a></li>
                <li><i class="fa-solid fa-credit-card"></i>&nbsp;<strong>付款方式</strong>:</li>
                <li><i class="fa-solid fa-bars"></i>&nbsp;<strong>主題</strong>:

                  <?php
                  if ($_GET['commodity_id'] != '') {
                    $commodity_id = $_GET['commodity_id'];

                    $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');
                    $sql2 = "SELECT * from commodity 
                    natural JOIN commodity_group 
                    natural JOIN group_topic
                    where commodity_id = '$commodity_id'
                    ";

                    $result2 = mysqli_query($link, $sql2);

                    if ($result2) {
                      while ($row2 = mysqli_fetch_assoc($result2)) {
                        switch ($row2['topic']) {
                          case 1:
                            echo '<a href="portfolio.php?topic=1" target="_blank"><span class="topic" name="topic" value="1">服飾</span></a>                            ';
                            break;
                          case 2:
                            echo '<a href="portfolio.php?topic=2" target="_blank"><span class="topic" name="topic" value="2">美妝</span></a>';
                            break;
                          case 3:
                            echo '<a href="portfolio.php?topic=3" target="_blank"><span class="topic" name="topic" value="3">動漫</span></a>';
                            break;
                          case 4:
                            echo '<a href="portfolio.php?topic=4" target="_blank"><span class="topic" name="topic" value="4">明星</span></a>';
                            break;
                          case 5:
                            echo '<a href="portfolio.php?topic=5" target="_blank"><span class="topic" name="topic" value="5">日常</span></a>';
                            break;
                          case 6:
                            echo '<a href="portfolio.php?topic=6" target="_blank"><span class="topic" name="topic" value="6">數位3C</span></a>';
                            break;
                          case 7:
                            echo '<a href="portfolio.php?topic=7" target="_blank"><span class="topic" name="topic" value="7">美食</span></a>';
                            break;
                          case 8:
                            echo '<a href="portfolio.php?topic=8" target="_blank"><span class="topic" name="topic" value="8">運動</span></a>';
                            break;
                          case 9:
                            echo '<a href="portfolio.php?topic=9" target="_blank"><span class="topic" name="topic" value="9">精品</span></a>';
                            break;
                          case 10:
                            echo '<a href="portfolio.php?topic=10" target="_blank"><span class="topic" name="topic" value="10">其他</span></a>';
                            break;
                          default:
                            echo '無';
                        }
                      }
                    }
                  }
                  ?>




                <li><i class="fa-solid fa-tags"></i>&nbsp;<strong>標籤</strong>:
                  <div>
                    <a href="#"><span class="category">#標籤</span></a>
                    <a href="#"><span class="category">#標籤</span></a>
                    <a href="#"><span class="category">#標籤</span></a>
                  </div>
                </li>
              </ul>
              <hr>
              <div style="text-align: center;">
                <a type="button" href="../lisa/InnerPage.php?commodity_group_id=<?php echo $commodity_group_id; ?>"
                  target="_blank" class="btn btn-light-more">前往團購購買</a>
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