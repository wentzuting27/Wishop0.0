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
      echo '<a href="like_in_de.php?shop_id=',$shop_id,'&page=shop_evaluate&method=in&like=shop"><button type="button" class="btn insert_button"><i class="fa-regular fa-heart"></i>&nbsp;收藏賣場</button></a>';
    }else{
      echo '<a href="like_in_de.php?shop_id=',$shop_id,'&page=shop_evaluate&method=de&like=shop"><button type="button" class="btn delike_button"><i class="fa-solid fa-heart"></i>&nbsp;取消收藏</button></a>';
    }
  }

  if ($shop_id == $_SESSION["user_shop_id"]) {
    echo '<button type="button" class="btn insert_button" data-bs-toggle="modal" data-bs-target="#up_shop_modal" style="margin-left: 20px;"><i class="fa-solid fa-pen"></i>&nbsp;編輯賣場</button>';
  }
  echo '
    <!-- <button type="button" class="btn insert_button" data-bs-toggle="modal" data-bs-target="#insert_group_Modal"><i class="fa-solid fa-pen"></i>&nbsp;編輯賣場</button> -->
    <!-- <button type="button" class="btn insert_button"><i class="fa-regular fa-heart"></i>&nbsp;關注賣場</button> -->
    <!-- <button type="button" class="btn insert_button"><i class="fa-solid fa-heart"></i>&nbsp;已關注</button> -->
    <!-- <button type="button" class="btn insert_button"><i class="fa-regular fa-comments"></i>&nbsp;聯絡賣家</button> -->
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
        <li><a href="./shop_evaluate.php?shop_id=<?php echo $shop_id;?>" class="nav-link scrollto   active"><i class="fa-regular fa-comment-dots"></i> <span>賣場評價</span></a></li>
        <!-- <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li> -->
      </ul>
    </nav><!-- .nav-menu -->

  </header><!-- End Header -->

  <div class="min_nav">
    <button id="triggerBtn"><i class="fa-regular fa-comment-dots"></i></button>
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
                    <input type="hidden" name="page" class="form-control" style="width: 100%;" value="shop_evaluate">
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
                    <input type="hidden" name="page" class="form-control" style="width: 100%;" value="shop_evaluate">
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
                          <td width="10%"><a href="social_in_up_de.php?social_id=',$row_social["social_id"],'&page=shop_evaluate" class="nav-link scrollto"><i class="fa-solid fa-xmark"></i></a></td>
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

                  <?php
                    $sql="select *
                    from evaluate
                    natural join order_details
                    natural join commodity
                    natural join commodity_group
                    where shop_id=$shop_id and star='5'
                    group by order_id
                    ORDER BY evaluate_time DESC";
                    $result=mysqli_query($link,$sql);
                    while($row=mysqli_fetch_assoc($result))
                    {
                      $sql_account="SELECT *
                      FROM evaluate
                      NATURAL JOIN  `order`
                      NATURAL JOIN `account`
                      where evaluate_id='{$row["evaluate_id"]}'";
                      $result_account=mysqli_query($link,$sql_account);
                      while($row_account=mysqli_fetch_assoc($result_account))
                      {
                        $order_account_avatar=$row_account["user_avatar"];
                        $order_account_name=$row_account["user_name"];
                      }
                      echo '
                      <div class="col-lg-4">
                    
                        <div class="evaluate_card">
                          <table class="evaluate_table">
                            <tr>
                              <td width="15%"><img src="',$order_account_avatar,'" class="people_photo"></td>
                              <td width="60%">
                                <span>',$order_account_name,'</span><br>
                                <p>',$row["commodity_group_name"],'</p>
                              </td>
                              <td width="25%" style="vertical-align: top;" align="right"><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i></td>
                            </tr>
                            <tr>
                              <td colspan="3" ><div class="';
                              $sql_ephoto="SELECT *
                              FROM evaluate_photo
                              where evaluate_id='{$row["evaluate_id"]}'";
                              $result_ephoto=mysqli_query($link,$sql_ephoto);
                              if(mysqli_num_rows($result_ephoto)==0){
                                echo 'scrollable-row-no-photo';
                              }else{
                                echo 'scrollable-row';
                              }
                              echo '">',nl2br($row['evaluate']),'</div></td>
                            </tr>';
                            if(mysqli_num_rows($result_ephoto)>0){
                              echo '
                            <tr>
                              <td colspan="3" style="height: 70px;"><div class="scrollable-img" onmousedown="startDrag(event)" id="scrollable-img-container-' . $row["evaluate_id"] . '>';
                              while($row_ephoto=mysqli_fetch_assoc($result_ephoto))
                              {
                                echo '<img src="',$row_ephoto["evaluate_photo"],'" class="goods_photo">';
                              }
                              echo '
                              </div></td>
                            </tr>';
                          }
                          echo '
                          </table>
                        </div>
                        
                      </div>
                      ';
                    }
                  ?>
                    
                </div>
              </div>
            
              <!-- End 5star -->
              

    
              <!-- 4star -->
              <div role="tabpanel" class="col-lg-12  tab-pane fade" id="4star">
                <div class="row">
    
                  <?php
                    $sql="select *
                    from evaluate
                    natural join order_details
                    natural join commodity
                    natural join commodity_group
                    where shop_id=$shop_id and star='4'
                    group by order_id";
                    $result=mysqli_query($link,$sql);
                    while($row=mysqli_fetch_assoc($result))
                    {
                      $sql_account="SELECT *
                      FROM evaluate
                      NATURAL JOIN  `order`
                      NATURAL JOIN `account`
                      where evaluate_id='{$row["evaluate_id"]}'";
                      $result_account=mysqli_query($link,$sql_account);
                      while($row_account=mysqli_fetch_assoc($result_account))
                      {
                        $order_account_avatar=$row_account["user_avatar"];
                        $order_account_name=$row_account["user_name"];
                      }
                      echo '
                      <div class="col-lg-4">
                    
                        <div class="evaluate_card">
                          <table class="evaluate_table">
                            <tr>
                              <td width="15%"><img src="',$order_account_avatar,'" class="people_photo"></td>
                              <td width="60%">
                                <span>',$order_account_name,'</span><br>
                                <p>',$row["commodity_group_name"],'</p>
                              </td>
                              <td width="25%" style="vertical-align: top;" align="right"><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i></td>
                            </tr>
                            <tr>
                              <td colspan="3" ><div class="';
                              $sql_ephoto="SELECT *
                              FROM evaluate_photo
                              where evaluate_id='{$row["evaluate_id"]}'";
                              $result_ephoto=mysqli_query($link,$sql_ephoto);
                              if(mysqli_num_rows($result_ephoto)==0){
                                echo 'scrollable-row-no-photo';
                              }else{
                                echo 'scrollable-row';
                              }
                              echo '">',nl2br($row['evaluate']),'</div></td>
                            </tr>';
                              if(mysqli_num_rows($result_ephoto)>0){
                                echo '
                                <tr>
                                <td colspan="3" style="height: 70px;"><div class="scrollable-img" onmousedown="startDrag(event)" id="scrollable-img-container-' . $row["evaluate_id"] . '>';
                                while($row_ephoto=mysqli_fetch_assoc($result_ephoto))
                                {
                                  echo '<img src="',$row_ephoto["evaluate_photo"],'" class="goods_photo">';
                                }
                                echo '
                                </div></td>
                              </tr>';
                            }
                            echo '
                            </table>
                          </div>
                          
                        </div>
                        ';
                          }
                  ?>
                  
                    
                </div>
          
              </div>
    
    
              <!-- End 4star -->
    
              <!-- 3star -->
              <div role="tabpanel" class="col-lg-12  tab-pane fade" id="3star">
                <div class="row">
                <?php
                    $sql="select *
                    from evaluate
                    natural join order_details
                    natural join commodity
                    natural join commodity_group
                    where shop_id=$shop_id and star='3'
                    group by order_id";
                    $result=mysqli_query($link,$sql);
                    while($row=mysqli_fetch_assoc($result))
                    {
                      $sql_account="SELECT *
                      FROM evaluate
                      NATURAL JOIN  `order`
                      NATURAL JOIN `account`
                      where evaluate_id='{$row["evaluate_id"]}'";
                      $result_account=mysqli_query($link,$sql_account);
                      while($row_account=mysqli_fetch_assoc($result_account))
                      {
                        $order_account_avatar=$row_account["user_avatar"];
                        $order_account_name=$row_account["user_name"];
                      }
                      echo '
                      <div class="col-lg-4">
                    
                        <div class="evaluate_card">
                          <table class="evaluate_table">
                            <tr>
                              <td width="15%"><img src="',$order_account_avatar,'" class="people_photo"></td>
                              <td width="60%">
                                <span>',$order_account_name,'</span><br>
                                <p>',$row["commodity_group_name"],'</p>
                              </td>
                              <td width="25%" style="vertical-align: top;" align="right"><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i></td>
                            </tr>
                            <tr>
                              <td colspan="3" ><div class="';
                              $sql_ephoto="SELECT *
                              FROM evaluate_photo
                              where evaluate_id='{$row["evaluate_id"]}'";
                              $result_ephoto=mysqli_query($link,$sql_ephoto);
                              if(mysqli_num_rows($result_ephoto)==0){
                                echo 'scrollable-row-no-photo';
                              }else{
                                echo 'scrollable-row';
                              }
                              echo '">',nl2br($row['evaluate']),'</div></td>
                            </tr>';
                              if(mysqli_num_rows($result_ephoto)>0){
                                echo '
                                <tr>
                                <td colspan="3" style="height: 70px;"><div class="scrollable-img" onmousedown="startDrag(event)" id="scrollable-img-container-' . $row["evaluate_id"] . '>';
                                while($row_ephoto=mysqli_fetch_assoc($result_ephoto))
                                {
                                  echo '<img src="',$row_ephoto["evaluate_photo"],'" class="goods_photo">';
                                }
                                echo '
                                </div></td>
                              </tr>';
                            }
                            echo '
                            </table>
                          </div>
                          
                        </div>
                        ';
                          }
                  ?>
                  
                    
                </div>
              </div>
    
    
              <!-- End 3star-->
    
              <!-- 2star -->
              <div role="tabpanel" class="col-lg-12  tab-pane fade" id="2star">
                <div class="row">
                <?php
                    $sql="select *
                    from evaluate
                    natural join order_details
                    natural join commodity
                    natural join commodity_group
                    where shop_id=$shop_id and star='2'
                    group by order_id";
                    $result=mysqli_query($link,$sql);
                    while($row=mysqli_fetch_assoc($result))
                    {
                      $sql_account="SELECT *
                      FROM evaluate
                      NATURAL JOIN  `order`
                      NATURAL JOIN `account`
                      where evaluate_id='{$row["evaluate_id"]}'";
                      $result_account=mysqli_query($link,$sql_account);
                      while($row_account=mysqli_fetch_assoc($result_account))
                      {
                        $order_account_avatar=$row_account["user_avatar"];
                        $order_account_name=$row_account["user_name"];
                      }
                      echo '
                      <div class="col-lg-4">
                    
                        <div class="evaluate_card">
                          <table class="evaluate_table">
                            <tr>
                              <td width="15%"><img src="',$order_account_avatar,'" class="people_photo"></td>
                              <td width="60%">
                                <span>',$order_account_name,'</span><br>
                                <p>',$row["commodity_group_name"],'</p>
                              </td>
                              <td width="25%" style="vertical-align: top;" align="right"><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i></td>
                            </tr>
                            <tr>
                              <td colspan="3" ><div class="';
                              $sql_ephoto="SELECT *
                              FROM evaluate_photo
                              where evaluate_id='{$row["evaluate_id"]}'";
                              $result_ephoto=mysqli_query($link,$sql_ephoto);
                              if(mysqli_num_rows($result_ephoto)==0){
                                echo 'scrollable-row-no-photo';
                              }else{
                                echo 'scrollable-row';
                              }
                              echo '">',nl2br($row['evaluate']),'</div></td>
                            </tr>';
                              if(mysqli_num_rows($result_ephoto)>0){
                                echo '
                                <tr>
                                <td colspan="3" style="height: 70px;"><div class="scrollable-img" onmousedown="startDrag(event)" id="scrollable-img-container-' . $row["evaluate_id"] . '>';
                                while($row_ephoto=mysqli_fetch_assoc($result_ephoto))
                                {
                                  echo '<img src="',$row_ephoto["evaluate_photo"],'" class="goods_photo">';
                                }
                                echo '
                                </div></td>
                              </tr>';
                            }
                            echo '
                            </table>
                          </div>
                          
                        </div>
                        ';
                          }
                  ?>
                    
                </div>
              </div>
    
    
              <!-- End 2star-->
    
              <!-- 1star -->
              <div role="tabpanel" class="col-lg-12  tab-pane fade" id="1star">
              <div class="row">
                <?php
                    $sql="select *
                    from evaluate
                    natural join order_details
                    natural join commodity
                    natural join commodity_group
                    where shop_id=$shop_id and star='1'
                    group by order_id";
                    $result=mysqli_query($link,$sql);
                    while($row=mysqli_fetch_assoc($result))
                    {
                      $sql_account="SELECT *
                      FROM evaluate
                      NATURAL JOIN  `order`
                      NATURAL JOIN `account`
                      where evaluate_id='{$row["evaluate_id"]}'";
                      $result_account=mysqli_query($link,$sql_account);
                      while($row_account=mysqli_fetch_assoc($result_account))
                      {
                        $order_account_avatar=$row_account["user_avatar"];
                        $order_account_name=$row_account["user_name"];
                      }
                      echo '
                      <div class="col-lg-4">
                    
                        <div class="evaluate_card">
                          <table class="evaluate_table">
                            <tr>
                              <td width="15%"><img src="',$order_account_avatar,'" class="people_photo"></td>
                              <td width="60%">
                                <span>',$order_account_name,'</span><br>
                                <p>',$row["commodity_group_name"],'</p>
                              </td>
                              <td width="25%" style="vertical-align: top;" align="right"><i class="fa-solid fa-wand-sparkles"></i></td>
                            </tr>
                            <tr>
                              <td colspan="3" ><div class="';
                              $sql_ephoto="SELECT *
                              FROM evaluate_photo
                              where evaluate_id='{$row["evaluate_id"]}'";
                              $result_ephoto=mysqli_query($link,$sql_ephoto);
                              if(mysqli_num_rows($result_ephoto)==0){
                                echo 'scrollable-row-no-photo';
                              }else{
                                echo 'scrollable-row';
                              }
                              echo '">',nl2br($row['evaluate']),'</div></td>
                            </tr>';
                              if(mysqli_num_rows($result_ephoto)>0){
                                echo '
                                <tr>
                                <td colspan="3" style="height: 70px;"><div class="scrollable-img" onmousedown="startDrag(event)" id="scrollable-img-container-' . $row["evaluate_id"] . '>';
                                while($row_ephoto=mysqli_fetch_assoc($result_ephoto))
                                {
                                  echo '<img src="',$row_ephoto["evaluate_photo"],'" class="goods_photo">';
                                }
                                echo '
                                </div></td>
                              </tr>';
                            }
                            echo '
                            </table>
                          </div>
                          
                        </div>
                        ';
                          }
                  ?>
                    
                </div>
              </div>
    
    
              <!-- End 1star-->
    
            </div>
    
          
    
        </section><!-- End evaluate Section -->
          
    
      </div>
    </section><!-- End shop_group Section -->
    
      </main><!-- End #main -->

