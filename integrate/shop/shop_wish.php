<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>賣場介面 - 許願池</title>
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
      echo '<a href="like_in_de.php?shop_id=',$shop_id,'&page=shop_wish&method=in&like=shop"><button type="button" class="btn insert_button"><i class="fa-regular fa-heart"></i>&nbsp;收藏賣場</button></a>';
    }else{
      echo '<a href="like_in_de.php?shop_id=',$shop_id,'&page=shop_wish&method=de&like=shop"><button type="button" class="btn delike_button"><i class="fa-solid fa-heart"></i>&nbsp;取消收藏</button></a>';
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
        <li><a href="./shop_time.php?shop_id=<?php echo $shop_id;?>" class="nav-link scrollto"><i class="bi bi-clock-history"></i> <span>限定開團</span></a></li>
        <li><a href="./shop_wish.php?shop_id=<?php echo $shop_id;?>" class="nav-link scrollto   active"><i class="fa-solid fa-wand-sparkles"></i><span>許願池</span></a></li>
        <li><a href="./shop_rule.php?shop_id=<?php echo $shop_id;?>" class="nav-link scrollto"><i class="fa-solid fa-file-circle-question"></i><span>賣場規則</span></a></li>
        <li><a href="./shop_evaluate.php?shop_id=<?php echo $shop_id;?>" class="nav-link scrollto"><i class="fa-regular fa-comment-dots"></i> <span>賣場評價</span></a></li>
        <!-- <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li> -->
      </ul>
    </nav><!-- .nav-menu -->

  </header><!-- End Header -->
  
  <div class="min_nav">
    <button id="triggerBtn"><i class="fa-solid fa-wand-sparkles"></i></button>
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
                    <input type="hidden" name="page" class="form-control" style="width: 100%;" value="shop_wish">
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
                    <input type="hidden" name="page" class="form-control" style="width: 100%;" value="shop_wish">
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
                          <td width="10%"><a href="social_in_up_de.php?social_id=',$row_social["social_id"],'&page=shop_wish" class="nav-link scrollto"><i class="fa-solid fa-xmark"></i></a></td>
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
                <h2><i class="fa-solid fa-wand-sparkles"></i>&nbsp;&nbsp;許願池</h2>
              </div><!-- End Section Title -->
              <?php
              $sql="select *
              from shop
              where shop_id='$shop_id'";
              $result=mysqli_query($link,$sql);
              while($row=mysqli_fetch_assoc($result))
              {
                $sql_wish="select * from wish where account='{$_SESSION["account"]}' AND MONTH(wish_start) = MONTH(CURRENT_DATE())
                AND YEAR(wish_start) = YEAR(CURRENT_DATE())";
                $result_wish = mysqli_query($link, $sql_wish);
                $count = mysqli_num_rows($result_wish); // 获取结果行数
                if(!isset($_SESSION["account"])){
                  echo'
                  <button class="btn insert_button" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
                  <i class="fa-solid fa-wand-sparkles"></i>&nbsp;Make A Wish&nbsp;<i class="fa-solid fa-wand-sparkles"></i></button>';
                }elseif($count>=3){
                  echo'
                  <button class="btn insert_button" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
                  <i class="fa-solid fa-wand-sparkles"></i>&nbsp;Make A Wish&nbsp;<i class="fa-solid fa-wand-sparkles"></i></button>';
                }else{
                  echo'
                  <button class="btn insert_button" data-bs-toggle="modal" data-bs-target="#insert_group_Modal">
                  <i class="fa-solid fa-wand-sparkles"></i>&nbsp;Make A Wish&nbsp;<i class="fa-solid fa-wand-sparkles"></i></button>';
                }
              // if($_SESSION["account"]!=$row["account"] && isset($_SESSION["account"])){
              //   echo '
              //   <div>
              //   <button type="button" class="btn insert_button" data-bs-toggle="modal" data-bs-target="#insert_group_Modal"><i class="fa-solid fa-wand-sparkles"></i>&nbsp;許願</button>
              // </div>';
              // }
              }
              
              ?>
              <?php 
                $max_date = date('Y-m-d', strtotime('+3 months'));
              ?>

              <!-- Modal 未登入不能許願 -->
              <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
              <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
              
              <!-- insert_group_Modal -->
              <div class="modal fade" id="insert_group_Modal" tabindex="-1" aria-labelledby="insert_group_ModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="insert_group_ModalLabel">我想許願...</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form method="post" action="wish_in_up_de.php" enctype="multipart/form-data">
                      <input type="hidden" name="method" class="form-control" style="width: 100%;" value="in">
                      <input type="hidden" name="shop_id" class="form-control" style="width: 100%;" value="<?php echo $shop_id;?>">
                        <table width="100%" class="insert_group_form">
                          <tr>
                            <td width="15%">商品名稱*</td>
                            <td width="85%"><input type="text" name="wish_name" class="form-control" required></td>
                          </tr>
                          <tr>
                            <td>商品敘述*</td>
                            <td><textarea class="form-control" rows="5" name="wish_narrat" required></textarea></td>
                          </tr>
                          <tr>
                            <td>商品標籤(最多可填5個)</td>
                            <td><input type="text" id="group_name" class="form-control" style="margin-bottom: 5px;"><input type="text" id="group_name" class="form-control" style="margin-bottom: 5px;"><input type="text" id="group_name" class="form-control" style="margin-bottom: 5px;"><input type="text" id="group_name" class="form-control" style="margin-bottom: 5px;"><input type="text" id="group_name" class="form-control" style="margin-bottom: 5px;"></td>
                          </tr>
                          <tr>
                            <td>許願截止日期*</td>
                            <td style="text-align: left;"><input type="date" name="end" class="form-control" style="width: 100%;" value="<?php echo $max_date;?>" max="<?php echo $max_date; ?>" id="end-date" required></td>
                          </tr>
                          <tr>
                            <td>參考網址</td>
                            <td><input type="text" name="wish_link" class="form-control"></td>
                          </tr>
                          <tr>
                            <td>商品圖片(可選多張)*</td>
                            <td><input class="form-control" type="file" name="wish_photo[]" multiple required></td>
                          </tr>
                          <tr>
                            <td colspan="2"><button type="submit" class="btn insert_button" style="display: block;width: 100%;">確認許願</button></td>
                          </tr>
                        </table>
                        
                      </form>
                    </div>
                  </div>
                </div>
              </div><!-- End insert_group_Modal -->
    
            </div><!-- End flex-container -->
            
            
    
            <ul class="nav nav-tabs" role="tablist" data-aos="fade-up" data-aos-delay="100">
              <li class="nav-item">
                <a class="nav-link active" href="#day-1" role="tab" data-bs-toggle="tab"><i class="fa-solid fa-hourglass-half"></i>&nbsp;賣場許願池</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#day-2" role="tab" data-bs-toggle="tab"><i class="fa-solid fa-hourglass-start"></i>&nbsp;參與公共許願</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#day-3" role="tab" data-bs-toggle="tab"><i class="fa-solid fa-hourglass-end"></i>&nbsp;歷史許願紀錄</a>
              </li>
            </ul>
    
            <div class="tab-content row justify-content-center" data-aos="fade-up" data-aos-delay="200">
    
              <!-- Schdule Day 1 -->
              <div role="tabpanel" class="col-lg-12 tab-pane fade show active" id="day-1">
                <!-- Courses List Section -->
                <section id="courses-list" class="section courses-list">
                  <div class="container">
                    <div class="row">
                        
                    <?php
                    $wish_num=1;
                    $sql="select *
                    from wish
                    natural join account
                    where wish_shop_id='$shop_id' AND wish_end >= CURDATE() AND wish_state <>  2
                    order by wish_start";
                    $result=mysqli_query($link,$sql);
                    while($row=mysqli_fetch_assoc($result))
                    {
                      $wish_id=$row["wish_id"];
                      echo '
                      <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="course-item">
                          <div id="carouselExampleIndicators',$wish_num,'" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner fixed-image">';
                              $a=1;
                              $sql_photo="select *
                              from wish_photo
                              where wish_id='$wish_id'";
                              $result_photo=mysqli_query($link,$sql_photo);
                              while($row_photo=mysqli_fetch_assoc($result_photo))
                              {
                                echo '
                              <div class="carousel-item ';if($a==1){echo 'active"';}echo '">
                                <img src="',$row_photo["wish_photo_link"],'" class="d-block w-100" alt="...">
                              </div>';
                              $a++;
                              }
                              echo '
                              </div>
                              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators',$wish_num,'" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden"></span>
                              </button>
                              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators',$wish_num,'" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden"></span>
                              </button>
                            </div>
                              
                          <div class="course-content">
    
                            <h3><a href="wish-details.php?wish_id=',$wish_id,'&shop_id=',$shop_id,'">',$row["wish_name"],'</a></h3>
                            <p class="description">',nl2br($row['wish_narrat']),'</p>
                              <span class="price"><i class="fa-regular fa-clock"></i>&nbsp;許願截止日期: ',$row["wish_end"],'</span>
                            <div class="trainer d-flex justify-content-between align-items-center">
                              <div class="trainer-profile d-flex align-items-center">
                                <img src="',$row["user_avatar"],'" class="img-fluid" alt="">
                                <a class="trainer-link">',$row["user_name"],'</a>
                              </div>
                              <div class="trainer-rank d-flex align-items-center">
                              <i class="bi bi-heart heart-icon"></i>&nbsp;';
                              $sql_alllikewish="select *
                              from like_wish
                              where wish_id='{$row["wish_id"]}'";
                              $result_alllikewish=mysqli_query($link,$sql_alllikewish);
                              echo mysqli_num_rows($result_alllikewish);
                              echo '&nbsp;';
                              $sql_likewish="select *
                              from like_wish
                              where wish_id='{$row["wish_id"]}' and account='{$_SESSION["account"]}'";
                              $result_likewish=mysqli_query($link,$sql_likewish);
                              if(isset($_SESSION["account"])){
                                if(mysqli_num_rows($result_likewish)==0){
                                  echo '<a href="like_in_de.php?shop_id=',$shop_id,'&wish_id=',$row["wish_id"],'&page=shop_wish&method=in&like=wish"><button type="button" class="btn insert_button">收藏許願</button></a>';
                                }else{
                                  echo '<a href="like_in_de.php?shop_id=',$shop_id,'&wish_id=',$row["wish_id"],'&page=shop_wish&method=de&like=wish"><button type="button" class="btn delike_button">取消收藏</button></a>';
                                }
                              }
                                
                                echo '
                              </div>
                            </div>
                            
                          </div>
                        </div>
                      </div> <!-- End Course Item-->';
                      $wish_num++;
                    }
                    ?>

                    </div>
                  </div>
                </section><!-- /Courses List Section -->
            
              </div>
              <!-- End Schdule Day 1 -->
    
              <!-- Schdule Day 2 -->
              <div role="tabpanel" class="col-lg-12  tab-pane fade" id="day-2">
    
                <!-- Courses List Section -->
                <section id="courses-list" class="section courses-list">
                  <div class="container">
                    <div class="row">
                        
                    <?php
                    $sql="SELECT *
                    FROM wish
                    NATURAL JOIN account
                    WHERE wish_id IN (SELECT wish_id FROM bid WHERE shop_id = $shop_id)
                    AND wish_end >= CURDATE()
                    AND wish_shop_id IS NULL
                    ORDER BY wish_start;";
                    $result=mysqli_query($link,$sql);
                    while($row=mysqli_fetch_assoc($result))
                    {
                      $wish_id=$row["wish_id"];
                      echo '
                      <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="course-item">
                          <div id="carouselExampleIndicators',$wish_num,'" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner fixed-image">';
                              $a=1;
                              $sql_photo="select *
                              from wish_photo
                              where wish_id='$wish_id'";
                              $result_photo=mysqli_query($link,$sql_photo);
                              while($row_photo=mysqli_fetch_assoc($result_photo))
                              {
                                echo '
                              <div class="carousel-item ';if($a==1){echo 'active"';}echo '">
                                <img src="',$row_photo["wish_photo_link"],'" class="d-block w-100" alt="...">
                              </div>';
                              $a++;
                              }
                              echo '
                              </div>
                              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators',$wish_num,'" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden"></span>
                              </button>
                              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators',$wish_num,'" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden"></span>
                              </button>
                            </div>
                              
                          <div class="course-content">
    
                            <h3><a href="wish-details.php?wish_id=',$wish_id,'&shop_id=',$shop_id,'">',$row["wish_name"],'</a></h3>
                            <p class="description">',nl2br($row['wish_narrat']),'</p>
                              <span class="price"><i class="fa-regular fa-clock"></i>&nbsp;許願截止日期: ',$row["wish_end"],'</span>
                            <div class="trainer d-flex justify-content-between align-items-center">
                              <div class="trainer-profile d-flex align-items-center">
                                <img src="',$row["user_avatar"],'" class="img-fluid" alt="">
                                <a class="trainer-link">',$row["user_name"],'</a>
                              </div>
                              <div class="trainer-rank d-flex align-items-center">
                              <i class="bi bi-heart heart-icon"></i>&nbsp;';
                              $sql_alllikewish="select *
                              from like_wish
                              where wish_id='{$row["wish_id"]}'";
                              $result_alllikewish=mysqli_query($link,$sql_alllikewish);
                              echo mysqli_num_rows($result_alllikewish);
                              echo '&nbsp;';
                              $sql_likewish="select *
                              from like_wish
                              where wish_id='{$row["wish_id"]}' and account='{$_SESSION["account"]}'";
                              $result_likewish=mysqli_query($link,$sql_likewish);
                              if(isset($_SESSION["account"])){
                                if(mysqli_num_rows($result_likewish)==0){
                                  echo '<a href="like_in_de.php?shop_id=',$shop_id,'&wish_id=',$row["wish_id"],'&page=shop_wish&method=in&like=wish"><button type="button" class="btn insert_button">收藏許願</button></a>';
                                }else{
                                  echo '<a href="like_in_de.php?shop_id=',$shop_id,'&wish_id=',$row["wish_id"],'&page=shop_wish&method=de&like=wish"><button type="button" class="btn delike_button">取消收藏</button></a>';
                                }
                              }
                                
                                echo '
                              </div>
                            </div>
                            
                          </div>
                        </div>
                      </div> <!-- End Course Item-->';
                      $wish_num++;
                    }
                    ?>
    
                    </div>
                  </div>
                </section><!-- /Courses List Section -->
    
              </div>
              <!-- End Schdule Day 2 -->
    
              <!-- Schdule Day 3 -->
              <div role="tabpanel" class="col-lg-12  tab-pane fade" id="day-3">
    
               <!-- Courses List Section -->
               <section id="courses-list" class="section courses-list">
                <div class="container">
                  <div class="row">
                  
                  <?php
                    $sql="select *
                    from wish
                    natural join account
                    where wish_shop_id='$shop_id' AND (wish_end < CURDATE() or wish_state=2)
                    order by wish_start";
                    $result=mysqli_query($link,$sql);
                    while($row=mysqli_fetch_assoc($result))
                    {
                      $wish_id=$row["wish_id"];
                      echo '
                      <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="course-item">
                          <div id="carouselExampleIndicators',$wish_num,'" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner fixed-image">';
                              $a=1;
                              $sql_photo="select *
                              from wish_photo
                              where wish_id='$wish_id'";
                              $result_photo=mysqli_query($link,$sql_photo);
                              while($row_photo=mysqli_fetch_assoc($result_photo))
                              {
                                echo '
                              <div class="carousel-item ';if($a==1){echo 'active"';}echo '">
                                <img src="',$row_photo["wish_photo_link"],'" class="d-block w-100" alt="...">
                              </div>';
                              $a++;
                              }
                              echo '
                              </div>
                              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators',$wish_num,'" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden"></span>
                              </button>
                              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators',$wish_num,'" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden"></span>
                              </button>
                            </div>
                              
                          <div class="course-content">
    
                            <h3><a href="wish-details.php?wish_id=',$wish_id,'&shop_id=',$shop_id,'">',$row["wish_name"],'</a></h3>
                            <p class="description">',nl2br($row['wish_narrat']),'</p>
                              <span class="price"><i class="fa-regular fa-clock"></i>&nbsp;許願截止日期: ',$row["wish_end"],'</span>
                            <div class="trainer d-flex justify-content-between align-items-center">
                              <div class="trainer-profile d-flex align-items-center">
                                <img src="',$row["user_avatar"],'" class="img-fluid" alt="">
                                <a class="trainer-link">',$row["user_name"],'</a>
                              </div>';
                              if($row["wish_state"]==1){
                                echo '
                                <div class="trainer-rank d-flex align-items-center">
                                <button type="button" class="btn button_success" disabled>許願成功</button>
                              </div>';
                              }else{
                                echo '
                                <div class="trainer-rank d-flex align-items-center">
                                <button type="button" class="btn button_fail" disabled>許願失敗</button>
                              </div>';
                              }
                              echo '
                            </div>
                            
                          </div>
                        </div>
                      </div> <!-- End Course Item-->';
                      $wish_num++;
                    }
                    ?>

                  </div>
                </div>
              </section><!-- /Courses List Section -->
    
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