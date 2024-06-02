<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php


$link = mysqli_connect("localhost", "root", "12345678", "wishop");

$current_password = $_POST['current_password'];
$new_password = $_POST['new_password'];
$confirm_password = $_POST['confirm_password'];

$account = $_SESSION['account'];

$sql = "SELECT password FROM account WHERE account='$account'";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result);
$stored_password = $row['password'];

if ($current_password === $stored_password) {
    // 輸入的密碼是否等於原本舊的密碼
    if ($new_password === $confirm_password) {
        // 新密碼是否等於二次確認的密碼
        $update_sql = "UPDATE account SET password='$new_password' WHERE account='$account'";
        // 更新密碼
        mysqli_query($link, $update_sql);

        // 修改密码成功后，重定向到用户资料页面或其他页面
        // header("Location: Profile_settings.php");
        echo'修改成功';
    } else {
        // 新密码和确认密码不匹配，重定向回修改密码页面并显示错误消息
        // header("Location: Profile_settings.php?error=confirm_password_mismatch");
        echo'修改失敗';
    }
} else {
    // 当前密码不正确，重定向回修改密码页面并显示错误消息
    // header("Location: Profile_settings.php?error=current_password_invalid");
    echo'密碼錯誤';
}













        // $method = $_POST["method"];
        // $account = $_POST["account"];
        // $password = $_POST["password"];

        // $link = mysqli_connect("localhost", "root", "12345678", "wishop");
        // if ($method == "update") {
        //     $sql = "update account set password='$password'
        //     where account='{$_SESSION["account"]}'";
        //     if (mysqli_query($link, $sql)) {
        //         header("refresh:0;url=Profile_settings.php");
        //     } else {
        //         header("refresh:0;url=Profile_settings.php");
        //     }

        // } else {
        // }
        ?>
</body>
</html>