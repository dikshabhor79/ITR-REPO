const startBtn =document.querySelector('.start-btn');
const popupInfo =document.querySelector('.popup-info');
const exitBtn =document.querySelector('.exit-btn');
const m1 =document.querySelector('.m1');
const continueBtn =document.querySelector('.continue-btn');
const  quizSection =document.querySelector('.quiz-sec');
const  quizBox =document.querySelector('.quiz-box');
const  resulBox =document.querySelector('.result-box');
const  tryAgainBtn =document.querySelector('.tryAgain-btn');
const  goHomeBtn =document.querySelector('.goHome-btn');


startBtn.onclick= () =>{
    popupInfo.classList.add('active');
    m1.classList.add('active');
}

exitBtn.onclick= () =>{
    popupInfo.classList.remove('active');
    m1.classList.remove('active');
}

continueBtn.onclick= () =>{
    quizSection.classList.add('active');
    popupInfo.classList.remove('active');
    m1.classList.remove('active');
    quizBox.classList.add('active');

    showQuestions(0);
    questionCounter(1);
    headerScore();

}

tryAgainBtn.onclick= () =>{
    quizBox.classList.add('active');
    nextBtn.classList.remove('active');
    resulBox.classList.remove('active');

    
     questionCount = 0;
     questionNumb = 1;
     userScore = 0;
      showQuestions(questionCount);
      questionCounter(questionNumb);


      headerScore();
}

goHomeBtn.onclick= () =>{
    quizSection.classList.remove('active');
    nextBtn.classList.remove('active');
    resulBox.classList.remove('active');

     questionCount = 0;
     questionNumb = 1;
     userScore = 0;
      showQuestions(questionCount);
      questionCounter(questionNumb);
}


let questionCount = 0;
let questionNumb = 1;
let userScore = 0;


const nextBtn = document.querySelector('.next-btn');

nextBtn.onclick= () =>{
    if(questionCount<questions.length -1){
    questionCount++;
    showQuestions(questionCount);

    questionNumb++;
    questionCounter(questionNumb);

    nextBtn.classList.remove('active');
    }

    else{
        showResultBox();
    }
}

const optionList = document.querySelector('.option-list');

//getting questions and aptions from array
function showQuestions(index){
    const questionText =document.querySelector('.quetion-text');
    questionText.textContent = `${questions[index].numb}.${questions[index].question}`;

    let optionTag = `<div class="option"><span>${questions[index].options[0]}</span></div>
    <div class="option"><span>${questions[index].options[1]}</span></div>
    <div class="option"><span>${questions[index].options[2]}</span></div>
    <div class="option"><span>${questions[index].options[3]}</span></div>`;

    optionList.innerHTML = optionTag;

    const option =document.querySelectorAll('.option');
    for(let i=0; i<option.length; i++){
        option[i].setAttribute('onclick', 'optionSelected(this)');
    }
}

function optionSelected(answer){
    let userAnswer= answer.textContent;
    let correctAnswer= questions[questionCount].answer;
    let allOptions = optionList.children.length;
   
    if(userAnswer == correctAnswer){
        answer.classList.add('correct');
        userScore += 1;
        headerScore();
    }
    else{
        answer.classList.add('incorrect');

        for(let i=0; i< allOptions; i++){
            if(optionList.children[i].textContent == correctAnswer){
                optionList.children[i].setAttribute('class','option correct');
            }
        }
    }

    //if user has selected, disabled all options
    for (let i=0; i < allOptions; i++){
        optionList.children[i].classList.add('disabled');
    }
    nextBtn.classList.add('active');
}


function questionCounter(index){
    const questionTotal= document.querySelector('.quetion-total');
    questionTotal.textContent= `${index} of ${questions.length} Questions`;
}

function headerScore(){
    const headerScoreText = document.querySelector('.header-score');
    headerScoreText.textContent = `Score: ${userScore}/ ${questions.length}`;
}

function showResultBox(){
    quizBox.classList.remove('active');
    resulBox.classList.add('active');

    const scoreText = document.querySelector('.score-text');
    scoreText.textContent = `You Score ${userScore} out of ${questions.length}`;

    const circularProgress = document.querySelector('.circular-progress');
    const progressValue = document.querySelector('.progress-value');
    let progressStartValue = 0;
    let progressEndValue = (userScore/questions.length)*100;
    let speed = 20;


    let progress= setInterval(() =>{
        progressStartValue++;
        // console.log(progressStartValue);
        progressValue.textContent = `${progressStartValue}%`;
        circularProgress.style.background = `conic-gradient(black ${progressStartValue * 3.6}deg, rgba(20, 28, 28, .1)0deg)`;

        if (progressStartValue == progressEndValue){
            clearInterval(progress);
        }
    }, speed);
}

