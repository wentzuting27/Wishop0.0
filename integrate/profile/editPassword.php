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
        $password = $_POST["password"];

        $link = mysqli_connect("localhost", "root", "12345678", "wishop");
        if ($method == "update") {
            $sql = "update account set password='$password'";
            if (mysqli_query($link, $sql)) {
                header("refresh:0;url=Profile_settings.php");
            } else {
                header("refresh:0;url=Profile_settings.php");
            }

        } else {
        }
        ?>
</body>
</html>