<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>詢問內容</title>
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
    <link href="assets/css/discussion.css" rel="stylesheet">
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

      if ($result2 && mysqli_num_rows($result2) == 0) {
        echo '
    <div class="background-overlay" style="position: absolute;
    top: 0;
    width: 100%;
    height: 100%;background-color: rgba(237, 237, 237, 0.733)">
    </div>
    <div class="edit_like_shop_button">
    <button type="submit" name="submit" class="btn insert_button"><i class="fa-solid fa-heart"></i>&nbsp;收藏</button>';
      }

      $sql = "SELECT * FROM withgroup WHERE account = '$account' and commodity_group_id=$commodity_group_id";
      $result = mysqli_query($link, $sql);

      if ($result && mysqli_num_rows($result) == 0) {
        echo '
    <button type="button" class="btn insert_button" data-bs-toggle="modal" data-bs-target="#leave" id="one1">
    <i class="fa-solid fa-share-from-square"></i>我要跟團</button>
    </div>
    <div style="display: flex; align-items: center; justify-content: center;">
    <div  style="margin-left: 300px; margin-top: -50px;z-index: 9;">
    <p><i class="fa-solid fa-bullhorn"></i></p>
    </div>
    <div>
    <center>
    <marquee>
    <span>公告：商品即將寄出，請注意到貨時間！</span>
    <span>公告：商品即將寄出，請注意到貨時間！</span>
    <span>公告：商品即將寄出，請注意到貨時間！</span>
    </marquee>
    </center>
    ';
      }
      if ($result2 && mysqli_num_rows($result2) != 0) {
        echo '
      <div class="background-overlay" style="position: absolute;
      top: 0;
      width: 100%;
      height: 100%;background-color: rgba(237, 237, 237, 0.733)">
      </div>
      <div class="edit_like_shop_button">
      <button type="submit" name="submit2" class="btn insert_button"><i class="fa-solid fa-heart"></i>&nbsp;取消收藏</button>';
      }

      $sql = "SELECT * FROM withgroup WHERE account = '$account' and commodity_group_id=$commodity_group_id";
      $result = mysqli_query($link, $sql);

      if ($result && mysqli_num_rows($result) != 0) {
        echo '
      <button type="button" class="btn insert_button" data-bs-toggle="modal" data-bs-target="#leave" id="one1">
      <i class="fa-solid fa-share-from-square"></i>取消跟團</button>
      </div>
      <div style="display: flex; align-items: center; justify-content: center;">
      <div  style="margin-left: 300px; margin-top: -50px;z-index: 9;">
      <p><i class="fa-solid fa-bullhorn"></i></p>
      </div>
      <div>
      <center>
      <marquee>
      <span>公告：商品即將寄出，請注意到貨時間！</span>
      <span>公告：商品即將寄出，請注意到貨時間！</span>
      <span>公告：商品即將寄出，請注意到貨時間！</span>
      </marquee>
      </center>
      ';
      }

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
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">確定</button>
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
            <div class="profile-picture big-profile-picture clear" style="text-align: center;margin-top: 10px;">
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
      echo '<small style="font-size: 0.4cm;font-weight: bold;"><br>跟團人數：<span style="color:#B0A5C6;">', $row2["total"], '人</span></small>';
      echo '</h3>
            <div class="card-text">
                <p style="color: #5a5a5a;font-size: 0.3cm">', $row["commodity_group_narrate"], '</p>

              <div class="card-text" style="position: absolute; bottom: 0;">
                <div class="content" style="background-color: #ffffff00;margin-left: -10px;">
                  <div class="buttons">
                    <div id="three" class="button">#xxx</div>
                    <div id="four" class="button">#xxx</div><br>
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
                          <p>', $row["commodity_narrate"], '</p>
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
                  mysqli_close($link); ?>

                  <tfoot>
                    <tr>
                      <td colspan="2" class="hidden-xs text-center"></td>
                      <td class="hidden-xs text-center" id="totalPrice"><strong>總計 $0</strong></td>
                      <td class="text-right">
                        <center><button type="button" data-bs-toggle="modal" data-bs-target="#remark"
                            class="btn btn-block" style="background-color: #B0A5C6; color: white;">結帳 <i
                              class="fa-solid fa-arrow-right-to-line"></i>
                          </button>
                        </center>
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
                    <form action="adddis.php?commodity_group_id=<?php echo $commodity_group_id; ?>" method="post"
                        role="form" enctype="multipart/form-data">
                        <center>
                            <div class="card" style="width:80%">
                                <?php
                                $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');
                                $account = $_SESSION["account"];
                                $sql = "select * from  account where account='$account'";
                                $result = mysqli_query($link, $sql);
                                $row = mysqli_fetch_assoc($result);
                                    echo '
                    <div class="card-header">
                    <div class="profile-picture big-profile-picture clear"
                      style="width: 50px; height: 50px; border:0cm ;float: left;margin-top: 20px; margin-bottom: 20px;">
                      <img width="100%" height="100%" alt="Anne Hathaway picture"
                        src="' . $row["user_avatar"] . '">
                        
                    </div>
                  <div style="float: left;margin-top: 45px; margin-left: 20px;font-size:0.7cm;">
                    <h5>' . $account. '</h5>
                  </div>
                  <select class="form-select" aria-label="Default select example" style="width:100px;float:right;margin-top:30px;"
                  name="public">
                  <option value="公開">公開</option>
                  <option value="不公開">不公開</option>
                  </select>
                  </div>
                <div class="card-body">
                  <input type="text" class="form-control" name="question_title" placeholder="標題" required>
                  <br>
                  <textarea class="form-control" name="question_narrate" rows="5" placeholder="內容"
                  style="max-height:250px;overflow-y:scroll;" required></textarea>
                  <br>
                  <div class="mb-3">
                  <input  class="form-control" type="file" id="file-uploader" data-target="file-uploader" accept="image/*"
                  name="question_photo[]" multiple/>
                </div>
                </div>
                <div class="card-footer">
                  <button class="btn btn-primary" name="submit" type="submit"
                  style="background-color: #E9C9D6;border: none;color: white;">上傳</button>
                </div>';
                                ?>
                            </div>
                        </center>
                    </form>

                </section><!-- End Contact Section -->
                <section id="order">
                    <h2>Returns</h2>
                    <h4>對帳表:</h4>
                    <div style="max-height: 400px;overflow-y: auto;overflow-x: hidden;">
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
           GROUP BY order_details.order_id
                  ";
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
            <td>' . $row['payment_state'] . '</td>';
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
                    $sql = "SELECT *FROM `order` NATURAL JOIN order_details natural join commodity";
                    $commodity_group_id = $_GET["commodity_group_id"];
                    $result = mysqli_query($link, $sql);
                    if (!$result) {
                        die('Query failed: ' . mysqli_error($link));
                    }
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '
            <form  method="post" action="orderdetail.php?commodity_group_id=' . $commodity_group_id . '">
            <input type="hidden" name="order_id" value="', $row["order_id"], '">
          <div class="modal fade" id="details' . $row['order_id'] . '" tabindex="-1" aria-labelledby="detailsLabel" aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="detailsLabel">訂單詳細</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                
                    <table width="100%" class="table table-hover" style="padding:10px;border-radius:5px;">
                      <tr>
                        <th>訂單內容</th>
                        <td>
                        <ul>';
                        $order_id = $row['order_id']; // 獲取訂單 ID
                        $order_state = $row['order_state'];
                        $remark = $row['remark'];
                        $sql2 = "SELECT *FROM `order` NATURAL JOIN order_details natural join commodity where order_id=$order_id ";
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
                        <th>備註內容</th>
                        <td>
                        <p>' . $remark . '</p>
                        </td>
                      </tr>
                      <tr >
                        <th>訂單狀態說明</th>
                        <td>
                        <p>' . $order_state . '</p>
                        </td>
                      </tr>
                      <tr >
                        <th >訂單狀況</th>
                        <td>
                        <p style="color:red;">請在確認好收貨後再點擊</p>
                        <button class="btn btn-primary" name="complete"
                        style="background-color: #E9C9D6;border: none;color: white;">完成訂單</button>
                        </td>
                      </tr>
                    </table>
                  </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">關閉</button>
                  <button type="submit" name="submit" class="btn btn-primary">確定</button>
                </div>
              </div>
            </div>
          </div>
          </form>';

                    }
                    mysqli_close($link);
                    ?>
                    <button onclick="showCsv()" class="btn btn-block"
                        style="background-color: #B0A5C6; color: white;">顯示csv檔</button>
                    <button onclick="download()" class="btn btn-block"
                        style="background-color: #B0A5C6; color: white;">下載成excel檔</button>
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