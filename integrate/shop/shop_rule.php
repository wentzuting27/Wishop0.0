<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>賣場介面 - 賣場規則</title>
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
        <li><a href="./shop.php?shop_id=<?php echo $shop_id;?>" class="nav-link scrollto"><i class="bi bi-shop"></i><span>代購商品</span></a></li>
        <li><a href="./shop_time.php?shop_id=<?php echo $shop_id;?>" class="nav-link scrollto"><i class="bi bi-clock-history"></i> <span>限定開團</span></a></li>
        <li><a href="./shop_wish.php?shop_id=<?php echo $shop_id;?>" class="nav-link scrollto"><i class="fa-solid fa-wand-sparkles"></i><span>許願池</span></a></li>
        <li><a href="./shop_rule.php?shop_id=<?php echo $shop_id;?>" class="nav-link scrollto  active"><i class="fa-solid fa-file-circle-question"></i><span>賣場規則</span></a></li>
        <li><a href="./shop_evaluate.php?shop_id=<?php echo $shop_id;?>" class="nav-link scrollto"><i class="fa-regular fa-comment-dots"></i> <span>賣場評價</span></a></li>
        <!-- <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li> -->
      </ul>
    </nav><!-- .nav-menu -->

  </header><!-- End Header -->

  <div class="min_nav">
    <button id="triggerBtn"><i class="fa-solid fa-file-circle-question"></i></button>
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
    
        <!-- ======= Schedule Section ======= -->
        <section id="schedule" class="section-with-bg">
          
            
            <div class="flex-container">
              <!-- Section Title -->
              <div class="section-title" data-aos="fade-up">
                <h2><i class="fa-solid fa-file-circle-question"></i>&nbsp;&nbsp;賣場規則</h2>
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
                <button type="button" class="btn insert_button" data-bs-toggle="modal" data-bs-target="#insert_group_Modal"><i class="bi bi-patch-plus"></i>&nbsp;新增規則</button>
              </div>';
              }
              }
              
              ?>
              
              
              <!-- insert_group_Modal -->
              <div class="modal fade" id="insert_group_Modal" tabindex="-1" aria-labelledby="insert_group_ModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="insert_group_ModalLabel">新增規則</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form method="post" action="rule_in_up_de.php">
                      <input type="hidden" name="method" class="form-control" style="width: 100%;" value="in">
                      <input type="hidden" name="shop_id" class="form-control" style="width: 100%;" value="<?php echo $shop_id;?>">
                        <table width="100%" class="insert_group_form">
                          <tr>
                            <td width="10%">類型</td>
                            <td align="left" width="90%">
                              <input type="radio" name="rule_type" class="form-check-input" value="跟團須知">跟團須知&nbsp;&nbsp;
                              <input type="radio" name="rule_type" class="form-check-input" value="常見問題">常見問題
                            </td>
                          </tr>
                          <tr>
                            <td>標題</td>
                            <td><input type="text" name="title" class="form-control"></td>
                          </tr>
                          <tr>
                            <td>敘述</td>
                            <td><textarea class="form-control" rows="5" name="narrate"></textarea></td>
                          </tr>
                          <tr>
                            <td colspan="2"><button type="submit" class="btn insert_button" style="display: block;width: 100%;">確認新增</button></td>
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
                <a class="nav-link active" href="#day-1" role="tab" data-bs-toggle="tab"><i class="bi bi-patch-exclamation"></i>&nbsp;跟團須知</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#day-2" role="tab" data-bs-toggle="tab"><i class="bi bi-patch-question"></i>&nbsp;常見問題</a>
              </li>
            </ul>
    
            <div class="tab-content row justify-content-center" data-aos="fade-up" data-aos-delay="200">
    
              <!-- Schdule Day 1 -->
              <div role="tabpanel" class="col-lg-12 tab-pane fade show active" id="day-1">
    
                <!-- ======= Why Us Section ======= -->
                <section id="why-us" class="why-us section-bg">
                  <div class="container-fluid" data-aos="fade-up">
    
                    <div class="col-lg-12 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">
    
                      <div class="accordion-list">
                        <ul>
                        <?php
                        $i=1;
                        $sql="select *
                        from shop_rule
                        where shop_id='$shop_id' and type='跟團須知'";
                        $result=mysqli_query($link,$sql);
                        while($row=mysqli_fetch_assoc($result))
                        {
                          echo '
                          <li>
                            <a data-bs-toggle="collapse" ';if($i==1){echo 'class="collapse"';}else{echo 'class="collapsed"';} echo 'data-bs-target="#accordion-list-',$i,'">',$row["title"],'<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="accordion-list-',$i,'" ';if($i==1){echo 'class="collapse show"';}else{echo 'class="collapse"';} echo ' data-bs-parent=".accordion-list">
                              <p>',nl2br($row['narrate']),'</p>
                              <div style="text-align: right;">
                                <button type="button" class="btn insert_button" data-bs-toggle="modal" data-bs-target="#up_rule_Modal"><i class="bi bi-patch-plus"></i>&nbsp;編輯規則</button>
                                <button type="button" class="btn insert_button"><i class="bi bi-patch-plus"></i>&nbsp;刪除規則</button>
                              </div>
                              <!-- insert_group_Modal -->
                              <div class="modal fade" id="up_rule_Modal" tabindex="-1" aria-labelledby="up_rule_ModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h1 class="modal-title fs-5" id="up_rule_ModalLabel">編輯規則</h1>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                      <form>
                                        <table width="100%" class="insert_group_form">
                                          <tr>
                                            <td>標題</td>
                                            <td><input type="text" id="group_name" class="form-control" value="注意事項"></td>
                                          </tr>
                                          <tr>
                                            <td>敘述</td>
                                            <td>
                                              <textarea class="form-control" rows="5"></textarea>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td colspan="2"><button type="submit" class="btn insert_button" style="display: block;width: 100%;">確認修改</button></td>
                                          </tr>
                                        </table>
                                        
                                      </form>
                                    </div>
                                  </div>
                                </div>
                              </div><!-- End insert_group_Modal -->
    
                            </div>
                          </li>';
                          $i++;
                        }
                        ?>
    
                        </ul>
                      </div>
    
                    </div>
    
                      
                  </div>
                </section><!-- End Why Us Section -->
    
              </div>
              <!-- End Schdule Day 1 -->
    
              <!-- Schdule Day 2 -->
              <div role="tabpanel" class="col-lg-12  tab-pane fade" id="day-2">
    
                <!-- ======= Why Us Section ======= -->
                <section id="why-us2" class="why-us2 section-bg">
                  <div class="container-fluid" data-aos="fade-up">
    
                    <div class="col-lg-12 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">
    
                      <div class="accordion-list2">
                        <ul>
                        <?php
                        $i=1;
                        $sql="select *
                        from shop_rule
                        where shop_id='$shop_id' and type='常見問題'";
                        $result=mysqli_query($link,$sql);
                        while($row=mysqli_fetch_assoc($result))
                        {
                          echo '
                          <li>
                            <a data-bs-toggle="collapse" ';if($i==1){echo 'class="collapse"';}else{echo 'class="collapsed"';} echo 'data-bs-target="#accordion-list2-',$i,'">',$row["title"],'<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="accordion-list2-',$i,'" ';if($i==1){echo 'class="collapse show"';}else{echo 'class="collapse"';} echo ' data-bs-parent=".accordion-list2">
                              <p>',nl2br($row['narrate']),'</p>
                              <div style="text-align: right;">
                                <button type="button" class="btn insert_button" data-bs-toggle="modal" data-bs-target="#up_rule_Modal"><i class="bi bi-patch-plus"></i>&nbsp;編輯規則</button>
                                <button type="button" class="btn insert_button"><i class="bi bi-patch-plus"></i>&nbsp;刪除規則</button>
                              </div>
                              <!-- insert_group_Modal -->
                              <div class="modal fade" id="up_rule_Modal" tabindex="-1" aria-labelledby="up_rule_ModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h1 class="modal-title fs-5" id="up_rule_ModalLabel">編輯規則</h1>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                      <form>
                                        <table width="100%" class="insert_group_form">
                                          <tr>
                                            <td>標題</td>
                                            <td><input type="text" id="group_name" class="form-control" value="注意事項"></td>
                                          </tr>
                                          <tr>
                                            <td>敘述</td>
                                            <td>
                                              <textarea class="form-control" rows="5"></textarea>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td colspan="2"><button type="submit" class="btn insert_button" style="display: block;width: 100%;">確認修改</button></td>
                                          </tr>
                                        </table>
                                        
                                      </form>
                                    </div>
                                  </div>
                                </div>
                              </div><!-- End insert_group_Modal -->
    
                            </div>
                          </li>';
                          $i++;
                        }
                        ?>
                          
                        </ul>
                      </div>
    
                    </div>
    
                      
                  </div>
                </section><!-- End Why Us Section -->
    
    
              </div>
              <!-- End Schdule Day 2 -->
    
              
    
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