<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>註冊帳號</title>
</head>
<?php session_start(); ?>
<body>

    <?php
    $account = $_POST['account'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $user_name = $_POST['user_name'];
    $telephone_number = $_POST['telephone_number'];
    
    
    if ($_FILES['user_avatar']['error'] == UPLOAD_ERR_OK){
        $file = $_FILES['user_avatar']['tmp_name'];
        $dest = '../files/' . $_FILES['user_avatar']['name'];

        //檢查是否有一樣的名字檔案
        if (file_exists($dest)){
            $i=1;
            while(file_exists('../files/' . $_FILES['user_avatar']['name'] . '_' . $i)) {

            }
            $dest = "../files/" . $_FILES['user_avatar']['name'] . '_' . $i;
        }

        //將檔案移至指定位置
        move_uploaded_file($file, $dest);
    }

   

    $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');
    $sql = "insert into account (account,password,email,user_name,telephone_number,user_avatar) values ('$account','$password','$email','$user_name','$telephone_number','$dest')";
    if(mysqli_query($link, $sql)) {
        ?>
        <script>
            alert('註冊成功');
            window.location.href = 'login.php'; // 使用 window.location.href 進行重定向
        </script>

        <?php
    } else {
        echo $sql;
        ?>
        <script>
            alert('註冊失敗');
            history.back();
        </script>

        <?php
    }


    ?>

</body>

</html>