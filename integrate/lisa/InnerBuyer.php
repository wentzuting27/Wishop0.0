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
  <link href="assets/img/logo2.png" rel="icon">
  <link href="assets/img/logo2.png" rel="apple-touch-icon">

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
  <link href="assets/css/InnerCos.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/388b3c67c2.js" crossorigin="anonymous"></script>
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
    integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc"
    crossorigin="anonymous"></script>

</head>
<?php session_start(); ?>
<style>
  .nav-link {
    color: #B19CD9;
    /* 紫色文字 */
  }

  .nav-link:hover {
    color: #8A6BBE;
    /* 鼠标悬停时的更深的紫色文字 */
  }
</style>

<body>
  <!-- ======= Header ======= -->
  <!-- End Header -->
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
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
    $commodity_group_id = $_GET["commodity_group_id"];
    $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');
    $sql = "select *
  from commodity_group
  where commodity_group_id=$commodity_group_id";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($result);
    $shop_id = $row["shop_id"];
    echo '
    <section id="hero" style="background-image: url(', $row["commodity_group_bg"], '); background-size: cover; background-position: center;
    ;">
    <div class="background-overlay" style="position: absolute;
    top: 0;
    width: 100%;
    height: 100%;background-color: rgba(237, 237, 237, 0.733)">
    </div>';
    if (isset($_SESSION["account"]) && ($row["commodity_group_state"] == 1 || $row["commodity_group_state"] == 3)) {
      echo '
    <div class="edit_like_shop_button">
      <button type="button" class="btn insert_button" data-bs-toggle="modal" data-bs-target="#up_shop_modal"><i
          class="fa-solid fa-pen-to-square"></i>&nbsp;編輯</button>';
      $sql2 = "select * from `order`
      natural join order_details
      natural join commodity
      where commodity_group_id=$commodity_group_id
      order by order_id";
      $result2 = mysqli_query($link, $sql2);
      $allOrdersComplete = true;
      while ($row2 = mysqli_fetch_assoc($result2)) {
        if ($row2["order_state"] != "完成訂單" && $row2["order_state"] != "拒絕接收") {
          $allOrdersComplete = false;
          break;
        }
      }
      if ($allOrdersComplete) {
        echo '
      <button type="button" class="btn insert_button" data-bs-toggle="modal" data-bs-target="#leave">
        <i class="fa-solid fa-hourglass-end"></i>&nbsp;結束開團</button>';
      }
      echo '
    </div>
    ';
    }
    ?>
    <!-- Modal -->
    <?php
    $commodity_group_id = $_GET["commodity_group_id"];
    $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');
    $sql = "select *
  from commodity_group
  where commodity_group_id=$commodity_group_id";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($result);
    echo '
    <div class="modal fade" id="up_shop_modal" tabindex="-1" aria-labelledby="update_shop_ModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header"  style="background-color: #B0A5C6;color:white;">
                  <h1 class="modal-title fs-5" id="update_shopLabel"><b>編輯商品團體</b></h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form method="post" action="editcom.php?commodity_group_id='.$commodity_group_id.'" enctype="multipart/form-data">
                  <input type="hidden" name="commodity_id" class="form-control" style="width: 100%;" value="'.$commodity_group_id.'">
                    <table width="100%" class="insert_group_form">
                      <tr>
                        <td width="10%" style="font-size:17px;font-weight:bold;color:#B0A5C6;">團體名稱：</td>
                        <td width="90%"><input type="text" name="commodity_group_name" class="form-control" value="'.$row["commodity_group_name"].'"></td>
                      </tr>
                      <tr>
                        <td style="font-size:17px;font-weight:bold;color:#B0A5C6;">商品團體背景</td>
                        <td>
                          <input class="form-control" type="file" id="commodity_group_bg" name="commodity_group_bg"
                            onchange="displaySelectedImage(event)">
                        </td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>
                          <table width="100%">
                            <tr>
                              <td width="30%"><img src="'.$row["commodity_group_bg"].'" class="img-fluid"
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
                        <td width="10%" style="font-size:17px;font-weight:bold;color:#B0A5C6;">商品團體簡介</td>
                        <td width="90%"><textarea name="commodity_narrate" rows="5" cols="50" class="form-control" with="100%">'.htmlspecialchars($row["commodity_group_narrate"]).'</textarea></td>
                      </tr>

                      

                      <tr>
                        <td colspan="2"><button type="submit" class="btn btn-primary" 
                        style="display: block;width: 100%;background-color: #E9C9D6;border: none;color: white;">確認修改</button></td>
                      </tr>
                    </table>
                  </form>
                </div>
              </div>
            </div>
          </div>'; ?>
    <?php
    $sql3 = "SELECT announce_title,announce_narrate FROM commodity_group_announce WHERE commodity_group_id='$commodity_group_id' order by announce_time DESC";
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
    '; ?>
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
                  <td>名稱</td>
                  <td><input type="text" id="group_name" class="form-control"></td>
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
    <!-- Button trigger modal -->
    <form method="post" action="withgroup.php?commodity_group_id=<?php echo $commodity_group_id; ?>">
      <!-- Modal -->
      <div class="modal fade" id="leave" tabindex="-1" aria-labelledby="leaveLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="leaveLabel">確定結束？</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">關閉</button>
              <button type="submit" name="delgroup" class="btn btn-primary">確定</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="leave" tabindex="-1" aria-labelledby="leaveLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="leaveLabel">確定結束？</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">關閉</button>
              <button type="submit" name="delgroup" class="btn btn-primary">確定</button>
            </div>
          </div>
        </div>
      </div>
    </form>
    <!-- Showcase -->
    <?php
    $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');
    $sql = "select *
    from shop
    where shop_id=$shop_id";
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
            <h3 class="card-title"><b>', $row["commodity_group_name"], '</b></h3>';
      $commodity_group_id = $_GET["commodity_group_id"];
      $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');
      $sql2 = "SELECT COUNT(*) AS total FROM withgroup WHERE commodity_group_id = '$commodity_group_id';";
      $result2 = mysqli_query($link, $sql2);
      $row2 = mysqli_fetch_assoc($result2);
      echo '
      <table width="100%">
        <tr>
          <td>';
          if ($row["commodity_group_state"] == 2) {
            echo '<small><p style="color: #B0A5C6;font-weight:bold;">狀態：<span style="color: #e87d7d;font-weight:bold;">已結束</span></small></p>';
          }
          if ($row["commodity_group_state"] == 1) {
            echo '<small><p style="color: #B0A5C6;font-weight:bold;">狀態：<span style="color: #83c57e;font-weight:bold;">進行中</span></small></p>';
          }
          if ($row["commodity_group_state"] == 3){
            echo '<small><p style="color: #B0A5C6;font-weight:bold;">狀態：<span style="color: #aeaeae;font-weight:bold;">未成團</span></small></p>';
          }
          if ($row["commodity_group_state"] == 4) {
            echo '<small><p style="color: #B0A5C6;font-weight:bold;">狀態：<span style="color: #d55858;font-weight:bold;">危險團體!</span></small></p>';
          }
          echo'
          </td>
          <td style="text-align:right;color: #B0A5C6;font-weight:bold;"><small>跟團人數：<span style="color:#B0A5C6;">', $row2["total"], '人</span></small></td>
        </tr>
        </table>';
      echo '
            <div class="card-text" style="height:120px;overflow-y:scroll;">
                <p style="color: #797979;font-size: 0.4cm;font-weight:bold;">', nl2br($row["commodity_group_narrate"]), '</p>

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
              <i class="fa-solid fa-circle-exclamation"></i><br><span>新增商品</span></label></li>
          <li title="Delivery Contents"><label for="tab2" role="button">
              <i class="fa-solid fa-gift"></i><br><span>管理商品</span></label></li>
          <li title="Shipping"><label for="tab3" role="button">
              <i class="fa-solid fa-comments"></i><br><span>討論區</span></label></li>
          <li title="Returns"><label for="tab4" role="button">
              <i class="fa-solid fa-cart-shopping"></i><br><span>訂單詳情</span></label></li>
        </ul>
      </div>

      <div class="slider">
        <div class="indicator"></div>
      </div>
      <div class="content" style="margin-top: -5px;padding: 0%;">
        <section class="addgoods ">
          <h2>Features</h2>
          <div class="card" style="margin-left:40px;margin-right:40px;">
            <div class="card-body">
              <form method="post" action="addcommodity.php?commodity_group_id=<?php echo $commodity_group_id; ?>"
                enctype="multipart/form-data">
                <?php
                $commodity_group_id = $_GET["commodity_group_id"];
                $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');
                $sql = "select *
             from commodity_group
             where commodity_group_id=$commodity_group_id";
                $result = mysqli_query($link, $sql);
                $row = mysqli_fetch_assoc($result);
                if ($row["commodity_group_state"] == 1 || $row["commodity_group_state"] == 3) {
                  echo '
                <div class="table-responsive">
                  <table class="table" width="100%">
                    <tbody>
                      <tr>
                        <th>商品名稱</th>
                        <td>
                          <fieldset>
                            <input placeholder="商品名稱" type="text" tabindex="5" name="commodity_name" required autofocus class="form-control">
                          </fieldset>
                        </td>
                      </tr>
                      <tr>
                        <th>商品敘述</th>
                        <td>
                          <fieldset>
                            <textarea placeholder="商品敘述" tabindex="5" name="commodity_narrate" required class="form-control"></textarea>
                          </fieldset>
                        </td>
                      </tr>
                      <tr>
                        <th>商品狀態</th>
                        <td>
                          <div>
                            <input type="radio" id="1" name="commodity_state" value="1" checked / class="form-check-input">
                            <label for="add1">上架</label>
                          </div>
                          <div>
                            <input type="radio" id="2" name="commodity_state" value="2" / class="form-check-input">
                            <label for="add2">待上架</label>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th>金額</th>
                        <td>
                          <fieldset>
                            <input placeholder="金額" type="text" tabindex="1" name="commodity_price" required class="form-control">
                          </fieldset>
                        </td>

                      </tr>
                      <tr>
                        <th>連結</th>
                        <td>
                          <fieldset>
                            <input placeholder="連結" type="text" tabindex="1" name="commodity_link" class="form-control">
                          </fieldset>
                        </td>
                      </tr>
                      <tr>
                        <th>上傳圖片</th>
                        <td>
                          <fieldset>
                            <input type="file" id="file-uploader" data-target="file-uploader" accept="image/*"
                              name="commodity_photo[]" multiple required / class="form-control">
                          </fieldset>
                        </td>
                      </tr>

                      <tr>
                        <td colspan="5">
                            <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">送出</button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              ';
                }
                ?>
              </form>
            </div>
          </div>
        </section>

        <section>
          <h2>Delivery Contents</h2>
          <!-- ======= Pricing Section ======= -->
          <div>
            <div class="small">
              <div id="list-example" class="list-group">
                <a class="list-group-item list-group-item-action" href="#list-item-1"><b>已上架區塊</b></a>
                <a class="list-group-item list-group-item-action" href="#list-item-2"><b>待上架區塊</b></a>
                <a class="list-group-item list-group-item-action" href="#list-item-3"><b>下架區塊</b></a>
              </div>
            </div>
            <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true"
              class="scrollspy-example" tabindex="0">
              <!-- change Section -->
              <div class="seven" id="list-item-1">
                <h1>已上架商品區</h1>
              </div>
              <div id="app">
                <div class="container">
                  <table id="cart" class="table table-hover table-condensed">
                    <thead>
                      <tr>
                        <th style="width:50%">商品</th>
                        <th>價格</th>
                        <th style="width:10%">已下單</th>
                      </tr>
                    </thead>
                    <?php
                    $commodity_group_id = $_GET["commodity_group_id"];
                    $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');
                    $sql = "SELECT commodity.*, MIN(commodity_photo.commodity_photo) AS first_photo
                    FROM commodity
                    JOIN commodity_photo ON commodity.commodity_id = commodity_photo.commodity_id
                    WHERE commodity.commodity_state = 1 AND commodity_group_id=$commodity_group_id
                    GROUP BY commodity.commodity_id;";
                    $result = mysqli_query($link, $sql);
                    $sql3 = "select * from commodity_group where commodity_group_id=$commodity_group_id";
                    $result3 = mysqli_query($link, $sql3);
                    $row3 = mysqli_fetch_assoc($result3);
                    if ($row3["commodity_group_state"] == 1 || $row3["commodity_group_state"] == 3) {
                      while ($row = mysqli_fetch_assoc($result)) {
                        $sql2 = "SELECT commodity_id, SUM(order_details_num) AS total_purchases
                    FROM order_details
                    WHERE commodity_id = " . $row["commodity_id"] . "
                    GROUP BY commodity_id;";
                        $result2 = mysqli_query($link, $sql2);
                        $row2 = mysqli_fetch_assoc($result2);
                        echo '
                    <tbody>
                      <tr>
                        <td data-th="Product">
                          <div class="row">
                            <div class="col-sm-4 hidden-xs">
                              <a href="doll.php?commodity_id=', $row["commodity_id"], '" class="portfolio-details-lightbox" data-glightbox="type: external"
                                title="Portfolio Details">
                                <img src="', $row["first_photo"], '"
                                  alt="..." class="img-responsive" /></a>
                            </div>
                            <div class="col-sm-8">
                              <h4 class="nomargin"><b>', $row["commodity_name"], '</b></h4>
                              <p>', nl2br($row["commodity_narrate"]), '</p>
                            </div>
                          </div>
                        </td>
                        <td data-th="Price">$', $row["commodity_price"], '</td>
                        <td data-th="Quantity">
                          <center>', (empty($row2["total_purchases"]) ? 0 : $row2["total_purchases"]), '</center>
                        </td>
                        <td class="actions" data-th=""> 
                        <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#edit', $row["commodity_id"], '"
                          style="background-color: #b0a5c6a8;border: none;color: white;">
                          <i class="fa-solid fa-pen-to-square"></i></button>
                          <button class="btn btn-danger btn-sm" style="background-color: #E9C9D6;border: none;color: white;"
                          data-bs-toggle="modal" data-bs-target="#down', $row["commodity_id"], '">
                          <i class="fa-solid fa-trash"></i>
                        </button>
                        </td>
                      </tr>
                      </tbody>';
                      }
                    }
                    mysqli_close($link);
                    ?>
                  </table>
                  <?php
                  $commodity_group_id = $_GET["commodity_group_id"];
                  $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');
                  $sql = "SELECT * FROM commodity;";
                  $result = mysqli_query($link, $sql);
                  $sql3 = "select * from commodity_group where commodity_group_id=$commodity_group_id";
                  while ($row = mysqli_fetch_assoc($result)) {
                    echo '
                    <form  method="post" action="addcommodity.php?commodity_group_id=' . $commodity_group_id . '"   enctype="multipart/form-data">
                <div class="modal fade" id="edit' . $row["commodity_id"] . '" tabindex="-1" aria-labelledby="evaLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header" style="background-color: #B0A5C6;">
                        <h1 class="modal-title fs-5" id="evaLabel" style="font-weight:bold;color:#fff;">編輯商品資訊</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                      <table width="100%">
                      <p style="color:red;">請輸入欲更改之項目就好</p>
                      <tr>
                        <td>
                          <p style="font-size:17px;font-weight:bold;color:#B0A5C6;">商品名稱：</p>
                        </td>
                        <td>
                        <input class="form-control" type="text" id="commodity_name" name="commodity_name" value="' . $row["commodity_name"] . '"/>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <p style="font-size:17px;font-weight:bold;color:#B0A5C6;">商品內容：</p>
                        </td>
                        <td>
                          <textarea id="commodity_narrate" name="commodity_narrate" class="form-control" rows="5" width="100%" >' . nl2br($row["commodity_narrate"]) . '</textarea>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <p style="font-size:17px;font-weight:bold;color:#B0A5C6;">商品連結：</p>
                        </td>
                        <td>
                        <input class="form-control" type="text" id="commodity_link" name="commodity_link"  value="' . $row["c_original_product_link"] . '"/>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <p style="font-size:17px;font-weight:bold;color:#B0A5C6;">商品價格：</p>
                        </td>
                        <td>
                        <input class="form-control" type="text" id="commodity_price" name="commodity_price"  value="' . $row["commodity_price"] . '"/>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <p style="font-size:17px;font-weight:bold;color:#B0A5C6;">上傳照片：</p>
                        </td>
                        <td>
                          <fieldset>
                          <input type="file" id="file-uploader" class="form-control" data-target="file-uploader" accept="image/*"
                            name="commodity_photo[]" multiple  />
                          </fieldset>
                        </td>
                      </tr>
                      
                      </table>
                      </div>
                      <div class="modal-footer">
                      <input type="hidden" name="commodity_id" value="', $row["commodity_id"], '">
                        <button type="button" class="btn btn-secondary"  data-bs-dismiss="modal">取消</button>
                        <button type="submit"  name="edit" class="btn btn-primary" data-bs-dismiss="modal" style="background-color: #B0A5C6; color: white;border:none;">確定</button>
                      </div>
                    </div>
                  </div>
                </div>
                </form>';
                  }
                  mysqli_close($link);
                  ?>
                  <?php
                  $commodity_group_id = $_GET["commodity_group_id"];
                  $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');
                  $sql = "SELECT * FROM commodity;";
                  $result = mysqli_query($link, $sql);
                  $sql3 = "select * from commodity_group where commodity_group_id=$commodity_group_id";
                  $result3 = mysqli_query($link, $sql3);
                  $row3 = mysqli_fetch_assoc($result3);
                  if ($row3["commodity_group_state"] == 1 || $row3["commodity_group_state"] == 3) {
                    while ($row = mysqli_fetch_assoc($result)) {
                      echo '
                    <div class="modal fade" id="down', $row["commodity_id"], '" tabindex="-1" aria-labelledby="up_rule_ModalLabel"
                      aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="up_rule_ModalLabel">確認下架？</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                            <form method="post" action="addcommodity.php?commodity_group_id=' . $commodity_group_id . '">
                            <input type="hidden" name="commodity_id" value="', $row["commodity_id"], '">
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">關閉</button>
                            <button type="submit" name="del" class="btn btn-primary">確定</button>
                            </form>
                            </div>
                            </div>
                            </div>
                             </div>';
                    }
                  }
                  mysqli_close($link);
                  ?>

                </div>
              </div>
              <br><br>
              <div class="seven" id="list-item-2">
                <h1>待上架商品區</h1>
              </div>
              <div class="row">
                <div id="slider-carouse2" class="owl-carousel">
                  <?php
                  $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');
                  $commodity_group_id = $_GET["commodity_group_id"];
                  $sql = "SELECT commodity.*, MIN(commodity_photo.commodity_photo) AS first_photo
                  FROM commodity
                  JOIN commodity_photo ON commodity.commodity_id = commodity_photo.commodity_id
                  WHERE commodity.commodity_state = 2 AND commodity_group_id=$commodity_group_id
                  GROUP BY commodity.commodity_id;";
                  $result = mysqli_query($link, $sql);
                  $sql3 = "select * from commodity_group where commodity_group_id=$commodity_group_id";
                  $result3 = mysqli_query($link, $sql3);
                  $row3 = mysqli_fetch_assoc($result3);
                  if ($row3["commodity_group_state"] == 1 || $row3["commodity_group_state"] == 3) {
                    while ($row = mysqli_fetch_assoc($result)) {
                      echo '
                  <div class="waiting">
                    <div class="card" style="width: 18rem;">
                       <a href="doll.php?commodity_id=', $row["commodity_id"], '" class="portfolio-details-lightbox" data-glightbox="type: external"
                      title="Portfolio Details">
                      <div class="card-head">
                     <img src="', $row["first_photo"], '"
                          class="card-img-top" alt="...">
                      </div></a>
                      <div class="card-body">
                        <h5 class="card-title">', $row["commodity_name"], '</h5>
                        <p class="card-text">', nl2br($row["commodity_narrate"]), '</p>
                        <button class="btn btn-info btn-sm" style="background-color: #b0a5c6a8;border: none;color: white;"
                        data-bs-toggle="modal" data-bs-target="#up', $row["commodity_id"], '">
                        <i class="fa-solid fa-arrow-up"></i>
                        </button>
                        <button class="btn btn-danger btn-sm" style="background-color: #E9C9D6;border: none;color: white;">
                          <i class="fa-solid fa-trash" data-bs-toggle="modal" data-bs-target="#down', $row["commodity_id"], '"></i>
                        </button>
                      </div>
                    </div>
                  </div>';

                    }
                  }
                  mysqli_close($link); ?>

                </div>
              </div> <?php
              $commodity_group_id = $_GET["commodity_group_id"];
              $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');
              $sql = "SELECT * FROM commodity;";
              $result = mysqli_query($link, $sql);
              while ($row = mysqli_fetch_assoc($result)) {
                echo '
                    <div class="modal fade" id="up', $row["commodity_id"], '" tabindex="-1" aria-labelledby="up"
                      aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content"> 
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="up">確認上架？</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                            <form method="post" action="addcommodity.php?commodity_group_id=' . $commodity_group_id . '">
                            <input type="hidden" name="commodity_id" value="', $row["commodity_id"], '">
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">關閉</button>
                            <button type="submit" name="up" class="btn btn-primary">確定</button>
                            </form>
                            </div>
                            </div>
                            </div>
                             </div>';
              }
              mysqli_close($link);
              ?>
              <br><br>
              <div class="seven" id="list-item-3">
                <h1>下架商品區</h1>
              </div>
              <div class="row">
                <div id="slider-carouse3" class="owl-carousel">
                  <?php
                  $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');
                  $sql = "SELECT commodity.*, MIN(commodity_photo.commodity_photo) AS first_photo
                  FROM commodity
                  JOIN commodity_photo ON commodity.commodity_id = commodity_photo.commodity_id
                  WHERE commodity.commodity_state = 3 AND commodity_group_id=$commodity_group_id
                  GROUP BY commodity.commodity_id;";
                  $result = mysqli_query($link, $sql);
                  $sql3 = "select * from commodity_group where commodity_group_id=$commodity_group_id";
                  $result3 = mysqli_query($link, $sql3);
                  $row3 = mysqli_fetch_assoc($result3);
                  if ($row3["commodity_group_state"] == 1 || $row3["commodity_group_state"] == 3) {
                    while ($row = mysqli_fetch_assoc($result)) {
                      echo '
                  <div class="waiting">
                    <div class="card" style="width: 18rem;">
                    <a href="doll.php?commodity_id=', $row["commodity_id"], '" class="portfolio-details-lightbox" data-glightbox="type: external"
                      title="Portfolio Details">
                      <div class="card-head">
                      <img
                          src="', $row["first_photo"], '"
                          class="card-img-top" alt="...">
                      </div></a>
                      <div class="card-body">
                        <h5 class="card-title">', $row["commodity_name"], '</h5>
                        <p class="card-text">', nl2br($row["commodity_narrate"]), '</p>
                        <button class="btn btn-info btn-sm"
                        style="background-color: #b0a5c6a8;border: none;color: white;"
                        data-bs-toggle="modal" data-bs-target="#ups', $row["commodity_id"], '">
                        <i class="fa-solid fa-arrow-up"></i></button>
                        <button class="btn btn-danger btn-sm" style="background-color: #E9C9D6;border: none;color: white;">
                          <i class="fa-solid fa-trash" data-bs-toggle="modal" data-bs-target="#dels', $row["commodity_id"], '"></i>
                        </button>
                      </div>
                    </div>
                  </div>'
                      ;

                    }
                  }

                  mysqli_close($link); ?>

                </div>
              </div>
              <?php
              $commodity_group_id = $_GET["commodity_group_id"];
              $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');
              $sql = "SELECT * FROM commodity;";
              $result = mysqli_query($link, $sql);
              while ($row = mysqli_fetch_assoc($result)) {
                echo '
                    <div class="modal fade" id="ups', $row["commodity_id"], '" tabindex="-1" aria-labelledby="ups"
                      aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="ups">移至待上架區？</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                            <form method="post" action="addcommodity.php?commodity_group_id=' . $commodity_group_id . '">
                            <input type="hidden" name="commodity_id" value="', $row["commodity_id"], '">
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">關閉</button>
                            <button type="submit" name="up2" class="btn btn-primary">確定</button>
                            </form>
                            </div>
                            </div>
                            </div>  
                             </div>';
              } ?>
              <?php
              $commodity_group_id = $_GET["commodity_group_id"];
              $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');
              $sql = "SELECT * FROM commodity;";
              $result = mysqli_query($link, $sql);
              while ($row = mysqli_fetch_assoc($result)) {
                echo '
                    <div class="modal fade" id="dels', $row["commodity_id"], '" tabindex="-1" aria-labelledby="ups"
                      aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="ups">確定刪除？</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                            <form method="post" action="addcommodity.php?commodity_group_id=' . $commodity_group_id . '">
                            <input type="hidden" name="commodity_id" value="', $row["commodity_id"], '">
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">關閉</button>
                            <button type="submit" name="dels" class="btn btn-primary">確定</button>
                            </form>
                            </div>
                            </div>
                            </div>  
                             </div>';
              } ?>
            </div>
          </div>
        </section>
        <section id="first">
          <h2>Shipping</h2>
          <div id="third">
          <div class="part2" id="card0">
              <div class="card border-secondary mb-12" style="width: 100%;border: none;">
                <div class="card-header  border-secondary" style="cursor: pointer;border: none;border-radius: 10px;">
                  <div class="col-md-1">
                    <?php
                    $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');
                    $account = $_SESSION["account"];

                    $sql = "select user_avatar from  commodity_group natural join account where account='$account'";
                    $result = mysqli_query($link, $sql);
                    $row = mysqli_fetch_assoc($result);
                    echo '
                    <div class="profile-picture big-profile-picture clear"
                      style="width: 50px; height: 50px; border:0cm ;float: left;margin-left: -10px;">
                      <img width="100%" height="100%" alt="Anne Hathaway picture"
                        src="', $row["user_avatar"], '">
                    </div>
                  </div>';
                    mysqli_close($link); ?>
                    <h4 class="card-title" style="font-size: 0.6cm;float: left;margin-top: 13px;">
                  <small style="color:rgba(0, 0, 0, 0.5);">&nbsp;&nbsp;發布公告</small>
                  </h4>
                  <button class="btn btn-info btn-sm"
                    style="font-size: 0.3cm;float: right;margin-top: 13px;background-color: #b0a5c6a8;border: none;color: white;"><i
                      class="fa-solid fa-pen-to-square"></i></button>
                  </div>
                </div>
              </div>
              <?php
              $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');
              $commodity_group_id = $_GET["commodity_group_id"];
              $sql4 = "SELECT * FROM commodity_group WHERE commodity_group_id = $commodity_group_id";
          $result4 = mysqli_query($link, $sql4);
          $row4 = mysqli_fetch_assoc($result4);
              if($row4["commodity_group_state"]!=2){
              echo '<script>
              window.addEventListener("DOMContentLoaded", function () {
                  var part3 = document.getElementById(\'card0\');
                  part3.addEventListener(\'click\', function () {
                      // 導航到新頁面
                      window.location.href = \'../lisa/rewrite.php?commodity_group_id=' . $commodity_group_id . '#first\';
                  });
              });
          </script>';
        }mysqli_close($link); 
              ?>
              <style>
                .filtertag h4 {
                  padding: 0.25em 0.5em;
                  /*上下 左右の余白*/
                  color: #494949;
                  /*文字色*/
                  background: transparent;
                  /*背景透明に*/
                  border-left: solid 5px #B0A5C6;
                  /*左線*/
                  font-weight: bold;
                }
              </style>
              <div class="filtertag">
                <h4>團主公告
                <button id="pra" style="float: right; border-radius: 50%;background-color:#B0A5C6; color:#FFF; border: 2px solid #B0A5C6;"><i
                      class="fa-solid fa-arrow-right"></i></button>
                </h4>
              </div>
              <div class="row">
                <div id="slider-carousel" class="owl-carousel">
                  <?php
                  $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');
                  $account = $_SESSION["account"];
                  $commodity_group_id = $_GET["commodity_group_id"];
                  $sql = "select * from commodity_group_announce natural join commodity_group natural join account 
                  where account='$account'
                  and commodity_group_id=$commodity_group_id";
                  $result = mysqli_query($link, $sql);
                  if (isset($_SESSION["account"])) {
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
                              <div style="display: flex; align-items: center; flex-grow: 7;">
                              <h5 style="margin: 0;"><b>', $row["announce_title"], '</b></h5>
                              <h4 style="float: right; margin-left:80px;cursor: pointer;">
                    <i class="fa-solid fa-ellipsis-vertical" data-bs-toggle="modal" 
                    data-bs-target="#del', $row["commodity_group_announce_id"],'"></i>
                  </h4>
                              </div>
                            </div>
                          </div>
                          <div class="card-body" style="max-height: 250px; overflow: auto;">
                            <p class="card-text">
                            ', nl2br($row["announce_narrate"]), '
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>';
                    }
                  }
                  mysqli_close($link);
                  ?>
                </div>
              </div>
              <br>
              <?php
              $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');
              $commodity_group_id = $_GET["commodity_group_id"];
              $sql = "select * from commodity_group_announce ";
              $result = mysqli_query($link, $sql);
               // 使用 echo 在 PHP 中生成 JavaScript 語句，將 PHP 值傳遞到 JavaScript 中
            $sql4 = "SELECT * FROM commodity_group WHERE commodity_group_id = $commodity_group_id";
            $result4 = mysqli_query($link, $sql4);
            $row4 = mysqli_fetch_assoc($result4);
            if(isset($_SESSION["account"])){
              if($row4["commodity_group_state"]!=2 ){
                while ($row = mysqli_fetch_assoc($result)) {
                  echo '
              <form method="post" action="addwrite.php?commodity_group_id=' . $commodity_group_id . ' ">
                    <input type="hidden" name="announce_id" value="', $row["commodity_group_announce_id"], '">
                  <!-- Modal -->
                  <div class="modal fade" id="del', $row["commodity_group_announce_id"], '" tabindex="-1" aria-labelledby="delLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="delLabel">想要編輯或刪除嗎？</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-footer">
                          <a href="../lisa/rewrite.php?commodity_group_id=' . $commodity_group_id . '&commodity_group_announce_id=' . $row["commodity_group_announce_id"] . '" style="text-decoration: none;color: #fff;"><button type="button" class="btn btn-secondary">
                          編輯</button></a>
                          <button type="submit" name="delrewrite" class="btn btn-primary" >刪除</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  </form>';
                }
                }
              }
              mysqli_close($link);
              ?>
              <div class="filtertag">
                <h4>詢問區</h4>
              </div>
              <div style="max-height:600px;overflow-y:scroll;">
                <?php
                $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');
                $commodity_group_id = $_GET["commodity_group_id"];
                $sql = "SELECT * FROM question NATURAL JOIN account  WHERE commodity_group_id ='$commodity_group_id' ;";
                $result = mysqli_query($link, $sql);
                if (isset($_SESSION["account"])) {
                  while ($row = mysqli_fetch_assoc($result)) {
                    $question_id = $row["question_id"];

                    echo '
                    <div class="part2">
                    <div class="card border-secondary mb-12"style="border:none;box-shadow: 0 2px 2px rgba(0, 0, 0, 0.1);">
                      <div class="card-header  border-secondary"style="border:none;">
                        <div class="col-md-12"style="border:none;">
                    <div class="profile-picture big-profile-picture clear"
                      style="width: 50px; height: 50px; border:0cm ;float: left;margin-left: -10px;">
                      <img width="100%" height="100%" alt="Anne Hathaway picture" src="', $row["user_avatar"], '">
                    </div>
                    <p>', $row["account"], '：</p>
                    <p>', $row["question_title"], '</p>
                  </div>';
                    if ($row["account"] == $_SESSION["account"]) {
                      echo '<h4 style="float: right;margin-top:-70px;">
                    <i class="fa-solid fa-ellipsis-vertical" data-bs-toggle="modal" 
                    data-bs-target="#deloredit' . $question_id . '"></i>
                  </h4>';
                    }
                    echo '</div>
                
                <div class="card-body " id="card' . $question_id . '" style="cursor: pointer;max-height:400px;height:1000px;overflow-y:scroll;">
                  <p>', nl2br($row["question_narrate"]), '</p>';

                  $sql2 = "SELECT question_photo_link FROM question_photo WHERE question_id = '$question_id'";
                  $sql3 = "SELECT COUNT(reply_id) AS COM FROM reply WHERE question_id = '$question_id'";
                  $result2 = mysqli_query($link, $sql2);
                  $result3 = mysqli_query($link, $sql3);
                  $row3 = mysqli_fetch_assoc($result3);
                  // 逐行顯示 question_photo
                  while ($photo_row = mysqli_fetch_assoc($result2)) {
                    echo '<img src="' . $photo_row["question_photo_link"] . '" alt="question Photo">';
                  }
                  echo '<div id="overlay"></div>
                </div>
                <div class="card-footer  border-secondary" style="border:none;">
                <h4 style="margin-top:-3px;margin-bottom:-3px;margin: 10px;">
                  <i class="bi bi-clock"></i>&nbsp;<small datetime="2020-01-01">', $row["time"], '</small>&nbsp;
                  <i class="bi bi-chat-dots"></i>&nbsp;<small>', $row3["COM"], '</small>
                </h4>
              </div>
            </div>
          </div>';
                
                    echo '
            <script>
            document.addEventListener("DOMContentLoaded", function () {
              var part3 = document.getElementById(\'card' . $question_id . '\');
               part3.addEventListener(\'click\', function () {
                // 导航到新页面
                window.location.href = \'../lisa/discussion2.php?commodity_group_id=' . $commodity_group_id . '&question_id=' . $question_id . '#blog\';
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
                  }}
                
                mysqli_close($link);
                ?>
        </section>
        <section id="order">
          <h2>Returns</h2>
          <div class="seven">
            <h1>對帳表</h1>
          </div>
          <br>
          <style>
            .qu {
              color: #B0A5C6;
            }

            .qu:hover {
              color: #E9C9D6; /* 悬停时的新颜色，例如橙色 */
            }
          </style>
          <?php
          if (!empty($_SESSION['account'])) {
            echo '
          <a href="#" data-bs-toggle="modal" data-bs-target="#update_social_Modal">
          <i class="fa-regular fa-circle-question fa-lg qu" style="float: right;" aria-hidden="true"></i>
          </a>';
          } ?>
          <style>
            /* 主體顏色設置 */
            .section-with-bg {
              padding: 20px;
            }

            /* 標籤導航樣式 */
            .section-with-bg .nav-pills .nav-link {
              color: #ffffff;
              /* 文字顏色 */
              background-color: #B0A5C6;
              /* 背景顏色 */
              border-radius: 10px;
              /* 可以選擇是否設置圓角 */
              margin-right: 15px;
              /* 調整按鈕間距 */
              font-size: 18px;
            }

            /* 激活狀態下的標籤樣式 */
            .section-with-bg .nav-pills .nav-link.active,
            .section-with-bg .nav-pills .nav-link.active:focus,
            .section-with-bg .nav-pills .nav-link.active:hover {
              color: #ffffff;
              /* 激活狀態下的文字顏色 */
              background-color: #E9C9D6;
              /* 激活狀態下的背景顏色 */
            }

            /* 標籤內容樣式 */
            .section-with-bg .tab-content {
              background-color: #ffffff;
              /* 標籤內容背景顏色 */
              padding: 20px;
              border-radius: 5px;
              /* 可以選擇是否設置圓角 */
              margin-top: 10px;
              /* 調整標籤內容與標籤之間的間距 */
            }

            .section-with-bg mark {
              background-color: #E9C9D6;
              color: #FFF;
              border-radius: 20px;
              display: inline-block;
              line-height: 0.8;
              overflow: visible;
              padding: 0.5em 0.5em;
              margin-top: 5px;
              margin-bottom: 10px;
            }

          </style>
          <!-- 連結管理Modal -->
          <div class="modal fade" id="update_social_Modal" tabindex="-1" aria-labelledby="update_social_ModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-xl">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="update_social_ModalLabel">操作教學</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <!-- ======= Schedule Section ======= -->
                  <div id="schedule" class="section-with-bg">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-profile-tab" data-bs-toggle="pill"
                          data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                          aria-selected="false">接收訂單&nbsp;&nbsp;<i class="fa-solid fa-check"></i></button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link " id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                          type="button" role="tab" aria-controls="pills-home" aria-selected="true">對帳表&nbsp;<i
                            class="fa-solid fa-pen"></i></button>
                      </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                      <div class="tab-pane fade show active" id="pills-profile" role="tabpanel"
                        aria-labelledby="pills-profile-tab">
                        <mark style="font-size:18px;"><i class="fa-solid fa-wand-sparkles"></i>&nbsp;接收訂單</mark>
                        <div style="margin-left:5px; margin-right:5px; font-size: 16px;">
                          <h5><b>接收訂單：</b>點擊接受訂單後訂單會跑到對帳表</h5>
                          <h5><b>拒絕接收：</b>點擊該訂單會不再受理</h5>
                          <h5><b>買家信用紀錄：</b>最右邊點擊可以看到該買家下單的次數以及完成訂單數</h5>
                        </div>
                        <div class="d-flex justify-content-center">
                          <img src="../files/image.png" alt="發現功能" style="min-width:100px; height:60%">
                        </div>
                      </div>
                      <div class="tab-pane fade " id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <mark style="font-size:18px;"><i class="fa-solid fa-wand-sparkles"></i>&nbsp;查詢、編輯訂單資訊</mark>
                        <div style="margin-left:5px; margin-right:5px; font-size: 16px;">
                          <h5><b>明細查看：</b>查看訂單的詳情，包括買家購買的物品以及買家的備註</h5>
                        </div>
                        <div class="d-flex justify-content-center">
                          <img src="../files/@media(min-width 920px) {.png" alt="發現功能"
                            style="min-width:100px; height:60%">
                        </div>
                        <div style="margin-left:5px; margin-right:5px; font-size: 16px;">
                          <h5><b>編輯訂單狀態：</b>點擊圖標輸入編輯資訊，點擊確定更改成功</h5>
                        </div>
                        <div class="d-flex justify-content-center">
                          <img src="../files/@media(min-width 920px) { (1).png" alt="發現功能"
                            style="min-width:100px; height:60%">
                        </div>
                      </div>

                    </div>
                  </div><!-- End Schedule Section -->
                </div>
              </div>
            </div>
          </div>
          <div style="max-height: 400px;overflow-y: auto;overflow-x: hidden;">
            <nav>
              <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-all-tab" data-bs-toggle="tab" data-bs-target="#nav-all"
                  type="button" role="tab" aria-controls="nav-all" aria-selected="true">All</button>
                <button class="nav-link" id="nav-week-tab" data-bs-toggle="tab" data-bs-target="#nav-week" type="button"
                  role="tab" aria-controls="nav-week" aria-selected="false">近一週</button>
                <button class="nav-link" id="nav-month-tab" data-bs-toggle="tab" data-bs-target="#nav-month"
                  type="button" role="tab" aria-controls="nav-month" aria-selected="false">近一個月</button>
                <button class="nav-link" id="nav-three-tab" data-bs-toggle="tab" data-bs-target="#nav-three"
                  type="button" role="tab" aria-controls="nav-three" aria-selected="false">近三個月</button>
                <button class="nav-link" id="nav-nopay-tab" data-bs-toggle="tab" data-bs-target="#nav-nopay"
                  type="button" role="tab" aria-controls="nav-nopay" aria-selected="false">未付款</button>
                <button class="nav-link" id="nav-ispay-tab" data-bs-toggle="tab" data-bs-target="#nav-ispay"
                  type="button" role="tab" aria-controls="nav-ispay" aria-selected="false">已付款</button>
                <button class="nav-link" id="nav-complete-tab" data-bs-toggle="tab" data-bs-target="#nav-complete"
                  type="button" role="tab" aria-controls="nav-complete" aria-selected="false">已完成</button>
              </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab"
                tabindex="0">
                <div class="table-responsive">
                  <table id="example1" class="table table-hover" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>帳號</th>
                        <th>付款帳號</th>
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
           AND order_state != '未成立' 
           AND order_state != '拒絕接收' 
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
                        echo '
              <tr>
            <td>' . $row['account'] . '</td>
            <td>' . $row['payment_account'] . '</td>
            <td>' . $row['order_time'] . '</td>
            <td>' . $totalprice . '</td>
            <td>
                  <center>
                    <input id="box' . $row['order_id'] . '" type="checkbox" data-order-id="' . $row['order_id'] . '"/>
                    <label for="box' . $row['order_id'] . '" id="label' . $row['order_id'] . '">' . ($row['payment_state'] == 1 ? '未付款' : '已付款') . '</label>
                  </center>
                </td>
                <td>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#details' . $row['order_id'] . '"
                style="background-color: #E9C9D6;border: none;color: white;">明細查看</button>
                </td>
                </tr>
                ';
                      }
                      mysqli_close($link); ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="tab-pane fade" id="nav-week" role="tabpanel" aria-labelledby="nav-week-tab" tabindex="0">
                <div class="table-responsive">
                  <table id="example" class="table table-hover" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>帳號</th>
                        <th>付款帳號</th>
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
           AND order_state != '未成立'
           AND order_state != '拒絕接收' 
           AND order_time >= DATE_SUB(NOW(), INTERVAL 1 WEEK)
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
                        echo '
              <tr>
            <td>' . $row['account'] . '</td>
            <td>' . $row['payment_account'] . '</td>
            <td>' . $row['order_time'] . '</td>
            <td>' . $totalprice . '</td>
            <td>
                  <center>
                    <input id="box' . $row['order_id'] . '" type="checkbox" data-order-id="' . $row['order_id'] . '"/>
                    <label for="box' . $row['order_id'] . '" id="label' . $row['order_id'] . '">' . ($row['payment_state'] == 1 ? '未付款' : '已付款') . '</label>
                  </center>
                </td>
                <td>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#details' . $row['order_id'] . '"
                style="background-color: #E9C9D6;border: none;color: white;">明細查看</button>
                </td>
                </tr>
                ';
                      }
                      mysqli_close($link); ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="tab-pane fade" id="nav-month" role="tabpanel" aria-labelledby="nav-month-tab" tabindex="0">
                <div class="table-responsive">
                  <table id="example" class="table table-hover" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>帳號</th>
                        <th>付款帳號</th>
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
           AND order_state != '未成立'
           AND order_state != '拒絕接收' 
           AND order_time >= DATE_SUB(NOW(), INTERVAL 1 MONTH)
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
                        echo '
              <tr>
            <td>' . $row['account'] . '</td>
            <td>' . $row['payment_account'] . '</td>
            <td>' . $row['order_time'] . '</td>
            <td>' . $totalprice . '</td>
            <td>
                  <center>
                    <input id="box' . $row['order_id'] . '" type="checkbox" data-order-id="' . $row['order_id'] . '"/>
                    <label for="box' . $row['order_id'] . '" id="label' . $row['order_id'] . '">' . ($row['payment_state'] == 1 ? '未付款' : '已付款') . '</label>
                  </center>
                </td>
                <td>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#details' . $row['order_id'] . '"
                style="background-color: #E9C9D6;border: none;color: white;">明細查看</button>
                </td>
                </tr>
                ';
                      }
                      mysqli_close($link); ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="tab-pane fade" id="nav-three" role="tabpanel" aria-labelledby="nav-three-tab" tabindex="0">
                <div class="table-responsive">
                  <table id="example" class="table table-hover" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>帳號</th>
                        <th>付款帳號</th>
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
           AND order_state != '未成立'
           AND order_state != '拒絕接收' 
           AND order_time >= DATE_SUB(NOW(), INTERVAL 3 MONTH)
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
                        echo '
              <tr>
            <td>' . $row['account'] . '</td>
            <td>' . $row['payment_account'] . '</td>
            <td>' . $row['order_time'] . '</td>
            <td>' . $totalprice . '</td>
            <td>
                  <center>
                    <input id="box' . $row['order_id'] . '" type="checkbox" data-order-id="' . $row['order_id'] . '"/>
                    <label for="box' . $row['order_id'] . '" id="label' . $row['order_id'] . '">' . ($row['payment_state'] == 1 ? '未付款' : '已付款') . '</label>
                  </center>
                </td>
                <td>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#details' . $row['order_id'] . '"
                style="background-color: #E9C9D6;border: none;color: white;">明細查看</button>
                </td>
                </tr>
                ';
                      }
                      mysqli_close($link); ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="tab-pane fade" id="nav-nopay" role="tabpanel" aria-labelledby="nav-nopay-tab" tabindex="0">
                <div class="table-responsive">
                  <table id="example" class="table table-hover" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>帳號</th>
                        <th>付款帳號</th>
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
           AND order_state != '未成立'
           AND order_state != '拒絕接收' 
           AND payment_state = 1
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
                        echo '
              <tr>
            <td>' . $row['account'] . '</td>
            <td>' . $row['payment_account'] . '</td>
            <td>' . $row['order_time'] . '</td>
            <td>' . $totalprice . '</td>
            <td>
                  <center>
                    <input id="box' . $row['order_id'] . '" type="checkbox" data-order-id="' . $row['order_id'] . '"/>
                    <label for="box' . $row['order_id'] . '" id="label' . $row['order_id'] . '">' . ($row['payment_state'] == 1 ? '未付款' : '已付款') . '</label>
                  </center>
                </td>
                <td>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#details' . $row['order_id'] . '"
                style="background-color: #E9C9D6;border: none;color: white;">明細查看</button>
                </td>
                </tr>
                ';
                      }
                      mysqli_close($link); ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="tab-pane fade" id="nav-ispay" role="tabpanel" aria-labelledby="nav-ispay-tab" tabindex="0">
                <div class="table-responsive">
                  <table id="example" class="table table-hover" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>帳號</th>
                        <th>付款帳號</th>
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
           AND order_state != '未成立'
           AND order_state != '拒絕接收' 
           AND payment_state = 2
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
                        echo '
              <tr>
            <td>' . $row['account'] . '</td>
            <td>' . $row['payment_account'] . '</td>
            <td>' . $row['order_time'] . '</td>
            <td>' . $totalprice . '</td>';

                        echo '<td>
                  <center>
                    <input id="box' . $row['order_id'] . '" type="checkbox" data-order-id="' . $row['order_id'] . '"/>
                    <label for="box' . $row['order_id'] . '" id="label' . $row['order_id'] . '">' . ($row['payment_state'] == 1 ? '未付款' : '已付款') . '</label>
                  </center>
                </td>';

                        echo '<td>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#details' . $row['order_id'] . '"
                style="background-color: #E9C9D6;border: none;color: white;">明細查看</button>
                </td>
                </tr>
                ';
                      }
                      mysqli_close($link); ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="tab-pane fade" id="nav-complete" role="tabpanel" aria-labelledby="nav-complete-tab"
                tabindex="0">
                <div class="table-responsive">
                  <table id="example" class="table table-hover" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>帳號</th>
                        <th>付款帳號</th>
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
           AND order_state = '完成訂單'
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
                        echo '
              <tr>
            <td>' . $row['account'] . '</td>
            <td>' . $row['payment_account'] . '</td>
            <td>' . $row['order_time'] . '</td>
            <td>' . $totalprice . '</td>
            <td>
                  <center>
                  <input id="box' . $row['order_id'] . '" type="checkbox" data-order-id="' . $row['order_id'] . '"/>
                  <label for="box' . $row['order_id'] . '" id="label' . $row['order_id'] . '">' . ($row['payment_state'] == 1 ? '未付款' : '已付款') . '</label>
                  </center>
                </td>
                <td>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#details' . $row['order_id'] . '"
                style="background-color: #E9C9D6;border: none;color: white;">明細查看</button>
                </td>
                </tr>
                ';
                      }
                      mysqli_close($link); ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

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
                <div class="modal-header"  style="background-color: #B0A5C6;color:white;">
                  <h1 class="modal-title fs-5" id="detailsLabel"><b>訂單詳細</b></h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table width="100%" class="table table-hover" style="padding:10px;border-radius:5px;">
                      <tr>
                        <th  style="font-size:17px;font-weight:bold;color:#B0A5C6;">訂單內容</th>
                        <td>
                        <ul>';
            $order_id = $row['order_id']; // 獲取訂單 ID
            $order_state = $row['order_state'];
            $remark = $row['remark'];
            $account_to_send_money_to=$row['account_to_send_money_to'];
            $sql2 = "SELECT * FROM `order` NATURAL JOIN order_details natural join commodity where order_id=$order_id ";
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
                        <th style="font-size:17px;font-weight:bold;color:#B0A5C6;">買家選擇之匯款帳戶</th>
                        <td>
                        <p>' .$account_to_send_money_to . '</p>
                        </td>
                      </tr>
                      <tr>
                        <th style="font-size:17px;font-weight:bold;color:#B0A5C6;">買家備註內容</th>
                        <td>
                        <p>' . nl2br($remark) . '</p>
                        </td>
                      </tr>
                      <tr >
                        <th style="font-size:17px;font-weight:bold;color:#B0A5C6;">訂單狀態說明</th>
                        <td style="width: 290px;">

                        <p>' . $order_state . '
                        <button type="button" class="btn btn-info btn-sm" style="background-color: #b0a5c6a8;border: none;color: white;"
                        data-bs-toggle="collapse" data-bs-target="#collapse' . $order_id . '" aria-expanded="false" aria-controls="collapse' . $order_id . '">
                        <i class="fa-solid fa-pen-to-square"></i></button></p>';
                        if($order_state!="完成訂單"){
                        echo'
                        <div class="collapse" id="collapse' . $order_id . '">
                          <textarea  style="font-size:0.35cm;margin-left:-1px;" class="form-control" tabindex="8"
                           placeholder="訂單狀態敘述(點擊確認即可更新狀態)" name="order_state"></textarea>
                        <button type="submit" name="submit" class="btn btn-primary" style="background-color: #E9C9D6;border: none;color: white;margin-top:5px;float:left">確定</button>
                        </div>
                        ';}
                        echo'
                        </td>
                      </tr>
                    </table>
                  </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">關閉</button>
                  <button type="button"  class="btn btn-primary" data-bs-dismiss="modal">確定</button>
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
          <div class="seven">
            <h1>接收訂單</h1>
          </div>
          <table id="example" class="table table-hover" cellspacing="0" width="100%"
            style="max-height:300px;overflow-y: scroll;">
            <thead>
              <tr>
                <th>訂單編號</th>
                <th>帳號</th>
                <th>下單時間</th>
                <th>總金額</th>
                <th>備註</th>
                <th>確認接收</th>
              </tr>
            </thead>
            <?php
            $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');
            if (!$link) {
              die('Connection failed: ' . mysqli_connect_error());
            }
            $commodity_group_id = $_GET["commodity_group_id"];
            $sql = "SELECT `order`.*, order_details.*, MIN(commodity.commodity_id) AS first_order
            FROM order_details natural JOIN `order` natural JOIN commodity
            WHERE commodity_group_id=$commodity_group_id
            AND order_state = '未成立'
            GROUP BY order_details.order_id;";
            $result = mysqli_query($link, $sql);
            if (!$result) {
              die('Query failed: ' . mysqli_error($link));
            }
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
              echo '<form method="post" action="orderdetail.php?commodity_group_id=' . $commodity_group_id . '" style="height: 400px;overflow-y: auto;">
          <input type="hidden" name="order_id" value="', $row["order_id"], '">
          
        <tbody><tr>
              <td>' . $row['order_id'] . '</td>
            <td>' . $row['account'] . '</td>
            <td>' . $row['order_time'] . '</td>
            <td>' . $totalprice . '</td>
            <td>' . $row['remark'] . '</td>';
            $sql3 = "SELECT * FROM commodity_group 
            WHERE commodity_group_id=$commodity_group_id;";
            $result3 = mysqli_query($link, $sql3);
            $row3 = mysqli_fetch_assoc($result3);
            if($row3["commodity_group_state"]==1){
              echo'
            <td>
                <button type="submit" name="submit2" class="btn btn-primary" 
                style="background-color: #E9C9D6;border: none;color: white;">接收訂單</button>
                <button type="submit" name="submit3" class="btn btn-primary" 
                style="background-color: #E9C9D6;border: none;color: white;">拒絕接收</button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#client' . $row['order_id'] . '"
                style="background-color: #E9C9D6;border: none;color: white;"><i class="fa-solid fa-address-book"></i></button>
            </td>
          </tr>
          </tbody>
          </form>';}
              $sql1 = "SELECT account FROM `order` WHERE order_id = '{$row['order_id']}'";
              $result1 = mysqli_query($link, $sql1);
              $data1 = mysqli_fetch_assoc($result1);
              $account = $data1['account'];
              $sql3 = "SELECT COUNT(order_id) AS allorder 
              FROM `order` 
              WHERE account = '{$account}'
              AND order_state !='拒絕接收'
              AND order_state!='未成立';";
              $sql4 = "SELECT COUNT(order_id) AS allorder2
              FROM `order` 
              WHERE account ='{$account}' 
              AND order_state='完成訂單';";
              $result3 = mysqli_query($link, $sql3);
              $result4 = mysqli_query($link, $sql4);
              $row3 = mysqli_fetch_assoc($result3);
              $row4 = mysqli_fetch_assoc($result4);
              echo '<!-- Modal -->
              <div class="modal fade" id="client' . $row['order_id'] . '" tabindex="-1" aria-labelledby="clientLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="clientLabel">' . $account . '的信用紀錄</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <li>下訂單數：' . $row3['allorder'] . '</li>
                      <li>完成訂單數：' . $row4['allorder2'] . '</li>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">關閉</button>
                      <button type="button" class="btn btn-primary" data-bs-dismiss="modal">確認</button>
                    </div>
                  </div>
                </div>
              </div>';
            }
            mysqli_close($link); ?>
          </table>
          <br><br>
          <div class="filtertag">
            <h4>認證區塊</h4>
          </div>
          <br>
          <div class="seven">
            <h1>認證區塊</h1>
          </div>
          <div class="row">
            <div id="slider-carouse4" class="owl-carousel">

              <?php
              $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');
              if (!$link) {
                die('Connection failed: ' . mysqli_connect_error());
              }
              $commodity_group_id = $_GET["commodity_group_id"];
              $sql = "SELECT * 
              FROM proof_of_purchase 
              NATURAL JOIN account
              NATURAL JOIN `order` 
              NATURAL JOIN order_details 
              NATURAL JOIN commodity 
              NATURAL JOIN commodity_group 
              WHERE commodity_group_id =  $commodity_group_id
              ORDER BY proof_of_purchase.proof_of_purchase_time DESC 
              LIMIT 1;";
              $result = mysqli_query($link, $sql);
              while ($row = mysqli_fetch_assoc($result)) {
                echo '<form method="post" action="proof.php?commodity_group_id=' . $commodity_group_id . '"> 
        <div class="waiting3">
          <div class="card" style="width: 18rem;">
            <div class="card-head">
              <img src="' . $row["proof_of_purchase_photo"] . '"
                class="card-img-top" alt="...">
            </div>
            <div class="card-header">
              <div class="col-md-12" style="display: flex; align-items: center;">
                <div class="profile-picture big-profile-picture clear"
                  style="width: 50px; height: 50px; border: 0; margin-right: 10px;">
                  <img width="100%" height="100%" alt="Anne Hathaway picture"
                    src="' . $row["user_avatar"] . '">
                </div>
                <div style="flex-grow: 7;">
                  <p>' . $row["account"] . '</p>
                  <h5>無款提款證明';
                  if ($row["account"] == $_SESSION["account"]) {
                    echo '<i class="fa-solid fa-ellipsis-vertical" style="float: right; margin-top: -15px;"></i>';
                  }
                  echo '
                  </h5>
                </div>
              </div>
            </div>
            <input type="hidden" name="order_id" value="' . $row["order_id"] . '">
            <div class="card-body">
              <div style="display: inline-block;">
                <p style="font-size:17px;font-weight:bold;color:#636363;">訂單編號：' . $row["order_id"] . '</p>
              </div>
              <div style="display: inline-block; float: right;">
                <button type="submit" name="submit" class="btn btn-warning" style="background-color: #E9C9D6; border: none; color: white;">確認收到</button>
              </div>
            </div>
          </div>
        </div></form>
        ';
              }
              mysqli_close($link);
              ?>

            </div>
          </div>


      </div>
    </div>

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
    <!-- 这里是你的 JavaScript 代码 -->


    <!-- JQERY -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"
      integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>


    <!-- Vendor JS Files -->
    <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>

    <!-- Your Custom JS Files -->
    <script src="../lisa/assets/js/InnerBuyer.js"></script>
    <script src="../lisa/assets/js/cvs.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>