<?php
//Header to this only when reimporting the questions
require_once 'DatabaseHandler.php';

$instance = new DBManager();
$conn = $instance->getConn();
//mysql_query("SET NAMES 'utf8'");
//mysql_set_charset($link.'utf8');
mysqli_set_charset( $conn, 'utf8' );
//mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'", $conn);
ini_set("auto_detect_line_endings", true);
$row = 1;
/*DC START */
if (($handle = fopen("../../public/dataframes/dc-wikia-data.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        $row++;
        /*Stage 1 - 1 */
        if(strpos($data[1],"Batman (Bruce Wayne)") !==false )
        {
            $stage_game=1;
            $question_game="Wie heißt Batman mit echtem Namen?";
            $firstAns="Carter Hall";
            $secAns="Bruce Wayne";
            $trdAns="Rachel Roth";
            $fthAns="Barry Allen";
            $coorect_answer=2;
            $id=1;
            $sql="INSERT INTO intrebariDe(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
            $stmt=mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)){
                echo "Sql error";
            }
            else{
                mysqli_stmt_bind_param($stmt,"iisssssi",$stage_game,$id,$question_game,$firstAns,$secAns,$trdAns,$fthAns, $coorect_answer); 
                mysqli_stmt_execute($stmt);
            }
        }

        /*Stage 2 - 1 */
        else if(strpos($data[1],"Superman (Clark Kent)")!==false)
        {
            $stage_game=2;
            $question_game="Wann ist Superman zum ersten Mal aufgetreten?";
            $firstAns=$data[12];
            $secAns="1987";
            $trdAns="1960";
            $fthAns="1973";
            $coorect_answer=1;
            $id=2;
            $sql="INSERT INTO intrebariDe(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
            $stmt=mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)){
                echo "Sql error";
            }
            else{
                mysqli_stmt_bind_param($stmt,"iisssssi",$stage_game,$id,$question_game,$firstAns,$secAns,$trdAns,$fthAns, $coorect_answer); 
                mysqli_stmt_execute($stmt);
            }
        }

        /*Stage 3 - 1 */
        else if(strpos($data[1],"Green Lantern (Hal Jordan)")!==false)
        {
            $stage_game=3;
            $question_game="Welche Augenfarbe hat Green Lantern?";
            $firstAns="Grüne Augen";
            $secAns="Blaue Augen";
            $trdAns="Lila Augen";
            $fthAns= "Braune Augen";
            $coorect_answer=4;
            $id=3;
            $sql="INSERT INTO intrebariDe(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
            $stmt=mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)){
                echo "Sql error";
            }
            else{
                mysqli_stmt_bind_param($stmt,"iisssssi",$stage_game,$id,$question_game,$firstAns,$secAns,$trdAns,$fthAns, $coorect_answer); 
                mysqli_stmt_execute($stmt);
            }
        }

        /*Stage 4 - 1 */
        else if(strpos($data[1],"Aquaman (Arthur Curry)")!==false)
        {
            $stage_game=4;
            $question_game="Welche Haarfarbe hat Aquaman?";
            $firstAns="Schwarzes Haar";
            $secAns="Blondes Haar";
            $trdAns="Braune Haare";
            $fthAns="Rote Haare";
            $coorect_answer=2;
            $id=4;
            $sql="INSERT INTO intrebariDe(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
            $stmt=mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)){
                echo "Sql error";
            }
            else{
                mysqli_stmt_bind_param($stmt,"iisssssi",$stage_game,$id,$question_game,$firstAns,$secAns,$trdAns,$fthAns, $coorect_answer); 
                mysqli_stmt_execute($stmt);
            }
        }

        /*Stage 5 - 1 */
        else if(strpos($data[1],"Flash (Barry Allen)")!==false)
        {
            $stage_game=5;
            $question_game="In welcher Charakterkategorie finden wir Flash?";
            $firstAns="Nicht Bekannt";
            $secAns="Lebende Charaktere";
            $trdAns="Verstorbene Charaktere";
            $fthAns="Unsterbliche Charaktere";
            $coorect_answer=2;
            $id=5;
            $sql="INSERT INTO intrebariDe(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
            $stmt=mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)){
                echo "Sql error";
            }
            else{
                mysqli_stmt_bind_param($stmt,"iisssssi",$stage_game,$id,$question_game,$firstAns,$secAns,$trdAns,$fthAns, $coorect_answer); 
                mysqli_stmt_execute($stmt);
            }
        }

        /*Stage 6 - 1 */
        else if(strpos($data[1],"Damian Wayne (Prime Earth)")!==false)
        {
            $stage_game=6;
            $question_game="Wie heißt der Superheld von Damian Wayne?";
            $firstAns="Robin";
            $secAns="Hulk";
            $trdAns="Spider-Man";
            $fthAns="Joker";
            $coorect_answer=1;
            $id=6;
            $sql="INSERT INTO intrebariDe(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
            $stmt=mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)){
                echo "Sql error";
            }
            else{
                mysqli_stmt_bind_param($stmt,"iisssssi",$stage_game,$id,$question_game,$firstAns,$secAns,$trdAns,$fthAns, $coorect_answer); 
                mysqli_stmt_execute($stmt);
            }
        }

        /*Stage 7 - 1 */
        else if(strpos($data[1],"Wonder Woman (Diana Prince)")!==false)
        {
            $stage_game=7;
            $question_game="Welche Augenfarbe hat Wonder Woman?";
            $firstAns="Lila Augen";
            $secAns="Grüne Augen";
            $trdAns="Braune Augen";
            $fthAns="Blaue Augen";
            $coorect_answer=4;
            $id=7;
            $sql="INSERT INTO intrebariDe(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
            $stmt=mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)){
                echo "Sql error";
            }
            else{
                mysqli_stmt_bind_param($stmt,"iisssssi",$stage_game,$id,$question_game,$firstAns,$secAns,$trdAns,$fthAns, $coorect_answer); 
                mysqli_stmt_execute($stmt);
            }
        }

        /*Stage 7 - 2 */
        else if(strpos($data[2],"\/wiki\/Joker_(New_Earth)")!==false)
        {
            $stage_game=7;
            $question_game="Warum sind Joker und Batman Feinde?";
            $firstAns="Weil sie jeweils das Gegenteil der Lebensziele des anderen darstellen";
            $secAns="Joker hat Batmans Kinder getötet";
            $trdAns="Joker hat Batmans Frau getötet";
            $fthAns="Batman ist verrückt und will Joker ohne Grund töten";
            $coorect_answer=1;
            $id=8;
            $sql="INSERT INTO intrebariDe(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
            $stmt=mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)){
                echo "Sql error";
            }
            else{
                mysqli_stmt_bind_param($stmt,"iisssssi",$stage_game,$id,$question_game,$firstAns,$secAns,$trdAns,$fthAns, $coorect_answer); 
                mysqli_stmt_execute($stmt);
            }
        }
		/*Stage 1 - 6 */
		if(strpos($data[1],"Damian Wayne (Prime Earth)")!==false)
        {
            $stage_game=1;
            $question_game="Wann ist Robin zum ersten Mal aufgetreten?";
            $firstAns="1989";
            $secAns="1990";
            $trdAns="1985"; 
            $fthAns=$data[12];
            $coorect_answer=4;
            $id=9;
            $sql="INSERT INTO intrebariDe(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
            $stmt=mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)){
                echo "Sql error";
            }
            else{
                mysqli_stmt_bind_param($stmt,"iisssssi",$stage_game,$id,$question_game,$firstAns,$secAns,$trdAns,$fthAns, $coorect_answer); 
                mysqli_stmt_execute($stmt);
            }
        }

		/*Stage 2 - 6 */
		else if(strpos($data[1],"Batman (Bruce Wayne)")!==false)
        {
            $stage_game=2;
            $question_game="Wie viele Auftritte hat Batman?";
            $firstAns="1316";
            $secAns="1565";
            $trdAns="2496"; 
            $fthAns=$data[10];
            $coorect_answer=4;
            $id=10;
            $sql="INSERT INTO intrebariDe(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
            $stmt=mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)){
                echo "Sql error";
            }
            else{
                mysqli_stmt_bind_param($stmt,"iisssssi",$stage_game,$id,$question_game,$firstAns,$secAns,$trdAns,$fthAns, $coorect_answer); 
                mysqli_stmt_execute($stmt);
            }
        }

		/*Stage 3 - 6 */
		else if(strpos($data[1],"Wonder Woman (Diana Prince)")!==false)
        {
            $stage_game=3;
            $question_game="Wann erschien Wonder Woman zum ersten Mal?";
            $firstAns="1939";
            $secAns=$data[12];
            $trdAns="1950"; 
            $fthAns="1943";
            $coorect_answer=2;
            $id=11;
            $sql="INSERT INTO intrebariDe(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
            $stmt=mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)){
                echo "Sql error";
            }
            else{
                mysqli_stmt_bind_param($stmt,"iisssssi",$stage_game,$id,$question_game,$firstAns,$secAns,$trdAns,$fthAns, $coorect_answer); 
                mysqli_stmt_execute($stmt);
            }
        }


		/*Stage 4 - 6 */
		else if(strpos($data[2],"\/wiki\/Joker_(New_Earth)")!==false)
        {
            $stage_game=4;
            $question_game="Welche Haarfarbe hat Joker?";
            $firstAns="Graue Haare";
            $secAns="Braune Haare";
            $trdAns="Grüne Haare"; 
            $fthAns="Kahl";
            $coorect_answer=3;
            $id=12;
            $sql="INSERT INTO intrebariDe(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
            $stmt=mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)){
                echo "Sql error";
            }
            else{
                mysqli_stmt_bind_param($stmt,"iisssssi",$stage_game,$id,$question_game,$firstAns,$secAns,$trdAns,$fthAns, $coorect_answer); 
                mysqli_stmt_execute($stmt);
            }
        }

		/*Stage 5 - 6 */
		else if(strpos($data[1],"Green Lantern (Hal Jordan)")!==false)
        {
            $stage_game=5;
            $question_game="Was ist die Superkraft von Green Lantern?";
            $firstAns="Unsichtbarkeit";
            $secAns="Stärke";
            $trdAns="Zeitreisen"; 
            $fthAns="Alles das oben Genannte";
            $coorect_answer=4;
            $id=13;
            $sql="INSERT INTO intrebariDe(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
            $stmt=mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)){
                echo "Sql error";
            }
            else{
                mysqli_stmt_bind_param($stmt,"iisssssi",$stage_game,$id,$question_game,$firstAns,$secAns,$trdAns,$fthAns, $coorect_answer); 
                mysqli_stmt_execute($stmt);
            }
        }

		/*Stage 6 - 6 */
		else if(strpos($data[1],"Aquaman (Arthur Curry)")!==false)
        {
            $stage_game=6;
            $question_game="Wann erschien Aquaman zum ersten Mal?";
            $firstAns=$data[12];
            $secAns="1939";
            $trdAns="1942"; 
            $fthAns="1945";
            $coorect_answer=1;
            $id=14;
            $sql="INSERT INTO intrebariDe(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
            $stmt=mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)){
                echo "Sql error";
            }
            else{
                mysqli_stmt_bind_param($stmt,"iisssssi",$stage_game,$id,$question_game,$firstAns,$secAns,$trdAns,$fthAns, $coorect_answer); 
                mysqli_stmt_execute($stmt);
            }
        }

		/*Stage 7 - 7 */
		else if(strpos($data[1],"Superman (Clark Kent)")!==false)
        {
            $stage_game=7;
            $question_game="Welche Augenfarbe hat Superman?";
            $firstAns="Braune Augen";
            $secAns="Blaue Augen";
            $trdAns="Grüne Augen"; 
            $fthAns="Schwarze Augen";
            $coorect_answer=2;
            $id=15;
            $sql="INSERT INTO intrebariDe(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
            $stmt=mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)){
                echo "Sql error";
            }
            else{
                mysqli_stmt_bind_param($stmt,"iisssssi",$stage_game,$id,$question_game,$firstAns,$secAns,$trdAns,$fthAns, $coorect_answer); 
                mysqli_stmt_execute($stmt);
            }
        }

		/*Stage 1 - 7 */
		else if(strpos($data[1],"Flash (Barry Allen)")!==false)
        {
            $stage_game=1;
            $question_game="Welche Haarfarbe hat Flash?";
            $firstAns="Grüne Haare";
            $secAns="Braune Haare";
            $trdAns="Blondes Haar"; 
            $fthAns="Rote Haare";
            $coorect_answer=3;
            $id=16;
            $sql="INSERT INTO intrebariDe(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
            $stmt=mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)){
                echo "Sql error";
            }
            else{
                mysqli_stmt_bind_param($stmt,"iisssssi",$stage_game,$id,$question_game,$firstAns,$secAns,$trdAns,$fthAns, $coorect_answer); 
                mysqli_stmt_execute($stmt);
            }
        }

		
	}
}  

