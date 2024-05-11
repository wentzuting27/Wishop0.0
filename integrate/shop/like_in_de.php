<?php
    $method=$_GET["method"];
    $shop_id=$_GET["shop_id"];
    $page=$_GET["page"];
    $like=$_GET["like"];
    $link=mysqli_connect('localhost','root','12345678','wishop');
    

    if ($method=="in" & $like=='shop') {
        $sql_insert="insert into like_shop(shop_id,account,time)
            value('$shop_id','{$_SESSION["account"]}',now())";
        mysqli_query($link, $sql_insert);

        header("refresh:0;url=$page.php?shop_id=$shop_id");
        
    }elseif($method=="de" & $like=='shop'){
        
        $sql="DELETE FROM like_shop WHERE shop_id='$shop_id' and account='{$_SESSION["account"]}'";
        mysqli_query($link, $sql);
        header("refresh:0;url=$page.php?shop_id=$shop_id");
        
    }
    else{
        // $social_id=$_GET['social_id'];
        // $page=$_GET['page'];
        
        // $sql="DELETE FROM social WHERE social_id = $social_id";
        // mysqli_query($link, $sql);
        
        // header("refresh:0;url=$page.php?shop_id={$_SESSION["user_shop_id"]}");
    }
?>