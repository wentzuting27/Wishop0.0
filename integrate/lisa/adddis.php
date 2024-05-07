<?php
if(isset($_POST['submit'])) {
    $commodity_group_id = $_GET["commodity_group_id"];
    $question_title = $_POST['question_title'];
    $question_narrate = $_POST['question_narrate'];
    $isChecked = isset($_POST['isChecked']) && $_POST['isChecked'] == '公開' ? 1 : 0;
    $account = $_SESSION["account"];
        // 取得目前的時$isChecked = $_POST['isChecked'];間戳
    $timestamp = time();
    // 將時間戳格式化為日期時間字串
    $submit_time = date("Y-m-d H:i:s", $timestamp);
    $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');

    if (!$link) {
        die('Connection failed: ' . mysqli_connect_error());
    }

    // 插入問題到資料庫
    $sql = "INSERT INTO question (commodity_group_id, account , question_title, question_narrate,`time`,`public`) 
            VALUES ('$commodity_group_id', '$account', '$question_title', '$question_narrate','$submit_time','$isChecked')";

    $result = mysqli_query($link, $sql);
    if ($result) {
        // 獲取新插入的問題的 ID
        $new_id = mysqli_insert_id($link);
        // 檢查是否有文件上傳
        if (($_FILES['question_photo']['error'] !== UPLOAD_ERR_NO_FILE)) {
            // 上傳並插入圖片到資料庫
            $upload_dir = "../files/";
            $upload_success = true; // 檢查是否所有檔案都成功上傳
            foreach ($_FILES['question_photo']['tmp_name'] as $key => $file_tmp) {
                $file_name = $_FILES['question_photo']['name'][$key];
                $dest = $upload_dir . $file_name;
                if (file_exists($dest)) {
                    $i = 1;
                    $info = pathinfo($file_name);
                    $file_name = $info['filename'];
                    if (isset($info['extension'])) {
                        $file_extension = $info['extension'];
                    } else {
                        // 如果没有扩展名，则设置默认扩展名，或者执行其他操作
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
                    break; // 如果有任何一個檔案上傳失敗，就中斷迴圈
                }
                $sql_insert = "INSERT INTO question_photo (question_id, question_photo_link) VALUES ('$new_id', '$dest')";
                if (!mysqli_query($link, $sql_insert)) {
                    $upload_success = false;
                    break; // 如果有任何一個檔案上傳失敗，就中斷迴圈
                }
            }
        } else {
            // 如果没有照片上传，设置上传成功为 false
            $upload_success = true;
        }
    
        // 提示上傳成功或失敗並導向適當的頁面
        if ($upload_success) {
            echo '<script>alert("上傳成功!"); window.location.href = "InnerPage.php?commodity_group_id=' . $commodity_group_id . '";</script>';
            exit();
        } else {
            echo '上傳失敗'.$isChecked.'';
            exit();
        }
    } else {
        echo '<script>alert("上傳失敗'.$isChecked.'"); window.location.href = "InnerPage.php?commodity_group_id=' . $commodity_group_id . '";</script>';
        exit();
    }
    
    
}mysqli_close($link);
?>
