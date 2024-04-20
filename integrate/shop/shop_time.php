<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>賣場介面 - 限定開團</title>
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

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="../index/index.html">WISHOP</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="../index/index.html" >首頁</a></li>
          <li class="dropdown"><a href="portfolio.html" class="active"><span>購物</span><i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="about.html">About</a></li>
              <li><a href="team.html">Team</a></li>
              <li><a href="testimonials.html">Testimonials</a></li>

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
          <li><a href="../wish/wish.html">許願池</a></li>

          <?php
            if(!empty($_SESSION['user_name'])){
              echo '
              <li><a href="#"><i class="fa-solid fa-bell"></i></a></li>

              <li class="dropdown"><a href="../profile/Profile_settings.html"><img src="',$_SESSION["user_avatar"],'" class="nav-photo"></a>
                <ul>
                  <li><a style="color:#FFF;font-weight: 600;margin-bottom: 0px;">',$_SESSION["user_name"],'</a></li>
                  <hr>
                  <li><a href="../profile/Wishlist.html" style="font-weight: 600;">收藏清單</a></li>
                  <li><a href="../profile/Purchase_history.html" style="font-weight: 600;">購買紀錄</a></li>
                  <li><a href="../index/logout.php" style="font-weight: 600;">登出&nbsp;<i class="fa-solid fa-right-from-bracket"></i></a></li>
                </ul>
              </li>
              ';
            }else{
              echo "<a href='../index/login.php' class='getstarted' style='color: white;'>登入</a>";
            }
          ?>


          <!-- <li><a href="contact.html">Contact</a></li> -->

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
      <h1 class="text-light"><a href="index.html">三麗鷗快樂購</a></h1>
      
  </div>
  <div class="social-links">
    <a href="./shop_time.html" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="官方推特" data-bs-arrow-color="#B0A5C6"><i class="bx bxl-twitter"></i></a>
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
        <li><a href="./shop.html" class="nav-link scrollto"><i class="bi bi-shop"></i><span>代購商品</span></a></li>
        <li><a href="./shop_time.html" class="nav-link scrollto  active"><i class="bi bi-clock-history"></i> <span>限定開團</span></a></li>
        <li><a href="./shop_wish.html" class="nav-link scrollto"><i class="fa-solid fa-wand-sparkles"></i><span>許願池</span></a></li>
        <li><a href="./shop_rule.html" class="nav-link scrollto"><i class="fa-solid fa-file-circle-question"></i><span>賣場規則</span></a></li>
        <li><a href="./shop_evaluate.html" class="nav-link scrollto"><i class="fa-regular fa-comment-dots"></i> <span>賣場評價</span></a></li>
        <!-- <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li> -->
      </ul>
    </nav><!-- .nav-menu -->

  </header><!-- End Header -->

  <div class="min_nav">
    <button id="triggerBtn"><i class="bi bi-shop"></i></button>
    <div id="slideContainer">
      <a href="./shop.html" class="slideItem"><i class="bi bi-shop"></i></a>
      <a href="./shop_time.html" class="slideItem"><i class="bi bi-clock-history"></i></a>
      <a href="./shop_wish.html" class="slideItem"><i class="fa-solid fa-wand-sparkles"></i></a>
      <a href="./shop_rule.html" class="slideItem"><i class="fa-solid fa-file-circle-question"></i></a>
      <a href="./shop_evaluate.html" class="slideItem"><i class="fa-regular fa-comment-dots"></i></a>
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
                      <td width="50%"><input type="text" class="form-control" value="file:///D:/data/Desktop/%E8%A8%B1%E9%A1%98%E4%BB%A3%E8%B3%BCvar0.0/%E8%B3%A3%E5%A0%B4%E4%BB%8B%E9%9D%A2/shop.html"></td>
                    </tr>
                    <tr>
                      <td width="10%" align="center"><label class="icon-label"><i class="bx bxl-facebook"></i></label></td>
                      <td width="30%"><input type="text" class="form-control" value="三麗鷗快樂購facebook官方社群"></td>
                      <td width="60%"><input type="text" class="form-control" value="file:///D:/data/Desktop/%E8%A8%B1%E9%A1%98%E4%BB%A3%E8%B3%BCvar0.0/%E8%B3%A3%E5%A0%B4%E4%BB%8B%E9%9D%A2/shop.html"></td>
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
                    <td width="10%"><a href="./shop_evaluate.html" class="nav-link scrollto"><i class="fa-solid fa-xmark"></i></a></td>
                  </tr>
                  <tr>
                    <td width="10%" align="center"><label class="icon-label"><i class="bx bxl-facebook"></i></label></td>
                    <td width="80%">三麗鷗快樂購facebook官方社群</td>
                    <td width="10%"><a href="./shop_evaluate.html" class="nav-link scrollto"><i class="fa-solid fa-xmark"></i></a></td>
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
    
        <!-- ======= Schedule Section ======= -->
        <section id="schedule" class="section-with-bg">
          
            
            <div class="flex-container">
              <!-- Section Title -->
              <div class="section-title" data-aos="fade-up">
                <h2><i class="bi bi-clock-history"></i>&nbsp;&nbsp;限定開團</h2>
              </div><!-- End Section Title -->
              <div>
                <button type="button" class="btn insert_button" data-bs-toggle="modal" data-bs-target="#insert_group_Modal"><i class="bi bi-bag-plus"></i>&nbsp;新增商品團體</button>
                <button type="button" class="btn insert_button" data-bs-toggle="modal" data-bs-target="#insert_Preview_Modal"><i class="bi bi-bag-plus"></i>&nbsp;新增預告</button>
              </div>
              
              <!-- Modal -->
              <div class="modal fade" id="insert_group_Modal" tabindex="-1" aria-labelledby="insert_group_ModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="insert_group_ModalLabel">新增商品團體</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form>
                        <table width="100%" class="insert_group_form">
                          <tr>
                            <td width="10%">商品團名</td>
                            <td width="90%"><input type="text" id="group_name" class="form-control"></td>
                          </tr>
                          <tr>
                            <td>國家</td>
                            <td><input type="text" id="group_name" class="form-control"></td>
                          </tr>
                          <tr>
                            <td>商團封面</td>
                            <td><input class="form-control" type="file" id="group_cover"></td>
                          </tr>
                          <tr>
                            <td>商團敘述</td>
                            <td><textarea class="form-control" rows="5"></textarea></td>
                          </tr>
                          <tr>
                            <td>原商品連結</td>
                            <td><input type="text" id="group_name" class="form-control"></td>
                          </tr>
                          <tr>
                            <td>結單日期</td>
                            <td style="text-align: left;"><input type="date" name="end" class="form-control" style="width: 40%;" value="">&nbsp;&nbsp;<input type="time" name="endtime" class="form-control" style="width: 40%;" value=""></td>
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
    
              <!-- insert_Preview_Modal -->
              <div class="modal fade" id="insert_Preview_Modal" tabindex="-1" aria-labelledby="insert_Preview_ModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="insert_Preview_ModalLabel">新增預告</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form>
                        <table width="100%" class="insert_group_form">
                          <tr>
                            <td width="10%">預告標題</td>
                            <td width="90%"><input type="text" id="group_name" class="form-control"></td>
                          </tr>
                          <tr>
                            <td>預告敘述</td>
                            <td><textarea class="form-control" rows="5"></textarea></td>
                          </tr>
                          <tr>
                            <td>預告圖片</td>
                            <td><input class="form-control" type="file" id="group_cover"></td>
                          </tr>
                          <tr>
                            <td colspan="2"><button type="submit" class="btn insert_button" style="display: block;width: 100%;">確認新增</button></td>
                          </tr>
                        </table>
                        
                      </form>
                    </div>
                  </div>
                </div>
              </div><!-- insert_Preview_Modal -->
        
            </div><!-- End flex-container -->
            
    
            <ul class="nav nav-tabs" role="tablist" data-aos="fade-up" data-aos-delay="100">
              <li class="nav-item">
                <a class="nav-link active" href="#day-1" role="tab" data-bs-toggle="tab"><i class="fa-solid fa-hourglass-half"></i>&nbsp;進行中</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#day-2" role="tab" data-bs-toggle="tab"><i class="fa-solid fa-hourglass-start"></i>&nbsp;開團預告</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#day-3" role="tab" data-bs-toggle="tab"><i class="fa-solid fa-hourglass-end"></i>&nbsp;歷史開團</a>
              </li>
            </ul>
    
            <div class="tab-content row justify-content-center" data-aos="fade-up" data-aos-delay="200">
    
              <!-- Schdule Day 1 -->
              <div role="tabpanel" class="col-lg-12 tab-pane fade show active" id="day-1">
    
                <div class="row shop_group-container">
                  
                  <div class="col-lg-4 col-md-6 shop_group-item">
                    <div class="shop_group-wrap">
                      <figure>
                        <img src="https://www.japaholic.com/storage/article/images/2019/02/1857bd7144653c0b38441f5d801b0769.jpg" alt="" width="100%" height="100%">
                        <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="link-preview shop_group-lightbox" title="收藏"><i class="fa-regular fa-heart"></i></a>
                        <a href="portfolio-details.html" class="link-details" title="查看詳情"><i class="bx bx-link"></i></a>
                      </figure>
            
                      <div class="shop_group-info">
                        <h4><a href="portfolio-details.html">三麗鷗系列周邊貓之日商品</a></h4>
                        <div class="flex-container">
                          <p><i class="bi bi-clock-history"></i>&nbsp;2024-05-20</p>
                          <p><i class="fa-regular fa-heart"></i>&nbsp;103&nbsp;&nbsp;<i class="fa-solid fa-user-group"></i>&nbsp;20</p>
                        </div>
                      </div>
                    </div>
                  </div>

                    <div class="col-lg-4 col-md-6 shop_group-item">
                      <div class="shop_group-wrap">
                        <figure>
                          <img src="https://www.niusnews.com/upload/imgs/default/202302_Noah/0220/2/sub1-goods-sakura-2302.jpeg" alt="" width="100%" height="100%">
                          <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="link-preview shop_group-lightbox" title="收藏"><i class="fa-regular fa-heart"></i></a>
                          <a href="portfolio-details.html" class="link-details" title="查看詳情"><i class="bx bx-link"></i></a>
                        </figure>
              
                        <div class="shop_group-info">
                          <h4><a href="portfolio-details.html">三麗鷗「櫻花季」</a></h4>
                          <div class="flex-container">
                            <p><i class="bi bi-clock-history"></i>&nbsp;2024-04-20</p>
                            <p><i class="fa-regular fa-heart"></i>&nbsp;1717&nbsp;&nbsp;<i class="fa-solid fa-user-group"></i>&nbsp;2039</p>
                          </div>
                        </div>
                      </div>
                    </div>
              
                    <div class="col-lg-4 col-md-6 shop_group-item" data-wow-delay="0.1s">
                      <div class="shop_group-wrap">
                        <figure>
                          <img src="https://today-obs.line-scdn.net/0hQYfc7xmHDnZbGhy6CX9xIWNMAgdofBR_eS9GFH4ZUE5_NkFwZn9dFSkYBFp-LUh3ey9GEC5OV0R3LklwMA/w1200" alt="" width="100%" height="100%">
                          <a href="assets/img/portfolio/portfolio-2.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="收藏"><i class="fa-regular fa-heart"></i></a>
                          <a href="../lisa/InnerPage.html" class="link-details" title="查看詳情"><i class="bx bx-link"></i></a>
                        </figure>
              
                        <div class="shop_group-info">
                          <h4><a href="../lisa/InnerPage.html">日本「美少女戰士X三麗鷗」</a></h4>
                          <div class="flex-container">
                            <p><i class="bi bi-clock-history"></i>&nbsp;2024-05-02</p>
                            <p><i class="fa-regular fa-heart"></i>&nbsp;255&nbsp;&nbsp;<i class="fa-solid fa-user-group"></i>&nbsp;88</p>
                          </div>
                        </div>
                      </div>
                    </div>
              
                    <div class="col-lg-4 col-md-6 shop_group-item" data-wow-delay="0.2s">
                      <div class="shop_group-wrap">
                        <button type="button" class="btn-floating" disabled>已結單</button>
                        <figure>
                          <img src="https://down-tw.img.susercontent.com/file/tw-11134207-7qul9-lj5kvyccfayq34" alt="" width="100%" height="100%">
                          <a href="assets/img/portfolio/portfolio-3.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="收藏"><i class="fa-regular fa-heart"></i></a>
                          <a href="portfolio-details.html" class="link-details" title="查看詳情"><i class="bx bx-link"></i></a>
                        </figure>
              
                        <div class="shop_group-info">
                          <h4><a href="portfolio-details.html">日本三麗鷗彩虹樂園限定商品</a></h4>
                          <div class="flex-container">
                            <p><i class="bi bi-clock-history"></i>&nbsp;2023-12-20</p>
                            <p><i class="fa-regular fa-heart"></i>&nbsp;500&nbsp;&nbsp;<i class="fa-solid fa-user-group"></i>&nbsp;326</p>
                          </div>
                        </div>
                      </div>
                    </div>
    
                </div>
    
              </div>
              <!-- End Schdule Day 1 -->
    
              <!-- Schdule Day 2 -->
              <div role="tabpanel" class="col-lg-12  tab-pane fade" id="day-2">
    
                <div class="row">
    
                  <div class="col-lg-6">
                    
                    <div class="preview_card">
                      <table class="preview_table">
                        <tr class="preview_tr">
                          <td width="85%">
                            <h1>熱烈預告！獨家團購：排球少年日本聯名衣服！</h1>
                          </td>
                          <td width="15%" style="vertical-align: top;" align="right"><p><a href="#"><i class="bi bi-suit-heart"></i>&nbsp;1004</a></td>
                        </tr>
                        <tr>
                          <td colspan="2" >
                            <div class="scrollable-row">
                            大家好！準備好了嗎？我們即將展開一場精彩絕倫的活動！我們將開團販售最新最潮的排球少年日本聯名衣服，讓你成為最矚目的焦點！<br>
                            🔥 這是一個難得的機會，能夠擁有這款獨特的聯名衣服，展現你對排球少年的熱愛，更加凸顯你的時尚品味！不要錯過這個機會！<br>
                            
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td colspan="3" style="height: 70px;"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://i.pinimg.com/564x/f5/fa/ad/f5faadb7550f067819e859b62c3dd784.jpg" class="goods_photo"><img src="https://i.pinimg.com/236x/2a/c8/b6/2ac8b69c8f02d00e2a17fa0202cc68d5.jpg" class="goods_photo"><img src="https://i.pinimg.com/236x/6b/c3/a7/6bc3a791734a08b8428b99586cbda1bd.jpg" class="goods_photo"></td>
                        </tr>
                      </table>
                    </div>
                    
                  </div>
    
                  <div class="col-lg-6">
                    
                    <div class="preview_card">
                      <table class="preview_table">
                        <tr class="preview_tr">
                          <td width="85%">
                            <h1>熱烈預告！獨家團購：排球少年日本聯名衣服！</h1>
                          </td>
                          <td width="15%" style="vertical-align: top;" align="right"><p><a href="#"><i class="bi bi-suit-heart"></i>&nbsp;1004</a></td>
                        </tr>
                        <tr>
                          <td colspan="2" >
                            <div class="scrollable-row">
                            大家好！準備好了嗎？我們即將展開一場精彩絕倫的活動！我們將開團販售最新最潮的排球少年日本聯名衣服，讓你成為最矚目的焦點！<br>
                            🔥 這是一個難得的機會，能夠擁有這款獨特的聯名衣服，展現你對排球少年的熱愛，更加凸顯你的時尚品味！不要錯過這個機會！<br>
                            📅 開團時間：[日期] [時間]<br>
                            🛒 販售價格：[價格]<br>
                            🚀 數量有限，先到先得！立即加入我們的團購，讓排球少年的風采成為你的獨特風景！<br>
                            <br>
                            敬請期待更多詳細資訊的公佈，一起為我們的熱情共鳴！記得留意我們的專頁，不要錯過任何一個重要消息！<br>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td colspan="3" style="height: 70px;"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://i.pinimg.com/564x/f5/fa/ad/f5faadb7550f067819e859b62c3dd784.jpg" class="goods_photo"><img src="https://i.pinimg.com/236x/2a/c8/b6/2ac8b69c8f02d00e2a17fa0202cc68d5.jpg" class="goods_photo"><img src="https://i.pinimg.com/236x/6b/c3/a7/6bc3a791734a08b8428b99586cbda1bd.jpg" class="goods_photo"></td>
                        </tr>
                      </table>
                    </div>
                    
                  </div>
    
                  <div class="col-lg-6">
                    
                    <div class="preview_card">
                      <table class="preview_table">
                        <tr class="preview_tr">
                          <td width="85%">
                            <h1>熱烈預告！獨家團購：排球少年日本聯名衣服！</h1>
                          </td>
                          <td width="15%" style="vertical-align: top;" align="right"><p><a href="#"><i class="bi bi-suit-heart"></i>&nbsp;1004</a></td>
                        </tr>
                        <tr>
                          <td colspan="2" >
                            <div class="scrollable-row">
                            大家好！準備好了嗎？我們即將展開一場精彩絕倫的活動！我們將開團販售最新最潮的排球少年日本聯名衣服，讓你成為最矚目的焦點！<br>
                            🔥 這是一個難得的機會，能夠擁有這款獨特的聯名衣服，展現你對排球少年的熱愛，更加凸顯你的時尚品味！不要錯過這個機會！<br>
                            📅 開團時間：[日期] [時間]<br>
                            🛒 販售價格：[價格]<br>
                            🚀 數量有限，先到先得！立即加入我們的團購，讓排球少年的風采成為你的獨特風景！<br>
                            <br>
                            敬請期待更多詳細資訊的公佈，一起為我們的熱情共鳴！記得留意我們的專頁，不要錯過任何一個重要消息！<br>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td colspan="3" style="height: 70px;"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://i.pinimg.com/564x/f5/fa/ad/f5faadb7550f067819e859b62c3dd784.jpg" class="goods_photo"><img src="https://i.pinimg.com/236x/2a/c8/b6/2ac8b69c8f02d00e2a17fa0202cc68d5.jpg" class="goods_photo"><img src="https://i.pinimg.com/236x/6b/c3/a7/6bc3a791734a08b8428b99586cbda1bd.jpg" class="goods_photo"></td>
                        </tr>
                      </table>
                    </div>
                    
                  </div>
    
                  <div class="col-lg-6">
                    
                    <div class="preview_card">
                      <table class="preview_table">
                        <tr class="preview_tr">
                          <td width="85%">
                            <h1>熱烈預告！獨家團購：排球少年日本聯名衣服！</h1>
                          </td>
                          <td width="15%" style="vertical-align: top;" align="right"><p><a href="#"><i class="bi bi-suit-heart"></i>&nbsp;1004</a></td>
                        </tr>
                        <tr>
                          <td colspan="2" >
                            <div class="scrollable-row">
                            大家好！準備好了嗎？我們即將展開一場精彩絕倫的活動！我們將開團販售最新最潮的排球少年日本聯名衣服，讓你成為最矚目的焦點！<br>
                            🔥 這是一個難得的機會，能夠擁有這款獨特的聯名衣服，展現你對排球少年的熱愛，更加凸顯你的時尚品味！不要錯過這個機會！<br>
                            📅 開團時間：[日期] [時間]<br>
                            🛒 販售價格：[價格]<br>
                            🚀 數量有限，先到先得！立即加入我們的團購，讓排球少年的風采成為你的獨特風景！<br>
                            <br>
                            敬請期待更多詳細資訊的公佈，一起為我們的熱情共鳴！記得留意我們的專頁，不要錯過任何一個重要消息！<br>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td colspan="3" style="height: 70px;"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://i.pinimg.com/564x/f5/fa/ad/f5faadb7550f067819e859b62c3dd784.jpg" class="goods_photo"><img src="https://i.pinimg.com/236x/2a/c8/b6/2ac8b69c8f02d00e2a17fa0202cc68d5.jpg" class="goods_photo"><img src="https://i.pinimg.com/236x/6b/c3/a7/6bc3a791734a08b8428b99586cbda1bd.jpg" class="goods_photo"></td>
                        </tr>
                      </table>
                    </div>
                    
                  </div>
    
                  <div class="col-lg-6">
                    
                    <div class="preview_card">
                      <table class="preview_table">
                        <tr class="preview_tr">
                          <td width="85%">
                            <h1>熱烈預告！獨家團購：排球少年日本聯名衣服！</h1>
                          </td>
                          <td width="15%" style="vertical-align: top;" align="right"><p><a href="#"><i class="bi bi-suit-heart"></i>&nbsp;1004</a></td>
                        </tr>
                        <tr>
                          <td colspan="2" >
                            <div class="scrollable-row">
                            大家好！準備好了嗎？我們即將展開一場精彩絕倫的活動！我們將開團販售最新最潮的排球少年日本聯名衣服，讓你成為最矚目的焦點！<br>
                            🔥 這是一個難得的機會，能夠擁有這款獨特的聯名衣服，展現你對排球少年的熱愛，更加凸顯你的時尚品味！不要錯過這個機會！<br>
                            📅 開團時間：[日期] [時間]<br>
                            🛒 販售價格：[價格]<br>
                            🚀 數量有限，先到先得！立即加入我們的團購，讓排球少年的風采成為你的獨特風景！<br>
                            <br>
                            敬請期待更多詳細資訊的公佈，一起為我們的熱情共鳴！記得留意我們的專頁，不要錯過任何一個重要消息！<br>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td colspan="3" style="height: 70px;"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://i.pinimg.com/564x/f5/fa/ad/f5faadb7550f067819e859b62c3dd784.jpg" class="goods_photo"><img src="https://i.pinimg.com/236x/2a/c8/b6/2ac8b69c8f02d00e2a17fa0202cc68d5.jpg" class="goods_photo"><img src="https://i.pinimg.com/236x/6b/c3/a7/6bc3a791734a08b8428b99586cbda1bd.jpg" class="goods_photo"></td>
                        </tr>
                      </table>
                    </div>
                    
                  </div>
    
                  <div class="col-lg-6">
                    
                    <div class="preview_card">
                      <table class="preview_table">
                        <tr class="preview_tr">
                          <td width="85%">
                            <h1>熱烈預告！獨家團購：排球少年日本聯名衣服！</h1>
                          </td>
                          <td width="15%" style="vertical-align: top;" align="right"><p><a href="#"><i class="bi bi-suit-heart"></i>&nbsp;1004</a></td>
                        </tr>
                        <tr>
                          <td colspan="2" >
                            <div class="scrollable-row">
                            大家好！準備好了嗎？我們即將展開一場精彩絕倫的活動！我們將開團販售最新最潮的排球少年日本聯名衣服，讓你成為最矚目的焦點！<br>
                            🔥 這是一個難得的機會，能夠擁有這款獨特的聯名衣服，展現你對排球少年的熱愛，更加凸顯你的時尚品味！不要錯過這個機會！<br>
                            📅 開團時間：[日期] [時間]<br>
                            🛒 販售價格：[價格]<br>
                            🚀 數量有限，先到先得！立即加入我們的團購，讓排球少年的風采成為你的獨特風景！<br>
                            <br>
                            敬請期待更多詳細資訊的公佈，一起為我們的熱情共鳴！記得留意我們的專頁，不要錯過任何一個重要消息！<br>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td colspan="3" style="height: 70px;"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://i.pinimg.com/564x/f5/fa/ad/f5faadb7550f067819e859b62c3dd784.jpg" class="goods_photo"><img src="https://i.pinimg.com/236x/2a/c8/b6/2ac8b69c8f02d00e2a17fa0202cc68d5.jpg" class="goods_photo"><img src="https://i.pinimg.com/236x/6b/c3/a7/6bc3a791734a08b8428b99586cbda1bd.jpg" class="goods_photo"></td>
                        </tr>
                      </table>
                    </div>
                    
                  </div>
    
                  <div class="col-lg-6">
                    
                    <div class="preview_card">
                      <table class="preview_table">
                        <tr class="preview_tr">
                          <td width="85%">
                            <h1>熱烈預告！獨家團購：排球少年日本聯名衣服！</h1>
                          </td>
                          <td width="15%" style="vertical-align: top;" align="right"><p><a href="#"><i class="bi bi-suit-heart"></i>&nbsp;1004</a></td>
                        </tr>
                        <tr>
                          <td colspan="2" >
                            <div class="scrollable-row">
                            大家好！準備好了嗎？我們即將展開一場精彩絕倫的活動！我們將開團販售最新最潮的排球少年日本聯名衣服，讓你成為最矚目的焦點！<br>
                            🔥 這是一個難得的機會，能夠擁有這款獨特的聯名衣服，展現你對排球少年的熱愛，更加凸顯你的時尚品味！不要錯過這個機會！<br>
                            📅 開團時間：[日期] [時間]<br>
                            🛒 販售價格：[價格]<br>
                            🚀 數量有限，先到先得！立即加入我們的團購，讓排球少年的風采成為你的獨特風景！<br>
                            <br>
                            敬請期待更多詳細資訊的公佈，一起為我們的熱情共鳴！記得留意我們的專頁，不要錯過任何一個重要消息！<br>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td colspan="3" style="height: 70px;"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://img.ws.mms.shopee.tw/tw-11134211-7qukx-li51ahq6fgz8d8" class="goods_photo"><img src="https://i.pinimg.com/564x/f5/fa/ad/f5faadb7550f067819e859b62c3dd784.jpg" class="goods_photo"><img src="https://i.pinimg.com/236x/2a/c8/b6/2ac8b69c8f02d00e2a17fa0202cc68d5.jpg" class="goods_photo"><img src="https://i.pinimg.com/236x/6b/c3/a7/6bc3a791734a08b8428b99586cbda1bd.jpg" class="goods_photo"></td>
                        </tr>
                      </table>
                    </div>
                    
                  </div>
    
                  <div class="col-lg-6">
                    
                    <div class="preview_card">
                      <table class="preview_table">
                        <tr class="preview_tr">
                          <td width="85%">
                            <h1>熱烈預告！獨家團購：排球少年日本聯名衣服！</h1>
                          </td>
                          <td width="15%" style="vertical-align: top;" align="right"><p><a href="#"><i class="bi bi-suit-heart"></i>&nbsp;1004</a></td>
                        </tr>
                        <tr>
                          <td colspan="2" >
                            <div class="scrollable-row-no-photo">
                            大家好！準備好了嗎？我們即將展開一場精彩絕倫的活動！我們將開團販售最新最潮的排球少年日本聯名衣服，讓你成為最矚目的焦點！<br>
                            🔥 這是一個難得的機會，能夠擁有這款獨特的聯名衣服，展現你對排球少年的熱愛，更加凸顯你的時尚品味！不要錯過這個機會！<br>
                            📅 開團時間：[日期] [時間]<br>
                            🛒 販售價格：[價格]<br>
                            🚀 數量有限，先到先得！立即加入我們的團購，讓排球少年的風采成為你的獨特風景！<br>
                            <br>
                            敬請期待更多詳細資訊的公佈，一起為我們的熱情共鳴！記得留意我們的專頁，不要錯過任何一個重要消息！<br>
                            大家好！準備好了嗎？我們即將展開一場精彩絕倫的活動！我們將開團販售最新最潮的排球少年日本聯名衣服，讓你成為最矚目的焦點！<br>
                            🔥 這是一個難得的機會，能夠擁有這款獨特的聯名衣服，展現你對排球少年的熱愛，更加凸顯你的時尚品味！不要錯過這個機會！<br>
                            📅 開團時間：[日期] [時間]<br>
                            🛒 販售價格：[價格]<br>
                            🚀 數量有限，先到先得！立即加入我們的團購，讓排球少年的風采成為你的獨特風景！<br>
                            <br>
                            敬請期待更多詳細資訊的公佈，一起為我們的熱情共鳴！記得留意我們的專頁，不要錯過任何一個重要消息！<br>
                            </div>
                          </td>
                        </tr>
                      </table>
                    </div>
                    
                  </div>
                  
                    
                </div>
    
    
              </div>
              <!-- End Schdule Day 2 -->
    
              <!-- Schdule Day 3 -->
              <div role="tabpanel" class="col-lg-12  tab-pane fade" id="day-3">
    
                <div class="row shop_group-container">
    
    
                  <div class="col-lg-4 col-md-6 shop_group-item">
                    <div class="shop_group-wrap">
                      <figure>
                        <img src="https://img.japankuru.com/prg_img/img/img2024030815304878405200.jpg" alt="" width="100%" height="100%">
                        <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="link-preview shop_group-lightbox" title="收藏"><i class="fa-regular fa-heart"></i></a>
                        <a href="portfolio-details.html" class="link-details" title="查看詳情"><i class="bx bx-link"></i></a>
                      </figure>
            
                      <div class="shop_group-info">
                        <h4><a href="portfolio-details.html">東京-排球少年×三麗鷗聯名快閃店</a></h4>
                        <div class="flex-container">
                          <p><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i>&nbsp;(4.5)</p>
                          <p><i class="fa-regular fa-heart"></i>&nbsp;3005&nbsp;&nbsp;<i class="fa-solid fa-user-group"></i>&nbsp;2594</p>
                        </div>
                      </div>
                    </div>
                  </div>
            
                  <div class="col-lg-4 col-md-6 shop_group-item" data-wow-delay="0.1s">
                    <div class="shop_group-wrap">
                      <figure>
                        <img src="https://renewalprod.blob.core.windows.net/renewal-prod/cms/articles/content/mainjpg_2024-02-14-07-35-10.jpg" alt="" width="100%" height="100%">
                        <a href="assets/img/portfolio/portfolio-2.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="收藏"><i class="fa-regular fa-heart"></i></a>
                        <a href="portfolio-details.html" class="link-details" title="查看詳情"><i class="bx bx-link"></i></a>
                      </figure>
            
                      <div class="shop_group-info">
                        <h4><a href="portfolio-details.html">【北海道】大耳狗喜拿×五稜郭</a></h4>
                        <div class="flex-container">
                          <p><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i>&nbsp;(4.9)</p>
                          <p><i class="fa-regular fa-heart"></i>&nbsp;1004&nbsp;&nbsp;<i class="fa-solid fa-user-group"></i>&nbsp;500</p>
                        </div>
                      </div>
                    </div>
                  </div>

              </div>
    
              </div>
              <!-- End Schdule Day  3-->
    
            </div>
    
          
    
        </section><!-- End Schedule Section -->
          
    
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