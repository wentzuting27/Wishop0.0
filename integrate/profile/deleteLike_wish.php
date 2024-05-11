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
            $wish_id = $_GET['wish_id'];
            $account = $_SESSION['account'];
            $link = mysqli_connect("localhost", "root", "12345678", "wishop");
            $sql = "DELETE FROM like_wish WHERE wish_id = '$wish_id' AND account = '$account'";
            if (mysqli_query($link, $sql)) {
                header("refresh:0;url=Wishlist.php");
            } else {
                header("refresh:0;url=Wishlist.php");
            }
            mysqli_close($link);
        ?>

</body>
</html>