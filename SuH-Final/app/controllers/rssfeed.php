<?php
class RSSFeed extends Controller
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
        $receivedArr = unserialize($_POST['input_rss']);
        $this->view('rssfeed/index', array("receivedArr" => $receivedArr));
    }
}
