const question = document.querySelector('#question');
const choices = Array.from(document.querySelectorAll('.choice-text'));
const progressText = document.querySelector('#progressText');
const livesText = document.querySelector('#lives');
const hudPrefixText = document.querySelector('#hud-prefix');
const progressBarFull = document.querySelector('#progressBarFull');

let currentQuestion = {};
let acceptingAnswers = true;
let score = 0;
let lives = 3;
let initial_lives = 3;
let questionCounter = 0;
let availableQuestions = [];

let questions = [{
        question: "What is 2 plus 2?",
        choice1: '2',
        choice2: '4',
        choice3: '21',
        choice4: '17',
        answer: 2,

    },
    {
        question: "When was Marvel created?",
        choice1: '2001',
        choice2: '1867',
        choice3: '1992',
        choice4: '1939',
        answer: 4,

    },
    {
        question: "When was DC Comics created?",
        choice1: '2002',
        choice2: '1912',
        choice3: '1934',
        choice4: '1967',
        answer: 3,

    },
    {
        question: "Who is Batman's sidekick?",
        choice1: 'Robin',
        choice2: 'Green Lantern',
        choice3: 'Catwoman',
        choice4: 'Magneto',
        answer: 1,

    }
]

const SCORE_POINTS = 100;
const LIVES_TAKEN = 1;
const MAX_QUESTIONS = 4;

startGame = () => {
    questionCounter = 0;
    lives = 3;
    score = 0;
    availableQuestions = [...questions];
    getNewQuestion();
}

getNewQuestion = () => {
    questionCounter++;
    if (lives === 0 || availableQuestions === 0 || questionCounter > MAX_QUESTIONS) {
        if (lives === 0) {
            hudPrefixText.innerText = "Quiz Failed!";
            livesText.innerText = "Lives left: 0"
            sleep(1000);
            return window.location.assign("C:/Users/adria/Desktop/Prototype4/MainMenu.html");
        } else {
            if (questionCounter > MAX_QUESTIONS) {
                hudPrefixText.innerText = "Total Score"
                livesText.innerText = (score * (6 - initial_lives));
                localStorage.setItem('mostRecentScore', (score * (6 - initial_lives)));
                sleep(1000);
                return window.location.assign("C:/Users/adria/Desktop/Prototype4/MainMenu.html");
            } else {
                return window.location.assign("C:/Users/adria/Desktop/Prototype4/MainMenu.html");
            }
        }
    }
    var questText = questionCounter.toString();
    progressText.innerText = 'Question ' + questText + ' out of ' + MAX_QUESTIONS.toString();
    progressBarFull.style.width = ((questionCounter / MAX_QUESTIONS) * 100).toString() + '%';
    const questionIndex = Math.floor(Math.random() * availableQuestions.length);
    currentQuestion = availableQuestions[questionIndex];
    question.innerText = currentQuestion.question;

    choices.forEach(choice => {
        const number = choice.dataset['number'];
        choice.innerText = currentQuestion['choice' + number];
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

        let classToApply = selectedAnswer == currentQuestion.answer ? 'correct' : 'incorrect';

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