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
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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
          <li class="dropdown"><a href="portfolio.html"><span>購物</span><i class="bi bi-chevron-down"></i></a>
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
          <li><a href="../wish/wish.html" class="active">許願池</a></li>

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

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="edit_like_shop_button2">
      <button type="button" class="btn insert_button"><i class="fa-solid fa-wand-sparkles"></i>&nbsp;當月剩餘許願次數【2】</button>&nbsp
      <button type="button" class="btn insert_button"><i class="fa-solid fa-wand-sparkles"></i>&nbsp;平台總許願次數【17】</button>
    </div>
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(https://i.pinimg.com/564x/27/b0/41/27b04138dc48c4d5d433f2c5839203c8.jpg)">
          <div class="carousel-container">
            <div class="container">
              <div class="edit_like_shop_button">
              <h2 class="animate__animated animate__fadeInDown">許下您的願望，讓WISHOP替您實現吧!</h2>
              <p class="animate__animated animate__fadeInUp">~每一个心聲都被聽見，每一次的許願都有機會實現~</p>
              <button class="btn-get-started animate__animated animate__fadeInUp scrollto" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fa-solid fa-wand-sparkles"></i>&nbsp;Make A Wish&nbsp;<i class="fa-solid fa-wand-sparkles"></i></button>
            </div>
          </div>
          
        </div>
      
    </div>
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">我想許願……</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3 row">
              <label for="inputName" class="col-sm-2 col-form-label">商品名稱*</label>
              <div class="col-sm-10">
                <input type="name" class="form-control" id="inputName" required>
              </div>
            </div>
            <div class="mb-3 row">
              <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">商品敘述*</label>
              <div class="col-sm-10">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
              </div>
            </div>
            <div class="mb-3 row">
              <label for="inputName" class="col-sm-2 col-form-label">商品標籤(最多可填5個)</label>
              <div class="col-sm-10">
                <input type="name" class="form-control" id="inputName" placeholder="標籤1"><br>
                <input type="name" class="form-control" id="inputName" placeholder="標籤2"><br>
                <input type="name" class="form-control" id="inputName" placeholder="標籤3"><br>
                <input type="name" class="form-control" id="inputName" placeholder="標籤4"><br>
                <input type="name" class="form-control" id="inputName" placeholder="標籤5">
              </div>
            </div>
            <div class="mb-3 row">
              <label for="inputName" class="col-sm-2 col-form-label">許願截止日期*</label>
              <div class="col-sm-10">
                <input type="datetime-local" class="form-control" id="inputName" required>
              </div>
            </div>
            <div class="mb-3 row">
              <label for="inputName" class="col-sm-2 col-form-label">參考網址</label>
              <div class="col-sm-10">
                <input type="name" class="form-control" id="inputName">
              </div>
            </div>
            <div class="mb-3 row">
              <label for="formFileMultiple" class="col-sm-2 col-form-label">商品圖片(可選多張)*</label>
              <div class="col-sm-10">
              <input class="form-control" type="file" id="formFileMultiple" multiple style="width:635px;margin:auto" required>
              </div>
            </div>
          <div class="modal-footer">
            <button type="button" class="btn">確定許願</button>
          </div>
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

        <ul  class="nav justify-content-center">

          <li class="nav-item col-6 col-md-4 col-lg-2">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1" href="#tab-1" onclick="scrollToTab('tab-1')">
              <i class="bi bi-binoculars color-cyan"></i>
              <h4>許願區</h4>
            </a>
          </li><!-- End Tab 1 Nav -->

          <li class="nav-item col-6 col-md-4 col-lg-2">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2" href="#tab-2" onclick="scrollToTab('tab-2')">
              <i class="bi bi-box-seam color-indigo"></i>
              <h4>即將結束區</h4>
            </a>
          </li><!-- End Tab 2 Nav -->

          <li class="nav-item col-6 col-md-4 col-lg-2">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3" href="#tab-3" onclick="scrollToTab('tab-3')">
              <i class="bi bi-brightness-high color-teal"></i>
              <h4>歷史許願區</h4>
            </a>
          </li><!-- End Tab 3 Nav -->

          <li class="nav-item col-6 col-md-4 col-lg-2">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4" href="#tab-4" onclick="scrollToTab('tab-4')">
              <i class="bi bi-command color-red"></i>
              <h4>許願池介紹</h4>
            </a>
          </li><!-- End Tab 4 Nav -->

          <li class="nav-item col-6 col-md-4 col-lg-2">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-5" href="#tab-5" onclick="scrollToTab('tab-5')">
              <i class="bi bi-easel color-blue"></i>
              <h4>許願排行榜</h4>
            </a>
          </li><!-- End Tab 5 Nav -->

        </ul>

        <div class="tab-content">

          <div class="tab-pane active show" id="tab-1">
            <div class="row gy-4">    
                  
                  <!-- Courses List Section -->
                  <section id="courses-list" class="section courses-list">
                    <div class="container">
                      <div class="row">
                        <center><h3 style='color:#b9b0c8';><i class="fa-solid fa-feather-pointed"></i>&nbsp;許願區</h3></center>
                        
                        <section id="blog2" class="blog2">                     
                            <center><div class="col-lg-12">
                              <div class="sidebar">                 
                                <h3 class="sidebar-title">Search</h3>
                                <div class="sidebar-item search-form">
                                  <form action="">
                                    <input type="text" class="form-control">
                                    <button type="submit"><i class="bi bi-search"></i></button>
                                  </form>
                                </div><!-- End sidebar search formn-->               
                              </div><!-- End sidebar -->              
                            </div><!-- End blog sidebar --></center>                     
                        </section>  

                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                          <div class="course-item">
                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                              <div class="carousel-inner fixed-image">
                                <div class="carousel-item active">
                                  <img src="https://i.pinimg.com/736x/a6/b3/15/a6b31560e581085b07d17716ecf8f681.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                  <img src="https://i.pinimg.com/736x/c9/7f/2b/c97f2b3a9944c500f4aac34e74586646.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                  <img src="https://i.pinimg.com/564x/7c/a8/b1/7ca8b121f17faa6714b84235b1aa5d85.jpg" class="d-block w-100" alt="...">
                                </div>
                              </div>
                              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                              </button>
                              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                              </button>
                            </div>
                            
                            <div class="course-content">
                              <div class="justify-content-between align-items-center mb-3">
                                <span class="category">韓國</span>
                                <span class="category">明星</span>
                                <span class="category">ATEEZ</span>
                              </div>

                              <h3><a href="wish-details.html">ATEEZ 星和玩偶DDEONGbyeoli</a></h3>
                              <p class="description scrollable-row">想收圖上的的大娃，有拆封過也沒關係，可先匯款</p>
                              <div class="trainer d-flex justify-content-between align-items-center">
                                <span class="price"><i class="fa-regular fa-clock"></i>&nbsp;許願日期: 2024-04-02</span>
                              </div>
                              <div class="trainer d-flex justify-content-between align-items-center">
                                <div class="trainer-profile d-flex align-items-center">
                                  <img src="https://i.pinimg.com/564x/34/16/1d/34161d9ecd3d64f087e4d5cd1a319dd5.jpg" class="img-fluid" alt="">
                                  <a href="" class="trainer-link">朴星和</a>
                                </div>
                                <div class="trainer-rank d-flex align-items-center">
                                  <i class="bi bi-heart heart-icon"></i>&nbsp;10&nbsp;<button class="button">收藏許願</button>
                                </div>
                              </div>
                              
                            </div>
                          </div>
                        </div> <!-- End Course Item-->

                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                          <div class="course-item">
                            <div id="carouselExampleIndicators2" class="carousel slide" data-bs-ride="carousel">
                              <div class="carousel-inner fixed-image">
                                <div class="carousel-item active">
                                  <img src="https://gw.alicdn.com/imgextra/O1CN01Pg0FhG1It99KQYtET_!!6000000000950-2-yinhe.png_.webp" class="d-block w-100" alt="...">
                                </div>
                              </div>
                              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                              </button>
                              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                              </button>
                            </div>
                            
                            <div class="course-content">
                              <div class="justify-content-between align-items-center mb-3">
                                <span class="category">日本</span>
                                <span class="category">排球少年</span>
                                <span class="category">動漫</span>
                              </div>

                              <h3><a href="wish-details.html">排球少年音駒高校白色帽T</a></h3>
                              <p class="description">想問有沒有賣音駒的這件帽T，全新，可先付款</p>
                              <div class="trainer d-flex justify-content-between align-items-center">
                                <span class="price"><i class="fa-regular fa-clock"></i>&nbsp;許願日期: 2024-04-05</span>
                              </div>
                              <div class="trainer d-flex justify-content-between align-items-center">
                                <div class="trainer-profile d-flex align-items-center">
                                  <img src="https://i.pinimg.com/736x/c4/22/64/c42264dccbc7371567ebe9db019082cb.jpg" class="img-fluid" alt="">
                                  <a href="" class="trainer-link">孤爪研磨</a>
                                </div>
                                <div class="trainer-rank d-flex align-items-center">
                                  <i class="bi bi-heart heart-icon"></i>&nbsp;5&nbsp;<button class="button">收藏許願</button>
                                </div>
                              </div>
                              
                            </div>
                          </div>
                        </div> <!-- End Course Item-->

                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                          <div class="course-item">
                            <div id="carouselExampleIndicators3" class="carousel slide" data-bs-ride="carousel">
                              <div class="carousel-inner fixed-image">
                                <div class="carousel-item active">
                                  <img src="https://cbu01.alicdn.com/img/ibank/O1CN01uHUEKt1GEGSjvD7SA_!!2212527300590-0-cib.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                  <img src="https://cbu01.alicdn.com/img/ibank/O1CN013kdvbX1GEGSfMkUed_!!2212527300590-0-cib.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                  <img src="https://cbu01.alicdn.com/img/ibank/O1CN01RN5BLO1GEGRierHCK_!!2212527300590-0-cib.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                  <img src="https://cbu01.alicdn.com/img/ibank/O1CN01CNdzSq1GEGRuc2KdR_!!2212527300590-0-cib.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                  <img src="https://cbu01.alicdn.com/img/ibank/O1CN01qRzNA51GEGRnK51JO_!!2212527300590-0-cib.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                  <img src="https://cbu01.alicdn.com/img/ibank/O1CN01niuKnx1GEGRiefObS_!!2212527300590-0-cib.jpg" class="d-block w-100" alt="...">
                                </div>
                              </div>
                              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                              </button>
                              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                              </button>
                            </div>
                            
                            <div class="course-content">
                              <div class="justify-content-between align-items-center mb-3">
                                <span class="category">日本</span>
                                <span class="category">火影忍者</span>
                                <span class="category">公仔</span>
                              </div>

                              <h3><a href="wish-details.html">火影忍者Q版坐姿公仔模型</a></h3>
                              <p class="description">想要圖上的鳴人、卡卡西、佐助和鼬的Q版坐姿公仔，希望四隻都有</p>
                              <div class="trainer d-flex justify-content-between align-items-center">
                                <span class="price"><i class="fa-regular fa-clock"></i>&nbsp;許願日期: 2024-03-31</span>
                              </div>
                              <div class="trainer d-flex justify-content-between align-items-center">
                                <div class="trainer-profile d-flex align-items-center">
                                  <img src="https://i.pinimg.com/564x/b8/5e/e1/b85ee1c6b59c9990b2d2d448df40aef4.jpg" class="img-fluid" alt="">
                                  <a href="" class="trainer-link">鳴人</a>
                                </div>
                                <div class="trainer-rank d-flex align-items-center">
                                  <i class="bi bi-heart heart-icon"></i>&nbsp;46&nbsp;<button class="button">收藏許願</button>
                                </div>
                              </div>
                              
                            </div>
                          </div>
                        </div> <!-- End Course Item--><p></p><p></p>

                      </div>
                    </div>
                  </section><!-- /Courses List Section -->

                  

            </div>
          </div><!-- End Tab Content 1 -->

          <div class="tab-pane" id="tab-2">
            <div class="row gy-4">

                <!-- Courses List Section -->
                <section id="courses-list" class="section courses-list">
                  <div class="container">
                    <div class="row">
                      <center><h3 style='color:#b9b0c8';><i class="fa-solid fa-paw"></i>&nbsp;即將結束區</h3>
                      <p class="p">願望們快要結束了，趕快去看看他們吧!</p></center>
                      
                      <section id="blog2" class="blog2">                     
                          <center><div class="col-lg-12">
                            <div class="sidebar">                 
                              <h3 class="sidebar-title">Search</h3>
                              <div class="sidebar-item search-form">
                                <form action="">
                                  <input type="text" class="form-control">
                                  <button type="submit"><i class="bi bi-search"></i></button>
                                </form>
                              </div><!-- End sidebar search formn-->               
                            </div><!-- End sidebar -->              
                          </div><!-- End blog sidebar --></center>                     
                      </section>  

                      <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="course-item">
                          <div id="carouselExampleIndicators9" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner fixed-image">
                              <div class="carousel-item active">
                                <img src="https://gcs.rimg.com.tw/g0/658/38c/agate898/e/3b/1f/22333461233439_323.jpg" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="https://gcs.rimg.com.tw/g0/658/38c/agate898/e/3b/1f/22333461233439_650.jpg" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="https://gcs.rimg.com.tw/g0/658/38c/agate898/e/3b/1f/22333461233439_152.jpg" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="https://gcs.rimg.com.tw/g0/658/38c/agate898/e/3b/1f/22333461233439_887.jpg" class="d-block w-100" alt="...">
                              </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators9" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators9" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                          </div>
                          
                          <div class="course-content">
                            <div class="justify-content-between align-items-center mb-3">
                              <span class="category">日本</span>
                              <span class="category">偶像夢幻祭</span>
                              <span class="category">瀨名泉</span>
                            </div>

                            <h3><a href="wish-details.html">偶像夢幻祭瀨名泉公仔棉花娃娃20CM</a></h3>
                            <p class="description">想收偶像夢幻祭同人周邊瀨名泉公仔棉花娃娃20CM動漫換裝玩偶禮物周邊，希望貨到付款</p>
                            <div class="trainer d-flex justify-content-between align-items-center">
                              <span class="price"><i class="fa-regular fa-clock"></i>&nbsp;許願日期: 2024-03-09</span>
                            </div>
                            <div class="trainer d-flex justify-content-between align-items-center">
                              <div class="trainer-profile d-flex align-items-center">
                                <img src="https://i.pinimg.com/564x/14/2b/c4/142bc484f63a2bf7024e95a10a387ea1.jpg" class="img-fluid" alt="">
                                <a href="" class="trainer-link">月永雷歐</a>
                              </div>
                              <div class="trainer-rank d-flex align-items-center">
                                <i class="bi bi-heart heart-icon"></i>&nbsp;8&nbsp;<button class="button">收藏許願</button>
                              </div>
                            </div>
                            
                          </div>
                        </div>
                      </div> <!-- End Course Item-->

                    </div>
                  </div>
                </section><!-- /Courses List Section -->

               
            </div>
          </div><!-- End Tab Content 2 -->

          <div class="tab-pane" id="tab-3">
            <div class="row gy-4">
              
              <!-- Courses List Section -->
              <section id="courses-list" class="section courses-list">
                <div class="container">
                  <div class="row">
                    <center><h3 style='color:#b9b0c8';><i class="fa-solid fa-paw"></i>&nbsp;歷史許願區</h3></center>                   
                    
                    <section id="blog2" class="blog2">                     
                        <center><div class="col-lg-12">
                          <div class="sidebar">                 
                            <h3 class="sidebar-title">Search</h3>
                            <div class="sidebar-item search-form">
                              <form action="">
                                <input type="text" class="form-control">
                                <select class="form-select" aria-label="Default select example">
                                  <option selected>選擇時間</option>
                                  <option value="1個月內">1個月內</option>
                                  <option value="3個月內">3個月內</option>
                                  <option value="半年內">半年內</option>
                                  <option value="1年內">1年內</option>
                                </select> 
                                <button type="submit"><i class="bi bi-search"></i></button>
                              </form>
                            </div><!-- End sidebar search formn--> 
                                        
                          </div><!-- End sidebar -->              
                        </div><!-- End blog sidebar --></center>                     
                    </section> 
                    
                    
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                      <div class="course-item">
                        <div id="carouselExampleIndicators12" class="carousel slide" data-bs-ride="carousel">
                          <div class="carousel-inner fixed-image">
                            <div class="carousel-item active">
                              <img src="https://down-tw.img.susercontent.com/file/tw-11134207-7quky-lesl4fpidnvz6e" class="d-block w-100" alt="...">
                            </div>
                          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators12" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                          </button>
                          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators12" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                          </button>
                        </div>
                        
                        <div class="course-content">
                          <div class="justify-content-between align-items-center mb-3">
                            <span class="category">韓國</span>
                            <span class="category">三麗鷗</span>
                          </div>

                          <h3><a href="wish-details.html">韓國限定三麗鷗小卡立牌</a></h3>
                          <p class="description">我想要韓國限定三麗鷗小卡立牌，有人能幫忙代購嗎?9個款式我都蠻想要的</p>
                          <div class="trainer d-flex justify-content-between align-items-center">
                            <span class="price"><i class="fa-regular fa-clock"></i>&nbsp;許願日期: 2023-10-15</span>
                          </div>
                          <div class="trainer d-flex justify-content-between align-items-center">
                            <div class="trainer-profile d-flex align-items-center">
                              <img src="https://i.pinimg.com/564x/9f/b9/0f/9fb90fdd71d07728a5a3fab12e92aefb.jpg" class="img-fluid" alt="">
                              <a href="" class="trainer-link">堯Yao</a>
                            </div>
                            <div class="trainer-rank d-flex align-items-center">
                              <i class="bi bi-heart heart-icon"></i>&nbsp;3&nbsp;<button class="btn button_fail" disabled>許願失敗</button>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                    </div> <!-- End Course Item-->
                  
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

                <div class="col-lg-12 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                  <div class="accordion-list">
                    <ul>
                      <li>
                        <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1">許願池介紹<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                          <p>
                            ◆許願池總共分5區，"許願區"、"即將結束區"、歷史許願區、"許願池介紹"、"許願排行榜"。<br>
                            ◆"許願區"會有<sapn style="color:#c199a9;">目前正在被許願</sapn>的商品，點擊商品名稱即可進入商品詳情頁。<br>
                            ◆"商品詳情頁"包含許願者、許願日期、商品圖片、許願敘述、我有興趣人數、商品標籤、賣家出價。<br>
                            ◆"即將結束區"會有<sapn style="color:#c199a9;">即將在1個禮拜後到期</sapn>的許願商品。<br>
                            ◆"歷史許願區"會有<sapn style="color:#c199a9;">1年內</sapn>的到期許願商品，包含許願成功和許願失敗的商品。<br>
                            ◆"許願成功"表示此願望<sapn style="color:#c199a9;">有賣家出價並成團</sapn>，"許願失敗"表示此願望<sapn style="color:#c199a9;">無人出價或有賣家出價但沒有成團</sapn>。<br>
                            ◆"許願排行榜"會顯示當月熱門許願排名和當月賣家許願完成數排名，"當月熱門許願排名"會根據<sapn style="color:#c199a9;">我有興趣的人數</sapn>來排名。<br>
                            ◆許願池右上角會顯示"買家當月剩餘許願次數"和"目前平台的總許願次數"。<br>
                          </p>                       
                        </div>
                      </li>

                      <li>
                        <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed">許願規則<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                          <p>
                            ◆每位使用者<sapn style="color:#c199a9;">1個月內都有3次的許願機會</sapn>，3個許願用完就必須等到下個月才能再次許願。<br>
                            ◆如果對某個許願商品有興趣可以點擊<sapn style="color:#c199a9;">"我有興趣"按鈕</sapn>。<br>
                            ◆當有賣家願意出價時，買家可以根據賣家的出價價格，點擊<sapn style="color:#c199a9;">"我要跟團"按鈕</sapn>，目前意願人數就會增加，<sapn style="color:#c199a9;">每個買家只能選擇1位出價賣家</sapn>。<br>
                            ◆已成團表示此賣家確定開團，可以進行下單的動作。<br>
                            ◆待成團表示買家還無法進行下單，需等待賣家將狀態改為已成團。<br>
                            ◆<sapn style="color:#c199a9;">點擊"我要跟團"不代表下單</sapn>，需點擊"賣場連結"才能進行下單。<br>
                          </p>
                        </div>
                      </li>

                      <li>
                        <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed">如何許願<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                          <p>
                            ◆使用者點擊<sapn style="color:#c199a9;">"Make A Wish"按鈕</sapn>，即可進行許願。<br>
                            ◆每個願望的<sapn style="color:#c199a9;">期限為3個月</sapn>。<br>
                            ◆使用者填寫完許願資訊後，按下確定許願，即<sapn style="color:#c199a9;">無法更改許願資訊</sapn>。<br>
                            ◆若使用者想取消此願望，可點擊<sapn style="color:#c199a9;">"取消許願"按鈕</sapn>。<br>
                            ◆若此願望<sapn style="color:#c199a9;">已有賣家出價</sapn>，使用者就<sapn style="color:#c199a9;">無法點擊</sapn>"取消許願"按鈕。<br>
                            ◆若要<sapn style="color:#c199a9;">更改許願資訊</sapn>，請取消該次許願，可按"刪除願望"按鈕並再次進行許願。<br>
                            

                          </p>
                        </div>
                      </li>

                      <li>
                        <a data-bs-toggle="collapse" data-bs-target="#accordion-list-4" class="collapsed">如何出價<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
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
                  <center><h3 style='color:#b9b0c8';><i class="fa-solid fa-award"></i>&nbsp;當月熱門許願排名</h3></center>
                  <ul class="carousel-indicators" id="hero-carousel-indicators"></ul>
          
                  <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">
          
                      <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <img src="./assets/img/1st-prize.png" class="testimonial-img" alt="">
                                <h6>ATEEZ 星和玩偶DDEONGbyeoli</h6>
                                <h4>2024-04-02</h4>
                                <p class="scrollable-row">
                                    <strong><i class="bi bi-person"></i>&nbsp;許願者</strong>： <a href="wish-details.html"><img src="https://i.pinimg.com/564x/34/16/1d/34161d9ecd3d64f087e4d5cd1a319dd5.jpg" style="width:20px;height:20px; border-radius: 10px;" alt="">&nbsp;杏花麻麻</a><br>
                                    <strong><i class="bi bi-heart heart-icon"></i>&nbsp;我有興趣人數</strong>： &nbsp;65&nbsp;<button class="button">收藏許願</button><br>
                                    <strong><i class="bi bi-chat-dots"></i>&nbsp;敘述</strong>： 想收圖上的的大娃，有拆封過也沒關係，可先匯款
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->
                    
          
                      <div class="swiper-slide">
                        <div class="testimonial-wrap">
                          <div class="testimonial-item">
                            <img src="./assets/img/2nd-place.png" class="testimonial-img" alt="">
                            <h6>ATEEZ 星和玩偶DDEONGbyeoli</h6>
                            <h4>2024-04-02</h4>
                            <p class="scrollable-row">
                              <strong><i class="bi bi-person"></i>&nbsp;許願者</strong>： <a href="wish-details.html"><img src="https://i.pinimg.com/564x/34/16/1d/34161d9ecd3d64f087e4d5cd1a319dd5.jpg" style="width:20px;height:20px; border-radius: 10px;" alt="">&nbsp;杏花麻麻</a><br>
                              <strong><i class="bi bi-heart heart-icon"></i>&nbsp;我有興趣人數</strong>： &nbsp;65&nbsp;<button class="button">收藏許願</button><br>
                                    <strong><i class="bi bi-chat-dots"></i>&nbsp;敘述</strong>： 想收圖上的的大娃，有拆封過也沒關係，可先匯款
                            </p>
                          </div>
                        </div>
                      </div><!-- End testimonial item -->
          
                      <div class="swiper-slide">
                        <div class="testimonial-wrap">
                          <div class="testimonial-item">
                            <img src="./assets/img/3rd-place.png" class="testimonial-img" alt="">
                            <h6>ATEEZ 星和玩偶DDEONGbyeoli</h6>
                            <h4>2024-04-02</h4>
                            <p class="scrollable-row">
                              <strong><i class="bi bi-person"></i>&nbsp;許願者</strong>： <a href="wish-details.html"><img src="https://i.pinimg.com/564x/34/16/1d/34161d9ecd3d64f087e4d5cd1a319dd5.jpg" style="width:20px;height:20px; border-radius: 10px;" alt="">&nbsp;杏花麻麻</a><br>
                              <strong><i class="bi bi-heart heart-icon"></i>&nbsp;我有興趣人數</strong>： &nbsp;65&nbsp;<button class="button">收藏許願</button><br>
                              <strong><i class="bi bi-chat-dots"></i>&nbsp;敘述</strong>： 想收圖上的的大娃，有拆封過也沒關係，可先匯款
                            </p>
                          </div>
                        </div>
                      </div><!-- End testimonial item -->
          
                      <div class="swiper-slide">
                        <div class="testimonial-wrap">
                          <div class="testimonial-item">
                            <img src="./assets/img/4th-prize.png" class="testimonial-img" alt="">
                            <h6>ATEEZ 星和玩偶DDEONGbyeoli</h6>
                            <h4>2024-04-02</h4>
                            <p class="scrollable-row">
                              <strong><i class="bi bi-person"></i>&nbsp;許願者</strong>： <a href="wish-details.html"><img src="https://i.pinimg.com/564x/34/16/1d/34161d9ecd3d64f087e4d5cd1a319dd5.jpg" style="width:20px;height:20px; border-radius: 10px;" alt="">&nbsp;杏花麻麻</a><br>
                              <strong><i class="bi bi-heart heart-icon"></i>&nbsp;我有興趣人數</strong>： &nbsp;65&nbsp;<button class="button">收藏許願</button><br>
                              <strong><i class="bi bi-chat-dots"></i>&nbsp;敘述</strong>： 想收圖上的的大娃，有拆封過也沒關係，可先匯款
                            </p>
                          </div>
                        </div>
                      </div><!-- End testimonial item -->
          
                      <div class="swiper-slide">
                        <div class="testimonial-wrap">
                          <div class="testimonial-item">
                            <img src="./assets/img/5th-prize.png" class="testimonial-img" alt="">
                            <h6>ATEEZ 星和玩偶DDEONGbyeoli</h6>
                            <h4>2024-04-02</h4>
                            <p class="scrollable-row">
                              <strong><i class="bi bi-person"></i>&nbsp;許願者</strong>： <a href="wish-details.html"><img src="https://i.pinimg.com/564x/34/16/1d/34161d9ecd3d64f087e4d5cd1a319dd5.jpg" style="width:20px;height:20px; border-radius: 10px;" alt="">&nbsp;杏花麻麻</a><br>
                              <strong><i class="bi bi-heart heart-icon"></i>&nbsp;我有興趣人數</strong>： &nbsp;65&nbsp;<button class="button">收藏許願</button><br>
                              <strong><i class="bi bi-chat-dots"></i>&nbsp;敘述</strong>： 想收圖上的的大娃，有拆封過也沒關係，可先匯款
                            </p>
                          </div>
                        </div>
                      </div><!-- End testimonial item -->
          
                    </div>
                    <div class="swiper-pagination"></div>
                  </div><br><br>


                  <center><h3 style='color:#b9b0c8';><i class="fa-solid fa-award"></i>&nbsp;當月賣家許願完成數排名</h3></center>
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
                      </div><!-- End testimonial item -->
          
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
                      </div><!-- End testimonial item -->
          
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
                      </div><!-- End testimonial item -->
          
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
                      </div><!-- End testimonial item -->
          
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
                      </div><!-- End testimonial item -->
          
                    </div>
                    <div class="swiper-pagination"></div>
                  </div>
          
                </div>
              </section><!-- End Testimonials Section -->
              
                  
              
              
              
            </div>
          </div><!-- End Tab Content 5 -->

          
        
        </div>
      </div>
    </section><!-- End Features Section -->

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