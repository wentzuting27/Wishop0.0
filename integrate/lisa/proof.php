<?php
session_start();
$link = mysqli_connect('localhost', 'root', '12345678', 'wishop');
if (!$link) {
    die('Connection failed: ' . mysqli_connect_error());
}
$order_id = $_POST['order_id'];
$commodity_group_id = $_GET["commodity_group_id"];
if (isset($_POST['order_id'])) {
    $order_id = $_POST['order_id'];
    $sql2 = "UPDATE `order` SET payment_state = 2 WHERE order_id = '$order_id'";
    if (mysqli_query($link, $sql2)) {
        $sql3="DELETE FROM proof_of_purchase WHERE order_id = '$order_id'";
        if (mysqli_query($link, $sql3)){
            echo '<script>alert("確認成功!");window.location.href = "InnerBuyer.php?commodity_group_id=' . $commodity_group_id . '";</script>';
        }
        else {
            echo '<script>alert("確認失敗!"); window.location.href = "InnerBuyer.php?commodity_group_id=' . $commodity_group_id . '";</script>';
        }
    }
}
else{
    echo '<script>alert("確認失敗!"); window.location.href = "InnerBuyer.php?commodity_group_id=' . $commodity_group_id . '";</script>';
}
?>