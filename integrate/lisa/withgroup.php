<?php
session_start();
$commodity_group_id = $_GET["commodity_group_id"]; // 在哪一個商品團體要用接值得方式,先假設1,之後再改
// 首先啟動會話
//session_start();
$account = $_SESSION["account"];
$link = mysqli_connect('localhost', 'root', '12345678', 'wishop');

// 檢查連接是否成功
if ($link->connect_error) {
    die("連接失敗: " . $link->connect_error);
}

// 獲取前端傳來的參數
if (isset($_POST["delgroup"])) {
    // 在這裡執行刪除操作
    $sql = "UPDATE commodity_group SET commodity_group_state = 2 WHERE commodity_group_id=$commodity_group_id";
    if (mysqli_query($link, $sql)) {
        echo '<script>alert("結束成功!"); window.location.href = "InnerBuyer.php?commodity_group_id='.$commodity_group_id.'";</script>';
    } else {
        echo '<script>alert("結束失敗!"); window.location.href = "InnerBuyer.php?commodity_group_id='.$commodity_group_id.'";</script>';
    }
}

if (isset($_POST['addgroup'])) {
    // 在這裡執行刪除操作
    $sql = "INSERT INTO withgroup
        (commodity_group_id,account, withgroup_time) 
        VALUES ($commodity_group_id, '$account', now())";
    if (mysqli_query($link, $sql)) {
        echo '<script>alert("跟團成功!"); window.location.href = "InnerPage.php?commodity_group_id='.$commodity_group_id.'";</script>';
    } else {
        echo '<script>alert("跟團失敗!"); window.location.href = "InnerPage.php?commodity_group_id='.$commodity_group_id.'";</script>';
    }
}



// 關閉資料庫連接
mysqli_close($link);
?>