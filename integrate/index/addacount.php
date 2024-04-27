<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>註冊帳號</title>
</head>

<body>

    <?php
    $account = $_POST['account'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $user_name = $_POST['user_name'];
    $telephone_number = $_POST['telephone_number'];
    

   

    $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');
    $sql = "insert into account (account,password,email,user_name,telephone_number) values ('$account','$password','$email','$user_name','$telephone_number')";
    if(mysqli_query($link, $sql)) {
        ?>
        <script>
            alert('註冊成功');
            window.location.href = 'login.php'; // 使用 window.location.href 進行重定向
        </script>

        <?php
    } else {
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