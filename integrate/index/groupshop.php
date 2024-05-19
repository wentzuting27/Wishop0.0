<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>WISHOP 團購一覽</title>
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

  .topic-label {
    display: inline-block;
    border-radius: 5px;
    background-color: #B0A5C6;
    color: #fff;
    padding: 3px 10px;
    margin: 5px;
  }
</style>


<style>
  .row .col ul {
    list-style-type: none;
    padding-left: 0;
  }

  /* Checkbox美化 */
  input[type="radio"] {
    display: none;
  }

  /* Checkbox的自訂樣式 */
  input[type="radio"]+label {
    display: inline-block;
    cursor: pointer;
    padding: 5px 10px;
    border: 2px solid #B0A5C6;
    color: #B0A5C6;
    border-radius: 5px;
    margin: 5px;
  }

  /* Checkbox被勾選時的樣式 */
  input[type="radio"]:checked+label {
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
          <li class="dropdown"><a href="portfolio.php"><span>購物</span></a>
          </li>
          <li><a href="groupshop.php" class="active">團購</a></li>
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
        padding: 20px 0;

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

        height: 50px;
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
            <form method=post action="groupshop.php">
              <div class="row" style="width:100%;">

                <div class="accordion accordion-flush" id="accordionFlushExample">
                  <div class="accordion-item">


                    <div class="input-group mb-4" style="background-color:#F8F9FA;  justify-content: center;">
                      <div class="col-8">
                        <input type="hidden" name="search_y_n" value="yes" style="border: none; height:50px;">
                        <input type="text" placeholder="輸入商品名稱" name="commodity_group_name"
                          style="border: none; height:50px;">
                      </div>


                      <h2 class="accordion-header" id="flush-headingOne" style="margin-bottom: 10px;">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne"
                          style="border-radius:0px; width:100px;">
                          <i class="fa-solid fa-angle-down"></i>&nbsp;&nbsp;篩選&nbsp;
                        </button>
                      </h2>

                      <button type="submit" style="height:50px;"><i class="bi bi-search"></i></button>
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

                                  <input type="radio" name="nation" id="nation_all" value="%"><label
                                    for="nation_all">&nbsp;ALL</label>
                                  <input type="radio" name="nation" id="nation1" value="1"><label
                                    for="nation1">&nbsp;日本</label>
                                  <input type="radio" name="nation" id="nation2" value="2"><label
                                    for="nation2">&nbsp;韓國</label>
                                  <input type="radio" name="nation" id="nation3" value="3"><label
                                    for="nation3">&nbsp;台灣</label>
                                  <input type="radio" name="nation" id="nation4" value="4"><label
                                    for="nation4">&nbsp;法國</label>
                                  <input type="radio" name="nation" id="nation5" value="5"><label
                                    for="nation5">&nbsp;美國</label>
                                  <input type="radio" name="nation" id="nation6" value="6"><label
                                    for="nation6">&nbsp;義大利</label>
                                  <input type="radio" name="nation" id="nation7" value="7"><label
                                    for="nation7">&nbsp;中國</label>
                                  <input type="radio" name="nation" id="nation8" value="8"><label
                                    for="nation8">&nbsp;泰國</label>
                                  <input type="radio" name="nation" id="nation9" value="9"><label
                                    for="nation9">&nbsp;英國</label>
                                  <input type="radio" name="nation" id="nation10" value="10"><label
                                    for="nation10">&nbsp;其他</label>
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

        <?php
        if (!empty($_SESSION['account'])) {
          echo '
          <a href="#" data-bs-toggle="modal" data-bs-target="#update_social_Modal">
          <i class="fa-regular fa-circle-question fa-lg" style="float: right;" aria-hidden="true"></i>
          </a>';
        } ?>

        <!-- 連結管理Modal -->
        <div class="modal fade" id="update_social_Modal" tabindex="-1" aria-labelledby="update_social_ModalLabel"
          aria-hidden="true">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="update_socialLabel">操作教學</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <!-- ======= Schedule Section ======= -->

                <style>
                  /* 主體顏色設置 */
                  .section-with-bg {
                    padding: 20px;
                  }

                  /* 標籤導航樣式 */
                  .nav-pills .nav-link {
                    color: #ffffff;
                    /* 文字顏色 */
                    background-color: #B0A5C6;
                    /* 背景顏色 */
                    border-radius: 10px;
                    /* 可以選擇是否設置圓角 */
                    margin-right: 15px;
                    /* 調整按鈕間距 */
                    font-size: 18px;
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

                <section id="schedule" class="section-with-bg">
                  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                        aria-selected="true">功能&nbsp;</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                        aria-selected="false">搜尋&nbsp;&nbsp;<i class="fa-solid fa-magnifying-glass"></i></button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                        aria-selected="false">標籤&nbsp;&nbsp;<i class="fa-solid fa-tag"></i></button>
                    </li>
                  </ul>
                  <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                      aria-labelledby="pills-home-tab">
                      <mark style="font-size:18px;"><i class="fa-solid fa-wand-sparkles"></i>&nbsp;推薦您感興趣的商品！</mark>
                      <div style="margin-left:5px; margin-right:5px; font-size: 16px;">
                        <p><b>發現：</b>將會顯示您註冊時感興趣的主題商品以及您追蹤的店家商品</p>
                        <p><b>追蹤：</b>顯示你所追蹤(收藏)的店家商品</p>
                      </div>
                      <div class="d-flex justify-content-center">
                        <img src="../files/篩選.jpg" alt="發現功能" style="min-width:100px; height:60%">
                      </div>

                    </div>

                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                      <p>您可以透過</p>
                      <ul>
                        <li>關鍵字查詢</li>
                        <li>主題查詢</li>
                        <li>國家查詢</li>
                      </ul>
                      <p>當然也可以同時選擇來篩選以便尋找您需要的商品！</p>
                    </div>

                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                      功能開發中...
                    </div>

                  </div>






                </section><!-- End Schedule Section -->



              </div>
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">


              <?php

              if ($_POST['nation'] != '') {
                $nation = $_POST['nation'];
              } else {
                $nation = '%';
              }

              $search_y_n = "no";
              if ($_POST["search_y_n"] == "yes") {
                $search_y_n = "yes";
                echo '<h5 style="text-align: center;"><b>';

                if (empty($_POST['commodity_group_name'])) {
                  echo '全部一覽';
                } else {
                  echo '『';
                  echo $_POST['commodity_group_name'];
                  echo '』';

                }

                echo '&nbsp;<i class="fa-solid fa-magnifying-glass"></i></b></h5>';




                if (empty($_POST['nation'])) {
                  echo '';
                } else {
                  echo '<i class="fa-solid fa-location-dot"></i>&nbsp;<b>';
                  //篩選國家顯示
                  switch ($_POST["nation"]) {
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
                    default:
                      echo "ALL";
                  }
                  echo '<br>';
                }




                echo '</b>';



                //篩選主題顯示
                if (in_array("1", $_POST["topic"])) {
                  echo '<span class="topic-label">服飾</span>&nbsp;';
                }
                if (in_array("2", $_POST["topic"])) {
                  echo '<span class="topic-label">美妝</span>&nbsp;';
                }
                if (in_array("3", $_POST["topic"])) {
                  echo '<span class="topic-label">動漫</span>&nbsp;';
                }
                if (in_array("4", $_POST["topic"])) {
                  echo '<span class="topic-label">明星</span>&nbsp;';
                }
                if (in_array("5", $_POST["topic"])) {
                  echo '<span class="topic-label">日常</span>&nbsp;';
                }
                if (in_array("6", $_POST["topic"])) {
                  echo '<span class="topic-label">數位3C</span>&nbsp;';
                }
                if (in_array("7", $_POST["topic"])) {
                  echo '<span class="topic-label">美食</span>&nbsp;';
                }
                if (in_array("8", $_POST["topic"])) {
                  echo '<span class="topic-label">運動</span>&nbsp;';
                }
                if (in_array("9", $_POST["topic"])) {
                  echo '<span class="topic-label">精品</span>&nbsp;';
                }
                if (in_array("10", $_POST["topic"])) {
                  echo '<span class="topic-label">其它</span>&nbsp;';
                }



                echo '<hr>';
              }

              if (!empty($_SESSION['account']) and $search_y_n == "no") {
                // 使用者已登入，顯示 HTML 元素
              
                echo '<li data-filter="*" class="filter-active">發現</li>';
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
              $search_y_n = "no";
              if ($_POST["search_y_n"] == "yes") {
                $search_y_n = "yes";
              }
              if ($_POST["search_y_n"] == "yes" or !isset($_SESSION["account"])) {
                $sql = "select * from commodity_group
                JOIN shop on commodity_group.shop_id = shop.shop_id
              where commodity_group_name like'%{$_POST['commodity_group_name']}%' and nation like'$nation' AND close_order_date > NOW()
              ORDER BY RAND() ";
              } elseif ($search_y_n == "no") {
                $sql = "SELECT * FROM commodity_group
                        JOIN shop ON commodity_group.shop_id = shop.shop_id
                        WHERE commodity_group_name LIKE '%{$_POST['commodity_group_name']}%' AND nation LIKE '$nation' AND close_order_date > NOW()
                          AND (
                            commodity_group_id IN (
                              SELECT commodity_group_id 
                              FROM group_topic 
                              WHERE topic IN (
                                SELECT topic 
                                FROM like_topic 
                                WHERE account = '{$_SESSION["account"]}'
                              )
                            ) 
                            OR commodity_group.shop_id IN (
                              SELECT shop_id 
                              FROM like_shop 
                              WHERE account = '{$_SESSION["account"]}'
                            )
                          )
                        ORDER BY RAND()";
              }


              ?>



          <?php
          $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');

          $result = mysqli_query($link, $sql);


          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {

              $commodity_group_id = $row["commodity_group_id"];


              $sql2 = "SELECT * FROM commodity_group
              JOIN shop ON commodity_group.shop_id = shop.shop_id
              where commodity_group_name like'%{$_POST['commodity_group_name']}%' 
              and commodity_group.shop_id in(select shop_id from like_shop where account='{$_SESSION["account"]}') and commodity_group_id='{$row["commodity_group_id"]}' AND close_order_date > NOW()
              GROUP BY commodity_group_id
              ";

              $result2 = mysqli_query($link, $sql2);


              //topic複選
              $alltopic = array();
              $sql_alltopic = "select topic from group_topic where commodity_group_id = '$commodity_group_id'";
              $result_alltopic = mysqli_query($link, $sql_alltopic);

              while ($row_alltopic = mysqli_fetch_assoc($result_alltopic)) {
                $alltopic[] = $row_alltopic['topic'];
              }


              $checkselect = 'yes';
              $topic = $_POST['topic'];
              foreach ($topic as $check) {

                if (!in_array($check, $alltopic)) {
                  $checkselect = 'no';
                  break;
                }
              }

              if ($checkselect == 'yes') {



                echo '
                <div class="col-lg-4 col-md-6 portfolio-item  filter-';
                if (mysqli_num_rows($result2)) {
                  echo 'follow';
                }
                echo ' wow fadeInUp">
                    <div class="portfolio-wrap">
                        <a href="../lisa/InnerPage.php?commodity_group_id=' . $row['commodity_group_id'] . '"
                            data-glightbox="type: external" title="' . $row['commodity_group_name'] . '">
                            <figure>
                                <img src="' . $row['commodity_group_bg'] . '" class="img-fluid" alt="">
                            </figure>
                        </a>
                        <div class="portfolio-info">
                            <h4>' . $row['commodity_group_name'] . '</h4>
                            <p><a href="../shop/shop.php?shop_id=' . $row['shop_id'] . '">' . $row['shop_name'] . '</a></p>
                        </div>
                    </div>
                </div>

                '
                ;
              }
            }
          } else {

            echo '
            <h5 style="text-align: center;"><b>查無資料</b></h5>';

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