<?php
session_start();
if(isset($_POST['submit'])) {
    $commodity_group_id = $_GET["commodity_group_id"];
    $announce_title = $_POST['announce_title'];
    $announce_narrate = $_POST['announce_narrate'];
    // 取得目前的時間戳
    $timestamp = time();
    // 將時間戳格式化為日期時間字串
    $submit_time = date("Y-m-d H:i:s", $timestamp);
    $commodity_link = $_POST['commodity_link'];
    $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');

    if (!$link) {
        die('Connection failed: ' . mysqli_connect_error());
    }

    // 移除了 'c_original_product_link' 的引號，因為欄位名稱不應該被引號包裹
    $sql = "INSERT INTO commodity_group_announce
     (commodity_group_id,announce_time, announce_title, announce_narrate) 
     VALUES ('$commodity_group_id', '$submit_time', '$announce_title', '$announce_narrate')";

    $result = mysqli_query($link, $sql);
    if ($result) {
        echo '<script>alert("新增成功!"); window.location.href = "InnerBuyer.php?commodity_group_id='.$commodity_group_id.'";</script>';
        exit(); 
    } else{
        echo '<script>alert("新增失敗"); window.location.href = "InnerBuyer.php?commodity_group_id='.$commodity_group_id.'";</script>'; 
    }
    
    mysqli_close($link);
}
if(isset($_POST['delrewrite'])) {
    $commodity_group_id = $_GET["commodity_group_id"];
    $announce_id = $_POST['announce_id'];
    
    $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');

    if (!$link) {
        die('Connection failed: ' . mysqli_connect_error());
    }

    $sql = "DELETE FROM commodity_group_announce WHERE commodity_group_announce_id = $announce_id;";

    $result = mysqli_query($link, $sql);
    if ($result) {
        echo '<script>alert("刪除成功!"); window.location.href = "InnerBuyer.php?commodity_group_id='.$commodity_group_id.'";</script>';
        exit(); 
    } else{
        echo '<script>alert("刪除失敗"); window.location.href = "InnerBuyer.php?commodity_group_id='.$commodity_group_id.'";</script>'; 
    }
    
    mysqli_close($link);
}
?>