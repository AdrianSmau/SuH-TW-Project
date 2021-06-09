<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/public/css/Change-Password.css" rel="stylesheet">
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
                        <input type="hidden" name="selector" value="<?php echo $selector; ?>">
                        <input type="hidden" name="validator" value="<?php echo $validator; ?>">
                        <img src="/public/images/Login/superman.png" alt="">
                        <input type="password" name="pwd" placeholder="Enter your new password">
                        <img src="/public/images/Login/superman.png" alt="">
                        <input type="password" name="pwd-repeat" placeholder="Repeat your new password">
                        <button class="reset-button" type="submit" name="change-password-button">RESET PASSWORD</button>
                    </div>


                </form>
    </div>
    <div id="popup-modal">
        <div id="popup">
            <span id="popup-symbol" class="ion-checkmark-round"></span>
            <h1 id="popup-text"></h1>
            <a class="close">Close</a>
        </div>
    </div>
    <?php
    $jsNeeded = 0;
    if (isset($data['isError'])) {
        $jsNeeded = 1;
    }
    ?>
    <script type="text/javascript">
        var jsNeeded = '<?php echo $jsNeeded; ?>';
        if (jsNeeded == 1) {
            var isError = '<?php echo $data['isError']; ?>';
            var message = '<?php echo $data['message']; ?>';

            var modal = document.getElementById("popup-modal");
            var msg = document.getElementById("popup-text");
            var symbol = document.getElementById("popup-symbol");

            if (isError == 1) {
                symbol.style.color = "#ED1D24";
                symbol.innerText = 'Update Password Failed!';
                msg.innerText = message;
                modal.style.display = "block";
            } else {
                symbol.style.color = "#2dc937";
                symbol.innerText = 'Update Successful!';
                msg.innerText = message;
                modal.style.display = "block";

            }
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