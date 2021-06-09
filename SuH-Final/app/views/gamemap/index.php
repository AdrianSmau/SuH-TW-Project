<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/public/css/GameMap.css" rel="stylesheet">
    <link href="/public/images/Favicon/favicon.ico" rel="icon" type="image/x-icon">
    <title>Game Map</title>
</head>

<body>
    <div class="pre-loader">
        <img src="/public/images/Loading-Gifs/ezgif-4-45b3fdafc22a.gif" alt="Loading...">
    </div>
    <div id="difficultyModal" class="modal">
        <div class="modal-content">
            <div class="difficulty-div">
                <h1><?php echo __('Select Stage Difficulty:', $data['translate']); ?></h1>
                <form>
                    <select id="difficultySelector">
                        <option value='EASY'><?php echo __('Easy', $data['translate']); ?></option>
                        <option value='MEDIUM'><?php echo __('Medium', $data['translate']); ?></option>
                        <option value='HARD'><?php echo __('Hard', $data['translate']); ?></option>
                    </select>
                </form>
            </div>
            <div class="playBtn">
                <button id="playBtn"><?php echo __('PLAY', $data['translate']); ?></button>
            </div>
        </div>
        <span class="close">&times;</span>
    </div>
    <p class="welcome-text" id="playerName"> <?php echo __('Welcome', $data['translate']); ?>, [PLAYER_NAME]! <?php echo __('Please select the stage you want to play!', $data['translate']); ?> </p>
    <div class="wrapper-levels grow">
        <div id="level1" class="level1 locked">
            <img id="stage1" alt="Stage I" src="/public/images/Neon/black.jpg">
            <p class="level1-title"><?php echo __('Stage', $data['translate']); ?> I</p>
            <div class="tooltip1">
                <p class="status"></p>
                <p class="score"></p>
                <p class="time"></p>
            </div>
        </div>
        <div id="level2" class="level2 locked">
            <img id="stage2" alt="Stage II" src="/public/images/Neon/black.jpg">
            <p class="level2-title"><?php echo __('Stage', $data['translate']); ?> II</p>
            <div class="tooltip2">
                <p class="status"></p>
                <p class="score"></p>
                <p class="time"></p>
            </div>
        </div>
        <div id="level3" class="level3 locked">
            <img id="stage3" alt="Stage III" src="/public/images/Neon/black.jpg">
            <p class="level3-title"><?php echo __('Stage', $data['translate']); ?> III</p>
            <div class="tooltip3">
                <p class="status"></p>
                <p class="score"></p>
                <p class="time"></p>
            </div>
        </div>
        <div id="level4" class="level4 locked">
            <img id="stage4" alt="Stage IV" src="/public/images/Neon/black.jpg">
            <p class="level4-title"><?php echo __('Stage', $data['translate']); ?> IV</p>
            <div class="tooltip4">
                <p class="status"></p>
                <p class="score"></p>
                <p class="time"></p>
            </div>
        </div>
        <div id="level5" class="level5 locked">
            <img id="stage5" alt="Stage V" src="/public/images/Neon/black.jpg">
            <p class="level5-title"><?php echo __('Stage', $data['translate']); ?> V</p>
            <div class="tooltip5">
                <p class="status"></p>
                <p class="score"></p>
                <p class="time"></p>
            </div>
        </div>
        <div id="level6" class="level6 locked">
            <img id="stage6" alt="Stage VI" src="/public/images/Neon/black.jpg">
            <p class="level6-title"><?php echo __('Stage', $data['translate']); ?> VI</p>
            <div class="tooltip6">
                <p class="status"></p>
                <p class="score"></p>
                <p class="time"></p>
            </div>
        </div>
        <div id="level7" class="level7 locked">
            <img id="stage7" alt="Stage VII" src="/public/images/Neon/black.jpg">
            <p class="level7-title"><?php echo __('Stage', $data['translate']); ?> VII</p>
            <div class="tooltip7">
                <p class="status"></p>
                <p class="score"></p>
                <p class="time"></p>
            </div>
        </div>
    </div>
    <a href="/public/mainmenu">
        <div class="back-button grow">
            <img src="/public/images/Neon/Back.png" alt="Back to Main Menu">
        </div>
    </a>
    <div id="id-wrapper-progress-bar" class="wrapper-progress-bar">
        <p class="wrapper-progress-bar-text"><?php echo __('Progress Bar', $data['translate']); ?></p>
        <div id="id-progress-bar" class="progress-bar">
            <p id="progress-bar-text" class="progress-bar-text"></p>
        </div>
    </div>

    <div id="score-pannel" class="score-pannel">
        <p class="score-title">Progress</p>
        <p id="score-text" class="score-text">0/0</p>
    </div>

    <form method="post" id="hiddenForm" action="/public/quiz">
        <input type="hidden" name="stage" id="stageInput" value="DEFAULT">
        <input type="hidden" name="difficulty" id="difficultyInput" value="DEFAULT">
        <input type="hidden" name="lang" id="langInput" value="ENGLISH">
    </form>
    </div>

    <script type="text/javascript">
        var lang = document.getElementById("langInput");
        lang.value = '<?php echo $data['lang']; ?>';
        window.userId = '<?php echo $data['userId']; ?>';
        var userName = '<?php echo $data['userName']; ?>';
        var userProgress = '<?php echo $data['userProgress']; ?>';
        var playerName = document.getElementById("playerName");
        if(lang.value=="ENGLISH"){
            playerName.innerText = "Welcome, " + userName + "! Please select the stage you want to play!";
        }
        else if(lang.value=="FRENCH"){
            playerName.innerText = "Bienvenu, " + userName + "! Veuillez sélectionner la scène que vous souhaitez jouer!";
        }
        else{
            playerName.innerText = "Willkommen, " + userName + "! Bitte wählen Sie die Bühne aus, die Sie spielen möchten!";
        }

        var level1 = document.getElementById("level1");
        var level2 = document.getElementById("level2");
        var level3 = document.getElementById("level3");
        var level4 = document.getElementById("level4");
        var level5 = document.getElementById("level5");
        var level6 = document.getElementById("level6");
        var level7 = document.getElementById("level7");
        switch (userProgress) {
            case '0':
                level1.classList.remove('locked');
                level1.classList.add('unlocked');
                break;
            case '1':
                level1.classList.remove('locked');
                level1.classList.add('completed');
                level2.classList.remove('locked');
                level2.classList.add('unlocked');
                break;
            case '2':
                level1.classList.remove('locked');
                level1.classList.add('completed');
                level2.classList.remove('locked');
                level2.classList.add('completed');
                level3.classList.remove('locked');
                level3.classList.add('unlocked');
                break;
            case '3':
                level1.classList.remove('locked');
                level1.classList.add('completed');
                level2.classList.remove('locked');
                level2.classList.add('completed');
                level3.classList.remove('locked');
                level3.classList.add('completed');
                level4.classList.remove('locked');
                level4.classList.add('unlocked');
                break;
            case '4':
                level1.classList.remove('locked');
                level1.classList.add('completed');
                level2.classList.remove('locked');
                level2.classList.add('completed');
                level3.classList.remove('locked');
                level3.classList.add('completed');
                level4.classList.remove('locked');
                level4.classList.add('completed');
                level5.classList.remove('locked');
                level5.classList.add('unlocked');
                break;
            case '5':
                level1.classList.remove('locked');
                level1.classList.add('completed');
                level2.classList.remove('locked');
                level2.classList.add('completed');
                level3.classList.remove('locked');
                level3.classList.add('completed');
                level4.classList.remove('locked');
                level4.classList.add('completed');
                level5.classList.remove('locked');
                level5.classList.add('completed');
                level6.classList.remove('locked');
                level6.classList.add('unlocked');
                break;
            case '6':
                level1.classList.remove('locked');
                level1.classList.add('completed');
                level2.classList.remove('locked');
                level2.classList.add('completed');
                level3.classList.remove('locked');
                level3.classList.add('completed');
                level4.classList.remove('locked');
                level4.classList.add('completed');
                level5.classList.remove('locked');
                level5.classList.add('completed');
                level6.classList.remove('locked');
                level6.classList.add('completed');
                level7.classList.remove('locked');
                level7.classList.add('unlocked');
                break;
            case '7':
                level1.classList.remove('locked');
                level1.classList.add('completed');
                level2.classList.remove('locked');
                level2.classList.add('completed');
                level3.classList.remove('locked');
                level3.classList.add('completed');
                level4.classList.remove('locked');
                level4.classList.add('completed');
                level5.classList.remove('locked');
                level5.classList.add('completed');
                level6.classList.remove('locked');
                level6.classList.add('completed');
                level7.classList.remove('locked');
                level7.classList.add('completed');
                break;
        }
    </script>

    <!--Script for page preloader functionality-->
    <script src="/public/scripts/preLoader.js"></script>
    <!--Script for updating the images-->
    <script src="/public/scripts/initializeImages.js"></script>
    <!--Script for tooltip update-->
    <?php
    if ($data['translate'] == 'ENGLISH') {
        echo '<script src="/public/scripts/setTooltip.js"></script>';
    } else {
        if ($data['translate'] == 'FRENCH') {
            echo '<script src="/public/scripts/setTooltipFr.js"></script>';
        } else {
            echo '<script src="/public/scripts/setTooltipDe.js"></script>';
        }
    }
    ?>
    <!--Script for progress bar fill, by tying it with the score-->
    <script src="/public/scripts/incrementScore.js"></script>
    <!--Script for difficulty modal-->
    <script src="/public/scripts/difficultyPopUp.js"></script>
</body>

</html>