<?php
if(isset($_POST['submit'])) {
    $commodity_name = $_POST['commodity_name'];
    $commodity_narrate = $_POST['commodity_narrate'];
    $commodity_state = $_POST['commodity_state'];
    $commodity_price = $_POST['commodity_price'];
    $commodity_link = $_POST['commodity_link'];
    
    $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');

    if (!$link) {
        die('Connection failed: ' . mysqli_connect_error());
    }

    // 移除了 'c_original_product_link' 的引號，因為欄位名稱不應該被引號包裹
    $sql = "INSERT INTO commodity (commodity_group_id, commodity_name, commodity_narrate, commodity_state, commodity_price, c_original_product_link) VALUES (3, '$commodity_name', '$commodity_narrate', '$commodity_state', '$commodity_price', '$commodity_link')";

    $result = mysqli_query($link, $sql);
    if ($result) {
        echo '<script>alert("新增成功!"); window.location.href = "InnerBuyer.php";</script>';
        exit(); 
    } else{
        echo '<script>alert("新增失敗"); window.location.href = "InnerBuyer.php";</script>'; 
    }
    
    mysqli_close($link);
}
?>