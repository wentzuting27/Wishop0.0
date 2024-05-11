<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        session_start(); 
        if(isset($_GET['shop_id'])) {
            $shop_id = $_GET['shop_id'];
            $account = $_SESSION['account'];
            $link = mysqli_connect("localhost", "root", "12345678", "wishop");
            $sql = "DELETE FROM like_shop WHERE shop_id = '$shop_id' AND account = '$account'";
            if (mysqli_query($link, $sql)) {
                echo '刪除成功';
                echo $sql;
            } else {
                echo '刪除失敗';
            }
            mysqli_close($link);
        } else {
            echo '缺少必要参数 shop_id';
        }
        ?>

</body>
</html>