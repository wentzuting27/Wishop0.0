<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>WISHOP 商品一覽</title>
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
</style>


<style>
  .row .col ul {
    list-style-type: none;
    padding-left: 0;
  }

  /* Checkbox美化 */
  input[type="checkbox"] {
    display: none;
  }

  /* Checkbox的自訂樣式 */
  input[type="checkbox"]+label {
    display: inline-block;
    cursor: pointer;
    padding: 5px 10px;
    border: 2px solid #B0A5C6;
    color: #B0A5C6;
    border-radius: 5px;
    margin: 5px;
  }

  /* Checkbox被勾選時的樣式 */
  input[type="checkbox"]:checked+label {
    background-color: #E9C9D6;
    border: 2px solid #E9C9D6;
    color: #fff;
  }
</style>

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
          <li class="dropdown"><a href="portfolio.php" class="active"><span>購物</span><i
                class="bi bi-chevron-down"></i></a>
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

  <main id="main">

    <style>
      .breadcrumbs {
        padding: 40px 0;
        background: #f8f9fa;
        min-height: 90px;
        margin-top: 50px;
      }

      /* 修改手風琴篩選按鈕的背景顏色、文字顏色和邊框顏色 */
      .accordion-header {
        background-color: #F8F9FA;
        /* 這裡可以換成你想要的背景顏色 */
      }


      /* 修改手風琴篩選按鈕的激活（展開）狀態的背景顏色、文字顏色和邊框顏色 */
      .accordion-button[aria-expanded="true"] {
        background-color: #B0A5C6;
        /* 這裡可以換成你想要的激活背景顏色 */
        color: #FFF;
        /* 這裡可以換成你想要的激活文字顏色 */
        border-color: #FFF;
        /* 這裡可以換成你想要的激活邊框顏色 */

        outline: none;
        box-shadow: none;
      }





      /* 禁用按鈕點擊時的焦點效果 */
      .accordion-button:focus {
        outline: none;
        box-shadow: none;
      }

      /* 隱藏 Bootstrap 手風琴元素展開時的箭頭 */
      .accordion-button::after {
        display: none !important;
      }
    </style>

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="row">


          <div class="sidebar-item search-form">
            <form method=post action="portfolio.php">
              <div class="row" style="width:100%;">

                <div class="accordion accordion-flush" id="accordionFlushExample" >
                  <div class="accordion-item">

                  
                    

                    <div class="input-group mb-3" style="background-color:#F8F9FA;">
                    
                      <div  class="col-10">
                      
                      <input type="text" placeholder="輸入商品名稱" name="commodity_name" style="border: none; height:50px;">
                      </div>

                      <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne"
                          style="border-radius:0px;" style="width:100px;  ">
                          <i class="fa-solid fa-angle-down"></i>&nbsp;&nbsp;篩選&nbsp;&nbsp;&nbsp;
                        </button>
                      </h2>

                      <button type="submit"><i class="bi bi-search"></i></button>
                    </div>

                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                      data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">
                        <div class="row">

                          <div class="col-6">
                            <div class="filtertag">
                              <h5>主題</h5>
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
                                    <div class="checkbox-button"><i class="fa-solid fa-face-smile-beam"></i>&nbsp;美妝
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
                                    <div class="checkbox-button"><i class="fa-solid fa-person-biking"></i>&nbsp;運動
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
                          <div class="col-3">
                            <div class="filtertag">
                              <h5>國家</h5>
                              <div class="row">
                                <div class="col">
                                  <input type="checkbox" name="nation" id="1"><label for="1">&nbsp;日本</label>
                                  <input type="checkbox" name="nation" id="2"><label for="2">&nbsp;韓國</label>
                                  <input type="checkbox" name="nation" id="3"><label for="3">&nbsp;台灣</label>
                                  <input type="checkbox" name="nation" id="4"><label for="4">&nbsp;法國</label>
                                  <input type="checkbox" name="nation" id="5"><label for="5">&nbsp;美國</label>
                                  <input type="checkbox" name="nation" id="6"><label for="6">&nbsp;義大利</label>
                                  <input type="checkbox" name="nation" id="7"><label for="7">&nbsp;中國</label>
                                  <input type="checkbox" name="nation" id="8"><label for="8">&nbsp;泰國</label>
                                  <input type="checkbox" name="nation" id="9"><label for="9">&nbsp;英國</label>
                                  <input type="checkbox" name="nation" id="10"><label for="10">&nbsp;加拿大</label>
                                </div>
                              </div>

                            </div>
                          </div>

                          <div class="col-3">
                            <div class="filtertag">
                              <h5>熱門標籤</h5>
                            </div>
                            <a type="button" href="tag.php" class="btn-tag">#排球少年</a>
                            <a type="button" href="tag.php" class="btn-tag">#火影忍者</a>
                            <a type="button" href="tag.php" class="btn-tag">#ATEEZ</a>
                            <a type="button" href="tag.php" class="btn-tag">#偶像夢幻季</a>
                            <a type="button" href="tag.php" class="btn-tag">#BTS</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>



              </div>
            </form>
          </div>


        </div>

      </div>

      </div>
    </section><!-- End Breadcrumbs -->



    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">



        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">發現</li>


              <?php

              if (!empty($_SESSION['account'])) {
                // 使用者已登入，顯示 HTML 元素
                echo '<li data-filter=".filter-follow">追蹤店家</li>';
                echo '<li data-filter=".filter-tag">關注標籤</li>';
              } else
                '<a href="login.php" class="getstarted" style="color: white;">登入</a>'
                  ?>





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
              ";

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

          <!-- <div class="col-lg-4 col-md-6 portfolio-item  wow fadeInUp">
            <div class="portfolio-wrap">

              <a href="portfolio-details.php" class="portfolio-details-lightbox" data-glightbox="type: external"
                title="Portfolio Details">
                <figure>
                  <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                </figure>
              </a>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.php" class="portfolio-details-lightbox" data-glightbox="type: external"
                    title="Portfolio Details">商品1</a></h4>
                <p><i class="fa-solid fa-dollar-sign">&nbsp;100</i></p>
              </div>


            </div>
          </div> -->










        </div>



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