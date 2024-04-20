<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<script src="https://kit.fontawesome.com/ca83b2e10a.js" crossorigin="anonymous"></script>
<style>
    * {
        box-sizing: border-box;
    }

    body {
        background-color: #B0A5C6;
    }

    /* body {
        background-image: linear-gradient(rgba(138, 138, 138, 0.5), rgba(73, 73, 73, 0.5)), 
        url('https://images.unsplash.com/photo-1516633886686-2a2ffb459273?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    } */


    #regForm {
        background-color: #fff;
        margin: 100px auto;
        font-family: Raleway;
        padding: 40px;
        width: 70%;
        max-width: 500px;
        min-width: 300px;
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
        /* 陰影效果 */
        border-radius: 10px;
        /* 圓角 */
    }



    /* Style 7
   ----------------------------- */
    h1 {
        text-align: center;
        font-size: 30px;
        font-weight: bold;
        /* 將字體粗體 */
        color: #434343;
        letter-spacing: 1px;
        text-transform: uppercase;

        display: grid;
        grid-template-columns: 1fr max-content 1fr;
        grid-template-rows: 27px 0;
        grid-gap: 20px;
        align-items: center;
    }

    h1:after,
    h1:before {
        content: " ";
        display: block;
        border-bottom: 1px solid #B0A5C6;
        border-top: 1px solid #B0A5C6;
        height: 5px;
        background-color: #fff;
    }




    h4 {
        color: #fff;
        position: relative;
        padding: 0.6em;
        background: #B0A5C6;
        border-radius: 5px;
    }

    h4:after {
        position: absolute;
        content: '';
        top: 100%;
        left: 30px;
        border: 15px solid transparent;
        border-top: 15px solid #B0A5C6;
        width: 0;
        height: 0;
    }



    /* === HEADING STYLE #3 === */
    h5 {
        font-size: 15px;
        font-weight: 500;
        letter-spacing: 0;
        line-height: 1.5em;
        padding-bottom: 15px;
        position: relative;
    }

    h5:before {
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        height: 5px;
        width: 55px;
        background-color: #111;
    }

    h5:after {
        content: "";
        position: absolute;
        left: 0;
        bottom: 2px;
        height: 1px;
        width: 95%;
        max-width: 255px;
        background-color: #333;
    }



    .box {
        background-color: #fff;
        /* 背景顏色 */
        border: 2px solid #fff;
        /* 邊框 */
        border-radius: 5px;
        /* 圓角 */
        padding: 20px;
        /* 內邊距 */
        margin-bottom: 10px;
    }



    input {
        background-color: #fff;
        padding: 10px;
        width: 100%;
        font-size: 17px;
        font-family: Raleway;
        border: none;
        /* 移除原有邊框 */
        border-bottom: 1px solid #aaaaaa;
        /* 初始底線顏色 */
        outline: none;
        /* 移除點擊時的藍色輪廓 */
    }

    input:focus {
        border-bottom: 1px solid #B0A5C6;
        /* 輸入時的底線顏色 */
    }



    /* Mark input boxes that gets an error on validation: */
    input.invalid {
        background-color: #fff;
    }

    /* Hide all steps by default: */
    .tab {
        display: none;
    }

    button {
        background-color: #B0A5C6;
        color: #ffffff;
        border: none;
        padding: 10px 20px;
        font-size: 17px;
        font-family: Raleway;
        cursor: pointer;
    }

    button:hover {
        opacity: 0.8;
    }

    #prevBtn {
        background-color: #bbbbbb;
    }

    /* Make circles that indicate the steps of the form: */
    .step {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbbbbb;
        border: none;
        border-radius: 50%;
        display: inline-block;
        opacity: 0.5;
    }

    .step.active {
        opacity: 1;
    }

    /* Mark the steps that are finished and valid: */
    .step.finish {
        background-color: #B0A5C6;
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

    <form id="regForm" action="/action_page.php">
        
        <h1>註冊</h1>
        <!-- One "tab" for each step in the form: -->
        <div class="tab">
            <h4>Step 1 . 設定</h4>
            <div class="box">
                <h5><i class="fa-solid fa-envelope fa-lg"></i>&nbsp;&nbsp;電子信箱</h5><input placeholder="電子信箱" oninput="this.className = ''" name="email"></p>
                <p>
                <h5><i class="fa-solid fa-lock fa-lg"></i>&nbsp;&nbsp;密碼</h5><input placeholder="密碼" oninput="this.className = ''" name="pword" type="password"></p>
            </div>
            <br>
        </div>

        <div class="tab">
            <h4>Step 2 . 基本資料</h4>
            <div class="box">
                <p>
                <h5><i class="fa-solid fa-user fa-lg"></i>&nbsp;&nbsp;用戶名稱</h5><input placeholder="用戶名稱" oninput="this.className = ''" name="nickname"></p>
                <p>
                <h5><i class="fa-solid fa-phone fa-lg"></i>&nbsp;&nbsp;電話</h5><input placeholder="電話" oninput="this.className = ''" name="phone"></p>
            </div>
            <br>
        </div>

        <div class="tab">
            <h4>Step 3 . 選擇您感興趣的主題</h4>
            <div class="box">
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
        </div>

        <div style="overflow:auto;">
            <div style="float:right;">
                <button type="button" id="prevBtn" onclick="nextPrev(-1)">上一步</button>
                <button type="button" id="nextBtn" onclick="nextPrev(1)">下一步</button>
            </div>
        </div>
        <!-- Circles which indicates the steps of the form: -->
        <div style="text-align:center;margin-top:40px;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
        </div>
    </form>

    <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
            // This function will display the specified tab of the form...
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            //... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "確認";
            } else {
                document.getElementById("nextBtn").innerHTML = "下一步";
            }
            //... and run a function that will display the correct step indicator:
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
            // Exit the function if any field in the current tab is invalid:
            if (n == 1 && !validateForm()) return false;
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form...
            if (currentTab >= x.length) {
                // ... the form gets submitted:
                document.getElementById("regForm").submit();
                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");
            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty...
                if (y[i].value == "") {
                    // add an "invalid" class to the field:
                    y[i].className += " invalid";
                    // and set the current valid status to false
                    valid = false;
                }
            }
            // If the valid status is true, mark the step as finished and valid:
            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid; // return the valid status
        }

        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //... and adds the "active" class on the current step:
            x[n].className += " active";
        }
    </script>

</body>

</html>