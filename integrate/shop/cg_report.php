<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>賣場介面 - 被檢舉之商團</title>
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
          <li><a href="../index/groupshop.php">團購</a></li>
          <li><a href="../wish/wish.php">許願池</a></li>

          <?php
            if(!empty($_SESSION['user_name'])){
              echo '
 

              <li class="dropdown"><a href="../profile/Profile_settings.php"><img src="',$_SESSION["user_avatar"],'" class="nav-photo"></a>
                <ul>
                  <li><a style="color:#FFF;font-weight: 600;margin-bottom: 0px;">',$_SESSION["user_name"],'</a></li>
                  <hr>';
                  if(isset($_SESSION["user_shop_id"])){
                    echo'
                    <li><a href="shop.php?shop_id=', $_SESSION['user_shop_id'] . '" style="font-weight: 600;">我的賣場</a></li>';
                  }
                  if($_SESSION['permissions']==2){
                    echo'
                    <li><a href="Report_review.php" style="font-weight: 600;">檢舉審核</a></li>';
                  }
                    echo'
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
        <li><a href="./shop_time.php?shop_id=<?php echo $shop_id;?>" class="nav-link scrollto"><i class="bi bi-clock-history"></i> <span>限定開團</span></a></li>
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
                <h2><i class="fa-solid fa-circle-exclamation"></i>&nbsp;&nbsp;遭檢舉之商團</h2>
              </div><!-- End Section Title -->
              <div>
              <a href="#" data-bs-toggle="modal" data-bs-target="#report_notice_modal" class="report_notice">
              <i class="fa-regular fa-circle-question fa-lg" aria-hidden="true"></i>
              </a>
              </div>
            </div><!-- End flex-container -->
            
    
            <ul class="nav nav-tabs" role="tablist" data-aos="fade-up" data-aos-delay="100">
              <li class="nav-item">
                <a class="nav-link active" href="#day-1" role="tab" data-bs-toggle="tab"><i class="fa-solid fa-hourglass-half"></i>&nbsp;非限定開團</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#day-2" role="tab" data-bs-toggle="tab"><i class="fa-solid fa-hourglass-start"></i>&nbsp;限定開團</a>
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
                  where shop_id='$shop_id' AND close_order_date is null
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
                    $sql_report_yn="select *
                    from report
                    where commodity_group_id='$commodity_group_id' AND report_results =1";
                    $result_report_yn=mysqli_query($link,$sql_report_yn);
                    if(mysqli_num_rows($result_report_yn)>0){
                    echo'
                  <div class="col-lg-4 col-md-6 shop_group-item">
                    <div class="shop_group-wrap">
                      <figure>
                        <img src="',$row["commodity_group_bg"],'" alt="" width="100%" height="100%">';
                        $sql_likegroup="select *
                        from like_group
                        where commodity_group_id='{$row["commodity_group_id"]}' and account='{$_SESSION["account"]}'";
                        $result_likegroup=mysqli_query($link,$sql_likegroup);
                        if(isset($_SESSION["account"])){
                          if(mysqli_num_rows($result_likegroup)==0){
                            echo '<a href="like_in_de.php?shop_id=',$shop_id,'&commodity_group_id=',$row["commodity_group_id"],'&page=shop&method=in&like=group" data-gallery="portfolioGallery" class="link-preview shop_group-lightbox" title="收藏"><i class="fa-regular fa-heart"></i></a>';
                          }else{
                            echo '<a href="like_in_de.php?shop_id=',$shop_id,'&commodity_group_id=',$row["commodity_group_id"],'&page=shop_time&method=de&like=group" data-gallery="portfolioGallery" class="link-preview shop_group-lightbox" title="取消收藏"><i class="fa-solid fa-heart"></i></a>';
                          }
                          echo '<a class="link-details" title="檢舉詳情" data-bs-toggle="modal" data-bs-target="#report_Modal'.$row["commodity_group_id"].'"><i class="fa-solid fa-exclamation"></i></a>';
                        }
                        echo '
                      </figure>

                      <div class="shop_group-info">
                        <h4><a href="',$group_link,'">',$row["commodity_group_name"],'</a></h4>
                        <p><i class="fa-regular fa-heart"></i>&nbsp;';
                        $sql_likegroup_num="select *
                        from like_group
                        where commodity_group_id='{$row["commodity_group_id"]}'";
                        $result_likegroup_num=mysqli_query($link,$sql_likegroup_num);
                        echo mysqli_num_rows($result_likegroup_num);
                        echo '&nbsp;&nbsp;<i class="ri ri-shopping-bag-line"></i>&nbsp;';
                        $sql_group_commodity_num="select *
                        from commodity
                        where commodity_group_id='{$row["commodity_group_id"]}' and commodity_state=1";
                        $result_group_commodity_num=mysqli_query($link,$sql_group_commodity_num);
                        echo mysqli_num_rows($result_group_commodity_num);
                        echo '</p>
                      </div>
                    </div>
                  </div>';
                
                  echo '
                  <div class="modal fade" id="report_Modal',$row["commodity_group_id"],'" tabindex="-1" aria-labelledby="report_ModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="report_ModalLabel">檢舉詳情</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <table width="100%" class="insert_group_form">
                              <tr>
                                <td width="25%">檢舉類型</td>
                                <td width="35%">詳細原因</td>
                                <td width="15%">檢舉時間</td>
                                <td width="10%">審核結果</td>
                                <td width="15%">審核時間</td>
                              </tr>';
                              $sql_detail="select *
                              from report
                              where commodity_group_id='{$row["commodity_group_id"]}'
                              order by report_time";
                              $result_detail=mysqli_query($link,$sql_detail);
                              while($row_detail=mysqli_fetch_assoc($result_detail))
                              {
                                echo '
                                  <tr>
                                    <td class="report_td">';
                                    if($row_detail["report_type"]==1){
                                      echo '酒類 / 菸類商品';
                                    }elseif($row_detail["report_type"]==2){
                                      echo '武器 / 彈藥 / 軍事用品';
                                    }elseif($row_detail["report_type"]==3){
                                      echo '藥品、醫療器材';
                                    }elseif($row_detail["report_type"]==4){
                                      echo '此商品可能令人感到不適或違反善良風俗';
                                    }elseif($row_detail["report_type"]==5){
                                      echo '活體動物、保育動物及其製品';
                                    }elseif($row_detail["report_type"]==6){
                                      echo '仿冒品';
                                    }elseif($row_detail["report_type"]==7){
                                      echo '濫用文字誤導搜尋';
                                    }elseif($row_detail["report_type"]==8){
                                      echo '重覆刊登';
                                    }elseif($row_detail["report_type"]==9){
                                      echo '複製他人商品圖文';
                                    }elseif($row_detail["report_type"]==10){
                                      echo '其他';
                                    }
                                    echo '</td>
                                    <td class="report_td">',$row_detail["report_why"],'</td>
                                    <td class="report_td">',$row_detail["report_time"],'</td>
                                    <td class="report_td">';
                                    if($row_detail["report_results"]==1){
                                      echo '<i class="fa-solid fa-circle-check" style="color: #83c57e;"></i>';
                                    }elseif($row_detail["report_results"]==2){
                                      echo '<i class="fa-solid fa-circle-xmark" style="color: #d55858;"></i>';
                                    }elseif($row_detail["report_results"]==3){
                                      echo '待定';
                                    }
                                    echo '</td>
                                    <td class="report_td">',$row_detail["review_time"],'</td>
                                  </tr>';
                                }

                              echo '
                            </table>
                            
                        </div>
                      </div>
                    </div> 
                  </div>
                  ';
                
                
                
                }
                }
                ?>
                  
                  
    
                </div>
    
              </div>
              <!-- End Schdule Day 1 -->
    
              <!-- Schdule Day 2 -->
              <div role="tabpanel" class="col-lg-12  tab-pane fade" id="day-2">
    
              <div class="row shop_group-container">

                <?php
                  $sql="select *
                  from commodity_group
                  natural join shop
                  where shop_id='$shop_id' AND close_order_date is not null
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
                    $sql_report_yn="select *
                    from report
                    where commodity_group_id='$commodity_group_id' AND report_results =1";
                    $result_report_yn=mysqli_query($link,$sql_report_yn);
                    if(mysqli_num_rows($result_report_yn)>0){

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
                            echo '<a href="like_in_de.php?shop_id=',$shop_id,'&commodity_group_id=',$row["commodity_group_id"],'&page=shop&method=in&like=group" data-gallery="portfolioGallery" class="link-preview shop_group-lightbox" title="收藏"><i class="fa-regular fa-heart"></i></a>';
                          }else{
                            echo '<a href="like_in_de.php?shop_id=',$shop_id,'&commodity_group_id=',$row["commodity_group_id"],'&page=shop_time&method=de&like=group" data-gallery="portfolioGallery" class="link-preview shop_group-lightbox" title="取消收藏"><i class="fa-solid fa-heart"></i></a>';
                          }
                          echo '<a class="link-details" title="檢舉詳情" data-bs-toggle="modal" data-bs-target="#report_Modal'.$row["commodity_group_id"].'" data-commodity-group-id="' . $row["commodity_group_id"] . '"><i class="fa-solid fa-exclamation"></i></a>';
                        }
                        echo '
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
                  </div>';
                
                  echo '
                  <div class="modal fade" id="report_Modal',$row["commodity_group_id"],'" tabindex="-1" aria-labelledby="report_ModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="report_ModalLabel">檢舉詳情</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <table width="100%" class="insert_group_form">
                              <tr>
                                <td width="25%">檢舉類型</td>
                                <td width="35%">詳細原因</td>
                                <td width="15%">檢舉時間</td>
                                <td width="10%">審核結果</td>
                                <td width="15%">審核時間</td>
                              </tr>';
                              $sql_detail="select *
                              from report
                              where commodity_group_id='{$row["commodity_group_id"]}'
                              order by report_time";
                              $result_detail=mysqli_query($link,$sql_detail);
                              while($row_detail=mysqli_fetch_assoc($result_detail))
                              {
                                echo '
                                  <tr>
                                    <td class="report_td">';
                                    if($row_detail["report_type"]==1){
                                      echo '酒類 / 菸類商品';
                                    }elseif($row_detail["report_type"]==2){
                                      echo '武器 / 彈藥 / 軍事用品';
                                    }elseif($row_detail["report_type"]==3){
                                      echo '藥品、醫療器材';
                                    }elseif($row_detail["report_type"]==4){
                                      echo '此商品可能令人感到不適或違反善良風俗';
                                    }elseif($row_detail["report_type"]==5){
                                      echo '活體動物、保育動物及其製品';
                                    }elseif($row_detail["report_type"]==6){
                                      echo '仿冒品';
                                    }elseif($row_detail["report_type"]==7){
                                      echo '濫用文字誤導搜尋';
                                    }elseif($row_detail["report_type"]==8){
                                      echo '重覆刊登';
                                    }elseif($row_detail["report_type"]==9){
                                      echo '複製他人商品圖文';
                                    }elseif($row_detail["report_type"]==10){
                                      echo '其他';
                                    }
                                    echo '</td>
                                    <td class="report_td">',$row_detail["report_why"],'</td>
                                    <td class="report_td">',$row_detail["report_time"],'</td>
                                    <td class="report_td">';
                                    if($row_detail["report_results"]==1){
                                      echo '<i class="fa-solid fa-circle-check" style="color: #83c57e;"></i>';
                                    }elseif($row_detail["report_results"]==2){
                                      echo '<i class="fa-solid fa-circle-xmark" style="color: #d55858;"></i>';
                                    }elseif($row_detail["report_results"]==3){
                                      echo '待定';
                                    }
                                    echo '</td>
                                    <td class="report_td">',$row_detail["review_time"],'</td>
                                  </tr>';
                                }

                              echo '
                            </table>
                            
                        </div>
                      </div>
                    </div> 
                  </div>
                  ';
                  
                  }

                  }
                ?>


                </div>
    
              </div>
              <!-- End Schdule Day 2 -->
    
    
              
    
            </div>
    
          
    
        </section><!-- End Schedule Section -->
          
    
      </div>
    </section><!-- End Portfolio Section -->

