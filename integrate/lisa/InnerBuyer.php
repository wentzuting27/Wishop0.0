<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>團內介面(賣家)</title>
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
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">

          <ol>
            <li><a href="../shop/shop.html" style="color: rgb(255, 230, 237);">返回賣場</a></li>
            <li>團內資訊</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section id="hero" style="background-image: url(https://today-obs.line-scdn.net/0hQYfc7xmHDnZbGhy6CX9xIWNMAgdofBR_eS9GFH4ZUE5_NkFwZn9dFSkYBFp-LUh3ey9GEC5OV0R3LklwMA/w1200);
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
      </div>

      <!-- Showcase -->
      <div class="card mb-3" style="width: 100%;border: none;background-color: #ffffff00;">
        <div class="row g-0">
          <div class="col-md-5" style="padding: 10px;padding-left: 150px;">
            <div class="profile-picture big-profile-picture clear" style="text-align: center;margin-top: 10px;">
              <img width="100%" height="100%" alt="Anne Hathaway picture"
                src="https://i.pinimg.com/564x/92/19/18/9219184f7722f46823d5334e0355230c.jpg"">
            </div>
            <br>
            <center>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto"
              style="text-decoration: none;font-weight: 600;">三麗鷗快樂購</a>
            </center>
          </div>
          <div class="col-md-7"
            style="padding-left: 40px;padding-right: 40px;background-color:rgb(252, 252, 252);width: 500px;border-radius: 30px;">
            <h3 class="card-title" style="font-size: 0.8cm;padding-top: 14px;color: #B0A5C6;"><b>三麗鷗X美少女戰士</b>
              <small style="font-size: 0.4cm;font-weight: bold;">（跟團人數：<span style="color:#B0A5C6;">88人</span>）</small>
            </h3>
            <hr>
            <div class="card-text" style="font-size: 0.4cm;text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.05);font-weight: bold">
                <p style="color: #5a5a5a;">本團代購三麗鷗X美少女戰士聯名商品</p>
                <p style="color: #5a5a5a;">購買前請先注意賣場規則</p>
                <p style="color: #5a5a5a;">開團時間：4/4~4/21</p>
                <p style="color: #5a5a5a;">其他代購商品歡迎到賣場逛逛~</p>
                <p style="color: rgb(234, 65, 110);">重要資訊公告在討論區！！</p>

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
    <!-- SECOND navbar -->

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
        <section class="addgoods">
          <h2>Features</h2>
          <div class="container" >
            <form id="contact" action="" method="post" style="padding: 5%;">
              <table class="table table-hover" width="100%">
                <thead>
                  <tr>
                    <th scope="col" style="width: 15%;">商品名稱</th>
                    <th scope="col">商品敘述</th>
                    <th scope="col" style="width: 10%;">商品狀態</th>
                    <th scope="col" style="width: 10%;">金額</th>
                    <th scope="col" style="width: 10%;">上傳圖片</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td scope="row">
                      <fieldset>
                        <input placeholder="商品名稱" type="text" tabindex="5" required autofocus>
                      </fieldset>
                    </td>
                    <td>
                      <fieldset>
                        <textarea placeholder="商品敘述" tabindex="5" required></textarea>
                      </fieldset>
                    </td>
                    <td>
                      <div>
                        <input type="radio" id="add1" name="drone" value="huey" checked />
                        <label for="add1">上架</label>
                      </div>

                      <div>
                        <input type="radio" id="add2" name="drone" value="dewey" />
                        <label for="add2">待上架</label>
                      </div>
                    </td>
                    <td>
                      <fieldset>
                        <input placeholder="金額" type="email" tabindex="1" required>
                      </fieldset>
                    </td>
                    <td>
                      <fieldset>
                        <input type="file" id="file-uploader" data-target="file-uploader" accept="image/*"
                          multiple="multiple" />
                      </fieldset>
                    </td>
                  </tr>
                  <tr>
                    <td scope="row">
                      <fieldset>
                        <input placeholder="商品名稱" type="text" tabindex="1" required autofocus>
                      </fieldset>
                    </td>
                    <td>
                      <fieldset>
                        <textarea placeholder="商品敘述" tabindex="5" required></textarea>
                      </fieldset>
                    </td>
                    <td>
                      <div>
                        <input type="radio" id="add3" name="drone" value="huey" checked />
                        <label for="add3">上架</label>
                      </div>

                      <div>
                        <input type="radio" id="add4" name="drone" value="dewey" />
                        <label for="add4">待上架</label>
                      </div>
                    </td>
                    <td>
                      <fieldset>
                        <input placeholder="金額" type="email" tabindex="2" required>
                      </fieldset>
                    </td>
                    <td>
                      <fieldset>
                        <input type="file" id="file-uploader" data-target="file-uploader" accept="image/*"
                          multiple="multiple" />
                      </fieldset>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="3">
                      <fieldset>
                        <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">新增</button>
                      </fieldset>
                    </td>
                    <td colspan="2">
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
                    <tbody>
                      <tr>
                        <td data-th="Product">
                          <div class="row">
                            <div class="col-sm-4 hidden-xs">
                              <a href="doll.html" class="portfolio-details-lightbox" data-glightbox="type: external"
                                title="Portfolio Details">
                                <img src="https://down-tw.img.susercontent.com/file/tw-11134207-7r98x-ll7zea2rdiox5c"
                                  alt="..." class="img-responsive" /></a>
                            </div>
                            <div class="col-sm-8">
                              <h4 class="nomargin"><b>玩偶吊飾</b></h4>
                              <p>水星/大耳狗玩偶吊飾、木星/瑪莉兔玩偶吊飾、火星/庫洛米玩偶吊飾.</p>
                            </div>
                          </div>
                        </td>
                        <td data-th="Price">$750</td>
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
                      </tr>
                      <tr>
                        <td data-th="Product">
                          <div class="row">
                            <div class="col-sm-4 hidden-xs"><img
                                src="https://down-tw.img.susercontent.com/file/tw-11134207-7r98y-lq1pws45etqa02"
                                alt="..." class="img-responsive" /></div>
                            <div class="col-sm-8">
                              <h4 class="nomargin"><b>拉鍊收納包</b></h4>
                              <p>Hello Kitty/月野兔、美樂蒂/小兔子、大耳狗/水野亞美、庫洛米/火野麗、布丁狗/愛野美奈子</p>
                            </div>
                          </div>
                        </td>
                        <td data-th="Price">$260</td>
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
                      </tr>
                      <tr>
                        <td data-th="Product">
                          <div class="row">
                            <div class="col-sm-4 hidden-xs"><img
                                src="https://down-tw.img.susercontent.com/file/tw-11134207-7r98w-lmbzxx10l57fe5"
                                alt="..." class="img-responsive" /></div>
                            <div class="col-sm-8">
                              <h4 class="nomargin"><b>壓克力吊飾盲盒</b></h4>
                              <p>全14種隨機出貨</p>
                            </div>
                          </div>
                        </td>
                        <td data-th="Price">$300</td>
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
                      </tr>
                      <tr>
                        <td data-th="Product">
                          <div class="row">
                            <div class="col-sm-4 hidden-xs"><img
                                src="https://down-tw.img.susercontent.com/file/tw-11134207-7r98s-lnx31qxr00mx53"
                                alt="..." class="img-responsive" /></div>
                            <div class="col-sm-8">
                              <h4 class="nomargin"><b>原子筆</b></h4>
                              <p>粉色-內部戰士、藍色-外部戰士</p>
                            </div>
                          </div>
                        </td>
                        <td data-th="Price">$140</td>
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
                      </tr>
                      <tr>
                        <td data-th="Product">
                          <div class="row">
                            <div class="col-sm-4 hidden-xs"><img
                                src="https://down-tw.img.susercontent.com/file/tw-11134207-7r98p-lnv400gmp5wd07"
                                alt="..." class="img-responsive" /></div>
                            <div class="col-sm-8">
                              <h4 class="nomargin"><b>多層資料夾</b></h4>
                              <p>米色-內部戰士、白色-外部戰士</p>
                            </div>
                          </div>
                        </td>
                        <td data-th="Price">$145</td>
                        <td data-th="Quantity">
                          <input type="number" class="form-control text-center" value="1">
                        </td>
                        <td data-th="Subtotal" class="text-center">145</td>
                        <td class="actions" data-th="">
                          <button class="btn btn-info btn-sm"
                          style="background-color: #b0a5c6a8;border: none;color: white;"><i class="fa-solid fa-pen-to-square"></i></button>
                          <button class="btn btn-danger btn-sm"
                          style="background-color: #E9C9D6;border: none;color: white;"><i class="fa-solid fa-trash"></i></button>
                        </td>
                      </tr>

                    </tbody>
                  </table>
                </div>
              </div>
              <div class="seven" id="list-item-2">
                <h1>待上架商品區</h1>
              </div>
              <div class="row">
                <div id="slider-carouse2" class="owl-carousel">
                  <div class="waiting">
                    <div class="card" style="width: 18rem;">
                      <div class="card-head">
                        <img
                          src="https://files.lpzine.com/image/4478a9bfc3a1f836be104836821bdb6272bdc92cd3fe5c17bf4a28300771fc0f/79779280/252536752372183039.jpg"
                          class="card-img-top" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                          the card's content.</p>
                        <button class="btn btn-info btn-sm"
                        style="background-color: #b0a5c6a8;border: none;color: white;"><i class="fa-solid fa-pen-to-square"></i></button>
                        <button class="btn btn-danger btn-sm"
                        style="background-color: #E9C9D6;border: none;color: white;"><i class="fa-solid fa-trash"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class="waiting">
                    <div class="card" style="width: 18rem;">
                      <div class="card-head">
                        <img
                          src="https://tshop.r10s.com/251ef580-ec8c-11e4-8128-005056b73023/New/202120/s4970381702892c.jpg?_ex=486x486"
                          class="card-img-top" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                          the card's content.</p>
                        <button class="btn btn-info btn-sm"
                        style="background-color: #b0a5c6a8;border: none;color: white;"><i class="fa-solid fa-pen-to-square"></i></button>
                        <button class="btn btn-danger btn-sm"
                        style="background-color: #E9C9D6;border: none;color: white;"><i class="fa-solid fa-trash"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class="waiting">
                    <div class="card" style="width: 18rem;">
                      <div class="card-head">
                        <img
                          src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQUxCyCFKqFewe5wuex5uWkVHbfM8GN4ANNIaJgWq5gxw&s"
                          class="card-img-top" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                          the card's content.</p>
                        <button class="btn btn-info btn-sm"
                        style="background-color: #b0a5c6a8;border: none;color: white;"><i class="fa-solid fa-pen-to-square"></i></button>
                        <button class="btn btn-danger btn-sm"
                        style="background-color: #E9C9D6;border: none;color: white;"><i class="fa-solid fa-trash"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class="waiting">
                    <div class="card" style="width: 18rem;">
                      <div class="card-head">
                        <img src="https://shoplineimg.com/63f327d6db5064000a7e4723/659e2a669e25b5bf4d0a8c25/800x.jpeg?"
                          class="card-img-top" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                          the card's content.</p>
                        <button class="btn btn-info btn-sm"
                        style="background-color: #b0a5c6a8;border: none;color: white;"><i class="fa-solid fa-pen-to-square"></i></button>
                        <button class="btn btn-danger btn-sm"
                        style="background-color: #E9C9D6;border: none;color: white;"><i class="fa-solid fa-trash"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <br><br>
              <div class="seven" id="list-item-3">
                <h1>下架商品區</h1>
              </div>
              <div class="row">
                <div id="slider-carouse3" class="owl-carousel">
                  <div class="waiting">
                    <div class="card" style="width: 18rem;">
                      <div class="card-head">
                        <img
                          src="https://files.lpzine.com/image/4478a9bfc3a1f836be104836821bdb6272bdc92cd3fe5c17bf4a28300771fc0f/79779280/252536752372183039.jpg"
                          class="card-img-top" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                          the card's content.</p>
                        <button class="btn btn-info btn-sm"
                        style="background-color: #b0a5c6a8;border: none;color: white;"><i class="fa-solid fa-pen-to-square"></i></button>
                        <button class="btn btn-danger btn-sm"
                        style="background-color: #E9C9D6;border: none;color: white;"><i class="fa-solid fa-trash"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class="waiting">
                    <div class="card" style="width: 18rem;">
                      <div class="card-head">
                        <img
                          src="https://tshop.r10s.com/251ef580-ec8c-11e4-8128-005056b73023/New/202120/s4970381702892c.jpg?_ex=486x486"
                          class="card-img-top" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                          the card's content.</p>
                        <button class="btn btn-info btn-sm"
                        style="background-color: #b0a5c6a8;border: none;color: white;"><i class="fa-solid fa-pen-to-square"></i></button>
                        <button class="btn btn-danger btn-sm"
                        style="background-color: #E9C9D6;border: none;color: white;"><i class="fa-solid fa-trash"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class="waiting">
                    <div class="card" style="width: 18rem;">
                      <div class="card-head">
                        <img
                          src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQUxCyCFKqFewe5wuex5uWkVHbfM8GN4ANNIaJgWq5gxw&s"
                          class="card-img-top" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                          the card's content.</p>
                        <button class="btn btn-info btn-sm"
                        style="background-color: #b0a5c6a8;border: none;color: white;"><i class="fa-solid fa-pen-to-square"></i></button>
                        <button class="btn btn-danger btn-sm"
                        style="background-color: #E9C9D6;border: none;color: white;"><i class="fa-solid fa-trash"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class="waiting">
                    <div class="card" style="width: 18rem;">
                      <div class="card-head">
                        <img src="https://shoplineimg.com/63f327d6db5064000a7e4723/659e2a669e25b5bf4d0a8c25/800x.jpeg?"
                          class="card-img-top" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                          the card's content.</p>
                        <button class="btn btn-info btn-sm"
                        style="background-color: #b0a5c6a8;border: none;color: white;"><i class="fa-solid fa-pen-to-square"></i></button>
                        <button class="btn btn-danger btn-sm"
                        style="background-color: #E9C9D6;border: none;color: white;"><i class="fa-solid fa-trash"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section id="first">
          <h2>Shipping</h2>
          <div id="third">
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
                  <h4 class="card-title" style="font-size: 0.6cm;float: left;margin-top: 13px;"><small>撰寫內容...</small>
                  </h4>
                  <button class="btn btn-info btn-sm" 
                  style="font-size: 0.3cm;float: right;margin-top: 13px;background-color: #b0a5c6a8;border: none;color: white;"><i
                      class="fa-solid fa-pen-to-square"></i></button>
                </div>
              </div>
            </div>
            <h3><i class="fa-solid fa-star"></i>團主公告
              <button id="pra" style="float: right; border-radius: 50%;"><i
                  class="fa-solid fa-arrow-right"></i></button>
            </h3>
            <div class="row">
              <div id="slider-carousel" class="owl-carousel">
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
                        <p class="card-text">
                        <p>尊敬的客戶:</p>
                        您可以通過訂單追蹤連結來查看包裹的最新狀態。如果您有任何問題或需要幫助，請隨時與我們的客服團隊聯繫。祝您購物愉快！
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <script>
                  document.getElementById('pra').addEventListener('click', function () {
                    var owl = document.getElementById("slider-carousel");
                    $(owl).owlCarousel(); // 初始化 Owl Carousel
                    $(owl).trigger('prev .owl-carousel'); // 觸發向前滑動
                  });
                </script>
                <!-- 添加其他的 .item -->
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

            <div class="part2" id="card1">
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
                  <h4 style="float: right;margin-top:-70px;"><i class="fa-solid fa-ellipsis-vertical"></i></h4>
                </div>
                <div class="card-body ">

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
                    <i class="bi bi-clock"></i><a href="blog-single.html">&nbsp;<small datetime="2020-01-01">Jan 1,
                        2020</small></a>&nbsp;
                    <i class="bi bi-chat-dots"></i>&nbsp;<small>2</small>
                  </h4>

                </div>
              </div>
            </div>
          </div>
          <div class="part2" id="card2">
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
                <h4 style="float: right;margin-top:-70px;"><i class="fa-solid fa-ellipsis-vertical"></i></h4>
              </div>
              <div class="card-body ">

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
                  <i class="bi bi-clock"></i><a href="blog-single.html">&nbsp;<small datetime="2020-01-01">Jan 1,
                      2020</small></a>&nbsp;
                  <i class="bi bi-chat-dots"></i>&nbsp;<small>2</small>
                </h4>

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
                <h4 style="float: right;margin-top:-70px;"><i class="fa-solid fa-ellipsis-vertical"></i></h4>
              </div>
              <div class="card-body ">

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
                  <i class="bi bi-clock"></i><a href="blog-single.html">&nbsp;<small datetime="2020-01-01">Jan 1,
                      2020</small></a>&nbsp;
                  <i class="bi bi-chat-dots"></i>&nbsp;<small>2</small>
                </h4>
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
                <h4 style="float: right;margin-top:-70px;"><i class="fa-solid fa-ellipsis-vertical"></i></h4>
              </div>
              <div class="card-body ">

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
                  <i class="bi bi-clock"></i><a href="blog-single.html">&nbsp;<small datetime="2020-01-01">Jan 1,
                      2020</small></a>&nbsp;
                  <i class="bi bi-chat-dots"></i>&nbsp;<small>2</small>
                </h4>

              </div>
            </div>
          </div>
          <script>
            document.addEventListener("DOMContentLoaded", function () {
              var part2 = document.getElementById('card1');

              part2.addEventListener('click', function () {
                // 导航到新页面
                window.location.href = '../lisa/discussion.html#blog';

                // 页面加载后延迟执行滚动到指定区域
                window.addEventListener('load', function () {
                  setTimeout(function () {
                    var targetElement = document.querySelector('#blog');
                    if (targetElement) {
                      targetElement.scrollIntoView();
                    }
                  }, 1000); // 延迟 1 秒执行滚动操作
                });
              });
            });
            document.addEventListener("DOMContentLoaded", function () {
              var part3 = document.getElementById('card0');

              part3.addEventListener('click', function () {
                // 导航到新页面
                window.location.href = '../lisa/rewrite.html#blog';

                // 页面加载后延迟执行滚动到指定区域
                window.addEventListener('load', function () {
                  setTimeout(function () {
                    var targetElement = document.querySelector('#contact');
                    if (targetElement) {
                      targetElement.scrollIntoView();
                    }
                  }, 1000); // 延迟 1 秒执行滚动操作
                });
              });
            });

          </script>
        </section>
        <section id="order">
          <h2>Returns</h2>
          <div class="seven">
            <h1>對帳表</h1>
          </div>
          <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>Order</th>
                <th>Description</th>
                <th>Deadline</th>
                <th>Status</th>
                <th>Amount</th>
                <th>確認付款</th>
                <th>備註</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Alphabet puzzle</td>
                <td>2016/01/15</td>
                <td>Done</td>
                <td>1000</td>
                <td>
                  <center>
                    <input id="box1" type="checkbox" />
                    <label for="box1" id="label1">未付款</label>
                  </center>
                </td>
                <td>
                  <p>希望可以幫我併單</p>
                </td>
              </tr>

              <tr>
                <td>2</td>
                <td>Layout for poster</td>
                <td>2016/01/31</td>
                <td>Planned</td>
                <td>1834</td>
                <td>
                  <center><input id="box2" type="checkbox" />
                    <label for="box2">未付款</label>
                  </center>
                </td>
                <td>
                  <p>希望可以幫我併單</p>
                </td>
              </tr>
              <tr>
                <td>3</td>
                <td>Image creation</td>
                <td>2016/01/23</td>
                <td>To Do</td>
                <td>1500</td>
                <td>
                  <center>
                    <input id="box3" type="checkbox" />
                    <label for="box3">未付款</label>
                  </center>
                </td>
                <td>
                  <p>希望可以幫我併單</p>
                </td>
              </tr>
              <tr>
                <td>4</td>
                <td>Create font</td>
                <td>2016/02/26</td>
                <td>Done</td>
                <td>1200</td>
                <td>
                  <center><input id="box4" type="checkbox" />
                    <label for="box4">未付款</label>
                  </center>
                </td>
                <td>
                  <p>希望可以幫我併單</p>
                </td>
              </tr>
              <tr>
                <td>5</td>
                <td>Sticker production</td>
                <td>2016/02/18</td>
                <td>Planned</td>
                <td>2100</td>
                <td>
                  <center><input id="box5" type="checkbox" />
                    <label for="box5">未付款</label>
                  </center>
                </td>
                <td>
                  <p>希望可以幫我併單</p>
                </td>
              </tr>

              <tr>
                <td>11</td>
                <td>Wedding announcement</td>
                <td>2016/07/09</td>
                <td>To Do</td>
                <td>299</td>
                <td>
                  <center><input id="box6" type="checkbox" />
                    <label for="box6">未付款</label>
                  </center>
                </td>
                <td>
                  <p>希望可以幫我併單</p>
                </td>
              </tr>
            </tbody>
          </table>

          <button onclick="showCsv()">Console log csv code</button>
          <button onclick="download()">Download csv file</button>
          <br><br><br><div class="seven">
              <h1>接收訂單</h1>
            </div>
            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Order</th>
                  <th>Description</th>
                  <th>Deadline</th>
                  <th>Status</th>
                  <th>Amount</th>
                  <th>確認接收</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Alphabet puzzle</td>
                  <td>2016/01/15</td>
                  <td>Done</td>
                  <td>1000</td>
                  <td>
                    <button type="button" class="btn btn-primary" 
                    style="background-color: #E9C9D6;border: none;color: white;">接收訂單</button>
                  </td>
                </tr>
  
                <tr>
                  <td>2</td>
                  <td>Layout for poster</td>
                  <td>2016/01/31</td>
                  <td>Planned</td>
                  <td>1834</td>
                  <td>
                    <button type="button" class="btn btn-primary"
                    style="background-color: #E9C9D6;border: none;color: white;">接收訂單</button>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Image creation</td>
                  <td>2016/01/23</td>
                  <td>To Do</td>
                  <td>1500</td>
                  <td>
                    <button type="button" class="btn btn-primary"
                    style="background-color: #E9C9D6;border: none;color: white;">接收訂單</button>
                  </td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Create font</td>
                  <td>2016/02/26</td>
                  <td>Done</td>
                  <td>1200</td>
                  <td>
                    <button type="button" class="btn btn-primary"
                    style="background-color: #E9C9D6;border: none;color: white;">接收訂單</button>
                  </td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Sticker production</td>
                  <td>2016/02/18</td>
                  <td>Planned</td>
                  <td>2100</td>
                  <td>
                    <button type="button" class="btn btn-primary"
                    style="background-color: #E9C9D6;border: none;color: white;">接收訂單</button>
                  </td>
                </tr>
  
                <tr>
                  <td>11</td>
                  <td>Wedding announcement</td>
                  <td>2016/07/09</td>
                  <td>To Do</td>
                  <td>299</td>
                  <td>
                    <button type="button" class="btn btn-primary"
                    style="background-color: #E9C9D6;border: none;color: white;">接收訂單</button>
                  </td>
                </tr>
              </tbody>
            </table><br>
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
            </div></div>
            <br>
            
          
      </div>
      </section>
    </div>
    </div>

    <script>
      // 取得按鈕元素
      const checkbox = document.getElementById('box1');
      const label1 = document.getElementById('label1');

      // 添加点击事件监听器
      checkbox.addEventListener('click', function () {
        // 检查当前按钮文本
        if (checkbox.checked) {
          label1.textContent = '已付款';
        } else {
          label1.textContent = '未付款';
        }
      });
    </script>
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
    <script src="https://cdn.datatables.net/buttons/3.0.1/js/buttons.html5.min.js"></script>
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