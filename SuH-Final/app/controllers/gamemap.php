<?php
class GameMap extends Controller
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
        $id = $this->model('GetScoreTableId')->get($_SESSION['usr']);
        $userName = $_SESSION['usr'];
        $userProgress = $this->model('GetProgress')->getProgressByUsername($_SESSION['usr']);
        $lang = $_SESSION['lang'];
        $this->view('gamemap/index', array("userId" => $id, "userName" => $userName, "userProgress" => $userProgress, "lang" => $lang, "translate" => $_SESSION['lang']));
    }
}
