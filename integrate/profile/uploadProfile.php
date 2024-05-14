<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    session_start(); date_default_timezone_set('Asia/Taipei');

    if ($_FILES['user_avatar']['error'] == UPLOAD_ERR_OK){

        $file = $_FILES['user_avatar']['tmp_name'];
        $dest = '../files/' . $_FILES['user_avatar']['name'];

        // 檢查是否有一樣名字的檔案
        if (file_exists($dest)) {
            $i = 1;
            while (file_exists('../files/' . $_FILES['user_avatar']['name'] . '_' . $i)) {
                $i++;
            }
            $dest = "../files/" . $_FILES['user_avatar']['name'] . '_' . $i;
        }

        // 將檔案移至指定位置
        move_uploaded_file($file, $dest);
    }

    $method = $_POST["method"];
    $link = mysqli_connect("localhost", "root", "12345678", "wishop");

    if ($method == "update") {
        $sql = "update account set user_avatar='$dest' where account='{$_SESSION["account"]}'";
        if (mysqli_query($link, $sql)) {
            header("refresh:0;url=Profile_settings.php");
            $_SESSION["user_avatar"]=$dest;
        } else {
            header("refresh:0;url=Profile_settings.php");
        }

    } else {
    }
    ?>

</body>
</html>