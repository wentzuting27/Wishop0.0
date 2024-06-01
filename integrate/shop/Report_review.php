<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>檢舉審核</title>
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
          <li><a href="../index/index.php">首頁</a></li>
          <li><a href="../index/portfolio.php">購物</a></li>
          <li><a href="../index/groupshop.php">團購</a></li>
          <li><a href="../wish/wish.php">許願池</a></li>

          <?php
          if (!empty($_SESSION['user_name'])) {
            echo '
 

              <li class="dropdown"><a href="../profile/Profile_settings.php"><img src="', $_SESSION["user_avatar"], '" class="nav-photo"></a>
                <ul>
                  <li><a style="color:#FFF;font-weight: 600;margin-bottom: 0px;">', $_SESSION["user_name"], '</a></li>
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
                    <li><a href="logout.php" style="font-weight: 600;">登出&nbsp;<i class="fa-solid fa-right-from-bracket"></i></a></li>';
                  
                echo '  
                </ul>
              </li>
              ';
          } else {
            echo "<a href='login.php' class='getstarted' style='color: white;'>登入</a>";
          }
          ?>


          <!-- <li><a href="contact.php">Contact</a></li> -->

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>


    </div>
  </header><!-- End Header -->


  <main id="main">

    <!-- ======= shop_group Section ======= -->
    <section id="shop_group" class="shop_group" style="padding-top: 90px;">
      <div class="container">

        <!-- ======= Schedule Section ======= -->
        <section id="schedule" class="section-with-bg">


          <div class="flex-container">
            <!-- Section Title -->
            <div class="section-title" data-aos="fade-up">
              <h2><i class="fa-solid fa-circle-exclamation"></i>&nbsp;&nbsp;檢舉審核</h2>
            </div><!-- End Section Title -->
          </div><!-- End flex-container -->


          <ul class="nav nav-tabs" role="tablist" data-aos="fade-up" data-aos-delay="100">
            <li class="nav-item">
              <a class="nav-link active" href="#day-1" role="tab" data-bs-toggle="tab"><i
                  class="fa-solid fa-hourglass-half"></i>&nbsp;待審核</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#day-2" role="tab" data-bs-toggle="tab"><i
                  class="fa-solid fa-hourglass-end"></i>&nbsp;已審核</a>
            </li>
          </ul>

          <div class="tab-content row justify-content-center" data-aos="fade-up" data-aos-delay="200">

            <!-- Schdule Day 1 -->
            <div role="tabpanel" class="col-lg-12 tab-pane fade show active" id="day-1">

              <div class="row shop_group-container">

                <?php
                $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');
                $sql = "SELECT *
                FROM report r
                NATURAL JOIN commodity_group
                WHERE r.report_time = (
                    SELECT MAX(r2.report_time)
                    FROM report r2
                    WHERE r2.commodity_group_id = r.commodity_group_id
                )
                AND r.report_results = 3
                ORDER BY r.report_time DESC;";
                $result = mysqli_query($link, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                  echo '
                  <div class="col-lg-4 col-md-6 shop_group-item">
                    <div class="shop_group-wrap">
                    <a href="rr_details.php?commodity_group_id=' . $row['commodity_group_id'] . '" class="portfolio-details-lightbox"
                          data-glightbox="type: external" title="' . $row['commodity_group_name'] . '">
                      <figure>
                        <img src="', $row["commodity_group_bg"], '" alt="" width="100%" height="100%">
                      </figure></a>

                      <div class="shop_group-info">
                        <h4><a href="rr_details.php?commodity_group_id=' . $row['commodity_group_id'] . '" class="portfolio-details-lightbox"
                        data-glightbox="type: external" title="' . $row['commodity_group_name'] . '">', $row["commodity_group_name"], '</a></h4>
                        <div class="flex-container">
                          <p><i class="bi bi-clock-history"></i>&nbsp;', $row["report_time"], '</p>
                          <p><i class="fa-regular fa-user"></i>&nbsp;';

                  $sql_withgroup_num = "select *
                          from report
                          where commodity_group_id='{$row["commodity_group_id"]}'";
                  $result_withgroup_num = mysqli_query($link, $sql_withgroup_num);
                  echo mysqli_num_rows($result_withgroup_num);
                  echo '</p>
                        </div>
                      </div>
                    </div>
                  </div>

                  ';
                }
                ?>



              </div>

            </div>
            <!-- End Schdule Day 1 -->

            <!-- Schdule Day 2 -->
            <div role="tabpanel" class="col-lg-12  tab-pane fade" id="day-2">

              <div class="row">
              <table> 
                <tr style="border-bottom: 3px solid #979797;" align="center">
                <td><b>商品團體</b></td>
                <td><b>檢舉人</b></td>
                <td><b>檢舉類型</b></td>
                <td><b>檢舉理由</b></td>
                <td><b>檢舉時間</b></td>
                <td><b>審核時間</b></td>
                <td><b>審核狀態</b></td>
                
                </tr>
              <?php
                $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');
                $sql = "SELECT *
                FROM report r
                NATURAL JOIN commodity_group
                WHERE r.report_time = (
                    SELECT MAX(r2.report_time)
                    FROM report r2
                    WHERE r2.commodity_group_id = r.commodity_group_id
                )
                AND r.report_results != 3
                ORDER BY r.report_time DESC;";
                $result = mysqli_query($link, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                  echo "
                  <tr style='border-bottom: 3px dashed #979797;' align='center'><td>",$row['ev_code'],"</td>
                      <td>",$row['ev_name'],"</td>
                      <td>",$row['ev_open'],"<br>",$row['ev_end'],"</td>
                      <td>",$row['ev_place'],"</td>
                      <td>",$row['count(acc_id)'],"/",$row['ev_num2'],"</td>
                      <td>";
                      if($row['ev_state']=="yet"){
                        echo "未開始";
                      }elseif($row['ev_state']=="in"){
                        echo "進行中";
                      }else{
                        echo "已圓滿結束";
                      }
                      echo "</td>
                      <td>";
                      $sql_open="SELECT open_name FROM open_people WHERE ev_code='$ev_code'";
                      $result_open=mysqli_query($link,$sql_open);
                      $hasTeacher = false;
                      $hasStudent = false;
                      $hasExternal = false;
                      while ($row_open = mysqli_fetch_assoc($result_open)) {
                          switch ($row_open['open_name']) {
                              case "教職員":
                                  $hasTeacher = true;
                                  break;
                              case "學生":
                                  $hasStudent = true;
                                  break;
                              case "校外人士":
                                  $hasExternal = true;
                                  break;
                          }
                      }
                      echo $hasTeacher ? "<i class='fa-solid fa-check' style='color: #416095;'></i>" : "<i class='fa-solid fa-xmark' style='color: #416095;'></i>";
                      echo "</td>
                      <td>";
                      $sql_open="SELECT open_name FROM open_people WHERE ev_code='$ev_code'";
                      $result_open=mysqli_query($link,$sql_open);
                      $hasTeacher = false;
                      $hasStudent = false;
                      $hasExternal = false;
                      while ($row_open = mysqli_fetch_assoc($result_open)) {
                          switch ($row_open['open_name']) {
                              case "教職員":
                                  $hasTeacher = true;
                                  break;
                              case "學生":
                                  $hasStudent = true;
                                  break;
                              case "校外人士":
                                  $hasExternal = true;
                                  break;
                          }
                      }
                      echo $hasStudent ? "<i class='fa-solid fa-check' style='color: #416095;'></i>" : "<i class='fa-solid fa-xmark' style='color: #416095;'></i>";
                      echo "</td>
                      <td>";
                      $sql_open="SELECT open_name FROM open_people WHERE ev_code='$ev_code'";
                      $result_open=mysqli_query($link,$sql_open);
                      $hasTeacher = false;
                      $hasStudent = false;
                      $hasExternal = false;
                      while ($row_open = mysqli_fetch_assoc($result_open)) {
                          switch ($row_open['open_name']) {
                              case "教職員":
                                  $hasTeacher = true;
                                  break;
                              case "學生":
                                  $hasStudent = true;
                                  break;
                              case "校外人士":
                                  $hasExternal = true;
                                  break;
                          }
                      }
                      echo $hasExternal ? "<i class='fa-solid fa-check' style='color: #416095;'></i>" : "<i class='fa-solid fa-xmark' style='color: #416095;'></i>";
                      echo "</td>
                      <td>";
                      date_default_timezone_set('Asia/Taipei');

                      $open=array();
                      $sql_open="select open_name from open_people where ev_code='$ev_code'";
                      $result_open=mysqli_query($link,$sql_open);
                      while($row_open=mysqli_fetch_assoc($result_open))
                      {
                        $open[]=$row_open["open_name"];
                      }

                      $sql_acc="select * from sign where acc_id='{$_SESSION['acc_id']}' and ev_code='$ev_code'";
                      $result_acc=mysqli_query($link,$sql_acc);
                      if($row['ev_state']=="end"){
                        echo "<b><a href=./sign_in_inner_page_end.php?ev_code=",$row['ev_code'],">場次已結束</a></b>";
                      }elseif($row['ev_state']=="in"){
                        if(strtotime($row['ac_time2']) < strtotime('now')){
                          echo "<b><a href=./sign_in_inner_page_end.php?ev_code=",$row['ev_code'],">報名時間已過</a></b>";
                        }elseif(in_array($_SESSION['acc_identity'],$open)==false){
                          echo "<b><a href=./sign_in_inner_page_end.php?ev_code=",$row['ev_code'],">未開放",$_SESSION['acc_identity'],"報名</a></b>";
                        }elseif($row['ac_sign']=="no"){
                          echo "<b><a href=./sign_in_inner_page_end.php?ev_code=",$row['ev_code'],">無需報名</a></b>";
                        }elseif($row['count(acc_id)'] == $row['ev_num2']){
                          echo "<b><a href=./sign_in_inner_page_end.php?ev_code=",$row['ev_code'],">人數已滿</a></b>";
                        }elseif(mysqli_num_rows($result_acc) > 0){
                          echo "<b><a href=./sign_in_inner_page_end.php?ev_code=",$row['ev_code'],">已報名</a></b>";                        
                        }else{
                          echo "<b><a href=./sign_in_inner_page.php?ev_code=",$row['ev_code'],">我要報名</a></b>";
                        }                        
                      }else{
                        echo "<b>報名未開放</b>";
                      }                                           
                      echo "</td></tr>";
                  };
                 
              ?>
            </table>              
                


              </div>

            </div>
            <!-- End Schdule Day 2 -->


          </div>



        </section><!-- End Schedule Section -->


      </div>
    </section><!-- End Portfolio Section -->







  </main><!-- End #main -->



  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

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