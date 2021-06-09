<?php

$receivedArr = $data['receivedArr'];
header("Content-Type: text/xml;charset=iso-8859-1");
$base_url = "http://super-heroes-web-game.herokuapp.com/public/rssfeed";
echo "<?xml version='1.0' encoding='UTF-8' ?>" . PHP_EOL;
echo "<rss version='2.0'>" . PHP_EOL;
echo "<channel>" . PHP_EOL;
echo "<title>SuperHerosWebGame Leaderboard | RSS</title>" . PHP_EOL;
echo "<link>http://super-heroes-web-game.herokuapp.com/public/leaderboard</link>" . PHP_EOL;
echo "<description>This RSS Feed gets you the RSS Feed of our Game Leaderboard!</description>" . PHP_EOL;
echo "<language>en-us</language>" . PHP_EOL;

for ($i = 0; $i < count($receivedArr) / 5; $i++) {
    $index = $receivedArr[5 * $i + 0];
    $userName = $receivedArr[5 * $i + 1];
    $userScore = $receivedArr[5 * $i + 2];
    $userTime = $receivedArr[5 * $i + 3];
    $lastModif = $receivedArr[5 * $i + 4];

    echo "<item>" . PHP_EOL;
    echo "<title> LeaderBoard Entry for Place #" . $index . "</title>" . PHP_EOL;
    echo "<guid>" . $index . "</guid>" . PHP_EOL;
    echo "<pubDate>" . $lastModif . "</pubDate>" . PHP_EOL;
    echo "<description> Place #" . $index . " - Player '" . $userName . "', with the Score of " . $userScore . ", with a Total Time of " . $userTime . ", with the Last Modification made at " . $lastModif . "</description>" . PHP_EOL;
    echo "<category>LeaderBoard Entry</category>" . PHP_EOL;
    echo "</item>" . PHP_EOL;
}
echo '</channel>' . PHP_EOL;
echo '</rss>' . PHP_EOL;
