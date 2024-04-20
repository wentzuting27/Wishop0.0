<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>賣場介面 - 買家評價</title>
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
  <section id="shop_bg" class="d-flex justify-cntent-center align-items-center" style="background-image: url(https://img.shoplineapp.com/media/image_clips/61d3a8ac8c24c20023437d3e/original.png?1641261227);">
    
  </section><!-- End Hero -->

  <div class="profile2">
      <img src="https://i.pinimg.com/564x/92/19/18/9219184f7722f46823d5334e0355230c.jpg" alt="" class="img-fluid rounded-circle">
      <h1 class="text-light"><a href="index.php">三麗鷗快樂購</a></h1>
      
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
  <!-- End shop_bg Section -->

  <!-- ======= Header ======= -->

  <header id="header2" class="d-flex flex-column justify-content-center">

    <nav id="navbar2" class="navbar2 nav-menu2">
      <ul>
        <li><a href="./shop.php" class="nav-link scrollto"><i class="bi bi-shop"></i><span>代購商品</span></a></li>
        <li><a href="./shop_time.php" class="nav-link scrollto"><i class="bi bi-clock-history"></i> <span>限定開團</span></a></li>
        <li><a href="./shop_wish.php" class="nav-link scrollto"><i class="fa-solid fa-wand-sparkles"></i><span>許願池</span></a></li>
        <li><a href="./shop_rule.php" class="nav-link scrollto"><i class="fa-solid fa-file-circle-question"></i><span>賣場規則</span></a></li>
        <li><a href="./shop_evaluate.php" class="nav-link scrollto   active"><i class="fa-regular fa-comment-dots"></i> <span>賣場評價</span></a></li>
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
                <a class="nav-link active" href="#insert_social" role="tab" data-bs-toggle="tab"><i class="fa-solid fa-plus"></i>&nbsp;新增</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#update_social" role="tab" data-bs-toggle="tab"><i class="fa-solid fa-pen"></i>&nbsp;編輯</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#delete_social" role="tab" data-bs-toggle="tab"><i class="fa-solid fa-xmark"></i>&nbsp;刪除</a>
              </li>
            </ul>

            <div class="tab-content row justify-content-center" data-aos="fade-up" data-aos-delay="200">

              <!-- Schdule Day 1 -->
              <div role="tabpanel" class="col-lg-12 tab-pane fade show active" id="insert_social">
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
              <div role="tabpanel" class="col-lg-12  tab-pane fade" id="update_social">
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
              <div role="tabpanel" class="col-lg-12  tab-pane fade" id="delete_social">
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
  

  <main id="main">

    <!-- ======= shop_group Section ======= -->
    <section id="shop_group" class="shop_group">
      <div class="container">
    
        <!-- ======= evaluate Section ======= -->
        <section id="evaluate" class="section-with-bg">
            
          <!-- Section Title -->
          <div class="section-title" data-aos="fade-up">
            <h2><i class="fa-regular fa-comment-dots"></i>&nbsp;&nbsp;賣場評價</h2>
          </div><!-- End Section Title -->
        
    
            <ul class="nav nav-tabs" role="tablist" data-aos="fade-up" data-aos-delay="100">
              <li class="nav-item">
                <a class="nav-link active" href="#5star" role="tab" data-bs-toggle="tab"><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#4star" role="tab" data-bs-toggle="tab"><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#3star" role="tab" data-bs-toggle="tab"><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#2star" role="tab" data-bs-toggle="tab"><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#1star" role="tab" data-bs-toggle="tab"><i class="fa-solid fa-wand-sparkles"></i></a>
              </li>
            </ul>
    
            <div class="tab-content row justify-content-center" data-aos="fade-up" data-aos-delay="200">
    
              <!-- 5star -->
              <div role="tabpanel" class="col-lg-12 tab-pane fade show active" id="5star">
                <div class="row">
    
                  <div class="col-lg-4">
                    
                    <div class="evaluate_card">
                      <table class="evaluate_table">
                        <tr>
                          <td width="15%"><img src="https://i.pinimg.com/564x/f6/1a/e4/f61ae484b7c56295adbaa4010235cd68.jpg" class="people_photo"></td>
                          <td width="60%">
                            <span>Taro_0106</span><br>
                            <p>東京-排球少年×三麗鷗聯名快閃店</p>
                          </td>
                          <td width="25%" style="vertical-align: top;" align="right"><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i></td>
                        </tr>
                        <tr>
                          <td colspan="3" ><div class="scrollable-row">這次的代購經驗真是讓我非常滿意！商品包裝精美，完好無損地送達，而且速度快得令人驚訝。代購商的服務態度也非常好，及時回覆我的疑問並提供了專業的建議。下次有需要我一定會再次光顧！</div></td>
                        </tr>
                        <tr>
                          <td colspan="3" style="height: 70px;"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://i.pinimg.com/564x/f5/fa/ad/f5faadb7550f067819e859b62c3dd784.jpg" class="goods_photo"><img src="https://i.pinimg.com/236x/2a/c8/b6/2ac8b69c8f02d00e2a17fa0202cc68d5.jpg" class="goods_photo"><img src="https://i.pinimg.com/236x/6b/c3/a7/6bc3a791734a08b8428b99586cbda1bd.jpg" class="goods_photo"></td>
                        </tr>
                      </table>
                    </div>
                    
                  </div>
    
                  <div class="col-lg-4">
                    
                    <div class="evaluate_card">
                      <table class="evaluate_table">
                        <tr>
                          <td width="15%"><img src="https://i.pinimg.com/564x/1f/c6/6a/1fc66a08447b965a3e1000ccfc784029.jpg" class="people_photo"></td>
                          <td width="60%">
                            <span>Taro_0106</span><br>
                            <p>東京-排球少年×三麗鷗聯名快閃店</p>
                          </td>
                          <td width="25%" style="vertical-align: top;" align="right"><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i></td>
                        </tr>
                        <tr>
                          <td colspan="3"><div class="scrollable-row">這次代購真是太棒了！商品質量超出我的預期，與描述完全一致。包裝非常用心，沒有任何損壞或破損。而且代購商的配送速度也很快，讓我感到非常滿意。強烈推薦給所有需要的朋友！</div></td>
                        </tr>
                        <tr>
                          <td colspan="3" style="height: 70px;"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"></td>
                        </tr>
                      </table>
                    </div>
                    
                  </div>
    
                  <div class="col-lg-4">
                    
                    <div class="evaluate_card">
                      <table class="evaluate_table">
                        <tr>
                          <td width="15%"><img src="https://i.pinimg.com/564x/60/cf/43/60cf43172ea279f05b95318ee79e6afe.jpg" class="people_photo"></td>
                          <td width="60%">
                            <span>Taro_0106</span><br>
                            <p>東京-排球少年×三麗鷗聯名快閃店</p>
                          </td>
                          <td width="25%" style="vertical-align: top;" align="right"><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i></td>
                        </tr>
                        <tr>
                          <td colspan="3"><div class="scrollable-row">非常感謝</div></td>
                        </tr>
                        <tr>
                          <td colspan="3" style="height: 70px;"></td>
                        </tr>
                      </table>
                    </div>
                    
                  </div>
    
                  <div class="col-lg-4">
                    
                    <div class="evaluate_card">
                      <table class="evaluate_table">
                        <tr>
                          <td width="15%"><img src="https://i.pinimg.com/564x/89/c6/23/89c623bb146eab0a3d6395a61bda0523.jpg" class="people_photo"></td>
                          <td width="60%">
                            <span>Taro_0106</span><br>
                            <p>東京-排球少年×三麗鷗聯名快閃店</p>
                          </td>
                          <td width="25%" style="vertical-align: top;" align="right"><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i></td>
                        </tr>
                        <tr>
                          <td colspan="3"><div class="scrollable-row">這次代購真是太棒了！商品質量超出我的預期，與描述完全一致。包裝非常用心，沒有任何損壞或破損。而且代購商的配送速度也很快，讓我感到非常滿意。強烈推薦給所有需要的朋友！</div></td>
                        </tr>
                        <tr>
                          <td colspan="3" style="height: 70px;"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"></td>
                        </tr>
                      </table>
                    </div>
                    
                  </div>
    
                  <div class="col-lg-4">
                    
                    <div class="evaluate_card">
                      <table class="evaluate_table">
                        <tr>
                          <td width="15%"><img src="https://i.pinimg.com/564x/94/21/d8/9421d8ee234a00b9e2715ebb79a3e021.jpg" class="people_photo"></td>
                          <td width="60%">
                            <span>Taro_0106</span><br>
                            <p>東京-排球少年×三麗鷗聯名快閃店</p>
                          </td>
                          <td width="25%" style="vertical-align: top;" align="right"><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i></td>
                        </tr>
                        <tr>
                          <td colspan="3"><div class="scrollable-row">這次的代購經驗真是讓我非常滿意！商品包裝精美，完好無損地送達，而且速度快得令人驚訝。代購商的服務態度也非常好，及時回覆我的疑問並提供了專業的建議。下次有需要我一定會再次光顧！</div></td>
                        </tr>
                        <tr>
                          <td colspan="3" style="height: 70px;"><div class="scrollable-img" onmousedown="startDrag(event)"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://i.pinimg.com/236x/6b/c3/a7/6bc3a791734a08b8428b99586cbda1bd.jpg" class="goods_photo"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://i.pinimg.com/564x/f5/fa/ad/f5faadb7550f067819e859b62c3dd784.jpg" class="goods_photo"><img src="https://i.pinimg.com/236x/2a/c8/b6/2ac8b69c8f02d00e2a17fa0202cc68d5.jpg" class="goods_photo"><img src="https://i.pinimg.com/236x/6b/c3/a7/6bc3a791734a08b8428b99586cbda1bd.jpg" class="goods_photo"></div></td>
                        </tr>
                      </table>
                    </div>
                    
                  </div>
    
                  <div class="col-lg-4">
                    
                    <div class="evaluate_card">
                      <table class="evaluate_table">
                        <tr>
                          <td width="15%"><img src="https://i.pinimg.com/564x/fd/fb/3e/fdfb3e996271fe9d6a35b5581c625d0e.jpg" class="people_photo"></td>
                          <td width="60%">
                            <span>Taro_0106</span><br>
                            <p>東京-排球少年×三麗鷗聯名快閃店</p>
                          </td>
                          <td width="25%" style="vertical-align: top;" align="right"><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i></td>
                        </tr>
                        <tr>
                          <td colspan="3"><div class="scrollable-row">這次代購真是太棒了！商品質量超出我的預期，與描述完全一致。包裝非常用心！</div></td>
                        </tr>
                        <tr>
                          <td colspan="3" style="height: 70px;"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"></td>
                        </tr>
                      </table>
                    </div>
                    
                  </div>
    
                  <div class="col-lg-4">
                    
                    <div class="evaluate_card">
                      <table class="evaluate_table">
                        <tr>
                          <td width="15%"><img src="https://i.pinimg.com/564x/d6/a2/07/d6a207f50ebd87603fa7ad342a757104.jpg" class="people_photo"></td>
                          <td width="60%">
                            <span>Taro_0106</span><br>
                            <p>東京-排球少年×三麗鷗聯名快閃店</p>
                          </td>
                          <td width="25%" style="vertical-align: top;" align="right"><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i></td>
                        </tr>
                        <tr>
                          <td colspan="3"><div class="scrollable-row">這次代購真是太棒了！商品質量超出我的預期，與描述完全一致。包裝非常用心，沒有任何損壞或破損。而且代購商的配送速度也很快，讓我感到非常滿意。強烈推薦給所有需要的朋友！</div></td>
                        </tr>
                        <tr>
                          <td colspan="3" style="height: 70px;"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"></td>
                        </tr>
                      </table>
                    </div>
                    
                  </div>
    
                  <div class="col-lg-4">
                    
                    <div class="evaluate_card">
                      <table class="evaluate_table">
                        <tr>
                          <td width="15%"><img src="https://i.pinimg.com/474x/31/89/59/318959c8e4555be7c61750eed9bbc1a7.jpg" class="people_photo"></td>
                          <td width="60%">
                            <span>Taro_0106</span><br>
                            <p>東京-排球少年×三麗鷗聯名快閃店</p>
                          </td>
                          <td width="25%" style="vertical-align: top;" align="right"><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i></td>
                        </tr>
                        <tr>
                          <td colspan="3"><div class="scrollable-row-no-photo">這次代購真是太棒了！商品質量超出我的預期，與描述完全一致。包裝非常用心，沒有任何損壞或破損。而且代購商的配送速度也很快，讓我感到非常滿意。強烈推薦給所有需要的朋友！這次代購真是太棒了！商品質量超出我的預期，與描述完全一致。包裝非常用心，沒有任何損壞或破損。而且代購商的配送速度也很快，讓我感到非常滿意。強烈推薦給所有需要的朋友！這次代購真是太棒了！商品質量超出我的預期，與描述完全一致。包裝非常用心，沒有任何損壞或破損。而且代購商的配送速度也很快，讓我感到非常滿意。強烈推薦給所有需要的朋友！</div></td>
                        </tr>
                      </table>
                    </div>
                    
                  </div>
                  
                    
                </div>
              </div>
            
              <!-- End 5star -->
    
              <!-- 4star -->
              <div role="tabpanel" class="col-lg-12  tab-pane fade" id="4star">
                <div class="row">
    
                  <div class="col-lg-4">
                    
                    <div class="evaluate_card">
                      <table class="evaluate_table">
                        <tr>
                          <td width="15%"><img src="https://i.pinimg.com/564x/f6/1a/e4/f61ae484b7c56295adbaa4010235cd68.jpg" class="people_photo"></td>
                          <td width="60%">
                            <span>Taro_0106</span><br>
                            <p>東京-排球少年×三麗鷗聯名快閃店</p>
                          </td>
                          <td width="25%" style="vertical-align: top;" align="right"><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i></td>
                        </tr>
                        <tr>
                          <td colspan="3">這次的代購經驗真是讓我非常滿意！商品包裝精美，完好無損地送達，而且速度快得令人驚訝。代購商的服務態度也非常好，及時回覆我的疑問並提供了專業的建議。下次有需要我一定會再次光顧！</td>
                        </tr>
                        <tr>
                          <td colspan="3"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://i.pinimg.com/564x/f5/fa/ad/f5faadb7550f067819e859b62c3dd784.jpg" class="goods_photo"><img src="https://i.pinimg.com/236x/2a/c8/b6/2ac8b69c8f02d00e2a17fa0202cc68d5.jpg" class="goods_photo"><img src="https://i.pinimg.com/236x/6b/c3/a7/6bc3a791734a08b8428b99586cbda1bd.jpg" class="goods_photo"></td>
                        </tr>
                      </table>
                    </div>
                    
                  </div>
    
                  <div class="col-lg-4">
                    
                    <div class="evaluate_card">
                      <table class="evaluate_table">
                        <tr>
                          <td width="15%"><img src="https://i.pinimg.com/564x/1f/c6/6a/1fc66a08447b965a3e1000ccfc784029.jpg" class="people_photo"></td>
                          <td width="60%">
                            <span>Taro_0106</span><br>
                            <p>東京-排球少年×三麗鷗聯名快閃店</p>
                          </td>
                          <td width="25%" style="vertical-align: top;" align="right"><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i></td>
                        </tr>
                        <tr>
                          <td colspan="3">這次代購真是太棒了！商品質量超出我的預期，與描述完全一致。包裝非常用心，沒有任何損壞或破損。而且代購商的配送速度也很快，讓我感到非常滿意。強烈推薦給所有需要的朋友！</td>
                        </tr>
                        <tr>
                          <td colspan="3"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"></td>
                        </tr>
                      </table>
                    </div>
                    
                  </div>
    
                  <div class="col-lg-4">
                    
                    <div class="evaluate_card">
                      <table class="evaluate_table">
                        <tr>
                          <td width="15%"><img src="https://i.pinimg.com/564x/60/cf/43/60cf43172ea279f05b95318ee79e6afe.jpg" class="people_photo"></td>
                          <td width="60%">
                            <span>Taro_0106</span><br>
                            <p>東京-排球少年×三麗鷗聯名快閃店</p>
                          </td>
                          <td width="25%" style="vertical-align: top;" align="right"><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i></td>
                        </tr>
                        <tr>
                          <td colspan="3">非常感謝</td>
                        </tr>
                        <tr>
                          <td colspan="3"></td>
                        </tr>
                      </table>
                    </div>
                    
                  </div>
    
                  <div class="col-lg-4">
                    
                    <div class="evaluate_card">
                      <table class="evaluate_table">
                        <tr>
                          <td width="15%"><img src="https://i.pinimg.com/564x/89/c6/23/89c623bb146eab0a3d6395a61bda0523.jpg" class="people_photo"></td>
                          <td width="60%">
                            <span>Taro_0106</span><br>
                            <p>東京-排球少年×三麗鷗聯名快閃店</p>
                          </td>
                          <td width="25%" style="vertical-align: top;" align="right"><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i></td>
                        </tr>
                        <tr>
                          <td colspan="3">這次代購真是太棒了！商品質量超出我的預期，與描述完全一致。包裝非常用心，沒有任何損壞或破損。而且代購商的配送速度也很快，讓我感到非常滿意。強烈推薦給所有需要的朋友！</td>
                        </tr>
                        <tr>
                          <td colspan="3"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"></td>
                        </tr>
                      </table>
                    </div>
                    
                  </div>
    
                  <div class="col-lg-4">
                    
                    <div class="evaluate_card">
                      <table class="evaluate_table">
                        <tr>
                          <td width="15%"><img src="https://i.pinimg.com/564x/94/21/d8/9421d8ee234a00b9e2715ebb79a3e021.jpg" class="people_photo"></td>
                          <td width="60%">
                            <span>Taro_0106</span><br>
                            <p>東京-排球少年×三麗鷗聯名快閃店</p>
                          </td>
                          <td width="25%" style="vertical-align: top;" align="right"><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i></td>
                        </tr>
                        <tr>
                          <td colspan="3">這次的代購經驗真是讓我非常滿意！商品包裝精美，完好無損地送達，而且速度快得令人驚訝。代購商的服務態度也非常好，及時回覆我的疑問並提供了專業的建議。下次有需要我一定會再次光顧！</td>
                        </tr>
                        <tr>
                          <td colspan="3"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://i.pinimg.com/564x/f5/fa/ad/f5faadb7550f067819e859b62c3dd784.jpg" class="goods_photo"><img src="https://i.pinimg.com/236x/2a/c8/b6/2ac8b69c8f02d00e2a17fa0202cc68d5.jpg" class="goods_photo"><img src="https://i.pinimg.com/236x/6b/c3/a7/6bc3a791734a08b8428b99586cbda1bd.jpg" class="goods_photo"></td>
                        </tr>
                      </table>
                    </div>
                    
                  </div>
    
                  <div class="col-lg-4">
                    
                    <div class="evaluate_card">
                      <table class="evaluate_table">
                        <tr>
                          <td width="15%"><img src="https://i.pinimg.com/564x/fd/fb/3e/fdfb3e996271fe9d6a35b5581c625d0e.jpg" class="people_photo"></td>
                          <td width="60%">
                            <span>Taro_0106</span><br>
                            <p>東京-排球少年×三麗鷗聯名快閃店</p>
                          </td>
                          <td width="25%" style="vertical-align: top;" align="right"><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i></td>
                        </tr>
                        <tr>
                          <td colspan="3">這次代購真是太棒了！商品質量超出我的預期，與描述完全一致。包裝非常用心，沒有任何損壞或破損。而且代購商的配送速度也很快，讓我感到非常滿意。強烈推薦給所有需要的朋友！</td>
                        </tr>
                        <tr>
                          <td colspan="3"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"></td>
                        </tr>
                      </table>
                    </div>
                    
                  </div>
    
                  <div class="col-lg-4">
                    
                    <div class="evaluate_card">
                      <table class="evaluate_table">
                        <tr>
                          <td width="15%"><img src="https://i.pinimg.com/564x/d6/a2/07/d6a207f50ebd87603fa7ad342a757104.jpg" class="people_photo"></td>
                          <td width="60%">
                            <span>Taro_0106</span><br>
                            <p>東京-排球少年×三麗鷗聯名快閃店</p>
                          </td>
                          <td width="25%" style="vertical-align: top;" align="right"><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i></td>
                        </tr>
                        <tr>
                          <td colspan="3">這次代購真是太棒了！商品質量超出我的預期，與描述完全一致。包裝非常用心，沒有任何損壞或破損。而且代購商的配送速度也很快，讓我感到非常滿意。強烈推薦給所有需要的朋友！</td>
                        </tr>
                        <tr>
                          <td colspan="3"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"></td>
                        </tr>
                      </table>
                    </div>
                    
                  </div>
    
                  <div class="col-lg-4">
                    
                    <div class="evaluate_card">
                      <table class="evaluate_table">
                        <tr>
                          <td width="15%"><img src="https://i.pinimg.com/564x/b5/36/bc/b536bc0a7083abe3d64e36e671443982.jpg" class="people_photo"></td>
                          <td width="60%">
                            <span>Taro_0106</span><br>
                            <p>東京-排球少年×三麗鷗聯名快閃店</p>
                          </td>
                          <td width="25%" style="vertical-align: top;" align="right"><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i></td>
                        </tr>
                        <tr>
                          <td colspan="3">這次代購真是太棒了！商品質量超出我的預期，與描述完全一致。包裝非常用心，沒有任何損壞或破損。而且代購商的配送速度也很快，讓我感到非常滿意。強烈推薦給所有需要的朋友！</td>
                        </tr>
                        <tr>
                          <td colspan="3"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"></td>
                        </tr>
                      </table>
                    </div>
                    
                  </div>
                  
                    
                </div>
          
              </div>
    
    
              <!-- End 4star -->
    
              <!-- 3star -->
              <div role="tabpanel" class="col-lg-12  tab-pane fade" id="3star">
                <div class="row">
    
                  <div class="col-lg-12">
                    
                    <div class="evaluate_card2">
                      <table class="evaluate_table">
                        <tr>
                          <td width="5%"><img src="https://i.pinimg.com/564x/f6/1a/e4/f61ae484b7c56295adbaa4010235cd68.jpg" class="people_photo"></td>
                          <td width="60%">
                            <span>Taro_0106</span><br>
                            <p>東京-排球少年×三麗鷗聯名快閃店</p>
                          </td>
                          <td width="35%" style="vertical-align: top;" align="right"><i class="fa-solid fa-wand-sparkles" style="font-size: 20px;"></i><i class="fa-solid fa-wand-sparkles" style="font-size: 20px;"></i><i class="fa-solid fa-wand-sparkles" style="font-size: 20px;"></i><i class="fa-solid fa-wand-sparkles" style="font-size: 20px;"></i><i class="fa-solid fa-wand-sparkles" style="font-size: 20px;"></i></td>
                        </tr>
                        <tr>
                          <td colspan="3">這次的代購經驗真是讓我非常滿意！商品包裝精美，完好無損地送達，而且速度快得令人驚訝。代購商的服務態度也非常好，及時回覆我的疑問並提供了專業的建議。下次有需要我一定會再次光顧！</td>
                        </tr>
                        <tr>
                          <td colspan="3"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://i.pinimg.com/564x/f5/fa/ad/f5faadb7550f067819e859b62c3dd784.jpg" class="goods_photo"><img src="https://i.pinimg.com/236x/2a/c8/b6/2ac8b69c8f02d00e2a17fa0202cc68d5.jpg" class="goods_photo"><img src="https://i.pinimg.com/236x/6b/c3/a7/6bc3a791734a08b8428b99586cbda1bd.jpg" class="goods_photo"></td>
                        </tr>
                      </table>
                    </div>
                    
                  </div>
    
                  <div class="col-lg-12">
                    
                    <div class="evaluate_card2">
                      <table class="evaluate_table">
                        <tr>
                          <td width="5%"><img src="https://i.pinimg.com/564x/1f/c6/6a/1fc66a08447b965a3e1000ccfc784029.jpg" class="people_photo"></td>
                          <td width="60%">
                            <span>Taro_0106</span><br>
                            <p>東京-排球少年×三麗鷗聯名快閃店</p>
                          </td>
                          <td width="35%" style="vertical-align: top;" align="right"><i class="fa-solid fa-wand-sparkles" style="font-size: 20px;"></i><i class="fa-solid fa-wand-sparkles" style="font-size: 20px;"></i><i class="fa-solid fa-wand-sparkles" style="font-size: 20px;"></i><i class="fa-solid fa-wand-sparkles" style="font-size: 20px;"></i><i class="fa-solid fa-wand-sparkles" style="font-size: 20px;"></i></td>
                        </tr>
                        <tr>
                          <td colspan="3">這次代購真是太棒了！商品質量超出我的預期，與描述完全一致。包裝非常用心，沒有任何損壞或破損。而且代購商的配送速度也很快，讓我感到非常滿意。強烈推薦給所有需要的朋友！</td>
                        </tr>
                        <tr>
                          <td colspan="3"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"></td>
                        </tr>
                      </table>
                    </div>
                    
                  </div>
    
                  <div class="col-lg-12">
                    
                    <div class="evaluate_card2">
                      <table class="evaluate_table">
                        <tr>
                          <td width="5%"><img src="https://i.pinimg.com/564x/60/cf/43/60cf43172ea279f05b95318ee79e6afe.jpg" class="people_photo"></td>
                          <td width="60%">
                            <span>Taro_0106</span><br>
                            <p>東京-排球少年×三麗鷗聯名快閃店</p>
                          </td>
                          <td width="35%" style="vertical-align: top;" align="right"><i class="fa-solid fa-wand-sparkles" style="font-size: 20px;"></i><i class="fa-solid fa-wand-sparkles" style="font-size: 20px;"></i><i class="fa-solid fa-wand-sparkles" style="font-size: 20px;"></i><i class="fa-solid fa-wand-sparkles" style="font-size: 20px;"></i><i class="fa-solid fa-wand-sparkles" style="font-size: 20px;"></i></td>
                        </tr>
                        <tr>
                          <td colspan="3">非常感謝</td>
                        </tr>
                        <tr>
                          <td colspan="3"></td>
                        </tr>
                      </table>
                    </div>
                    
                  </div>
    
                  <div class="col-lg-12">
                    
                    <div class="evaluate_card2">
                      <table class="evaluate_table">
                        <tr>
                          <td width="5%"><img src="https://i.pinimg.com/564x/89/c6/23/89c623bb146eab0a3d6395a61bda0523.jpg" class="people_photo"></td>
                          <td width="60%">
                            <span>Taro_0106</span><br>
                            <p>東京-排球少年×三麗鷗聯名快閃店</p>
                          </td>
                          <td width="35%" style="vertical-align: top;" align="right"><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i></td>
                        </tr>
                        <tr>
                          <td colspan="3">這次代購真是太棒了！商品質量超出我的預期，與描述完全一致。包裝非常用心，沒有任何損壞或破損。而且代購商的配送速度也很快，讓我感到非常滿意。強烈推薦給所有需要的朋友！</td>
                        </tr>
                        <tr>
                          <td colspan="3"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"></td>
                        </tr>
                      </table>
                    </div>
                    
                  </div>
    
                  <div class="col-lg-12">
                    
                    <div class="evaluate_card2">
                      <table class="evaluate_table">
                        <tr>
                          <td width="5%"><img src="https://i.pinimg.com/564x/94/21/d8/9421d8ee234a00b9e2715ebb79a3e021.jpg" class="people_photo"></td>
                          <td width="60%">
                            <span>Taro_0106</span><br>
                            <p>東京-排球少年×三麗鷗聯名快閃店</p>
                          </td>
                          <td width="35%" style="vertical-align: top;" align="right"><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i></td>
                        </tr>
                        <tr>
                          <td colspan="3">這次的代購經驗真是讓我非常滿意！商品包裝精美，完好無損地送達，而且速度快得令人驚訝。代購商的服務態度也非常好，及時回覆我的疑問並提供了專業的建議。下次有需要我一定會再次光顧！</td>
                        </tr>
                        <tr>
                          <td colspan="3"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://i.pinimg.com/564x/f5/fa/ad/f5faadb7550f067819e859b62c3dd784.jpg" class="goods_photo"><img src="https://i.pinimg.com/236x/2a/c8/b6/2ac8b69c8f02d00e2a17fa0202cc68d5.jpg" class="goods_photo"><img src="https://i.pinimg.com/236x/6b/c3/a7/6bc3a791734a08b8428b99586cbda1bd.jpg" class="goods_photo"></td>
                        </tr>
                      </table>
                    </div>
                    
                  </div>
    
                  <div class="col-lg-12">
                    
                    <div class="evaluate_card2">
                      <table class="evaluate_table">
                        <tr>
                          <td width="5%"><img src="https://i.pinimg.com/564x/fd/fb/3e/fdfb3e996271fe9d6a35b5581c625d0e.jpg" class="people_photo"></td>
                          <td width="60%">
                            <span>Taro_0106</span><br>
                            <p>東京-排球少年×三麗鷗聯名快閃店</p>
                          </td>
                          <td width="35%" style="vertical-align: top;" align="right"><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i></td>
                        </tr>
                        <tr>
                          <td colspan="3">這次代購真是太棒了！商品質量超出我的預期，與描述完全一致。包裝非常用心，沒有任何損壞或破損。而且代購商的配送速度也很快，讓我感到非常滿意。強烈推薦給所有需要的朋友！</td>
                        </tr>
                        <tr>
                          <td colspan="3"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"></td>
                        </tr>
                      </table>
                    </div>
                    
                  </div>
    
                  <div class="col-lg-12">
                    
                    <div class="evaluate_card2">
                      <table class="evaluate_table">
                        <tr>
                          <td width="5%"><img src="https://i.pinimg.com/564x/d6/a2/07/d6a207f50ebd87603fa7ad342a757104.jpg" class="people_photo"></td>
                          <td width="60%">
                            <span>Taro_0106</span><br>
                            <p>東京-排球少年×三麗鷗聯名快閃店</p>
                          </td>
                          <td width="35%" style="vertical-align: top;" align="right"><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i></td>
                        </tr>
                        <tr>
                          <td colspan="3">這次代購真是太棒了！商品質量超出我的預期，與描述完全一致。包裝非常用心，沒有任何損壞或破損。而且代購商的配送速度也很快，讓我感到非常滿意。強烈推薦給所有需要的朋友！</td>
                        </tr>
                        <tr>
                          <td colspan="3"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"></td>
                        </tr>
                      </table>
                    </div>
                    
                  </div>
    
                  <div class="col-lg-12">
                    
                    <div class="evaluate_card2">
                      <table class="evaluate_table">
                        <tr>
                          <td width="5%"><img src="https://i.pinimg.com/564x/b5/36/bc/b536bc0a7083abe3d64e36e671443982.jpg" class="people_photo"></td>
                          <td width="60%">
                            <span>Taro_0106</span><br>
                            <p>東京-排球少年×三麗鷗聯名快閃店</p>
                          </td>
                          <td width="35%" style="vertical-align: top;" align="right"><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i></td>
                        </tr>
                        <tr>
                          <td colspan="3">這次代購真是太棒了！商品質量超出我的預期，與描述完全一致。包裝非常用心，沒有任何損壞或破損。而且代購商的配送速度也很快，讓我感到非常滿意。強烈推薦給所有需要的朋友！</td>
                        </tr>
                        <tr>
                          <td colspan="3"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"></td>
                        </tr>
                      </table>
                    </div>
                    
                  </div>
                  
                    
                </div>
              </div>
    
    
              <!-- End 3star-->
    
              <!-- 2star -->
              <div role="tabpanel" class="col-lg-12  tab-pane fade" id="2star">
                <div class="row">
    
                  <div class="col-lg-12">
                    
                    <div class="evaluate_card">
                      <table class="evaluate_table">
                        <tr>
                          <td width="5%"><img src="https://i.pinimg.com/564x/f6/1a/e4/f61ae484b7c56295adbaa4010235cd68.jpg" class="people_photo"></td>
                          <td width="60%">
                            <span>Taro_0106</span><br>
                            <p>東京-排球少年×三麗鷗聯名快閃店</p>
                          </td>
                          <td width="35%" style="vertical-align: top;" align="right"><i class="fa-solid fa-wand-sparkles" style="font-size: 20px;"></i><i class="fa-solid fa-wand-sparkles" style="font-size: 20px;"></i><i class="fa-solid fa-wand-sparkles" style="font-size: 20px;"></i><i class="fa-solid fa-wand-sparkles" style="font-size: 20px;"></i><i class="fa-solid fa-wand-sparkles" style="font-size: 20px;"></i></td>
                        </tr>
                        <tr>
                          <td colspan="3">這次的代購經驗真是讓我非常滿意！商品包裝精美，完好無損地送達，而且速度快得令人驚訝。代購商的服務態度也非常好，及時回覆我的疑問並提供了專業的建議。下次有需要我一定會再次光顧！</td>
                        </tr>
                        <tr>
                          <td colspan="3"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://i.pinimg.com/564x/f5/fa/ad/f5faadb7550f067819e859b62c3dd784.jpg" class="goods_photo"><img src="https://i.pinimg.com/236x/2a/c8/b6/2ac8b69c8f02d00e2a17fa0202cc68d5.jpg" class="goods_photo"><img src="https://i.pinimg.com/236x/6b/c3/a7/6bc3a791734a08b8428b99586cbda1bd.jpg" class="goods_photo"></td>
                        </tr>
                      </table>
                    </div>
                    
                  </div>
    
                  <div class="col-lg-12">
                    
                    <div class="evaluate_card">
                      <table class="evaluate_table">
                        <tr>
                          <td width="5%"><img src="https://i.pinimg.com/564x/1f/c6/6a/1fc66a08447b965a3e1000ccfc784029.jpg" class="people_photo"></td>
                          <td width="60%">
                            <span>Taro_0106</span><br>
                            <p>東京-排球少年×三麗鷗聯名快閃店</p>
                          </td>
                          <td width="35%" style="vertical-align: top;" align="right"><i class="fa-solid fa-wand-sparkles" style="font-size: 20px;"></i><i class="fa-solid fa-wand-sparkles" style="font-size: 20px;"></i><i class="fa-solid fa-wand-sparkles" style="font-size: 20px;"></i><i class="fa-solid fa-wand-sparkles" style="font-size: 20px;"></i><i class="fa-solid fa-wand-sparkles" style="font-size: 20px;"></i></td>
                        </tr>
                        <tr>
                          <td colspan="3">這次代購真是太棒了！商品質量超出我的預期，與描述完全一致。包裝非常用心，沒有任何損壞或破損。而且代購商的配送速度也很快，讓我感到非常滿意。強烈推薦給所有需要的朋友！</td>
                        </tr>
                        <tr>
                          <td colspan="3"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"></td>
                        </tr>
                      </table>
                    </div>
                    
                  </div>
    
                  <div class="col-lg-12">
                    
                    <div class="evaluate_card">
                      <table class="evaluate_table">
                        <tr>
                          <td width="5%"><img src="https://i.pinimg.com/564x/60/cf/43/60cf43172ea279f05b95318ee79e6afe.jpg" class="people_photo"></td>
                          <td width="60%">
                            <span>Taro_0106</span><br>
                            <p>東京-排球少年×三麗鷗聯名快閃店</p>
                          </td>
                          <td width="35%" style="vertical-align: top;" align="right"><i class="fa-solid fa-wand-sparkles" style="font-size: 20px;"></i><i class="fa-solid fa-wand-sparkles" style="font-size: 20px;"></i><i class="fa-solid fa-wand-sparkles" style="font-size: 20px;"></i><i class="fa-solid fa-wand-sparkles" style="font-size: 20px;"></i><i class="fa-solid fa-wand-sparkles" style="font-size: 20px;"></i></td>
                        </tr>
                        <tr>
                          <td colspan="3">非常感謝</td>
                        </tr>
                        <tr>
                          <td colspan="3"></td>
                        </tr>
                      </table>
                    </div>
                    
                  </div>
    
                  <div class="col-lg-12">
                    
                    <div class="evaluate_card">
                      <table class="evaluate_table">
                        <tr>
                          <td width="5%"><img src="https://i.pinimg.com/564x/89/c6/23/89c623bb146eab0a3d6395a61bda0523.jpg" class="people_photo"></td>
                          <td width="60%">
                            <span>Taro_0106</span><br>
                            <p>東京-排球少年×三麗鷗聯名快閃店</p>
                          </td>
                          <td width="35%" style="vertical-align: top;" align="right"><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i></td>
                        </tr>
                        <tr>
                          <td colspan="3">這次代購真是太棒了！商品質量超出我的預期，與描述完全一致。包裝非常用心，沒有任何損壞或破損。而且代購商的配送速度也很快，讓我感到非常滿意。強烈推薦給所有需要的朋友！</td>
                        </tr>
                        <tr>
                          <td colspan="3"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"></td>
                        </tr>
                      </table>
                    </div>
                    
                  </div>
    
                  <div class="col-lg-12">
                    
                    <div class="evaluate_card">
                      <table class="evaluate_table">
                        <tr>
                          <td width="5%"><img src="https://i.pinimg.com/564x/94/21/d8/9421d8ee234a00b9e2715ebb79a3e021.jpg" class="people_photo"></td>
                          <td width="60%">
                            <span>Taro_0106</span><br>
                            <p>東京-排球少年×三麗鷗聯名快閃店</p>
                          </td>
                          <td width="35%" style="vertical-align: top;" align="right"><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i></td>
                        </tr>
                        <tr>
                          <td colspan="3">這次的代購經驗真是讓我非常滿意！商品包裝精美，完好無損地送達，而且速度快得令人驚訝。代購商的服務態度也非常好，及時回覆我的疑問並提供了專業的建議。下次有需要我一定會再次光顧！</td>
                        </tr>
                        <tr>
                          <td colspan="3"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://i.pinimg.com/564x/f5/fa/ad/f5faadb7550f067819e859b62c3dd784.jpg" class="goods_photo"><img src="https://i.pinimg.com/236x/2a/c8/b6/2ac8b69c8f02d00e2a17fa0202cc68d5.jpg" class="goods_photo"><img src="https://i.pinimg.com/236x/6b/c3/a7/6bc3a791734a08b8428b99586cbda1bd.jpg" class="goods_photo"></td>
                        </tr>
                      </table>
                    </div>
                    
                  </div>
    
                  <div class="col-lg-12">
                    
                    <div class="evaluate_card">
                      <table class="evaluate_table">
                        <tr>
                          <td width="5%"><img src="https://i.pinimg.com/564x/fd/fb/3e/fdfb3e996271fe9d6a35b5581c625d0e.jpg" class="people_photo"></td>
                          <td width="60%">
                            <span>Taro_0106</span><br>
                            <p>東京-排球少年×三麗鷗聯名快閃店</p>
                          </td>
                          <td width="35%" style="vertical-align: top;" align="right"><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i></td>
                        </tr>
                        <tr>
                          <td colspan="3">這次代購真是太棒了！商品質量超出我的預期，與描述完全一致。包裝非常用心，沒有任何損壞或破損。而且代購商的配送速度也很快，讓我感到非常滿意。強烈推薦給所有需要的朋友！</td>
                        </tr>
                        <tr>
                          <td colspan="3"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"></td>
                        </tr>
                      </table>
                    </div>
                    
                  </div>
    
                  <div class="col-lg-12">
                    
                    <div class="evaluate_card">
                      <table class="evaluate_table">
                        <tr>
                          <td width="5%"><img src="https://i.pinimg.com/564x/d6/a2/07/d6a207f50ebd87603fa7ad342a757104.jpg" class="people_photo"></td>
                          <td width="60%">
                            <span>Taro_0106</span><br>
                            <p>東京-排球少年×三麗鷗聯名快閃店</p>
                          </td>
                          <td width="35%" style="vertical-align: top;" align="right"><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i></td>
                        </tr>
                        <tr>
                          <td colspan="3">這次代購真是太棒了！商品質量超出我的預期，與描述完全一致。包裝非常用心，沒有任何損壞或破損。而且代購商的配送速度也很快，讓我感到非常滿意。強烈推薦給所有需要的朋友！</td>
                        </tr>
                        <tr>
                          <td colspan="3"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"></td>
                        </tr>
                      </table>
                    </div>
                    
                  </div>
    
                  <div class="col-lg-12">
                    
                    <div class="evaluate_card">
                      <table class="evaluate_table">
                        <tr>
                          <td width="5%"><img src="https://i.pinimg.com/564x/b5/36/bc/b536bc0a7083abe3d64e36e671443982.jpg" class="people_photo"></td>
                          <td width="60%">
                            <span>Taro_0106</span><br>
                            <p>東京-排球少年×三麗鷗聯名快閃店</p>
                          </td>
                          <td width="35%" style="vertical-align: top;" align="right"><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i></td>
                        </tr>
                        <tr>
                          <td colspan="3">這次代購真是太棒了！商品質量超出我的預期，與描述完全一致。包裝非常用心，沒有任何損壞或破損。而且代購商的配送速度也很快，讓我感到非常滿意。強烈推薦給所有需要的朋友！</td>
                        </tr>
                        <tr>
                          <td colspan="3"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"></td>
                        </tr>
                      </table>
                    </div>
                    
                  </div>
                  
                    
                </div>
              </div>
    
    
              <!-- End 2star-->
    
              <!-- 1star -->
              <div role="tabpanel" class="col-lg-12  tab-pane fade" id="1star">
    
              </div>
    
    
              <!-- End 1star-->
    
            </div>
    
          
    
        </section><!-- End evaluate Section -->
          
    
      </div>
    </section><!-- End shop_group Section -->
    
    
    
    
      
    
    
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