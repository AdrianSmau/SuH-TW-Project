unlocks = document.getElementsByClassName("unlocked");
locks = document.getElementsByClassName("locked");
completes = document.getElementsByClassName("completed");

window.addEventListener("load", function() {
    for (var i = 0; i < unlocks.length; i++) {
        /*STATUS*/
        unlocks[i].childNodes[5].childNodes[1].innerText = "Status: Unlocked";
        /*SCORE*/
        unlocks[i].childNodes[5].childNodes[3].innerText = "Score: Not yet played";
        /*TIME*/
        unlocks[i].childNodes[5].childNodes[5].innerText = "Time: Not yet played";
    }
    for (var i = 0; i < locks.length; i++) {
        /*STATUS*/
        locks[i].childNodes[5].childNodes[1].innerText = "Status: Locked";
        /*SCORE*/
        locks[i].childNodes[5].childNodes[3].innerText = "Score: Not yet played";
        /*TIME*/
        locks[i].childNodes[5].childNodes[5].innerText = "Time: Not yet played";
    }
    for (var i = 0; i < completes.length; i++) {
        /*STATUS*/
        completes[i].childNodes[5].childNodes[1].innerText = "Status: Completed";
        /*SCORE*/
        completes[i].childNodes[5].childNodes[3].innerText = "Score: BACKEND!!!";
        /*TIME*/
        completes[i].childNodes[5].childNodes[5].innerText = "Time: BACKEND!!!";
    }
})