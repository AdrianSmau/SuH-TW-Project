<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/public/css/MainMenu.css" rel="stylesheet">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link href="/public/images/Favicon/favicon.ico" rel="icon" type="image/x-icon">
    <title>Main Menu</title>
</head>

<body>
    <div class="pre-loader">
        <img src="/public/images/Loading-Gifs/ezgif-4-45b3fdafc22a.gif" alt="Loading...">
    </div>
    <div class="logo-section">
        <img src="/public/images/Logo/imageedit_8_9012878573.png" style="width: 280px;" alt="Our Logo">
    </div>
    <div class="btn-section-wrapper">

        <div class="btn-section">
            <?php
            if ($_SESSION['adm'] == 1) {
                echo '<a href="/public/adminPage"><button name="admin-button">'  .__('ADMIN PAGE', $data['translate']) .'</button></a>';
            }
            ?>
            <a href="/public/gamemap"><button><?php echo __('PLAY', $data['translate']); ?></button></a>
            <a href="/public/training"><button><?php echo __('SOLO ADVENTURES', $data['translate']); ?></button></a>
            <button id="settings-btn"><?php echo __('SETTINGS', $data['translate']); ?></button>
            <div id="myModal" class="modal">
                <div class="modal-content">
                    <div class="language-div">
                        <h1><?php echo __('LANGUAGE', $data['translate']) . ':'; ?></h1>
                        <form class="limba" action="/public/mainmenu" method="POST">
                            <select name="lang">
                                <option value='ENGLISH'>English</option>
                                <option value='FRENCH'>Francais</option>
                                <option value='GERMAN'>Deutsche</option>
                            </select>
                            <button class="changeLang" type="submit">
                                <h1> <?php echo __('Change language', $data['translate']); ?> </h1>
                            </button>
                        </form>
                    </div>

                    <span class="close">&times;</span>
                </div>
            </div>
            <a href="/public/leaderboard"><button><?php echo __('LEADERBOARD', $data['translate']); ?></button></a>
        </div>

    </div>
    <button class="user-setings grow">
        <img id="account-settings-button" class="resize" src="/public/images/MainMenu/img-removebg-preview.png" />
    </button>
    <div id="myModal-acc" class="modal-acc">
        <div class="modal-content-acc">
            <div class="info">
                <h1><?php echo __('Account Info', $data['translate']); ?></h1>
            </div>
            <div class="fsr-info">
                <h1><?php echo __('FIRST NAME', $data['translate']) . ':'; ?></h1>
                <?php echo '<div>' . $_SESSION['fname'] . '</div>'; ?>
            </div>
            <div class="lsr-info">
                <h1><?php echo __('LAST NAME', $data['translate']) . ':'; ?></h1>
                <?php echo '<div>' . $_SESSION['lname'] . '</div>'; ?>
            </div>
            <div class="usr-info">
                <h1><?php echo __('USERNAME', $data['translate']) . ':'; ?></h1>
                <?php echo '<div>' . $_SESSION['usr'] . '</div>'; ?>
            </div>
            <div class="mail-info">
                <h1>Mail:</h1>
                <?php echo '<div>' . $_SESSION['mail'] . '</div>'; ?>
            </div>
            <a href="/public/changepassword" class="changepass">
                <button>
                    <h1><?php echo __('CHANGE PASSWORD', $data['translate']); ?></h1>
                </button>
            </a>
            <form class="log-out-form" method="post">
                <button class="log-out" type="submit" name="logout-submit">
                    <h1><?php echo __('LOG OUT', $data['translate']); ?></h1>
                </button>
            </form>
            <span class="close-acc">&times;</span>
        </div>
    </div>
    <div id="popup-modal">
        <div id="popup">
            <span id="popup-symbol" class="ion-checkmark-round"></span>
            <h1 id="popup-text"></h1>
            <a class="closePopup"><?php echo __('Close', $data['lang']); ?></a>
        </div>
    </div>
    <?php
    $jsNeeded = 0;
    if (isset($data['lang'])) {
        $jsNeeded = 1;
    }
    ?>
    <script type="text/javascript">
        var jsNeeded = '<?php echo $jsNeeded; ?>';
        if (jsNeeded == 1) {
            var lang = '<?php echo $data['lang']; ?>';

            var modal0 = document.getElementById("popup-modal");
            var msg0 = document.getElementById("popup-text");
            var symbol0 = document.getElementById("popup-symbol");

            symbol0.style.color = "#2dc937";
            if(lang==="ENGLISH"){
                symbol0.innerText = 'Language changed!';
                msg0.innerText = "Quiz language set to " + lang;
            }
            else if(lang==="FRENCH"){
                symbol0.innerText = 'La langue a changé!';
                msg0.innerText = "Langue du quiz définie sur Francais";
            }
            else if(lang==="GERMAN"){
                symbol0.innerText = 'Sprache geändert!';
                msg0.innerText = "Quizsprache eingestellt auf Deutsche";
            }
            modal0.style.display = "block";

            var span0 = document.getElementsByClassName("closePopup")[0];

            span0.onclick = function() {
                modal0.style.display = "none";
            }

            window.onclick = function(event) {
                if (event.target == modal0) {
                    modal0.style.display = "none";
                }
            }
        }
    </script>
    <script src="/public/scripts/settingsButton.js"></script>
    <script src="/public/scripts/accountSettingsButton.js"></script>
    <script src="/public/scripts/preLoader.js"></script>
</body>

</html>