<?php
    session_start();
    $method=$_GET["method"];
    $page=$_GET["page"];
    $like=$_GET["like"];
    $wish_id=$_GET["wish_id"];
    $link=mysqli_connect('localhost','root','12345678','wishop');
    
    if($method=="in"){       
        $sql_insert="insert into like_wish(wish_id,account,time) value('$wish_id','{$_SESSION["account"]}',now())";
        mysqli_query($link, $sql_insert);
        if($like=='wish2'){
            header("refresh:0;url=$page.php?wish_id=$wish_id");
        }else{
            header("refresh:0;url=$page.php");      
        }
    }elseif($method=="de"){ 
        $sql="DELETE FROM like_wish WHERE wish_id='$wish_id' and account='{$_SESSION["account"]}'";
        mysqli_query($link, $sql);
        if($like=='wish2'){
            header("refresh:0;url=$page.php?wish_id=$wish_id");
        }else{
            header("refresh:0;url=$page.php");      
        } 
    }
?>