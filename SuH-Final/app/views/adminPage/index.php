<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="../../../public/css/adminPage.css" rel="stylesheet">
   <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
   <link rel="icon" href="/favicon.ico" type="image/x-icon">
   <link href="../../../public/images/Favicon/favicon.ico" rel="icon" type="image/x-icon">
   <title>Admin Page</title>
</head>

<body>
   <div class="pre-loader">
      <img src="../../../public/images/Loading-Gifs/ezgif-4-45b3fdafc22a.gif" alt="Loading...">
   </div>
   <h1> <?php echo __('WELCOME MASTER ADMIN', $data['translate']); ?> </h1>
   <form class="form" method="POST">
      <div class="users">
         <div class="kick-player">
            <a><?php echo __('KICK PLAYER', $data['translate']); ?> : </a>
            <input type="text" name="kick-player" placeholder="<?php echo __('Enter Player\'s username', $data['translate']); ?>">
            <button type="submit" name="kick-button"><?php echo __('KICK', $data['translate']); ?></button>
         </div>
         <div class="make-admin">
            <a><?php echo __('PROMOTE TO ADMIN', $data['translate']); ?>: </a>
            <input type="text" name="promote-player" placeholder="<?php echo __('Enter Player\'s username', $data['translate']); ?>">
            <button type="submit" name="promote-button"><?php echo __('PROMOTE', $data['translate']); ?></button>
         </div>
      </div>
      <div class="change-question">
         <a><?php echo __('CHANGE QUESTION', $data['translate']); ?>: </a>
         <input type="text" name="idQuestion" placeholder="<?php echo __('Enter Question\'s ID', $data['translate']); ?>">
         <input type="text" name="newQuestion" placeholder="<?php echo __('Enter New Question', $data['translate']); ?>">
         <input type="text" name="answer1" placeholder="<?php echo __('Enter Answer', $data['translate']); ?> A">
         <input type="text" name="answer2" placeholder="<?php echo __('Enter Answer', $data['translate']); ?> B">
         <input type="text" name="answer3" placeholder="<?php echo __('Enter Answer', $data['translate']); ?> C">
         <input type="text" name="answer4" placeholder="<?php echo __('Enter Answer', $data['translate']); ?> D">
         <input type="text" name="answerCorrect" placeholder="<?php echo __('Enter Correct Answer', $data['translate']); ?>">
         <button type="submit" name="change-button"><?php echo __('SUBMIT CHANGES', $data['translate']); ?></button>
      </div>
   </form>
   <a href="/public/mainmenu">
        <div class="back-button grow">
            <img src="/public/images/AdminPage/BackButtonYellow.png" alt="Back to Main Menu">
        </div>
    </a>
   <div id="popup-modal">
      <div id="popup">
         <span id="popup-symbol" class="ion-checkmark-round"></span>
         <h1 id="popup-text"></h1>
         <a class="close"><?php echo __('Close', $data['translate']); ?></a>
      </div>
   </div>
   <?php
   $jsNeeded = 0;
   if (isset($data['message'])) {
      $jsNeeded = 1;
   }
   ?>
   <script type="text/javascript">
      var jsNeeded = '<?php echo $jsNeeded; ?>';
      if (jsNeeded == 1) {
         var lang = '<?php echo $data['translate']; ?>';
         var message = '<?php echo $data['message']; ?>';
         var modal = document.getElementById("popup-modal");
         var msg = document.getElementById("popup-text");
         var symbol = document.getElementById("popup-symbol");

         symbol.style.color = "#ED1D24";
         if(lang=="ENGLISH")
            symbol.innerText = 'Error Message!';
         else if(lang=="FRENCH")
            symbol.innerText = 'Message d\'erreur!';
         else{
            symbol.innerText = 'Fehlermeldung!';
         }
         if(message=="Fill fields!"){
            if(lang=="ENGLISH")
            {
               msg.innerText ="Fill fields!";
            }
            else if(lang == "FRENCH")
            {  
               msg.innerText ="Remplissez les champs!" ;
            }
            else{
               msg.innerText = "Felder ausfüllen!";
            }
         }
         if(message=="You cannot kick yourself!"){
            if(lang=="ENGLISH")
            {
               msg.innerText ="You cannot kick yourself!" ;
            }
            else if(lang == "FRENCH")
            {
               msg.innerText ="Vous ne pouvez pas vous expulsez!" ;
            }
            else{
               msg.innerText ="Du kannst dich nicht selbst treten!" ;
            }
         }
         if(message=="No existing user!"){
            if(lang=="ENGLISH")
            {
               msg.innerText ="No existing user!" ;
            }
            else if(lang == "FRENCH")
            {
               msg.innerText = "Aucun utilisateur existant!";
            }
            else{
               msg.innerText ="Kein vorhandener Benutzer!" ;
            }
         }
         if(message=="User already Admin!"){
            if(lang=="ENGLISH")
            {
               msg.innerText ="User already Admin!" ;
            }
            else if(lang == "FRENCH")
            {
               msg.innerText = "Utilisateur déjà administrateur!";
            }
            else{
               msg.innerText ="Benutzer bereits Admin!" ;
            }
         }
         if(message=="Fill all fields!"){
            if(lang=="ENGLISH")
            {
               msg.innerText ="Fill all fields!" ;
            }
            else if(lang == "FRENCH")
            {
               msg.innerText = "Remplissez tous les champs!";
            }
            else{
               msg.innerText = "Füllen Sie alle Felder aus!";
            }
         }
         if(message=="No existing question!"){
            if(lang=="ENGLISH")
            {
               msg.innerText ="No existing question!" ;
            }
            else if(lang == "FRENCH")
            {
               msg.innerText ="Aucune question existante!" ;
            }
            else{
               msg.innerText ="Keine vorhandene Frage!" ;
            }
         }


         modal.style.display = "block";

         var span = document.getElementsByClassName("close")[0];

         span.onclick = function() {
            modal.style.display = "none";
         }

         window.onclick = function(event) {
            if (event.target == modal) {
               modal.style.display = "none";
            }
         }
      }
   </script>
   <script src="../../../public/scripts/preLoader.js"></script>
</body>