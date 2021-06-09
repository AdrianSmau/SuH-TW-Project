scoretext = document.getElementById("score-text");
myprogressbar = document.getElementById("id-progress-bar");
myprogressbarwrapper = document.getElementById("id-wrapper-progress-bar");
myprogressbartext = document.getElementById("progress-bar-text");


window.addEventListener("load", function() {
    increment();
})

function increment() {
    scoretext.innerText = userProgress + " / 7";
    fill(userProgress, 7);
}

function fill(score, outof) {
    var wrapper_width = myprogressbarwrapper.offsetWidth;
    var new_width = (score * wrapper_width) / outof;
    var percent = (score * 100) / outof;
    if (percent == 100) {
        myprogressbartext.innerText = "100%";
    } else {
        if (percent > 5) {
            myprogressbartext.innerText = parseInt(percent) + "%";
        } else {
            myprogressbartext.innerText = "";
        }
    }
    if (new_width <= wrapper_width) {
        myprogressbar.style.width = new_width + "px";
    } else {
        myprogressbar.style.width = "0";
    }
}