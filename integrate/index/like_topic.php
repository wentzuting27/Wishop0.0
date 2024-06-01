<?php
    session_start();
    $method=$_GET["method"];
    $topic=$_GET["topic"];
    
    $link=mysqli_connect('localhost','root','12345678','wishop');
    

    if ($method=="in") {
        $sql_insert="insert into like_topic(topic,account)
            value('$topic','{$_SESSION["account"]}')";
        mysqli_query($link, $sql_insert);

        echo '<script>window.history.go(-1);</script>';
        
    }elseif($method=="de"){
        
        $sql="DELETE FROM like_topic WHERE topic='$topic' and account='{$_SESSION["account"]}'";
        mysqli_query($link, $sql);
        echo '<script>window.history.go(-1);</script>';
        
    }
?>