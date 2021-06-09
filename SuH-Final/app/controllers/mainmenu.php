<?php
class MainMenu extends Controller
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
        if (isset($_POST['logout-submit'])) {
            session_unset();
            session_destroy();
            header("Location:/public/home");
        } else {
            if (isset($_POST['lang'])) {
                $_SESSION['lang'] = $_POST['lang'];
                $this->view('mainmenu/index', array("lang" => $_POST['lang'], "translate" => $_SESSION['lang']));
            } else {
                $this->view('mainmenu/index', array("translate" => $_SESSION['lang']));
            }
        }
    }
}
