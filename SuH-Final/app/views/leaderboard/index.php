<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/public/css/Leaderboard.css" rel="stylesheet">
    <link href="/public/images/Favicon/favicon.ico" rel="icon" type="image/x-icon">
    <title>Leaderboard</title>
</head>

<body>
    <div class="pre-loader">
        <img src="/public/images/Loading-Gifs/ezgif-4-45b3fdafc22a.gif" alt="Loading...">
    </div>
    <header>
        <p><?php echo __('Leaderboard', $data['translate']); ?></p>
    </header>
    <div id="main" class="main">
        <?php
        $overallArr = array();
        $results = $data['results'];
        $currUser = $data['currUser'];
        $index = 1;
        for ($i = 0; $i < count($results); $i++) {
            $res = $results[$i];
            $currUsrName = $res['username'];
            $currScore = $res['score_stage1'] + $res['score_stage2'] + $res['score_stage3'] + $res['score_stage4'] + $res['score_stage5'] + $res['score_stage6'] + $res['score_stage7'];
            $currTime = $res['time_stage1'] + $res['time_stage2'] + $res['time_stage3'] + $res['time_stage4'] + $res['time_stage5'] + $res['time_stage6'] + $res['time_stage7'];
            $currLMDate = $res['last_modified'];
            if ($currUsrName == $currUser) {
                echo '<p id="personal-score"><b><i>' .  __('[YOU] Place', $data['translate']) .' #' . $index .' - '  . __('User', $data['translate']) .' `'  . $currUsrName . '` ' . '</i></b> -' .  __('with a Total Score of', $data['translate']).' `'  . $currScore . '`, ' . __('and a Total Time of', $data['translate']) .' `'. $currTime .'` ' .  __('second(s)! - last_modified at', $data['translate']).' ' . $currLMDate . '</p>';
            } else {
                echo '<p><b><i>' .  __('Place', $data['translate']) .' #' . $index .' - '  . __('User', $data['translate']) .' `'  . $currUsrName . '` ' . '</i></b> -' .  __('with a Total Score of', $data['translate']).' `'  . $currScore . '`, ' . __('and a Total Time of', $data['translate']) .' `'. $currTime .'` ' .  __('second(s)! - last_modified at', $data['translate']).' ' . $currLMDate . '</p>';
            }
            array_push($overallArr, $index, $currUsrName, $currScore, $currTime, $currLMDate);
            $index++;
        }
        ?>
    </div>
    <footer>
        <a href="/public/mainmenu">
            <div class="back-button grow">
                <img src="/public/images/Neon/Back.png" alt="Back to Main Menu">
            </div>
        </a>
        <p id="timestamp"><?php echo __('Last Modification', $data['translate']); ?>:</p>
        <form method="post" id="hiddenForm" action="/public/rssfeed" target="_blank">
            <div class="RSS-button">
                <img id="input_rss" src="/public/images/Leaderboard/RSS.png" width="45" alt="Generate RSS Feed" />
                <input type="hidden" name='input_rss' value="<?php echo htmlentities(serialize($overallArr)); ?>" />
            </div>
        </form>
    </footer>
    <script type="text/javascript">
        var rss = document.getElementById("input_rss");
        var hiddenform = document.getElementById("hiddenForm");

        rss.onclick = function() {
            hiddenform.submit();
        }
    </script>
    <script src="/public/scripts/preLoader.js"></script>
    <script src="/public/scripts/getLastModifDate.js"></script>
</body>

</html>