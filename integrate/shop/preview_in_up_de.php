<?php
    session_start();
    $method=$_POST['method'];
    $shop_id=$_POST['shop_id'];
    $preview_title=$_POST['preview_title'];
    $preview_narrate=$_POST['preview_narrate'];
    $link=mysqli_connect('localhost','root','12345678','wishop');

    if($method=="up"){
        

    }elseif($method=="in"){

        $sql = "SELECT MAX(preview_id) as max_id FROM preview";
        $result = mysqli_query($link, $sql);
        $row = mysqli_fetch_assoc($result);
        // 計算新的 id
        $new_id = $row['max_id'] + 1;
        $sql_preview="insert into preview(preview_id,shop_id,preview_title,preview_narrate,time)
        value('$new_id','$shop_id','$preview_title','$preview_narrate',now())";
        if(mysqli_query($link, $sql_preview)){
            echo '<script>alert("預告新增成功!"); window.history.go(-1);</script>';
        }else{
            echo '<script>alert("預告新增失敗!"); window.history.go(-1);</script>';
        }
        

        if ($_FILES['preview_photo_link']['error'][0] == UPLOAD_ERR_OK){

            // Loop through each uploaded file
            foreach ($_FILES['preview_photo_link']['tmp_name'] as $key => $tmp_name) {
                // Handle each file individually
                $file = $_FILES['preview_photo_link']['tmp_name'][$key];
                $filename = $_FILES['preview_photo_link']['name'][$key];
                $dest = '../files/' . $filename;

                // 檢查是否有一樣名字的檔案
                if (file_exists($dest)) {
                    $i = 1;
                    $info = pathinfo($filename);
                    $file_name = $info['filename'];
                    $file_extension = $info['extension'];
                    while (file_exists('../files/' . $file_name . '_' . $i . '.' . $file_extension)) {
                        $i++;
                    }
                    $filename = $file_name . '_' . $i . '.' . $file_extension;
                    $dest = "../files/" . $filename;
                }

                // 將檔案移至指定位置
                move_uploaded_file($file, $dest);

                $sql_insert = "INSERT INTO preview_photo (preview_id, preview_photo_link) VALUES ('$new_id', '$dest')";
                mysqli_query($link, $sql_insert);
            }

        }
        
    }else{

        $preview_id=$_GET['preview_id'];
        $shop_id=$_GET['shop_id'];
       
        $sql="DELETE FROM preview WHERE preview_id = $preview_id";
        // mysqli_query($link, $sql);
        
        if(mysqli_query($link, $sql)){
            echo '<script>alert("預告刪除成功!"); window.history.go(-2);</script>';
        }else{
            echo '<script>alert("預告刪除失敗!"); window.history.go(-2);</script>';
        }
        // header("refresh:0;url=shop_time.php?shop_id=$shop_id");

        
    }
?>