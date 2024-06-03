<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php session_start();
        $method = $_POST["method"];
        $account = $_POST["account"];
        $user_name = $_POST["user_name"];
        $email = $_POST["email"];

        $link = mysqli_connect("localhost", "root", "12345678", "wishop");
        if ($method == "update") {
            $sql = "update account set user_name='$user_name', email='$email'
            where account='{$_SESSION["account"]}'
            ";
            if (mysqli_query($link, $sql)) {
                header("refresh:0;url=Profile_settings.php");
                $_SESSION["user_name"]=$user_name;
            } else {
                header("refresh:0;url=Profile_settings.php");
            }

        }
        ?>
</body>
</html>