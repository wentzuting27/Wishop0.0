<?php
    $method=$_POST['method'];
    $wish_id=$_POST['wish_id'];
    $shop_id=$_POST['shop_id'];
    $group_name=$_POST['group_name'];
    $nation=$_POST['nation'];
    $group_bg=$_POST['group_bg'];
    $commodity_group_narrate=$_POST['commodity_group_narrate'];
    $group_link=$_POST['group_link'];
    $bid_price=$_POST['bid_price'];
    $bid_people=$_POST['bid_people'];
    $link=mysqli_connect('localhost','root','12345678','wishop');
    // 取得檔案路徑
    $sql_select = "SELECT commodity_group_bg FROM commodity_group WHERE user_id='{$_SESSION['user_id']}'";
    $result_select = mysqli_query($link, $sql_select);

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

        
        // header("refresh:1;url=created_ac_detail.php?activity_id=$activity_id");

    }elseif($method=="in"){
        if ($_FILES['group_bg']['error'] == UPLOAD_ERR_OK){

            $file = $_FILES['group_bg']['tmp_name'];
            $dest = '../files/' . $_FILES['group_bg']['name'];

            // 檢查是否有一樣名字的檔案
            if (file_exists($dest)) {
                $i = 1;
                while (file_exists('../files/' . $_FILES['group_bg']['name'] . '_' . $i)) {
                    $i++;
                }
                $dest = "../files/" . $_FILES['group_bg']['name'] . '_' . $i;
            }

            // 將檔案移至指定位置
            move_uploaded_file($file, $dest);
        }
        $sql = "SELECT MAX(commodity_group_id) as max_id FROM commodity_group";
        $result = mysqli_query($link, $sql);
        $row = mysqli_fetch_assoc($result);
        // 計算新的 id
        $new_id = $row['max_id'] + 1;

        $sql_insert="insert into commodity_group(commodity_group_id,shop_id,commodity_group_name,commodity_group_narrate,commodity_group_bg,commodity_group_state,nation,cg_original_product_link)
        value('$new_id','{$_SESSION["user_shop_id"]}','$group_name','$commodity_group_narrate','$dest','3','$nation','$group_link')";
        
        
        $sql_insert_bid="insert into bid(wish_id,shop_id,commodity_group_id,bid_price,bid_people,bid_time)
        value('$wish_id','{$_SESSION["user_shop_id"]}','$new_id','$bid_price','$bid_people',NOW())";

        if(mysqli_query($link, $sql_insert) && mysqli_query($link, $sql_insert_bid)){
            header("refresh:1;url=wish-details.php?shop_id=$shop_id&wish_id=$wish_id");
        }else{
            echo "失敗";
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
        
        // header("refresh:1;url=currently_created.php");

    }
?>