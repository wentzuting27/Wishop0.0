<?php
session_start();
if(isset($_POST['submit'])) {
    $commodity_group_id = $_GET["commodity_group_id"];
    $question_id = $_POST['question_id'];
    $reply_narrate = $_POST['comment'];
    // 处理 isChecked 的逻辑
    $account = $_SESSION["account"];
    
    $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');

    if (!$link) {
        die('Connection failed: ' . mysqli_connect_error());
    }

    // 插入问题到数据库
    $sql = "INSERT INTO reply (question_id, account , reply_narrate, `reply_time`) 
            VALUES ('$question_id', '$account', '$reply_narrate', NOW())";

    $result = mysqli_query($link, $sql);
    if ($result) {
        // 获取新插入的问题的 ID
        $new_id = mysqli_insert_id($link);
        // 检查是否有文件上传
        if (!empty($_FILES['reply_photo']['name'][0])) {
            // 上传并插入图片到数据库
            $upload_dir = "../files/";
            $upload_success = true; // 检查是否所有文件都成功上传
            foreach ($_FILES['reply_photo']['tmp_name'] as $key => $file_tmp) {
                $file_name = $_FILES['reply_photo']['name'][$key];
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
                $sql_insert = "INSERT INTO reply_photo (reply_id, reply_photo) VALUES ('$new_id', '$dest')";
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
            echo'<script>alert("上傳成功"); window.location.href = "discussion.php?commodity_group_id=' . $commodity_group_id . '&question_id='.$question_id.'";</script>';
            exit();
        } else {
            echo'<script>alert("上傳失敗"); window.location.href = "discussion.php?commodity_group_id=' . $commodity_group_id . '&question_id='.$question_id.'";</script>';
            exit();
        }
    } 
    else {
        echo '<script>alert("上傳失敗！"); window.location.href = "discussion.php?commodity_group_id=' . $commodity_group_id . '&question_id='.$question_id.'";</script>';
        exit();
    }
}

if(isset($_POST['editreply'])) {
    $commodity_group_id = $_GET["commodity_group_id"];
    $question_id= $_POST['question_id'];
    $question_title = $_POST['question_title'];
    $question_narrate = $_POST['question_narrate'];
    $public = $_POST['public'];
    $account = $_SESSION["account"];
    
    $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');

    if (!$link) {
        die('Connection failed: ' . mysqli_connect_error());
    }

    // 插入问题到数据库
    $sql = "UPDATE question SET question_title='$question_title',question_narrate='$question_narrate',public='$public' WHERE question_id=$question_id";

    $result = mysqli_query($link, $sql);
    if ($result) {
        echo'<script>alert("更新成功"); window.location.href = "InnerPage.php?commodity_group_id=' . $commodity_group_id . '";</script>';
        exit();
    } 
    else {
        echo '<script>alert("更新失敗！"); window.location.href = "InnerPage.php?commodity_group_id=' . $commodity_group_id . '";</script>';
        exit();
    }
}

if(isset($_POST['delcom'])) {
    $commodity_group_id = $_GET["commodity_group_id"];
    $reply_id = $_POST["reply_id"];
    $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');

    if (!$link) {
        die('Connection failed: ' . mysqli_connect_error());
    }
    $sql = "DELETE FROM reply WHERE reply_id=$reply_id";

    $result = mysqli_query($link, $sql);
    if ($result) {
        echo'<script>alert("刪除成功"); window.location.href = "discussion.php?commodity_group_id=' . $commodity_group_id . '";</script>';
        exit();
    } 
    else {
        echo'<script>alert("刪除失敗"); window.location.href = "discussion.php?commodity_group_id=' . $commodity_group_id . '";</script>';
        exit();
    }
}
mysqli_close($link);
?>
