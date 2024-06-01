<?php
session_start();
if(isset($_POST['submit'])) {
    $commodity_group_id = $_GET["commodity_group_id"];
    $order_id = $_POST["order_id"];
    $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');

    if (!$link) {
        die('Connection failed: ' . mysqli_connect_error());
    }
    // 检查是否有文件上传
    if (!empty($_FILES['proof_photo']['name'][0])) {
        // 上传并插入图片到数据库
        $upload_dir = "../files/";
        $upload_success = true; // 检查是否所有文件都成功上传
        foreach ($_FILES['proof_photo']['tmp_name'] as $key => $file_tmp) {
            $file_name = $_FILES['proof_photo']['name'][$key];
            $dest = $upload_dir . $file_name;
            if (file_exists($dest)) {
                $i = 1;
                $info = pathinfo($file_name);
                $file_name = $info['filename'];
                if (isset($info['extension'])) {
                    $file_extension = $info['extension'];
                } else {
                    // 如果没有扩展名，则设置默认扩展名
                    $file_extension = ''; // 设置一个默认值
                }
                while (file_exists($upload_dir . $file_name . '_' . $i . '.' . $file_extension)) {
                    $i++;
                }
                $filename = $file_name . '_' . $i . '.' . $file_extension;
                $dest = $upload_dir . $filename;
            }
            if (!move_uploaded_file($file_tmp, $dest)) {
                $upload_success = false;
                break; // 如果有任何一个文件上传失败，就中断循环
            }
            $sql_insert = "INSERT INTO proof_of_purchase (order_id, proof_of_purchase_photo,proof_of_purchase_time) VALUES ('$order_id', '$dest',NOW())";
            if (!mysqli_query($link, $sql_insert)) {
                $upload_success = false;
                break; // 如果有任何一个文件上传失败，就中断循环
            }
        }
    } 
    else {
        // 如果没有照片上传，设置上传成功为 false
        $upload_success = true;
    }
    // 提示上传成功或失败并导向适当的页面
    if ($upload_success) {
        echo'<script>alert("上傳成功"); window.location.href = "InnerPage.php?commodity_group_id=' . $commodity_group_id . '";</script>';
        exit();
    } else {
        echo'<script>alert("上傳失敗"); window.location.href = "InnerPage.php?commodity_group_id=' . $commodity_group_id . '";</script>';
        exit();
    }

}
?>