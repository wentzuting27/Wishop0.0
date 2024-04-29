<?php
if(isset($_POST['submit'])){
    $status = isset($_POST['submit']) ? intval($_POST['submit']) : 0;
    $order_id = isset($_POST['order_id']) ? intval($_POST['order_id']) : 0;
    $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');

    if (!$link) {
        die('Connection failed: ' . mysqli_connect_error());
    }
    // 更新数据库中的状态值
    $sql = "UPDATE `order` SET status=$status WHERE order_id=$order_id"; // 根据订单ID更新状态
    if (mysqli_query($link, $sql)) {
        echo "状态已更新";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($link);
    }
    mysqli_close($link);
}
?>
