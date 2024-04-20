<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>WISHOP 首頁</title>
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

  <!-- Icon -->
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
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html"></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.html" class="active">首頁</a></li>
          <li class="dropdown"><a href="portfolio.html"><span>購物</span> <i class="bi bi-chevron-down"></i></a>
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


          <!-- <li><a href="pricing.html">Pricing</a></li>
          <li><a href="blog.html">Blog</a></li> -->
          <!-- <li><a href="contact.html">Contact</a></li> -->
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
                  <li><a href="logout.php" style="font-weight: 600;">登出&nbsp;<i class="fa-solid fa-right-from-bracket"></i></a></li>
                </ul>
              </li>
              ';
            }else{
              echo "<a href='login.php' class='getstarted' style='color: white;'>登入</a>";
            }
          ?>
          
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active"
          style="background-image: url(https://images.unsplash.com/photo-1516633886686-2a2ffb459273?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">WISHOP</h2>
              <p class="animate__animated animate__fadeInUp">WISH AND BUY U WANT<br>許願代購</p>
              <a href="portfolio.html" class="btn-get-started animate__animated animate__fadeInUp scrollto"><b>開始購物</b></a>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item"
          style="background-image: url(https://images.unsplash.com/photo-1519751138087-5bf79df62d5b?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">限時團購</h2>
              <p class="animate__animated animate__fadeInUp">本周熱門的團購都在這裡，快來看看哦！</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto"><b>前往查看</b></a>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item"
          style="background-image: url(https://images.unsplash.com/photo-1516633886686-2a2ffb459273?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">許願池</h2>
              <p class="animate__animated animate__fadeInUp">想要什麼卻買不到嗎？歡迎許願讓賣家們看到吧！</p>
              <a href="/integrate/wish/wish.html" class="btn-get-started animate__animated animate__fadeInUp scrollto"><b>去許願</b></a>
            </div>
          </div>
        </div>



      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->




  <main id="main">

    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="seven">
          <h1>熱門團購</h1>
        </div>


        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">


          <div class="swiper-wrapper">


            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="https://img.shoplineapp.com/media/image_clips/61d3a8ac8c24c20023437d3e/original.png?1641261227"
                    class="testimonial-img" alt="">
                  <div class="demo">
                    <h3><a href="../lisa/InnerPage.html">三麗鷗X美少女戰士</a></h3>
                  </div>
                  <h4>三麗鷗快樂購</h4>
                  <br>
                  <span>本團代購三麗鷗X美少女戰士聯名商品

                    購買前請先注意賣場規則</span>
                  <br>
                  <br>
                  <div>
                    <a type="button" href="#" class="btn btn-light-tag">#三麗鷗</a>
                    <a type="button" href="#" class="btn btn-light-tag">#美少女戰士</a>
                    <a type="button" href="#" class="btn btn-light-tag">#動漫周邊</a>
                  </div>
                  <br>
                  <br>
                  <div class="meta d-flex align-items-center">
                    <div class="d-flex align-items-center">
                      <i class="bi bi-calendar4-week"></i> <span class="ps-2">截單日期：4/21</span>
                    </div>
                    <span class="px-3 text-black-50">/</span>
                    <div class="d-flex align-items-center">
                      <i class="bi bi-clock"></i> <span class="ps-2">下午6:00</span>
                    </div>
                  </div>

                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="https://images.plurk.com/iKOdz5DMLNQ6Hf4fHPO58.png" class="testimonial-img" alt="">
                  <div class="demo">
                    <h3><a href="#">【ATEEZ】2024巡迴演唱會TOWARDS THE LIGHT : WILL TO POWER周邊商品</a></h3>
                  </div>
                  <h4>YaoYao</h4>
                  <br>
                  <span>這是一段說明文字，下面是這個團購的tag和截單時間</span>
                  <br>
                  <br>
                  <div>
                    <a type="button" href="#" class="btn btn-light-tag">#ATEEZ</a>
                    <a type="button" href="#" class="btn btn-light-tag">#에이티즈</a>
                    <a type="button" href="#" class="btn btn-light-tag">#韓國代購</a>
                  </div>
                  <br>
                  <div class="meta d-flex align-items-center">
                    <div class="d-flex align-items-center">
                      <i class="bi bi-calendar4-week"></i> <span class="ps-2">截單日期：官方售完為止</span>
                    </div>
                    <span class="px-3 text-black-50">/</span>
                    <div class="d-flex align-items-center">
                      <i class="bi bi-clock"></i> <span class="ps-2">X</span>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->


            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="https://images.plurk.com/5FxQuZXGJ9NLuW4R2oCTei.jpg" class="testimonial-img" alt="">
                  <div class="demo">
                    <h3><a href="#">迪士尼 MICKEY'S BAKERY</a></h3>
                  </div>
                  <h4>HU</h4>
                  <br>
                  <span>這是一段說明文字，下面是這個團購的tag和截單時間</span>
                  <br>
                  <br>
                  <div>
                    <a type="button" href="#" class="btn btn-light-tag">#迪士尼</a>
                    <a type="button" href="#" class="btn btn-light-tag">#日本代購</a>
                  </div>
                  <br>

                  <div class="meta d-flex align-items-center">
                    <div class="d-flex align-items-center">
                      <i class="bi bi-calendar4-week"></i> <span class="ps-2">截單日期：4/7</span>
                    </div>
                    <span class="px-3 text-black-50">/</span>
                    <div class="d-flex align-items-center">
                      <i class="bi bi-clock"></i> <span class="ps-2">下午6:00</span>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="https://images.plurk.com/6RagVTBWmsxozoIaD8gdIK.jpg" class="testimonial-img" alt="">
                  <div class="demo">
                    <h3><a href="#">三麗鷗新品寶寶斗篷娃衣</a></h3>
                  </div>
                  <h4>Sumi</h4>
                  <br>
                  <span>這是一段說明文字，下面是這個團購的tag和截單時間</span>
                  <br>
                  <br>
                  <div>
                    <a type="button" href="#" class="btn btn-light-tag">#娃衣</a>
                    <a type="button" href="#" class="btn btn-light-tag">#三麗鷗</a>
                    <a type="button" href="#" class="btn btn-light-tag">#日本代購</a>
                  </div>
                  <br>

                  <div class="meta d-flex align-items-center">
                    <div class="d-flex align-items-center">
                      <i class="bi bi-calendar4-week"></i> <span class="ps-2">截單日期：4/10</span>
                    </div>
                    <span class="px-3 text-black-50">/</span>
                    <div class="d-flex align-items-center">
                      <i class="bi bi-clock"></i> <span class="ps-2">下午7:00</span>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->



            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="https://images.plurk.com/1xMfqQQsyPLy3u5piTLS94.png" class="testimonial-img" alt="">
                  <div class="demo">
                    <h3><a href="#">排球×三麗鷗合作商品</a></h3>
                  </div>
                  <h4>Taro</h4>
                  <br>
                  <span>這是一段說明文字，下面是這個團購的tag和截單時間</span>
                  <br>
                  <br>
                  <div>
                    <a type="button" href="#" class="btn btn-light-tag">#排球少年</a>
                    <a type="button" href="#" class="btn btn-light-tag">#動漫周邊</a>
                    <a type="button" href="#" class="btn btn-light-tag">#日本代購</a>
                  </div>
                  <br>

                  <div class="meta d-flex align-items-center">
                    <div class="d-flex align-items-center">
                      <i class="bi bi-calendar4-week"></i> <span class="ps-2">截單日期：4/12</span>
                    </div>
                    <span class="px-3 text-black-50">/</span>
                    <div class="d-flex align-items-center">
                      <i class="bi bi-clock"></i> <span class="ps-2">下午9:00</span>
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




















    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="seven">
          <h1>推薦商品</h1>
        </div>



        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">日本</li>
              <li data-filter=".filter-card">韓國</li>
              <li data-filter=".filter-web">美國</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">

              <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external"
                title="Portfolio Details">
                <figure>
                  <img src="https://down-tw.img.susercontent.com/file/tw-11134207-7r98w-lmbzxx10l57fe5" class="img-fluid" alt="">
                </figure>
              </a>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external"
                    title="Portfolio Details">壓克力吊飾盲盒</a></h4>
                <p><i class="fa-solid fa-dollar-sign">&nbsp;300</i></p>
              </div>


            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">

              <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external"
                title="Portfolio Details">
                <figure>
                  <img src="https://down-tw.img.susercontent.com/file/tw-11134207-7r98x-ll7zea2rdiox5c" class="img-fluid" alt="">
                </figure>
              </a>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external"
                    title="Portfolio Details">玩偶吊飾</a></h4>
                <p><i class="fa-solid fa-dollar-sign">&nbsp;750</i></p>
              </div>

            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">

              <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external"
                title="Portfolio Details">
                <figure>
                  <img
                    src="https://gw.alicdn.com/imgextra/i3/55510288/O1CN017yLxEc1Dzwy2sJtCP_!!55510288.jpg_Q75.jpg_.webp"
                    class="img-fluid" alt="">
                </figure>
              </a>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external"
                    title="Portfolio Details">原子筆</a></h4>
                <p><i class="fa-solid fa-dollar-sign">&nbsp;140</i></p>
              </div>


            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <div class="portfolio-wrap">

              <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external"
                title="Portfolio Details">
                <figure>
                  <img src="https://cdn.cybassets.com/media/W1siZiIsIjExMTE3L3Byb2R1Y3RzLzQ1NzQyMTk5LzExMTE3LXByb2R1Y3QtcGhvdG8tMjAyNDA0MDItNDktNnhoNzE2XzUyYjZmZTI2M2Q4NjZlYzYxMDAxLmpwZWciXSxbInAiLCJ0aHVtYiIsIjYwMHg2MDAiXV0.jpeg?sha=892bbe2cf0939acc" class="img-fluid" alt="">
                </figure>
              </a>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external"
                    title="Portfolio Details">商品4</a></h4>
                <p><i class="fa-solid fa-dollar-sign">&nbsp;199</i></p>
              </div>

            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">

              <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external"
                title="Portfolio Details">
                <figure>
                  <img src="http://funbox.com.tw/website_folder/753581/753581-600-07.jpg" class="img-fluid" alt="">
                </figure>
              </a>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external"
                    title="Portfolio Details">商品5</a></h4>
                <p><i class="fa-solid fa-dollar-sign">&nbsp;350</i></p>
              </div>

            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">

              <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external"
                title="Portfolio Details">
                <figure>
                  <img src="https://cdn.cybassets.com/s/files/11117/ckeditor/pictures/content_d7bd690c-2901-4a40-8e45-a1925d175ecd.jpg" class="img-fluid" alt="">
                </figure>
              </a>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external"
                    title="Portfolio Details">商品6</a></h4>
                <p><i class="fa-solid fa-dollar-sign">&nbsp;299</i></p>
              </div>

            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <div class="portfolio-wrap">

              <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external"
                title="Portfolio Details">
                <figure>
                  <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                </figure>
              </a>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external"
                    title="Portfolio Details">商品7</a></h4>
                <p><i class="fa-solid fa-dollar-sign">&nbsp;79</i></p>
              </div>

            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">

              <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external"
                title="Portfolio Details">
                <figure>
                  <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                </figure>
              </a>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external"
                    title="Portfolio Details">商品8</a></h4>
                <p><i class="fa-solid fa-dollar-sign">&nbsp;200</i></p>
              </div>

            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">

              <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external"
                title="Portfolio Details">
                <figure>
                  <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                </figure>
              </a>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external"
                    title="Portfolio Details">商品9</a></h4>
                <p><i class="fa-solid fa-dollar-sign">&nbsp;450</i></p>
              </div>

            </div>
          </div>

        </div>

        <div style="text-align: center;">
          <a type="button" href="portfolio.html" class="btn btn-light-more">More</a>
        </div>
        
      </div>
    </section><!-- End Portfolio Section -->


 <!-- ======= Team Section ======= -->
 <section id="team" class="team">

  <div class="container" data-aos="fade-up">

    <div class="seven">
      <h1>本周精選店家</h1>
    </div>

    <div class="row gy-4 mt-3">


      <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
        <div class="member">
          <div class="member-img">
            <img src="https://i.pinimg.com/564x/92/19/18/9219184f7722f46823d5334e0355230c.jpg" class="img-fluid" alt="">
            <div class="social">
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="member-info">
            <a href="../shop/shop.html"><h4>三麗鷗快樂購</h4></a>
            <span>三麗鷗</span>
            <p>
              如果你對可愛、療癒的三麗鷗商品著迷，但由於地理或其他原因無法直接購買，我可以幫助你實現這個夢想🩷！
              </p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
        <div class="member">
          <div class="member-img">
            <img src="https://scontent.ftpe8-1.fna.fbcdn.net/v/t39.30808-6/309375606_436814621877149_3816341275859789575_n.png?_nc_cat=109&ccb=1-7&_nc_sid=5f2048&_nc_ohc=1xcRDRmsARMAb7QeT5p&_nc_ht=scontent.ftpe8-1.fna&oh=00_AfDDFfZv0Zhl8pFrhvAK9Qwkht4mfEgwiUeyIxIO_Q3snw&oe=6615A905" class="img-fluid" alt="">
            <div class="social">
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="member-info">
            <a href="#"><h4>小莓波醬</h4></a>
            <span>韓國/日本直送</span>
            <p>商品都是闆娘親自跟第一手的廠商接洽💞！時常飛出去世界各地🌍✈️幫大家細心挑選各種可愛東東✨</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
        <div class="member">
          <div class="member-img">
            <img src="https://img.ws.mms.shopee.tw/tw-11134233-7qul0-lhz4igix1pzi1d" class="img-fluid" alt="">
            <div class="social">
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="member-info">
            <a href="#"><h4>KPOP偶像周邊代購</h4></a>
            <span>韓國偶像周邊代購</span>
            <p>안녕하세요～

              自己是愛買收集各種周邊的小粉絲🥰

              歡迎大家跟上每次的小小代購

              所有韓國商品皆可代購哦～歡迎許願唷</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
        <div class="member">
          <div class="member-img">
            <img src="https://scontent.ftpe8-4.fna.fbcdn.net/v/t39.30808-6/327166310_490496196597384_1189097818044976035_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=5f2048&_nc_ohc=523QuLRsXUMAb5VHOfm&_nc_ht=scontent.ftpe8-4.fna&oh=00_AfA4htAwnTCjdnV6bII0GCgOVdy3VePm1UkXb8BNGlSySw&oe=6615A47B" class="img-fluid" alt="">
            <div class="social">
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="member-info">
            <a href="#"><h4>FACILE SHOP</h4></a>
            <span>英美精品代購</span>
            <p>賣場商品會不定時更新因小闆娘都已客人喜好挑選商品，款式會較少品質都是挑選過後上架，快速出貨提供完整透明的商品資訊</p>
          </div>
        </div>
      </div>

      

    </div>

  </div>

</section><!-- End Team Section -->















    




  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>WISHOP</h3>
              <p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <!-- <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br> -->
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
            <h4>導覽列</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">首頁</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">購物</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">團購</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">許願池</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">#</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>新手教學</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">#</a></li>
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