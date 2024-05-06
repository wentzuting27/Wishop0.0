<?php
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
if (isset($_POST["submit2"])) {
    // 在這裡執行刪除操作
    $sql = "DELETE FROM save_group WHERE commodity_group_id = $commodity_group_id";
    if (mysqli_query($link, $sql)) {
        echo '<script>alert("取消收藏成功!"); window.location.href = "InnerPage.php?commodity_group_id='.$commodity_group_id.'";</script>';
    } else {
        echo '<script>alert("取消收藏失敗!"); window.location.href = "InnerPage.php?commodity_group_id='.$commodity_group_id.'";</script>';
    }
}

if (isset($_POST['submit'])) {
    // 取得目前的時間戳
    $timestamp = time();
    // 將時間戳格式化為日期時間字串
    $add_time = date("Y-m-d H:i:s", $timestamp);
    // 在這裡執行刪除操作
    $sql = "INSERT INTO save_group
        (account,commodity_group_id,save_group_time) 
        VALUES ('$account',$commodity_group_id, '$add_time')";
    if (mysqli_query($link, $sql)) {
        echo '<script>alert("收藏成功!"); window.location.href = "InnerPage.php?commodity_group_id='.$commodity_group_id.'";</script>';
    } else {
        echo '<script>alert("收藏失敗!"); window.location.href = "InnerPage.php?commodity_group_id='.$commodity_group_id.'";</script>';
    }
}



// 關閉資料庫連接
mysqli_close($link);
?>