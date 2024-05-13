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
        $commodity_state = $_POST['commodity_state'];
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
if (isset($_POST['up'])) {
    $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');

    if (!$link) {
        die('Connection failed: ' . mysqli_connect_error());
    }
    $commodity_id = $_POST['commodity_id'];
    $commodity_state = $_POST['commodity_state'];
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
    $commodity_state = $_POST['commodity_state'];
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
?>