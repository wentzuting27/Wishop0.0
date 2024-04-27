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
          <li><a href="index.php" >首頁</a></li>
          <li class="dropdown"><a href="portfolio.php" class="active"><span>購物</span><i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="about.php">About</a></li>
              <li><a href="team.php">Team</a></li>
              <li><a href="testimonials.php">Testimonials</a></li>

              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#">團購</a></li>
          <li><a href="#">許願池</a></li>

          <?php
            if(!empty($_SESSION['user_name'])){
              echo '
              <li><a href="#"><i class="fa-solid fa-bell"></i></a></li>

              <li class="dropdown"><a href="../profile/Profile_settings.php"><img src="',$_SESSION["user_avatar"],'" class="nav-photo"></a>
                <ul>
                  <li><a style="color:#FFF;font-weight: 600;margin-bottom: 0px;">',$_SESSION["user_name"],'</a></li>
                  <hr>
                  <li><a href="../profile/Wishlist.php" style="font-weight: 600;">收藏清單</a></li>
                  <li><a href="../profile/Purchase_history.php" style="font-weight: 600;">購買紀錄</a></li>
                  <li><a href="../index/logout.php" style="font-weight: 600;">登出&nbsp;<i class="fa-solid fa-right-from-bracket"></i></a></li>
                </ul>
              </li>
              ';
            }else{
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
        <div class="pic-holder">
          <!-- uploaded pic shown here -->
          <?php
          if (!empty($_SESSION['user_name'])) {
            echo '
          <img id="profilePic" class="pic" src="';if(isset($_SESSION["user_avatar"])){echo $_SESSION["user_avatar"];}else{echo "https://imgs.gotrip.hk/wp-content/uploads/2017/11/nhv4dxh3MJN7gxp/blank-profile-picture-973460_960_720_2583405935a02dfab699c6.png";} echo '">
          <Input class="uploadProfileInput" type="file" name="profile_pic" id="newProfilePhoto" accept="image/*"
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
              href="../shop/shop.php?shop_id=',$_SESSION['user_shop_id'].'" role="button"><i class="fa-solid fa-store"></i>&nbsp;&nbsp;我的賣場</a>
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
                      <textarea name="shop_narrat" rows="5" cols="50" placeholder="請輸入賣場簡介"></textarea>
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
              <li><a href="./TransactionInfo_settings.php" class="nav-link scrollto"><i
                    class="fa-solid fa-credit-card"></i><span>交易資訊設定</span></a>
              </li>
              <li><a href="./Wishlist.php" class="nav-link scrollto"><i class="fa-solid fa-heart"></i><span>收藏清單</span></a>
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
                  <h5 style="padding-top: 40px; padding-bottom: 20px;"><i class="fa-solid fa-list-check"></i>&nbsp;&nbsp;當前訂單
                  </h5>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">
                  <h5 style="padding-top: 40px; padding-bottom: 20px;"><i class="fa-solid fa-clock-rotate-left"></i>&nbsp;&nbsp;歷史購買紀錄</h5>
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
                          <i class="fa-solid fa-hand"></i>&nbsp;&nbsp;我也想買(跟團)
                        </a>
                      </li>
                    </ul>
                  </div>

                  <div class="tab-content" style="vertical-align: middle;">

                    <div class="tab-pane active show" id="tab-6">
                      <div class="row mt-5">
                        <div class="scrollable-container">
                          <ul class="list-group list-group-flush">

                            <div class="list-group-item list-group-item-action">
                              <div class="item">
                                <img src="https://gw.alicdn.com/imgextra/O1CN01Pg0FhG1It99KQYtET_!!6000000000950-2-yinhe.png_.webp" alt="Product 1">
                                <div class="item-details">
                                  <div class="product-title">
                                    <a href="#">
                                      <h4>排球少年音駒高校白色帽T</h4>
                                    </a>
                                    <span class="publicWish-tag">公共許願池</span>
                                  </div>
                                  <a href="#" class="seller"><i class="fa-solid fa-shop"></i>&nbsp;&nbsp;日本藥妝、零食、動漫現地代購</a>
                                  <p class="deadline">下單時間: 2023/09/30</p>
                                </div>
                                <div class="item-meta">
                                  <a class="link-btn" href="#對帳表"><i class="fa-solid fa-table-list"></i>&nbsp;&nbsp;對帳表</a>
                                </div>
                              </div>
                            </div>

                            <div class="list-group-item list-group-item-action">
                              <div class="item">
                                <img src="https://i.pinimg.com/736x/a6/b3/15/a6b31560e581085b07d17716ecf8f681.jpg" alt="Product 1">
                                <div class="item-details">
                                  <div class="product-title">
                                    <a href="#">
                                      <h4>ATEEZ 星和玩偶DDEONGbyeoli</h4>
                                    </a>
                                    <span class="theShop-tag">特定賣場</span>
                                  </div>
                                  <a href="#" class="seller"><i class="fa-solid fa-shop"></i>&nbsp;&nbsp;韓國正品代購團</a>
                                  <p class="deadline">下單時間: 2023/09/30</p>
                                </div>
                                <div class="item-meta">
                                  <a class="link-btn" href="#對帳表"><i class="fa-solid fa-table-list"></i>&nbsp;&nbsp;對帳表</a>
                                </div>
                              </div>
                            </div>

                            <div class="list-group-item list-group-item-action">
                              <div class="item">
                                <img src="https://gcs.rimg.com.tw/g0/658/38c/agate898/e/3b/1f/22333461233439_323.jpg" alt="Product 1">
                                <div class="item-details">
                                  <div class="product-title">
                                    <a href="#">
                                      <h4>偶像夢幻祭瀨名泉公仔棉花娃娃20CM</h4>
                                    </a>
                                    <span class="theShop-tag">特定賣場</span>
                                  </div>
                                  <a href="#" class="seller"><i class="fa-solid fa-shop"></i>&nbsp;&nbsp;日本藥妝、零食、動漫現地代購</a>
                                  <p class="deadline">下單時間: 2023/09/30</p>
                                </div>
                                <div class="item-meta">
                                  <a class="link-btn" href="#對帳表"><i class="fa-solid fa-table-list"></i>&nbsp;&nbsp;對帳表</a>
                                </div>
                              </div>
                            </div>

                            <div class="list-group-item list-group-item-action">
                              <div class="item">
                                <img src="https://renewalprod.blob.core.windows.net/renewal-prod/cms/articles/content/sub10png_2024-02-14-07-40-43.png" alt="Product 1">
                                <div class="item-details">
                                  <div class="product-title">
                                    <a href="#">
                                      <h4>【北海道】大耳狗喜拿×五稜郭的壓克力立牌</h4>
                                    </a>
                                    <span class="theShop-tag">特定賣場</span>
                                  </div>
                                  <a href="#" class="seller"><i class="fa-solid fa-shop"></i>&nbsp;&nbsp;三麗鷗快樂購</a>
                                  <p class="deadline">下單時間: 2023/09/30</p>
                                </div>
                                <div class="item-meta">
                                  <a class="link-btn" href="#對帳表"><i class="fa-solid fa-table-list"></i>&nbsp;&nbsp;對帳表</a>
                                </div>
                              </div>
                            </div>

                          </ul>
                        </div>
                      </div>
                    </div>

                    <div class="tab-pane" id="tab-7">
                      <div class="row mt-5">
                        <div class="scrollable-container">
                          <ul class="list-group list-group-flush">

                            <div class="list-group-item list-group-item-action">
                              <div class="item">
                                <img src="https://www.niusnews.com/upload/imgs/default/202302_Noah/0220/2/sub1-goods-sakura-2302.jpeg" alt="Product 1">
                                <div class="item-details">
                                  <div class="product-title">
                                    <a href="#">
                                      <h4>三麗鷗「櫻花季」</h4>
                                    </a>
                                    <span class="expiring-tag">即將過期</span>
                                  </div>
                                  <a href="#" class="seller"><i class="fa-solid fa-shop"></i>&nbsp;&nbsp;三麗鷗快樂購</a>
                                  <p class="neirong">下單時間: 2023/06/30</p>
                                  <p class="deadline">截止時間: 2023/09/30</p>
                                </div>
                                <div class="item-meta">
                                  <p class="price">$99.99</p>
                                </div>
                              </div>
                            </div>

                            <div class="list-group-item list-group-item-action">
                              <div class="item">
                                <img src="https://down-tw.img.susercontent.com/file/tw-11134207-7qul9-lj5kvyccfayq34" alt="Product 1">
                                <div class="item-details">
                                  <div class="product-title">
                                    <a href="#">
                                      <h4>日本三麗鷗彩虹樂園限定商品</h4>
                                    </a>
                                  </div>
                                  <a href="#" class="seller"><i class="fa-solid fa-shop"></i>&nbsp;&nbsp;三麗鷗快樂購</a>
                                  <p class="neirong">下單時間: 2023/06/30</p>
                                  <p class="deadline">截止時間: 2023/09/30</p>
                                </div>
                                <div class="item-meta">
                                  <p class="price">$99.99</p>
                                </div>
                              </div>
                            </div>

                            <div class="list-group-item list-group-item-action">
                              <div class="item">
                                <img src="https://today-obs.line-scdn.net/0hQYfc7xmHDnZbGhy6CX9xIWNMAgdofBR_eS9GFH4ZUE5_NkFwZn9dFSkYBFp-LUh3ey9GEC5OV0R3LklwMA/w1200" alt="Product 1">
                                <div class="item-details">
                                  <div class="product-title">
                                    <a href="#">
                                      <h4>日本「美少女戰士X三麗鷗」</h4>
                                    </a>
                                    <span class="expiring-tag">即將過期</span>
                                  </div>
                                  <a href="#" class="seller"><i class="fa-solid fa-shop"></i>&nbsp;&nbsp;三麗鷗快樂購</a>
                                  <p class="neirong">下單時間: 2023/06/30</p>
                                  <p class="deadline">截止時間: 2023/09/30</p>
                                </div>
                                <div class="item-meta">
                                  <p class="price">$99.99</p>
                                </div>
                              </div>
                            </div>

                            <div class="list-group-item list-group-item-action">
                              <div class="item">
                                <img src="https://cdn.walkerland.com.tw/images/upload/subject/2023/03/1084ddfc99034970915184c36bd4eb61fa1c7d7c.jpg" alt="Product 1">
                                <div class="item-details">
                                  <div class="product-title">
                                    <a href="#">
                                      <h4>三麗鷗全新直營店「Sanrio新宿店」</h4>
                                    </a>
                                    <span class="expiring-tag">即將過期</span>
                                  </div>
                                  <a href="#" class="seller"><i class="fa-solid fa-shop"></i>&nbsp;&nbsp;三麗鷗快樂購</a>
                                  <p class="neirong">下單時間: 2023/06/30</p>
                                  <p class="deadline">截止時間: 2023/09/30</p>
                                </div>
                                <div class="item-meta">
                                  <p class="price">$99.99</p>
                                </div>
                              </div>
                            </div>

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

                      <div class="list-group-item list-group-item-action">
                        <div class="item">
                          <img src="https://gw.alicdn.com/imgextra/O1CN01Pg0FhG1It99KQYtET_!!6000000000950-2-yinhe.png_.webp" alt="Product 1">
                          <div class="item-details">
                            <div class="product-title">
                              <a href="#">
                                <h4>排球少年音駒高校白色帽T</h4>
                              </a>
                              <span class="publicWish-tag">公共許願池</span>
                            </div>
                            <a href="#" class="seller"><i class="fa-solid fa-shop"></i>&nbsp;&nbsp;日本藥妝、零食、動漫現地代購</a>
                            <p class="deadline">下單時間: 2023/09/30</p>
                          </div>
                          <div class="item-meta">
                            <a class="link-btn" href="#對帳表"><i class="fa-solid fa-table-list"></i>&nbsp;&nbsp;對帳表</a>
                          </div>
                        </div>
                      </div>

                      <div class="list-group-item list-group-item-action">
                        <div class="item">
                          <img src="https://i.pinimg.com/736x/a6/b3/15/a6b31560e581085b07d17716ecf8f681.jpg" alt="Product 1">
                          <div class="item-details">
                            <div class="product-title">
                              <a href="#">
                                <h4>ATEEZ 星和玩偶DDEONGbyeoli</h4>
                              </a>
                              <span class="theShop-tag">特定賣場</span>
                            </div>
                            <a href="#" class="seller"><i class="fa-solid fa-shop"></i>&nbsp;&nbsp;韓國正品代購團</a>
                            <p class="deadline">下單時間: 2023/09/30</p>
                          </div>
                          <div class="item-meta">
                            <a class="link-btn" href="#對帳表"><i class="fa-solid fa-table-list"></i>&nbsp;&nbsp;對帳表</a>
                          </div>
                        </div>
                      </div>

                      <div class="list-group-item list-group-item-action">
                        <div class="item">
                          <img src="https://gcs.rimg.com.tw/g0/658/38c/agate898/e/3b/1f/22333461233439_323.jpg" alt="Product 1">
                          <div class="item-details">
                            <div class="product-title">
                              <a href="#">
                                <h4>偶像夢幻祭瀨名泉公仔棉花娃娃20CM</h4>
                              </a>
                              <span class="theShop-tag">特定賣場</span>
                            </div>
                            <a href="#" class="seller"><i class="fa-solid fa-shop"></i>&nbsp;&nbsp;日本藥妝、零食、動漫現地代購</a>
                            <p class="deadline">下單時間: 2023/09/30</p>
                          </div>
                          <div class="item-meta">
                            <a class="link-btn" href="#對帳表"><i class="fa-solid fa-table-list"></i>&nbsp;&nbsp;對帳表</a>
                          </div>
                        </div>
                      </div>

                      <div class="list-group-item list-group-item-action">
                        <div class="item">
                          <img src="https://renewalprod.blob.core.windows.net/renewal-prod/cms/articles/content/sub10png_2024-02-14-07-40-43.png" alt="Product 1">
                          <div class="item-details">
                            <div class="product-title">
                              <a href="#">
                                <h4>【北海道】大耳狗喜拿×五稜郭的壓克力立牌</h4>
                              </a>
                              <span class="theShop-tag">特定賣場</span>
                            </div>
                            <a href="#" class="seller"><i class="fa-solid fa-shop"></i>&nbsp;&nbsp;三麗鷗快樂購</a>
                            <p class="deadline">下單時間: 2023/09/30</p>
                          </div>
                          <div class="item-meta">
                            <a class="link-btn" href="#對帳表"><i class="fa-solid fa-table-list"></i>&nbsp;&nbsp;對帳表</a>
                          </div>
                        </div>
                      </div>

                    </ul>
                  </div>
                </div>
              </div>

            </div>
          </div>


        </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Sailor</h3>
              <p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
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
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Sailor</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/sailor-free-bootstrap-theme/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
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