<?php
// 獲取 AJAX 請求中傳遞的資料
$order_id = $_POST['order_id']; // 從 JavaScript 中發送的 order_id
$payment_state = $_POST['payment_state']; // 從 JavaScript 中發送的 payment_state

// 執行資料庫更新操作，這裡只是示例，請替換為您的實際代碼
$link = mysqli_connect('localhost', 'root', '12345678', 'wishop');
if (!$link) {
    die('Connection failed: ' . mysqli_connect_error());
}

// 根據接收到的資料更新資料庫
$sql = "UPDATE `order` SET payment_state = '$payment_state' WHERE order_id = '$order_id'";

if (mysqli_query($link, $sql)) {
    echo '<script>alert("修改成功!"); window.location.href = "InnerBuyer.php?commodity_group_id='.$commodity_group_id.'";</script>';
} else {
    echo '<script>alert("修改失敗!"); window.location.href = "InnerBuyer.php?commodity_group_id='.$commodity_group_id.'";</script>';
}

mysqli_close($link);
?>