<!-- insert_Preview_Modal -->
<div class="modal fade" id="report_Modal" tabindex="-1" aria-labelledby="report_ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="report_ModalLabel">檢舉詳情</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <table width="100%" class="insert_group_form">
            <tr>
              <td width="25%">檢舉類型</td>
              <td width="35%">詳細原因</td>
              <td width="15%">檢舉時間</td>
              <td width="10%">審核結果</td>
              <td width="15%">審核時間</td>
            </tr>
            
            
          </table>
          
      </div>
    </div>
  </div> 
</div>


<!-- Modal 無許願次數 -->
<div class="modal fade" id="report_notice_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="report_notice_modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title" id="report_notice_modalLabel">檢舉相關注意事項</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <ul>
          <li style="font-size:16px;color: #666666;font-weight: bold;">此區會顯示您遭人檢舉且經管理員認證檢舉成功之商品團體</li>
          <li style="font-size:16px;color: #666666;font-weight: bold;">被檢舉之商品團體無法再進行商品及訂單狀態的更動</li>
          <li style="font-size:16px;color: #666666;font-weight: bold;">僅保留討論區之功能供買賣雙方溝通</li>
          <li style="font-size:16px;color: #666666;font-weight: bold;">此商品團體也不會顯示於賣場中</li>
        </ul>
        <p>點擊此按鈕可查看該團體被檢舉之相關資訊</p>
        <p style="font-size:16px;color: #d55858;font-weight: bold;">
      請您與已喊單的買家自行協調是否繼續交易以及退款、退貨之相關事項<br>
      若有任何糾紛可尋求平台協助處理!!感謝您的配合</p>
      </div>
    </div>
  </div>
</div>

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