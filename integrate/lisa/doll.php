<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>玩偶吊飾</title>
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
  <link href="assets/css/InnerPage.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Sailor
  * Template URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <main id="main" >

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container align-items-center" style="height:400px;">
        <div class="row gy-4 " style="margin-top:-100px">
          <div class="col-lg-6">
            <div class="portfolio-details-slider swiper" style="transform: scale(0.8);background-color: beige;">
              <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php
                    $commodity_id = $_GET["commodity_id"];
                    $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');
                    $sql = "SELECT commodity_photo FROM commodity_photo WHERE commodity_id=$commodity_id";
                    $result = mysqli_query($link, $sql);
                    $active = true;
                    while ($row = mysqli_fetch_assoc($result)) {
                      echo '<div class="carousel-item  ' . ($active ? 'active' : '') . '">
                                <img src="' . $row["commodity_photo"] . '" class="d-block w-100" alt="...">
                            </div>';
                      $active = false;
                    }
                    ?>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                  data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                  data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
          <?php
          $commodity_id = $_GET["commodity_id"];//在哪一個商品團體要用接值得方式,先假設1,之後再改
          $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');
          $sql = "select * from  commodity where commodity_id=$commodity_id";
          $result = mysqli_query($link, $sql);
          while ($row = mysqli_fetch_assoc($result)) {
            echo '
          <div class="col-lg-6 align-items-center" style="margin-top: 100px;z-index: 998;">
            <div class="portfolio-info">
              <h3>', $row["commodity_name"], '</h3>
              <ul style="list-style-type: none;font-display: left;text-align:left ;">
                <li><strong>價格</strong>: $', $row["commodity_price"], '</li>
                <li><strong>國家</strong>: 日本</li>
                <li><strong>注意事項</strong>: 非重大瑕疵不退貨</li>
                <li><strong>商品連結</strong>: <a href="', $row["c_original_product_link"], '">商品連結</a></li>
              </ul>
            </div>
           
          </div>
        
        </div>
        
      </div>        
    </section><!-- End Portfolio Details Section -->'
            ;
          } ?>
  </main><!-- End #main -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>