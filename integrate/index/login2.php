<?php
    $account = $_POST["account"];
    $pass = $_POST["password"];


    // Processing form data when form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $link=mysqli_connect('localhost','root','12345678','wishop');
      $sql="SELECT * FROM account WHERE account = '$account'";
      $result=mysqli_query($link,$sql);


      while($row=mysqli_fetch_assoc($result))
      {
        $password=$row['password'];
        $user_name=$row['user_name'];
        $user_avatar=$row['user_avatar'];
      }

        if ($password == $pass) {
            session_start();
            // Store data in session variables
            $_SESSION["loggedin"] = true;
            $_SESSION["account"] = $account;
            $_SESSION["user_name"] = $user_name;
            $_SESSION["user_avatar"] = $user_avatar;
           
            // 使用 header 函數進行轉址
            header("Location: index.php");
            exit();
        } else {
            function_alert("帳號或密碼錯誤");
        }
    } else {
        function_alert("Something wrong");
    }


    // Close connection
    mysqli_close($link);


    function function_alert($message) {
        // Display the alert box  
        echo "<script>alert('$message');
        window.location.href='index.php';
        </script>";
        exit();
    }
?>