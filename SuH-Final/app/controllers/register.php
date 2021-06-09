<?php
class Register extends Controller
{
    public function index()
    {
        if (isset($_POST['register-button'])) {
            $data = array();
            $data = $_POST;
            $user = $this->model('User');
            $message = $user->register($data);
            if ($message == "SUCCESS") {
                header("Location:/public/login");
            } else {
                $this->view('register/index', array("message" => $message));
            }
        } else {
            $this->view('register/index');
        }
    }
}
