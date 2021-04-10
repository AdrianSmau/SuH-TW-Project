unlocks = document.getElementsByClassName("unlocked");
locks = document.getElementsByClassName("locked");
completes = document.getElementsByClassName("completed");

window.addEventListener("load", function() {
    for (var i = 0; i < unlocks.length; i++) {
        unlocks[i].childNodes[1].src = "images/Neon/Star.png";
    }
    for (var i = 0; i < locks.length; i++) {
        locks[i].childNodes[1].src = "images/Neon/Lock.png";
    }
    for (var i = 0; i < completes.length; i++) {
        completes[i].childNodes[1].src = "images/Neon/Checked.png";
    }
})