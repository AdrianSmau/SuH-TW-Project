<?php
class GetProgress
{
    private $instance;

    public function __construct()
    {
        require_once 'DatabaseHandler.php';
        $this->instance = new DBManager();
    }

    public function getProgressByUsername($username)
    {
        $select = $this->instance->execSelect("select progress from score where username=?",[$username]);
        return $select[0]['progress'];
    }
}
