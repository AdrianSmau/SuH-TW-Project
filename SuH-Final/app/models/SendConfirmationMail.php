<?php
require '../../vendor/autoload.php';
require_once 'DatabaseHandler.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$instance = new DBManager();

$select = $instance->execSelect("select * from users where email=?", [$_GET["email"]]);
if ($select == false) {
    header("Location:/public/resetpassword/index/FAIL");
    exit();
}

$selector = bin2hex(random_bytes(8));
$token = random_bytes(32);
$url = "http://super-heroes-web-game.herokuapp.com/public/changepassword/index/" . $selector . "/" . bin2hex($token);
$expires = date("U") + 1800; //half an hour
$userEmail = $_GET["email"];
$instance->execDelete("delete from pwdReset where pwdResetEmail=? ", [$userEmail]); //deleting any previous tokens 
$hashedToken = password_hash($token, PASSWORD_DEFAULT);
$instance->execInsert("insert into pwdReset(pwdResetEmail,pwdResetSelector,pwdResetToken,pwdResetExpires) values (?,?,?,?)", [$userEmail, $selector, $hashedToken, $expires]);
$to = $userEmail;
$subject = "Reset your password for SuperHeroesWebGame";

$message = "<p> We received a Password Change Request for this e-mail adress. If you did not make the request, please ignore this mail!</p>";
$message .= "<p> The Reset link can be found below! <br> ";
$message .= '<a href="' . $url . '">' . $url . "</a></p>";
$message = wordwrap($message, 70, "\r\n");

//PHPMailer Object
$mail = new PHPMailer(true); //Argument true in constructor enables exceptions

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'superheroeswebgame@gmail.com';
$mail->Password = 'gramescuefrumos123';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

$mail->setFrom('superheroeswebgame@gmail.com', 'SuperHeroesWebGame Team');
$mail->addAddress($to);

$mail->isHTML(true);

$mail->Subject = $subject;
$mail->Body = $message;
$mail->AltBody = "We received a Password Change Request for this e-mail adress. If you did not make the request, please ignore this mail!. The Reset link can be found here: " . $url;

try {
    $mail->send();
    header("Location:/public/resetpassword/index/SUCCESS");
} catch (Exception $e) {
    header("Location:/public/resetpassword/index/FAIL");
}
