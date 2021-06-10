 <?php
 class ExportCSV
 {
     private $instance;
     public function __construct()
     {
         require_once 'DatabaseHandler.php';
         $this->instance = new DBManager();
     }
     public function export(){
        /*$select = $this->instance->execSelect("select * from score");
        $fp = fopen('/public/dataframes/score.csv', 'w');
        foreach ($select[0] as $val1) {
            fputcsv($fp, $val1);
        }
        //var_dump($select);
        fclose($fp);*/
    }
}