<!-- Modal -->
<?php
$sql = "select *
from shop
where shop_id='$shop_id'";
$result = mysqli_query($link, $sql);
while ($row = mysqli_fetch_assoc($result)) {
  $shop_avatar = $row["shop_avatar"];
  $shop_bg = $row["shop_bg"];
  $shop_narrat = $row["shop_narrat"];
  $shop_name = $row["shop_name"];
}
?>
<div class="modal fade" id="up_shop_modal" tabindex="-1" aria-labelledby="update_shop_ModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="update_shopLabel">編輯賣場</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="shop_up.php" enctype="multipart/form-data">
        <input type="hidden" name="shop_id" class="form-control" style="width: 100%;" value="<?php echo $shop_id;?>">
        <input type="hidden" name="page" class="form-control" style="width: 100%;" value="shop_evaluate">
          <table width="100%" class="insert_group_form">
            <tr>
              <td width="10%">賣場名</td>
              <td width="90%"><input type="text" name="shop_name" class="form-control" value="<?php echo $shop_name;?>"></td>
            </tr>
            <tr>
              <td>賣場頭貼</td>
              <td><input class="form-control" type="file" id="shop_avatar" name="shop_avatar"></td>
            </tr>
            <tr>
              <td></td>
              <td>
                <table width="100%">
                  <tr>
                    <td width="30%"><img src="<?php echo $shop_avatar; ?>" class="img-fluid rounded-circle">
                    </td>
                    <td width="30%"><img src="../files/左箭頭.png" class="img-fluid rounded-circle" width="50px">
                    </td>
                    <td width="30%">
                      <div id="imagePreview"></div>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
            <tr>
              <td>賣場背景</td>
              <td>
                <input class="form-control" type="file" id="shop_bg2" name="shop_bg"
                  onchange="displaySelectedImage(event)">
              </td>
            </tr>
            <tr>
              <td></td>
              <td>
                <table width="100%">
                  <tr>
                    <td width="30%"><img src="<?php echo $shop_bg; ?>" class="img-fluid"
                        style="width: 100%;height: 100px;"></td>
                    <td width="30%"><img src="../files/左箭頭.png" class="img-fluid rounded-circle" width="50px">
                    </td>
                    <td width="30%">
                      <img id="selectedImage" style="display: none; width: 100%;height: 100px;"
                        alt="Selected Image">
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
            <tr>
              <td width="10%">賣場簡介</td>
              <td width="90%"><textarea name="shop_narrat" rows="5" cols="50" class="form-control" with="100%"><?php echo htmlspecialchars($shop_narrat);?></textarea></td>
            </tr>

            <script>
              function displaySelectedImage(event) {
                const file = event.target.files[0];
                if (file) {
                  const reader = new FileReader();
                  reader.onload = function (e) {
                    const selectedImage = document.getElementById('selectedImage');
                    selectedImage.src = e.target.result;
                    selectedImage.style.display = 'block';
                  }
                  reader.readAsDataURL(file);
                }
              }
            </script>

            <tr>
              <td colspan="2"><button type="submit" class="btn insert_button"
                  style="display: block;width: 100%;">確認修改</button></td>
            </tr>
          </table>
        </form>
      </div>
    </div>
  </div>
