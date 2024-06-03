<?php
session_start();
if(isset($_POST['submit'])) {
    $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');
    if (!$link) {
        die('Connection failed: ' . mysqli_connect_error());
    }
    $commodity_group_id = $_GET["commodity_group_id"];
    $order_state = $_POST["order_state"];
    if($order_state="完成訂單"){
        echo '<script>alert("無法設定完成訂單"); window.location.href = "InnerBuyer.php?commodity_group_id='.$commodity_group_id.'";</script>';
    }
    $order_id = $_POST["order_id"];
    $sql= "UPDATE `order` SET order_state='$order_state' WHERE order_id='$order_id'";
    $result=mysqli_query($link, $sql);
    // 根據成功標誌顯示結果
    if ($result) {
        echo '<script>alert("儲存成功!"); window.location.href = "InnerBuyer.php?commodity_group_id='.$commodity_group_id.'";</script>';
    } else {
        echo '<script>alert("儲存失敗"); window.location.href = "InnerBuyer.php?commodity_group_id='.$commodity_group_id.'";</script>';
    }

    
    mysqli_close($link);
}
if(isset($_POST['submit2'])) {
    $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');
    if (!$link) {
        die('Connection failed: ' . mysqli_connect_error());
    }
    $commodity_group_id = $_GET["commodity_group_id"];
    $order_state="已成立";
    $order_id = $_POST["order_id"];
    $sql= "UPDATE `order` SET order_state='$order_state' WHERE order_id='$order_id'";
    $result=mysqli_query($link, $sql);
    // 根據成功標誌顯示結果
    if ($result) {
        echo '<script>alert("接收成功!"); window.location.href = "InnerBuyer.php?commodity_group_id='.$commodity_group_id.'";</script>';
    } else {
        echo '<script>alert("接收失敗"); window.location.href = "InnerBuyer.php?commodity_group_id='.$commodity_group_id.'";</script>';
    }

    
    mysqli_close($link);
}
if(isset($_POST['submit3'])) {
    $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');
    if (!$link) {
        die('Connection failed: ' . mysqli_connect_error());
    }
    $commodity_group_id = $_GET["commodity_group_id"];
    $order_state="拒絕接收";
    $order_id = $_POST["order_id"];
    $sql= "UPDATE `order` SET order_state='$order_state' WHERE order_id='$order_id'";
    $result=mysqli_query($link, $sql);
    // 根據成功標誌顯示結果
    if ($result) {
        echo '<script>history.go(-1);</script>';
    } else {
        echo '<script>alert("接收失敗"); window.location.href = "InnerBuyer.php?commodity_group_id='.$commodity_group_id.'";</script>';
    }

    
    mysqli_close($link);
}
?>
