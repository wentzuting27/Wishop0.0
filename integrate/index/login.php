<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WISHOP 登入</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <!-- 引入 Font Awesome 的 CSS 文件 -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">

</head>
<?php
    session_start();

    // Check if the user is already logged in, if yes then redirect him to welcome page
    if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
      header("Location: index.php");
      exit();
  }
  ?>


<style>
    body {
        font-family: 'Open Sans', sans-serif;
        width: 100%;
        height: 100vh;
        top: 0px;
        bottom: 0px;
        background-color: #B0A5C6;
        overflow: hidden;
    }

    .hidden {
        display: none;
    }

    .clear {
        clear: both;
    }

    .opacity-03 {
        opacity: 0.3;
    }

    a {
        text-decoration: none;
    }

    @keyframes rotate {
        0% {
            transform: translate(0, 0);
        }

        50% {
            transform: translate(0px, -50px);
        }

        100% {
            transform: translate(0px, 50px);
        }
    }

    div[id^=__lpform_] {
        display: none;
    }

    .wrapper {
        width: 750px;
        margin: 40px auto;
    }

    .modal-login,
    .modal-reset-password {
        background-color: #fff;
        width: 750px;
        height: 550px;
        border-radius: 10px;
        box-shadow: 3px 0px 5px 0px rgba(0, 0, 0, 0.57);
        position: relative;
        transition: 0.5s linear all;
    }

    .navigation {
        color: #E9C9D6;
        text-transform: uppercase;
        float: left;
        margin: 30px;
    }

    .navigation i {
        margin-right: 10px;
    }

    .navigation a {
        color: rgb(58, 58, 58);
        font-size: 15px;
        font-weight: bold;
    }

    .navigation a:hover {
        color: #B0A5C6;
    }

    .secondary {
        float: left;
        width: calc(750px - 500px);
        height: 80%;
        border-right: 2px solid #eee;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .secondary i {
        font-size: 100px;
        color: #B0A5C6;
        animation: rotate 10s infinite linear;
    }

    .primary {
        width: calc(750px - 300px);
        height: 80%;
        float: left;
        margin-left: 30px;
        display: flex;
        flex-direction: column;
    }

    .primary h1 {
        color: rgb(58, 58, 58);
        font-weight: bold;
        font-size: 30px;
        margin: 0px 0px 20px 0px;
        padding: 0;
    }

    label {
        margin: 20px 0px;
        font-weight: bold;
        text-transform: uppercase;
        color: rgb(58, 58, 58);
        font-size: 16px;
    }

    input {
        background: none;
        border: 1px solid #eee;
        border-radius: 5px;
        padding: 15px;
        width: 85%;
        outline: none;
        margin: 0;
        color: rgb(58, 58, 58);
        font-weight: bold;
        background-image: none !important;
        background-attachment: none !important;
    }

    .password-container {
        position: relative;
    }

    .password-container a {
        color: #E9C9D6;
        font-weight: bold;
        font-size: 15px;
        position: absolute;
        right: 50px;
        top: 12px;
    }

    .password-container a:hover {
        color: #B0A5C6;
    }

    button {
        color: rgb(58, 58, 58);
        background: #E9C9D6;
        outline: 0;
        border: none;
        border-radius: 5px;
        margin-top: 30px;
        height: 55px;
        font-weight: bold;
        font-size: 18px;
        margin-right: 35px;
        color: #373737;
        cursor: pointer;
    }

    button:hover {
        background-color: #B0A5C6;
        color: #fff;
    }

    .modal-reset-password {
        top: -480px;
        margin-left: 50px;
    }
</style>

<body>
    <div class="wrapper">
        <div class="modal-login">
            <div class="navigation">
                <a href="index.php"><i class="fas fa-arrow-left"></i>返回首頁</a>
            </div>
            <div class="clear"></div>

            <div class="secondary">
                <i class="fas fa-lock"></i>
            </div>
            <form action="login2.php" method="post">
                <div class="primary">
                    <h1>登入</h1>

                    <label>帳號</label>
                    <input type="text" name="account" placeholder="account" required>
                    <label>密碼</label>
                    <div class="password-container">
                        <input type="password" name="password" placeholder="Password" required data-forgot="Forgot?">
                    </div>
                    <br>
                    <div>
                        &nbsp;&nbsp;<a href="signup.php"><b>還沒註冊帳號？</b></a>
                    </div>

                    <button type="submit">確認</button>


                </div>
            </form>
        </div>
    </div>

    <div class="wrapper">
        <div class="modal-reset-password hidden">
            <div class="navigation">
                <a href="javascript:;"><i class="fas fa-arrow-left"></i>返回</a>
            </div>
            <div class="clear"></div>
            <div class="secondary">
                <i class="fas fa-question"></i>
            </div>
            <div class="primary">
                <h1>忘記密碼？</h1>
                <p>不用擔心，只需輸入您的電子郵件地址，我們將發送驗證信到您的信箱🙌</p>
                <label>電子信箱</label>
                <input type="email" name="email" placeholder="email@email.pt">
                <button type="submit">發送驗證碼</button>
            </div>
        </div>
    </div>






    <!-- 引入 jQuery 的 JavaScript 文件 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        var forgot = $('#forgot');
        var back = $('.navigation a');

        forgot.on('click', function () {
            $('.modal-reset-password').removeClass('hidden');
            $('.modal-login').addClass('opacity-03');
        });



        back.on('click', function () {
            $('.modal-reset-password').addClass('hidden');
            $('.modal-login').removeClass('opacity-03');
        });
    </script>
</body>

</html>