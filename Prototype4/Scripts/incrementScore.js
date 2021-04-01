scorepannel = document.getElementById("score-pannel");
scoretext = document.getElementById("score-text");
myprogressbar = document.getElementById("id-progress-bar");
myprogressbarwrapper = document.getElementById("id-wrapper-progress-bar");
myprogressbartext = document.getElementById("progress-bar-text");

scorepannel.onclick = function() { increment() };

function increment() {
    var score = parseInt(scoretext.getAttribute("score"));
    if (score < 35) {
        var new_score = score + 5;
        if (new_score < 35) {
            scoretext.setAttribute("score", new_score);
            scoretext.innerText = new_score + "/35";
            fill(new_score, 35);
        } else {
            scoretext.setAttribute("score", 35);
            scoretext.innerText = "35/35";
            fill(35, 35);
        }
    } else {
        var new_score = 0;
        scoretext.setAttribute("score", 0);
        scoretext.innerText = 0 + "/35";
        fill(0, 35);
    }
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