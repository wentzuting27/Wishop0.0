<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <?php
  $commodity_group_id = $_GET["commodity_group_id"];
  $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');
  $sql = "select commodity_group_name from commodity_group where commodity_group_id='$commodity_group_id'";
  $result = mysqli_query($link, $sql);
  $row = mysqli_fetch_assoc($result);
  echo '<title>' . $row["commodity_group_name"], '</title>'; ?>
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
<?php session_start(); ?>

<body>
  <!-- ======= Header ======= -->
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <?php
        $commodity_group_id = $_GET["commodity_group_id"];
        $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');
        $sql = "select *
        from commodity_group
        where commodity_group_id=$commodity_group_id";
        $result = mysqli_query($link, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
          $shop_id = $row["shop_id"];
        } ?>

        <div class="d-flex justify-content-between align-items-center">

          <ol>
            <li><a href="../index/index.php" style="color:black">首頁</a></li>
            <li><a href="../shop/shop.php?shop_id=<?php echo $shop_id; ?>" style="color: rgb(255, 230, 237);">返回賣場</a>
            </li>
            <li>團內資訊</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
    <?php
    $commodity_group_id = $_GET["commodity_group_id"];//在哪一個商品團體要用接值得方式,先假設1,之後再改
    $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');
    $sql = "select *
  from commodity_group
  where commodity_group_id=$commodity_group_id";
    $result = mysqli_query($link, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
      $shop_id = $row["shop_id"];
      echo '
    <section id="hero" style="background-image: url(', $row["commodity_group_bg"], ');
    ;">';
    } ?>
    <form method="post" action="save_group.php?commodity_group_id=<?php echo $commodity_group_id; ?>">
      <?php
      $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');
      $commodity_group_id = $_GET["commodity_group_id"];//在哪一個商品團體要用接值得方式,先假設1,之後再改
      $account = $_SESSION["account"];
      $sql2 = "SELECT * FROM like_group WHERE account = '$account' and commodity_group_id=$commodity_group_id";
      $result2 = mysqli_query($link, $sql2);
      echo'<div class="background-overlay" style="position: absolute;
      top: 0;
      width: 100%;
      height: 100%;background-color: rgba(237, 237, 237, 0.733)">
      </div>';
      if(isset($account)){ 
      if ($result2 && mysqli_num_rows($result2) == 0) {
        echo '
    <div class="edit_like_shop_button">
    <button type="submit" name="submit" class="btn insert_button"><i class="fa-solid fa-heart"></i>&nbsp;收藏</button>';
      } else {
        echo '
      
      <div class="edit_like_shop_button">
      <button type="submit" name="submit2" class="btn insert_button"><i class="fa-solid fa-heart"></i>&nbsp;取消收藏</button>';
      }}

      $sql = "SELECT * FROM withgroup NATURAL JOIN commodity_group WHERE account = '$account' and commodity_group_id=$commodity_group_id";
      $result = mysqli_query($link, $sql);
      $row = mysqli_fetch_assoc($result);
