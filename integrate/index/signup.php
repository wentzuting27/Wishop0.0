<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>註冊</title>


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">

</head>


<style>
    * {
        margin: 0;
        padding: 0
    }

    html {
        height: 100%
    }

    p {
        color: grey
    }

    #heading {
        text-transform: uppercase;
        color: #B0A5C6;
        font-weight: normal
    }

    #msform {
        text-align: center;
        position: relative;
        margin-top: 20px
    }

    #msform fieldset {
        background: white;
        border: 0 none;
        border-radius: 0.5rem;
        box-sizing: border-box;
        width: 100%;
        margin: 0;
        padding-bottom: 20px;
        position: relative
    }

    .form-card {
        text-align: left
    }

    #msform fieldset:not(:first-of-type) {
        display: none
    }

    #msform input,
    #msform textarea {
        padding: 8px 15px 8px 15px;
        border: 1px solid #ccc;
        border-radius: 0px;
        margin-bottom: 25px;
        margin-top: 2px;
        width: 100%;
        box-sizing: border-box;
        font-family: montserrat;
        color: #2C3E50;
        background-color: #ECEFF1;
        font-size: 16px;
        letter-spacing: 1px
    }

    #msform input:focus,
    #msform textarea:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        border: 1px solid #B0A5C6;
        outline-width: 0
    }

    #msform .action-button {
        width: 100px;
        background: #B0A5C6;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 0px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px 0px 10px 5px;
        float: right
    }

    #msform .action-button:hover,
    #msform .action-button:focus {
        background-color: #b0a5c6bd
    }

    #msform .action-button-previous {
        width: 100px;
        background: #616161;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 0px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px 5px 10px 0px;
        float: right
    }

    #msform .action-button-previous:hover,
    #msform .action-button-previous:focus {
        background-color: #000000
    }

    .card {
        z-index: 0;
        border: none;
        position: relative
    }

    .fs-title {
        font-size: 25px;
        color: #B0A5C6;
        margin-bottom: 15px;
        font-weight: normal;
        text-align: left
    }

    .purple-text {
        color: #B0A5C6;
        font-weight: normal
    }

    .steps {
        font-size: 25px;
        color: gray;
        margin-bottom: 10px;
        font-weight: normal;
        text-align: right
    }

    .fieldlabels {
        color: gray;
        text-align: left
    }

    #progressbar {
        margin-bottom: 30px;
        overflow: hidden;
        color: lightgrey
    }

    #progressbar .active {
        color: #B0A5C6
    }

    #progressbar li {
        list-style-type: none;
        font-size: 15px;
        width: 25%;
        float: left;
        position: relative;
        font-weight: 400
    }

    #progressbar #account:before {
        font-family: FontAwesome;
        content: "\f13e"
    }

    #progressbar #personal:before {
        font-family: FontAwesome;
        content: "\f007"
    }

    #progressbar #payment:before {
        font-family: FontAwesome;
        content: "\f030"
    }

    #progressbar #confirm:before {
        font-family: FontAwesome;
        content: "\f00c"
    }

    #progressbar li:before {
        width: 50px;
        height: 50px;
        line-height: 45px;
        display: block;
        font-size: 20px;
        color: #ffffff;
        background: lightgray;
        border-radius: 50%;
        margin: 0 auto 10px auto;
        padding: 2px
    }

    #progressbar li:after {
        content: '';
        width: 100%;
        height: 2px;
        background: lightgray;
        position: absolute;
        left: 0;
        top: 25px;
        z-index: -1
    }

    #progressbar li.active:before,
    #progressbar li.active:after {
        background: #B0A5C6
    }

    .progress {
        height: 20px
    }

    .progress-bar {
        background-color: #B0A5C6
    }

    .fit-image {
        width: 100%;
        object-fit: cover
    }

    /* 隱藏原始的 checkbox */
    input[type="checkbox"] {
        display: none;
    }

    /* 自定義 checkbox 的樣式 */
    input[type="checkbox"]+label {
        display: inline-block;
        padding: 10px 20px;
        margin: 5px;
        border: 2px solid #B0A5C6;
        border-radius: 5px;
        cursor: pointer;
    }

    /* 當 checkbox 被選中時改變其樣式 */
    input[type="checkbox"]:checked+label {
        background-color: #B0A5C6;
        color: #fff;
        border-color: #B0A5C6;
    }
