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
        $telephone_number = $_POST["telephone_number"];
        $common_payment_account = $_POST["common_payment_account"];

        $link = mysqli_connect("localhost", "root", "12345678", "wishop");
        if ($method == "update") {
            $sql = "update account set telephone_number='$telephone_number', common_payment_account='$common_payment_account'
            where account='{$_SESSION["account"]}'";
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