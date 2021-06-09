const question = document.querySelector('#question');
const choices = Array.from(document.querySelectorAll('.choice-text'));
const progressText = document.querySelector('#progressText');
const livesText = document.querySelector('#lives');
const hudPrefixText = document.querySelector('#hud-prefix');
const progressBarFull = document.querySelector('#progressBarFull');

hudPrefixText.innerText = hudPrefixText.innerText + ' (' + window.difficultyLevel + ')'

let initial_lives = 0;
let multiplier = 0;

if (window.difficultyLevel === 'EASY' || window.difficultyLevel === 'Facile' || window.difficultyLevel === 'Einfach') {
    livesText.innerText = 3;
    initial_lives = 3;
    multiplier = 1;
} else {
    if (window.difficultyLevel === 'MEDIUM' || window.difficultyLevel === 'Moyen' || window.difficultyLevel === 'Mittel') {
        livesText.innerText = 2;
        initial_lives = 2;
        multiplier = 3;
    } else {
        if (window.difficultyLevel === 'HARD' || window.difficultyLevel === 'Difficile' || window.difficultyLevel === 'Schwer') {
            livesText.innerText = 1;
            initial_lives = 1;
            multiplier = 5;
        } else {
            livesText.innerText = 0;
            initial_lives = 0;
            multiplier = 0;
        }
    }
}

let currentQuestion = {};
let acceptingAnswers = true;
let score = 0;
let lives = initial_lives;
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
xhttp.open("GET", "../../app/models/GetStageData.php?stage=" + window.stageNum + "&lang=" + window.lang, false);
xhttp.send();

let questions = arr;

const SCORE_POINTS = 100;
const LIVES_TAKEN = 1;
const MAX_QUESTIONS = 7;

startGame = () => {
    questionCounter = 0;
    lives = initial_lives;
    score = 0;
    availableQuestions = [...questions];
    window.startTime = Date.now();
    getNewQuestion();
}

getNewQuestion = () => {
    questionCounter++;
    if (lives === 0 || availableQuestions === 0 || questionCounter > MAX_QUESTIONS) {
        if (lives === 0) {
            var time = Math.round((Date.now() - window.startTime) / 1000);

            if(window.lang==="ENGLISH")
            {
                hudPrefixText.innerText = "Quiz Failed!";
                livesText.innerText = "Lives left: 0";
            }
            else if(window.lang==="FRENCH")
            {
                hudPrefixText.innerText = "Échec du quiz!";
                livesText.innerText = "Vies restantes : 0";
            }
            else{
                hudPrefixText.innerText = "Quiz fehlgeschlagen!";
                livesText.innerText = "Lebt übrig: 0";
            }

            //Pop-up alert
            var modal = document.getElementById("popup-modal");
            var msg = document.getElementById("popup-text");
            var symbol = document.getElementById("popup-symbol");

            symbol.style.color = "#ED1D24";
            if(window.lang==="ENGLISH"){
                symbol.innerText = 'Close one! Try again!';
                msg.innerText = "You did not pass this stage! The stage took you " + time + " second(s)! You will be redirected to the Game Map!";
            }
            else if(window.lang==="FRENCH")
            {
                symbol.innerText = 'Fermez-en un ! Réessayer!';
                msg.innerText = "Vous n'avez pas passé cette étape ! L'étape vous a pris " + time + " seconde(s)! Vous serez redirigé vers la carte du jeu!";
            }
            else {
                symbol.innerText = 'Schließen Sie einen! Versuchen Sie es nochmal!';
                msg.innerText = "Sie haben diese Phase nicht bestanden! Die Etappe hat " + time + " sekunde(n) gedauert! Sie werden zur Spielkarte weitergeleitet!";
            }
            modal.style.display = "block";
            var span = document.getElementsByClassName("close")[0];

            span.onclick = function() {
                    modal.style.display = "none";
                    return window.location.assign("/public/gamemap");
                }
                //End of Pop-up
        } else {
            if (questionCounter > MAX_QUESTIONS) {
                var time = Math.round((Date.now() - window.startTime) / 1000);
                hudPrefixText.innerText = "Total Score";
                var finalScore = Math.round(score * multiplier * (lives / initial_lives));
                livesText.innerText = finalScore;
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        console.log("AJAX call for adding score successful!");
                    }
                    if (this.readyState == 4 && this.status == 401) {
                        alert("Something went wrong with the AJAX call!");
                    }
                };
                xhttp.open("GET", "../../app/models/AddScore.php?add=true&id=" + window.id + "&stage=" + window.stageNum + "&score=" + finalScore + "&time=" + time, true);
                xhttp.send();
                //Pop-up alert
                var modal = document.getElementById("popup-modal");
                var msg = document.getElementById("popup-text");
                var symbol = document.getElementById("popup-symbol");

                symbol.style.color = "#2dc937";
                if(window.lang==="ENGLISH")
                {
                    symbol.innerText = 'Congrats! Stage passed!';
                    msg.innerText = "You completed Stage " + window.stageNum + ", on difficulty " + window.difficultyLevel + ",in " + time + " second(s), with the final score of " + finalScore + "!\nRedirecting to Game Map!...";
                }
                else if(window.lang==="FRENCH")
                {
                    symbol.innerText = 'Félicitations! Étape passée!';
                    msg.innerText = "Vous avez terminé l'étape " + window.stageNum + ", en difficulté  " + window.difficultyLevel + ",en " + time + " seconde(s), avec le score final de " + finalScore + "!\nRedirection vers la carte du jeu !...";
                }
                else{
                    symbol.innerText = 'Glückwunsch! Etappe bestanden!';
                    msg.innerText = "Du hast Stufe " + window.stageNum + ", im Schwierigkeitsgrad  " + window.difficultyLevel + ",in " + time + " sekunden abgeschlossen, mit der Endpunktzahl von " + finalScore + "!\nWeiterleitung zur Spielkarte!...";
                }
                modal.style.display = "block";
                var span = document.getElementsByClassName("close")[0];

                span.onclick = function() {
                        modal.style.display = "none";
                        return window.location.assign("/public/gamemap");
                    }
                    //End of Pop-up
            } else {
                return window.location.assign("/public/gamemap");
            }
        }
    }
    var questText = questionCounter.toString();
    if(window.lang==="ENGLISH")
    {
    progressText.innerText = 'Question ' + questText + ' out of ' + MAX_QUESTIONS.toString();
    }
    else if(window.lang==="FRENCH")
    {
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
        } else {
            takeAwayLife(LIVES_TAKEN);
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
}

takeAwayLife = num => {
    lives -= num;
    livesText.innerText = lives;
}

function sleep(millisecs) {
    const date = Date.now();
    let currentDate = null;
    do {
        currentDate = Date.now();
    } while (currentDate - date < millisecs)
}

startGame();