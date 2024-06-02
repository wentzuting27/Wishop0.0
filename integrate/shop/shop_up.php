<?php
    session_start(); date_default_timezone_set('Asia/Taipei');

    $shop_id = $_POST["shop_id"];
    $page = $_POST["page"];
    $shop_name = $_POST["shop_name"];
    $shop_narrat = $_POST["shop_narrat"];

    $link=mysqli_connect('localhost','root','12345678','wishop');
    // 取得檔案路徑
    $sql_shop_avatar = "SELECT shop_avatar FROM shop WHERE shop_id='$shop_id'";
    $result_shop_avatar = mysqli_query($link, $sql_shop_avatar);

    if (!empty($_FILES['shop_avatar']['name'])) {
    
        if ($_FILES['shop_avatar']['error'] == UPLOAD_ERR_OK) {
            $file = $_FILES['shop_avatar']['tmp_name'];
            $originalName = pathinfo($_FILES['shop_avatar']['name'], PATHINFO_FILENAME);
            $extension = pathinfo($_FILES['shop_avatar']['name'], PATHINFO_EXTENSION);
            $shop_avatar_dest = '../files/' . $originalName . '.' . $extension;
        
            // 檢查是否有一樣名字的檔案
            if (file_exists($shop_avatar_dest)) {
                $i = 1;
                while (file_exists('../files/' . $originalName . '_' . $i . '.' . $extension)) {
                    $i++;
                }
                $shop_avatar_dest = '../files/' . $originalName . '_' . $i . '.' . $extension;
            }
        
            // 將檔案移至指定位置
            move_uploaded_file($file, $shop_avatar_dest);
        }
    }else{
        if ($row = mysqli_fetch_assoc($result_shop_avatar)) {
            $shop_avatar_dest = $row['shop_avatar'];
        }
    }

    $sql_shop_bg = "SELECT shop_bg FROM shop WHERE shop_id='$shop_id'";
    $result_shop_bg = mysqli_query($link, $sql_shop_bg);

    if (!empty($_FILES['shop_bg']['name'])) {
    
        if ($_FILES['shop_bg']['error'] == UPLOAD_ERR_OK) {
            $file = $_FILES['shop_bg']['tmp_name'];
            $originalName = pathinfo($_FILES['shop_bg']['name'], PATHINFO_FILENAME);
            $extension = pathinfo($_FILES['shop_bg']['name'], PATHINFO_EXTENSION);
            $shop_bg_dest = '../files/' . $originalName . '.' . $extension;
        
            // 檢查是否有一樣名字的檔案
            if (file_exists($shop_bg_dest)) {
                $i = 1;
                while (file_exists('../files/' . $originalName . '_' . $i . '.' . $extension)) {
                    $i++;
                }
                $shop_bg_dest = '../files/' . $originalName . '_' . $i . '.' . $extension;
            }
        
            // 將檔案移至指定位置
            move_uploaded_file($file, $shop_bg_dest);
        }
    }else{
        if ($row_shop_bg = mysqli_fetch_assoc($result_shop_bg)) {
            $shop_bg_dest = $row_shop_bg['shop_bg'];
        }
    }

    $sql="update shop set shop_name='$shop_name',shop_avatar='$shop_avatar_dest',shop_narrat='$shop_narrat',shop_bg='$shop_bg_dest'
        where shop_id='$shop_id'";

    if (mysqli_query($link, $sql)) {
        echo '<script>alert("賣場資訊編輯成功!");window.location.href = "' . $page . '.php?shop_id=' . $shop_id . '";</script>';
        exit(); 
    } else{
        echo '<script>alert("賣場資訊編輯失敗"); window.location.href = "' . $page . '.php?shop_id=' . $shop_id . '";</script>'; 
    }
    
    
?>