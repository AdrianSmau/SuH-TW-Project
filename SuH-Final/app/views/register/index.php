<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/public/css/Register.css" rel="stylesheet">
    <link href="/public/images/Favicon/favicon.ico" rel="icon" type="image/x-icon">
    <title>Register Page</title>
</head>

<body>
    <div class="pre-loader">
        <img src="/public/images/Loading-Gifs/ezgif-4-45b3fdafc22a.gif" alt="Loading...">
    </div>
    <div class="register-div">
        <div class="logo">
            <img src="/public/images/Login/avengers_logo_classic_round_sticker-rcf1f4016612145d897ee182a9650cf86_0ugmm_8byvr_704.jpg" alt="">
        </div>

        <div class="titlu">
            SIGN UP
        </div>

        <form class="form" action="/public/register" method="POST">
            <div class="names">
                <div class="first-name">
                    <img src="/public/images/Login/iron-man.png" alt="">
                    <input type="text" name="first-name" placeholder="First Name">
                </div>
                <div class="last-name">
                    <img src="/public/images/Login/iron-man.png" alt="">
                    <input type="text" name="last-name" placeholder="Last Name">
                </div>
            </div>
            <div class="mail">
                <img src="/public/images/Login/spiderman.png" alt="">
                <input type="email" name="email" placeholder="Mail">
            </div>
            <div class="username">
                <img src="/public/images/Login/superman.png" alt="">
                <input type="text" name="username" placeholder="Username">
            </div>

            <div class="password">
                <img src="/public/images/Login/Captain_America.png" alt="">
                <input type="password" name="password" placeholder="Password" data-type="password">
            </div>

            <div class="confirm-password">
                <img src="/public/images/Login/Captain_America.png" alt="">
                <input type="password" name="confirm-password" placeholder="Confirm Password" data-type="password">
            </div>
            <button class="register-button" type="submit" name="register-button">Register</button>
        </form>
    </div>
    <a href="/public/home">
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
    if (isset($data['message'])) {
        $jsNeeded = 1;
    }
    ?>
    <script type="text/javascript">
        var jsNeeded = '<?php echo $jsNeeded; ?>';
        if (jsNeeded == 1) {
            var message = '<?php echo $data['message']; ?>';
            var modal = document.getElementById("popup-modal");
            var msg = document.getElementById("popup-text");
            var symbol = document.getElementById("popup-symbol");

            symbol.style.color = "#ED1D24";
            symbol.innerText = 'Register Failed!';
            msg.innerText = message;
            modal.style.display = "block";

            var span = document.getElementsByClassName("close")[0];

            span.onclick = function() {
                modal.style.display = "none";
            }

            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        }
    </script>
    <script src="/public/scripts/preLoader.js"></script>
</body>

</html>