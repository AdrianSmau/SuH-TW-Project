<?php
class GetScoreTableId{
    private $instance;
    function __construct()
    {
        require_once 'DatabaseHandler.php';
        $this->instance = new DBManager();
    }
    function get($username){
        $select = $this->instance->execSelect("select idUser from score where username=?",[$username]);
        return $select[0]['idUser'];
    }
}