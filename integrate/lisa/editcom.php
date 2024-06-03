<?php
    session_start();
    $commodity_group_id=$_GET["commodity_group_id"];
    $commodity_group_name=$_POST['commodity_group_name'];
    $commodity_narrate=$_POST['commodity_narrate'];
    
    $link=mysqli_connect('localhost','root','12345678','wishop');
    $sql_commodity_bg = "SELECT commodity_group_bg FROM commodity_group WHERE commodity_group_id='$commodity_group_id'";
    $result_commodity_bg = mysqli_query($link, $sql_commodity_bg);
    if (!empty($_FILES['commodity_group_bg']['name'])) {
    
        if ($_FILES['commodity_group_bg']['error'] == UPLOAD_ERR_OK) {
            $file = $_FILES['commodity_group_bg']['tmp_name'];
            $originalName = pathinfo($_FILES['commodity_group_bg']['name'], PATHINFO_FILENAME);
            $extension = pathinfo($_FILES['commodity_group_bg']['name'], PATHINFO_EXTENSION);
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
        if ($row_commodity_bg = mysqli_fetch_assoc($result_commodity_bg)) {
            $shop_bg_dest = $row_commodity_bg['commodity_group_bg'];
        }
    }
    $sql="UPDATE commodity_group 
    SET commodity_group_name='$commodity_group_name',commodity_group_bg='$shop_bg_dest',commodity_group_narrate='$commodity_narrate' 
    WHERE commodity_group_id='$commodity_group_id'";
    $result = mysqli_query($link, $sql);
    if ($result) {
        echo '<script>alert("更改成功!"); window.location.href = "InnerBuyer.php?commodity_group_id=' . $commodity_group_id . '";</script>';
    }
    else{
        echo '<script>alert("更改失敗!"); window.location.href = "InnerBuyer.php?commodity_group_id=' . $commodity_group_id . '";</script>';
    }

?>