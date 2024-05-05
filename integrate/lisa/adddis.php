<?php
if(isset($_POST['submit'])) {
    $commodity_group_id = $_GET["commodity_group_id"];
    $ask_title = $_POST['ask_title'];
    $ask_narrate = $_POST['ask_narrate'];
    $account = $_SESSION["account"];
    // 取得目前的時間戳
    $timestamp = time();
    // 將時間戳格式化為日期時間字串
    $submit_time = date("Y-m-d H:i:s", $timestamp);
    $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');

    if (!$link) {
        die('Connection failed: ' . mysqli_connect_error());
    }

    // 插入問題到資料庫
    $sql = "INSERT INTO ask (commodity_group_id, account ,ask_time, ask_title, ask_narrate) 
            VALUES ('$commodity_group_id', '$account','$submit_time', '$ask_title', '$ask_narrate')";

    $result = mysqli_query($link, $sql);
    if ($result) {
        // 獲取新插入的問題的 ID
        $new_id = mysqli_insert_id($link);

        // 上傳並插入圖片到資料庫
        $upload_dir = "../files/";
        $upload_success = true; // 檢查是否所有檔案都成功上傳
        foreach ($_FILES['ask_photo']['tmp_name'] as $key => $file_tmp) {
            $file_name = $_FILES['ask_photo']['name'][$key];
            $dest = $upload_dir . $file_name;
            if (file_exists($dest)) {
                $i = 1;
                $info = pathinfo($file_name);
                $file_name = $info['filename'];
                $file_extension = $info['extension'];
                while (file_exists($upload_dir . $file_name . '_' . $i . '.' . $file_extension)) {
                    $i++;
                }
                $filename = $file_name . '_' . $i . '.' . $file_extension;
                $dest = $upload_dir . $filename;
            }
            if (!move_uploaded_file($file_tmp, $dest)) {
                $upload_success = false;
                break; // 如果有任何一個檔案上傳失敗，就中斷迴圈
            }
            $sql_insert = "INSERT INTO ask_photo (ask_id, ask_photo) VALUES ('$new_id', '$dest')";
            if (!mysqli_query($link, $sql_insert)) {
                $upload_success = false;
                break; // 如果有任何一個檔案上傳失敗，就中斷迴圈
            }
        }

        // 提示上傳成功或失敗並導向適當的頁面
        if ($upload_success) {
            echo '<script>alert("上傳成功!"); window.location.href = "InnerPage.php?commodity_group_id=' . $commodity_group_id . '";</script>';
            exit();
        } else {
            echo '<script>alert("上傳失敗"); window.location.href = "InnerPage.php?commodity_group_id=' . $commodity_group_id . '";</script>';
            exit();
        }
    } else {
        echo '<script>alert("上傳失敗"); window.location.href = "InnerPage.php?commodity_group_id=' . $commodity_group_id . '";</script>';
        exit();
    }
    
}mysqli_close($link);
?>


?>