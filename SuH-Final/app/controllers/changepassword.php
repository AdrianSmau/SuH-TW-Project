<?php
class ChangePassword extends Controller
{
    public function index($selector = [], $validator = [])
    {
        if ($selector != [] && $validator != []) {
            if (isset($_POST['change-password-button'])) {
                $data = array();
                $data = $_POST;
                $user = $this->model('User');
                $message = $user->changePasswordFromEmail($data, $selector, $validator);
                if ($message == "SUCCESS") {
                    header("Location:/public/login/Password-Updated");
                } else {
                    $this->view('changepassword/index', array("isError" => 1, "message" => $message));
                }
            } else {
                $this->view('changepassword/index');
            }
        } else {
            $this->startSession();
            if (!isset($_SESSION['id'])) {
                header("Location:/public/home");
            }
            if (isset($_POST['change-password-button'])) {
                $data = array();
                $data = $_POST;
                $user = $this->model('User');
                $message = $user->changePasswordFromAccount($data, $_SESSION['usr']);
                if ($message == "SUCCESS") {
                    header("Location:/public/mainmenu");
                } else {

                    $this->view('changepassword/index', array("isError" => 1, "message" => $message));
                }
            } else {
                $this->view('changepassword/index');
            }
        }
    }
}
