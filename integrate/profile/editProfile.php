<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
        $method = $_POST["method"];
        $account = $_POST["account"];
        $user_name = $_POST["user_name"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        $link = mysqli_connect("localhost", "root", "12345678", "wishop");
        if ($method == "update") {
            $sql = "update account set user_name='$user_name', email='$email', password='$password'";
            if (mysqli_query($link, $sql)) {
                header("refresh:0;url=Profile_settings.php");
            } else {
                echo'編輯失敗';
            }

        } else {
        }
        ?>
</body>
</html>