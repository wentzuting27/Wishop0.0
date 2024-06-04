<?php
if (isset($_POST['submit'])) {
    session_start();
    $commodity_group_id = $_GET["commodity_group_id"]; 
    $account = $_SESSION["account"];
    $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');

    if ($link->connect_error) {
        die("連接失敗: " . $link->connect_error);
    }

    $star = $_POST["rating"];
    echo $star;
    $order_id = $_POST["order_id"];
    $evaluate = $_POST["eva_narrate"];

    $sql = "INSERT INTO evaluate (order_id, evaluate, evaluate_time, star) VALUES ('$order_id', '$evaluate', NOW(), '$star')";
    $result = mysqli_query($link, $sql);
    echo $sql;

    if ($result) {
        $new_id = mysqli_insert_id($link);

        if (!empty($_FILES['evaluate_photo']['name'][0])) {
            $upload_dir = "../files/";
            $upload_success = true;

            foreach ($_FILES['evaluate_photo']['tmp_name'] as $key => $file_tmp) {
                $file_name = $_FILES['evaluate_photo']['name'][$key];
                $dest = $upload_dir . $file_name;

                if (file_exists($dest)) {
                    $i = 1;
                    $info = pathinfo($file_name);
                    $file_name = $info['filename'];
                    $file_extension = isset($info['extension']) ? $info['extension'] : '';

                    while (file_exists($upload_dir . $file_name . '_' . $i . '.' . $file_extension)) {
                        $i++;
                    }

                    $file_name = $file_name . '_' . $i . '.' . $file_extension;
                    $dest = $upload_dir . $file_name;
                }

                if (!move_uploaded_file($file_tmp, $dest)) {
                    $upload_success = false;
                    break;
                }

                $sql_insert = "INSERT INTO evaluate_photo (evaluate_id, evaluate_photo) VALUES ('$new_id', '$dest')";

                if (!mysqli_query($link, $sql_insert)) {
                    $upload_success = false;
                    break;
                }
            }
        } else {
            $upload_success = true;
        }

        if ($upload_success) {
            $order_state = "完成訂單";
            $sql2 = "UPDATE `order` SET order_state='$order_state' WHERE order_id='$order_id'";
            $result2 = mysqli_query($link, $sql2);

            if ($result2) {
                echo '<script>alert("評價成功！"); window.location.href = "InnerPage.php?commodity_group_id=' . $commodity_group_id . '";</script>';
                exit();
            }
            else{
                echo '<script>alert("評價失敗！"); window.location.href = "InnerPage.php?commodity_group_id=' . $commodity_group_id . '";</script>';
                exit();
            }
        }
    }

    
}

mysqli_close($link);
?>
