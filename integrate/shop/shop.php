<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>賣場介面 - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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
          <li><a href="../index/index.php" >首頁</a></li>
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
          <li><a href="../wish/wish.php">許願池</a></li>

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

  <!-- ======= shop_bg Section ======= -->
  <?php
  $shop_id=1;//在哪一個shop要用接值得方式,先假設1,之後再改
  $link=mysqli_connect('localhost','root','12345678','wishop');
  $sql="select *
  from shop
  where shop_id=$shop_id";
  $result=mysqli_query($link,$sql);
  while($row=mysqli_fetch_assoc($result))
  {
    echo '
  <section id="shop_bg" class="d-flex justify-cntent-center align-items-center" style="background-image: url(',$row["shop_bg"],');">
    
  </section><!-- End Hero -->

  <div class="profile2">
      <img src="',$row["shop_avatar"],'" alt="" class="img-fluid rounded-circle">
      <h1 class="text-light"><a href="index.php">',$row["shop_name"],'</a></h1>
      
  </div>
  <div class="social-links">
    <a href="./shop_time.php" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="官方推特" data-bs-arrow-color="#B0A5C6"><i class="bx bxl-twitter"></i></a>
    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="三麗鷗快樂購facebook官方社群"><i class="bx bxl-facebook"></i></a>
    <a href="#" data-bs-toggle="modal" data-bs-target="#update_social_Modal"><i class="fa-solid fa-pen"></i></a>
    
  </div>

  <div class="edit_like_shop_button">
    <!-- <button type="button" class="btn insert_button" data-bs-toggle="modal" data-bs-target="#insert_group_Modal"><i class="fa-solid fa-pen"></i>&nbsp;編輯賣場</button> -->
    <!-- <button type="button" class="btn insert_button"><i class="fa-regular fa-heart"></i>&nbsp;關注賣場</button> -->
    <button type="button" class="btn insert_button"><i class="fa-solid fa-heart"></i>&nbsp;已關注</button>
    <button type="button" class="btn insert_button"><i class="fa-regular fa-comments"></i>&nbsp;聯絡賣家</button>
  </div>
  <!-- End shop_bg Section -->';
  }
  ?>
  <!-- ======= Header ======= -->

  <header id="header2" class="d-flex flex-column justify-content-center">

    <nav id="navbar2" class="navbar2 nav-menu2">
      <ul>
        <li><a href="./shop.php" class="nav-link scrollto  active"><i class="bi bi-shop"></i><span>代購商品</span></a></li>
        <li><a href="./shop_time.php" class="nav-link scrollto"><i class="bi bi-clock-history"></i><span>限定開團</span></a></li>
        <li><a href="./shop_wish.php" class="nav-link scrollto"><i class="fa-solid fa-wand-sparkles"></i><span>許願池</span></a></li>
        <li><a href="./shop_rule.php" class="nav-link scrollto"><i class="fa-solid fa-file-circle-question"></i><span>賣場規則</span></a></li>
        <li><a href="./shop_evaluate.php" class="nav-link scrollto"><i class="fa-regular fa-comment-dots"></i><span>賣場評價</span></a></li>
        <!-- <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li> -->
      </ul>
    </nav><!-- .nav-menu -->

  </header><!-- End Header -->
  
  <div class="min_nav">
    <button id="triggerBtn"><i class="bi bi-shop"></i></button>
    <div id="slideContainer">
      <a href="./shop.php" class="slideItem"><i class="bi bi-shop"></i></a>
      <a href="./shop_time.php" class="slideItem"><i class="bi bi-clock-history"></i></a>
      <a href="./shop_wish.php" class="slideItem"><i class="fa-solid fa-wand-sparkles"></i></a>
      <a href="./shop_rule.php" class="slideItem"><i class="fa-solid fa-file-circle-question"></i></a>
      <a href="./shop_evaluate.php" class="slideItem"><i class="fa-regular fa-comment-dots"></i></a>
      <!-- <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li> -->
    </div>
  </div>


<main id="main">

