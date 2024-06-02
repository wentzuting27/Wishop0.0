<?php
session_start();
if(isset($_POST['submit']) || isset($_POST['submit2'])) {
    $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');
    if (!$link) {
        die('Connection failed: ' . mysqli_connect_error());
    }
    $commodity_group_id = $_GET["commodity_group_id"];
    $sql4= "SELECT shop_id FROM commodity_group WHERE commodity_group_id = '$commodity_group_id'";
    $result4=mysqli_query($link, $sql4);
    $row4 = mysqli_fetch_assoc($result4);
    $shop_id = $row4["shop_id"];
    // 取得目前会话的 Session ID
    // session_start();
    $account = $_SESSION["account"];
    
    $sql = "SELECT common_payment_account FROM shop NATURAL JOIN account WHERE shop_id = ' $shop_id'";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($result);
    $account_to_send_money_to = $_POST['payment_account'];
    $payment_account = $row1['common_payment_account'];
    $payment_state=1;
    $order_state="未成立";
    if($account_to_send_money_to=="無卡交易"){
        $remark = $_POST['remark'] . "(無卡交易之訂單)";
    }
    else{
       $remark = $_POST['remark']; // 检查备注是否设置 
    }
    // 取得目前的时间戳
    $timestamp = time();
    // 将时间戳格式化为日期时间字符串
    $order_time = date("Y-m-d H:i:s", $timestamp);

    // 插入訂單主要資訊
    $sql2 = "INSERT INTO `order` (account, order_time, account_to_send_money_to, payment_account, payment_state, remark, order_state) 
                    VALUES ('$account', '$order_time', '$account_to_send_money_to', '$payment_account', '$payment_state', '$remark', '$order_state')";
    $result2 = mysqli_query($link, $sql2);
    
    // 如果插入失敗，則提示並退出
    if (!$result2) {
        echo '<script>alert("新增失敗"); window.location.href = "InnerPage.php?commodity_group_id='.$commodity_group_id.'";</script>';
        exit();
    }

    // 初始化訂單細節陣列
    $order_details = array();
    foreach ($_POST as $key => $value) {
        if (strpos($key, 'quantity_') !== false) {
            $commodity_id = substr($key, strlen('quantity_'));
            $quantity = $value;
            // 现在您可以使用 $commodity_id 和 $quantity 来进行相应的操作
            if ($quantity != 0) {
                $order_details[] = array('commodity_id' => $commodity_id, 'quantity' => $quantity);
            }
        }
    }

    // 檢查是否有選擇了商品
    if (empty($order_details)) {
        echo '<script>alert("請選擇至少一個商品"); window.location.href = "InnerPage.php?commodity_group_id='.$commodity_group_id.'";</script>';
        exit();
    }

    // 初始化成功標誌
    $all_successful = true;

    // 對每個商品的訂單資訊進行處理
    foreach ($order_details as $order_item) {
        $commodity_id = $order_item['commodity_id'];
        $quantity = $order_item['quantity'];
        
        // 插入訂單細節資訊
        $sql3 = "INSERT INTO order_details (order_id, commodity_id, order_details_num) 
                    VALUES (LAST_INSERT_ID(), '$commodity_id', '$quantity')";
        $result3 = mysqli_query($link, $sql3);

        // 如果插入失敗，將成功標誌設為false並中斷循環
        if (!$result3) {
            $all_successful = false;
            break;
        }
    }

    // 根據成功標誌顯示結果
    if ($all_successful) {
        echo '<script>alert("新增成功!"); window.location.href = "InnerPage.php?commodity_group_id='.$commodity_group_id.'";</script>';
    } else {
        echo '<script>alert("新增失敗"); window.location.href = "InnerPage.php?commodity_group_id='.$commodity_group_id.'";</script>';
    }

    mysqli_close($link);
}
if(isset($_POST['delorder'])) {
    $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');
    if (!$link) {
        die('Connection failed: ' . mysqli_connect_error());
    }
    $commodity_group_id = $_GET["commodity_group_id"];
    $order_id=$_POST["order_id"];
    $sql = "DELETE FROM `order` WHERE order_id=$order_id";
    $result = mysqli_query($link, $sql);
    if ($result) {
        echo '<script>alert("刪除成功"); window.location.href = "InnerPage.php?commodity_group_id='.$commodity_group_id.'";</script>';
        exit();
    }
    else{
        echo '<script>alert("刪除失敗"); window.location.href = "InnerPage.php?commodity_group_id='.$commodity_group_id.'";</script>';
        exit();
    }
}
?>
