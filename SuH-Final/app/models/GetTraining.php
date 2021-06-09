<?php
class GetTraining
{
    public function get()
    {
        require_once "DatabaseHandler.php";
        $instance = new DBManager();
        $conn = $instance->getConn();

        $conn->set_charset("utf8");

        if ($_GET["lang"] == "ENGLISH")
            $sql = "SELECT question, answera, answerb, answerc, answerd, correct FROM intrebari";
        else {
            if ($_GET["lang"] == "FRENCH")
                $sql = "SELECT question, answera, answerb, answerc, answerd, correct FROM intrebariFr";
            else {
                if ($_GET["lang"] == "GERMAN")
                    $sql = "SELECT question, answera, answerb, answerc, answerd, correct FROM intrebariDe";
            }
        }

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $resultSet = $stmt->get_result();

        $rows = array();

        while ($r = $resultSet->fetch_assoc()) {
            $rows[] = $r;
        }

        echo json_encode($rows);
    }
}

$learning = new GetTraining();
$learning->get();