<section id="testimonials" class="testimonials">
  <div class="container" data-aos="fade-up">

    <div class="seven">
      <h1>熱門商品</h1>
    </div>


    <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">


      <div class="swiper-wrapper">


        <div class="swiper-slide">
          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <div id="carouselExample" class="carousel slide"><!--圖片輪播-->
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="https://down-tw.img.susercontent.com/file/tw-11134207-7r98x-ll7zea2rdiox5c" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visual...ly-hidden"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden"></span>
                </button>
              </div><!--end 圖片輪播-->
              <div class="demo">
                <h3>玩偶吊飾</h3>
              </div>
                <a href="#">日本「美少女戰士X三麗鷗」</a>
              <br>
              <div class="flex-container">
                <div>
                  <i class="fa-solid fa-dollar-sign" ></i>&nbsp;&nbsp;<span>750</span>
                </div>
                <div>
                  <i class="fa-solid fa-cart-arrow-down"></i>&nbsp;&nbsp;<span>429</span>
                </div>
              </div>

            </div>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <div id="carouselExample2" class="carousel slide"><!--圖片輪播-->
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="https://down-tw.img.susercontent.com/file/tw-11134207-7r992-lqo4uzigxc0279" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="https://down-tw.img.susercontent.com/file/tw-11134207-7r98x-lqo4uzigyqkidc" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="https://down-tw.img.susercontent.com/file/tw-11134207-7r98x-lrxwgpycct8o58" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="https://down-tw.img.susercontent.com/file/tw-11134207-7r992-lrxwgpyce7t49f" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="https://down-tw.img.susercontent.com/file/tw-11134207-7r990-lrxwgpycfmdkb1" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample2" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visual...ly-hidden"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample2" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden"></span>
                </button>
              </div><!--end 圖片輪播-->
              <div class="demo">
                <h3>拉鍊收納包</h3>
              </div>
              <a href="#">日本「美少女戰士X三麗鷗」</a>
              <br>
              <div class="flex-container">
                <div>
                  <i class="fa-solid fa-dollar-sign" ></i>&nbsp;&nbsp;<span>260</span>
                </div>
                <div>
                  <i class="fa-solid fa-cart-arrow-down"></i>&nbsp;&nbsp;<span>256</span>
                </div>
              </div>

            </div>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <div id="carouselExample3" class="carousel slide"><!--圖片輪播-->
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="https://down-tw.img.susercontent.com/file/tw-11134207-7r98w-lmbzxx10l57fe5" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample3" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visual...ly-hidden"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample3" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden"></span>
                </button>
              </div><!--end 圖片輪播-->
              <div class="demo">
                <h3>壓克力吊飾盲盒</h3>
              </div>
                <a href="#">日本「美少女戰士X三麗鷗」</a>
              <br>
              <div class="flex-container">
                <div>
                  <i class="fa-solid fa-dollar-sign" ></i>&nbsp;&nbsp;<span>300</span>
                </div>
                <div>
                  <i class="fa-solid fa-cart-arrow-down"></i>&nbsp;&nbsp;<span>208</span>
                </div>
              </div>

            </div>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <div id="carouselExample4" class="carousel slide"><!--圖片輪播-->
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="https://gw.alicdn.com/imgextra/i3/55510288/O1CN017yLxEc1Dzwy2sJtCP_!!55510288.jpg_Q75.jpg_.webp" class="d-block w-100" alt="...">
                  </div>
                  
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample4" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visual...ly-hidden"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample4" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden"></span>
                </button>
              </div><!--end 圖片輪播-->
              <div class="demo">
                <h3>原子筆</h3>
              </div>
                <a href="#">日本「美少女戰士X三麗鷗」</a>
              <br>
              <div class="flex-container">
                <div>
                  <i class="fa-solid fa-dollar-sign" ></i>&nbsp;&nbsp;<span>140</span>
                </div>
                <div>
                  <i class="fa-solid fa-cart-arrow-down"></i>&nbsp;&nbsp;<span>136</span>
                </div>
              </div>

            </div>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <div id="carouselExample5" class="carousel slide"><!--圖片輪播-->
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="https://down-tw.img.susercontent.com/file/tw-11134207-7r98p-lnv400gmp5wd07" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="https://down-tw.img.susercontent.com/file/tw-11134207-7r98o-lnv400gmqkgt96" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample5" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visual...ly-hidden"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample5" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden"></span>
                </button>
              </div><!--end 圖片輪播-->
              <div class="demo">
                <h3>多層資料夾</h3>
              </div>
                <a href="#">日本「美少女戰士X三麗鷗」</a>
              <br>
              <div class="flex-container">
                <div>
                  <i class="fa-solid fa-dollar-sign" ></i>&nbsp;&nbsp;<span>145</span>
                </div>
                <div>
                  <i class="fa-solid fa-cart-arrow-down"></i>&nbsp;&nbsp;<span>125</span>
                </div>
              </div>

            </div>
          </div>
        </div><!-- End testimonial item -->

      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>
</section><!-- End Testimonials Section -->


