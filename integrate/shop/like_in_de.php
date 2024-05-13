<?php
    session_start();
    $method=$_GET["method"];
    $shop_id=$_GET["shop_id"];
    $page=$_GET["page"];
    $like=$_GET["like"];
    $commodity_group_id=$_GET["commodity_group_id"];
    $wish_id=$_GET["wish_id"];
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
        
    }elseif($method=="in" & $like=='group'){
        
        $sql_insert="insert into like_group(commodity_group_id,account,time)
            value('$commodity_group_id','{$_SESSION["account"]}',now())";
        mysqli_query($link, $sql_insert);

        header("refresh:0;url=$page.php?shop_id=$shop_id");
        
    }elseif($method=="de" & $like=='group'){
        
        $sql="DELETE FROM like_group WHERE commodity_group_id='$commodity_group_id' and account='{$_SESSION["account"]}'";
        mysqli_query($link, $sql);

        header("refresh:0;url=$page.php?shop_id=$shop_id");
        
    }elseif($method=="in" & $like=='wish'){
        
        $sql_insert="insert into like_wish(wish_id,account,time)
            value('$wish_id','{$_SESSION["account"]}',now())";
        mysqli_query($link, $sql_insert);

        echo '<script>window.history.go(-1);</script>';
        
    }elseif($method=="de" & $like=='wish'){
        
        $sql="DELETE FROM like_wish WHERE wish_id='$wish_id' and account='{$_SESSION["account"]}'";
        mysqli_query($link, $sql);

        echo '<script>window.history.go(-1);</script>';
        
    }
    else{
        // $social_id=$_GET['social_id'];
        // $page=$_GET['page'];
        
        // $sql="DELETE FROM social WHERE social_id = $social_id";
        // mysqli_query($link, $sql);
        
        // header("refresh:0;url=$page.php?shop_id={$_SESSION["user_shop_id"]}");
    }
?>