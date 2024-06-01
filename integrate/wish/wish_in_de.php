<?php
    session_start();
    $method=$_POST['method'];
    $wish_name=$_POST['wish_name'];
    $wish_narrat=$_POST['wish_narrat'];
    $end=$_POST['end'];
    $wish_link=$_POST['wish_link'];
    $wish_state=$_POST['wish_state'];

    echo $_POST["wish_topic"];

    $link=mysqli_connect('localhost','root','12345678','wishop');

    if($method=="in"){

        $sql = "SELECT MAX(wish_id) as max_id FROM wish";
        $result = mysqli_query($link, $sql);
        $row = mysqli_fetch_assoc($result);
        // 計算新的 id
        $new_id = $row['max_id'] + 1;
        $sql_wish="insert into wish(wish_id,account,wish_shop_id,wish_name,wish_narrat,wish_link,wish_start,wish_state,wish_end)
        value('$new_id','{$_SESSION["account"]}',NULL,'$wish_name','$wish_narrat','$wish_link',now(),'3','$end')";
        if(mysqli_query($link, $sql_wish)){
            header("refresh:0;url=wish.php?wish_id=$wish_id");
        }else{
            echo $sql_wish;
            echo "N";
        }
        

        if ($_FILES['wish_photo']['error'][0] == UPLOAD_ERR_OK){

            // Loop through each uploaded file
            foreach ($_FILES['wish_photo']['tmp_name'] as $key => $tmp_name) {
                // Handle each file individually
                $file = $_FILES['wish_photo']['tmp_name'][$key];
                $filename = $_FILES['wish_photo']['name'][$key];
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

                $sql_insert = "INSERT INTO wish_photo (wish_id, wish_photo_link) VALUES ('$new_id', '$dest')";
                if(mysqli_query($link, $sql_insert)){
                    header("refresh:0;url=wish.php?wish_id=$wish_id");
                }else{
                    echo "n";
                }
            }

        }
        
    }elseif($_GET["method"]=="刪除願望"){
        $wish_id=$_GET["wish_id"];
        $sql="update wish set wish_state=4
        where wish_id=$wish_id";
        if(mysqli_query($link, $sql)){
            header("refresh:0;url=wish.php");
        }else{
            echo "失敗";
        }
    }

    foreach($_POST["wish_topic"] as $rep) {
        $wish_topic = $rep;
        echo $wish_topic;
        $insertrep = "INSERT INTO wish_topic (wish_id,topic) values ('$new_id','$wish_topic')";
        if(mysqli_query($link, $insertrep)) {
        } else {
            echo'失敗';
        }

    }
?>