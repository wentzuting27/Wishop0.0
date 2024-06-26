<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <?php
    date_default_timezone_set('Asia/Taipei');
    $link=mysqli_connect('localhost','root','12345678','wishop');
    $wish_id=$_GET["wish_id"];
    $sql="select * from wish
    natural join account
    where wish_id=$wish_id";
    $result=mysqli_query($link,$sql);
    while($row=mysqli_fetch_assoc($result))
    {
      $account=$row["account"];
      $user_name=$row["user_name"];
      $user_avatar=$row["user_avatar"];
      $wish_name=$row["wish_name"];
      $wish_narrat=$row["wish_narrat"];
      $wish_link=$row["wish_link"];
      $wish_start=$row["wish_start"];
      $wish_end=$row["wish_end"];
      $wish_state=$row["wish_state"];
    }
  ?>

  <title><?php echo $wish_name; ?></title>
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

<body class="page-portfolio">
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
          <li><a href="../index/portfolio.php" >購物</a></li>
          <li><a href="../index/groupshop.php">團購</a></li>
          <li><a href="../wish/wish.php" class="active">許願池</a></li>

          <?php
            if(!empty($_SESSION['user_name'])){
              echo '
 

              <li class="dropdown"><a href="../profile/Profile_settings.php"><img src="',$_SESSION["user_avatar"],'" class="nav-photo"></a>
                <ul>
                  <li><a style="color:#FFF;font-weight: 600;margin-bottom: 0px;">',$_SESSION["user_name"],'</a></li>
                  <hr>';
                  if(isset($_SESSION["user_shop_id"])){
                    echo'
                    <li><a href="../shop/shop.php?shop_id=', $_SESSION['user_shop_id'] . '" style="font-weight: 600;">我的賣場</a></li>';
                  }
                  if($_SESSION['permissions']==2){
                    echo'
                    <li><a href="../shop/Report_review.php" style="font-weight: 600;">檢舉審核</a></li>';
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

  <main id="main">

  

    <section id="wish-details-hero">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
  
          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(https://i.pinimg.com/564x/bf/f3/7e/bff37e041a3114c7b318665ff2de4964.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown"><?php echo $wish_name; ?></h2>               
              </div>
            </div>
          </div>
  
      </div>
    </section><!-- End Hero -->
    



    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <section id="breadcrumbs" class="breadcrumbs">
          <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <ol>
                    <li><a href="wish.php">許願區</a></li>
                    <li>許願詳情</li>
                </ol>
                <div class="d-flex">
                  <?php
                    $sql="select * from wish where wish_id='$wish_id'";
                    $result=mysqli_query($link,$sql);

                    if($row=mysqli_fetch_assoc($result))
                    {
                      if(!isset($_SESSION["account"])){
                        echo '
                        <button type="button" class="btn insert_button" disabled>我要出價(請先登入)</button>&nbsp;&nbsp;';
                      }elseif(strtotime($wish_end) < strtotime(date("Y-m-d"))){
                        if($wish_state==1){
                          echo '
                          <button type="button" class="btn button_success" style="background-color:#83c57e" disabled>許願成功</button>';
                        }elseif($wish_state==2){
                          echo '
                          <button type="button" class="btn button_fail" style="background-color:#d55858" disabled>許願失敗</button>';
                        }
                      }elseif($_SESSION["account"]==$row["account"]){//登入的是許願的人
                        $sql_bid="select * from bid where wish_id='$wish_id'";
                        $result_bid=mysqli_query($link,$sql_bid);
                        $count_bid=mysqli_num_rows($result_bid);
                        if($count_bid==0){
                          echo '
                          <button class="button-cancel me-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">刪除願望</button>';
                        }else{
                          echo '
                          <button class="button-cancel me-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">刪除願望</button>';
                        }
                      }elseif($_SESSION["account"]!=$row["account"] && $count_shop==0){
                        echo'
                        <button type="button" class="btn insert_button" disabled>欲出價請先建立賣場</button>&nbsp;&nbsp;';
                      }elseif($_SESSION["account"]!=$row["account"]){
                        $sql_bid_y_or_n="select * from bid
                        where shop_id='{$_SESSION["user_shop_id"]}' and wish_id=$wish_id";
                        $result_bid_y_or_n=mysqli_query($link,$sql_bid_y_or_n);
                        if(mysqli_num_rows($result_bid_y_or_n)==0){
                          echo '
                          <button class="button-cancel" data-bs-toggle="modal" data-bs-target="#staticBackdrop3"><i class="fa-solid fa-wand-sparkles"></i>&nbsp;我要出價</button>';
                        }else{
                          echo '
                          <button type="button" class="btn insert_button" disabled>已出價</button>&nbsp;&nbsp;';
                        }
                      }
                    }
                  ?>  

                    <!-- Modal 刪除願望(無人出價) -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                          <h5 class="modal-title" id="staticBackdropLabel">刪除願望</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                          當前沒有賣家出價，您確定要刪除這個願望嗎？請注意，一旦刪除，您的許願次數將無法回復！
                          </div>
                          <div class="modal-footer">
                            <a href="wish_in_de.php?wish_id=<?php echo $wish_id; ?>&method=刪除願望"><button type="button" class="btn insert_button">確定刪除</button></a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Modal 刪除願望 -->
                    <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel2" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                          <h5 class="modal-title" id="staticBackdropLabel2">刪除願望</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                          目前此許願已有賣家出價，故無法取消此次的許願，還望您的諒解~
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Modal 填寫出價資訊 -->
                    <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel3" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel3">填寫出價資訊</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <form method="post" action="bid_in_up.php" enctype="multipart/form-data"><!--用於檔案圖片上傳-->
                            <input type="hidden" name="method" class="form-control" style="width: 100%;" value="in">
                            <input type="hidden" name="wish_id" class="form-control" style="width: 100%;" value="<?php echo $wish_id; ?>">  
                            <div class="modal-body">
                              <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label">商品團名*</label>
                                <div class="col-sm-8">
                                <input type="text" name="group_name" class="form-control" required>
                                </div>
                              </div>
                              <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label">國家</label>
                                <div class="col-sm-8">
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
                                </div>
                              </div>
                              <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label">商團封面*</label>
                                <div class="col-sm-8">
                                <input class="form-control" id="formFile" type="file" name="group_bg" style="width:503px;" required>
                                </div>
                              </div>
                              <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label">商團敘述*</label>
                                <div class="col-sm-8">
                                <textarea name="commodity_group_narrate" class="form-control" required></textarea>
                                </div>
                              </div>
                              <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label">原商品連結</label>
                                <div class="col-sm-8">
                                <input type="text" name="group_link" class="form-control">
                                </div>
                              </div>
                              <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label">願意出售價格(或範圍)*</label>
                                <div class="col-sm-8">
                                <input type="text" name="bid_price" class="form-control" required>
                                </div>
                              </div>
                              <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label">最低成團人數*</label>
                                <div class="col-sm-8">
                                <input type="number" name="bid_people" class="form-control" required>
                                </div>
                              </div>
                              <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label">主題</label>
                                <div class="col-sm-8">
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
                                </div>
                              </div>
                            </div>  
                            <div class="modal-footer">
                              <button type="submit" class="btn insert_button">確定出價</button>
                            </div>
                          </form>  
                        </div>
                        </div>
                    
                </div>
                
            </div>
          </div>
        </section><!-- End Breadcrumbs -->

        <div class="row gy-4">

          <div class="col-lg-5 entries">

            <article class="entry">

              <div class="entry-img">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner fixed-image2">
                    <?php
                      $a=1;
                      $sql_photo="select * from wish_photo where wish_id='$wish_id'";
                      $result_photo=mysqli_query($link,$sql_photo);
                      while($row_photo=mysqli_fetch_assoc($result_photo))
                      {
                        echo'
                        <div class="carousel-item ';if($a==1){echo 'active';}echo'">
                          <img src="',$row_photo["wish_photo_link"],'" class="d-block w-100" alt="...">
                        </div>';
                        $a++;
                      } 
                    ?>
                    
                    
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
              </div>             

            </article><!-- End blog entry -->


          </div><!-- End blog entries list -->

          <div class="col-lg-7">
            <section id="wish-details" class="wish-details"> 
              <div class="container" data-aos="fade-up">    
                <div class="wish-info">
                  <div class="wish-details-title flex-container">
                    <h3 style="display: flex; justify-content: space-between;">許願資訊</h3>
                    <?php 
                      $sql_likewish="select * from like_wish
                      where wish_id='$wish_id' and account='{$_SESSION["account"]}'";
                      $result_likewish=mysqli_query($link,$sql_likewish);
                      if(isset($_SESSION["account"])){
                        if(mysqli_num_rows($result_likewish)==0){
                          echo '<a href="like_in_de.php?wish_id=',$wish_id,'&page=wish-details&method=in&like=wish2"><button type="button" class="btn insert_button">收藏許願</button></a>';
                        }else{
                          echo '<a href="like_in_de.php?wish_id=',$wish_id,'&page=wish-details&method=de&like=wish2"><button type="button" class="btn insert_button">取消收藏</button></a>';
                        }
                      }
                    ?>                   
                  </div>
                  <br>
                  <?php
                    $sql_likepeople="select * from like_wish where wish_id='$wish_id'";
                    $result_likepeople=mysqli_query($link,$sql_likepeople);
                    $count_likepeople = mysqli_num_rows($result_likepeople);
                  ?>
                  <ul>
                    <li><strong><i class="bi bi-person"></i>&nbsp;許願者</strong>: <a href="#"><img src="<?php echo $user_avatar ?>" style="width:20px;height:20px; border-radius: 10px;" alt="">&nbsp;<?php echo $user_name ?></a></li>
                    <li><strong><i class="bi bi-clock"></i>&nbsp;許願日期</strong>: <?php echo $wish_start ?></li>
                    <li><strong><i class="fa-regular fa-calendar-xmark"></i>&nbsp;許願截止日期</strong>: <?php echo $wish_end ?></li>
                    <li><strong><i class="fa-solid fa-link"></i>&nbsp;相關連結</strong>: <a href="<?php echo $wish_link ?>" target="_blank">相關連結</a></li>
                    <li><strong><i class="bi bi-heart heart-icon"></i>&nbsp;收藏人數</strong>: &nbsp;<?php echo $count_likepeople ?>&nbsp;</li>
                    <li><strong><i class="bi bi-chat-dots"></i>&nbsp;敘述</strong>: </li>
                      <p class="scrollable-row"><?php echo nl2br($wish_narrat) ?></p>
                  </ul>
                </div>              
              </div>
            </section>  


          </div><!-- End blog sidebar -->

          <div class="col-lg-12">
            <div class="sidebar">

              <h3 class="sidebar-title">主題</h3>
              <div class="sidebar-item tags">
                <ul>
                <?php
                  if ($_GET['wish_id'] != '') {
                    $wish_id = $_GET['wish_id'];

                    $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');
                    $sql_wishtopic = "SELECT * from wish_topic 
                    where wish_id = '$wish_id'
                    ";


                    $result_wishtopic = mysqli_query($link, $sql_wishtopic);

                    if (mysqli_num_rows($result_wishtopic) > 0) {
                      while ($row_wishtopic = mysqli_fetch_assoc($result_wishtopic)) {
                        if ($row_wishtopic['topic'] == 1) {
                          echo '<a href="../index/topic.php?topic=1"><span class="topic" name="topic" value="1">#服飾</span></a>';
                        } elseif ($row_wishtopic['topic'] == 2) {
                            echo '<a href="../index/topic.php?topic=2"><span class="topic" name="topic" value="2">#美妝</span></a>';
                        } elseif ($row_wishtopic['topic'] == 3) {
                            echo '<a href="../index/topic.php?topic=3"><span class="topic" name="topic" value="3">#動漫</span></a>';
                        } elseif ($row_wishtopic['topic'] == 4) {
                            echo '<a href="../index/topic.php?topic=4"><span class="topic" name="topic" value="4">#明星</span></a>';
                        } elseif ($row_wishtopic['topic'] == 5) {
                            echo '<a href="../index/topic.php?topic=5"><span class="topic" name="topic" value="5">#日常</span></a>';
                        } elseif ($row_wishtopic['topic'] == 6) {
                            echo '<a href="../index/topic.php?topic=6"><span class="topic" name="topic" value="6">#數位3C</span></a>';
                        } elseif ($row_wishtopic['topic'] == 7) {
                            echo '<a href="../index/topic.php?topic=7"><span class="topic" name="topic" value="7">#美食</span></a>';
                        } elseif ($row_wishtopic['topic'] == 8) {
                            echo '<a href="../index/topic.php?topic=8"><span class="topic" name="topic" value="8">#運動</span></a>';
                        } elseif ($row_wishtopic['topic'] == 9) {
                            echo '<a href="../index/topic.php?topic=9"><span class="topic" name="topic" value="9">#精品</span></a>';
                        } elseif ($row_wishtopic['topic'] == 10) {
                            echo '<a href="../index/topic.php?topic=10"><span class="topic" name="topic" value="10">#其他</span></a>';
                        } else {
                            echo '<a href="#"><span class="topic" name="topic" value="10">無</span></a>';
                        }
                      }
                    }else{
                      echo '無';
                    }
                  }
                  ?>

                </ul>
              </div><!-- End sidebar tags-->

            </div><!-- End sidebar -->
          </div>

      </div>
    </section><!-- End Blog Single Section -->

    <div class="container" data-aos="fade-up">
      <div class="seven">
        <h1>賣家出價</h1>
      </div>
    </div>
    
  </main><!-- End #main -->

  <!-- ======= bid Section ======= -->
  <section id="bid" class="bid">
    <div class="container">

      <div class="row">

        
          <?php
            $sql="select * from bid
            natural join shop
            natural join commodity_group
            where wish_id='$wish_id'";
            $result=mysqli_query($link,$sql);
            while($row=mysqli_fetch_assoc($result))
            {
              $commodity_group_id=$row['commodity_group_id'];
              $close_order_date=$row['close_order_date'];
              if($_SESSION["account"]==$row["account"]){
                $group_link="../lisa/InnerBuyer.php?commodity_group_id=$commodity_group_id";
              }else{
                $group_link = "../lisa/InnerPage.php?commodity_group_id=$commodity_group_id";
              }

              echo'
              <div class="col-lg-6">
                <div class="member d-flex">
                  <div class="pic"><img src="',$row["shop_avatar"],'" class="img-fluid" alt=""></div>
                  <div class="member-info">
                    <h4>',$row["shop_name"],'</h4>
                    <div class="flex-container">
                      <span><i class="fa-regular fa-clock"></i>&nbsp;',$row["bid_time"],'</span>
                      <a href="',$group_link,'" class="reply"><i class="bi bi-link"></i> 開團連結</a>
                    </div>
                    <table>
                      <tr>
                        <td><i class="fa-solid fa-dollar-sign"></i>&nbsp;出價:</td>
                        <td style="text-align: right;">',$row["bid_price"],'&nbsp;</td>
                        <td><i class="fa-solid fa-user-check"></i>&nbsp;目前意願人數:</td>
                        <td style="text-align: right;">';
                        
                        $sql_want="select * from withgroup where commodity_group_id='$commodity_group_id'";
                        $result_want=mysqli_query($link,$sql_want);
                        echo mysqli_num_rows($result_want);//取得結果集的行數

                        echo'&nbsp;</span></td>
                      </tr>
                      <tr>
                        <td><i class="fa-solid fa-user"></i>&nbsp;最低成團人數:</td>
                        <td style="text-align: right;">',$row["bid_people"],'&nbsp;</td>
                        <td><i class="fa-solid fa-face-smile"></i>&nbsp;狀態:</td>
                        <td style=";text-align: right;">';
                        $sql_state="select commodity_group_state from commodity_group
                        where commodity_group_id='$commodity_group_id'";
                        $result_state=mysqli_query($link,$sql_state);
                        if($row_state=mysqli_fetch_assoc($result_state))
                        {
                          $state=$row_state["commodity_group_state"];
                          if($state==3){ //未成團
                            echo '<span style="color:indianred;font-weight:bold">未成團</sapn>';
                          }else{ //進行中or已結束
                            echo '<span style="color: rgb(123, 195, 150);font-weight:bold">已成團</sapn>';
                          }
                        }

                        echo '</td>
                      </tr>
                      <tr>
                        <td colspan="4">
                          <br>';
                            $sql_withgroup_y_or_n="select * from withgroup
                            where commodity_group_id='$commodity_group_id' and account='{$_SESSION["account"]}'";
                            $result_withgroup_y_or_n=mysqli_query($link,$sql_withgroup_y_or_n);
                            
                            if(!isset($_SESSION["account"])){
                              echo'<button type="button" class="btn insert_button" style="display: block;width: 100%;" disabled>尚未登入</button>';
                            }elseif(strtotime($wish_end) < date("Y-M-D")){ //願望期限已到
                              echo'<button type="button" class="btn insert_button" style="display: block;width: 100%;" disabled>已截止</button>';
                            }elseif($_SESSION["account"]==$row["account"]){ //登入的帳號是出價的賣家
                              if($state==3){
                                echo'<button type="button" class="btn insert_button" style="display: block;width: 100%;" data-bs-toggle="modal" data-bs-target="#group_state',$commodity_group_id,'">成團</button>';
                                echo '<!-- insert_group_Modal -->
                                <div class="modal fade" id="group_state',$commodity_group_id,'" tabindex="-1" aria-labelledby="group_stateLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="group_stateLabel">選擇結單時間</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">
                                        <form method="post" action="bid_in_up.php">
                                        <input type="hidden" name="method" class="form-control" style="width: 100%;" value="成團">
                                        <input type="hidden" name="commodity_group_id" class="form-control" style="width: 100%;" value="';echo $commodity_group_id;echo '">
                                        <input type="hidden" name="wish_id" class="form-control" style="width: 100%;" value="';echo $wish_id;echo '">
                                          <table width="100%" class="insert_group_form">
                                            <tr>
                                              <td width="10%">結單日期</td>
                                              <td width="90%" style="text-align: left;"><input type="datetime-local" name="end" class="form-control" style="width: 100%;" value=""></td>
                                            </tr>
                                            <tr>
                                              <td colspan="2"><button type="submit" class="btn insert_button" style="display: block;width: 100%;">確認成團</button></td>
                                            </tr>
                                          </table>
                                          
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                </div><!-- End insert_group_Modal -->';
                              }else{
                                echo'<button type="button" class="btn insert_button" style="display: block;width: 100%;" disabled>已成團</button>';
                              }
                            }else{
                              if($state==2){
                                echo'<button type="button" class="btn insert_button" style="display: block;width: 100%;" disabled>已結束</button>';
                              }elseif($close_order_date !== NULL && strtotime($close_order_date) < strtotime('now')){ //有結單時間且時間已過
                                echo'<button type="button" class="btn insert_button" style="display: block;width: 100%;" disabled>已結單</button>';
                              }elseif($_SESSION["account"]!=$row["account"] && mysqli_num_rows($result_withgroup_y_or_n)==0){ //登入的人不是出價的賣家且沒有喊過單(跟團)
                                echo '
                                <button type="button" class="btn insert_button" style="display: block;width: 100%;" data-bs-toggle="modal" data-bs-target="#withgroup',$commodity_group_id,'">我要跟團</button>';
                                echo '<!-- insert_group_Modal -->
                                <div class="modal fade" id="withgroup',$commodity_group_id,'" tabindex="-1" aria-labelledby="withgroupLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="withgroupLabel">確定跟團?</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">
                                        <p style="font-size:18px;color:#d55858">跟團須知：</p>
                                        <p>請勿跟團後不購買產品，否則列入黑名單！！！</p>
                                        <p>跟團也無法退團</p>
                                        <p style="color:#b9b0c8">跟團前請深思熟慮!若還在觀望可改選擇收藏此團~</p>
                                            
                                          
                                      </div>
                                      <div class="modal-footer">
                                      <a href="bid_in_up.php?commodity_group_id=',$commodity_group_id,'&wish_id=',$wish_id,'&method=跟團"><button type="button" class="btn insert_button" data-bs-dismiss="modal">確定跟團</button></a>
                                    </div>
                                    </div>
                                  </div>
                                </div><!-- End insert_group_Modal -->';
                              }else{
                                echo'<button type="button" class="btn insert_button" style="display: block;width: 100%;" disabled>已跟團</button>';
                              }
                            }
                          

                          echo'
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>';
              
            } 
          ?>

        
      </div>

    </div>
  </section><!-- End bid Section -->


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