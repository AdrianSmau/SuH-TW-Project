<?php
class AdminPage extends Controller{
    function __construct(){
        $this->startSession();
        if(!isset($_SESSION['id'])){
            header("Location:/public/home");
        }
    }
    public function index(){

        require '../app/models/Translate.php';
        if(isset($_POST['kick-button']))
        { 
            $data = array();
            $data = $_POST;
            $admin = $this->model('Admin');
            $message = $admin->kickPlayer($data);
            if ($message == "SUCCESS") {
                header("Location:/public/mainmenu");
            } else {
                $this->view('adminPage/index', array("message" => $message,"translate" => $_SESSION['lang']));
            }
        }
        else
        if(isset($_POST['promote-button']))
        { 
            $data = array();
            $data = $_POST;
            $message = $this->model('Admin')->makeAdmin($data);
            if ($message == "SUCCESS") {
                header("Location:/public/mainmenu");
            } else {
                $this->view('adminPage/index', array("message" => $message,"translate" => $_SESSION['lang']));
            }
        }
        else 
        if(isset($_POST['change-button']))
        { 
            $data = array();
            $data = $_POST;
            $message = $this->model('Admin')->changeQuestion($data);
            if ($message == "SUCCESS") {
                header("Location:/public/mainmenu");
            } else {
                $this->view('adminPage/index', array("message" => $message,"translate" => $_SESSION['lang']));
            }
        }
        else {
            $this->view('adminPage/index', array("translate" => $_SESSION['lang']));
        }
        
        
    }
}