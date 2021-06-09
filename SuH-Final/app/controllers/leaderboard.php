<?php
class Leaderboard extends Controller
{
    function __construct()
    {
        $this->startSession();
        if (!isset($_SESSION['id'])) {
            header("Location:/public/home");
        }
    }
    public function index()
    {
        require '../app/models/Translate.php';
        $results = $this->model('GetLeaderboardInfo')->getInfo();
        $this->view('leaderboard/index', array("results" => $results, "currUser" => $_SESSION['usr'], "translate" => $_SESSION['lang']));
    }
}