</style>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-11 col-sm-10 col-md-10 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                    <h2 id="heading"><b>註冊帳號</b></h2>
                    <form id="msform">
                        <!-- progressbar -->
                        <ul id="progressbar">
                            <li class="active" id="account"><strong>基本資料</strong></li>
                            <li id="personal"><strong>興趣</strong></li>
                            <li id="payment"><strong>頭貼</strong></li>
                            <li id="confirm"><strong>完成</strong></li>
                        </ul>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div> <br> <!-- fieldsets -->
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">帳號資訊：</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 1 </h2>
                                    </div>
                                </div>

                                <label class="fieldlabels">用戶帳號</label>
                                <input type="text" name="account" placeholder="account" />

                                <label class="fieldlabels">密碼</label>
                                <input type="password" name="pwd" placeholder="Password" />

                                <label class="fieldlabels">電子信箱</label>
                                <input type="email" name="email" placeholder="Email" />


                            </div>
                            <input type="button" name="next" class="next action-button" value="下一步" />
                        </fieldset>

                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title"><b>您對那些內容感興趣？</b></h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 2 </h2>
                                    </div>

                                </div>


                                <style>

                                </style>


                                <input type="checkbox" id="vehicle1" name="vehicle1" value="clothes">
                                <label for="vehicle1"> 服飾</label>
                                <input type="checkbox" id="vehicle2" name="vehicle2" value="makeup">
                                <label for="vehicle2"> 美妝</label>
                                <input type="checkbox" id="vehicle3" name="vehicle3" value="anime">
                                <label for="vehicle3"> 動漫</label>

                                <input type="checkbox" id="vehicle4" name="vehicle4" value="stars">
                                <label for="vehicle4"> 明星</label>
                                <input type="checkbox" id="vehicle5" name="vehicle5" value="daily">
                                <label for="vehicle5"> 日常</label>
                                <input type="checkbox" id="vehicle6" name="vehicle6" value="digital">
                                <label for="vehicle6">數位3C</label>

                                <input type="checkbox" id="vehicle7" name="vehicle7" value="food">
                                <label for="vehicle7"> 美食</label>
                                <input type="checkbox" id="vehicle8" name="vehicle8" value="sport">
                                <label for="vehicle8"> 運動</label>
                                <input type="checkbox" id="vehicle9" name="vehicle9" value="expensive">
                                <label for="vehicle9"> 精品</label>


                            </div>

                            <input type="button" name="next" class="next action-button" value="下一步" />
                            <input type="button" name="previous" class="previous action-button-previous" value="上一步" />

                        </fieldset>


                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">選擇頭貼</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 3 </h2>
                                    </div>
                                </div>

                                <input type="file" name="pic" accept="image/*">


                            </div>

                            <input type="button" name="next" class="next action-button" value="下一步" />
                            <input type="button" name="previous" class="previous action-button-previous" value="上一步" />
                        </fieldset>


                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Finish:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 4</h2>
                                    </div>
                                </div> <br><br>
                                <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2> <br>
                                <div class="row justify-content-center">
                                    <div class="col-3"> <img src="https://www.freestock.com/450/freestock_558836203.jpg" class="fit-image">
                                    </div>
                                </div> <br><br>
                                <div class="row justify-content-center">
                                    <div class="col-7 text-center">
                                        <h5 class="purple-text text-center"><b>帳號註冊成功！</b></h5>
                                        <a href="login.html"><b>返回登入</b></a>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>



                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {

            var current_fs, next_fs, previous_fs; //fieldsets
            var opacity;
            var current = 1;
            var steps = $("fieldset").length;

            setProgressBar(current);

            $(".next").click(function () {

                current_fs = $(this).parent();
                next_fs = $(this).parent().next();

                //Add Class Active
                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                //show the next fieldset
                next_fs.show();
                //hide the current fieldset with style
                current_fs.animate({ opacity: 0 }, {
                    step: function (now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        next_fs.css({ 'opacity': opacity });
                    },
                    duration: 500
                });
                setProgressBar(++current);
            });

            $(".previous").click(function () {

                current_fs = $(this).parent();
                previous_fs = $(this).parent().prev();

                //Remove class active
                $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

                //show the previous fieldset
                previous_fs.show();

                //hide the current fieldset with style
                current_fs.animate({ opacity: 0 }, {
                    step: function (now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        previous_fs.css({ 'opacity': opacity });
                    },
                    duration: 500
                });
                setProgressBar(--current);
            });

            function setProgressBar(curStep) {
                var percent = parseFloat(100 / steps) * curStep;
                percent = percent.toFixed();
                $(".progress-bar")
                    .css("width", percent + "%")
            }

            $(".submit").click(function () {
                return false;
            })

        });
    </script>






</body>


</html>