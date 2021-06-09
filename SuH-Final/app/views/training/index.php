<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/public/css/quiz.css" rel="stylesheet">
    <link href="/public/images/Favicon/favicon.ico" rel="icon" type="image/x-icon">
    <title>Training Page</title>
</head>

<body>
    <div class="pre-loader">
        <img src="/public/images/Loading-Gifs/ezgif-4-45b3fdafc22a.gif" alt="Loading...">
    </div>
    <div class="container">
        <div id="game" class="justify-center flex-column">
            <div id="hud">
                <div class="hud-item">
                    <p id="progressText" class="hud-prefix">
                        <?php echo __('Question', $data['translate']); ?>
                    </p>
                    <div id="progressBar">
                        <div id="progressBarFull"></div>
                    </div>
                </div>

                <div class="hud-item">
                    <p class="hud-prefix" id="hud-prefix">
                    <?php echo __('Score', $data['translate']); ?>
                    </p>
                    <h1 class="hud-main-text" id="score">
                        0
                    </h1>
                </div>

            </div>
            <h1 id="question"><?php echo __('What is the answer to this question?', $data['translate']); ?></h1>
            <div class="choice-container">
                <p class="choice-prefix">A</p>
                <p class="choice-text" data-number="1">Choice</p>

            </div>
            <div class="choice-container">
                <p class="choice-prefix">B</p>
                <p class="choice-text" data-number="2">Choice 2</p>

            </div>
            <div class="choice-container">
                <p class="choice-prefix">C</p>
                <p class="choice-text" data-number="3">Choice 3</p>

            </div>
            <div class="choice-container">
                <p class="choice-prefix">D</p>
                <p class="choice-text" data-number="4">Choice 4</p>

            </div>
        </div>
    </div>
    <a href="/public/mainmenu">
        <div class="back-button grow">
            <img src="/public/images/SoloAdv/BackButton.png" alt="Back to Main Menu">
        </div>
    </a>
    <?php
        $lang = $data['lang'];
    ?>
    <script type="text/javascript">
        window.lang = '<?php echo $lang; ?>';
    </script>
    <script src="/public/scripts/soloAdventures.js"></script>
    <script src="/public/scripts/preLoader.js"></script>
</body>

</html>