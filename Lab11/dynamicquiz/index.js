var currentQuestion = 0;
var score = 0;

var questions = [
    {
        question: "What is the capital of France?",
        options: ["Berlin", "Madrid", "Paris", "Rome"],
        correctAnswer: "Paris"
    },
    {
        question: "Which programming language is used for web development?",
        options: ["Java", "Python", "JavaScript", "C++"],
        correctAnswer: "JavaScript"
    },
    {
        question: "2+2?",
        options: ["5", "kiba", "aboba", "4"],
        correctAnswer: "4"
    },
];

document.addEventListener("DOMContentLoaded", function() {
    loadQuestion();

    document.getElementById("next-button").addEventListener("click", function() {
        var selectedOption = document.querySelector('input[name="option"]:checked');
        
        if (selectedOption) {
            if (selectedOption.value === questions[currentQuestion].correctAnswer) {
                score++;
            }

            currentQuestion++;

            if (currentQuestion < questions.length) {
                loadQuestion();
            } else {
                showResult();
            }
        }
    });
});

function loadQuestion() {
    var questionContainer = document.getElementById("question-container");
    var optionsContainer = document.getElementById("options-container");
    var currentQuestionData = questions[currentQuestion];

    questionContainer.innerHTML = "<p>" + currentQuestionData.question + "</p>";

    optionsContainer.innerHTML = "";
    for (var i = 0; i < currentQuestionData.options.length; i++) {
        optionsContainer.innerHTML += `
            <label>
                <input type="radio" name="option" value="${currentQuestionData.options[i]}">
                ${currentQuestionData.options[i]}
            </label>
        `;
    }
}

function showResult() {
    var quizContainer = document.getElementById("quiz-container");
    quizContainer.innerHTML = `
        <h1>Quiz Completed</h1>
        <p>Your score: ${score} out of ${questions.length}</p>
    `;
}