<!-- ======= shop_group Section ======= -->
<section id="shop_group" class="shop_group">
  <div class="container">

    <div class="flex-container">
      <!-- Section Title -->
      <div class="section-title" data-aos="fade-up">
        <h2><i class="bi bi-shop"></i>&nbsp;&nbsp;代購商品</h2>
      </div><!-- End Section Title -->
      <?php
      $sql="select *
      from shop
      where shop_id='$shop_id'";
      $result=mysqli_query($link,$sql);
      while($row=mysqli_fetch_assoc($result))
      {
      if($_SESSION["account"]==$row["account"]){
        echo '
        <div>
        <button type="button" class="btn insert_button" data-bs-toggle="modal" data-bs-target="#insert_group_Modal"><i class="bi bi-bag-plus"></i>&nbsp;新增商品團體</button>
      </div>';
      }
      }
      
      ?>
      
      <!-- Modal -->
      <div class="modal fade" id="insert_group_Modal" tabindex="-1" aria-labelledby="insert_group_ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="insert_group_ModalLabel">新增商品團體</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="post" action="cg_in_up_de.php" enctype="multipart/form-data">
              <input type="hidden" name="method" class="form-control" style="width: 100%;" value="in">
              <input type="hidden" name="page" class="form-control" style="width: 100%;" value="shop">
              <input type="hidden" name="shop_id" class="form-control" style="width: 100%;" value="<?php echo $shop_id;?>">
                <table width="100%" class="insert_group_form">
                  <tr>
                    <td width="10%">商品團名</td>
                    <td width="90%"><input type="text" name="group_name" class="form-control"></td>
                  </tr>
                  <tr>
                    <td>國家</td>
                    <td><input type="text" name="nation" class="form-control"></td>
                  </tr>
                  <tr>
                    <td>商團封面</td>
                    <td><input class="form-control" type="file" name="group_bg"></td>
                  </tr>
                  <tr>
                    <td>商團敘述</td>
                    <td><textarea class="form-control" rows="5" name="commodity_group_narrate"></textarea></td>
                  </tr>
                  <tr>
                    <td>原商品連結</td>
                    <td><input type="text" name="group_link" class="form-control"></td>
                  </tr>
                  <tr>
                    <td colspan="2"><button type="submit" class="btn insert_button" style="display: block;width: 100%;">確認新增</button></td>
                  </tr>
                </table>
              </form>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="update_shop_Modal" tabindex="-1" aria-labelledby="update_shop_ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="update_shopLabel">編輯賣場</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form>
                <table width="100%" class="insert_group_form">
                  <tr>
                    <td width="10%">賣場名</td>
                    <td width="90%"><input type="text" id="group_name" class="form-control"></td>
                  </tr>
                  <tr>
                    <td>賣場頭貼</td>
                    <td><input class="form-control" type="file" id="group_cover"></td>
                  </tr>
                  <tr>
                    <td>賣場背景</td>
                    <td><input class="form-control" type="file" id="group_cover"></td>
                  </tr>
                  <tr>
                    <td colspan="2"><button type="submit" class="btn insert_button" style="display: block;width: 100%;">確認修改</button></td>
                  </tr>
                </table>
              </form>
            </div>
          </div>
        </div>
      </div>

      <!-- 連結管理Modal -->
      <div class="modal fade" id="update_social_Modal" tabindex="-1" aria-labelledby="update_social_ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="update_socialLabel">連結管理</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <!-- ======= Schedule Section ======= -->
              <section id="schedule" class="section-with-bg">
                
                <ul class="nav nav-tabs" role="tablist" data-aos="fade-up" data-aos-delay="100">
                  <li class="nav-item">
                    <a class="nav-link active" href="#day-1" role="tab" data-bs-toggle="tab"><i class="fa-solid fa-plus"></i>&nbsp;新增</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#day-2" role="tab" data-bs-toggle="tab"><i class="fa-solid fa-pen"></i>&nbsp;編輯</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#day-3" role="tab" data-bs-toggle="tab"><i class="fa-solid fa-xmark"></i>&nbsp;刪除</a>
                  </li>
                </ul>

                <div class="tab-content row justify-content-center" data-aos="fade-up" data-aos-delay="200">

                  <!-- Schdule Day 1 -->
                  <div role="tabpanel" class="col-lg-12 tab-pane fade show active" id="day-1">
                    <form>
                      <table width="100%" class="insert_group_form">
                        <tr>
                          <td>連結類型</td>
                          <td align="left">
                            <input type="radio" name="link_type" class="link_radio" id="twitter"><label class="icon-label" for="twitter"><i class="bx bxl-twitter"></i></label>
                            <input type="radio" name="link_type" class="link_radio" id="facebook"><label class="icon-label" for="facebook"><i class="bx bxl-facebook"></i></label>
                            <input type="radio" name="link_type" class="link_radio" id="instagram"><label class="icon-label" for="instagram"><i class="bx bxl-instagram"></i></label>
                            <input type="radio" name="link_type" class="link_radio" id="line"><label class="icon-label" for="line"><i class="fa-brands fa-line"></i>
                          </td>
                        </tr>
                        <tr>
                          <td>連結敘述</td>
                          <td><input type="text" id="group_name" class="form-control"></td>
                        </tr>
                        <tr>
                          <td width="10%">連結網址</td>
                          <td width="90%"><input type="text" id="group_name" class="form-control"></td>
                        </tr>
                        <tr>
                          <td colspan="2"><button type="submit" class="btn insert_button" style="display: block;width: 100%;">確認新增</button></td>
                        </tr>
                      </table>
                    </form>
                  </div>
                  <!-- End Schdule Day 1 -->

                  <!-- Schdule Day 2 -->
                  <div role="tabpanel" class="col-lg-12  tab-pane fade" id="day-2">
                    <form>
                      <table width="100%" class="social_link_table">
                        <tr>
                          <td width="10%" align="center"><label class="icon-label"><i class="bx bxl-twitter"></i></label></td>
                          <td width="30%"><input type="text" class="form-control" value="官方推特"></td>
                          <td width="50%"><input type="text" class="form-control" value="file:///D:/data/Desktop/%E8%A8%B1%E9%A1%98%E4%BB%A3%E8%B3%BCvar0.0/%E8%B3%A3%E5%A0%B4%E4%BB%8B%E9%9D%A2/shop.php"></td>
                        </tr>
                        <tr>
                          <td width="10%" align="center"><label class="icon-label"><i class="bx bxl-facebook"></i></label></td>
                          <td width="30%"><input type="text" class="form-control" value="三麗鷗快樂購facebook官方社群"></td>
                          <td width="60%"><input type="text" class="form-control" value="file:///D:/data/Desktop/%E8%A8%B1%E9%A1%98%E4%BB%A3%E8%B3%BCvar0.0/%E8%B3%A3%E5%A0%B4%E4%BB%8B%E9%9D%A2/shop.php"></td>
                        </tr>
                        <tr>
                          <td colspan="3"><button type="submit" class="btn insert_button" style="display: block;width: 100%;">確認修改</button></td>
                        </tr>
                        
                      </table>
                    </form>
                  </div>
                  <!-- End Schdule Day 2 -->

                  <!-- Schdule Day 3 -->
                  <div role="tabpanel" class="col-lg-12  tab-pane fade" id="day-3">
                    <table width="100%" class="social_link_table">
                      <tr>
                        <td width="10%" align="center"><label class="icon-label"><i class="bx bxl-twitter"></i></label></td>
                        <td width="80%">官方推特</td>
                        <td width="10%"><a href="./shop_evaluate.php" class="nav-link scrollto"><i class="fa-solid fa-xmark"></i></a></td>
                      </tr>
                      <tr>
                        <td width="10%" align="center"><label class="icon-label"><i class="bx bxl-facebook"></i></label></td>
                        <td width="80%">三麗鷗快樂購facebook官方社群</td>
                        <td width="10%"><a href="./shop_evaluate.php" class="nav-link scrollto"><i class="fa-solid fa-xmark"></i></a></td>
                      </tr>
                      
                    </table>
                 
                  </div>
                  <!-- End Schdule Day  3-->

                </div>

              

              </section><!-- End Schedule Section -->
              
              
              
            </div>
          </div>
        </div>
      </div>

    </div>
 
    

    <div class="row shop_group-container">

    <?php
      $sql="select *
      from commodity_group
      natural join shop
      where shop_id='$shop_id' AND close_order_date ='0000-00-00 00:00:00'";
      $result=mysqli_query($link,$sql);
      while($row=mysqli_fetch_assoc($result))
      {
        $commodity_group_id=$row["commodity_group_id"];
        if($_SESSION["account"]==$row["account"]){
          $group_link = "../lisa/InnerBuyer.php?commodity_group_id=$commodity_group_id";
        }else{
          $group_link = "../lisa/InnerPage.php?commodity_group_id=$commodity_group_id";
        }
        echo'
      <div class="col-lg-4 col-md-6 shop_group-item">
        <div class="shop_group-wrap">
          <figure>
            <img src="',$row["commodity_group_bg"],'" alt="" width="100%" height="100%">
            <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="link-preview shop_group-lightbox" title="收藏"><i class="fa-regular fa-heart"></i></i></a>
            <a href="',$group_link,'" class="link-details" title="查看詳情"><i class="bx bx-link"></i></a>
          </figure>

          <div class="shop_group-info">
            <h4><a href="',$group_link,'">',$row["commodity_group_name"],'</a></h4>
            <p><i class="fa-regular fa-heart"></i>1000&nbsp;&nbsp;<i class="ri ri-shopping-bag-line"></i>500</p>
          </div>
        </div>
      </div>

      ';
      }
    ?>
    
    </div>

  </div>
</section><!-- End Portfolio Section -->




  


</main><!-- End #main -->

  

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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