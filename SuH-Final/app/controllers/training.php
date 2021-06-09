<?php

class Training extends Controller
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
        $this->view('training/index', array("lang" => $_SESSION['lang'], "translate" => $_SESSION['lang']));
    }
}