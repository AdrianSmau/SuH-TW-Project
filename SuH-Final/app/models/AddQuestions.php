<?php
//Header to this only when reimporting the questions
require_once 'DatabaseHandler.php';

$instance = new DBManager();
$conn = $instance->getConn();

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
            $question_game="What is the real name of Batman?";
            $firstAns="Carter Hall";
            $secAns="Bruce Wayne";
            $trdAns="Rachel Roth";
            $fthAns="Barry Allen";
            $coorect_answer=2;
            $id=1;
            $sql="INSERT INTO intrebari(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="When did Superman appear for the first time?";
            $firstAns=$data[12];
            $secAns="1987";
            $trdAns="1960";
            $fthAns="1973";
            $coorect_answer=1;
            $id=2;
            $sql="INSERT INTO intrebari(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="What is the eye color of Green Lantern?";
            $firstAns="Green Eyes";
            $secAns="Blue Eyes";
            $trdAns="Purple Eyes";
            $fthAns=$data[5];
            $coorect_answer=4;
            $id=3;
            $sql="INSERT INTO intrebari(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="What is the hair color of Aquaman?";
            $firstAns="Black Hair";
            $secAns=$data[6];
            $trdAns="Brown Hair";
            $fthAns="Red Hair";
            $coorect_answer=2;
            $id=4;
            $sql="INSERT INTO intrebari(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="In what category of character do we find Flash?";
            $firstAns="Not known";
            $secAns=$data[9];
            $trdAns="Deceased Characters";
            $fthAns="Immortal Characters";
            $coorect_answer=2;
            $id=5;
            $sql="INSERT INTO intrebari(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="What is the superhero name of Damian Wayne?";
            $firstAns="Robin";
            $secAns="Hulk";
            $trdAns="Spider-Man";
            $fthAns="Joker";
            $coorect_answer=1;
            $id=6;
            $sql="INSERT INTO intrebari(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="What is the eye color of Wonder Woman?";
            $firstAns="Purple Eyes";
            $secAns="Green Eyes";
            $trdAns="Brown Eyes";
            $fthAns=$data[5];
            $coorect_answer=4;
            $id=7;
            $sql="INSERT INTO intrebari(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="Why are the Joker and Batman enemies?";
            $firstAns="Because they each represent the antithesis of each other`s goals in life";
            $secAns="Joker killed Batman's kids";
            $trdAns="Joker killed Batman's wife";
            $fthAns="Batman is insane and wants to kill Joker for no reason";
            $coorect_answer=1;
            $id=8;
            $sql="INSERT INTO intrebari(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="When did Robin appear for the first time?";
            $firstAns="1989";
            $secAns="1990";
            $trdAns="1985"; 
            $fthAns=$data[12];
            $coorect_answer=4;
            $id=9;
            $sql="INSERT INTO intrebari(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="How many appearances does Batman have?";
            $firstAns="1316";
            $secAns="1565";
            $trdAns="2496"; 
            $fthAns=$data[10];
            $coorect_answer=4;
            $id=10;
            $sql="INSERT INTO intrebari(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="When did Wonder Woman appear for the first time?";
            $firstAns="1939";
            $secAns=$data[12];
            $trdAns="1950"; 
            $fthAns="1943";
            $coorect_answer=2;
            $id=11;
            $sql="INSERT INTO intrebari(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="What hair color does Joker have?";
            $firstAns="Grey Hair";
            $secAns="Brown Hair";
            $trdAns=$data[6]; 
            $fthAns="No Hair";
            $coorect_answer=3;
            $id=12;
            $sql="INSERT INTO intrebari(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="What is the super power of Green Lantern?";
            $firstAns="Invisibility";
            $secAns="Strength";
            $trdAns="Time traveling"; 
            $fthAns="All of the above";
            $coorect_answer=4;
            $id=13;
            $sql="INSERT INTO intrebari(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="When did Aquaman appear for the first time?";
            $firstAns=$data[12];
            $secAns="1939";
            $trdAns="1942"; 
            $fthAns="1945";
            $coorect_answer=1;
            $id=14;
            $sql="INSERT INTO intrebari(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="What is the eye color of Superman?";
            $firstAns="Brown Eyes";
            $secAns=$data[5];
            $trdAns="Green Eyes"; 
            $fthAns="Black Eyes";
            $coorect_answer=2;
            $id=15;
            $sql="INSERT INTO intrebari(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="What is the hair color of Flash?";
            $firstAns="Green Hair";
            $secAns="Brown Hair";
            $trdAns=$data[6]; 
            $fthAns="Red Hair";
            $coorect_answer=3;
            $id=16;
            $sql="INSERT INTO intrebari(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="Who is the girlfriend of Spider-Man?";
            $firstAns="Cat Woman";
            $secAns="Mary Jane Watson";
            $trdAns="Susan Storm";
            $fthAns="Wonder Woman";
            $coorect_answer=2;
            $id=17;
            $sql="INSERT INTO intrebari(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="What is the real name of Captain America?";
            $firstAns="Steven Rogers";
            $secAns="Peter Parker";
            $trdAns="Robert Bruce Banner";
            $fthAns="Anthony Stark";
            $coorect_answer=1;
            $id=18;
            $sql="INSERT INTO intrebari(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="What is the eye color of Wolverine?";
            $firstAns=$data[5];
            $secAns="Purple Eyes";
            $trdAns="Green Eyes";
            $fthAns="Brown Eyes";
            $coorect_answer=1;
            $id=19;
            $sql="INSERT INTO intrebari(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="When did Iron Man appear for the first time?";
            $firstAns="1974";
            $secAns="1962";
            $trdAns="1941";
            $fthAns=$data[12];
            $coorect_answer=4;
            $id=20;
            $sql="INSERT INTO intrebari(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="In which cateogory of characters do we find Nicholas Fury?";
            $firstAns=$data[4];
            $secAns="Good Characters";
            $trdAns="Bad Characters";
            $fthAns="Not Known";
            $coorect_answer=1;
            $id=21;
            $sql="INSERT INTO intrebari(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="What hair color does Deadpool have?";
            $firstAns="Brown Hair";
            $secAns="White Hair";
            $trdAns="Red Hair";
            $fthAns=$data[6];
            $coorect_answer=4;
            $id=22;
            $sql="INSERT INTO intrebari(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="What weapon does Thor use frequently?";
            $firstAns="Shotgun";
            $secAns="Hammer";
            $trdAns="Axe"; 
            $fthAns="Sword";
            $coorect_answer=2;
            $id=23;
            $sql="INSERT INTO intrebari(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="When did Benjamin Grimm appear for the first time?";
            $firstAns="1965";
            $secAns="1960";
            $trdAns= $data[12]; 
            $fthAns="1971";
            $coorect_answer=3;
            $id=24;
            $sql="INSERT INTO intrebari(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
             $question_game="In what category of character do we find Reed Richards?";
             $firstAns="Not Known";
             $secAns="Deceased Characters";
             $trdAns="Immortal Characters"; 
             $fthAns=$data[9];
             $coorect_answer=4;
             $id=25;
            $sql="INSERT INTO intrebari(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="What superpower does Jonathan Storm have?";
            $firstAns="Elastic";
            $secAns="Human Torch";
            $trdAns="Super Strength"; 
            $fthAns="Invisible";
            $coorect_answer=2;
            $id=26;
            $sql="INSERT INTO intrebari(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
             $question_game="What hair color does Susan Storm have?";
             $firstAns=$data[6];
             $secAns="Black Hair";
             $trdAns="Brown Hair"; 
             $fthAns="Purple Hair";
			 $coorect_answer=1;
             $id=27;
            $sql="INSERT INTO intrebari(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="What is the real name of Hulk?";
            $firstAns="Robert Bruce Banner";
            $secAns="Henry McCoy";
            $trdAns="Kurt Wagner"; 
            $fthAns="Carol Danvers";
			$coorect_answer=1;
            $id=28;
            $sql="INSERT INTO intrebari(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
             $question_game="What is the eye color of Stephen Strange?";
             $firstAns="Brown Eyes";
             $secAns=$data[5];
             $trdAns="Green Eyes"; 
             $fthAns="Blue Eyes";
             $coorect_answer=2;
             $id=29;
            $sql="INSERT INTO intrebari(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="Why is Otto Octavius so important to Spider-Man?";
            $firstAns="He is his bigget enemy";
            $secAns="He is his father";
            $trdAns="He is his mentor"; 
            $fthAns="He is his bestfriend";
			$coorect_answer=3;
            $id=30;
            $sql="INSERT INTO intrebari(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="Which superhero is Luke Cage replacing in the Fantastic 4?";
            $firstAns="Benjamin Grimm";
            $secAns="Reed Richards";
            $trdAns="Jonathan Storm "; 
            $fthAns="Susan Storm";
			$coorect_answer=1;
            $id=31;
            $sql="INSERT INTO intrebari(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="Which of the following is the super hero name of Frank Castle?";
            $firstAns="Antman";
            $secAns="Black Panther";
            $trdAns="Daredevil";
            $fthAns="The Punisher";
			$coorect_answer=4;
            $id=32;
            $sql="INSERT INTO intrebari(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="In what category of characters do we find Clinton Barton?";
            $firstAns=$data[4];
            $secAns="Neutral Characters";
            $trdAns="Bad Characters"; 
            $fthAns="Not Known";
			$coorect_answer=1;
            $id=33;
            $sql="INSERT INTO intrebari(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="Why is Natalia Romanova one of the smartest superheroes?";
            $firstAns="She was very good in highschool";
            $secAns="She has been a KGB operative";
            $trdAns="She was born smart"; 
            $fthAns="She just seems smart but she isn't";
			$coorect_answer=2;
            $id=34;
            $sql="INSERT INTO intrebari(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="What hair color does Matthew Murdock have?";
            $firstAns="Grey Hair";
            $secAns="Green Hair";
            $trdAns="Blond Hair"; 
            $fthAns=$data[6];
			$coorect_answer=4;
            $id=35;
            $sql="INSERT INTO intrebari(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="When did Professor X appear for the first time?";
            $firstAns="1962";
            $secAns=$data[12];
            $trdAns="1973"; 
            $fthAns="1958";
			$coorect_answer=2;
            $id=36;
            $sql="INSERT INTO intrebari(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="What kind of identity does Hercules have?";
            $firstAns="Public Identity";
            $secAns="Secret Identity";
            $trdAns=$data[3]; 
            $fthAns="Not from Earth";
			$coorect_answer=3;
            $id=37;
            $sql="INSERT INTO intrebari(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="What is the skin color of Hulk?";
            $firstAns="Yellow";
            $secAns="Red";
            $trdAns="Green"; 
            $fthAns="Blue";
			$coorect_answer=3;
            $id=38;
            $sql="INSERT INTO intrebari(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="What is the eye color of Spider-Man?";
            $firstAns="Green Eyes";
            $secAns="Brown Eyes";
            $trdAns=$data[5]; 
            $fthAns="Blue Eyes";
			$coorect_answer=3;
            $id=39;
            $sql="INSERT INTO intrebari(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="What hair color does Captain America have?";
            $firstAns="Blonde Hair";
            $secAns="Brown Hair";	
            $trdAns=$data[6]; 
            $fthAns="No Hair";
			$coorect_answer=3;
            $id=40;
            $sql="INSERT INTO intrebari(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="What kind of identity does Thor have?";
            $firstAns="Public Identity";
            $secAns="Secret Identity";
            $trdAns=$data[3]; 
            $fthAns="Not Known";
			$coorect_answer=3;
            $id=41;
            $sql="INSERT INTO intrebari(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="What super power does Wolverine have?";
            $firstAns="Adamantium bones";
            $secAns="Flying";
            $trdAns="Invisbile"; 
            $fthAns="Nothing from the above";
			$coorect_answer=1;
            $id=42;
            $sql="INSERT INTO intrebari(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="In what category of characters do we find Iron Man?";
            $firstAns="Decesead Characters";
            $secAns=$data[9];
            $trdAns="Not Known"; 
            $fthAns="Immortal Characters";
			$coorect_answer=2;
            $id=43;
            $sql="INSERT INTO intrebari(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="In which cateogory of characters do we find Frank Castle?";
            $firstAns=$data[4];
            $secAns="Good Characters";
            $trdAns="Bad Characters"; 
            $fthAns="Not Known";
			$coorect_answer=1;
            $id=44;
            $sql="INSERT INTO intrebari(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="What hair color does Nicholas Fury have?";
            $firstAns="Bald";
            $secAns="Black Hair";
            $trdAns="Blond Hair"; 
            $fthAns=$data[6];
			$coorect_answer=4;
            $id=45;
            $sql="INSERT INTO intrebari(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="In which cateogory of characters do we find Deadpool?";
            $firstAns=$data[4];
            $secAns="Good Characters";
            $trdAns="Bad Characters"; 
            $fthAns="Not Known";
			$coorect_answer=1;
            $id=46;
            $sql="INSERT INTO intrebari(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="What is the eye color of Otto Octavius?";
            $firstAns="Purple Eyes";
            $secAns="Brown Eyes";
            $trdAns="Green Eyes"; 
            $fthAns=$data[5];
			$coorect_answer=4;
            $id=47;
            $sql="INSERT INTO intrebari(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="How many appearances does Luke Cage have?";
            $firstAns="930";
            $secAns=$data[10];
            $trdAns="790"; 
            $fthAns="1032";
			$coorect_answer=2;
            $id=48;
            $sql="INSERT INTO intrebari(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="What hair color does Natalia Romanova have?";
            $firstAns="Bald";
            $secAns="Brown Hair";
            $trdAns="Blonde Hair"; 
            $fthAns=$data[6];
			$coorect_answer=4;
            $id=49;
            $sql="INSERT INTO intrebari(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
