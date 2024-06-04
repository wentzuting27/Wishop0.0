<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    session_start();
    $method = $_POST["method"];
    $report_id = $_POST["report_id"];
    $report_results = $_POST["report_results"];

    $link = mysqli_connect("localhost", "root", "12345678", "wishop");
    if ($method == "update") {
        $sql = "UPDATE report SET report_results='$report_results', review_time=NOW() WHERE report_id='$report_id'";
        if (mysqli_query($link, $sql)) {
            $sql2 = "SELECT commodity_group_id FROM report WHERE report_id='$report_id'";
            $result2 = mysqli_query($link, $sql2);
            $row2 = mysqli_fetch_assoc($result2);
            $commodity_group_id = $row2['commodity_group_id'];

            // 如果 report_results 是成功（1），同時更新commodity_group表的commodity_group_state = 4 (被檢舉成功)
            if ($report_results == 1) {
                $sql3 = "UPDATE commodity_group SET commodity_group_state = 4 WHERE commodity_group_id='$commodity_group_id'";
                mysqli_query($link, $sql3);
            }
            header("Location: rr_details.php?commodity_group_id=$commodity_group_id");
        } else {
            header("Location: rr_details.php?commodity_group_id=$commodity_group_id");
        }

    }
    ?>

</body>

</html>