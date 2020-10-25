
// select buttons
const buttons = document.querySelectorAll('button');

// select the <input type="text" class="display" disabled> element
const display = document.querySelector('.display');
const cdisplay = document.getElementById('cdisplay')

// Using "Arrow function" add eventListener to each button 
buttons.forEach(button => button.addEventListener('click', calculate));

/*
buttons.forEach(function(button) {
  button.addEventListener('click', calculate);
});
*/

function calculate(event) { 
  // current clicked buttons value
  const clickedButtonValue = event.target.value;

  if (clickedButtonValue === '=') {

    if (display.value !== '') {

      // display.value = eval(display.value);
      cdisplay.value = eval(display.value);
    }
  } else if (clickedButtonValue === 'C') {

    display.value = '';
    cdisplay.value = '';
    
  }
  else if (clickedButtonValue === '!') {
    // clear everything on display
    var a = display.value;
    var sum = 1;
    for (let i = a; i >= 1; i--) {
      sum *= i;
    }
    cdisplay.value = sum;

  } else if (clickedButtonValue === '||'){
    var abs = display.value;
    cdisplay.value = abs; 
    if (abs < 0) {
      abs *= -1;
      cdisplay.value = abs;
    } else {display.value = abs;cdisplay.value = abs;}
    
  }else if (clickedButtonValue === 'p'){
    var x = Math.pow(display.value,2);

    cdisplay.value = x;
  }
   
  else {
    // otherwise concatenate it to the display
    display.value += clickedButtonValue;
  }
}


//Change Theme Background
// changeToGreenFunction = () => document.getElementById("calculatorContaner").style.backgroundImage="url(../imgs/background1.png)";
changeToGreenFunction = () => document.getElementById("calculatorContaner").style.backgroundImage="url(../imgs/background1.png)";


changeToGrayFunction = () => document.getElementById("calculatorContaner").style.backgroundImage="url(../imgs/background2.png)";
//Change Theme Font
changeFont1Function = () => document.getElementsByTagName('body')[0].style.fontFamily="'Source Sans Pro', sans-serif";

changeFont2Function = ()=>  document.getElementsByTagName('body')[0].style.fontFamily="'Merriweather', serif";