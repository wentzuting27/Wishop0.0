<?php
if((isset($_POST['submit']))){
    $commodity_name=$_POST['commondity_name'];
    $commodity_narrate=$_POST['commodity_narrate'];
    $commodity_state=$_POST['commodity_state'];
    $commodity_price=$_POST['commodity_price'];
    $commodity_photo=$_POST['commodity_photo'];
    $link = mysqli_connect('localhost', 'root', '12345678', 'wishop');

    if (!$link) {
        die('Connection failed: ' . mysqli_connect_error());
    }
    $sql="INSERT INTO commondity(commondity_name, commodity_narrate ,commodity_state
    ,commodity_price ,commodity_photo) VALUES(?,?,?,?,?)";
    $stmt = mysqli_prepare($link, $sql);
    //可以防止 SQL 注入攻擊，因為它會將使用者輸入的數據與 SQL 陳述式進行分離，從而使得惡意使用者無法修改 SQL 陳述式的結構

    for($i=0 ; $i < count($commodity_name); $i++){
        if(!empty($commodity_name[$i]) && !empty($commodity_narrate[$i]) && !empty($commodity_state[$i])
        && !empty($commodity_price[$i]) && !empty($commodity_photo[$i])){
            mysqli_stmt_bind_param($stmt, "sssss", $id[$i], 
            $name[$i], $level[$i], $identity[$i], $password[$i]);
            mysqli_stmt_execute($stmt);
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($link);

    echo '<script>alert("新增成功!"); window.location.href = "InnerBuyer.php";</script>';
    exit();
}
?>