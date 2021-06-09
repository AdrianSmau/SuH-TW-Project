<?php
class GetLeaderboardInfo{
    private $instance;
    function __construct()
    {
        require_once 'DatabaseHandler.php';
        $this->instance = new DBManager();
    }
    function getInfo(){
        return $this->instance->execSelect("select * from `score` order by (`score_stage1` + `score_stage2` + `score_stage3` + `score_stage4` + `score_stage5` + `score_stage6` + `score_stage7`) desc, (`time_stage1` + `time_stage2` + `time_stage3` + `time_stage4` + `time_stage5` + `time_stage6` + `time_stage7`) asc, `last_modified` asc");
    }
}