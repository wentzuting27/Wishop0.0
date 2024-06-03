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
            // 編輯密碼
            mysqli_query($link, $update_sql);

            echo '<script>alert("密碼修改成功！"); window.history.go(-1);</script>';
            exit();
        } else {
            // 再次輸入的密碼與新密碼不相符
            echo '<script>alert("再次輸入的密碼與新密碼不相符，請檢查是否輸入錯誤！"); window.history.go(-1);</script>';
            exit();
        }
    } else {
        // 輸入的密碼不等於原本舊的密碼
        echo '<script>alert("原密碼輸入錯誤，請輸入正確密碼！"); window.history.go(-1);</script>';
        exit();
    }











    ?>
</body>

</html>