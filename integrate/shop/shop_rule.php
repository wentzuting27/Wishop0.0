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
        <li><a href="./shop_time.html" class="nav-link scrollto"><i class="bi bi-clock-history"></i> <span>限定開團</span></a></li>
        <li><a href="./shop_wish.html" class="nav-link scrollto"><i class="fa-solid fa-wand-sparkles"></i><span>許願池</span></a></li>
        <li><a href="./shop_rule.html" class="nav-link scrollto  active"><i class="fa-solid fa-file-circle-question"></i><span>賣場規則</span></a></li>
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
                <h2><i class="fa-solid fa-file-circle-question"></i>&nbsp;&nbsp;賣場規則</h2>
              </div><!-- End Section Title -->
              <div>
                <button type="button" class="btn insert_button" data-bs-toggle="modal" data-bs-target="#insert_group_Modal"><i class="bi bi-patch-plus"></i>&nbsp;新增規則</button>
              </div>
              
              <!-- insert_group_Modal -->
              <div class="modal fade" id="insert_group_Modal" tabindex="-1" aria-labelledby="insert_group_ModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="insert_group_ModalLabel">新增規則</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form>
                        <table width="100%" class="insert_group_form">
                          <tr>
                            <td width="10%">類型</td>
                            <td align="left" width="90%">
                              <input type="radio" name="rule_type" class="form-check-input">跟團須知&nbsp;&nbsp;
                              <input type="radio" name="rule_type" class="form-check-input">常見問題
                            </td>
                          </tr>
                          <tr>
                            <td>標題</td>
                            <td><input type="text" id="group_name" class="form-control"></td>
                          </tr>
                          <tr>
                            <td>敘述</td>
                            <td><textarea class="form-control" rows="5"></textarea></td>
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
                          <li>
                            <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1">注意事項<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                              <p>
                                ◆無提供貨到付款服務，訂購皆需先匯款。<br>
                                ◆跟團前請先衡量自身經濟能力，避免造成雙方困擾，訂購前請三思，私訊訂購視同購買，不接受任何理由取消訂單，跑單者直接列為黑名單。<br>
                                ◆價格會依照每日國際匯率而有所變動，下單前請先確認金額再下單。<br>
                                ◆國際運送過程中出現碰撞難免會造成商品凹損，完美主義者請勿跟團。<br>
                                ◆代購商品皆為預購，於國外訂購後集運回台需7-20個工作天(不包含例假日和廠商延遲出貨)，不接急單無法等候者請勿下單。<br>
                                ◆包裹配送至門市，超過時間未取貨，導致包裹退回，重新寄出需收取補寄處理費$100 (含運費，需先匯款)，累積兩次未取包裹紀錄，將列為黑名單處理。<br>
                                ◆「代購服務」是依照消費者要求而提供的購買商品服務屬「客製化給付」，不適用7日鑑賞期，沒有提供退換貨服務。<br>
                                ◆衣著類商品由於每樣商品的版型皆有所不同，訂購前可依您平時穿著同類型衣物尺寸為參考依據。<br>
    
                              </p>
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
                          </li>
    
                          <li>
                            <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed">訂購流程<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                              <p>
                                ◆於IG貼文、限時動態上看到您想購買的商品，請截圖私訊官賴，告知您要購買的「商品名稱、尺寸、顏色、數量和運送方式」。<br>
                                ◆確認好金額會給您匯款單，請於三日內匯款，並填寫匯款單，以利後續對帳作業。<br>
                                ◆匯款完成後請記得填「統一匯款單」，一律請先匯款後填單，當日匯款當日填單!!!!!
    
                              </p>
                              <div style="text-align: right;">
                                <button type="button" class="btn insert_button" data-bs-toggle="modal" data-bs-target="#up_rule_Modal"><i class="bi bi-patch-plus"></i>&nbsp;編輯規則</button>
                                <button type="button" class="btn insert_button"><i class="bi bi-patch-plus"></i>&nbsp;刪除規則</button>
                              </div>
                            </div>
                          </li>
    
                          <li>
                            <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed">付款方式<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                              <p>
                                ◆提供匯款、轉帳、中信無卡存款等支付方式。<br>
                                ◆請於三日內完成匯款。<br>
                                ◆帳戶提供中信、台新、永豐。
    
                              </p>
                              <div style="text-align: right;">
                                <button type="button" class="btn insert_button" data-bs-toggle="modal" data-bs-target="#up_rule_Modal"><i class="bi bi-patch-plus"></i>&nbsp;編輯規則</button>
                                <button type="button" class="btn insert_button"><i class="bi bi-patch-plus"></i>&nbsp;刪除規則</button>
                              </div>
                            </div>
                          </li>
    
                          <li>
                            <a data-bs-toggle="collapse" data-bs-target="#accordion-list-4" class="collapsed">國內運費<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="accordion-list-4" class="collapse" data-bs-parent=".accordion-list">
                              <p>
                                ◆7-11賣貨便：運費$35+包材$5，訂單需$55≦訂單總金額 才可以成立，訂單總金額-20元留貨付，貨到時會請您付$20+運費$35=$55。<br>
                                ◆全家超級好賣：運費$39+包材$5，訂單需$60≦訂單總金額 才可以成立，訂單總金額-25元，貨到時會請您付$25+運費$35 =$60元。<br>
                                ◆新北蘆洲或新莊自取(地點請配合我們)<br>
                                <br>
                                🔺如商品材積太大需要郵寄，會再額外告知。<br>
                                🔺若商品為需二補，運費一律二補時處理，僅匯款「商品金額」就好，其餘二補會於商品到貨後建立訂單時加進去。
                              </p>
                              <div style="text-align: right;">
                                <button type="button" class="btn insert_button" data-bs-toggle="modal" data-bs-target="#up_rule_Modal"><i class="bi bi-patch-plus"></i>&nbsp;編輯規則</button>
                                <button type="button" class="btn insert_button"><i class="bi bi-patch-plus"></i>&nbsp;刪除規則</button>
                              </div>
                            </div>
                          </li>
    
                          <li>
                            <a data-bs-toggle="collapse" data-bs-target="#accordion-list-5" class="collapsed">出貨 / 到貨時間<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="accordion-list-5" class="collapse" data-bs-parent=".accordion-list">
                              <p>
                                ◆商品到貨時間無法預知，一切都以官網/廠商實際出貨時間為主，只要官網/廠商有標示預計出貨日，都會寫在「綜合對帳 / 進度表」，請再自行查看進度。
    
                              </p>
                              <div style="text-align: right;">
                                <button type="button" class="btn insert_button" data-bs-toggle="modal" data-bs-target="#up_rule_Modal"><i class="bi bi-patch-plus"></i>&nbsp;編輯規則</button>
                                <button type="button" class="btn insert_button"><i class="bi bi-patch-plus"></i>&nbsp;刪除規則</button>
                              </div>
                            </div>
                          </li>
    
                          <li>
                            <a data-bs-toggle="collapse" data-bs-target="#accordion-list-6" class="collapsed">合併寄送<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="accordion-list-6" class="collapse" data-bs-parent=".accordion-list">
                              <p>
                                ◆如要合併訂單，請先私訊詢問是否可合併，勿擅自決定可不可以合併。<br>
                                ◆合併寄送商品最多等候一個月，需等待一個月以上則無法合併作業。
    
                              </p>
                              <div style="text-align: right;">
                                <button type="button" class="btn insert_button" data-bs-toggle="modal" data-bs-target="#up_rule_Modal"><i class="bi bi-patch-plus"></i>&nbsp;編輯規則</button>
                                <button type="button" class="btn insert_button"><i class="bi bi-patch-plus"></i>&nbsp;刪除規則</button>
                              </div>
                            </div>
                          </li>
    
                          <li>
                            <a data-bs-toggle="collapse" data-bs-target="#accordion-list-7" class="collapsed">退換貨<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="accordion-list-7" class="collapse" data-bs-parent=".accordion-list">
                              <p>
                                代購商品除了寄錯商品以外不提供退換貨服務。<br>
                                ◆為了維護雙方權益，開箱過程中請務必全程錄影(箱子未拆封狀態下且需看到名字)，若未錄影，如商品有任何問題皆不協助處理！<br>
                                ◆國際運送過程中出現碰撞難免會造成商品凹損，完美主義者請勿跟團。
    
                              </p>
                              <div style="text-align: right;">
                                <button type="button" class="btn insert_button" data-bs-toggle="modal" data-bs-target="#up_rule_Modal"><i class="bi bi-patch-plus"></i>&nbsp;編輯規則</button>
                                <button type="button" class="btn insert_button"><i class="bi bi-patch-plus"></i>&nbsp;刪除規則</button>
                              </div>
                            </div>
                          </li>
    
                          <li>
                            <a data-bs-toggle="collapse" data-bs-target="#accordion-list-8" class="collapsed">關於我們<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="accordion-list-8" class="collapse" data-bs-parent=".accordion-list">
                              <p>
                                ◆有任何問題請私訊IG或官賴詢問<br>
                                ◆聯絡方式：IG請搜尋@cocoma.friends、官賴ID：@353zrdwz<br>
                                ◆付款方式：提供匯款、轉帳、中信無卡存款等支付方式<br>
                                ◆也歡迎追蹤我們FB、Twitter：cocoma friends 韓國代購<br>
    
                              </p>
                              <div style="text-align: right;">
                                <button type="button" class="btn insert_button" data-bs-toggle="modal" data-bs-target="#up_rule_Modal"><i class="bi bi-patch-plus"></i>&nbsp;編輯規則</button>
                                <button type="button" class="btn insert_button"><i class="bi bi-patch-plus"></i>&nbsp;刪除規則</button>
                              </div>
                            </div>
                          </li>
    
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
                          <li>
                            <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1">1.請問二補是什麼意思?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list2">
                              <p>
                                二補是指二次收費補款，有些商品不知道實際重量多重 ?怕有多收或少收錢的情況發生，這時候會採二補的方式收款。<br>
                                <br>
                                二補收的費用包含→國際運費＋關稅<br>
                                目前我們配合的集運收費是 $225 / kg
    
                              </p>
                              <div style="text-align: right;">
                                <button type="button" class="btn insert_button" data-bs-toggle="modal" data-bs-target="#up_rule_Modal"><i class="bi bi-patch-plus"></i>&nbsp;編輯規則</button>
                                <button type="button" class="btn insert_button"><i class="bi bi-patch-plus"></i>&nbsp;刪除規則</button>
                              </div>
                            </div>
                          </li>
    
                          <li>
                            <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed">2.請問可以貨到付款嗎?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list2">
                              <p>
                                不可以！之前有提供貨到付款的服務給大家，但被客人棄單，商品寄到門市未取貨遭包裹退回，私訊聯繫客人也未讀未回，重點還是有跟我們交易過幾次的客人，經過那次不開放貨到付款。<br>
                                <br>
                                貨到付款商品遭退回會變成庫存，商品能賣掉就還好，但賣不掉就會變成庫存，我們沒有這麼多錢可以吸收這些費用(哭)。
                              </p>
                              <div style="text-align: right;">
                                <button type="button" class="btn insert_button" data-bs-toggle="modal" data-bs-target="#up_rule_Modal"><i class="bi bi-patch-plus"></i>&nbsp;編輯規則</button>
                                <button type="button" class="btn insert_button"><i class="bi bi-patch-plus"></i>&nbsp;刪除規則</button>
                              </div>
                            </div>
                          </li>
    
                          <li>
                            <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed">3.商品多久會到貨?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list2">
                              <p>
                                代購商品皆為預購，於國外訂購後集運回台需7-20個工作天(不包含例假日和廠商延遲出貨)，我們都是等大家訂購的東西到了差不多時，才會一起集運運回，所以我們不接急單喔！下單前請謹慎考慮，確認沒問題再下單。
    
    
                              </p>
                              <div style="text-align: right;">
                                <button type="button" class="btn insert_button" data-bs-toggle="modal" data-bs-target="#up_rule_Modal"><i class="bi bi-patch-plus"></i>&nbsp;編輯規則</button>
                                <button type="button" class="btn insert_button"><i class="bi bi-patch-plus"></i>&nbsp;刪除規則</button>
                              </div>
                            </div>
                          </li>
    
    
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