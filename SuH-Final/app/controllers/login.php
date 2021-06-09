<?php
class Login extends Controller
{
    public function index($params=[])
    {  if($params!=[])
        {
            $this->view('login/index', array("isError" => 0, "message" => $params));
        }
        else if (isset($_POST['login-button'])) {
            $data = array();
            $data = $_POST;
            $user = $this->model('User');
            $message = $user->login($data);
            if ($message == "SUCCESS") {
                header("Location:/public/mainmenu");
            } else {
                $this->view('login/index', array("isError" => 1, "message" => $message));
            }
        } else {
            $this->view('login/index');
        }
    }
}
