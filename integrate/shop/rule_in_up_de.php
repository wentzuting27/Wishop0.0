<?php
    $method=$_POST['method'];
    $rule_type=$_POST['rule_type'];
    $shop_id=$_POST['shop_id'];
    $title=$_POST['title'];
    $narrate=$_POST['narrate'];
    $link=mysqli_connect('localhost','root','12345678','wishop');

    if($method=="up"){
        // if (!empty($_FILES['upload_file']['name'])) {
        //     取得檔案路徑
        //     $file_path = $o_file;
        //     刪除檔案
        //     if (file_exists($file_path)) {
        //         unlink($file_path);
        //     } 

        //     if ($_FILES['upload_file']['error'] == UPLOAD_ERR_OK){

        //         $file = $_FILES['upload_file']['tmp_name'];
        //         $dest = 'files/' . $_FILES['upload_file']['name'];
    
        //         將檔案移至指定位置
        //         move_uploaded_file($file, $dest);
        //     }
        // }else{
        //     $dest = $o_file;
        // }
        // $sql="update activitys set activity_name='$name',presenter='$presenter',organizer='$organizer',undertaker='$undertaker',contact_phone='$phonenum',email='$email'
        // ,registration_way='$apply',money='$money',content='$content',activity_theme='$theme',activity_type='$type'
        // ,registration_open='$eventDateTimeopen',registration_end='$eventDateTimeend',file='$dest'
        // where activity_id=$activity_id";
        // if(mysqli_query($link, $sql)){
        //     echo "<style> body{width: 100%;background: url(7.png) top right;background-size: cover;position: relative;}</style>";
        // }else{
        //     echo "<style> body{width: 100%;background: url(8.png) top right;background-size: cover;position: relative;}</style>";
        // }

        
        // header("refresh:0;url=created_ac_detail.php?activity_id=$activity_id");

    }elseif($method=="in"){

        $sql_insert="insert into shop_rule(shop_rule_id,shop_id,type,title,narrate)
        value('','$shop_id','$rule_type','$title','$narrate')";

        if(mysqli_query($link, $sql_insert)){
            echo "新增成功";
        }else{
            echo "新增失敗";
        }

        header("refresh:0;url=shop_rule.php?shop_id=$shop_id");
        
    }
    else{
        $shop_rule_id=$_GET['shop_rule_id'];
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