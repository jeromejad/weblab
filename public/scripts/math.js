let firstNumber = parseInt(Math.random()*10);
let secondNumber = parseInt(Math.random()*10);

//get the total
let total = firstNumber + secondNumber;

//display numbers on the canvas
let primary = document.getElementById('primary-number');
for(var i =1; i<= firstNumber; i++){
    $(primary).append('<div id="r'+ i +'" class="ball"></div>');
  }



let secondary = document.getElementById('secondary-number');
for(var i =1; i<= secondNumber; i++){
    $(secondary).append('<div id="r'+ i +'" class="ball"></div>');
  }


//get guess from user
let button = document.getElementById('btn')

button.addEventListener('click', function(){

let guess = document.getElementById('guess').value;
    guess = Number(guess);
//check answer
if (guess === total){
    alert('Correct');
    window.location.reload()
} else {
    alert('Sorry. Incorrect. The correct answer was ' + total + '.')
    window.location.reload()

}
    });