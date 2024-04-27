<?php
if(isset($_POST['submit']) || isset($_POST['submit2'])) {
    $shop_id = 1;
    // 取得目前会话的 Session ID
    $account = 'sena1102';
    $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');

    if (!$link) {
        die('Connection failed: ' . mysqli_connect_error());
    }
    $sql = "SELECT common_payment_account FROM shop NATURAL JOIN account WHERE shop_id = ' $shop_id'";
    $sql1 = "SELECT common_payment_account FROM account WHERE account = '$account'";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($result);
    $account_to_send_money_to = $row['common_payment_account'];
    $result1 = mysqli_query($link, $sql1);
    $row1 = mysqli_fetch_assoc($result1);
    $payment_account = $row1['common_payment_account'];
    $payment_state=1;
    $order_state="未成立";
    $remark = isset($_POST['remark']) ? $_POST['remark'] : ''; // 检查备注是否设置
    // 取得目前的时间戳
    $timestamp = time();
    // 将时间戳格式化为日期时间字符串
    $order_time = date("Y-m-d H:i:s", $timestamp);
    $num=0;
    foreach ($_POST as $key => $value) {
        if (strpos($key, 'quantity_') !== false) {
            $commodity_id = substr($key, strlen('quantity_'));
            $quantity = $value;
            echo "Commodity ID: $commodity_id, Quantity: $quantity, $key <br>";
            // 现在您可以使用 $commodity_id 和 $quantity 来进行相应的操作
            if ($quantity != 0) {
                $sql2 = "INSERT INTO `order` (account, order_time, account_to_send_money_to, payment_account, payment_state, remark, order_state) 
                        VALUES ('$account', '$order_time', '$account_to_send_money_to', '$payment_account', '$payment_state', '$remark', '$order_state')";
                $result2 = mysqli_query($link, $sql2);
                if ($result2) {
                    $order_id = mysqli_insert_id($link);
                    $sql3 = "INSERT INTO order_details (order_id, commodity_id, order_details_num) 
                            VALUES ('$order_id', '$commodity_id', '$quantity')";
                    $result3 = mysqli_query($link, $sql3);
                    if ($result3) {
                        echo '<script>alert("新增成功!
                        Commodity ID: ' . $commodity_id . ', Quantity: ' . $quantity . ', ' . $key . '"); window.location.href = "InnerPage.php";</script>';
                        exit(); 
                    } else {
                        echo '<script>alert("新增失败"); window.location.href = "InnerPage.php";</script>'; 
                    }
                } else {
                    echo '<script>alert("新增失败"); window.location.href = "InnerPage.php";</script>'; 
                }
            }
            else {
                echo '<script>
                alert("Commodity ID: ' . $commodity_id . ', Quantity: ' . $quantity . ', ' . $key . ' <br>");
                 window.location.href = "InnerPage.php";</script>';
            }
        }
    }

    mysqli_close($link);
}
?>
