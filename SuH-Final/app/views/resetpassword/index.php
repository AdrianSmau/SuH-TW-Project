<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/public/css/Reset-Password.css" rel="stylesheet">
    <link href="/public/images/Favicon/favicon.ico" rel="icon" type="image/x-icon">
    <title>Reset-Password Page</title>
</head>

<body>
    <div class="pre-loader">
        <img src="/public/images/Loading-Gifs/ezgif-4-45b3fdafc22a.gif" alt="Loading...">
    </div>
    <div class="login-div">
        <div class="logo">
            <img src="/public/images/Login/avengers_logo_classic_round_sticker-rcf1f4016612145d897ee182a9650cf86_0ugmm_8byvr_704.jpg" alt="">
        </div>

        <div class="titlu">
            RESET YOUR PASSWORD
        </div>
        <form class="form" method="POST">
            <div class="email">
                <img src="/public/images/Login/superman.png" alt="">
                <input type="email" name="email" placeholder="Enter your email address">
            </div>
            <button class="reset-button" type="submit" name="reset-button">RECEIVE NEW PASSWORD BY EMAIL</button>
        </form>
    </div>
    <a href="/public/login" id="backbtn">
        <div class="back-button grow">
            <img src="/public/images/SoloAdv/BackButton.png" alt="Back to Main Menu">
        </div>
    </a>
    <div id="popup-modal">
        <div id="popup">
            <span id="popup-symbol" class="ion-checkmark-round"></span>
            <h1 id="popup-text"></h1>
            <a class="close">Close</a>
        </div>
    </div>

    <?php
    $jsNeeded = 0;
    if (isset($data["message"])) {
        $jsNeeded = 1;
    }
    ?>

    <script type="text/javascript">
        var jsNeeded = '<?php echo $jsNeeded ?>';
        if (jsNeeded == 1) {
            var success = 0;
            var error_check = '<?php echo $data['message'] ?>';
            if (error_check == "SUCCESS") {
                var success = 1;
                var succMsg = "Request sent! Check your e-mail! You may close this tab!";
            } else {
                var failMsg = "Something went wrong with your confirmation email!";
            }

            var modal = document.getElementById("popup-modal");
            var msg = document.getElementById("popup-text");
            var symbol = document.getElementById("popup-symbol");

            window.addEventListener("load", function() {
                if (success == 1) {
                    symbol.style.color = "#2dc937";
                    symbol.innerText = 'Success!';
                    msg.innerText = succMsg;
                    modal.style.display = "block";
                } else {
                    symbol.style.color = "#ED1D24";
                    symbol.innerText = 'Oops!';
                    msg.innerText = failMsg;
                    modal.style.display = "block";
                }
            });
            var span = document.getElementsByClassName("close")[0];

            span.onclick = function() {
                window.location.assign("/public/login");
            }

            window.onclick = function(event) {
                if (event.target == modal) {
                    window.location.assign("/public/login");
                }
            }
        }
    </script>


    <script src="/public/scripts/preLoader.js"></script>
</body>

</html>