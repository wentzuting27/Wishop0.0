<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>個人頁面-購買紀錄</title>
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
  <link href="../../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/06a31c965e.js" crossorigin="anonymous"></script>

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
                    <li><a href="../shop/shop.php?shop_id=', $_SESSION['user_shop_id'] . '" style="font-weight: 600;">我的賣場</a></li>';
                  }
                  if($_SESSION['permissions']==2){
                    echo'
                    <li><a href="../shop/Report_review.php" style="font-weight: 600;">檢舉審核</a></li>';
                  }
                    echo'
                    <li><a href="../profile/Wishlist.php" style="font-weight: 600;">收藏清單</a></li>
                    <li><a href="../profile/Purchase_history.php" style="font-weight: 600;">購買紀錄</a></li>
                    <li><a href="../index/logout.php" style="font-weight: 600;">登出&nbsp;<i class="fa-solid fa-right-from-bracket"></i></a></li>';
                  
                echo '  
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
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="profile-pic-wrapper"
        style="border:0; width: 100%; height: 400px; background-color:#e9e4ee; background-image: url('./assets/img/background2.jpg'); background-size: cover; background-position: center; padding-top: 100px;">
        <form id="uploadForm" method="post" action="uploadProfile.php" enctype="multipart/form-data"> 
        <Input type="hidden" name="method" value="update"/>
        <div class="pic-holder">
          <!-- uploaded pic shown here -->
          <?php
          if (!empty($_SESSION['user_name'])) {
            echo '
          <img id="profilePic" class="pic" src="';
            if (isset($_SESSION["user_avatar"])) {
              echo $_SESSION["user_avatar"];
            } else {
              echo "https://imgs.gotrip.hk/wp-content/uploads/2017/11/nhv4dxh3MJN7gxp/blank-profile-picture-973460_960_720_2583405935a02dfab699c6.png";
            }
            echo '">

          <Input class="uploadProfileInput" type="file" name="user_avatar" id="newProfilePhoto" accept="image/*"
            style="opacity: 0;" />

          <label for="newProfilePhoto" class="upload-file-block">
            <div class="text-center">
              <div class="mb-2">
                <i class="fa fa-camera fa-2x"></i>
              </div>
              <div class="text-uppercase">
                <h5>上傳相片</h5>
              </div>
            </div>
          </label>
        </div>
        </form>
        <h5 style="color: #ffffff;">', $_SESSION["user_name"], '</h5>
        <p class="text-center middle" style="color: #cfcfcf; display: inline-block;">@', $_SESSION["account"], '</p>
        ';
          }
          ?>
          <?php
          if (isset($_SESSION['user_shop_id'])) {

            echo '
              <a class="btn btn-outline-secondary btn-lg profile-button"
              style="--bs-btn-hover-bg: #b3a4bd; --bs-btn-hover-border-color: #f6effb; color: #ffffff; border-color: #ffffff;"
              href="../shop/shop.php?shop_id=', $_SESSION['user_shop_id'] . '" role="button"><i class="fa-solid fa-store"></i>&nbsp;&nbsp;我的賣場</a>
            ';
          } else {
            echo '
            <a class="btn btn-outline-secondary btn-lg profile-button"
          style="--bs-btn-hover-bg: #b3a4bd; --bs-btn-hover-border-color: #f6effb; color: #ffffff; border-color: #ffffff;"
          data-bs-toggle="modal" data-bs-target="#setshop" role="button"><i class="fa-solid fa-store"></i>&nbsp;&nbsp;創建賣場
        </a>
  
          <div class="modal fade" id="setshop" tabindex="-1" aria-labelledby="createShop" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
              <div class="modal-content">
                <div class="modal-header" style="background-color: #b3a4bd;">
                  <h5 class="modal-title" style="color: #fff;" id="createShop">創建賣場</h5>
                </div>
                <div class="modal-body" style="padding: 30px 50px 50px 50px;">
                  <form method="post" action="createShop.php" enctype="multipart/form-data">
  
                    <div class="form-container">
        
                      <div class="form-group">
                        <label for="inputUserName"><i class="fa-solid fa-user"></i>&nbsp;&nbsp;賣場名稱</label>
                        <input type="text" name="shop_name" class="form-control" id="name" placeholder="請輸入賣場名稱" required>
                      </div>
        
                      <div class="form-group">
                        <label for="inputBackground"><i class="fa-solid fa-circle-user"></i>&nbsp;&nbsp;上傳賣場頭貼</label>
                        <input type="file" name="shop_avatar" class="form-control" id="background">
                      </div>
  
                      <div class="form-group">
                        <label for="inputBackground"><i class="fa-solid fa-image"></i>&nbsp;&nbsp;上傳賣場背景</label>
                        <input type="file" name="shop_bg" class="form-control" id="background">
                      </div>

                      <div class="form-group">
                      <label for="inputBackground">賣場簡介</label><br>
                      <textarea name="shop_narrat" rows="5" cols="50" placeholder="請輸入賣場簡介"  class="form-control" with="100%"></textarea>
                    </div>
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">取消</button>
                  <button type="submit" class="btn btn-outline-secondary btn-primary"
            style="--bs-btn-hover-bg: #E9C9D6; --bs-btn-hover-border-color: #f6effb; color: #ffffff; border-color: #ffffff; --bs-btn-bg: #b3a4bd;">創建</button>
                </div>
              </div>
            </div>
          </div>
          </form>

          ';
          }
          ?>
        </div>
        <div class="container">
          <header id="header2" class="d-flex flex-column justify-content-center">
            <nav id="navbar2" class="navbar2 nav-menu2">
              <ul>
                <li><a href="./Profile_settings.php" class="nav-link scrollto"><i
                      class="fa-solid fa-user"></i><span>個人資訊設定</span></a>
                </li>
                <li><a href="./Wishlist.php" class="nav-link scrollto"><i
                      class="fa-solid fa-heart"></i><span>收藏清單</span></a>
                </li>
                <li><a href="./My_Wish.php" class="nav-link scrollto"><i
                      class="fa-solid fa-wand-magic-sparkles"></i><span>我的願望</span></a></li>
                <li><a href="./Purchase_history.php" class="nav-link scrollto active"><i
                      class="fa-solid fa-cart-shopping"></i><span>購買紀錄</span></a>
                </li>
              </ul>
            </nav><!-- .nav-menu -->

            <div class="min_nav">
              <button id="triggerBtn"><i class="fa-solid fa-cart-shopping"></i></button>
              <div id="slideContainer">
                <a href="./Profile_settings.php" class="slideItem"><i class="fa-solid fa-user"></i></a>
                <a href="./TransactionInfo_settings.php" class="slideItem"><i class="fa-solid fa-credit-card"></i></a>
                <a href="./Wishlist.php" class="slideItem"><i class="fa-solid fa-heart"></i></a>
                <a href="./My_Wish.php" class="slideItem"><i class="fa-solid fa-wand-magic-sparkles"></i></a>
                <a href="./Purchase_history.php" class="slideItem"><i class="fa-solid fa-cart-shopping"></i></a>
                <!-- <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li> -->
              </div>
            </div>


          </header><!-- End Header -->



          <div class="row">
            <div class="col-lg-3 features">
              <ul class="nav nav-tabs flex-column" style="text-align: center; background-color: #b3a4bd;">
                <li class="nav-item">
                  <a class="nav-link active show" data-bs-toggle="tab" href="#tab-4">
                    <h5 style="padding-top: 40px; padding-bottom: 20px;"><i
                        class="fa-solid fa-list-check"></i>&nbsp;&nbsp;當前訂單
                    </h5>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#tab-5">
                    <h5 style="padding-top: 40px; padding-bottom: 20px;"><i
                        class="fa-solid fa-clock-rotate-left"></i>&nbsp;&nbsp;歷史購買紀錄</h5>
                  </a>
                </li>
              </ul>
            </div>

            <div class="col-lg-9 mt-4 mt-lg-0">
              <div class="tab-content" style="vertical-align: middle;">
                <div class="tab-pane active show" id="tab-4">
                  <div class="row mt-4">
                    <div class="tab-menu-container">

                      <ul class="nav nav-tabs flex-row">
                        <li class="nav-item">
                          <a class="nav-link active show" data-bs-toggle="tab" href="#tab-6">
                            <i class="fa-solid fa-shoe-prints"></i>&nbsp;&nbsp;進行中
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-bs-toggle="tab" href="#tab-7">
                            <i class="fa-solid fa-hand"></i>&nbsp;&nbsp;我要跟團
                          </a>
                        </li>
                      </ul>
                    </div>

                    <div class="tab-content" style="vertical-align: middle;">

                      <div class="tab-pane active show" id="tab-6">
                        <div class="row mt-5">
                          <div class="scrollable-container">
                            <ul class="list-group list-group-flush">

                              <?php
                              $link = mysqli_connect("localhost", "root", "12345678", "wishop");
                              // 查詢所有進行中的訂單
                              $sql = "SELECT * FROM `order` NATURAL JOIN order_details NATURAL JOIN commodity NATURAL JOIN commodity_group
                                      WHERE account = '{$_SESSION['account']}' AND order_state <> '訂單完成'
                                      GROUP BY order_id";
                              // 下單時間在今天以前(下單完成)且還沒訂單完成的訂單
                              $result = mysqli_query($link, $sql);
                              if ($result) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                  echo '

                            <div class="list-group-item list-group-item-action">
                              <div class="item">
                                <img src="', $row["commodity_group_bg"], '" alt="Product 1">
                                <div class="item-details">
                                  <div class="product-title">
                                    <a href="../lisa/innerPage.php?commodity_group_id=', $row['commodity_group_id'] . '">
                                      <h4>', $row["commodity_group_name"], '</h4>
                                    </a>
                                  </div>';
                                  $sql_shop = "select * from shop
                                  WHERE shop_id='{$row["shop_id"]}'";
                                  $result_shop = mysqli_query($link, $sql_shop);
                                  $row_shop = mysqli_fetch_assoc($result_shop);
                                  echo '
                                <a href="../shop/shop.php?shop_id=', $row_shop['shop_id'] . '" class="seller"><i
                                class="fa-solid fa-shop"></i>&nbsp;&nbsp;', $row_shop["shop_name"], '</a>
                                ';
                                  echo '
                                  <p class="deadline">下單時間: ', $row["order_time"], '</p>
                                </div>
                                <div class="item-meta">
                                  <a class="link-btn" href="../lisa/innerPage.php?commodity_group_id=', $_SESSION['commodity_group_id'] . '"><i class="fa-solid fa-table-list"></i>&nbsp;&nbsp;訂單詳細</a>
                                </div>
                              </div>
                            </div>';
                                }
                              } else {
                                echo "查無當前進行中許願：" . mysqli_error($link);
                              }

                              mysqli_close($link);
                              ?>

                            </ul>
                          </div>
                        </div>
                      </div>

                      <div class="tab-pane" id="tab-7">
                        <div class="row mt-5">
                          <div class="scrollable-container">
                            <ul class="list-group list-group-flush">

                              <?php
                              $link = mysqli_connect("localhost", "root", "12345678", "wishop");
                              // 查詢所有我也想買(跟團)
                              $sql = "SELECT * FROM withgroup NATURAL JOIN commodity_group
                                      WHERE commodity_group_state <> 2 AND account = '{$_SESSION['account']}'";
                              // 團體狀態不等於已結束的跟團
                              $result = mysqli_query($link, $sql);
                              if ($result) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                  echo '

                            <div class="list-group-item list-group-item-action">
                              <div class="item">
                                <img src="', $row["commodity_group_bg"], '" alt="Product 1">
                                <div class="item-details">
                                  <div class="product-title">
                                    <a href="../lisa/innerPage.php?commodity_group_id=', $row['commodity_group_id'] . '">
                                      <h4>', $row["commodity_group_name"], '</h4>
                                    </a>';
                                  $sql_order_YorN = "SELECT * FROM `order` NATURAL JOIN order_details NATURAL JOIN commodity NATURAL JOIN commodity_group
                                    WHERE account = '{$_SESSION['account']}'
                                    GROUP BY order_id";
                                  $result_order_YorN = mysqli_query($link, $sql_order_YorN);

                                  // 設一個下個星期的今天的變數
                                  $oneweekAgo = date('Y-m-d', strtotime('7 days'));
                                  // 判斷截止日期是不是在今天到下個禮拜的今天這段時間
                                  if ($row["close_order_date"] <= $oneweekAgo && $row["close_order_date"] >= date('Y-m-d') && mysqli_num_rows($result__order_YorN) == 0) {
                                    echo '
                                      <span class="expiring-tag">下單期限即將結束</span>
                                      ';
                                  }
                                  echo '
                                  </div>
                                  ';

                                  $sql_shop = "select * from shop
                                  WHERE shop_id='{$row["shop_id"]}'";
                                  $result_shop = mysqli_query($link, $sql_shop);
                                  $row_shop = mysqli_fetch_assoc($result_shop);
                                  echo '
                                <a href="../shop/shop.php?shop_id=', $row_shop['shop_id'] . '" class="seller"><i
                                class="fa-solid fa-shop"></i>&nbsp;&nbsp;', $row_shop["shop_name"], '</a>
                                ';

                                  echo '
                                  <p class="deadline">下單截止時間: ', $row["close_order_date"], '</p>
                                </div>
                                <div class="item-meta">
                                ';

                                  // if($row["commodity_group_state"]==3){
                                  //   echo '<div class="item-meta">
                                  //   <span class="wishNo-tag">未成團</span>
                                  //   </div>';
                                  // }elseif(mysqli_num_rows($result__order_YorN)==0){
                                  //   echo '<div class="item-meta">
                                  //   <span class="wishNo-tag">尚未下單</span>
                                  //   </div>';
                                  // }else{
                                  //   echo '<div class="item-meta">
                                  //   <span class="wishYes-tag">已下單</span>
                                  // </div>';
                                  // }
                                  echo '
                                </div>
                              </div>
                            </div>';
                                }
                              } else {
                                echo "查無當前進行中許願：" . mysqli_error($link);
                              }

                              mysqli_close($link);
                              ?>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="tab-pane" id="tab-5">
                  <div class="row mt-5">
                    <div class="scrollable-container">
                      <ul class="list-group list-group-flush">

                        <?php
                        $link = mysqli_connect("localhost", "root", "12345678", "wishop");
                        // 查詢所有進行中的訂單
                        $sql = "SELECT * FROM `order` NATURAL JOIN order_details NATURAL JOIN commodity NATURAL JOIN commodity_group
                                      WHERE account = '{$_SESSION['account']}' AND order_state = '訂單完成'
                                      GROUP BY order_id";
                        // 所有已經訂單完成的訂單
                        $result = mysqli_query($link, $sql);
                        if ($result) {
                          while ($row = mysqli_fetch_assoc($result)) {
                            echo '
        
                                    <div class="list-group-item list-group-item-action">
                                      <div class="item">
        
        
                                        <img src="', $row["commodity_group_bg"], '" alt="Product 1">
                                        <div class="item-details">
                                          <div class="product-title">
                                            <a href="../lisa/innerPage.php?commodity_group_id=', $row['commodity_group_id'] . '">
                                              <h4>', $row["commodity_group_name"], '</h4>
                                            </a>
                                          </div>';
                            $sql_shop = "select * from shop
                                          WHERE shop_id='{$row["shop_id"]}'";
                            $result_shop = mysqli_query($link, $sql_shop);
                            $row_shop = mysqli_fetch_assoc($result_shop);
                            echo '
                                        <a href="../shop/shop.php?shop_id=', $row_shop['shop_id'] . '" class="seller"><i
                                        class="fa-solid fa-shop"></i>&nbsp;&nbsp;', $row_shop["shop_name"], '</a>
                                        ';
                            echo '
                                          <p class="deadline">下單時間: ', $row["order_time"], '</p>
                                          <p class="deadline">訂單完成時間: ', $row["order_time"], '</p>
                                        </div>
                                        <div class="item-meta">
                                          <a class="link-btn" href="../lisa/innerPage.php?commodity_group_id=', $_SESSION['commodity_group_id'] . '"><i class="fa-solid fa-table-list"></i>&nbsp;&nbsp;訂單詳細</a>
                                        </div>
                                      </div>
                                    </div>';
                          }
                        } else {
                          echo "查無當前進行中許願：" . mysqli_error($link);
                        }

                        mysqli_close($link);
                        ?>

                      </ul>
                    </div>
                  </div>
                </div>

              </div>
            </div>


          </div>
    </section><!-- End Contact Section -->

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