var modal = document.getElementById("difficultyModal");

var unlocks = document.getElementsByClassName("unlocked");
var completes = document.getElementsByClassName("completed");

var selector = document.getElementById("difficultySelector");
var stage = document.getElementById("stageInput");
var difficulty = document.getElementById("difficultyInput");
var hiddenForm = document.getElementById("hiddenForm");

var playBtn = document.getElementById("playBtn");
var currentStage = 0;

var isCompleted = 0;

// Completes

if (completes.length >= 1) {
    completes[0].childNodes[1].onclick = function() {
        isCompleted = 1;
        currentStage = 1;
        modal.style.display = "block";
    }
}
if (completes.length >= 2) {
    completes[1].childNodes[1].onclick = function() {
        isCompleted = 1;
        currentStage = 2;
        modal.style.display = "block";
    }
}
if (completes.length >= 3) {
    completes[2].childNodes[1].onclick = function() {
        isCompleted = 1;
        currentStage = 3;
        modal.style.display = "block";
    }
}
if (completes.length >= 4) {
    completes[3].childNodes[1].onclick = function() {
        isCompleted = 1;
        currentStage = 4;
        modal.style.display = "block";
    }
}
if (completes.length >= 5) {
    completes[4].childNodes[1].onclick = function() {
        isCompleted = 1;
        currentStage = 5;
        modal.style.display = "block";
    }
}
if (completes.length >= 6) {
    completes[5].childNodes[1].onclick = function() {
        isCompleted = 1;
        currentStage = 6;
        modal.style.display = "block";
    }
}
if (completes.length >= 7) {
    completes[6].childNodes[1].onclick = function() {
        isCompleted = 1;
        currentStage = 7;
        modal.style.display = "block";
    }
}

// Unlocks

unlocks[0].childNodes[1].onclick = function() {
    isCompleted = 0;
    modal.style.display = "block";
}

playBtn.onclick = function() {

    if (isCompleted != 1) {
        currentStage = completes.length + 1;
    }
    stage.value = currentStage;
    difficulty.value = selector.value;
    hiddenForm.submit();
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