<?php
//Header to this only when reimporting the questions
require_once 'DatabaseHandler.php';

$instance = new DBManager();
$conn = $instance->getConn();
mysqli_set_charset( $conn, 'utf8' );

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
            $question_game="Quel est le vrai nom de Batman ?";
            $firstAns="Carter Hall";
            $secAns="Bruce Wayne";
            $trdAns="Rachel Roth";
            $fthAns="Barry Allen";
            $coorect_answer=2;
            $id=1;
            $sql="INSERT INTO intrebariFr(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="Quand Superman est-il apparu pour la première fois ?";
            $firstAns=$data[12];
            $secAns="1987";
            $trdAns="1960";
            $fthAns="1973";
            $coorect_answer=1;
            $id=2;
            $sql="INSERT INTO intrebariFr(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="Quelle est la couleur des yeux de Green Lantern ?";
            $firstAns="Yeux verts";
            $secAns="Yeux bleus";
            $trdAns="Yeux violets";
            $fthAns="Yeux marrons";
            $coorect_answer=4;
            $id=3;
            $sql="INSERT INTO intrebariFr(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="Quelle est la couleur des cheveux d'Aquaman ?";
            $firstAns="Cheveux noirs";
            $secAns="Cheveux blonds";
            $trdAns="Cheveux bruns";
            $fthAns="Cheveux roux";
            $coorect_answer=2;
            $id=4;
            $sql="INSERT INTO intrebariFr(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="Dans quelle catégorie de personnage retrouve-t-on Flash ?";
            $firstAns="Now known";
            $secAns="Personnages vivants";
            $trdAns="Personnages décédés";
            $fthAns="Personnages Immortels";
            $coorect_answer=2;
            $id=5;
            $sql="INSERT INTO intrebariFr(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="Quel est le nom de super-héros de Damian Wayne ?";
            $firstAns="Robin";
            $secAns="Hulk";
            $trdAns="Spider-Man";
            $fthAns="Joker";
            $coorect_answer=1;
            $id=6;
            $sql="INSERT INTO intrebariFr(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="Quelle est la couleur des yeux de Wonder Woman ?";
            $firstAns="Yeux violets";
            $secAns="Yeux verts";
            $trdAns="Yeux marrons";
            $fthAns="Yeux bleus";
            $coorect_answer=4;
            $id=7;
            $sql="INSERT INTO intrebariFr(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="Pourquoi le Joker et Batman sont-ils ennemis ?";
            $firstAns="Parce qu'ils représentent chacun l'antithèse des objectifs de l'autre dans la vie";
            $secAns="Joker a tué les enfants de Batman";
            $trdAns="Joker a tué la femme de Batman";
            $fthAns="Batman est fou et veut tuer Joker sans raison";
            $coorect_answer=1;
            $id=8;
            $sql="INSERT INTO intrebariFr(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="Quand Robin est-il apparu pour la première fois ?";
            $firstAns="1989";
            $secAns="1990";
            $trdAns="1985"; 
            $fthAns=$data[12];
            $coorect_answer=4;
            $id=9;
            $sql="INSERT INTO intrebariFr(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="Combien d'apparitions Batman a-t-il ?";
            $firstAns="1316";
            $secAns="1565";
            $trdAns="2496"; 
            $fthAns=$data[10];
            $coorect_answer=4;
            $id=10;
            $sql="INSERT INTO intrebariFr(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="Quand Wonder Woman est-elle apparue pour la première fois ?";
            $firstAns="1939";
            $secAns=$data[12];
            $trdAns="1950"; 
            $fthAns="1943";
            $coorect_answer=2;
            $id=11;
            $sql="INSERT INTO intrebariFr(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="Quelle couleur de cheveux a Joker ?";
            $firstAns="Cheveux gris";
            $secAns="Cheveux bruns";
            $trdAns="Cheveux verts"; 
            $fthAns="Chauve";
            $coorect_answer=3;
            $id=12;
            $sql="INSERT INTO intrebariFr(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="Quel est le super pouvoir de Green Lantern ?";
            $firstAns="Invisibilité";
            $secAns="Force";
            $trdAns="Voyage dans le temps"; 
            $fthAns="Tout ce qui précède";
            $coorect_answer=4;
            $id=13;
            $sql="INSERT INTO intrebariFr(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="Quand Aquaman est-il apparu pour la première fois ?";
            $firstAns=$data[12];
            $secAns="1939";
            $trdAns="1942"; 
            $fthAns="1945";
            $coorect_answer=1;
            $id=14;
            $sql="INSERT INTO intrebariFr(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="Quelle est la couleur des yeux de Superman ?";
            $firstAns="Yeux marrons";
            $secAns="Yeux bleus";
            $trdAns="Yeux verts"; 
            $fthAns="Yeux noirs";
            $coorect_answer=2;
            $id=15;
            $sql="INSERT INTO intrebariFr(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="Quelle est la couleur des cheveux de Flash ?";
            $firstAns="Cheveux verts";
            $secAns="Cheveux bruns";
            $trdAns="Cheveux blonds"; 
            $fthAns="Cheveux roux";
            $coorect_answer=3;
            $id=16;
            $sql="INSERT INTO intrebariFr(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="Qui est la petite amie de Spider-Man ?";
            $firstAns="Cat Woman";
            $secAns="Mary Jane Watson";
            $trdAns="Susan Storm";
            $fthAns="Wonder Woman";
            $coorect_answer=2;
            $id=17;
            $sql="INSERT INTO intrebariFr(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="Quel est le vrai nom de Captain America ?";
            $firstAns="Steven Rogers";
            $secAns="Peter Parker";
            $trdAns="Robert Bruce Banner";
            $fthAns="Anthony Stark";
            $coorect_answer=1;
            $id=18;
            $sql="INSERT INTO intrebariFr(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="Quelle est la couleur des yeux de Wolverine ?";
            $firstAns="Yeux bleus";
            $secAns="Yeux violets";
            $trdAns="Yeux verts";
            $fthAns="Yeux marrons";
            $coorect_answer=1;
            $id=19;
            $sql="INSERT INTO intrebariFr(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="Quand Iron Man est-il apparu pour la première fois ?";
            $firstAns="1974";
            $secAns="1962";
            $trdAns="1941";
            $fthAns=$data[12];
            $coorect_answer=4;
            $id=20;
            $sql="INSERT INTO intrebariFr(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="Dans quelle catégorie de personnages retrouve-t-on Nicholas Fury ?";
            $firstAns=mysqli_real_escape_string($conn,"Caractères neutres");
            $secAns=mysqli_real_escape_string($conn,"Bons caractères");
            $trdAns=mysqli_real_escape_string($conn,"Mauvais caractères");
            $fthAns="Pas connu";
            $coorect_answer=1;
            $id=21;
            $sql="INSERT INTO intrebariFr(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="Quelle couleur de cheveux a Deadpool ?";
            $firstAns="Cheveux bruns";
            $secAns="Cheveux blancs";
            $trdAns="Cheveux roux";
            $fthAns="Chauve";
            $coorect_answer=4;
            $id=22;
            $sql="INSERT INTO intrebariFr(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="Quelle arme Thor utilise-t-il fréquemment ?";
            $firstAns="Fusil à pompe";
            $secAns="Marteau";
            $trdAns="Hache"; 
            $fthAns="Épée";
            $coorect_answer=2;
            $id=23;
            $sql="INSERT INTO intrebariFr(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="Quand Benjamin Grimm est-il apparu pour la première fois ?";
            $firstAns="1965";
            $secAns="1960";
            $trdAns= $data[12]; 
            $fthAns="1971";
            $coorect_answer=3;
            $id=24;
            $sql="INSERT INTO intrebariFr(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
             $question_game="Dans quelle catégorie de personnage retrouve-t-on Reed Richards ?";
             $firstAns="Pas connu";
             $secAns="Personnages décédés";
             $trdAns="Personnages Immortels"; 
             $fthAns="Personnages vivants";
             $coorect_answer=4;
             $id=25;
            $sql="INSERT INTO intrebariFr(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="De quel super pouvoir dispose Jonathan Storm ?";
            $firstAns="Élastique";
            $secAns="Torche humaine";
            $trdAns="Super force"; 
            $fthAns="Invisible";
            $coorect_answer=2;
            $id=26;
            $sql="INSERT INTO intrebariFr(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
             $question_game="Quelle couleur de cheveux a Susan Storm ?";
             $firstAns="Cheveux blonds";
             $secAns="Cheveux noirs";
             $trdAns="Cheveux bruns"; 
             $fthAns="Cheveux violets";
			 $coorect_answer=1;
             $id=27;
            $sql="INSERT INTO intrebariFr(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="Quel est le vrai nom de Hulk ?";
            $firstAns="Robert Bruce Banner";
            $secAns="Henry McCoy";
            $trdAns="Kurt Wagner"; 
            $fthAns="Carol Danvers";
			$coorect_answer=1;
            $id=28;
            $sql="INSERT INTO intrebariFr(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
             $question_game="Quelle est la couleur des yeux de Stephen Strange ?";
             $firstAns="Yeux marrons";
             $secAns="Yeux gris";
             $trdAns="Yeux verts"; 
             $fthAns="Yeux bleus";
             $coorect_answer=2;
             $id=29;
            $sql="INSERT INTO intrebariFr(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="Pourquoi Otto Octavius ​​est-il si important pour Spider-Man ?";
            $firstAns="Il est son grand ennemi";
            $secAns="Il est son père";
            $trdAns="Il est son mentor"; 
            $fthAns="C'est son meilleur ami";
			$coorect_answer=3;
            $id=30;
            $sql="INSERT INTO intrebariFr(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="Quel super-héros Luke Cage remplace-t-il dans Fantastic 4 ?";
            $firstAns="Benjamin Grimm";
            $secAns="Reed Richards";
            $trdAns="Jonathan Storm "; 
            $fthAns="Susan Storm";
			$coorect_answer=1;
            $id=31;
            $sql="INSERT INTO intrebariFr(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="Lequel des noms suivants est le nom de super-héros de Frank Castle ?";
            $firstAns="Antman";
            $secAns="Black Panther";
            $trdAns="Daredevil";
            $fthAns="The Punisher";
			$coorect_answer=4;
            $id=32;
            $sql="INSERT INTO intrebariFr(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="Dans quelle catégorie de personnages retrouve-t-on Clinton Barton ?";
            $firstAns="Bons caractères";
            $secAns="Caractères neutres";
            $trdAns="Mauvais caractères"; 
            $fthAns="Pas connu";
			$coorect_answer=1;
            $id=33;
            $sql="INSERT INTO intrebariFr(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="Pourquoi Natalia Romanova est-elle l'une des super-héros les plus intelligentes ?";
            $firstAns="Elle était très bonne au lycée";
            $secAns="Elle a été un agent du KGB";
            $trdAns="Elle est née intelligente"; 
            $fthAns="Elle semble juste intelligente mais elle ne l'est pas";
			$coorect_answer=2;
            $id=34;
            $sql="INSERT INTO intrebariFr(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="Quelle couleur de cheveux a Matthew Murdock ?";
            $firstAns="Cheveux gris";
            $secAns="Cheveux verts";
            $trdAns="Cheveux blonds"; 
            $fthAns="Cheveux roux";
			$coorect_answer=4;
            $id=35;
            $sql="INSERT INTO intrebariFr(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="Quand le professeur X est-il apparu pour la première fois ?";
            $firstAns="1962";
            $secAns=$data[12];
            $trdAns="1973"; 
            $fthAns="1958";
			$coorect_answer=2;
            $id=36;
            $sql="INSERT INTO intrebariFr(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="Quelle sorte d'identité Hercule a-t-il ?";
            $firstAns="Identité publique";
            $secAns="Identité secrète";
            $trdAns="Pas de double identité"; 
            $fthAns="Pas de la Terre";
			$coorect_answer=3;
            $id=37;
            $sql="INSERT INTO intrebariFr(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="Quelle est la couleur de peau de Hulk ?";
            $firstAns="Jaune";
            $secAns="Rouge";
            $trdAns="Verte"; 
            $fthAns="Bleue";
			$coorect_answer=3;
            $id=38;
            $sql="INSERT INTO intrebariFr(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="Quelle est la couleur des yeux de Spider-Man ?";
            $firstAns="Yeux verts";
            $secAns="Yeux marrons";
            $trdAns="Des yeux noisette"; 
            $fthAns="Yeux bleus";
			$coorect_answer=3;
            $id=39;
            $sql="INSERT INTO intrebariFr(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="Quelle couleur de cheveux a Captain America ?";
            $firstAns="Cheveux blond";
            $secAns="Cheveux bruns";	
            $trdAns="Cheveux blancs"; 
            $fthAns="Chauve";
			$coorect_answer=3;
            $id=40;
            $sql="INSERT INTO intrebariFr(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="Quel genre d'identité Thor a-t-il?";
            $firstAns="Identité publique";
            $secAns="Identité secrète";
            $trdAns="Pas de double identité"; 
            $fthAns="Pas connu";
			$coorect_answer=3;
            $id=41;
            $sql="INSERT INTO intrebariFr(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="Quel super pouvoir possède Wolverine ?";
            $firstAns="Os d'adamantium";
            $secAns="En volant";
            $trdAns="Invisible"; 
            $fthAns="Rien de ce qui précède";
			$coorect_answer=1;
            $id=42;
            $sql="INSERT INTO intrebariFr(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="Dans quelle catégorie de personnages retrouve-t-on Iron Man ?";
            $firstAns="Personnages décédés";
            $secAns="Personnages vivants";
            $trdAns="Pas connu"; 
            $fthAns="Personnages Immortels";
			$coorect_answer=2;
            $id=43;
            $sql="INSERT INTO intrebariFr(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="Dans quelle catégorie de personnages retrouve-t-on Frank Castle ?";
            $firstAns="Caractères neutres";
            $secAns="Bons caractères";
            $trdAns="Mauvais caractères"; 
            $fthAns="Pas connu";
			$coorect_answer=1;
            $id=44;
            $sql="INSERT INTO intrebariFr(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="Quelle couleur de cheveux a Nicholas Fury ?";
            $firstAns="Chauve";
            $secAns="Cheveux noirs";
            $trdAns="Cheveux blonds"; 
            $fthAns="Cheveux bruns";
			$coorect_answer=4;
            $id=45;
            $sql="INSERT INTO intrebariFr(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="Dans quelle catégorie de personnages retrouve-t-on Deadpool ?";
            $firstAns="Caractères neutres";
            $secAns="Bons caractères";
            $trdAns="Mauvais caractères"; 
            $fthAns="Pas connu";
			$coorect_answer=1;
            $id=46;
            $sql="INSERT INTO intrebariFr(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="Quelle est la couleur des yeux d'Otto Octavius ​​?";
            $firstAns="Yeux violets";
            $secAns="Yeux marrons";
            $trdAns="Yeux verts"; 
            $fthAns="Des yeux noisette";
			$coorect_answer=4;
            $id=47;
            $sql="INSERT INTO intrebariFr(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="Combien d'apparitions Luke Cage a-t-il ?";
            $firstAns="930";
            $secAns=$data[10];
            $trdAns="790"; 
            $fthAns="1032";
			$coorect_answer=2;
            $id=48;
            $sql="INSERT INTO intrebariFr(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
            $question_game="Quelle couleur de cheveux a Natalia Romanova ?";
            $firstAns="Chauve";
            $secAns="Cheveux bruns";
            $trdAns="Cheveux blond"; 
            $fthAns="Cheveux roux";
			$coorect_answer=4;
            $id=49;
            $sql="INSERT INTO intrebariFr(stage,idQuestion,question,answera, answerb, answerc, answerd,correct) VALUES (?,?,?,?,?,?,?,?);";
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
