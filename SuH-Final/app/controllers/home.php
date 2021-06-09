<?php
class Home extends Controller
{
    public function index()
    {
        //uncomment when importing question in DB
        //header("Location:../app/models/AddQuestions.php");
        //header("Location:../app/models/AddQuestionsFr.php");
        //header("Location:../app/models/AddQuestionsDe.php");
        $this->view('home/index');  
    }
}
