<?php
$commodity_group_id = 3; // 在哪一個商品團體要用接值得方式,先假設1,之後再改
// 首先啟動會話
session_start();
// 取得目前會話的 Session ID
$account = session_id();
$link = mysqli_connect('localhost', 'root', '12345678', 'wishop');

// 檢查連接是否成功
if ($link->connect_error) {
    die("連接失敗: " . $link->connect_error);
}

// 獲取前端傳來的參數
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 判斷是否是確定按鈕的點擊事件
    if (isset($_POST["delgroup"])) {
        // 在這裡執行刪除操作
        $sql = "DELETE FROM commodity_group WHERE commodity_group_id = $commodity_group_id";
        if (mysqli_query($link, $sql)) {
            echo "成功刪除該團體";
        } else {
            echo "刪除失敗: " . mysqli_error($link);
        }
    }
}
// 獲取前端傳來的參數
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 判斷是否是確定按鈕的點擊事件
    if (isset($_POST["addgroup"])) {
        // 取得目前的時間戳
        $timestamp = time();
        // 將時間戳格式化為日期時間字串
        $add_time = date("Y-m-d H:i:s", $timestamp);
        // 在這裡執行刪除操作
        $sql = "INSERT INTO withgroup
        (commodity_group_id,account, withgroup_time) 
        VALUES (3, '$account', '$add_time')";
        if (mysqli_query($link, $sql)) {
            echo "成功跟團";
        } else {
            echo "跟團刪除: " . mysqli_error($link);
        }
    }
}

// 關閉資料庫連接
mysqli_close($link);
?>