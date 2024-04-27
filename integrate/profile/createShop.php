<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $shop_name = $_POST["shop_name"];
    $shop_narrat = $_POST["shop_narrat"];

    if ($_FILES['shop_avatar']['error'] == UPLOAD_ERR_OK){

        $file = $_FILES['shop_avatar']['tmp_name'];
        $dest = '../files/' . $_FILES['shop_avator']['name'];

        // 檢查是否有一樣名字的檔案
        if (file_exists($dest)) {
            $i = 1;
            while (file_exists('../files/' . $_FILES['shop_avatar']['name'] . '_' . $i)) {
                $i++;
            }
            $dest = "../files/" . $_FILES['shop_avatar']['name'] . '_' . $i;
        }

        // 將檔案移至指定位置
        move_uploaded_file($file, $dest);
    }

    if ($_FILES['shop_bg']['error'] == UPLOAD_ERR_OK){

        $file = $_FILES['shop_bg']['tmp_name'];
        $destbg = '../files/' . $_FILES['shop_bg']['name'];

        // 檢查是否有一樣名字的檔案
        if (file_exists($dest)) {
            $i = 1;
            while (file_exists('../files/' . $_FILES['shop_bg']['name'] . '_' . $i)) {
                $i++;
            }
            $destbg = "../files/" . $_FILES['shop_avator']['name'] . '_' . $i;
        }

        // 將檔案移至指定位置
        move_uploaded_file($file, $destbg);
    }

    $link = mysqli_connect("localhost", "root", "12345678", "wishop");
    $sql_id = "SELECT MAX(shop_id) as max_id from shop";
    $result = mysqli_query($link, $sql_id);
    $row = mysqli_fetch_assoc($result);
    $shop_id = $row['max_id'] + 1;

    $sql = "insert into shop(shop_id, account,shop_name, shop_narrat, shop_avatar, shop_bg) 
            values ('$shop_id', '{$_SESSION["account"]}', '$shop_name', '$shop_narrat','$dest', '$destbg' )";


    if(mysqli_query($link, $sql)){
        echo'y';
        $_SESSION["user_shop_id"]=$shop_id;
    }else{
        echo $sql;
        echo'n';
    }
    
    header("refresh:0;url=../shop/shop.php?shop_id=$shop_id");
    ?>

</body>
</html>