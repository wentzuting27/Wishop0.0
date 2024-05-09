<?php
    $method=$_POST['method'];
    $page=$_POST['page'];
    $social_type=$_POST['social_type'];
    
    
    $link=mysqli_connect('localhost','root','12345678','wishop');
    

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $method = $_POST["method"]; // 获取method变量的值
        echo "Method: " . $method; // 调试输出method的值
    
        if ($method == "up") { // 如果是进行更新操作
            echo "进入更新操作"; // 调试输出，确认是否进入更新操作
    
            foreach($_POST["social_id"] as $key => $id) {
                // 获取表单提交的社交名称和链接
                $social_name = $_POST["social_name"][$key];
                $social_link = $_POST["social_link"][$key];
                
                // 更新数据库中对应的社交链接
                $sql_up = "UPDATE social SET social_name='$social_name', social_link='$social_link' WHERE social_id=$id";
                mysqli_query($link, $sql_up);
            }
        }
        if($page=="shop"){
            header("refresh:0;url=shop.php?shop_id={$_SESSION["user_shop_id"]}");
        }else{
            header("refresh:0;url=shop_time.php?shop_id={$_SESSION["user_shop_id"]}");
        }
    }elseif($method=="in"){
        
        $social_name=$_POST['social_name'];
        $social_link=$_POST['social_link'];
        $sql_insert="insert into social(shop_id,social_name,social_type,social_link)
            value('{$_SESSION["user_shop_id"]}','$social_name','$social_type','$social_link')";
        if(mysqli_query($link, $sql_insert)){
            echo "新增成功";
        }else{
            echo "新增失敗";
        }

        if($page=="shop"){
            header("refresh:0;url=shop.php?shop_id={$_SESSION["user_shop_id"]}");
        }else{
            header("refresh:0;url=shop_time.php?shop_id={$_SESSION["user_shop_id"]}");
        }
        
    }
    else{
        // $activity_id=$_GET['activity_id'];
        // $o_file=$_GET['o_file'];
        // // 取得檔案路徑
        // $file_path = $o_file;

        // // 刪除檔案
        // if (file_exists($file_path)) {
        //     unlink($file_path);
        // }
        // $sql="DELETE FROM activitys WHERE activity_id = $activity_id";
        // if(mysqli_query($link, $sql)){
        //     echo "<style> body{width: 100%;background: url(7.png) top right;background-size: cover;position: relative;}</style>";
        // }else{
        //     echo "<style> body{width: 100%;background: url(8.png) top right;background-size: cover;position: relative;}</style>";
        // }
        
        // header("refresh:0;url=currently_created.php");

    }
?>