<?php
session_start();
if (isset($_POST['submit'])) {
    $commodity_group_id = $_GET["commodity_group_id"];
    $commodity_name = $_POST['commodity_name'];
    $commodity_narrate = $_POST['commodity_narrate'];
    $commodity_state = $_POST['commodity_state'];
    $commodity_price = $_POST['commodity_price'];
    $commodity_link = $_POST['commodity_link'];

    $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');

    if (!$link) {
        die('Connection failed: ' . mysqli_connect_error());
    }

    $sql = "INSERT INTO commodity (commodity_group_id, commodity_name, commodity_narrate, commodity_state, commodity_price, c_original_product_link) VALUES ('$commodity_group_id', '$commodity_name', '$commodity_narrate', '$commodity_state', '$commodity_price', '$commodity_link')";

    $result = mysqli_query($link, $sql);
    if ($result) {
        $new_id = mysqli_insert_id($link); // 獲取剛剛插入商品的ID
        // 進行圖片上傳及相關資料庫操作
        $upload_dir = "../files/"; // 設置上傳檔案的目錄，注意這裡的路徑
        foreach ($_FILES['commodity_photo']['tmp_name'] as $key => $file_tmp) {
            $file_name = $_FILES['commodity_photo']['name'][$key];

            // 檢查是否有相同名字的檔案
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

            // 將檔案移至指定位置
            move_uploaded_file($file_tmp, $dest);

            // 插入檔案路徑到資料庫
            $sql_insert = "INSERT INTO commodity_photo (commodity_id, commodity_photo) VALUES ('$new_id', '$dest')";
            if (mysqli_query($link, $sql_insert)) {
                echo "y";
            } else {
                echo "n";
            }
        }
        echo '<script>alert("新增成功!"); window.location.href = "InnerBuyer.php?commodity_group_id=' . $commodity_group_id . '";</script>';
        exit();
    } else {
        echo '<script>alert("新增失敗"); window.location.href = "InnerBuyer.php?commodity_group_id=' . $commodity_group_id . '";</script>';
    }
    mysqli_close($link); // 關閉資料庫連接
}
    if (isset($_POST['del'])) {
        $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');

        if (!$link) {
            die('Connection failed: ' . mysqli_connect_error());
        }
        $commodity_id = $_POST['commodity_id'];
        $commodity_group_id = $_GET["commodity_group_id"];
        $sql = "UPDATE commodity SET commodity_state=3 WHERE commodity_id='$commodity_id'";


        $result = mysqli_query($link, $sql);

        if ($result) {
            echo '<script>alert("已下架!"); window.location.href = "InnerBuyer.php?commodity_group_id=' . $commodity_group_id . '";</script>';
            exit();
        } else {
            echo '<script>alert("失敗!"); window.location.href = "InnerBuyer.php?commodity_group_id=' . $commodity_group_id . '";</script>';
        }
    

    mysqli_close($link); // 關閉資料庫連接
}
if (isset($_POST['dels'])) {
    $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');

    if (!$link) {
        die('Connection failed: ' . mysqli_connect_error());
    }
    $commodity_id = $_POST['commodity_id'];
    $commodity_group_id = $_GET["commodity_group_id"];
    $sql = "DELETE FROM commodity WHERE commodity_id='$commodity_id'";
    $sql2 = "SELECT * FROM order_details WHERE commodity_id='$commodity_id'";
    $result2 = mysqli_query($link, $sql2);
if(mysqli_num_rows($result2)==0){
    $result = mysqli_query($link, $sql);

    if ($result) {
        echo '<script>alert("已刪除!"); window.location.href = "InnerBuyer.php?commodity_group_id=' . $commodity_group_id . '";</script>';
        exit();
    } else {
        echo '<script>alert("失敗!"); window.location.href = "InnerBuyer.php?commodity_group_id=' . $commodity_group_id . '";</script>';
    }
}
else {
    echo '<script>alert("該商品還在交易進行!"); window.location.href = "InnerBuyer.php?commodity_group_id=' . $commodity_group_id . '";</script>';
}

mysqli_close($link); // 關閉資料庫連接
}
if (isset($_POST['up'])) {
    $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');

    if (!$link) {
        die('Connection failed: ' . mysqli_connect_error());
    }
    $commodity_id = $_POST['commodity_id'];
    $commodity_group_id = $_GET["commodity_group_id"];
    $sql = "UPDATE commodity SET commodity_state=1 WHERE commodity_id='$commodity_id'";


    $result = mysqli_query($link, $sql);

    if ($result) {
        echo '<script>alert("已上架!"); window.location.href = "InnerBuyer.php?commodity_group_id=' . $commodity_group_id . '";</script>';
        exit();
    } else {
        echo '<script>alert("失敗!"); window.location.href = "InnerBuyer.php?commodity_group_id=' . $commodity_group_id . '";</script>';
    }


mysqli_close($link); // 關閉資料庫連接
}
if (isset($_POST['up2'])) {
    $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');

    if (!$link) {
        die('Connection failed: ' . mysqli_connect_error());
    }
    $commodity_id = $_POST['commodity_id'];
    $commodity_group_id = $_GET["commodity_group_id"];
    $sql = "UPDATE commodity SET commodity_state=2 WHERE commodity_id='$commodity_id'";


    $result = mysqli_query($link, $sql);

    if ($result) {
        echo '<script>alert("已移至待上架區!"); window.location.href = "InnerBuyer.php?commodity_group_id=' . $commodity_group_id . '";</script>';
        exit();
    } else {
        echo '<script>alert("失敗!"); window.location.href = "InnerBuyer.php?commodity_group_id=' . $commodity_group_id . '";</script>';
    }


mysqli_close($link); // 關閉資料庫連接
}
if (isset($_POST['edit'])){
    $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');

    if (!$link) {
        die('Connection failed: ' . mysqli_connect_error());
    }
    $commodity_group_id = $_GET["commodity_group_id"];
    $commodity_id = $_POST['commodity_id'];
    $commodity_name = $_POST['commodity_name'];
    $commodity_narrate = $_POST['commodity_narrate'];
    $commodity_price = $_POST['commodity_price'];
    $commodity_link = $_POST['commodity_link'];

    $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');

    if (!$link) {
        die('Connection failed: ' . mysqli_connect_error());
    }

    $sql = "UPDATE commodity SET 
    commodity_name = '$commodity_name', 
    commodity_narrate = '$commodity_narrate', 
    commodity_price = '$commodity_price', 
    c_original_product_link = '$commodity_link'
WHERE commodity_id = '$commodity_id'";

    $result = mysqli_query($link, $sql);
    if ($result) {
        $new_id = mysqli_insert_id($link); // 獲取剛剛插入商品的ID
        // 進行圖片上傳及相關資料庫操作
        $upload_dir = "../files/"; // 設置上傳檔案的目錄，注意這裡的路徑
        if (!empty($_FILES['commodity_photo']['name'][0])) {
            $sql_del = "DELETE FROM commodity_photo WHERE commodity_id=$commodity_id";
            $result2 = mysqli_query($link, $sql_del);
            if($result2){
            // 上传并插入图片到数据库
            $upload_dir = "../files/";
            $upload_success = true; // 检查是否所有文件都成功上传
            foreach ($_FILES['commodity_photo']['tmp_name'] as $key => $file_tmp) {
                $file_name = $_FILES['commodity_photo']['name'][$key];
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
                $sql_insert = "INSERT INTO commodity_photo (commodity_id, commodity_photo) VALUES ('$commodity_id', '$dest')";
                if (!mysqli_query($link, $sql_insert)) {
                    $upload_success = false;
                    break; // 如果有任何一个文件上传失败，就中断循环
                }
            }
        } 
        else {
            echo'<script>alert("更新失敗"); window.location.href = "InnerBuyer.php?commodity_group_id=' . $commodity_group_id . '";</script>';
            exit();
        }
    }
        else {
            $upload_success = true;
        }
        // 提示上传成功或失败并导向适当的页面
        if ($upload_success) {
            echo'<script>alert("更新成功"); window.location.href = "InnerBuyer.php?commodity_group_id=' . $commodity_group_id . '";</script>';
            exit();
        } else {
            echo'<script>alert("更新失敗"); window.location.href = "InnerBuyer.php?commodity_group_id=' . $commodity_group_id . '";</script>';
            exit();
        }
}
    else {
        echo '<script>alert("更新失敗！"); window.location.href = "InnerBuyer.php?commodity_group_id=' . $commodity_group_id . '";</script>';
        exit();
    }
     
}// 關閉資料庫連接
mysqli_close($link);
?>