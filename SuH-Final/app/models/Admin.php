<?php
class Admin
{
    private $instance;
    public function __construct()
    {
        require_once 'SessionHeader.php';
        require_once 'DatabaseHandler.php';
        $this->instance = new DBManager();
    }
    public function kickPlayer($data)
    {
        $kick_player = $data['kick-player'];
        if (empty($kick_player)) {
            return "Fill fields!";
        }
        if ($kick_player == $_SESSION['usr']) {
            return "You cannot kick yourself!";
        }
        $select = $this->instance->execSelect("select * from users where username=?", [$kick_player]);
        if ($select == false) {
            return "No existing user!";
        }
        $select = $this->instance->execDelete("delete from users where username=?", [$kick_player]);
        $select = $this->instance->execDelete("delete from score where username=?", [$kick_player]);
        return "SUCCESS";
    }
    public function makeAdmin($data)
    {
        $promote_player = $data['promote-player'];
        if (empty($promote_player)) {
            return "Fill fields!";
        }
        $select = $this->instance->execSelect("select * from users where username=?", [$promote_player]);
        if ($select == false) {
            return "No existing user!";
        } else {
            if ($select[0]['isAdmin'] == 1) {
                return "User already Admin!";
            }
        }

        $select = $this->instance->execUpdate("update users set isAdmin=1 where username=?", [$promote_player]);
        return "SUCCESS";
    }
    public function changeQuestion($data)
    {
        $idQ=$data['idQuestion'];
        $newQ=$data['newQuestion'];
        $a1=$data['answer1'];
        $a2=$data['answer2'];
        $a3=$data['answer3'];
        $a4=$data['answer4'];
        $correct_answer=$data['answerCorrect'];
        if(empty($idQ) || empty($newQ) || empty($a1) || empty($a2) || empty($a3) || empty($a4) || empty($correct_answer) )
        {
            return "Fill all fields!";
        }
        $select = $this->instance->execSelect("select * from intrebari where idQuestion=?", [$idQ]);
        if ($select == false) {
            return "No existing question!";
        }
        $select = $this->instance->execUpdate("update intrebari set question=?,answera=?,answerb=?,answerc=?,answerd=?,correct=? where idQuestion=?", [$newQ,$a1,$a2,$a3,$a4,$correct_answer,$idQ]);
        return "SUCCESS";

    }
}
