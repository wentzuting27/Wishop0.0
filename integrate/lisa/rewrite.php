<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>詢問、通知撰寫</title>
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
  <link href="assets/css/InnerCos.css" rel="stylesheet">
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
    <section id="breadcrumbs" class="breadcrumbs" style="background-color: #b0a5c6a8;">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">

          <ol>
            <li><a href="../index.php">Home</a></li>
            <li>Services</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <?php
  $commodity_group_id=3;//在哪一個商品團體要用接值得方式,先假設1,之後再改
  $link=mysqli_connect('localhost','root','12345678','wishop');
  $sql="select *
  from commodity_group
  where commodity_group_id=$commodity_group_id";
  $result=mysqli_query($link,$sql);
  while($row=mysqli_fetch_assoc($result))
  {
    echo '

    <section id="hero" style="background-image: url(',$row["commodity_group_bg"],');
    ;">
      <div class="background-overlay" style="position: absolute;
    top: 0;
    width: 100%;
    height: 100%;background-color: rgba(237, 237, 237, 0.733)">
      </div>
      <div class="edit_like_shop_button">
        <!-- <button type="button" class="btn insert_button" data-bs-toggle="modal" data-bs-target="#insert_group_Modal"><i class="fa-solid fa-pen"></i>&nbsp;編輯賣場</button> -->
        <!-- <button type="button" class="btn insert_button"><i class="fa-regular fa-heart"></i>&nbsp;關注賣場</button> -->
        <button type="button"  class="btn insert_button" data-bs-toggle="modal"
          data-bs-target="#up_rule_Modal"><i class="fa-solid fa-pen-to-square"></i>&nbsp;編輯</button>
        <button type="button" class="btn insert_button" data-bs-toggle="modal" data-bs-target="#leave">
          <i class="fa-solid fa-hourglass-end"></i>&nbsp;結束開團</button>
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

      <!-- Modal -->
      <div class="modal fade" id="leave" tabindex="-1" aria-labelledby="leaveLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="leaveLabel">確定結束？</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
      <div style="display: flex; align-items: center; justify-content: center;">
        <div style="margin-left: 280px; margin-top: -30px;z-index: 9;">
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
      </div>';}?>

      <!-- Showcase -->
      <?php
  $shop_id=1;//在哪一個商品團體要用接值得方式,先假設1,之後再改
  $link=mysqli_connect('localhost','root','12345678','wishop');
  $sql="select *
  from shop
  where shop_id=$shop_id";
  $result=mysqli_query($link,$sql);
  while($row=mysqli_fetch_assoc($result))
  {
    echo '
      <!-- Showcase -->
      <div class="card mb-3" style="width: 100%;border: none;background-color: #ffffff00;">
        <div class="row g-0">
          <div class="col-md-5" style="padding: 10px;padding-left: 150px;">
            <div class="profile-picture big-profile-picture clear" style="text-align: center;margin-top: 10px;">
              <img width="100%" height="100%" alt="Anne Hathaway picture"
                src="',$row["shop_avatar"],'">
            </div>
            <br>
            <center>
              <a href="../shop/shop.php" class="btn-get-started animate__animated animate__fadeInUp scrollto"
                style="text-decoration: none;font-weight: 600;">三麗鷗快樂購</a>
            </center>
          </div>
          ';}
?>

  <?php
  $commodity_group_id=3;//在哪一個商品團體要用接值得方式,先假設1,之後再改
  $link=mysqli_connect('localhost','root','12345678','wishop');
  $sql="select *
  from commodity_group
  where commodity_group_id=$commodity_group_id";
  $result=mysqli_query($link,$sql);
  while($row=mysqli_fetch_assoc($result))
  {
    echo '
          <div class="col-md-7"
            style="padding-left: 40px;padding-right: 40px;background-color:rgb(252, 252, 252);width: 500px;border-radius: 30px;">
            <h3 class="card-title" style="font-size: 0.8cm;padding-top: 14px;color: #B0A5C6;"><b>',$row["commodity_group_name"],'</b>
              <small style="font-size: 0.4cm;font-weight: bold;">（跟團人數：<span style="color:#B0A5C6;">88人</span>）</small>
            </h3>
            <div class="card-text" style="font-size: 0.4cm;text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.05);font-weight: bold">
                <p style="color: #5a5a5a;font-size: 0.3cm">',$row["commodity_group_narrate"],'</p>

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
    <!-- SECOND navbar -->';}?>

    <div class="tabs" role="tablist">

      <input type="radio" id="tab1" name="tab-control" >
      <input type="radio" id="tab2" name="tab-control">
      <input type="radio" id="tab3" name="tab-control" checked>
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
        <section class="addgoods">
          <h2>Features</h2>
          <div class="container" >
            <form id="contact" method="post" action="addcommodity.php" style="padding: 5%;">
              <table class="table table-hover" width="100%">
                <tbody>
                  <tr>
                  <th>商品名稱</th>
                    <td >
                      <fieldset>
                        <input placeholder="商品名稱" type="text" tabindex="5" name="commodity_name" required autofocus>
                      </fieldset>
                    </td>
                  </tr>
                  <tr>
                    <th>商品敘述</th>
                    <td>
                      <fieldset>
                        <textarea placeholder="商品敘述" tabindex="5" name="commodity_narrate" required></textarea>
                      </fieldset>
                    </td>
                  </tr>
                  <tr>
                    <th>商品狀態</th>
                    <td>
                    <div>
                      <input type="radio" id="1" name="commodity_state" value="1" checked />
                      <label for="add1">上架</label>
                    </div>
                    <div>
                      <input type="radio" id="2" name="commodity_state" value="2" />
                      <label for="add2">待上架</label>
                    </div>
                    </td>
                    </tr>
                    <tr>
                      <th >金額</th>
                    <td>
                      <fieldset>
                        <input placeholder="金額" type="text" tabindex="1" name="commodity_price" required>
                      </fieldset>
                    </td>
                    
                    </tr>
                    <tr>
                      <th>連結</th>
                      <td>
                      <fieldset>
                        <input placeholder="連結" type="text" tabindex="1" name="commodity_link" required>
                      </fieldset>
                    </td>
                    </tr>
                    <tr>
                      <th>上傳圖片</th>
                    <td>
                      <fieldset>
                        <input type="file" id="file-uploader" data-target="file-uploader" accept="image/*"
                          multiple="multiple" name="commodity_photo"/>
                      </fieldset>
                    </td>
                  </tr>
                  
                  <tr>
                    <td colspan="5">
                      <fieldset>
                        <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">送出</button>
                      </fieldset>
                    </td>
                  </tr>
                </tbody>
              </table>
            </form>
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
                        <th style="width:10%">已賣出</th>
                        <th class="text-center">收藏次數</th>
                      </tr>
                    </thead>
                    <?php
                    $commodity_group_id=3;//在哪一個商品團體要用接值得方式,先假設1,之後再改
                    $link=mysqli_connect('localhost','root','12345678','wishop');
                    $sql="select *
                    from commodity natural join commodity_photo
                    where commodity_state=1";
                    $result=mysqli_query($link,$sql);
                    while($row=mysqli_fetch_assoc($result))
                    {
                    echo '
                    <tbody>
                      <tr>
                        <td data-th="Product">
                          <div class="row">
                            <div class="col-sm-4 hidden-xs">
                              <a href="doll.php" class="portfolio-details-lightbox" data-glightbox="type: external"
                                title="Portfolio Details">
                                <img src="',$row["commodity_photo"],'"
                                  alt="..." class="img-responsive" /></a>
                            </div>
                            <div class="col-sm-8">
                              <h4 class="nomargin"><b>',$row["commodity_name"],'</b></h4>
                              <p>',$row["commodity_narrate"],'</p>
                            </div>
                          </div>
                        </td>
                        <td data-th="Price">$',$row["commodity_price"],'</td>
                        <td data-th="Quantity">
                          <center>2</center>
                        </td>
                        <td data-th="Subtotal" class="text-center">5</td>
                        <td class="actions" data-th="">
                          <button class="btn btn-info btn-sm"
                          style="background-color: #b0a5c6a8;border: none;color: white;"><i class="fa-solid fa-pen-to-square"></i></button>
                          <button class="btn btn-danger btn-sm"
                          style="background-color: #E9C9D6;border: none;color: white;"><i class="fa-solid fa-trash"></i></button>
                        </td>
                      </tr>';}?>
                     
                    </tbody>
                  </table>
                </div>
              </div>
              <br><br>
              <div class="seven" id="list-item-2">
                <h1>待上架商品區</h1>
              </div>
              <div class="row">
                <div id="slider-carouse2" class="owl-carousel">
                <?php
                    $commodity_group_id=3;//在哪一個商品團體要用接值得方式,先假設1,之後再改
                    $link=mysqli_connect('localhost','root','12345678','wishop');
                    $sql="select *
                    from commodity natural join commodity_photo
                    where commodity_state=2";
                    $result=mysqli_query($link,$sql);
                    while($row=mysqli_fetch_assoc($result))
                    {
                    echo '
                  <div class="waiting">
                    <div class="card" style="width: 18rem;">
                      <div class="card-head">
                        <img
                          src="',$row["commodity_photo"],'"
                          class="card-img-top" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">',$row["commodity_name"],'</h5>
                        <p class="card-text">',$row["commodity_narrate"],'</p>
                        <button class="btn btn-info btn-sm"
                        style="background-color: #b0a5c6a8;border: none;color: white;"><i class="fa-solid fa-pen-to-square"></i></button>
                        <button class="btn btn-danger btn-sm"
                        style="background-color: #E9C9D6;border: none;color: white;"><i class="fa-solid fa-trash"></i></button>
                      </div>
                    </div>
                  </div>'
                  ;}
                  ?>
                </div>
              </div>
              <br><br>
              <div class="seven" id="list-item-3">
                <h1>下架商品區</h1>
              </div>
              <div class="row">
                <div id="slider-carouse3" class="owl-carousel">
                <?php
                    $commodity_group_id=3;//在哪一個商品團體要用接值得方式,先假設1,之後再改
                    $link=mysqli_connect('localhost','root','12345678','wishop');
                    $sql="select *
                    from commodity natural join commodity_photo
                    where commodity_state=3";
                    $result=mysqli_query($link,$sql);
                    while($row=mysqli_fetch_assoc($result))
                    {
                    echo '
                  <div class="waiting">
                    <div class="card" style="width: 18rem;">
                      <div class="card-head">
                        <img
                          src="',$row["commodity_photo"],'"
                          class="card-img-top" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">',$row["commodity_name"],'</h5>
                        <p class="card-text">',$row["commodity_narrate"],'</p>
                        <button class="btn btn-info btn-sm"
                        style="background-color: #b0a5c6a8;border: none;color: white;"><i class="fa-solid fa-pen-to-square"></i></button>
                        <button class="btn btn-danger btn-sm"
                        style="background-color: #E9C9D6;border: none;color: white;"><i class="fa-solid fa-trash"></i></button>
                      </div>
                    </div>
                  </div>'
                  ;}
                  ?>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section id="first">
          <h2>Shipping</h2>
          <div id="contact" class="contact" style="margin-bottom: 60px;margin-left: 40px;padding:10px;">

            <div class="col-lg-12 mt-5 mt-lg-0">
              <form action="addwrite.php" method="post" role="form" >

                <div>
                  <div class="col-md-3">
                    <div class="profile-picture big-profile-picture clear"
                      style="width: 50px; height: 50px; border:0cm ;float: left;margin-top: 20px; margin-bottom: 20px;">
                      <img width="100%" height="100%" alt="Anne Hathaway picture"
                        src="https://i.pinimg.com/736x/c4/22/64/c42264dccbc7371567ebe9db019082cb.jpg">
                    </div>
                  </div>
                  <div style="float: left;margin-top: 45px; margin-left: 20px;">
                    <h5>用戶暱稱</h5>
                  </div>
                </div>
                <!--<div class="row" style="float: right;transform: scale(1);margin-top:44px;">

                  <div class="col-sm-5" id="btn1">
                    <button type="button" class="btn btn-toggle active" data-toggle="button" aria-pressed="true"
                      autocomplete="off">
                      <div class="handle"></div>
                    </button>
                  </div>
                </div>-->
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="announce_title" placeholder="標題" required>
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="announce_narrate" rows="5" placeholder="內容" required></textarea>
                </div>
                <div class="text-center">
                  <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">上傳</button>
                </div>
              </form>

            </div>

          </div>

        </section><!-- End Contact Section -->

        <section id="order">
          <h2>Returns</h2>
          <div class="seven">
            <h1>對帳表</h1>
          </div>
          <div style="height: 400px;overflow-y: auto;">
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
            echo '<table id="example" 
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
                    <input id="box1" type="checkbox" />
                    <label for="box1" id="label1">未付款</label>
                  </center>
                </td>
          </tr>';
            }
            echo '</tbody></table>';
            mysqli_close($link); ?>
          </div>
          <button onclick="showCsv()">Console log csv code</button>
          <button onclick="download()">Download csv file</button>
          <br><br><br>
          <div class="seven">
            <h1>接收訂單</h1>
          </div>
          <form method="post" action="confirmorder.php" style="height: 400px;overflow-y: auto;">
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
            echo '<table id="example" 
                class="table table-striped table-bordered" cellspacing="0" width="100%" style="height:300px;overflow: scroll;">
                <thead>
                <tr>
                <th>帳號</th>
                <th>付款帳號</th>
                <th>下單時間</th>
                <th>總金額</th>
                <th>備註</th>
                <th>確認接收</th>
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
                <button type="submit" name="submit" class="btn btn-primary" 
                style="background-color: #E9C9D6;border: none;color: white;">接收訂單</button>
            </td>
          </tr>';
            }
            echo '</tbody></table>';
            mysqli_close($link); ?>
          </form><br>
          <div class="seven">
            <h1>認證區塊</h1>
          </div>
          <div class="row">
            <div id="slider-carouse4" class="owl-carousel">
              <div class="waiting3">
                <div class="card" style="width: 18rem;">
                  <div class="card-head">
                    <img src="https://kimjinkook.weebly.com/uploads/8/3/4/6/83464970/20160807-07.png"
                      class="card-img-top" alt="...">
                  </div>
                  <div class="card-header">
                    <div class="col-md-12" style="display: flex; align-items: center;">
                      <div class="profile-picture big-profile-picture clear"
                        style="width: 50px; height: 50px; border: 0; margin-right: 10px;">
                        <img width="100%" height="100%" alt="Anne Hathaway picture"
                          src="https://i.pinimg.com/236x/1f/c6/6a/1fc66a08447b965a3e1000ccfc784029.jpg">
                      </div>
                      <div style="flex-grow: 7;">
                        <p>帳號</p>
                        <h5>無款提款證明<i class="fa-solid fa-ellipsis-vertical" style="float: right; margin-top: -15px;"></i>
                        </h5>
                      </div>
                    </div>
                  </div>
                  <div class="card-body"><button type="button" class="btn btn-warning"
                      style="background-color: #E9C9D6;border: none;color: white;">確認收到</button>
                  </div>
                </div>
              </div>
              <div class="waiting3">
                <div class="card" style="width: 18rem;">
                  <div class="card-head">
                    <img src="https://kimjinkook.weebly.com/uploads/8/3/4/6/83464970/20160807-07.png"
                      class="card-img-top" alt="...">
                  </div>
                  <div class="card-header">
                    <div class="col-md-12" style="display: flex; align-items: center;">
                      <div class="profile-picture big-profile-picture clear"
                        style="width: 50px; height: 50px; border: 0; margin-right: 10px;">
                        <img width="100%" height="100%" alt="Anne Hathaway picture"
                          src="https://i.pinimg.com/236x/8c/12/c0/8c12c0f0f6d7c2ee634e7aa541e9911c.jpg">
                      </div>
                      <div style="flex-grow: 7;">
                        <p>帳號</p>
                        <h5>無款提款證明<i class="fa-solid fa-ellipsis-vertical" style="float: right; margin-top: -15px;"></i>
                        </h5>
                      </div>
                    </div>
                  </div>
                  <div class="card-body"><button type="button" class="btn btn-warning"
                      style="background-color: #E9C9D6;border: none;color: white;">確認收到</button>
                  </div>
                </div>
              </div>
              <div class="waiting3">
                <div class="card" style="width: 18rem;">
                  <div class="card-head">
                    <img src="https://kimjinkook.weebly.com/uploads/8/3/4/6/83464970/20160807-07.png"
                      class="card-img-top" alt="...">
                  </div>
                  <div class="card-header">
                    <div class="col-md-12" style="display: flex; align-items: center;">
                      <div class="profile-picture big-profile-picture clear"
                        style="width: 50px; height: 50px; border: 0; margin-right: 10px;">
                        <img width="100%" height="100%" alt="Anne Hathaway picture"
                          src="https://i.pinimg.com/236x/d6/a2/07/d6a207f50ebd87603fa7ad342a757104.jpg">
                      </div>
                      <div style="flex-grow: 7;">
                        <p>帳號</p>
                        <h5>無款提款證明<i class="fa-solid fa-ellipsis-vertical" style="float: right; margin-top: -15px;"></i>
                        </h5>
                      </div>
                    </div>
                  </div>
                  <div class="card-body"><button type="button" class="btn btn-warning"
                      style="background-color: #E9C9D6;border: none;color: white;">確認收到</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <br>


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