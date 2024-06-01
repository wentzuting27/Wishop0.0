<?php
    session_start();
    $method=$_POST["method"];
    $report_type=$_POST["report_type"];
    $commodity_group_id=$_POST["commodity_group_id"];
    $report_why=$_POST["report_why"];
    $wish_id=$_POST["wish_id"];
    $link=mysqli_connect('localhost','root','12345678','wishop');
    

    if ($method=="in") {
        $sql_insert="insert into report(account,commodity_group_id,report_type,report_why,report_time,report_results)
            value('{$_SESSION["account"]}','$commodity_group_id','$report_type','$report_why',now(),'3')";
        

        if (mysqli_query($link, $sql_insert)) {
            echo '<script>alert("已送出檢舉!"); window.history.go(-1);</script>';
            exit(); 
        } else{
            echo '<script>alert("檢舉送出失敗");  window.history.go(-1);</script>'; 
        }
        
    }
    else{
        // $social_id=$_POST['social_id'];
        // $page=$_POST['page'];
        
        // $sql="DELETE FROM social WHERE social_id = $social_id";
        // mysqli_query($link, $sql);
        
        // header("refresh:0;url=$page.php?shop_id={$_SESSION["user_shop_id"]}");
    }
?>