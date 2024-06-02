<?php
    session_start();
    $method=$_POST['method'];
    $rule_type=$_POST['rule_type'];
    $shop_id=$_POST['shop_id'];
    $shop_rule_id=$_POST['shop_rule_id'];
    $title=$_POST['title'];
    $narrate=$_POST['narrate'];
    $link=mysqli_connect('localhost','root','12345678','wishop');

    if($method=="up"){
        
        $sql="update shop_rule set title='$title',narrate='$narrate'
        where shop_rule_id=$shop_rule_id";
        if (mysqli_query($link, $sql)) {
            echo '<script>alert("規則編輯成功!"); window.history.go(-1);</script>';
            exit(); 
        } else{
            echo '<script>alert("規則編輯失敗");  window.history.go(-1);</script>'; 
        }

    }elseif($method=="in"){

        $sql_insert="insert into shop_rule(shop_rule_id,shop_id,type,title,narrate)
        value('','$shop_id','$rule_type','$title','$narrate')";

        if (mysqli_query($link, $sql_insert)) {
            echo '<script>alert("規則新增成功!"); window.history.go(-1);</script>';
            exit(); 
        } else{
            echo '<script>alert("規則新增失敗");  window.history.go(-1);</script>'; 
        }

    }
    else{
        $shop_rule_id=$_GET['shop_rule_id'];
       
        $sql="DELETE FROM shop_rule WHERE shop_rule_id = $shop_rule_id";
        if (mysqli_query($link, $sql)) {
            echo '<script>alert("規則刪除成功!"); window.history.go(-1);</script>';
            exit(); 
        } else{
            echo '<script>alert("規則刪除失敗");  window.history.go(-1);</script>'; 
        }
    }
?>