if(isset($account) && ($row["commodity_group_state"] == 1 || $row["commodity_group_state"] == 3)){
      if ($result && mysqli_num_rows($result) == 0) {
        echo '
    <button type="button" class="btn insert_button" data-bs-toggle="modal" data-bs-target="#leave">
    <i class="fa-solid fa-share-from-square"></i>我要跟團</button>
    </div>
    ';
      } else {
        echo '
      <button type="button" class="btn insert_button" data-bs-toggle="modal" data-bs-target="#already">
      <i class="fa-solid fa-share-from-square"></i>已跟團</button>
      </div>
     
      ';}
    }
        $sql3 = "SELECT announce_title,announce_narrate FROM commodity_group_announce WHERE commodity_group_id='$commodity_group_id'
     order by announce_time DESC";
        $result3 = mysqli_query($link, $sql3);
        $row3 = mysqli_fetch_assoc($result3);
        echo '
    <div class="marquee-container">
    <center>
    <marquee><i class="fa-solid fa-bullhorn" style="color: #B0A5C6;"></i>
    <span>' . $row3["announce_title"] . '：' . $row3["announce_narrate"] . '！</span>
    <span>' . $row3["announce_title"] . '：' . $row3["announce_narrate"] . '！</span>
    <span>' . $row3["announce_title"] . '：' . $row3["announce_narrate"] . '！</span>
    </marquee>
    </center>
     </div>
      ';
      
      mysqli_close($link);
      ?>
    </form>
    </div>
    </div>

    <form method="post" action="withgroup.php?commodity_group_id=<?php echo $commodity_group_id; ?>">
      <!-- Modal -->
      <div class="modal fade" id="leave" tabindex="-1" aria-labelledby="leaveLabel" aria-hidden="true">
        <div class="modal-dialog">
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
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">關閉</button>
              <button type="submit" name="addgroup" class="btn btn-primary" id="one"
                style="background-color: #B0A5C6; color: white;border:none;">確定</button>
            </div>
          </div>
        </div>
      </div>
    </form>
    <!-- Modal -->
    <div class="modal fade" id="already" tabindex="-1" aria-labelledby="alreadyLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="alreadyLabel">您已經跟團</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <h6 style="color:red;padding-left:10px">跟團須知：</h6>
          <h6 style="padding-left:10px">請勿跟團後不購買產品，否則列入黑名單！！！</h6>
          <h6 style="padding-left:10px">跟團也無法退團</h6>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">關閉</button>
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal"
              style="background-color: #B0A5C6; color: white;border:none;">確定</button>
          </div>
        </div>
      </div>
    </div>

    <?php
    $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');
    $sql = "select * from shop where shop_id=$shop_id";
    $result = mysqli_query($link, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
      echo '
      <!-- Showcase -->
      <div class="card mb-3" style="border: none;background-color: #ffffff00;">
        <div class="row g-0">
          <div class="col-md-5">
            <div class="profile-picture big-profile-picture clear">
              <img width="100%" height="100%" alt="Anne Hathaway picture"
                src="', $row["shop_avatar"], '">
            </div>
            <br>
            <center>
              <a href="../shop/shop.php" class="btn-get-started animate__animated animate__fadeInUp scrollto"
                style="text-decoration: none;font-weight: 600;">', $row["shop_name"], '</a>
            </center>
          </div>
          ';
    }
    ?>

    <?php
    $commodity_group_id = $_GET["commodity_group_id"];
    $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');
    $sql = "select * from commodity_group where commodity_group_id=$commodity_group_id";
    $result = mysqli_query($link, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
      echo '
          <div class="col-md-7">
            <h3 class="card-title"><b>', $row["commodity_group_name"], '</b>';
      $commodity_group_id = $_GET["commodity_group_id"];
      $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');
      $sql2 = "SELECT COUNT(*) AS total FROM withgroup WHERE commodity_group_id = '$commodity_group_id';";
      $result2 = mysqli_query($link, $sql2);
      $row2 = mysqli_fetch_assoc($result2);
      echo '<small style="font-size: 0.4cm;font-weight: bold;">（跟團人數：<span style="color:#B0A5C6;">', $row2["total"], '人</span>）';
      if ($row["commodity_group_state"] == 2) {
        echo '<button type="button" class="btn-floating" style="background-color:red;color:white;" disabled>已結單</button></small>';
      }
      if ($row["commodity_group_state"] == 1) {
        echo '<button type="button" class="btn-floating" style="background-color:green;color:white;" disabled>進行中</button></small>';
      } if ($row["commodity_group_state"] == 3){
        echo '<button type="button" class="btn-floating" style="background-color:green;color:white;" disabled>未成團</button></small>';
      }
      if ($row["commodity_group_state"] == 4) {
        echo '<button type="button" class="btn-floating" style="background-color:red;color:white;" disabled>危險團體</button></small>';
      }
      echo '</h3>
            <div class="card-text"  style="height:120px;overflow-y:scroll;">
                <p style="color: #5a5a5a;font-size: 0.4cm">', nl2br($row["commodity_group_narrate"]), '</p>
            
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
          <div class="seven" id="list-item-2">
            <h1>跟團須知&常見問題</h1>
          </div><br>
          <div id="why-us" class="why-us section-bg">
            <div class="container-fluid" data-aos="fade-up">
              <div class="col-lg-12   align-items-stretch  order-2 order-lg-1">

                <div class="accordion-list">
                  <ul>
                    <?php
                    $i = 1;
                    $sql = "select *
                  from shop_rule
                  where shop_id='$shop_id'";
                    $result = mysqli_query($link, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                      echo '
                    <li>
                      <a data-bs-toggle="collapse" ';
                      if ($i == 1) {
                        echo 'class="collapse"';
                      } else {
                        echo 'class="collapsed"';
                      }
                      echo 'data-bs-target="#accordion-list-', $i, '">', $row["title"], '<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                      <div id="accordion-list-', $i, '" ';
                      if ($i == 1) {
                        echo 'class="collapse show"';
                      } else {
                        echo 'class="collapse"';
                      }
                      echo ' data-bs-parent=".accordion-list">
                        <p>', nl2br($row['narrate']), '</p>

                      </div>
                    </li>';
                      $i++;
                    }
                    mysqli_close($link);
                    ?>

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
              <form method="post" action="order.php?commodity_group_id=<?php echo $commodity_group_id; ?>">
                <table id="cart" class="table table-hover table-condensed">
                  <thead>
                    <tr>
                      <th style="width:50%">商品名稱</th>
                      <th>價錢</th>
                      <th style="width:10%">數量</th>
                      <th class="text-center">合計</th>
                    </tr>
                  </thead>
                  <?php
                  $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');
                  $commodity_group_id = $_GET["commodity_group_id"];
                  $sql = "SELECT commodity.*, MIN(commodity_photo.commodity_photo) AS first_photo
                  FROM commodity
                  JOIN commodity_photo ON commodity.commodity_id = commodity_photo.commodity_id
                  WHERE commodity.commodity_state = 1 AND commodity_group_id=$commodity_group_id
                  GROUP BY commodity.commodity_id;
                  ";
                  $result = mysqli_query($link, $sql);

                  while ($row = mysqli_fetch_assoc($result)) {

                    echo '
                    <tr>
                    <td data-th="Product">
                      <div class="row">
                        <div class="col-sm-4 hidden-xs">
                          <a href="doll.php?commodity_id=', $row["commodity_id"], '" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details">
                          <img src="', $row["first_photo"], '" alt="..." class="img-responsive" />
                          </a>
                      </div>
                      <div class="col-sm-8">
                          <h4 class="nomargin"><b>', $row["commodity_name"], '</b></h4>
                          <p>', nl2br($row["commodity_narrate"]), '</p>
                      </div>
                      </div>
                    </td>
                    <td data-th="Price">$', $row["commodity_price"], '</td>
                    <td data-th="Quantity">
                      <input type="number" name="quantity_', $row["commodity_id"], '" 
                      id="quantityInput', $row["commodity_id"], '" class="form-control text-center" value="0" >
                    </td>
                    <td data-th="Subtotal" class="text-center">$0</td>
                  </tr>';
                  }
                  echo '
                  <tfoot>
                    <tr>
                      <td colspan="2" class="hidden-xs text-center"></td>
                      <td class="hidden-xs text-center" id="totalPrice"><strong>總計 $0</strong></td>';
                  $commodity_group_id = $_GET["commodity_group_id"];
                  $account = $_SESSION["account"];
                  $sql2 = "SELECT * FROM withgroup NATURAL JOIN commodity_group WHERE account = '$account' and commodity_group_id=$commodity_group_id";
                  $result2 = mysqli_query($link, $sql2);
                  $row2 = mysqli_fetch_assoc($result2);
                  if(isset($account)&& ($row2["commodity_group_state"] == 1 || $row2["commodity_group_state"] == 3) && time() < strtotime($row2["close_order_date"])){
                  if ($result2 && mysqli_num_rows($result2) != 0) {
                    echo '
                      <td class="text-right">
                        <center><button type="button" data-bs-toggle="modal" data-bs-target="#remark"
                            class="btn btn-block" style="background-color: #B0A5C6; color: white;">喊單 <i
                              class="fa-solid fa-arrow-right-to-line"></i>
                          </button>
                        </center>
                      </td>';
                  }}
                  echo '</tr>
                  </tfoot>
                </table>';
                  mysqli_close($link); ?>
            </div>
          </div>
          <!-- Modal -->
          <?php
          $account = $_SESSION["account"];
          $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');
          $sql = "SELECT common_payment_account FROM account WHERE account= '$account';";
          $result = mysqli_query($link, $sql);
          $row = mysqli_fetch_assoc($result);
          echo '
          <div class="modal fade" id="remark" tabindex="-1" aria-labelledby="remarkLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header" style="background-color: #B0A5C6;">
                <h1 class="modal-title fs-5" id="evaLabel" style="font-weight:bold;color:#fff;">備註內容及付款帳戶</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <label for="remark" style="margin-left:10px;font-size:17px;font-weight:bold;color:#B0A5C6;">備註內容填寫：</label>
                <textarea id="w3review" name="remark" rows="4" cols="50" style="margin:10px;"
                  placeholder="備註內容..."></textarea>
                <label for="name2" style="margin-left:10px;font-size:17px;font-weight:bold;color:#B0A5C6;">確認付款帳戶:</label>
                <input type="text" id="name" name="name2" required minlength="4" maxlength="8" size="10"
                  style="margin:0 10px 10px 10px" value="' . $row["common_payment_account"] . '"/>
                <div class="modal-footer">
                  <button class="btn btn-secondary" data-bs-dismiss="modal" data-bs-dismiss="modal">取消</button>
                  <button class="btn btn-primary" data-bs-dismiss="modal" name="submit" type="submit"
                    style="background-color: #B0A5C6; color: white;border:none;">確認</button>
                </div>
              </div>
            </div>
          </div>'; ?>
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
                $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');
                $commodity_group_id = $_GET["commodity_group_id"];
                $sql = "select * from commodity_group_announce natural join commodity_group 
                natural join shop natural join account where commodity_group_id ='$commodity_group_id'";
                $result = mysqli_query($link, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                  echo '
                <div class="item">
                  <div class="col-sm-10">
                    <div class="card">
                      <div class="card-header">
                        <div class="col-md-12" style="display: flex; align-items: center;">
                          <div class="profile-picture big-profile-picture clear"
                            style="width: 50px; height: 50px; border: 0; margin-right: 10px;">
                            <img width="100%" height="100%" alt="Anne Hathaway picture"
                              src="', $row["user_avatar"], '">
                          </div>
                          <div style="flex-grow: 7;">
                            <p>團主：</p>
                            <h5>', $row["announce_title"], '</h5>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <p class="card-text">
                        <p>尊敬的客戶:</p>
                        ', nl2br($row["announce_narrate"]), '
                        </p>
                      </div>
                    </div>
                  </div>
                </div>';
                }
                mysqli_close($link);
                ?>
              </div>
            </div>
            <br>
            <h3><i class="fa-solid fa-circle-question"></i>詢問區</h3>
            <?php
            $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');
            $account = $_SESSION["account"];
            $sql = "select * from  account where account='$account'";
            $result = mysqli_query($link, $sql);
            $row = mysqli_fetch_assoc($result);
            echo '
            <div class="part2" id="card">
              <div class="card border-secondary mb-12" style="width: 100%;border-radius: 0;">
                <div class="card-header bg-transparent border-secondary">
                  <div class="col-md-1">
                    <div class="profile-picture big-profile-picture clear"
                      style="width: 50px; height: 50px; border:0cm ;float: left;margin-left: -10px;">
                      <img width="100%" height="100%" alt="Anne Hathaway picture"
                        src="', $row["user_avatar"], '">
                    </div>
                  </div>
                  ';
                  if($row["account"]==$_SESSION["account"]){
                    echo'
                  <h4 class="card-title" style="font-size: 0.6cm;float: left;margin-top: 13px;"><small>詢問內容...</small>
                  </h4>';}
                  echo'
                  <button class="btn btn-info btn-sm"
                    style="font-size: 0.3cm;float: right;margin-top: 13px;background-color: #b0a5c6a8;border: none;color: white;"><i
                      class="fa-solid fa-pen-to-square"></i></button>
                </div>
              </div>
            </div>';
            mysqli_close($link);
            ?>
            <div style="max-height:600px;overflow-y:scroll;">
              <?php
              $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');
              $account = $_SESSION["account"];
              $commodity_group_id = $_GET["commodity_group_id"];
              $sql = "SELECT * FROM question NATURAL JOIN account 
            WHERE commodity_group_id ='$commodity_group_id' 
            AND public='公開'
            OR account= '$account';";

              $result = mysqli_query($link, $sql);
              while ($row = mysqli_fetch_assoc($result)) {
                $question_id = $row["question_id"];

                echo '
              <div class="part2">
              <div class="card border-secondary mb-12">
                <div class="card-header bg-transparent border-secondary">
                  <div class="col-md-12">
                    <div class="profile-picture big-profile-picture clear"
                      style="width: 50px; height: 50px; border:0cm ;float: left;margin-left: -10px;">
                      <img width="100%" height="100%" alt="Anne Hathaway picture" src="', $row["user_avatar"], '">
                    </div>
                    <p>', $row["account"], '：</p>
                    <h4><B>', $row["question_title"], '</B></h4>
                  </div>
                  <h4 style="float: right;margin-top:-70px;">
                    <i class="fa-solid fa-ellipsis-vertical" data-bs-toggle="modal" 
                    data-bs-target="#deloredit' . $question_id . '"></i>
                  </h4>
                </div>
                
                <div class="card-body " id="card' . $question_id . '">
                  <p>', nl2br($row["question_narrate"]), '</p>';

                $sql2 = "SELECT question_photo_link FROM question_photo WHERE question_id = '$question_id'";
                $result2 = mysqli_query($link, $sql2);
                // 逐行顯示 question_photo
                while ($photo_row = mysqli_fetch_assoc($result2)) {
                  echo '<img src="' . $photo_row["question_photo_link"] . '" alt="question Photo">';
                }
                echo '<div id="overlay"></div>
                </div>
                <div class="card-footer bg-transparent border-secondary">
                  <h4 style="margin-top:-3px;margin-bottom:-3px;margin-left: 10px;">
                    <i class="bi bi-clock"></i>&nbsp;<small datetime="2020-01-01">', $row["time"], '</small>&nbsp;
                    <i class="bi bi-chat-dots"></i>&nbsp;<small>2</small>
                  </h4>
                </div>
              </div>
            </div>';
                echo '<!-- Modal -->
                <form action="adddis.php?commodity_group_id=' . $commodity_group_id . '" method="post" role="form" >
            <div class="modal fade" id="deloredit' . $question_id . '" tabindex="-1" aria-labelledby="deloreditLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header" >
                    <h1 class="modal-title fs-5" id="deloreditLabel">想要編輯還是刪除？</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-footer">
                  <input type="hidden" name="question_id" value="', $row["question_id"], '">
                    <button type="button" class="btn btn-secondary"  data-bs-dismiss="modal"><a href="../lisa/adddiscussion.php?commodity_group_id=' . $commodity_group_id . '&question_id=' . $question_id . '" style="text-decoration: none;color: #fff;">編輯</a></button>
                    <button type="submit" name="deldis" class="btn btn-primary" data-bs-dismiss="modal" style="background-color: #b0a5c6a8;border: none;color: white;">刪除</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
          ';
                echo '
            <script>
            document.addEventListener("DOMContentLoaded", function () {
              var part3 = document.getElementById(\'card' . $question_id . '\');
               part3.addEventListener(\'click\', function () {
                // 导航到新页面
                window.location.href = \'../lisa/discussion.php?commodity_group_id=' . $commodity_group_id . '&question_id=' . $question_id . '#blog\';
                // 页面加载后延迟执行滚动到指定区域
                window.addEventListener(\'load\', function () {
                  setTimeout(function () {
                     var targetElement = document.querySelector(\'#blog\');
                     if (targetElement) {
                      targetElement.scrollIntoView();
                     }
                    }, 1000); // 延迟 1 秒执行滚动操作
                  });
                });
              });
              </script>';
              }
              mysqli_close($link);
              ?>
            </div>
            <?php
            $commodity_group_id = $_GET["commodity_group_id"];
            // 使用 echo 在 PHP 中生成 JavaScript 語句，將 PHP 值傳遞到 JavaScript 中
            echo '
            <script>
            document.addEventListener("DOMContentLoaded", function () {
              var part3 = document.getElementById(\'card\');
               part3.addEventListener(\'click\', function () {
                // 导航到新页面
                window.location.href = \'../lisa/adddiscussion.php?commodity_group_id=' . $commodity_group_id . '#first\';
                // 页面加载后延迟执行滚动到指定区域
                window.addEventListener(\'load\', function () {
                  setTimeout(function () {
                     var targetElement = document.querySelector(\'#first\');
                     if (targetElement) {
                      targetElement.scrollIntoView();
                     }
                    }, 1000); // 延迟 1 秒执行滚动操作
                  });
                });
              });
              </script>';

            ?>
        </section>
        <section id="order">
          <h2>Returns</h2>
          <h4>對帳表:</h4>
          <div class="table-responsive">
            <table id="example" class="table table-hover" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>訂單編號</th>
                  <th>帳號</th>
                  <th>下單時間</th>
                  <th>總金額</th>
                  <th>確認付款</th>
                  <th>明細</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');
                if (!$link) {
                  die('Connection failed: ' . mysqli_connect_error());
                }
                $sql = "SELECT `order`.*, order_details.*, MIN(commodity.commodity_id) AS first_order
           FROM order_details natural JOIN `order` natural JOIN commodity
           WHERE commodity_group_id=$commodity_group_id
           GROUP BY order_details.order_id";
                $result = mysqli_query($link, $sql);

                if (!$result) {
                  die('Query failed: ' . mysqli_error($link));
                }
                while ($row = mysqli_fetch_assoc($result)) {
                  $order_id = $row['order_id']; // 獲取訂單 ID
                
                  // 在迴圈內部執行第二個查詢
                  $sql2 = "SELECT SUM(order_details.order_details_num * commodity.commodity_price) AS totalprice
                       FROM order_details
                       JOIN commodity ON order_details.commodity_id = commodity.commodity_id
                       WHERE `order_details`.order_id = $order_id"; // 使用訂單 ID
                
                  $result2 = mysqli_query($link, $sql2);
                  $totalprice = 0;
                  if ($result2 && mysqli_num_rows($result2) > 0) {
                    $totalprice_row = mysqli_fetch_assoc($result2);
                    $totalprice = $totalprice_row['totalprice'];
                  }
                  echo '<tr>';
                  echo '
              <td>' . $row['order_id'] . '</td>
            <td>' . $row['account'] . '</td>
            <td>' . $row['order_time'] . '</td>
            <td>' . $totalprice . '</td>
            <td>' . ($row['payment_state'] == 1 ? '未付款' : '已付款') . '</td>';
                  echo '
                  <td><button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#details' . $row['order_id'] . '"
                style="background-color: #E9C9D6;border: none;color: white;">明細查看</button>
                </td>
                ';
                  echo '</tr>';
                }
                mysqli_close($link);
                ?>
              </tbody>
            </table>
          </div>
          <?php
          $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');
          if (!$link) {
            die('Connection failed: ' . mysqli_connect_error());
          }
          $sql = "SELECT * FROM `order` NATURAL JOIN order_details natural join commodity";
          $commodity_group_id = $_GET["commodity_group_id"];
          $result = mysqli_query($link, $sql);
          if (!$result) {
            die('Query failed: ' . mysqli_error($link));
          }
          while ($row = mysqli_fetch_assoc($result)) {
            echo '
          <div class="modal fade" id="details' . $row['order_id'] . '" tabindex="-1" aria-labelledby="detailsLabel" aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header" style="background-color: #B0A5C6;">
                <h1 class="modal-title fs-5" id="evaLabel" style="font-weight:bold;color:#fff;">訂單詳細</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table width="100%" class="table table-hover" style="padding:10px;border-radius:5px;">
                      <tr>
                        <th style="font-size:17px;font-weight:bold;color:#B0A5C6;">訂單內容：</th>
                        <td>
                        <ul>';
            $order_id = $row['order_id']; // 獲取訂單 ID
            $order_state = $row['order_state'];
            $account = $row['account'];
            $remark = $row['remark'];
            $sql2 = "SELECT * FROM `order` NATURAL JOIN order_details natural join commodity natural join commodity_group where order_id=$order_id ";
            $result2 = mysqli_query($link, $sql2);
            if (!$result2) {
              die('Query failed: ' . mysqli_error($link));
            }
            while ($row = mysqli_fetch_assoc($result2)) {
              echo '
                        <li>' . $row['commodity_name'] . '/ ' . $row['order_details_num'] . '個</li>';
            }
            echo '</ul>
                        </td>
                      </tr>
                      <tr>
                        <th style="font-size:17px;font-weight:bold;color:#B0A5C6;">備註內容：</th>
                        <td>
                        <p>' . nl2br($remark) . '</p>
                        </td>
                      </tr>
                      <tr >
                        <th style="font-size:17px;font-weight:bold;color:#B0A5C6;">訂單狀態說明：</th>
                        <td>
                        <p>' . $order_state . '</p>
                        </td>
                      </tr>
                      <tr >
                        <th style="font-size:17px;font-weight:bold;color:#B0A5C6;">訂單狀況：</th>
                        <td>
                       ';
                        if($account==$_SESSION["account"]){
                        echo'
                        <p style="color:red;">訂單已被接收後將不能刪除訂單</p>
                        <p style="color:red;">請確認收貨後再點擊完成訂單</p>';
                        if(isset($_SESSION["account"])&& $row["order_state"]!="未成立" && ($row["commodity_group_state"] == 1 || $row["commodity_group_state"] == 3)){
                        echo'<button class="btn btn-primary" name="delorder" style="background-color:#e1bbca; border: none; color: white;">刪除訂單</button>
                        <button class="btn btn-primary"  type="button" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#eva' . $order_id . '"
                        style="background-color: #E9C9D6; border: none; color: white;">完成訂單</button>';}
                      }
                      echo'</tr>
                    </table>
                  </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">關閉</button>
                  <button type="button" class="btn btn-primary" data-bs-dismiss="modal" style="background-color: #B0A5C6; color: white;border:none;">確定</button>
                </div>
              </div>
            </div>
          </div>';
            echo
              '<form  method="post" action="evaluate.php?commodity_group_id=' . $commodity_group_id . '"   enctype="multipart/form-data">
              <input type="hidden" name="order_id" value="', $order_id, '">
          <div class="modal fade" id="eva' . $order_id . '" tabindex="-1" aria-labelledby="evaLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header" style="background-color: #B0A5C6;">
                  <h1 class="modal-title fs-5" id="evaLabel" style="font-weight:bold;color:#fff;">訂單評價</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <table width="100%">
                <tr>
                  <td>
                    <p style="font-size:17px;font-weight:bold;color:#B0A5C6;">評價等級：</p>
                  </td>
                  <td>
                    <div class="d-grid gap-2 d-md-block">
                    <input type="radio" name="rating" class="link_ch" id="star1', $order_id, '" value="5"><label class="icon-label3" for="star1', $order_id, '"><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i></label>
                    <input type="radio" name="rating" class="link_ch" id="star2', $order_id, '" value="4"><label class="icon-label3" for="star2', $order_id, '"><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i></label>
                    <input type="radio" name="rating" class="link_ch" id="star3', $order_id, '" value="3"><label class="icon-label3" for="star3', $order_id, '"><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i></label>
                    <input type="radio" name="rating" class="link_ch" id="star4', $order_id, '" value="2"><label class="icon-label3" for="star4', $order_id, '"><i class="fa-solid fa-wand-sparkles"></i><i class="fa-solid fa-wand-sparkles"></i></label>
                    <input type="radio" name="rating" class="link_ch" id="star5', $order_id, '" value="1"><label class="icon-label3" for="star5', $order_id, '"><i class="fa-solid fa-wand-sparkles"></i></label>
            
                    
                    </div>
                  </td>
                
                </tr>
                <tr>
                  <td>
                    <p style="font-size:17px;font-weight:bold;color:#B0A5C6;">評價內容：</p>
                  </td>
                  <td>
                    <textarea id="eva_narrate" name="eva_narrate" class="form-control" rows="5" width="100%"
                    placeholder="評價內容..."></textarea>
                  
                  </td>
                
                </tr>
                <tr>
                  <td>
                    <p style="font-size:17px;font-weight:bold;color:#B0A5C6;">上傳照片：</p>
                  </td>
                  <td>
                  
                    <fieldset>
                    <input type="file" id="file-uploader" class="form-control" data-target="file-uploader" accept="image/*"
                      name="evaluate_photo[]" multiple  />
                    </fieldset>
                  </td>
                
                </tr>
                
                </table>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary"  data-bs-dismiss="modal">取消</button>
                  <button type="submit"  name="submit" class="btn btn-primary" data-bs-dismiss="modal" style="background-color: #B0A5C6; color: white;border:none;">確定</button>
                </div>
              </div>
            </div>
          </div>
          </form>
          
          ';

          }
          mysqli_close($link);
          ?>

          <button onclick="showCsv()" class="btn btn-block"
            style="background-color: #B0A5C6; color: white;">顯示csv檔</button>
          <button onclick="download()" class="btn btn-block"
            style="background-color: #B0A5C6; color: white;">下載成excel檔</button>
          <br><br><br>
          <div class="seven">
            <h1>認證上傳區塊</h1>
          </div>
          <form action="addconform.php?commodity_group_id=<?php echo $commodity_group_id; ?>" method="post" role="form"
            enctype="multipart/form-data">
            <center>
              <div class="card" style="width:80%">
                <?php
                $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');
                $account = $_SESSION["account"];
                $commodity_group_id = $_GET["commodity_group_id"];
                $sql = "SELECT * FROM  account NATURAL JOIN `order` NATURAL JOIN order_details NATURAL JOIN commodity  WHERE account='$account' AND commodity_group_id={$commodity_group_id} ";
                $result = mysqli_query($link, $sql);
                $row = mysqli_fetch_assoc($result);
                if(isset($account) && mysqli_num_rows($result) != 0){
                echo '
                    <div class="card-header">
                    <div class="profile-picture big-profile-picture clear"
                      style="width: 50px; height: 50px; border:0cm ;float: left;margin-top: 20px; margin-bottom: 20px;">
                      <img width="100%" height="100%" alt="Anne Hathaway picture"
                        src="' . $row["user_avatar"] . '">
                        
                    </div>
                  <div style="float: left;margin-top: 45px; margin-left: 20px;font-size:0.7cm;">
                    <h5>' . $account . '</h5>
                  </div>
                  </div>
                <div class="card-body">
                  <div class="mb-3">
                  <h5 style="float:left;color:	#3C3C3C;"><b>無卡付款證明上傳：</b></h5>
                  <input  class="form-control" type="file" id="file-uploader" data-target="file-uploader" accept="image/*"
                  name="proof_photo[]" multiple/>
                  <input type="hidden" name="order_id" value="', $order_id, '">
                </div>
                </div>
                <div class="card-footer">
                  <button class="btn btn-primary" name="submit" type="submit"
                  style="background-color: #E9C9D6;border: none;color: white;">上傳</button>
                </div>'; }?>
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