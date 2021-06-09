<?php
class ResetPassword extends Controller
{
    public function index($message = [])
    {
        if ($message != []) {
            $this->view('resetpassword/index', array("message" => $message));
        }
        if (isset($_POST['reset-button'])) {
            header("Location:../../app/models/SendConfirmationMail.php?email=" . $_POST["email"]);
        } else {
            $this->view('resetpassword/index');
        }
    }
}