fclose($handle);

/* DC ENDED */
/* Marvel START*/
		
$row = 1;
if (($handle = fopen("../../public/dataframes/marvel-wikia-data.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        $row++;
        /*Stage 1 - 2 */ //check 
        if(strpos($data[2],"\/Spider-Man_(Peter_Parker)")!==false)
        {
            $stage_game=1;
            $question_game="Wer ist die Freundin von Spider-Man?";
            $firstAns="Cat Woman";
            $secAns="Mary Jane Watson";
            $trdAns="Susan Storm";
            $fthAns="Wonder Woman";
            $coorect_answer=2;
            $id=17;
            $sql="INSERT INTO intrebariDe(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
            $stmt=mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)){
                echo "Sql error";
            }
            else{
                mysqli_stmt_bind_param($stmt,"iisssssi",$stage_game,$id,$question_game,$firstAns,$secAns,$trdAns,$fthAns, $coorect_answer); 
                mysqli_stmt_execute($stmt);
            }
        }

        /*Stage 2 - 2 */ //check
        else if(strpos($data[2],"\/Captain_America_(Steven_Rogers)")!==false)
        {
            $stage_game=2;
            $question_game="Wie ist der richtige Name von Captain America?";
            $firstAns="Steven Rogers";
            $secAns="Peter Parker";
            $trdAns="Robert Bruce Banner";
            $fthAns="Anthony Stark";
            $coorect_answer=1;
            $id=18;
            $sql="INSERT INTO intrebariDe(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
            $stmt=mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)){
                echo "Sql error";
            }
            else{
                mysqli_stmt_bind_param($stmt,"iisssssi",$stage_game,$id,$question_game,$firstAns,$secAns,$trdAns,$fthAns, $coorect_answer); 
                mysqli_stmt_execute($stmt);
            }
        }

        /*Stage 3 - 2 */ //check
        else if(strpos($data[2],"\/Wolverine_(James_%22Logan%22_Howlett)")!==false)
        {
            $stage_game=3;
            $question_game="Welche Augenfarbe hat Wolverine?";
            $firstAns="Blaue Augen";
            $secAns="Lila Augen";
            $trdAns="Grüne Augen";
            $fthAns="Braune Augen";
            $coorect_answer=1;
            $id=19;
            $sql="INSERT INTO intrebariDe(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
            $stmt=mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)){
                echo "Sql error";
            }
            else{
                mysqli_stmt_bind_param($stmt,"iisssssi",$stage_game,$id,$question_game,$firstAns,$secAns,$trdAns,$fthAns, $coorect_answer); 
                mysqli_stmt_execute($stmt);
            }
        }

        /*Stage 4 - 2 */ //check
        else if(strpos($data[2],"\/Iron_Man_(Anthony_%22Tony%22_Stark)")!==false)
        {
            $stage_game=4;
            $question_game="Wann trat Iron Man zum ersten Mal auf?";
            $firstAns="1974";
            $secAns="1962";
            $trdAns="1941";
            $fthAns=$data[12];
            $coorect_answer=4;
            $id=20;
            $sql="INSERT INTO intrebariDe(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
            $stmt=mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)){
                echo "Sql error";
            }
            else{
                mysqli_stmt_bind_param($stmt,"iisssssi",$stage_game,$id,$question_game,$firstAns,$secAns,$trdAns,$fthAns, $coorect_answer); 
                mysqli_stmt_execute($stmt);
            }
        }

        /*Stage 5 - 2 */ //check
        else if(strpos($data[2],"\/Nicholas_Fury_(Earth-616)")!==false)
        {
            $stage_game=5;
            $question_game="In welcher Kategorie von Charakteren finden wir Nicholas Fury?";
            $firstAns="Neutrale Charaktere";
            $secAns="Gute Charaktere";
            $trdAns="Schlechte Charaktere";
            $fthAns="Nicht bekannt";
            $coorect_answer=1;
            $id=21;
            $sql="INSERT INTO intrebariDe(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
            $stmt=mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)){
                echo "Sql error";
            }
            else{
                mysqli_stmt_bind_param($stmt,"iisssssi",$stage_game,$id,$question_game,$firstAns,$secAns,$trdAns,$fthAns, $coorect_answer); 
                mysqli_stmt_execute($stmt);
            }
        }

        /*Stage 6 - 2 */ //check
        else if(strpos($data[2],"\/Deadpool_(Wade_Wilson)")!==false)
        {
            $stage_game=6;
            $question_game="Welche Haarfarbe hat Deadpool?";
            $firstAns="Braune Haare";
            $secAns="Weißes Haar";
            $trdAns="Rote Haare";
            $fthAns="Kahl";
            $coorect_answer=4;
            $id=22;
            $sql="INSERT INTO intrebariDe(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
            $stmt=mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)){
                echo "Sql error";
            }
            else{
                mysqli_stmt_bind_param($stmt,"iisssssi",$stage_game,$id,$question_game,$firstAns,$secAns,$trdAns,$fthAns, $coorect_answer); 
                mysqli_stmt_execute($stmt);
            }
        }

        /*Stage 7 - 3 */ //check
        else if(strpos($data[2],"\/Thor_(Thor_Odinson)")!==false)
        {
            $stage_game=7;
            $question_game="Welche Waffe benutzt Thor häufig?";
            $firstAns="Schrotflinte";
            $secAns="Hammer";
            $trdAns="Axt"; 
            $fthAns="Schwert";
            $coorect_answer=2;
            $id=23;
            $sql="INSERT INTO intrebariDe(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
            $stmt=mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)){
                echo "Sql error";
            }
            else{
                mysqli_stmt_bind_param($stmt,"iisssssi",$stage_game,$id,$question_game,$firstAns,$secAns,$trdAns,$fthAns, $coorect_answer); 
                mysqli_stmt_execute($stmt);
            }
        }
 
        /*Stage 1 - 3 */ //check
        else if(strpos($data[2],"\/Benjamin_Grimm_(Earth-616)")!==false)
        {
            $stage_game=1;
            $question_game="Wann trat Benjamin Grimm zum ersten Mal auf?";
            $firstAns="1965";
            $secAns="1960";
            $trdAns= $data[12]; 
            $fthAns="1971";
            $coorect_answer=3;
            $id=24;
            $sql="INSERT INTO intrebariDe(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
            $stmt=mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)){
                echo "Sql error";
            }
            else{
                mysqli_stmt_bind_param($stmt,"iisssssi",$stage_game,$id,$question_game,$firstAns,$secAns,$trdAns,$fthAns, $coorect_answer); 
                mysqli_stmt_execute($stmt);
            }
        }

         /*Stage 2 - 3 */ //check
         else if(strpos($data[2],"\/Reed_Richards_(Earth-616)")!==false)
         {
             $stage_game=2;
             $question_game="In welcher Charakterkategorie finden wir Reed Richards?";
             $firstAns="Nicht bekannt";
             $secAns="Verstorbene Charaktere";
             $trdAns="Unsterbliche Charaktere"; 
             $fthAns="Lebende Charaktere";
             $coorect_answer=4;
             $id=25;
            $sql="INSERT INTO intrebariDe(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
            $stmt=mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)){
                echo "Sql error";
            }
            else{
                mysqli_stmt_bind_param($stmt,"iisssssi",$stage_game,$id,$question_game,$firstAns,$secAns,$trdAns,$fthAns, $coorect_answer); 
                mysqli_stmt_execute($stmt);
            }
         }

          /*Stage 3 - 3 */ //check
        else if(strpos($data[2],"\/Jonathan_Storm_(Earth-616)")!==false)
        {
            $stage_game=3;
            $question_game="Welche Superkräfte hat Jonathan Storm?";
            $firstAns="Elastisch";
            $secAns="Menschliche Fackel";
            $trdAns="Superstärke"; 
            $fthAns="Unsichtbar";
            $coorect_answer=2;
            $id=26;
            $sql="INSERT INTO intrebariDe(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
            $stmt=mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)){
                echo "Sql error";
            }
            else{
                mysqli_stmt_bind_param($stmt,"iisssssi",$stage_game,$id,$question_game,$firstAns,$secAns,$trdAns,$fthAns, $coorect_answer); 
                mysqli_stmt_execute($stmt);
            }
        }

         /*Stage 4 - 3 */ //check
         else if(strpos($data[2],"\/Susan_Storm_(Earth-616)")!==false)
         {
             $stage_game=4;
             $question_game="Welche Haarfarbe hat Susan Storm?";
             $firstAns="Blondes Haar";
             $secAns="Schwarzes Haar";
             $trdAns="Braune Haare"; 
             $fthAns="Lila Haare";
			 $coorect_answer=1;
             $id=27;
            $sql="INSERT INTO intrebariDe(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
            $stmt=mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)){
                echo "Sql error";
            }
            else{
                mysqli_stmt_bind_param($stmt,"iisssssi",$stage_game,$id,$question_game,$firstAns,$secAns,$trdAns,$fthAns, $coorect_answer); 
                mysqli_stmt_execute($stmt);
            }
         }

          /*Stage 5 - 3 */ //check
        else if(strpos($data[2],"\/Hulk_(Robert_Bruce_Banner)")!==false)
        {
            $stage_game=5;
            $question_game="Wie heißt Hulk mit echtem Namen?";
            $firstAns="Robert Bruce Banner";
            $secAns="Henry McCoy";
            $trdAns="Kurt Wagner"; 
            $fthAns="Carol Danvers";
			$coorect_answer=1;
            $id=28;
            $sql="INSERT INTO intrebariDe(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
            $stmt=mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)){
                echo "Sql error";
            }
            else{
                mysqli_stmt_bind_param($stmt,"iisssssi",$stage_game,$id,$question_game,$firstAns,$secAns,$trdAns,$fthAns, $coorect_answer); 
                mysqli_stmt_execute($stmt);
            }
        }

         /*Stage 6 - 3 */ //check
         else if(strpos($data[2],"\/Stephen_Strange_(Earth-616)")!==false)
         {
             $stage_game=6;
             $question_game="Welche Augenfarbe hat Stephen Strange?";
             $firstAns="Braune Augen";
             $secAns="Graue Augen";
             $trdAns="Grüne Augen"; 
             $fthAns="Blaue Augen";
             $coorect_answer=2;
             $id=29;
            $sql="INSERT INTO intrebariDe(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
            $stmt=mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)){
                echo "Sql error";
            }
            else{
                mysqli_stmt_bind_param($stmt,"iisssssi",$stage_game,$id,$question_game,$firstAns,$secAns,$trdAns,$fthAns, $coorect_answer); 
                mysqli_stmt_execute($stmt);
            }
         }

          /*Stage 7 - 4 */ //check
        else if(strpos($data[2],"\/Otto_Octavius_(Earth-616)")!==false)
        {
            $stage_game=7;
            $question_game="Warum ist Otto Octavius ​​für Spider-Man so wichtig?";
            $firstAns="Er ist sein größter Feind";
            $secAns="Er ist sein Vater";
            $trdAns="Er ist sein Mentor"; 
            $fthAns="Er ist sein bester Freund";
			$coorect_answer=3;
            $id=30;
            $sql="INSERT INTO intrebariDe(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
            $stmt=mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)){
                echo "Sql error";
            }
            else{
                mysqli_stmt_bind_param($stmt,"iisssssi",$stage_game,$id,$question_game,$firstAns,$secAns,$trdAns,$fthAns, $coorect_answer); 
                mysqli_stmt_execute($stmt);
            }
        }

        /*Stage 1 - 4 */ //check
        else if(strpos($data[2],"\/Luke_Cage_(Earth-616)")!==false)
        {
            $stage_game=1;
            $question_game="Welchen Superhelden ersetzt Luke Cage in Fantastic 4?";
            $firstAns="Benjamin Grimm";
            $secAns="Reed Richards";
            $trdAns="Jonathan Storm "; 
            $fthAns="Susan Storm";
			$coorect_answer=1;
            $id=31;
            $sql="INSERT INTO intrebariDe(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
            $stmt=mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)){
                echo "Sql error";
            }
            else{
                mysqli_stmt_bind_param($stmt,"iisssssi",$stage_game,$id,$question_game,$firstAns,$secAns,$trdAns,$fthAns, $coorect_answer); 
                mysqli_stmt_execute($stmt);
            }
        }

        /*Stage 2 - 4 */ //check
        else if(strpos($data[2],"\/Frank_Castle_(Earth-616)")!==false)
        {
            $stage_game=2;
            $question_game="Welcher der folgenden Namen ist der Superheld von Frank Castle?";
            $firstAns="Antman";
            $secAns="Black Panther";
            $trdAns="Daredevil";
            $fthAns="The Punisher";
			$coorect_answer=4;
            $id=32;
            $sql="INSERT INTO intrebariDe(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
            $stmt=mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)){
                echo "Sql error";
            }
            else{
                mysqli_stmt_bind_param($stmt,"iisssssi",$stage_game,$id,$question_game,$firstAns,$secAns,$trdAns,$fthAns, $coorect_answer); 
                mysqli_stmt_execute($stmt);
            }
        }

        /*Stage 3 - 4 */ //check
        else if(strpos($data[2],"\/Clinton_Barton_(Earth-616)")!==false)
        {
            $stage_game=3;
            $question_game="In welcher Kategorie von Charakteren finden wir Clinton Barton?";
            $firstAns="Gute Charaktere";
            $secAns="Neutrale Charaktere";
            $trdAns="Schlechte Charaktere"; 
            $fthAns="Nicht bekannt";
			$coorect_answer=1;
            $id=33;
            $sql="INSERT INTO intrebariDe(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
            $stmt=mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)){
                echo "Sql error";
            }
            else{
                mysqli_stmt_bind_param($stmt,"iisssssi",$stage_game,$id,$question_game,$firstAns,$secAns,$trdAns,$fthAns, $coorect_answer); 
                mysqli_stmt_execute($stmt);
            }
        }

        /*Stage 4 - 4 */ //check
        else if(strpos($data[2],"\/Natalia_Romanova_(Earth-616)")!==false)
        {
            $stage_game=4;
            $question_game="Warum ist Natalia Romanova eine der klügsten Superheldinnen?";
            $firstAns="Sie war sehr gut in der Highschool";
            $secAns="Sie war KGB-Agentin";
            $trdAns="Sie wurde klug geboren"; 
            $fthAns="Sie scheint einfach schlau zu sein, aber sie ist es nicht";
			$coorect_answer=2;
            $id=34;
            $sql="INSERT INTO intrebariDe(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
            $stmt=mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)){
                echo "Sql error";
            }
            else{
                mysqli_stmt_bind_param($stmt,"iisssssi",$stage_game,$id,$question_game,$firstAns,$secAns,$trdAns,$fthAns, $coorect_answer); 
                mysqli_stmt_execute($stmt);
            }
        }

        /*Stage 5 - 4 */ //check
        else if(strpos($data[2],"\/Matthew_Murdock_(Earth-616)")!==false)
        {
            $stage_game=5;
            $question_game="Welche Haarfarbe hat Matthew Murdock?";
            $firstAns="Graue Haare";
            $secAns="Grüne Haare";
            $trdAns="Blondes Haar"; 
            $fthAns="Rote Haare";
			$coorect_answer=4;
            $id=35;
            $sql="INSERT INTO intrebariDe(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
            $stmt=mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)){
                echo "Sql error";
            }
            else{
                mysqli_stmt_bind_param($stmt,"iisssssi",$stage_game,$id,$question_game,$firstAns,$secAns,$trdAns,$fthAns, $coorect_answer); 
                mysqli_stmt_execute($stmt);
            }
        }

        /*Stage 6 - 4 */ //missing
        else if(strpos($data[2],"\/Charles_Xavier_(Earth-616)")!==false)
        {
            $stage_game=6;
            $question_game="Wann trat Professor X zum ersten Mal auf?";
            $firstAns="1962";
            $secAns=$data[12];
            $trdAns="1973"; 
            $fthAns="1958";
			$coorect_answer=2;
            $id=36;
            $sql="INSERT INTO intrebariDe(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
            $stmt=mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)){
                echo "Sql error";
            }
            else{
                mysqli_stmt_bind_param($stmt,"iisssssi",$stage_game,$id,$question_game,$firstAns,$secAns,$trdAns,$fthAns, $coorect_answer); 
                mysqli_stmt_execute($stmt);
            }
        }

        /*Stage 7 - 5 */
        else if(strpos($data[2],"\/Hercules_(Earth-616)")!==false)
        {
            $stage_game=7;
            $question_game="Welche Identität hat Herkules?";
            $firstAns="Öffentliche Identität";
            $secAns="Geheime Identität";
            $trdAns="Keine doppelte Identität"; 
            $fthAns="Nicht von der Erde";
			$coorect_answer=3;
            $id=37;
            $sql="INSERT INTO intrebariDe(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
            $stmt=mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)){
                echo "Sql error";
            }
            else{
                mysqli_stmt_bind_param($stmt,"iisssssi",$stage_game,$id,$question_game,$firstAns,$secAns,$trdAns,$fthAns, $coorect_answer); 
                mysqli_stmt_execute($stmt);
            }
        }

        /*Stage 1 - 5 */
    	 if(strpos($data[2],"\/Hulk_(Robert_Bruce_Banner)")!==false)
        {
            $stage_game=1;
            $question_game="Welche Hautfarbe hat Hulk?";
            $firstAns="Gelb";
            $secAns="Rot";
            $trdAns="Grün"; 
            $fthAns="Blau";
			$coorect_answer=3;
            $id=38;
            $sql="INSERT INTO intrebariDe(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
            $stmt=mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)){
                echo "Sql error";
            }
            else{
                mysqli_stmt_bind_param($stmt,"iisssssi",$stage_game,$id,$question_game,$firstAns,$secAns,$trdAns,$fthAns, $coorect_answer); 
                mysqli_stmt_execute($stmt);
            }
        }

        /*Stage 2 - 5 */
        else if(strpos($data[2],"\/Spider-Man_(Peter_Parker)")!==false)
        {
            $stage_game=2;
            $question_game="Welche Augenfarbe hat Spider-Man?";
            $firstAns="Grüne Augen";
            $secAns="Braune Augen";
            $trdAns="Haselnussbraune Augen"; 
            $fthAns="Blaue Augen";
			$coorect_answer=3;
            $id=39;
            $sql="INSERT INTO intrebariDe(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
            $stmt=mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)){
                echo "Sql error";
            }
            else{
                mysqli_stmt_bind_param($stmt,"iisssssi",$stage_game,$id,$question_game,$firstAns,$secAns,$trdAns,$fthAns, $coorect_answer); 
                mysqli_stmt_execute($stmt);
            }
        }

        /*Stage 3 - 5 */
        else if(strpos($data[2],"\/Captain_America_(Steven_Rogers)")!==false)
        {
            $stage_game=3;
            $question_game="Welche Haarfarbe hat Captain America?";
            $firstAns="Blondes Haar";
            $secAns="Braune Haare";	
            $trdAns="Weißes Haar"; 
            $fthAns="Kahl";
			$coorect_answer=3;
            $id=40;
            $sql="INSERT INTO intrebariDe(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
            $stmt=mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)){
                echo "Sql error";
            }
            else{
                mysqli_stmt_bind_param($stmt,"iisssssi",$stage_game,$id,$question_game,$firstAns,$secAns,$trdAns,$fthAns, $coorect_answer); 
                mysqli_stmt_execute($stmt);
            }
        }

        /*Stage 4 - 5 */
        else if(strpos($data[2],"\/Thor_(Thor_Odinson)")!==false)
        {
            $stage_game=4;
            $question_game="Welche Identität hat Thor?";
            $firstAns="Öffentliche Identität";
            $secAns="Geheime Identität";
            $trdAns="Keine doppelte Identität"; 
            $fthAns="Nicht bekannt";
			$coorect_answer=3;
            $id=41;
            $sql="INSERT INTO intrebariDe(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
            $stmt=mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)){
                echo "Sql error";
            }
            else{
                mysqli_stmt_bind_param($stmt,"iisssssi",$stage_game,$id,$question_game,$firstAns,$secAns,$trdAns,$fthAns, $coorect_answer); 
                mysqli_stmt_execute($stmt);
            }
        }

        /*Stage 5 - 5 */
        else if(strpos($data[2],"\/Wolverine_(James_%22Logan%22_Howlett)")!==false)
        {
            $stage_game=5;
            $question_game="Welche Superkraft hat Wolverine?";
            $firstAns="Adamantium-Knochen";
            $secAns="Fliegend";
            $trdAns="Unsichtbar"; 
            $fthAns="Nichts von oben";
			$coorect_answer=1;
            $id=42;
            $sql="INSERT INTO intrebariDe(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
            $stmt=mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)){
                echo "Sql error";
            }
            else{
                mysqli_stmt_bind_param($stmt,"iisssssi",$stage_game,$id,$question_game,$firstAns,$secAns,$trdAns,$fthAns, $coorect_answer); 
                mysqli_stmt_execute($stmt);
            }
        }

        /*Stage 6 - 5 */
        else if(strpos($data[2],"\/Iron_Man_(Anthony_%22Tony%22_Stark)")!==false)
        {
            $stage_game=6;
            $question_game="In welcher Kategorie von Charakteren finden wir Iron Man?";
            $firstAns="Verstorbene Charaktere";
            $secAns="Lebende Charaktere";
            $trdAns="Nicht bekannt"; 
            $fthAns="Unsterbliche Charaktere";
			$coorect_answer=2;
            $id=43;
            $sql="INSERT INTO intrebariDe(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
            $stmt=mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)){
                echo "Sql error";
            }
            else{
                mysqli_stmt_bind_param($stmt,"iisssssi",$stage_game,$id,$question_game,$firstAns,$secAns,$trdAns,$fthAns, $coorect_answer); 
                mysqli_stmt_execute($stmt);
            }
        }

        /*Stage 7 - 6 */
        else if(strpos($data[2],"\/Frank_Castle_(Earth-616)")!==false)
        {
            $stage_game=7;
            $question_game="In welcher Kategorie von Charakteren finden wir Frank Castle?";
            $firstAns="Neutrale Charaktere";
            $secAns="Gute Charaktere";
            $trdAns="Schlechte Charaktere"; 
            $fthAns="Nicht bekannt";
			$coorect_answer=1;
            $id=44;
            $sql="INSERT INTO intrebariDe(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
            $stmt=mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)){
                echo "Sql error";
            }
            else{
                mysqli_stmt_bind_param($stmt,"iisssssi",$stage_game,$id,$question_game,$firstAns,$secAns,$trdAns,$fthAns, $coorect_answer); 
                mysqli_stmt_execute($stmt);
            }
        }


		/*Stage 2 - 7 */
        else if(strpos($data[2],"\/Nicholas_Fury_(Earth-616)")!==false) 
        {
            $stage_game=2;
            $question_game="Welche Haarfarbe hat Nicholas Fury?";
            $firstAns="Kahl";
            $secAns="Schwarzes Haar";
            $trdAns="Blondes Haar"; 
            $fthAns="Braune Haare";
			$coorect_answer=4;
            $id=45;
            $sql="INSERT INTO intrebariDe(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
            $stmt=mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)){
                echo "Sql error";
            }
            else{
                mysqli_stmt_bind_param($stmt,"iisssssi",$stage_game,$id,$question_game,$firstAns,$secAns,$trdAns,$fthAns, $coorect_answer); 
                mysqli_stmt_execute($stmt);
            }
        }

		/*Stage 3 - 7 */
        else if(strpos($data[2],"\/Deadpool_(Wade_Wilson)")!==false)
        {
            $stage_game=3;
            $question_game="In welcher Kategorie von Charakteren finden wir Deadpool?";
            $firstAns="Neutrale Charaktere";
            $secAns="Gute Charaktere";
            $trdAns="Schlechte Charaktere"; 
            $fthAns="Nicht bekannt";
			$coorect_answer=1;
            $id=46;
            $sql="INSERT INTO intrebariDe(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
            $stmt=mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)){
                echo "Sql error";
            }
            else{
                mysqli_stmt_bind_param($stmt,"iisssssi",$stage_game,$id,$question_game,$firstAns,$secAns,$trdAns,$fthAns, $coorect_answer); 
                mysqli_stmt_execute($stmt);
            }
        }


		/*Stage 4 - 7 */
        else if(strpos($data[2],"\/Otto_Octavius_(Earth-616)")!==false)
        {
            $stage_game=4;
            $question_game="Welche Augenfarbe hat Otto Octavius?";
            $firstAns="Lila Augen";
            $secAns="Braune Augen";
            $trdAns="Grüne Augen"; 
            $fthAns="Haselnussbraune Augen";
			$coorect_answer=4;
            $id=47;
            $sql="INSERT INTO intrebariDe(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
            $stmt=mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)){
                echo "Sql error";
            }
            else{
                mysqli_stmt_bind_param($stmt,"iisssssi",$stage_game,$id,$question_game,$firstAns,$secAns,$trdAns,$fthAns, $coorect_answer); 
                mysqli_stmt_execute($stmt);
            }
        }



		/*Stage 5 - 7 */
        else if(strpos($data[2],"\/Luke_Cage_(Earth-616)")!==false)
        {
            $stage_game=5;
            $question_game="Wie viele Auftritte hat Luke Cage?";
            $firstAns="930";
            $secAns=$data[10];
            $trdAns="790"; 
            $fthAns="1032";
			$coorect_answer=2;
            $id=48;
            $sql="INSERT INTO intrebariDe(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
            $stmt=mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)){
                echo "Sql error";
            }
            else{
                mysqli_stmt_bind_param($stmt,"iisssssi",$stage_game,$id,$question_game,$firstAns,$secAns,$trdAns,$fthAns, $coorect_answer); 
                mysqli_stmt_execute($stmt);
            }
        }


		/*Stage 6 - 7 */
        else if(strpos($data[2],"\/Natalia_Romanova_(Earth-616)")!==false)
        {
            $stage_game=6;
            $question_game="Welche Haarfarbe hat Natalia Romanova?";
            $firstAns="Kahl";
            $secAns="Braune Haare";
            $trdAns="Blondes Haar"; 
            $fthAns="Rote Haare";
			$coorect_answer=4;
            $id=49;
            $sql="INSERT INTO intrebariDe(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
            $stmt=mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)){
                echo "Sql error";
            }
            else{
                mysqli_stmt_bind_param($stmt,"iisssssi",$stage_game,$id,$question_game,$firstAns,$secAns,$trdAns,$fthAns, $coorect_answer); 
                mysqli_stmt_execute($stmt);
            }
        }
    }
    fclose($handle);
}

 /* Marvel ENDED */
