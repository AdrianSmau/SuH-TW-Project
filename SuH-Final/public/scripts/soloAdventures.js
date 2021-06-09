const question = document.querySelector('#question');
const choices = Array.from(document.querySelectorAll('.choice-text'));
const progressText = document.querySelector('#progressText');
const scoreText = document.querySelector('#score');
const hudPrefixText = document.querySelector('#hud-prefix');
const progressBarFull = document.querySelector('#progressBarFull');

let currentQuestion = {};
let acceptingAnswers = true;
let score = 0;
let questionCounter = 0;
let availableQuestions = [];

var arr;
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        arr = JSON.parse(this.responseText);
    }
    if (this.readyState == 4 && this.status == 401) {
        alert("Something went wrong with the AJAX call!");
    }
};

xhttp.open("GET", "../../app/models/GetTraining.php?lang=" + window.lang, false);
xhttp.send();

let questions = arr;
const SCORE_POINTS = 100;
const MAX_QUESTIONS = 49;

startGame = () => {
    questionCounter = 0;
    score = 0;
    availableQuestions = [...questions];
    getNewQuestion();
}

getNewQuestion = () => {
    questionCounter++;
    if (availableQuestions === 0 || questionCounter > MAX_QUESTIONS) {
        hudPrefixText.innerText = "Total Score"
            //Pop-up alert
        var modal = document.getElementById("popup-modal");
        var msg = document.getElementById("popup-text");
        var symbol = document.getElementById("popup-symbol");

        symbol.style.color = "#2dc937";
        if(window.lang==="ENGLISH"){
            symbol.innerText = 'Congrats! Stage passed!';
            msg.innerText = "Obtained Score: " + score + " out of 4900!";
        }
        else if(window.lang==="FRENCH"){
            symbol.innerText = 'Félicitations! Étape passée!';
            msg.innerText = "Note obtenue: " + score + " hors de 4900!";
        }
        else{
            symbol.innerText = 'Glückwunsch! Etappe bestanden!';
            msg.innerText = "Erzielte Punktzahl: " + score + " aus 4900!";
        }
        modal.style.display = "block";
        var span = document.getElementsByClassName("close")[0];

        span.onclick = function() {
                modal.style.display = "none";
                return window.location.assign("/public/mainmenu");
            }
            //End of Pop-up
    }
    var questText = questionCounter.toString();
    if(window.lang==="ENGLISH"){
        progressText.innerText = 'Question ' + questText + ' out of ' + MAX_QUESTIONS.toString();
    }
    else if(window.lang==="FRENCH"){
        progressText.innerText = 'Question ' + questText + ' hors de ' + MAX_QUESTIONS.toString();
    }
    else{
        progressText.innerText = 'Frage ' + questText + ' aus ' + MAX_QUESTIONS.toString();
    }
    progressBarFull.style.width = ((questionCounter / MAX_QUESTIONS) * 100).toString() + '%';
    const questionIndex = Math.floor(Math.random() * availableQuestions.length);
    currentQuestion = availableQuestions[questionIndex];
    question.innerText = currentQuestion.question;

    choices.forEach(choice => {
        const number = choice.dataset['number'];
        if (number == 1) {
            choice.innerText = currentQuestion['answer' + 'a'];
        } else {
            if (number == 2) {
                choice.innerText = currentQuestion['answer' + 'b'];
            } else {
                if (number == 3) {
                    choice.innerText = currentQuestion['answer' + 'c'];
                } else {
                    choice.innerText = currentQuestion['answer' + 'd'];
                }
            }
        }
    });

    availableQuestions.splice(questionIndex, 1);
    acceptingAnswers = true;

}

choices.forEach(choice => {
    choice.addEventListener('click', e => {
        if (!acceptingAnswers) return;


        acceptingAnswers = false;
        const selectedChoice = e.target;
        const selectedAnswer = selectedChoice.dataset['number'];

        let classToApply = selectedAnswer == currentQuestion.correct ? 'correct' : 'incorrect';

        if (classToApply === 'correct') {
            incrementScore(SCORE_POINTS);
        }

        selectedChoice.parentElement.classList.add(classToApply);

        setTimeout(() => {
            selectedChoice.parentElement.classList.remove(classToApply);
            getNewQuestion();
        }, 1000);
    })
})

incrementScore = num => {
    score += num;
    scoreText.innerText = score;
}


function sleep(millisecs) {
    const date = Date.now();
    let currentDate = null;
    do {
        currentDate = Date.now();
    } while (currentDate - date < millisecs)
}

startGame();