<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>團內介面(買家)</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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
  <link href="assets/css/InnerPage.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/388b3c67c2.js" crossorigin="anonymous"></script>
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

  <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
    integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc"
    crossorigin="anonymous"></script>

</head>

<body>
  <!-- ======= Header ======= -->
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">

          <ol>
            <li><a href="../shop/shop.php" style="color: rgb(255, 230, 237);">返回賣場</a></li>
            <li>團內資訊</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
    <?php
    $commodity_group_id = 3;//在哪一個商品團體要用接值得方式,先假設1,之後再改
    $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');
    $sql = "select *
  from commodity_group
  where commodity_group_id=$commodity_group_id";
    $result = mysqli_query($link, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
      echo '
    <section id="hero" style="background-image: url(', $row["commodity_group_bg"], ');
    ;">';
    } ?>
    <?php
    $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');
    $commodity_group_id = 3;//在哪一個商品團體要用接值得方式,先假設1,之後再改
    $account = "ateez2018";
    $sql = "SELECT * FROM withgroup WHERE account = '$account' and commodity_group_id=3";
    $result = mysqli_query($link, $sql);

    if ($result && mysqli_num_rows($result) == 0) {
      echo '
    <div class="background-overlay" style="position: absolute;
    top: 0;
    width: 100%;
    height: 100%;background-color: rgba(237, 237, 237, 0.733)">
    </div>
    <div class="edit_like_shop_button">
    <button type="button" class="btn insert_button"><i class="fa-solid fa-heart"></i>&nbsp;收藏</button>
    <button type="button" class="btn insert_button" data-bs-toggle="modal" data-bs-target="#leave" id="one1">
    我要跟團</button>
    </div>
    <div style="display: flex; align-items: center; justify-content: center;">
    <div style="margin-left: 300px; margin-top: -30px;z-index: 9;">
    <p><i class="fa-solid fa-bullhorn" style="font-size: 30px;color:#B0A5C6"></i></p>
    </div>
    <div>
    <center>
    <marquee>
    <span>公告：商品即將寄出，請注意到貨時間！</span>
    <span>公告：商品即將寄出，請注意到貨時間！</span>
    <span>公告：商品即將寄出，請注意到貨時間！</span>
    </marquee>
    </center>
    </div>
    </div>';
    } else {
      echo '
    <div class="background-overlay" style="position: absolute;
    top: 0;
    width: 100%;
    height: 100%;background-color: rgba(237, 237, 237, 0.733)">
    </div>
    <div class="edit_like_shop_button">
    <button type="button" class="btn insert_button"><i class="fa-solid fa-heart"></i>&nbsp;收藏</button>
    <button type="button" class="btn insert_button" data-bs-toggle="modal" data-bs-target="#leave" id="one1">
    取消跟團</button>
    </div>
    <div style="display: flex; align-items: center; justify-content: center;">
    <div style="margin-left: 300px; margin-top: -30px;z-index: 9;">
    <p><i class="fa-solid fa-bullhorn" style="font-size: 30px;color:#B0A5C6"></i></p>
    </div>
    <div>
    <center>
    <marquee>
    <span>公告：商品即將寄出，請注意到貨時間！</span>
    <span>公告：商品即將寄出，請注意到貨時間！</span>
    <span>公告：商品即將寄出，請注意到貨時間！</span>
    </marquee>
    </center>
    </div>
    </div>';
    }

    mysqli_close($link);
    ?>


    <form method="post" action="withgroup.php">
      <!-- Modal -->
      <div class="modal fade" id="leave" tabindex="-1" aria-labelledby="leaveLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="leaveLabel">確定跟團？</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <h6 style="color:red;padding-left:10px">跟團須知：</h6>
            <h6 style="padding-left:10px">請勿跟團後不購買產品，否則列入黑名單！！！</h6>
            <h6 style="padding-left:10px">跟團也無法退團</h6>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">關閉</button>
              <button type="submit" name="addgroup" class="btn btn-primary" id="one">確定</button>
            </div>
          </div>
        </div>
      </div>
    </form>


    <?php
    $shop_id = 1;//在哪一個商品團體要用接值得方式,先假設1,之後再改
    $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');
    $sql = "select *
  from shop
  where shop_id=$shop_id";
    $result = mysqli_query($link, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
      echo '
      <!-- Showcase -->
      <div class="card mb-3" style="width: 100%;border: none;background-color: #ffffff00;">
        <div class="row g-0">
          <div class="col-md-5" style="padding: 10px;padding-left: 150px;">
            <div class="profile-picture big-profile-picture clear" style="text-align: center;margin-top: 10px;">
              <img width="100%" height="100%" alt="Anne Hathaway picture"
                src="', $row["shop_avatar"], '">
            </div>
            <br>
            <center>
              <a href="../shop/shop.php" class="btn-get-started animate__animated animate__fadeInUp scrollto"
                style="text-decoration: none;font-weight: 600;">三麗鷗快樂購</a>
            </center>
          </div>
          ';
    }
    ?>

    <?php
    $commodity_group_id = 3;//在哪一個商品團體要用接值得方式,先假設1,之後再改
    $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');
    $sql = "select *
  from commodity_group
  where commodity_group_id=$commodity_group_id";
    $result = mysqli_query($link, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
      echo '
          <div class="col-md-7"
            style="padding-left: 40px;padding-right: 40px;background-color:rgb(252, 252, 252);width: 500px;border-radius: 30px;">
            <h3 class="card-title" style="font-size: 0.8cm;padding-top: 14px;color: #B0A5C6;"><b>', $row["commodity_group_name"], '</b>
              <small style="font-size: 0.4cm;font-weight: bold;">（跟團人數：<span style="color:#B0A5C6;">88人</span>）</small>
            </h3>
            <div class="card-text" style="font-size: 0.4cm;text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.05);font-weight: bold">
                <p style="color: #5a5a5a;font-size: 0.3cm">', $row["commodity_group_narrate"], '</p>

              <div class="card-text" style="position: absolute; bottom: 0;">
                <div class="content" style="background-color: #ffffff00;margin-left: -10px;">
                  <div class="buttons">
                    <div id="three" class="button" style="font-size: 15px;font-weight: bold">#三麗鷗</div>
                    <div id="four" class="button" style="font-size: 15px;font-weight: bold">#美少女戰士</div><br>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
    <!-- SECOND navbar -->';
    } ?>

    <div class="tabs" role="tablist">

      <input type="radio" id="tab1" name="tab-control" checked>
      <input type="radio" id="tab2" name="tab-control">
      <input type="radio" id="tab3" name="tab-control">
      <input type="radio" id="tab4" name="tab-control">
      <div id="subject">
        <ul>
          <li title="Features"><label for="tab1" role="button">
              <i class="fa-solid fa-circle-exclamation"></i><br><span>賣場規則</span></label></li>
          <li title="Delivery Contents"><label for="tab2" role="button">
              <i class="fa-solid fa-gift"></i><br><span>商品</span></label></li>
          <li title="Shipping"><label for="tab3" role="button">
              <i class="fa-solid fa-comments"></i><br><span>討論區</span></label></li>
          <li title="Returns"><label for="tab4" role="button">
              <i class="fa-solid fa-cart-shopping"></i><br><span>訂單詳情</span></label></li>
        </ul>
      </div>

      <div class="slider">
        <div class="indicator"></div>
      </div>
      <div class="content" style="margin-top: -5px;">
        <section>
          <h2>Features</h2>
          <h4>常見問題：</h4><br>
          <div id="why-us" class="why-us section-bg">
            <div class="container-fluid" data-aos="fade-up">
              <div class="col-lg-12   align-items-stretch  order-2 order-lg-1">

                <div class="accordion-list">
                  <ul>
                    <li>
                      <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1">注意事項<i
                          class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
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
                          <button type="button" class="btn insert_button" data-bs-toggle="modal"
                            data-bs-target="#up_rule_Modal">
                            <i class="bi bi-patch-plus"></i>&nbsp;編輯規則</button>
                          <button type="button" class="btn insert_button"><i
                              class="bi bi-patch-plus"></i>&nbsp;刪除規則</button>
                        </div>
                        <!-- insert_group_Modal -->
                        <div class="modal fade" id="up_rule_Modal" tabindex="-1" aria-labelledby="up_rule_ModalLabel"
                          aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1 class="modal-title fs-5" id="up_rule_ModalLabel">編輯規則</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                  aria-label="Close"></button>
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
                                      <td colspan="2"><button type="submit" class="btn insert_button"
                                          style="display: block;width: 100%;">確認修改</button></td>
                                    </tr>
                                  </table>

                                </form>
                              </div>
                            </div>
                          </div>
                        </div><!-- End insert_group_Modal -->
                    </li>

                    <li>
                      <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed">訂購流程<i
                          class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                      <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                        <p>
                          ◆於IG貼文、限時動態上看到您想購買的商品，請截圖私訊官賴，告知您要購買的「商品名稱、尺寸、顏色、數量和運送方式」。<br>
                          ◆確認好金額會給您匯款單，請於三日內匯款，並填寫匯款單，以利後續對帳作業。<br>
                          ◆匯款完成後請記得填「統一匯款單」，一律請先匯款後填單，當日匯款當日填單!!!!!

                        </p>
                        <div style="text-align: right;">
                          <button type="button" class="btn insert_button" data-bs-toggle="modal"
                            data-bs-target="#up_rule_Modal"><i class="bi bi-patch-plus"></i>&nbsp;編輯規則</button>
                          <button type="button" class="btn insert_button"><i
                              class="bi bi-patch-plus"></i>&nbsp;刪除規則</button>
                        </div>
                      </div>
                    </li>

                    <li>
                      <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed">付款方式<i
                          class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                      <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                        <p>
                          ◆提供匯款、轉帳、中信無卡存款等支付方式。<br>
                          ◆請於三日內完成匯款。<br>
                          ◆帳戶提供中信、台新、永豐。

                        </p>
                        <div style="text-align: right;">
                          <button type="button" class="btn insert_button" data-bs-toggle="modal"
                            data-bs-target="#up_rule_Modal"><i class="bi bi-patch-plus"></i>&nbsp;編輯規則</button>
                          <button type="button" class="btn insert_button"><i
                              class="bi bi-patch-plus"></i>&nbsp;刪除規則</button>
                        </div>
                      </div>
                    </li>

                    <li>
                      <a data-bs-toggle="collapse" data-bs-target="#accordion-list-4" class="collapsed">國內運費<i
                          class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
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
                          <button type="button" class="btn insert_button" data-bs-toggle="modal"
                            data-bs-target="#up_rule_Modal"><i class="bi bi-patch-plus"></i>&nbsp;編輯規則</button>
                          <button type="button" class="btn insert_button"><i
                              class="bi bi-patch-plus"></i>&nbsp;刪除規則</button>
                        </div>
                      </div>
                    </li>

                    <li>
                      <a data-bs-toggle="collapse" data-bs-target="#accordion-list-5" class="collapsed">出貨 / 到貨時間<i
                          class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                      <div id="accordion-list-5" class="collapse" data-bs-parent=".accordion-list">
                        <p>
                          ◆商品到貨時間無法預知，一切都以官網/廠商實際出貨時間為主，只要官網/廠商有標示預計出貨日，都會寫在「綜合對帳 / 進度表」，請再自行查看進度。

                        </p>
                        <div style="text-align: right;">
                          <button type="button" class="btn insert_button" data-bs-toggle="modal"
                            data-bs-target="#up_rule_Modal"><i class="bi bi-patch-plus"></i>&nbsp;編輯規則</button>
                          <button type="button" class="btn insert_button"><i
                              class="bi bi-patch-plus"></i>&nbsp;刪除規則</button>
                        </div>
                      </div>
                    </li>

                    <li>
                      <a data-bs-toggle="collapse" data-bs-target="#accordion-list-6" class="collapsed">合併寄送<i
                          class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                      <div id="accordion-list-6" class="collapse" data-bs-parent=".accordion-list">
                        <p>
                          ◆如要合併訂單，請先私訊詢問是否可合併，勿擅自決定可不可以合併。<br>
                          ◆合併寄送商品最多等候一個月，需等待一個月以上則無法合併作業。

                        </p>
                        <div style="text-align: right;">
                          <button type="button" class="btn insert_button" data-bs-toggle="modal"
                            data-bs-target="#up_rule_Modal"><i class="bi bi-patch-plus"></i>&nbsp;編輯規則</button>
                          <button type="button" class="btn insert_button"><i
                              class="bi bi-patch-plus"></i>&nbsp;刪除規則</button>
                        </div>
                      </div>
                    </li>

                    <li>
                      <a data-bs-toggle="collapse" data-bs-target="#accordion-list-7" class="collapsed">退換貨<i
                          class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                      <div id="accordion-list-7" class="collapse" data-bs-parent=".accordion-list">
                        <p>
                          代購商品除了寄錯商品以外不提供退換貨服務。<br>
                          ◆為了維護雙方權益，開箱過程中請務必全程錄影(箱子未拆封狀態下且需看到名字)，若未錄影，如商品有任何問題皆不協助處理！<br>
                          ◆國際運送過程中出現碰撞難免會造成商品凹損，完美主義者請勿跟團。

                        </p>
                        <div style="text-align: right;">
                          <button type="button" class="btn insert_button" data-bs-toggle="modal"
                            data-bs-target="#up_rule_Modal"><i class="bi bi-patch-plus"></i>&nbsp;編輯規則</button>
                          <button type="button" class="btn insert_button"><i
                              class="bi bi-patch-plus"></i>&nbsp;刪除規則</button>
                        </div>
                      </div>
                    </li>

                    <li>
                      <a data-bs-toggle="collapse" data-bs-target="#accordion-list-8" class="collapsed">關於我們<i
                          class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                      <div id="accordion-list-8" class="collapse" data-bs-parent=".accordion-list">
                        <p>
                          ◆有任何問題請私訊IG或官賴詢問<br>
                          ◆聯絡方式：IG請搜尋@cocoma.friends、官賴ID：@353zrdwz<br>
                          ◆付款方式：提供匯款、轉帳、中信無卡存款等支付方式<br>
                          ◆也歡迎追蹤我們FB、Twitter：cocoma friends 韓國代購<br>

                        </p>
                        <div style="text-align: right;">
                          <button type="button" class="btn insert_button" data-bs-toggle="modal"
                            data-bs-target="#up_rule_Modal"><i class="bi bi-patch-plus"></i>&nbsp;編輯規則</button>
                          <button type="button" class="btn insert_button"><i
                              class="bi bi-patch-plus"></i>&nbsp;刪除規則</button>
                        </div>
                      </div>
                    </li>

                  </ul>
                </div>

              </div>

            </div>
          </div>
        </section>
        <section>
          <h2>Delivery Contents</h2>
          <!-- ======= Pricing Section ======= -->

          <!-- change Section -->
          <div id="app">
            <div class="container">
              <form method="post" action="order.php">
                <table id="cart" class="table table-hover table-condensed">
                  <thead>
                    <tr>
                      <th style="width:50%">Product</th>
                      <th>Price</th>
                      <th style="width:10%">Quantity</th>
                      <th class="text-center">Subtotal</th>
                    </tr>
                  </thead>
                  <?php
                  $commodity_group_id = 3; // 根据实际情况获取商品组ID
                  $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');
                  $sql = "SELECT commodity.*, MIN(commodity_photo.commodity_photo) AS first_photo
                  FROM commodity
                  JOIN commodity_photo ON commodity.commodity_id = commodity_photo.commodity_id
                  WHERE commodity.commodity_state = 1
                  GROUP BY commodity.commodity_id;
                  ";
                  $result = mysqli_query($link, $sql);

                  while ($row = mysqli_fetch_assoc($result)) {

                    echo '
                    <tr>
                    <td data-th="Product">
                      <div class="row">
                        <div class="col-sm-4 hidden-xs">
                          <a href="doll.php" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details">
                          <img src="', $row["first_photo"], '" alt="..." class="img-responsive" />
                          </a>
                      </div>
                      <div class="col-sm-8">
                          <h4 class="nomargin"><b>', $row["commodity_name"], '</b></h4>
                          <p>', $row["commodity_narrate"], '</p>
                      </div>
                      </div>
                    </td>
                    <td data-th="Price">$', $row["commodity_price"], '</td>
                    <td data-th="Quantity">
                      <input type="number" class="form-control text-center" value="0" 
                       name="quantity_', $row["commodity_id"], '" id="quantityInput', $row["commodity_id"], '" >
                    </td>
                    <td data-th="Subtotal" class="text-center" >$0</td>
                    <td class="actions" data-th="">
                    <button class="btn btn-info btn-sm" style="background-color: #b0a5c6a8;border: none;color: white;"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button class="btn btn-danger btn-sm" style="background-color: #E9C9D6;border: none;color: white;"><i class="fa-solid fa-trash"></i></button>
                    </td>
                  </tr>';
                  } ?>

                  <tfoot>
                    <tr>
                      <td colspan="3" class="hidden-xs text-center" id="totalPrice"></td>
                      <td class="hidden-xs text-center" id="totalPrice"><strong>Total $0</strong></td>
                      <td class="text-right">
                        <center><button type="button" data-bs-toggle="modal" data-bs-target="#remark"
                            class="btn btn-success btn-block">
                            結帳 <i class="fa-solid fa-arrow-right-to-line"></i>
                          </button></center>
                      </td>
                    </tr>
                  </tfoot>

                </table>
            </div>
          </div>
          <!-- Modal -->

          <div class="modal fade" id="remark" tabindex="-1" aria-labelledby="remarkLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="remarkLabel">有需要備註的內容嗎？</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <textarea id="w3review" name="remark" rows="4" cols="50" style="margin:10px;"
                  placeholder="備註內容..."></textarea>
                <div class="modal-footer">
                  <button class="btn btn-secondary" data-bs-dismiss="modal" name="submit2" type="submit">無</button>
                  <button class="btn btn-primary" data-bs-dismiss="modal" name="submit" type="submit">確認</button>
                </div>
              </div>
            </div>
          </div>
          </form>
        </section>


        <section id="first">
          <h2>Shipping</h2>
          <div id="third">
            <h3><i class="fa-solid fa-star"></i>團主公告
              <button id="pra" style="float: right; border-radius: 50%;"><i
                  class="fa-solid fa-arrow-right"></i></button>
            </h3>
            <div class="row">
              <div id="slider-carousel" class="owl-carousel">
                <?php
                $commodity_group_id = 3;//在哪一個商品團體要用接值得方式,先假設1,之後再改
                $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');
                $sql = "select *
                    from commodity_group_announce";
                $result = mysqli_query($link, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                  echo '
                <div class="item">
                  <div class="col-sm-10">
                    <div class="card">
                      <div class="card-header">
                        <div class="col-md-12">
                          <div class="profile-picture big-profile-picture clear">
                            <img width="100%" height="100%" alt="Anne Hathaway picture"
                              src="https://i.pinimg.com/736x/c4/22/64/c42264dccbc7371567ebe9db019082cb.jpg">
                          </div>
                          <div style="flex-grow: 7;">
                            <p>團主：</p>
                            <h5>', $row["announce_title"], '<i class="fa-solid fa-ellipsis-vertical"
                                style="float: right; margin-top: -15px;"></i></h5>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <p class="card-text">
                        <p>尊敬的客戶:</p>
                        ', $row["announce_narrate"], '
                        </p>
                      </div>
                    </div>
                  </div>
                </div>';
                }
                ?>
                <!-- 添加其他的 .item -->
                <div class="item">
                  <div class="col-sm-10">
                    <div class="card">
                      <div class="card-header">
                        <div class="col-md-12">
                          <div class="profile-picture big-profile-picture clear">
                            <img width="100%" height="100%" alt="Anne Hathaway picture"
                              src="https://i.pinimg.com/736x/c4/22/64/c42264dccbc7371567ebe9db019082cb.jpg">
                          </div>
                          <div style="flex-grow: 7;">
                            <p>團主：</p>
                            <h5>關於出貨通知<i class="fa-solid fa-ellipsis-vertical"
                                style="float: right; margin-top: -15px;"></i></h5>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <p>尊敬的客戶:</p>
                        感謝您的訂單！我們很高興地通知您，您的商品已經準備好並已出貨。
                        您可以通過訂單追蹤連結來查看包裹的最新狀態。如果您有任何問題或需要幫助，請隨時與我們的客服團隊聯繫。祝您購物愉快！
                        </p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="col-sm-10">
                    <div class="card">
                      <div class="card-header">
                        <div class="col-md-12" style="display: flex; align-items: center;">
                          <div class="profile-picture big-profile-picture clear"
                            style="width: 50px; height: 50px; border: 0; margin-right: 10px;">
                            <img width="100%" height="100%" alt="Anne Hathaway picture"
                              src="https://i.pinimg.com/736x/c4/22/64/c42264dccbc7371567ebe9db019082cb.jpg">
                          </div>
                          <div style="flex-grow: 7;">
                            <p>團主：</p>
                            <h5>關於出貨通知<i class="fa-solid fa-ellipsis-vertical"
                                style="float: right; margin-top: -15px;"></i></h5>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <p>尊敬的客戶:</p>
                        感謝您的訂單！我們很高興地通知您，您的商品已經準備好並已出貨。
                        您可以通過訂單追蹤連結來查看包裹的最新狀態。如果您有任何問題或需要幫助，請隨時與我們的客服團隊聯繫。祝您購物愉快！
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="col-sm-10">
                    <div class="card">
                      <div class="card-header">
                        <div class="col-md-12" style="display: flex; align-items: center;">
                          <div class="profile-picture big-profile-picture clear"
                            style="width: 50px; height: 50px; border: 0; margin-right: 10px;">
                            <img width="100%" height="100%" alt="Anne Hathaway picture"
                              src="https://i.pinimg.com/736x/c4/22/64/c42264dccbc7371567ebe9db019082cb.jpg">
                          </div>
                          <div style="flex-grow: 7;">
                            <p>團主：</p>
                            <h5>關於出貨通知<i class="fa-solid fa-ellipsis-vertical"
                                style="float: right; margin-top: -15px;"></i></h5>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <p>尊敬的客戶:</p>
                        感謝您的訂單！我們很高興地通知您，您的商品已經準備好並已出貨。
                        您可以通過訂單追蹤連結來查看包裹的最新狀態。如果您有任何問題或需要幫助，請隨時與我們的客服團隊聯繫。祝您購物愉快！
                        </p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="col-sm-10">
                    <div class="card">
                      <div class="card-header">
                        <div class="col-md-12" style="display: flex; align-items: center;">
                          <div class="profile-picture big-profile-picture clear"
                            style="width: 50px; height: 50px; border: 0; margin-right: 10px;">
                            <img width="100%" height="100%" alt="Anne Hathaway picture"
                              src="https://i.pinimg.com/736x/c4/22/64/c42264dccbc7371567ebe9db019082cb.jpg">
                          </div>
                          <div style="flex-grow: 7;">
                            <p>團主：</p>
                            <h5>關於出貨通知<i class="fa-solid fa-ellipsis-vertical"
                                style="float: right; margin-top: -15px;"></i></h5>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <p>尊敬的客戶:</p>
                        感謝您的訂單！我們很高興地通知您，您的商品已經準備好並已出貨。
                        您可以通過訂單追蹤連結來查看包裹的最新狀態。如果您有任何問題或需要幫助，請隨時與我們的客服團隊聯繫。祝您購物愉快！
                        </p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div><br>

            <h3><i class="fa-solid fa-circle-question"></i>詢問區</h3>
            <div class="part2" id="card0">
              <div class="card border-secondary mb-12" style="width: 100%;border-radius: 0;">
                <div class="card-header bg-transparent border-secondary">
                  <div class="col-md-1">
                    <div class="profile-picture big-profile-picture clear"
                      style="width: 50px; height: 50px; border:0cm ;float: left;margin-left: -10px;">
                      <img width="100%" height="100%" alt="Anne Hathaway picture"
                        src="https://i.pinimg.com/736x/c4/22/64/c42264dccbc7371567ebe9db019082cb.jpg">
                    </div>
                  </div>
                  <h4 class="card-title" style="font-size: 0.6cm;float: left;margin-top: 13px;"><small>詢問內容...</small>
                  </h4>
                  <button class="btn btn-info btn-sm"
                    style="font-size: 0.3cm;float: right;margin-top: 13px;background-color: #b0a5c6a8;border: none;color: white;"><i
                      class="fa-solid fa-pen-to-square"></i></button>
                </div>
              </div>
            </div>
            <div class="part2">
              <div class="card border-secondary mb-12" style="width: 100%;">
                <div class="card-header bg-transparent border-secondary">
                  <div class="col-md-12">
                    <div class="profile-picture big-profile-picture clear"
                      style="width: 50px; height: 50px; border:0cm ;float: left;margin-left: -10px;">
                      <img width="100%" height="100%" alt="Anne Hathaway picture"
                        src="https://i.pinimg.com/736x/c4/22/64/c42264dccbc7371567ebe9db019082cb.jpg">
                    </div>
                    <p>團主：</p>
                    <h4><B>關於出貨通知</B></h4>
                  </div>
                  <h4 style="float: right;margin-top:-70px;">
                    <i class="fa-solid fa-ellipsis-vertical" data-bs-toggle="modal" data-bs-target="#deloredit"></i>
                  </h4>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="deloredit" tabindex="-1" aria-labelledby="deloreditLabel"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="deloreditLabel">想要編輯還是刪除？</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">編輯</button>
                        <button type="button" name="delgroup" class="btn btn-primary"
                          data-bs-dismiss="modal">刪除</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body " id="card1">

                  <p>尊敬的客戶:</p>
                  <p>感謝您的訂單！我们很高兴地通知您，您的商品已经准备好并已出货。</p>
                  <p>您可以通过订单追踪链接来查看包裹的最新状态。如果您有任何问题或需要帮助，请随时与我们的客服团队联系。</p>
                  <p>祝您购物愉快！</p>
                  <p>感谢您的订单！我们很高兴地通知您，您的商品已经准备好并已出货。</p>
                  <p>感谢您的订单！我们很高兴地通知您，您的商品已经准备好并已出货。</p>
                  <p>感谢您的订单！我们很高兴地通知您，您的商品已经准备好并已出货。</p>
                  <p>感谢您的订单！我们很高兴地通知您，您的商品已经准备好并已出货。</p>
                  <div id="overlay"></div>
                </div>
                <div class="card-footer bg-transparent border-secondary">
                  <h4 style="margin-top:-3px;margin-bottom:-3px;margin-left: 10px;">
                    <i class="bi bi-clock"></i>&nbsp;<small datetime="2020-01-01">Jan 1,
                      2020</small>&nbsp;
                    <i class="bi bi-chat-dots"></i>&nbsp;<small>2</small>
                  </h4>

                </div>
              </div>
            </div>
          </div>

        </section>
        <section id="order">
          <h2>Returns</h2>
          <h4>對帳表:</h4>
          <!-- Actual search box -->
          <form action="upsatestate.php" method="post" style="height: 400px;overflow-y: auto;overflow-x: hidden;">
            <?php
            $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');
            if (!$link) {
              die('Connection failed: ' . mysqli_connect_error());
            }
            $sql = "SELECT *FROM `order` NATURAL JOIN order_details";
            $result = mysqli_query($link, $sql);
            if (!$result) {
              die('Query failed: ' . mysqli_error($link));
            }
            echo '<table id="example2" 
                class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                <th>帳號</th>
                <th>付款帳號</th>
                <th>下單時間</th>
                <th>總金額</th>
                <th>備註</th>
                <th>確認付款</th>
            </tr>
        </thead>
        <tbody>';
            while ($row = mysqli_fetch_assoc($result)) {
              $sql2 = "SELECT SUM(order_details.order_details_num * commodity.commodity_price) AS totalprice
            FROM order_details
            JOIN commodity ON order_details.commodity_id = commodity.commodity_id
            WHERE `order_details`.order_id = {$row['order_id']}";
              $result2 = mysqli_query($link, $sql2);
              $totalprice = 0;
              if ($result2 && mysqli_num_rows($result2) > 0) {
                $totalprice_row = mysqli_fetch_assoc($result2);
                $totalprice = $totalprice_row['totalprice'];
              }
              echo '<tr>
            <td>' . $row['account'] . '</td>
            <td>' . $row['payment_account'] . '</td>
            <td>' . $row['order_time'] . '</td>
            <td>' . $totalprice . '</td>
            <td>' . $row['remark'] . '</td>
            <td>
                  <center>
                    <input id="box' . $row['order_id'] . '" type="checkbox" name="submit"/>
                    <label for="box' . $row['order_id'] . '" id="label' . $row['order_id'] . '" 
                    name="' . $row['order_id'] . '">
                    未付款
                    </label>
                  </center>
                </td>
          </tr>';
            }
            echo '</tbody></table>';
            mysqli_close($link); ?>
          </form>
          <button onclick="showCsv()">Console log csv code</button>
          <button onclick="download()">Download csv file</button>
          <br><br><br>
        </section>
      </div>
    </div>

    </div>
    </div>
    </div>
    </div>


    </div>

    </div> <!-- col end -->
    </div> <!-- row end -->

    <!-- container end -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>
    <!-- 这里是你的 JavaScript 代码 -->
    <!-- JQERY -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <!-- DataTables -->
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.1/js/buttons.php5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.bootstrap.min.js"></script>

    <!-- DataTables extra libraries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>

    <!-- Vendor JS Files -->
    <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>

    <!-- Your Custom JS Files -->
    <script src="../lisa/assets/js/InnerPage.js"></script>
    <script src="../lisa/assets/js/cvs.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>