var modal = document.getElementById("difficultyModal");

unlocks = document.getElementsByClassName("unlocked");
completes = document.getElementsByClassName("completed");

console.log(unlocks[0].childNodes[1]);

for (var i = 0; i < unlocks.length; i++) {
    unlocks[i].childNodes[1].onclick = function() {
        modal.style.display = "block";
    }
}

for (var i = 0; i < completes.length; i++) {
    completes[i].childNodes[1].onclick = function() {
        modal.style.display = "block";
    }
}

var span = document.getElementsByClassName("close")[0];

span.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}