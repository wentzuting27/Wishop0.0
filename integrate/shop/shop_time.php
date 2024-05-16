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
          <li><a href="../index/portfolio.php">購物</a></li>
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
  $shop_id=$_GET["shop_id"];//在哪一個shop要用接值得方式,先假設1,之後再改
  date_default_timezone_set('Asia/Taipei');
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
  <div class="social-links">';
    $sql_social="select *
    from social
    where shop_id=$shop_id";
    $result_social=mysqli_query($link,$sql_social);
    while($row_social=mysqli_fetch_assoc($result_social))
    {
      if($row_social["social_type"]==1){
        $social_type='<i class="bx bxl-twitter"></i>';
      }elseif($row_social["social_type"]==2){
        $social_type='<i class="bx bxl-facebook"></i>';
      }elseif($row_social["social_type"]==3){
        $social_type='<i class="bx bxl-instagram"></i>';
      }elseif($row_social["social_type"]==4){
        $social_type='<i class="fa-brands fa-line"></i>';
      }
      echo '<a href="',$row_social["social_link"],'" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="',$row_social["social_name"],'" data-bs-arrow-color="#B0A5C6">',$social_type,'</a>';
    
    }
    if($shop_id==$_SESSION["user_shop_id"]){
      echo '<a href="#" data-bs-toggle="modal" data-bs-target="#update_social_Modal"><i class="fa-solid fa-pen"></i></a>';
    }
    echo ' 
  </div>

  <div class="edit_like_shop_button">';
  $sql_likeshop="select *
  from like_shop
  where shop_id='$shop_id' and account='{$_SESSION["account"]}'";
  $result_likeshop=mysqli_query($link,$sql_likeshop);
  if(isset($_SESSION["account"])){
    if(mysqli_num_rows($result_likeshop)==0){
      echo '<a href="like_in_de.php?shop_id=',$shop_id,'&page=shop_time&method=in&like=shop"><button type="button" class="btn insert_button"><i class="fa-regular fa-heart"></i>&nbsp;收藏賣場</button></a>';
    }else{
      echo '<a href="like_in_de.php?shop_id=',$shop_id,'&page=shop_time&method=de&like=shop"><button type="button" class="btn delike_button"><i class="fa-solid fa-heart"></i>&nbsp;取消收藏</button></a>';
    }
  }
  echo '
    <!-- <button type="button" class="btn insert_button" data-bs-toggle="modal" data-bs-target="#insert_group_Modal"><i class="fa-solid fa-pen"></i>&nbsp;編輯賣場</button> -->
    <!-- <button type="button" class="btn insert_button"><i class="fa-regular fa-heart"></i>&nbsp;關注賣場</button> -->
    <!-- <button type="button" class="btn insert_button"><i class="fa-solid fa-heart"></i>&nbsp;已關注</button>-->
    <!-- <button type="button" class="btn insert_button"><i class="fa-regular fa-comments"></i>&nbsp;聯絡賣家</button>-->
  </div>
  <!-- End shop_bg Section -->';
  }
  ?>
  <!-- ======= Header ======= -->

  <header id="header2" class="d-flex flex-column justify-content-center">

    <nav id="navbar2" class="navbar2 nav-menu2">
      <ul>
        <li><a href="./shop.php?shop_id=<?php echo $shop_id;?>" class="nav-link scrollto"><i class="bi bi-shop"></i><span>代購商品</span></a></li>
        <li><a href="./shop_time.php?shop_id=<?php echo $shop_id;?>" class="nav-link scrollto  active"><i class="bi bi-clock-history"></i> <span>限定開團</span></a></li>
        <li><a href="./shop_wish.php?shop_id=<?php echo $shop_id;?>" class="nav-link scrollto"><i class="fa-solid fa-wand-sparkles"></i><span>許願池</span></a></li>
        <li><a href="./shop_rule.php?shop_id=<?php echo $shop_id;?>" class="nav-link scrollto"><i class="fa-solid fa-file-circle-question"></i><span>賣場規則</span></a></li>
        <li><a href="./shop_evaluate.php?shop_id=<?php echo $shop_id;?>" class="nav-link scrollto"><i class="fa-regular fa-comment-dots"></i> <span>賣場評價</span></a></li>
        <!-- <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li> -->
      </ul>
    </nav><!-- .nav-menu -->

  </header><!-- End Header -->

  <div class="min_nav">
    <button id="triggerBtn"><i class="bi bi-clock-history"></i></button>
    <div id="slideContainer">
      <a href="./shop.php?shop_id=<?php echo $shop_id;?>" class="slideItem"><i class="bi bi-shop"></i></a>
      <a href="./shop_time.php?shop_id=<?php echo $shop_id;?>" class="slideItem"><i class="bi bi-clock-history"></i></a>
      <a href="./shop_wish.php?shop_id=<?php echo $shop_id;?>" class="slideItem"><i class="fa-solid fa-wand-sparkles"></i></a>
      <a href="./shop_rule.php?shop_id=<?php echo $shop_id;?>" class="slideItem"><i class="fa-solid fa-file-circle-question"></i></a>
      <a href="./shop_evaluate.php?shop_id=<?php echo $shop_id;?>" class="slideItem"><i class="fa-regular fa-comment-dots"></i></a>
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
                    <a class="nav-link active" href="#social_in" role="tab" data-bs-toggle="tab"><i class="fa-solid fa-plus"></i>&nbsp;新增</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#social_up" role="tab" data-bs-toggle="tab"><i class="fa-solid fa-pen"></i>&nbsp;編輯</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#social_de" role="tab" data-bs-toggle="tab"><i class="fa-solid fa-xmark"></i>&nbsp;刪除</a>
                  </li>
                </ul>

                <div class="tab-content row justify-content-center" data-aos="fade-up" data-aos-delay="200">

                  <!-- Schdule Day 1 -->
                  <div role="tabpanel" class="col-lg-12 tab-pane fade show active" id="social_in">
                  <form method="post" action="social_in_up_de.php" enctype="multipart/form-data">
                    <input type="hidden" name="method" class="form-control" style="width: 100%;" value="in">
                    <input type="hidden" name="page" class="form-control" style="width: 100%;" value="shop_time">
                      <table width="100%" class="insert_group_form">
                        <tr>
                          <td>連結類型</td>
                          <td align="left">
                            <input type="radio" name="social_type" class="link_radio" id="twitter" value="1"><label class="icon-label" for="twitter"><i class="bx bxl-twitter"></i></label>
                            <input type="radio" name="social_type" class="link_radio" id="facebook" value="2"><label class="icon-label" for="facebook"><i class="bx bxl-facebook"></i></label>
                            <input type="radio" name="social_type" class="link_radio" id="instagram" value="3"><label class="icon-label" for="instagram"><i class="bx bxl-instagram"></i></label>
                            <input type="radio" name="social_type" class="link_radio" id="line" value="4"><label class="icon-label" for="line"><i class="fa-brands fa-line"></i>
                          </td>
                          <style>
                            .icon-label:hover {
                            background-color: #B0A5C6;
                            color: #fff;
                          }
                          </style>
                        </tr>
                        <tr>
                          <td>連結名稱</td>
                          <td><input type="text" name="social_name" class="form-control"></td>
                        </tr>
                        <tr>
                          <td width="10%">連結網址</td>
                          <td width="90%"><input type="text" name="social_link" class="form-control"></td>
                        </tr>
                        <tr>
                          <td colspan="2"><button type="submit" class="btn insert_button" style="display: block;width: 100%;">確認新增</button></td>
                        </tr>
                      </table>
                    </form>
                  </div>
                  <!-- End Schdule Day 1 -->

                  <!-- Schdule Day 2 -->
                  <div role="tabpanel" class="col-lg-12  tab-pane fade" id="social_up">
                  <form method="post" action="social_in_up_de.php">
                    <input type="hidden" name="method" class="form-control" style="width: 100%;" value="up">
                    <input type="hidden" name="page" class="form-control" style="width: 100%;" value="shop_time">
                      <table width="100%" class="social_link_table">
                        <?php
                        $sql_social="select *
                        from social
                        where shop_id=$shop_id";
                        $result_social=mysqli_query($link,$sql_social);
                        while($row_social=mysqli_fetch_assoc($result_social))
                        {
                          echo '
                          <input type="hidden" name="social_id[]" class="form-control" style="width: 100%;" value="',$row_social["social_id"],'">
                          ';
                          if($row_social["social_type"]==1){
                            $social_type='<i class="bx bxl-twitter"></i>';
                          }elseif($row_social["social_type"]==2){
                            $social_type='<i class="bx bxl-facebook"></i>';
                          }elseif($row_social["social_type"]==3){
                            $social_type='<i class="bx bxl-instagram"></i>';
                          }elseif($row_social["social_type"]==4){
                            $social_type='<i class="fa-brands fa-line"></i>';
                          }
                          echo '
                        <tr>
                          <td width="10%" align="center"><label class="icon-label">',$social_type,'</label></td>
                          <td width="30%"><input type="text" class="form-control" name="social_name[]" value="',$row_social["social_name"],'"></td>
                          <td width="50%"><input type="text" class="form-control" name="social_link[]" value="',$row_social["social_link"],'"></td>
                        </tr>';
                        }
                        ?>
                        <tr>
                          <td colspan="3"><button type="submit" class="btn insert_button" style="display: block;width: 100%;">確認修改</button></td>
                        </tr>
                        
                      </table>
                    </form>
                  </div>
                  <!-- End Schdule Day 2 -->

                  <!-- Schdule Day 3 -->
                  <div role="tabpanel" class="col-lg-12  tab-pane fade" id="social_de">
                    <table width="100%" class="social_link_table">
                    <?php
                        $sql_social="select *
                        from social
                        where shop_id=$shop_id";
                        $result_social=mysqli_query($link,$sql_social);
                        while($row_social=mysqli_fetch_assoc($result_social))
                        {
                          echo '
                          <input type="hidden" name="social_id[]" class="form-control" style="width: 100%;" value="',$row_social["social_id"],'">
                          ';
                          if($row_social["social_type"]==1){
                            $social_type='<i class="bx bxl-twitter"></i>';
                          }elseif($row_social["social_type"]==2){
                            $social_type='<i class="bx bxl-facebook"></i>';
                          }elseif($row_social["social_type"]==3){
                            $social_type='<i class="bx bxl-instagram"></i>';
                          }elseif($row_social["social_type"]==4){
                            $social_type='<i class="fa-brands fa-line"></i>';
                          }
                          echo '
                        <tr>
                          <td width="10%" align="center"><label class="icon-label">',$social_type,'</label></td>
                          <td width="80%">',$row_social["social_name"],'</td>
                          <td width="10%"><a href="social_in_up_de.php?social_id=',$row_social["social_id"],'&page=shop_time" class="nav-link scrollto"><i class="fa-solid fa-xmark"></i></a></td>
                        </tr>';
                        }
                        ?>
                     
                      
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
                  <button type="button" class="btn insert_button" data-bs-toggle="modal" data-bs-target="#insert_Preview_Modal"><i class="bi bi-bag-plus"></i>&nbsp;新增預告</button>
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
                      <input type="hidden" name="page" class="form-control" style="width: 100%;" value="shop_time">
                      <input type="hidden" name="shop_id" class="form-control" style="width: 100%;" value="<?php echo $shop_id;?>">
                        <table width="100%" class="insert_group_form">
                          <tr>
                            <td width="10%">商品團名*</td>
                            <td width="90%"><input type="text" name="group_name" class="form-control" required></td>
                          </tr>
                          <tr>
                            <td>國家*</td>
                            <td>
                              <table width="100%">
                              <tr>
                                <td width="20%"><input type="radio" name="nation" class="link_ch" id="nation1" value="1"><label class="icon-label3" for="nation1"><img src="https://cdn-icons-png.flaticon.com/128/197/197604.png" width="30px" height="30px" style="line-height: 30px;"></label><p style="display: inline-block;">日本</p></td>
                                <td width="20%"><input type="radio" name="nation" class="link_ch" id="nation2" value="2"><label class="icon-label3" for="nation2"><img src="https://cdn-icons-png.flaticon.com/128/10597/10597854.png" width="30px" height="30px" style="line-height: 30px;"></label><p style="display: inline-block;">韓國</p></td>
                                <td width="20%"><input type="radio" name="nation" class="link_ch" id="nation3" value="3"><label class="icon-label3" for="nation3"><img src="https://cdn-icons-png.flaticon.com/128/5373/5373308.png" width="30px" height="30px" style="line-height: 30px;"></label><p style="display: inline-block;">台灣</p></td>
                                <td width="20%"><input type="radio" name="nation" class="link_ch" id="nation4" value="4"><label class="icon-label3" for="nation4"><img src="https://cdn-icons-png.flaticon.com/128/197/197560.png" width="30px" height="30px" style="line-height: 30px;"></label><p style="display: inline-block;">法國</p></td>
                                <td width="20%"><input type="radio" name="nation" class="link_ch" id="nation5" value="5"><label class="icon-label3" for="nation5"><img src="https://cdn-icons-png.flaticon.com/128/12339/12339692.png" width="30px" height="30px" style="line-height: 30px;;"></label><p style="display: inline-block;">美國</p></td>
                              </tr>
                              <tr>
                                <td width="20%"><input type="radio" name="nation" class="link_ch" id="nation6" value="6"><label class="icon-label3" for="nation6"><img src="https://cdn-icons-png.flaticon.com/128/9906/9906483.png" width="30px" height="30px" style="line-height: 30px;"></label><p style="display: inline-block;">義大利</p></td>
                                <td width="20%"><input type="radio" name="nation" class="link_ch" id="nation7" value="7"><label class="icon-label3" for="nation7"><img src="https://cdn-icons-png.flaticon.com/128/197/197375.png" width="30px" height="30px" style="line-height: 30px;"></label><p style="display: inline-block;">中國</p></td>
                                <td width="20%"><input type="radio" name="nation" class="link_ch" id="nation8" value="8"><label class="icon-label3" for="nation8"><img src="https://cdn-icons-png.flaticon.com/128/197/197452.png" width="30px" height="30px" style="line-height: 30px;"></label><p style="display: inline-block;">泰國</p></td>
                                <td width="20%"><input type="radio" name="nation" class="link_ch" id="nation9" value="9"><label class="icon-label3" for="nation9"><img src="https://cdn-icons-png.flaticon.com/128/197/197374.png" width="30px" height="30px" style="line-height: 30px;"></label><p style="display: inline-block;">英國</p></td>
                                <td width="20%"><input type="radio" name="nation" class="link_ch" id="nation10" value="10"><label class="icon-label3" for="nation10"><img src="https://cdn-icons-png.flaticon.com/128/4238/4238090.png" width="30px" height="30px" style="line-height: 30px;"></label><p style="display: inline-block;">其他</p></td>
                              </tr>
                              </table>
                            </td>
                          </tr>
                          <tr>
                            <td>商團封面*</td>
                            <td><input class="form-control" type="file" name="group_bg" required></td>
                          </tr>
                          <tr>
                            <td>商團敘述*</td>
                            <td><textarea class="form-control" rows="5" name="commodity_group_narrate" required></textarea></td>
                          </tr>
                          <tr>
                            <td>原商品連結</td>
                            <td><input type="text" name="group_link" class="form-control"></td>
                          </tr>
                          <tr>
                            <td>主題</td>
                            <td>
                              <table width="100%">
                              <tr>
                                <td width="20%"><input type="checkbox" name="cg_theme[]" class="link_ch" id="theme1" value="1"><label class="icon-label2" for="theme1"><i class="fa-solid fa-shirt"></i></label><p style="display: inline-block;">服飾</p></td>
                                <td width="20%"><input type="checkbox" name="cg_theme[]" class="link_ch" id="theme2" value="2"><label class="icon-label2" for="theme2"><i class="fa-solid fa-face-smile-beam"></i></label><p style="display: inline-block;">美妝</p></td>
                                <td width="20%"><input type="checkbox" name="cg_theme[]" class="link_ch" id="theme3" value="3"><label class="icon-label2" for="theme3"><i class="fa-solid fa-heart"></i></label><p style="display: inline-block;">動漫</p></td>
                                <td width="20%"><input type="checkbox" name="cg_theme[]" class="link_ch" id="theme4" value="4"><label class="icon-label2" for="theme4"><i class="fa-solid fa-star"></i></label><p style="display: inline-block;">明星</p></td>
                                <td width="20%"><input type="checkbox" name="cg_theme[]" class="link_ch" id="theme5" value="5"><label class="icon-label2" for="theme5"><i class="fa-solid fa-house-chimney-window"></i></label><p style="display: inline-block;">日常</p></td>
                              </tr>
                              <tr>
                                <td width="20%"><input type="checkbox" name="cg_theme[]" class="link_ch" id="theme6" value="6"><label class="icon-label2" for="theme6"><i class="fa-solid fa-gamepad"></i></label><p style="display: inline-block;">數位</p></td>
                                <td width="20%"><input type="checkbox" name="cg_theme[]" class="link_ch" id="theme7" value="7"><label class="icon-label2" for="theme7"><i class="fa-solid fa-utensils"></i></label><p style="display: inline-block;">美食</p></td>
                                <td width="20%"><input type="checkbox" name="cg_theme[]" class="link_ch" id="theme8" value="8"><label class="icon-label2" for="theme8"><i class="fa-solid fa-person-biking"></i></label><p style="display: inline-block;">運動</p></td>
                                <td width="20%"><input type="checkbox" name="cg_theme[]" class="link_ch" id="theme9" value="9"><label class="icon-label2" for="theme9"><i class="fa-solid fa-gift"></i></label><p style="display: inline-block;">精品</p></td>
                                <td width="20%"><input type="checkbox" name="cg_theme[]" class="link_ch" id="theme10" value="10"><label class="icon-label2" for="theme10"><i class="fa-solid fa-bars"></i></label><p style="display: inline-block;">其他</p></td>
                              </tr>
                              </table>
                            </td>
                          </tr>
                          <tr>
                            <td>結單日期*</td>
                            <td style="text-align: left;"><input type="datetime-local" name="end" class="form-control" style="width: 100%;" value="" required></td>
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
                    <form method="post" action="preview_in_up_de.php" enctype="multipart/form-data">
                      <input type="hidden" name="method" class="form-control" style="width: 100%;" value="in">
                      <input type="hidden" name="shop_id" class="form-control" style="width: 100%;" value="<?php echo $shop_id;?>">
                        <table width="100%" class="insert_group_form">
                          <tr>
                            <td width="10%">預告標題</td>
                            <td width="90%"><input type="text" name="preview_title" class="form-control" required></td>
                          </tr>
                          <tr>
                            <td>預告敘述</td>
                            <td><textarea class="form-control" rows="5" name="preview_narrate" required></textarea></td>
                          </tr>
                          <tr>
                            <td>預告圖片</td>
                            <td><input class="form-control" type="file" name="preview_photo_link[]" multiple required></td>
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

                <?php
                  $sql="select *
                  from commodity_group
                  natural join shop
                  where shop_id='$shop_id' AND close_order_date != '0000-00-00 00:00:00' and commodity_group_state=1
                  order by close_order_date";
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
                    <div class="shop_group-wrap">';
                    if(strtotime($row["close_order_date"]) < strtotime(date('Y-m-d H:i:s'))){
                      echo '<button type="button" class="btn-floating" disabled>已結單</button>';
                    }
                    echo '
                      <figure>
                        <img src="',$row["commodity_group_bg"],'" alt="" width="100%" height="100%">';
                        $sql_likegroup="select *
                        from like_group
                        where commodity_group_id='{$row["commodity_group_id"]}' and account='{$_SESSION["account"]}'";
                        $result_likegroup=mysqli_query($link,$sql_likegroup);
                        if(isset($_SESSION["account"])){
                          if(mysqli_num_rows($result_likegroup)==0){
                            echo '<a href="like_in_de.php?shop_id=',$shop_id,'&commodity_group_id=',$row["commodity_group_id"],'&page=shop_time&method=in&like=group" data-gallery="portfolioGallery" class="link-preview shop_group-lightbox" title="收藏"><i class="fa-regular fa-heart"></i></a>';
                          }else{
                            echo '<a href="like_in_de.php?shop_id=',$shop_id,'&commodity_group_id=',$row["commodity_group_id"],'&page=shop_time&method=de&like=group" data-gallery="portfolioGallery" class="link-preview shop_group-lightbox" title="取消收藏"><i class="fa-solid fa-heart"></i></a>';
                          }
                        }
                        echo '
                        <a href="',$group_link,'" class="link-details" title="查看詳情"><i class="bx bx-link"></i></a>
                      </figure>

                      <div class="shop_group-info">
                        <h4><a href="',$group_link,'">',$row["commodity_group_name"],'</a></h4>
                        <div class="flex-container">
                          <p><i class="bi bi-clock-history"></i>&nbsp;',$row["close_order_date"],'</p>
                          <p><i class="fa-regular fa-heart"></i>&nbsp;';
                          $sql_likegroup_num="select *
                          from like_group
                          where commodity_group_id='{$row["commodity_group_id"]}'";
                          $result_likegroup_num=mysqli_query($link,$sql_likegroup_num);
                          echo mysqli_num_rows($result_likegroup_num);
                          echo '&nbsp;&nbsp;<i class="fa-solid fa-user-group"></i>&nbsp;';
                          $sql_withgroup_num="select *
                          from withgroup
                          where commodity_group_id='{$row["commodity_group_id"]}'";
                          $result_withgroup_num=mysqli_query($link,$sql_withgroup_num);
                          echo mysqli_num_rows($result_withgroup_num);
                          echo '</p>
                        </div>
                      </div>
                    </div>
                  </div>

                  ';
                  }
                ?>
                  
                  
    
                </div>
    
              </div>
              <!-- End Schdule Day 1 -->
    
              <!-- Schdule Day 2 -->
              <div role="tabpanel" class="col-lg-12  tab-pane fade" id="day-2">
    
                <div class="row">
                  <?php
                    $sql="select *
                    from preview
                    natural join shop
                    where shop_id='$shop_id'
                    order by time";
                    $result=mysqli_query($link,$sql);
                    while($row=mysqli_fetch_assoc($result))
                    {
                      echo'
                      <div class="col-lg-6">
                        
                        <div class="preview_card">
                          <table class="preview_table">
                            <tr>
                              <td width="15%"><img src="',$row["shop_avatar"],'" class="preview_people_photo"></td>
                              <td width="80%">
                                <span>',$row["shop_name"],'</span><br>
                                <i class="fa-regular fa-clock"></i>&nbsp;',$row["time"],'</span>
                                <div class="preview_title">
                                  <p><a href="preview-details.php?preview_id=',$row["preview_id"],'&shop_id=',$shop_id,'">',$row["preview_title"],'</a></p>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td colspan="2" >
                                <div class="description" width="70%">',nl2br($row["preview_narrate"]),'</div>
                                <img src="';
                                $sql_photo="select *
                                from preview_photo
                                where preview_id='{$row["preview_id"]}'
                                order by preview_photo_id
                                limit 1";
                                $result_photo=mysqli_query($link,$sql_photo);
                                while($row_photo=mysqli_fetch_assoc($result_photo))
                                {
                                  echo $row_photo["preview_photo_link"];
                                }
                                echo '" class="preview_photo">
                              </td>
                            </tr>
                            
                          </table>
                        </div>
                        
                      </div>';
                    }
                  ?>


                </div>
    
              </div>
              <!-- End Schdule Day 2 -->
    
              <!-- Schdule Day 3 -->
              <div role="tabpanel" class="col-lg-12  tab-pane fade" id="day-3">
    
                <div class="row shop_group-container">

                <?php
                  $sql="select *
                  from commodity_group
                  natural join shop
                  where shop_id='$shop_id' AND close_order_date != '0000-00-00 00:00:00' and commodity_group_state=2
                  order by close_order_date";
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
                        <img src="',$row["commodity_group_bg"],'" alt="" width="100%" height="100%">';
                        $sql_likegroup="select *
                        from like_group
                        where commodity_group_id='{$row["commodity_group_id"]}' and account='{$_SESSION["account"]}'";
                        $result_likegroup=mysqli_query($link,$sql_likegroup);
                        if(isset($_SESSION["account"])){
                          if(mysqli_num_rows($result_likegroup)==0){
                            echo '<a href="like_in_de.php?shop_id=',$shop_id,'&commodity_group_id=',$row["commodity_group_id"],'&page=shop_time&method=in&like=group" data-gallery="portfolioGallery" class="link-preview shop_group-lightbox" title="收藏"><i class="fa-regular fa-heart"></i></a>';
                          }else{
                            echo '<a href="like_in_de.php?shop_id=',$shop_id,'&commodity_group_id=',$row["commodity_group_id"],'&page=shop_time&method=de&like=group" data-gallery="portfolioGallery" class="link-preview shop_group-lightbox" title="取消收藏"><i class="fa-solid fa-heart"></i></a>';
                          }
                        }
                        echo '
                        <a href="',$group_link,'" class="link-details" title="查看詳情"><i class="bx bx-link"></i></a>
                      </figure>

                      <div class="shop_group-info">
                        <h4><a href="',$group_link,'">',$row["commodity_group_name"],'</a></h4>
                        <div class="flex-container">
                          <p><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i>&nbsp;(4.5)</p>
                          <p><i class="fa-regular fa-heart"></i>&nbsp;';
                          $sql_likegroup_num="select *
                          from like_group
                          where commodity_group_id='{$row["commodity_group_id"]}'";
                          $result_likegroup_num=mysqli_query($link,$sql_likegroup_num);
                          echo mysqli_num_rows($result_likegroup_num);
                          echo '&nbsp;&nbsp;<i class="fa-solid fa-user-group"></i>&nbsp;';
                          $sql_withgroup_num="select *
                          from withgroup
                          where commodity_group_id='{$row["commodity_group_id"]}'";
                          $result_withgroup_num=mysqli_query($link,$sql_withgroup_num);
                          echo mysqli_num_rows($result_withgroup_num);
                          echo '</p>
                        </div>
                      </div>
                    </div>
                  </div>

                  ';
                  }
                ?>
    

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