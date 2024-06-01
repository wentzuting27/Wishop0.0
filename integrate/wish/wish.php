<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>許願池</title>
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

  <!-- =======================================================
  * Template Name: Sailor
  * Template URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <script src="https://kit.fontawesome.com/2956805ca8.js" crossorigin="anonymous"></script>
</head>
<style>
  .topicbox {
    position: relative;
    width: 100px;
    height: 60px;
    overflow: hidden;
    margin: 10px;
    border-radius: 5px;
    padding: 0 5px 0 5px;
  }


  .filtertag h5 {
    padding: 0.25em 0.5em;
    /*上下 左右の余白*/
    color: #494949;
    /*文字色*/
    background: transparent;
    /*背景透明に*/
    border-left: solid 5px #B0A5C6;
    /*左線*/
    font-weight: bold;
  }


  .filtertag ul li {
    font-size: 18px;
    /* 设置列表项文字大小 */
    margin-top: 5px;
  }

  .filtertag a {
    color: #B0A5C6
  }

  /* 滑鼠移過去時的顏色 */
  .filtertag a:hover {
    color: #E9C9D6;
    /* 替換為您想要的顏色 */
  }

  /* 側邊欄項目 */
  .sidebar-item.search-form {
    margin-bottom: 20px;
    /* 將搜索框和篩選框並排 */
  }

  /* 搜索表單 */
  .sidebar-item.search-form form {
    display: flex;
    align-items: center;
  }

  /* 搜索輸入框 */
  .sidebar-item.search-form input[type="text"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px 0 0 5px;
    outline: none;
  }

  /* 搜索按鈕 */
  .sidebar-item.search-form button[type="submit"] {
    background-color: #B0A5C6;
    color: #fff;
    border: none;
    border-radius: 0 5px 5px 0;
    padding: 11px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  /* 滑鼠懸停時的搜索按鈕 */
  .sidebar-item.search-form button[type="submit"]:hover {
    background-color: #E9C9D6;
  }

  /* 調整篩選框與搜索框的間距 */
  .filtertag {
    margin-left: 10px;
  }

  .btn-tag {
    border-radius: 50px;
    border: 2px solid #B0A5C6;
    color: #B0A5C6;
    background-color: transparent;
    padding: 3px 15px;
    margin: 3px;
    transition: border-color 0.3s, color 0.3s;
    /* 添加過渡效果 */

  }

  .btn-tag:hover {
    border-color: #E9C9D6;
    /* 滑鼠移過去時框線顏色 */
    color: #E9C9D6;
    /* 滑鼠移過去時字體顏色 */
  }

  /* 自定義按鈕樣式的 checkbox */
  .checkbox-label {
    position: relative;
    display: block;
    overflow: hidden;
    width: 100%;
    margin-top: 5px;
    margin-bottom: 5px;
  }

  .checkbox-label input {
    position: absolute;
    left: -9999px;
  }



  .checkbox-button {
    display: inline-block;
    padding: 10px;
    width: 90px;
    text-align: center;
    background-color: #B0A5C6;
    color: #ffffff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.1s;
  }

  .checkbox-label input:checked+.checkbox-button {
    background-color: #E9C9D6;
  }

  .topic-label {
    display: inline-block;
    border-radius: 5px;
    background-color: #B0A5C6;
    color: #fff;
    padding: 3px 10px;
    margin: 5px;
  }
</style>

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
          <li><a href="../wish/wish.php" class="active">許願池</a></li>

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

  <!-- ======= Hero Section ======= -->
  <section id="hero">

    <?php
    $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');
    date_default_timezone_set('Asia/Taipei');
    // 計算當月的起始和結束日期
    $startOfMonth = date('Y-m-01'); // 當月的第一天
    $endOfMonth = date('Y-m-t 23:59:59'); // 當月的最後一天
    $sql = "select * from wish 
      where account='{$_SESSION["account"]}'
      AND wish_start between '{$startOfMonth}' and '{$endOfMonth}'";
    $result = mysqli_query($link, $sql);
    $count = mysqli_num_rows($result); // 获取结果行数
    
    $sql_total = "select * from wish";
    $result_total = mysqli_query($link, $sql_total);
    $count_total = mysqli_num_rows($result_total); // 获取结果行数
    echo '
      <div class="edit_like_shop_button2">';
    if (!isset($_SESSION["account"])) {
      echo '
          <button type="button" class="btn insert_button"><i class="fa-solid fa-wand-sparkles"></i>&nbsp;平台總許願次數【', $count_total, '】</button>';
    } else {
      echo '<button type="button" class="btn insert_button"><i class="fa-solid fa-wand-sparkles"></i>&nbsp;當月剩餘許願次數【';
      if ((3 - $count) <= 0) {
        echo '0';
      } else {
        echo 3 - $count;
      }
      echo '】</button>&nbsp
          <button type="button" class="btn insert_button"><i class="fa-solid fa-wand-sparkles"></i>&nbsp;平台總許願次數【', $count_total, '】</button>';
    }

    echo '
      </div>';
    ?>

    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <!-- Slide 1 -->
      <div class="carousel-item active"
        style="background-image: url(https://i.pinimg.com/564x/27/b0/41/27b04138dc48c4d5d433f2c5839203c8.jpg)">
        <div class="carousel-container">
          <div class="container">
            <div class="edit_like_shop_button">
              <h2 class="animate__animated animate__fadeInDown">許下您的願望，讓WISHOP替您實現吧!</h2>
              <p class="animate__animated animate__fadeInUp">~每一个心聲都被聽見，每一次的許願都有機會實現~</p>
              <?php
              $sql = "select * from wish where account='{$_SESSION["account"]}' AND MONTH(wish_start) = MONTH(CURRENT_DATE())
            AND YEAR(wish_start) = YEAR(CURRENT_DATE())";
              $result = mysqli_query($link, $sql);
              $count = mysqli_num_rows($result); // 获取结果行数
              if (!isset($_SESSION["account"])) {
                echo '
              <button class="btn-get-started animate__animated animate__fadeInUp scrollto" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
              <i class="fa-solid fa-wand-sparkles"></i>&nbsp;Make A Wish&nbsp;<i class="fa-solid fa-wand-sparkles"></i></button>';
              } elseif ($count >= 3) {
                echo '
              <button class="btn-get-started animate__animated animate__fadeInUp scrollto" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
              <i class="fa-solid fa-wand-sparkles"></i>&nbsp;Make A Wish&nbsp;<i class="fa-solid fa-wand-sparkles"></i></button>';
              } else {
                echo '
              <button class="btn-get-started animate__animated animate__fadeInUp scrollto" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">
              <i class="fa-solid fa-wand-sparkles"></i>&nbsp;Make A Wish&nbsp;<i class="fa-solid fa-wand-sparkles"></i></button>';
              }

              ?>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal 未登入不能許願 -->
      <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">許願提醒</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              您需要先登入才能新增願望!~
            </div>
          </div>
        </div>
      </div>
      <!-- Modal 無許願次數 -->
      <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">許願提醒</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              這個月您已經達到許願次數上限了，請期待下個月再來實現您的願望吧！
            </div>
          </div>
        </div>
      </div>

      <?php $max_date = date('Y-m-d', strtotime('+3 months')); ?><!-- 計算從當前日期開始的三個月後的日期-->
      <!-- Modal 新增願望-->
      <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">我想許願……</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="post" action="wish_in_de.php" enctype="multipart/form-data">
                <input type="hidden" name="method" class="form-control" style="width: 100%;" value="in">
                <div class="mb-3 row">
                  <label class="col-sm-2 col-form-label">商品名稱*</label>
                  <div class="col-sm-10">
                    <input type="text" name="wish_name" class="form-control" required>
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-sm-2 col-form-label">商品敘述*</label>
                  <div class="col-sm-10">
                    <textarea name="wish_narrat" class="form-control" rows="3" required></textarea>
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-sm-2 col-form-label">主題</label>
                  <div class="col-sm-10">
                    <style>
                      .icon-label2 {
                        cursor: pointer;
                      }
                    </style>
                    <td>
                      <table width="100%">
                        <tr>
                          <td width="20%"><input type="checkbox" name="wish_topic[]" class="link_ch" id="theme1"
                              value="1"><label class="icon-label2" for="theme1"><i
                                class="fa-solid fa-shirt"></i></label>
                            <p style="display: inline-block;color:#B0A5C6;font-size:15px;">服飾</p>
                          </td>
                          <td width="20%"><input type="checkbox" name="wish_topic[]" class="link_ch" id="theme2"
                              value="2"><label class="icon-label2" for="theme2"><i
                                class="fa-solid fa-face-smile-beam"></i></label>
                            <p style="display: inline-block;color:#B0A5C6;font-size:15px;">美妝</p>
                          </td>
                          <td width="20%"><input type="checkbox" name="wish_topic[]" class="link_ch" id="theme3"
                              value="3"><label class="icon-label2" for="theme3"><i
                                class="fa-solid fa-heart"></i></label>
                            <p style="display: inline-block;color:#B0A5C6;font-size:15px;">動漫</p>
                          </td>
                          <td width="20%"><input type="checkbox" name="wish_topic[]" class="link_ch" id="theme4"
                              value="4"><label class="icon-label2" for="theme4"><i class="fa-solid fa-star"></i></label>
                            <p style="display: inline-block;color:#B0A5C6;font-size:15px;">明星</p>
                          </td>
                          <td width="20%"><input type="checkbox" name="wish_topic[]" class="link_ch" id="theme5"
                              value="5"><label class="icon-label2" for="theme5"><i
                                class="fa-solid fa-house-chimney-window"></i></label>
                            <p style="display: inline-block;color:#B0A5C6;font-size:15px;">日常</p>
                          </td>
                        </tr>
                        <tr>
                          <td width="20%"><input type="checkbox" name="wish_topic[]" class="link_ch" id="theme6"
                              value="6"><label class="icon-label2" for="theme6"><i
                                class="fa-solid fa-gamepad"></i></label>
                            <p style="display: inline-block;color:#B0A5C6;font-size:15px;">數位</p>
                          </td>
                          <td width="20%"><input type="checkbox" name="wish_topic[]" class="link_ch" id="theme7"
                              value="7"><label class="icon-label2" for="theme7"><i
                                class="fa-solid fa-utensils"></i></label>
                            <p style="display: inline-block;color:#B0A5C6;font-size:15px;">美食</p>
                          </td>
                          <td width="20%"><input type="checkbox" name="wish_topic[]" class="link_ch" id="theme8"
                              value="8"><label class="icon-label2" for="theme8"><i
                                class="fa-solid fa-person-biking"></i></label>
                            <p style="display: inline-block;color:#B0A5C6;font-size:15px;">運動</p>
                          </td>
                          <td width="20%"><input type="checkbox" name="wish_topic[]" class="link_ch" id="theme9"
                              value="9"><label class="icon-label2" for="theme9"><i class="fa-solid fa-gift"></i></label>
                            <p style="display: inline-block;color:#B0A5C6;font-size:15px;">精品</p>
                          </td>
                          <td width="20%"><input type="checkbox" name="wish_topic[]" class="link_ch" id="theme10"
                              value="10"><label class="icon-label2" for="theme10"><i
                                class="fa-solid fa-bars"></i></label>
                            <p style="display: inline-block;color:#B0A5C6;font-size:15px;">其他</p>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-sm-2 col-form-label">許願截止日期*</label>
                  <div class="col-sm-10">
                    <input type="date" name="end" class="form-control" value="<?php echo $max_date ?>"
                      max="<?php echo $max_date ?>" id="end-date" required>
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-sm-2 col-form-label">參考網址</label>
                  <div class="col-sm-10">
                    <input type="text" name="wish_link" class="form-control">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-sm-2 col-form-label">商品圖片(可選多張)*</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" name="wish_photo[]" multiple style="width:635px;margin:auto"
                      required>
                  </div>
                </div>

                <div class="modal-footer">
                  <button type="submit" class="btn insert_button">確定許願</button>
                </div>
              </form>
            </div>
          </div>
        </div>
  </section><!-- End Hero --><br>




  <main id="main">
    <!-- JavaScript -->
    <script>
      function scrollToTab(tabId) {
        var tab = document.getElementById(tabId);
        if (tab) {
          // 获取标签内容的位置
          var tabPosition = tab.getBoundingClientRect().top + window.scrollY;
          // 调整位置，例如向上偏移 100 像素
          var offset = tabPosition - 180;
          // 使用调整后的位置滚动
          window.scrollTo({ top: offset, behavior: 'smooth' });
        }
      }
    </script>


    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">

        <?php
        $tab = $_POST['tab_num'];

        if ($tab == 'all_wish') {
          $nowtab = $tab;
        } elseif ($tab == 'coming_wish') {
          $nowtab = $tab;
        } elseif ($tab == 'end_wish') {
          $nowtab = $tab;
        } else {
          $nowtab = $all_wish;
        }
        ?>
        <ul class="nav justify-content-center">

          <li class="nav-item col-6 col-md-4 col-lg-2">
            <a class="nav-link <?php echo ($nowtab == 'all_wish') ? 'active show' : ''; ?> " data-bs-toggle="tab"
              data-bs-target="#tab-1" href="#tab-1" onclick="scrollToTab('tab-1')">
              <i class="bi bi-binoculars color-cyan"></i>
              <h4>許願區</h4>
            </a>
          </li><!-- End Tab 1 Nav -->

          <li class="nav-item col-6 col-md-4 col-lg-2">
            <a class="nav-link <?php echo ($nowtab == 'coming_wish') ? 'active show' : ''; ?>" data-bs-toggle="tab"
              data-bs-target="#tab-2" href="#tab-2" onclick="scrollToTab('tab-2')">
              <i class="bi bi-box-seam color-indigo"></i>
              <h4>即將結束區</h4>
            </a>
          </li><!-- End Tab 2 Nav -->

          <li class="nav-item col-6 col-md-4 col-lg-2">
            <a class="nav-link <?php echo ($nowtab == 'end_wish') ? 'active show' : ''; ?>" data-bs-toggle="tab"
              data-bs-target="#tab-3" href="#tab-3" onclick="scrollToTab('tab-3')">
              <i class="bi bi-brightness-high color-teal"></i>
              <h4>歷史許願區</h4>
            </a>
          </li><!-- End Tab 3 Nav -->

          <li class="nav-item col-6 col-md-4 col-lg-2">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4" href="#tab-4"
              onclick="scrollToTab('tab-4')">
              <i class="bi bi-command color-red"></i>
              <h4>許願池介紹</h4>
            </a>
          </li><!-- End Tab 4 Nav -->

          <li class="nav-item col-6 col-md-4 col-lg-2">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-5" href="#tab-5"
              onclick="scrollToTab('tab-5')">
              <i class="bi bi-easel color-blue"></i>
              <h4>許願排行榜</h4>
            </a>
          </li><!-- End Tab 5 Nav -->

        </ul>

        <div class="tab-content">

          <div class="tab-pane <?php echo ($nowtab == 'all_wish') ? 'active show' : ''; ?>" id="tab-1">
            <div class="row gy-4">

              <!-- Courses List Section -->
              <section id="courses-list" class="section courses-list">
                <div class="container">
                  <div class="row">
                    <center>
                      <h3 style="color:#b9b0c8" ;><i class="fa-solid fa-feather-pointed"></i>&nbsp;許願區</h3>
                    </center>



                    <section id="blog2" class="blog2">
                      <center>
                        <div class="col-lg-12">
                          <div class="sidebar">
                            <h3 class="sidebar-title">Search (願望名稱)</h3>
                            <div class="sidebar-item search-form">
                              <form method=post action="../wish/wish.php">
                                <input type="hidden" name="tab_num" value="all_wish">
                                <input type="hidden" name="search1" value="yes">
                                <input type="text" name="wish_name" class="form-control">

                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                  data-bs-target="#flush-collapseOne" aria-expanded="false"
                                  aria-controls="flush-collapseOne" style="border-radius:0px; width:100px;">
                                  <i class="fa-solid fa-angle-down"></i>
                                </button>

                                <button type="submit" style="z-index:996;"><i class="bi bi-search"></i></button>
                              </form>
                              <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                  <div class="row">
                                    <br>
                                    <div class="filtertag">
                                      <h5 style="text-align:left;">主題</h5>
                                      <div class="row">

                                        <div class="topicbox">
                                          <label class="checkbox-label">
                                            <input type="checkbox" value="1" name="topic[]">
                                            <div class="checkbox-button"><i class="fa-solid fa-shirt"></i>&nbsp;服飾
                                            </div>
                                          </label>
                                        </div>

                                        <div class="topicbox">
                                          <label class="checkbox-label">
                                            <input type="checkbox" value="2" name="topic[]">
                                            <div class="checkbox-button"><i
                                                class="fa-solid fa-face-smile-beam"></i>&nbsp;美妝
                                            </div>
                                          </label>
                                        </div>

                                        <div class="topicbox">
                                          <label class="checkbox-label">
                                            <input type="checkbox" value="3" name="topic[]">
                                            <div class="checkbox-button"><i class="fa-solid fa-heart"></i>&nbsp;動漫
                                            </div>
                                          </label>
                                        </div>

                                        <div class="topicbox">
                                          <label class="checkbox-label">
                                            <input type="checkbox" value="4" name="topic[]">
                                            <div class="checkbox-button"><i class="fa-solid fa-star"></i>&nbsp;明星
                                            </div>
                                          </label>
                                        </div>

                                        <div class="topicbox">
                                          <label class="checkbox-label">
                                            <input type="checkbox" value="5" name="topic[]">
                                            <div class="checkbox-button"><i
                                                class="fa-solid fa-house-chimney-window"></i>&nbsp;日常
                                            </div>
                                          </label>
                                        </div>

                                        <div class="topicbox">
                                          <label class="checkbox-label">
                                            <input type="checkbox" value="6" name="topic[]">
                                            <div class="checkbox-button"><i class="fa-solid fa-gamepad"></i>&nbsp;3C
                                            </div>
                                          </label>
                                        </div>

                                        <div class="topicbox">
                                          <label class="checkbox-label">
                                            <input type="checkbox" value="7" name="topic[]">
                                            <div class="checkbox-button"><i class="fa-solid fa-utensils"></i>&nbsp;美食
                                            </div>
                                          </label>
                                        </div>

                                        <div class="topicbox">
                                          <label class="checkbox-label">
                                            <input type="checkbox" value="8" name="topic[]">
                                            <div class="checkbox-button"><i
                                                class="fa-solid fa-person-biking"></i>&nbsp;運動
                                            </div>
                                          </label>
                                        </div>

                                        <div class="topicbox">
                                          <label class="checkbox-label">
                                            <input type="checkbox" value="9" name="topic[]">
                                            <div class="checkbox-button"><i class="fa-solid fa-gift"></i>&nbsp;精品
                                            </div>
                                          </label>
                                        </div>

                                        <div class="topicbox">
                                          <label class="checkbox-label">
                                            <input type="checkbox" value="10" name="topic[]">
                                            <div class="checkbox-button"><i class="fa-solid fa-bars"></i>&nbsp;其他
                                            </div>
                                          </label>
                                        </div>

                                      </div>

                                    </div>







                                  </div>
                                </div>
                              </div>
                            </div><!-- End sidebar search formn-->

                          </div><!-- End sidebar -->

                        </div><!-- End blog sidebar -->
                      </center>
                    </section>
                    <?php
                    $wish_name = "%" . $_POST['wish_name'] . "%";
                    $sql = "select * from wish 
                          natural join account
                          where wish_name like '$wish_name' 
                          and wish_shop_id IS null 
                          and wish_state != 4
                          and wish_end >= CURDATE()
                          order by wish_start";
                    if ($_POST['search1'] == 'yes') {
                      $wish_num = 1;
                      $result = mysqli_query($link, $sql);
                      while ($row = mysqli_fetch_assoc($result)) {
                        $wish_id = $row["wish_id"];
                        echo '

                              <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                                <div class="course-item">
                                  <div id="carouselExampleIndicators', $wish_num, '" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner fixed-image">';
                        $a = 1;
                        $sql_photo = "select * from wish_photo where wish_id='$wish_id'";
                        $result_photo = mysqli_query($link, $sql_photo);
                        while ($row_photo = mysqli_fetch_assoc($result_photo)) {
                          echo '
                                      <div class="carousel-item ';
                          if ($a == 1) {
                            echo 'active';
                          }
                          echo '">
                                        <img src="', $row_photo["wish_photo_link"], '" class="d-block w-100" alt="...">
                                      </div>';
                          $a++;
                        }
                        echo '
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators', $wish_num, '" data-bs-slide="prev">
                                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                      <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators', $wish_num, '" data-bs-slide="next">
                                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                      <span class="visually-hidden">Next</span>
                                    </button>
                                  </div>
                                  
                                  <div class="course-content">
                                    <h3><a href="wish-details.php?wish_id=', $wish_id, '">', $row["wish_name"], '</a></h3>
                                    <p class="description scrollable-row">', nl2br($row["wish_narrat"]), '</p>
                                    <div class="trainer d-flex justify-content-between align-items-center">
                                      <span class="price"><i class="fa-regular fa-clock"></i>&nbsp;許願截止日期:', $row["wish_end"], '</span>
                                    </div>
                                    <div class="trainer d-flex justify-content-between align-items-center">
                                      <div class="trainer-profile d-flex align-items-center">
                                        <img src="', $row["user_avatar"], '" style="aspect-ratio: 1/1;" class="img-fluid" alt="">
                                        <a href="" class="trainer-link">', $row["user_name"], '</a>
                                      </div>
                                      <div class="trainer-rank d-flex align-items-center">';
                        $sql_likepeople = "select * from like_wish where wish_id='$wish_id'";
                        $result_likepeople = mysqli_query($link, $sql_likepeople);
                        $count_likepeople = mysqli_num_rows($result_likepeople);
                        echo '<i class="bi bi-heart heart-icon"></i>&nbsp;', $count_likepeople, '&nbsp;';

                        $sql_likewish = "select * from like_wish
                                        where wish_id='$wish_id' and account='{$_SESSION["account"]}'";
                        $result_likewish = mysqli_query($link, $sql_likewish);
                        if (isset($_SESSION["account"])) {
                          if (mysqli_num_rows($result_likewish) == 0) {
                            echo '<a href="like_in_de.php?wish_id=', $row["wish_id"], '&page=wish&method=in"><button class="btn insert_button">收藏許願</button></a>';
                          } else {
                            echo '<a href="like_in_de.php?wish_id=', $row["wish_id"], '&page=wish&method=de"><button class="btn insert_button">取消收藏</button></a>';
                          }
                        }
                        echo '</div>
                                    </div>
                                  </div>
                                </div>  
                              </div><!-- End Course Item-->';
                        $wish_num++;
                      }
                    } else {
                      $wish_num = 1;
                      $sql = "select * from wish
                            natural join account
                            where wish_shop_id IS null and wish_state != 4 AND wish_end >= CURDATE()
                            order by wish_start";
                      $result = mysqli_query($link, $sql);
                      while ($row = mysqli_fetch_assoc($result)) {
                        $wish_id = $row["wish_id"];
                        echo '

                              <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                                <div class="course-item">
                                  <div id="carouselExampleIndicators', $wish_num, '" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner fixed-image">';
                        $a = 1;
                        $sql_photo = "select * from wish_photo where wish_id='$wish_id'";
                        $result_photo = mysqli_query($link, $sql_photo);
                        while ($row_photo = mysqli_fetch_assoc($result_photo)) {
                          echo '
                                      <div class="carousel-item ';
                          if ($a == 1) {
                            echo 'active';
                          }
                          echo '">
                                        <img src="', $row_photo["wish_photo_link"], '" class="d-block w-100" alt="...">
                                      </div>';
                          $a++;
                        }
                        echo '
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators', $wish_num, '" data-bs-slide="prev">
                                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                      <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators', $wish_num, '" data-bs-slide="next">
                                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                      <span class="visually-hidden">Next</span>
                                    </button>
                                  </div>
                                  
                                  <div class="course-content">
                                    <h3><a href="wish-details.php?wish_id=', $wish_id, '">', $row["wish_name"], '</a></h3>
                                    <p class="description scrollable-row">', nl2br($row["wish_narrat"]), '</p>
                                    <div class="trainer d-flex justify-content-between align-items-center">
                                      <span class="price"><i class="fa-regular fa-clock"></i>&nbsp;許願截止日期:', $row["wish_end"], '</span>
                                    </div>
                                    <div class="trainer d-flex justify-content-between align-items-center">
                                      <div class="trainer-profile d-flex align-items-center">
                                        <img src="', $row["user_avatar"], '" style="aspect-ratio: 1/1;" class="img-fluid" alt="">
                                        <a href="" class="trainer-link">', $row["user_name"], '</a>
                                      </div>
                                      <div class="trainer-rank d-flex align-items-center">';
                        $sql_likepeople = "select * from like_wish where wish_id='$wish_id'";
                        $result_likepeople = mysqli_query($link, $sql_likepeople);
                        $count_likepeople = mysqli_num_rows($result_likepeople);
                        echo '<i class="bi bi-heart heart-icon"></i>&nbsp;', $count_likepeople, '&nbsp;';

                        $sql_likewish = "select * from like_wish
                                        where wish_id='$wish_id' and account='{$_SESSION["account"]}'";
                        $result_likewish = mysqli_query($link, $sql_likewish);
                        if (isset($_SESSION["account"])) {
                          if (mysqli_num_rows($result_likewish) == 0) {
                            echo '<a href="like_in_de.php?wish_id=', $row["wish_id"], '&page=wish&method=in"><button class="btn insert_button">收藏許願</button></a>';
                          } else {
                            echo '<a href="like_in_de.php?wish_id=', $row["wish_id"], '&page=wish&method=de"><button class="btn insert_button">取消收藏</button></a>';
                          }
                        }
                        echo '</div>
                                    </div>
                                  </div>
                                </div>  
                              </div><!-- End Course Item-->';
                        $wish_num++;
                      }
                    }


                    ?>

                  </div>
                </div>
              </section><!-- /Courses List Section -->



            </div>
          </div><!-- End Tab Content 1 -->

          <div class="tab-pane <?php echo ($nowtab == 'coming_wish') ? 'active show' : ''; ?>" id="tab-2">
            <div class="row gy-4">

              <!-- Courses List Section -->
              <section id="courses-list" class="section courses-list">
                <div class="container">
                  <div class="row">
                    <center>
                      <h3 style='color:#b9b0c8' ;><i class="fa-solid fa-paw"></i>&nbsp;即將結束區</h3>
                      <p class="p">願望們快要結束了，趕快去看看他們吧!</p>
                    </center>

                    <section id="blog2" class="blog2">
                      <center>
                        <div class="col-lg-12">
                          <div class="sidebar">
                            <h3 class="sidebar-title">Search (願望名稱)</h3>
                            <div class="sidebar-item search-form">
                              <form method=post action="../wish/wish.php">
                                <input type="hidden" name="tab_num" class="form-control" value="coming_wish">
                                <input type="hidden" name="search2" value="yes">
                                <input type="text" name="wish_name" class="form-control">
                                <button type="submit"><i class="bi bi-search"></i></button>
                              </form>
                            </div><!-- End sidebar search formn-->
                          </div><!-- End sidebar -->
                        </div><!-- End blog sidebar -->
                      </center>
                    </section>

                    <?php
                    $oneweek = date('Y-m-d H:i:s', strtotime('7 days'));//先去找7天前的日期
                    $wish_name = "%" . $_POST['wish_name'] . "%";
                    $sql = "select * from wish 
                        natural join account
                        where wish_name like '$wish_name' 
                        and wish_shop_id IS null 
                        and wish_state != 4
                        and wish_end <= '$oneweek' and wish_end >= CURDATE()
                        order by wish_start";
                    if ($_POST['search2'] == 'yes') {
                      $wish_num = $wish_num + 1;
                      $result = mysqli_query($link, $sql);
                      while ($row = mysqli_fetch_assoc($result)) {
                        $wish_id = $row["wish_id"];
                        echo '

                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                              <div class="course-item">
                                <div id="carouselExampleIndicators', $wish_num, '" class="carousel slide" data-bs-ride="carousel">
                                  <div class="carousel-inner fixed-image">';
                        $a = 1;
                        $sql_photo = "select * from wish_photo where wish_id='$wish_id'";
                        $result_photo = mysqli_query($link, $sql_photo);
                        while ($row_photo = mysqli_fetch_assoc($result_photo)) {
                          echo '
                                    <div class="carousel-item ';
                          if ($a == 1) {
                            echo 'active';
                          }
                          echo '">
                                      <img src="', $row_photo["wish_photo_link"], '" class="d-block w-100" alt="...">
                                    </div>';
                          $a++;
                        }
                        echo '
                                  </div>
                                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators', $wish_num, '" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                  </button>
                                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators', $wish_num, '" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                  </button>
                                </div>
                                
                                <div class="course-content">
                                  <h3><a href="wish-details.php?wish_id=', $wish_id, '">', $row["wish_name"], '</a></h3>
                                  <p class="description scrollable-row">', nl2br($row["wish_narrat"]), '</p>
                                  <div class="trainer d-flex justify-content-between align-items-center">
                                    <span class="price"><i class="fa-regular fa-clock"></i>&nbsp;許願截止日期:', $row["wish_end"], '</span>
                                  </div>
                                  <div class="trainer d-flex justify-content-between align-items-center">
                                    <div class="trainer-profile d-flex align-items-center">
                                      <img src="', $row["user_avatar"], '" class="img-fluid" alt="">
                                      <a href="" class="trainer-link">', $row["user_name"], '</a>
                                    </div>
                                    <div class="trainer-rank d-flex align-items-center">';
                        $sql_likepeople = "select * from like_wish where wish_id='$wish_id'";
                        $result_likepeople = mysqli_query($link, $sql_likepeople);
                        $count_likepeople = mysqli_num_rows($result_likepeople);
                        echo '<i class="bi bi-heart heart-icon"></i>&nbsp;', $count_likepeople, '&nbsp;';

                        $sql_likewish = "select * from like_wish
                                      where wish_id='$wish_id' and account='{$_SESSION["account"]}'";
                        $result_likewish = mysqli_query($link, $sql_likewish);
                        if (isset($_SESSION["account"])) {
                          if (mysqli_num_rows($result_likewish) == 0) {
                            echo '<a href="like_in_de.php?wish_id=', $row["wish_id"], '&page=wish&method=in"><button class="btn insert_button">收藏許願</button></a>';
                          } else {
                            echo '<a href="like_in_de.php?wish_id=', $row["wish_id"], '&page=wish&method=de"><button class="btn insert_button">取消收藏</button></a>';
                          }
                        }
                        echo '</div>
                                  </div>
                                </div>
                              </div>  
                            </div><!-- End Course Item-->';
                        $wish_num++;
                      }
                    } else {
                      $wish_num = $wish_num + 1;
                      $oneweek = date('Y-m-d H:i:s', strtotime('7 days'));//先去找7天前的日期
                      $sql = "select * from wish
                          natural join account
                          where wish_shop_id IS null and wish_state != 4 AND wish_end <= '$oneweek' and wish_end >= CURDATE()
                          order by wish_start";
                      $result = mysqli_query($link, $sql);
                      while ($row = mysqli_fetch_assoc($result)) {
                        $wish_id = $row["wish_id"];
                        echo '

                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                              <div class="course-item">
                                <div id="carouselExampleIndicators', $wish_num, '" class="carousel slide" data-bs-ride="carousel">
                                  <div class="carousel-inner fixed-image">';
                        $a = 1;
                        $sql_photo = "select * from wish_photo where wish_id='$wish_id'";
                        $result_photo = mysqli_query($link, $sql_photo);
                        while ($row_photo = mysqli_fetch_assoc($result_photo)) {
                          echo '
                                    <div class="carousel-item ';
                          if ($a == 1) {
                            echo 'active';
                          }
                          echo '">
                                      <img src="', $row_photo["wish_photo_link"], '" class="d-block w-100" alt="...">
                                    </div>';
                          $a++;
                        }
                        echo '
                                  </div>
                                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators', $wish_num, '" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                  </button>
                                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators', $wish_num, '" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                  </button>
                                </div>
                                
                                <div class="course-content">
                                  <h3><a href="wish-details.php?wish_id=', $wish_id, '">', $row["wish_name"], '</a></h3>
                                  <p class="description scrollable-row">', nl2br($row["wish_narrat"]), '</p>
                                  <div class="trainer d-flex justify-content-between align-items-center">
                                    <span class="price"><i class="fa-regular fa-clock"></i>&nbsp;許願截止日期:', $row["wish_end"], '</span>
                                  </div>
                                  <div class="trainer d-flex justify-content-between align-items-center">
                                    <div class="trainer-profile d-flex align-items-center">
                                      <img src="', $row["user_avatar"], '" class="img-fluid" alt="">
                                      <a href="" class="trainer-link">', $row["user_name"], '</a>
                                    </div>
                                    <div class="trainer-rank d-flex align-items-center">';
                        $sql_likepeople = "select * from like_wish where wish_id='$wish_id'";
                        $result_likepeople = mysqli_query($link, $sql_likepeople);
                        $count_likepeople = mysqli_num_rows($result_likepeople);
                        echo '<i class="bi bi-heart heart-icon"></i>&nbsp;', $count_likepeople, '&nbsp;';

                        $sql_likewish = "select * from like_wish
                                      where wish_id='$wish_id' and account='{$_SESSION["account"]}'";
                        $result_likewish = mysqli_query($link, $sql_likewish);
                        if (isset($_SESSION["account"])) {
                          if (mysqli_num_rows($result_likewish) == 0) {
                            echo '<a href="like_in_de.php?wish_id=', $row["wish_id"], '&page=wish&method=in"><button class="btn insert_button">收藏許願</button></a>';
                          } else {
                            echo '<a href="like_in_de.php?wish_id=', $row["wish_id"], '&page=wish&method=de"><button class="btn insert_button">取消收藏</button></a>';
                          }
                        }

                        echo '</div>
                                  </div>
                                </div>
                              </div>  
                            </div><!-- End Course Item-->';
                        $wish_num++;
                      }
                    }

                    ?>

                  </div>
                </div>
              </section><!-- /Courses List Section -->


            </div>
          </div><!-- End Tab Content 2 -->

          <div class="tab-pane <?php echo ($nowtab == 'end_wish') ? 'active show' : ''; ?>" id="tab-3">
            <div class="row gy-4">

              <!-- Courses List Section -->
              <section id="courses-list" class="section courses-list">
                <div class="container">
                  <div class="row">
                    <center>
                      <h3 style='color:#b9b0c8' ;><i class="fa-solid fa-paw"></i>&nbsp;歷史許願區</h3>
                    </center>

                    <section id="blog2" class="blog2">
                      <center>
                        <div class="col-lg-12">
                          <div class="sidebar">
                            <h3 class="sidebar-title">Search (願望名稱&時間)</h3>
                            <div class="sidebar-item search-form">
                              <form method=post action="../wish/wish.php">
                                <input type="hidden" name="tab_num" class="form-control" value="end_wish">
                                <input type="hidden" name="search3" value="yes">
                                <input type="text" name="wish_name" class="form-control">
                                <select class="form-select" aria-label="Default select example" name="wish_end">
                                  <option selected value="%">選擇時間</option>
                                  <option value="1個月內">1個月內</option>
                                  <option value="3個月內">3個月內</option>
                                  <option value="半年內">半年內</option>
                                  <option value="1年內">1年內</option>
                                </select>
                                <button type="submit"><i class="bi bi-search"></i></button>
                              </form>
                            </div><!-- End sidebar search formn-->

                          </div><!-- End sidebar -->
                        </div><!-- End blog sidebar -->
                      </center>
                    </section>
                    <?php

                    $time_range = $_POST['wish_end'];
                    // 根据用户选择的时间范围设置日期
                    switch ($time_range) {
                      case '1個月內':
                        $start_date = date('Y-m-d H:i:s', strtotime('-1 month'));
                        break;
                      case '3個月內':
                        $start_date = date('Y-m-d H:i:s', strtotime('-3 months'));
                        break;
                      case '半年內':
                        $start_date = date('Y-m-d H:i:s', strtotime('-6 months'));
                        break;
                      case '1年內':
                        $start_date = date('Y-m-d H:i:s', strtotime('-1 year'));
                        break;
                      default:
                        // 默认为一年内
                        $start_date = date('Y-m-d H:i:s', strtotime('-1 year'));
                        break;
                    }

                    $wish_name = "%" . $_POST['wish_name'] . "%";


                    $sql = "select * from wish 
                      natural join account
                      where wish_name like '$wish_name' 
                      and wish_shop_id IS null
                      and wish_state != 4 
                      and wish_end BETWEEN '$start_date' AND NOW()
                      order by wish_start";

                    if ($_POST['search3'] == 'yes') {
                      $wish_num = $wish_num + 1;
                      $result = mysqli_query($link, $sql);
                      while ($row = mysqli_fetch_assoc($result)) {
                        $wish_id = $row["wish_id"];
                        echo '
                          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                            <div class="course-item">
                              <div id="carouselExampleIndicators', $wish_num, '" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner fixed-image">';
                        $a = 1;
                        $sql_photo = "select * from wish_photo where wish_id='$wish_id'";
                        $result_photo = mysqli_query($link, $sql_photo);
                        while ($row_photo = mysqli_fetch_assoc($result_photo)) {
                          echo '
                                  <div class="carousel-item ';
                          if ($a == 1) {
                            echo 'active';
                          }
                          echo '">
                                    <img src="', $row_photo["wish_photo_link"], '" class="d-block w-100" alt="...">
                                  </div>';
                          $a++;
                        }
                        echo '
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators', $wish_num, '" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators', $wish_num, '" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                              </div> 
                            
                              
                              <div class="course-content">
                                <h3><a href="wish-details.php?wish_id=', $wish_id, '">', $row["wish_name"], '</a></h3>
                                <p class="description">', nl2br($row["wish_narrat"]), '</p>
                                <div class="trainer d-flex justify-content-between align-items-center">
                                  <span class="price"><i class="fa-regular fa-clock"></i>&nbsp;許願截止日期: ', $row["wish_end"], '</span>
                                </div>
                                <div class="trainer d-flex justify-content-between align-items-center">
                                  <div class="trainer-profile d-flex align-items-center">
                                    <img src="', $row["user_avatar"], '" class="img-fluid" alt="">
                                    <a href="" class="trainer-link">', $row["user_name"], '</a>
                                  </div>';
                        if ($row["wish_state"] == 1) {
                          echo '
                                    <div class="trainer-rank d-flex align-items-center">
                                      <button class="btn button_success" disabled>許願成功</button>
                                    </div>';
                        } else {
                          echo '
                                    <div class="trainer-rank d-flex align-items-center">
                                      <button class="btn button_fail" disabled>許願失敗</button>
                                    </div>';
                        }

                        echo '
                                </div>
                              </div>
                            </div>
                          </div> <!-- End Course Item-->';
                        $wish_num++;
                      }
                    } else {
                      $wish_num = $wish_num + 1;
                      $sql = "select * from wish
                        natural join account
                        where wish_shop_id IS null and wish_state != 4 AND wish_end < CURDATE()
                        order by wish_start";
                      $result = mysqli_query($link, $sql);
                      while ($row = mysqli_fetch_assoc($result)) {
                        $wish_id = $row["wish_id"];
                        echo '
                          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                            <div class="course-item">
                              <div id="carouselExampleIndicators', $wish_num, '" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner fixed-image">';
                        $a = 1;
                        $sql_photo = "select * from wish_photo where wish_id='$wish_id'";
                        $result_photo = mysqli_query($link, $sql_photo);
                        while ($row_photo = mysqli_fetch_assoc($result_photo)) {
                          echo '
                                  <div class="carousel-item ';
                          if ($a == 1) {
                            echo 'active';
                          }
                          echo '">
                                    <img src="', $row_photo["wish_photo_link"], '" class="d-block w-100" alt="...">
                                  </div>';
                          $a++;
                        }
                        echo '
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators', $wish_num, '" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators', $wish_num, '" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                              </div> 
                            
                              
                              <div class="course-content">
                                <h3><a href="wish-details.php?wish_id=', $wish_id, '">', $row["wish_name"], '</a></h3>
                                <p class="description">', nl2br($row["wish_narrat"]), '</p>
                                <div class="trainer d-flex justify-content-between align-items-center">
                                  <span class="price"><i class="fa-regular fa-clock"></i>&nbsp;許願截止日期: ', $row["wish_end"], '</span>
                                </div>
                                <div class="trainer d-flex justify-content-between align-items-center">
                                  <div class="trainer-profile d-flex align-items-center">
                                    <img src="', $row["user_avatar"], '" class="img-fluid" alt="">
                                    <a href="" class="trainer-link">', $row["user_name"], '</a>
                                  </div>';
                        if ($row["wish_state"] == 1) {
                          echo '
                                    <div class="trainer-rank d-flex align-items-center">
                                      <button class="btn button_success" disabled>許願成功</button>
                                    </div>';
                        } else {
                          echo '
                                    <div class="trainer-rank d-flex align-items-center">
                                      <button class="btn button_fail" disabled>許願失敗</button>
                                    </div>';
                        }

                        echo '
                                </div>
                              </div>
                            </div>
                          </div> <!-- End Course Item-->';
                        $wish_num++;
                      }
                    }

                    ?>
                  </div>
                </div>
              </section><!-- /Courses List Section -->

            </div>
          </div><!-- End Tab Content 3 -->

          <div class="tab-pane" id="tab-4">
            <div class="row gy-4">

              <!-- ======= Why Us Section ======= -->
              <section id="why-us" class="why-us section-bg">
                <div class="container-fluid" data-aos="fade-up">

                  <div
                    class="col-lg-12 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                    <div class="accordion-list">
                      <ul>
                        <li>
                          <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1">許願池介紹<i
                              class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                          <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                            <p>
                              ◆許願池總共分5區，"許願區"、"即將結束區"、歷史許願區、"許願池介紹"、"許願排行榜"。<br>
                              ◆"許願區"會有<sapn style="color:#c199a9;">目前正在被許願</sapn>的商品，點擊商品名稱即可進入商品詳情頁。<br>
                              ◆"商品詳情頁"包含許願者、許願日期、商品圖片、許願敘述、我有興趣人數、商品標籤、賣家出價。<br>
                              ◆"即將結束區"會有<sapn style="color:#c199a9;">即將在1個禮拜後到期</sapn>的許願商品。<br>
                              ◆"歷史許願區"會有<sapn style="color:#c199a9;">1年內</sapn>的到期許願商品，包含許願成功和許願失敗的商品。<br>
                              ◆"許願成功"表示此願望<sapn style="color:#c199a9;">有賣家出價並成團</sapn>，"許願失敗"表示此願望<sapn
                                style="color:#c199a9;">無人出價或有賣家出價但沒有成團</sapn>。<br>
                              ◆"許願排行榜"會顯示當月熱門許願排名和當月賣家許願完成數排名，"當月熱門許願排名"會根據<sapn style="color:#c199a9;">我有興趣的人數</sapn>
                              來排名。<br>
                              ◆許願池右上角會顯示"買家當月剩餘許願次數"和"目前平台的總許願次數"。<br>
                            </p>
                          </div>
                        </li>

                        <li>
                          <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed">許願規則<i
                              class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                          <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                            <p>
                              ◆每位使用者<sapn style="color:#c199a9;">1個月內都有3次的許願機會</sapn>，3個許願用完就必須等到下個月才能再次許願。<br>
                              ◆如果對某個許願商品有興趣可以點擊<sapn style="color:#c199a9;">"我有興趣"按鈕</sapn>。<br>
                              ◆當有賣家願意出價時，買家可以根據賣家的出價價格，點擊<sapn style="color:#c199a9;">"我要跟團"按鈕</sapn>，目前意願人數就會增加，<sapn
                                style="color:#c199a9;">每個買家只能選擇1位出價賣家</sapn>。<br>
                              ◆已成團表示此賣家確定開團，可以進行下單的動作。<br>
                              ◆待成團表示買家還無法進行下單，需等待賣家將狀態改為已成團。<br>
                              ◆<sapn style="color:#c199a9;">點擊"我要跟團"不代表下單</sapn>，需點擊"賣場連結"才能進行下單。<br>
                            </p>
                          </div>
                        </li>

                        <li>
                          <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed">如何許願<i
                              class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                          <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                            <p>
                              ◆使用者點擊<sapn style="color:#c199a9;">"Make A Wish"按鈕</sapn>，即可進行許願。<br>
                              ◆每個願望的<sapn style="color:#c199a9;">期限為3個月</sapn>。<br>
                              ◆使用者填寫完許願資訊後，按下確定許願，即<sapn style="color:#c199a9;">無法更改許願資訊</sapn>。<br>
                              ◆若使用者想取消此願望，可點擊<sapn style="color:#c199a9;">"取消許願"按鈕</sapn>。<br>
                              ◆若此願望<sapn style="color:#c199a9;">已有賣家出價</sapn>，使用者就<sapn style="color:#c199a9;">無法點擊
                              </sapn>"取消許願"按鈕。<br>
                              ◆若要<sapn style="color:#c199a9;">更改許願資訊</sapn>，請取消該次許願，可按"刪除願望"按鈕並再次進行許願。<br>


                            </p>
                          </div>
                        </li>

                        <li>
                          <a data-bs-toggle="collapse" data-bs-target="#accordion-list-4" class="collapsed">如何出價<i
                              class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                          <div id="accordion-list-4" class="collapse" data-bs-parent=".accordion-list">
                            <p>
                              ◆賣家若願意代購此願望商品，點進商品詳情頁按下<sapn style="color:#c199a9;">"我要出價"按鈕</sapn>，即可出價。<br>
                              ◆賣家可以根據<sapn style="color:#c199a9;">我有興趣的人數</sapn>來決定是否代購此商品。<br>
                              ◆賣家填寫完出價資訊後，按下確定出價，即<sapn style="color:#c199a9;">無法更改出價資訊</sapn>。<br>
                              ◆歷史許願區中的許願是<sapn style="color:#c199a9;">無法出價的</sapn>。<br>
                              <br>
                            </p>
                          </div>
                        </li>



                      </ul>
                    </div>

                  </div>


                </div>
              </section><!-- End Why Us Section -->

            </div>
          </div><!-- End Tab Content 4 -->

          <div class="tab-pane" id="tab-5">
            <div class="row gy-4">

              <section id="testimonials" class="testimonials">
                <div class="container" data-aos="fade-up">
                  <center>
                    <h3 style='color:#b9b0c8' ;><i class="fa-solid fa-award"></i>&nbsp;當月熱門許願排名</h3>
                  </center>
                  <ul class="carousel-indicators" id="hero-carousel-indicators"></ul>

                  <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">
                      <?php
                      $startOfMonth = date('Y-m-01'); // 當月的第一天
                      $endOfMonth = date('Y-m-t 23:59:59'); // 當月的最後一天
                      $sql = "select wish.*,user_name,wish_photo_link, COUNT(like_wish.wish_id) as like_count  from wish
                        natural join account
                        natural join wish_photo
                        INNER JOIN like_wish ON wish.wish_id = like_wish.wish_id
                        where time between '{$startOfMonth}' and '{$endOfMonth}'
                        and wish_shop_id IS null 
                        and wish_state != 4
                        GROUP BY wish.wish_id
                        ORDER BY like_count DESC
                        LIMIT 5";
                      $result = mysqli_query($link, $sql);



                      while ($row = mysqli_fetch_assoc($result)) {
                        $wish_id = $row["wish_id"];
                        $sql_likepeople = "select * from like_wish where wish_id='$wish_id'";
                        $result_likepeople = mysqli_query($link, $sql_likepeople);
                        $count_likepeople = mysqli_num_rows($result_likepeople);
                        echo '
                
                            <div class="swiper-slide">
                              <div class="testimonial-wrap">
                                  <div class="testimonial-item">
                                      <img src="', $row['wish_photo_link'], '" class="testimonial-img" alt="">
                                      <h6><a href="wish-details.php?wish_id=', $wish_id, '">', $row["wish_name"], '</a></h6>
                                      <h4>', $row['wish_start'], '</h4>
                                      <p class="scrollable-row">
                                          <strong><i class="bi bi-person"></i>&nbsp;許願者</strong>： &nbsp;', $row['user_name'], '<br>
                                          <strong><i class="bi bi-heart heart-icon"></i>&nbsp;收藏人數</strong>： &nbsp;', $count_likepeople, '<br>
                                          <strong><i class="bi bi-chat-dots"></i>&nbsp;敘述</strong>：', $row['wish_narrat'], '
                                      </p>
                                  </div>
                              </div>
                            </div><!-- End testimonial item -->';
                      }
                      ?>

                    </div>
                    <div class="swiper-pagination"></div>
                  </div><br><br>


                  <!-- <center><h3 style='color:#b9b0c8';><i class="fa-solid fa-award"></i>&nbsp;當月賣家許願完成數排名</h3></center>
                  <ul class="carousel-indicators" id="hero-carousel-indicators"></ul>
          
                  <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">
          
                      <div class="swiper-slide">
                        <div class="testimonial-wrap">
                          <div class="testimonial-item">
                            <img src="./assets/img/1st-prize.png" class="testimonial-img" alt="">
                            <h6>排球少年日本代購</h6>
                            <p>
                              <strong><i class="fa-solid fa-trophy"></i>&nbsp;完成數</strong>： 8&nbsp;
                              <button class="button"><img src="https://i.pinimg.com/564x/9e/e7/45/9ee745969f4b2a4bf3e46d0b0f287533.jpg" style="width:20px;height:20px; border-radius: 10px;" alt="">&nbsp;賣場連結</button><br>
                            </p>
                          </div>
                        </div>
                      </div>
          
                      <div class="swiper-slide">
                        <div class="testimonial-wrap">
                          <div class="testimonial-item">
                            <img src="./assets/img/2nd-place.png" class="testimonial-img" alt="">
                            <h6>排球少年日本代購</h6>
                            <p>
                              <strong><i class="fa-solid fa-trophy"></i>&nbsp;完成數</strong>： 8&nbsp;
                              <button class="button"><img src="https://i.pinimg.com/564x/9e/e7/45/9ee745969f4b2a4bf3e46d0b0f287533.jpg" style="width:20px;height:20px; border-radius: 10px;" alt="">&nbsp;賣場連結</button><br>
                            </p>
                          </div>
                        </div>
                      </div>
          
                      <div class="swiper-slide">
                        <div class="testimonial-wrap">
                          <div class="testimonial-item">
                            <img src="./assets/img/3rd-place.png" class="testimonial-img" alt="">
                            <h6>排球少年日本代購</h6>
                            <p>
                              <strong><i class="fa-solid fa-trophy"></i>&nbsp;完成數</strong>： 8&nbsp;
                              <button class="button"><img src="https://i.pinimg.com/564x/9e/e7/45/9ee745969f4b2a4bf3e46d0b0f287533.jpg" style="width:20px;height:20px; border-radius: 10px;" alt="">&nbsp;賣場連結</button><br>
                            </p>
                          </div>
                        </div>
                      </div>
          
                      <div class="swiper-slide">
                        <div class="testimonial-wrap">
                          <div class="testimonial-item">
                            <img src="./assets/img/4th-prize.png" class="testimonial-img" alt="">
                            <h6>排球少年日本代購</h6>
                            <p>
                              <strong><i class="fa-solid fa-trophy"></i>&nbsp;完成數</strong>： 8&nbsp;
                              <button class="button"><img src="https://i.pinimg.com/564x/9e/e7/45/9ee745969f4b2a4bf3e46d0b0f287533.jpg" style="width:20px;height:20px; border-radius: 10px;" alt="">&nbsp;賣場連結</button><br>
                            </p>
                          </div>
                        </div>
                      </div>
          
                      <div class="swiper-slide">
                        <div class="testimonial-wrap">
                          <div class="testimonial-item">
                            <img src="./assets/img/5th-prize.png" class="testimonial-img" alt="">
                            <h6>排球少年日本代購</h6>
                            <p>
                              <strong><i class="fa-solid fa-trophy"></i>&nbsp;完成數</strong>： 8&nbsp;
                              <button class="button"><img src="https://i.pinimg.com/564x/9e/e7/45/9ee745969f4b2a4bf3e46d0b0f287533.jpg" style="width:20px;height:20px; border-radius: 10px;" alt="">&nbsp;賣場連結</button><br>
                            </p>
                          </div>
                        </div>
                      </div>
          
                    </div>
                    <div class="swiper-pagination"></div>
                  </div> -->

                </div>
              </section><!-- End Testimonials Section -->





            </div>
          </div><!-- End Tab Content 5 -->



        </div>
      </div>
    </section><!-- End Features Section -->

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