</div>
<script>
  document.getElementById('shop_avatar').onchange = function (e) {
    var reader = new FileReader(); // 创建 FileReader 对象

    reader.onload = function (event) {
      var img = document.createElement('img'); // 创建图片元素
      img.src = event.target.result; // 设置图片源
      img.style.width = '220px'; // 设置图片宽度
      img.style.height = '220px'; // 设置图片高度
      img.style.borderRadius = '50%'; // 设置图片为圆形
      img.classList.add('img-fluid'); // 添加样式类

      var previewContainer = document.getElementById('imagePreview');
      previewContainer.innerHTML = ''; // 清空预览区域
      previewContainer.appendChild(img); // 添加图片到预览区域
    };

    // 读取文件内容
    reader.readAsDataURL(e.target.files[0]);
  };


</script>

<script>
  let isDragging = false;
  let startX, scrollLeft;

  document.querySelectorAll('.scrollable-img').forEach(function(element) {
    element.addEventListener('mousedown', startDrag);
  });

  function startDrag(e) {
    isDragging = true;
    startX = e.clientX;
    scrollLeft = this.scrollLeft;
    this.addEventListener('mousemove', drag);
    this.addEventListener('mouseup', stopDrag);
  }

  function drag(e) {
    if (!isDragging) return;
    const x = e.clientX;
    const walk = (x - startX) * 2; // 控制拖动速度
    this.scrollLeft = scrollLeft - walk;
  }

  function stopDrag() {
    isDragging = false;
    this.removeEventListener('mousemove', drag);
    this.removeEventListener('mouseup', stopDrag);
  }
</script>

  

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