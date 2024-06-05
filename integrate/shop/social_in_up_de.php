<?php
    session_start();
    $method=$_POST['method'];
    $page=$_POST['page'];
    $social_type=$_POST['social_type'];
    
    
    $link=mysqli_connect('localhost','root','12345678','wishop');
    

    if ($method == "up") {
        foreach($_POST["social_id"] as $key => $id) {
            // 获取表单提交的社交名称和链接
            $social_name = $_POST["social_name"][$key];
            $social_link = $_POST["social_link"][$key];
            
            // 更新数据库中对应的社交链接
            $sql_up = "UPDATE social SET social_name='$social_name', social_link='$social_link' WHERE social_id=$id";
            // mysqli_query($link, $sql_up);
        }

        if (mysqli_query($link, $sql_up)) {
            echo '<script>alert("編輯成功!"); window.history.go(-1);</script>';
            exit(); 
        } else{
            echo '<script>alert("編輯失敗");  window.history.go(-1);</script>'; 
        }
        
        // header("refresh:0;url=$page.php?shop_id={$_SESSION["user_shop_id"]}");
        
    }elseif($method=="in"){
        
        $social_name=$_POST['social_name'];
        $social_link=$_POST['social_link'];
        $sql_insert="insert into social(shop_id,social_name,social_type,social_link)
            value('{$_SESSION["user_shop_id"]}','$social_name','$social_type','$social_link')";
        if (mysqli_query($link, $sql_insert)) {
            echo '<script>alert("新增成功!"); window.history.go(-1);</script>';
            exit(); 
        } else{
            echo '<script>alert("新增失敗");  window.history.go(-1);</script>'; 
        }

        // header("refresh:0;url=$page.php?shop_id={$_SESSION["user_shop_id"]}");
        
    }
    else{
        $social_id=$_GET['social_id'];
        $page=$_GET['page'];
        
        $sql="DELETE FROM social WHERE social_id = $social_id";
        // mysqli_query($link, $sql);

        if (mysqli_query($link, $sql)) {
            echo '<script>alert("刪除成功!"); window.history.go(-1);</script>';
            exit(); 
        } else{
            echo '<script>alert("刪除失敗");  window.history.go(-1);</script>'; 
        }
        
        // header("refresh:0;url=$page.php?shop_id={$_SESSION["user_shop_id"]}");
    }
?>