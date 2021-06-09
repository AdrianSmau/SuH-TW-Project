<?php
class Quiz extends Controller
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
        if (!isset($_POST['stage'])) {
            header("Location:/public/mainmenu");
        } else {
            require '../app/models/Translate.php';
            $id = $this->model('GetScoreTableId')->get($_SESSION['usr']); // intrucat, conform ClearDB, id-urile difera intre tabela Users si Score, obtinem id-ul userului curent din tabela 'Score' cu ajutorul username-ului pentru a-i putea manipula scorul
            $stageNum = $_POST['stage'];
            $difficultyLevel = $_POST['difficulty'];
            $lang = $_POST['lang'];

            $this->view('quiz/index', array("id" => $id, "stageNum" => $stageNum, "difficultyLevel" => $difficultyLevel, "lang" => $lang, "translate" => $_SESSION['lang']));
        }
    }
}
