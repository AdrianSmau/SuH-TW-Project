unlocks = document.getElementsByClassName("unlocked");
locks = document.getElementsByClassName("locked");
completes = document.getElementsByClassName("completed");

window.addEventListener("load", function() {
    for (var i = 0; i < unlocks.length; i++) {
        /*STATUS*/
        unlocks[i].childNodes[5].childNodes[1].innerText = "Status: Debloque";
        /*SCORE*/
        unlocks[i].childNodes[5].childNodes[3].innerText = "But: Pas encore joue";
        /*TIME*/
        unlocks[i].childNodes[5].childNodes[5].innerText = "Temps: Pas encore joue";
    }
    for (var i = 0; i < locks.length; i++) {
        /*STATUS*/
        locks[i].childNodes[5].childNodes[1].innerText = "Status: Ferme";
        /*SCORE*/
        locks[i].childNodes[5].childNodes[3].innerText = "But: Pas encore joue";
        /*TIME*/
        locks[i].childNodes[5].childNodes[5].innerText = "Temps: Pas encore joue";
    }
    for (var i = 0; i < completes.length; i++) {
        completedStageNum = i + 1;
        /*STATUS*/
        completes[i].childNodes[5].childNodes[1].innerText = "Status: Complete";
        /*SCORE*/
        scoreCompletes = completes[i].childNodes[5].childNodes[3];
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                scoreCompletes.innerText = "But: " + this.responseText;
            }
            if (this.readyState == 4 && this.status == 401) {
                alert("Something went wrong with the AJAX call!");
            }
        };
        xhttp.open("GET", "../../app/models/AddScore.php?getScore=true&id=" + window.userId + "&stage=" + completedStageNum, false);
        xhttp.send();
        /*TIME*/
        timeCompletes = completes[i].childNodes[5].childNodes[5];

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                timeCompletes.innerText = "Temps: " + this.responseText + " seconde(s)";
            }
            if (this.readyState == 4 && this.status == 401) {
                alert("Something went wrong with the AJAX call!");
            }
        };
        xhttp.open("GET", "../../app/models/AddScore.php?getTime=true&id=" + window.userId + "&stage=" + completedStageNum, false);
        xhttp.send();
    }
})