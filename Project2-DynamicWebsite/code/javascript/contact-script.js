document
.getElementById("agreement")
.addEventListener("click", function (e) {
  document.getElementById("submit-btn").disabled = !e.target.checked;
});
document
.getElementById("agreement")
.addEventListener("click", function (e) {
  document.getElementById("submit-btn1").disabled = !e.target.checked;
});
document
.getElementById("email")
.addEventListener("change", function (event) {
  // console.log(validate("email",event.target.value))
  if (validate("email", event.target.value)) {
    removeErrorMessage("email");
  } else {
    renderInputError("email", "Email is not VALID!");
  }
});

document
.getElementById("phone")
.addEventListener("change", function (event) {
  // console.log(validate("phone",event.target.value))
  if (validate("phone", event.target.value)) {
    removeErrorMessage("phone");
  } else {
    renderInputError("phone", "phone is not VALID!");
  }
});
document
.getElementById("password")
.addEventListener("change", function (event) {
  
  if (validate("password", event.target.value)) {
    removeErrorMessage("password");
  } else {
    renderInputError("password", "Password is not VALID!");
  }
});
function validate(type, value) {
switch (type) {
  case "email":
    return /^[\w]+[\w\d_\-\.]*@[\w]([\d\w_\-\.])+\.[\d\w]+[\d\w_\-\.]/gi.test(value);

  case "phone":
    return value.length == 10;

  case "password":
    return /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z])(?=.*\W).{8,}$/g.test(value);   
}
}

// Error Message Creation
function renderInputError(inputID, errorMessage) {
const errorElement = document.createElement("span");
const inputElement = document.getElementById(inputID);
errorElement.innerHTML = errorMessage;
errorElement.id = `${inputID}-ERROR`;
errorElement.className = "input-error";
inputElement.parentElement.appendChild(errorElement);
}
function removeErrorMessage(inputID) {
const errorElement = document.getElementById(`${inputID}-ERROR`);
const inputElement = document.getElementById(inputID);
inputElement.parentElement.removeChild(errorElement);
}

// change font size
function changeFontSize() {
document.getElementsByTagName("body")[0].style.fontSize = "22px";
}
function changeFontSize1() {
  document.getElementsByTagName("body")[0].style.fontSize = "";
  }

// save so LS
var userInput = [];
function saveToLs(){
  const userTextArea =document.getElementById("textArea").value; 
  for (var i=0; i <5; i++){
    const userData=document.getElementsByTagName("input")[i].value;
    userInput.push(userData);
  }
  userInput.push(userTextArea);
  
  localStorage.setItem("userInput",JSON.stringify(userInput));
  
}
// Save to SS
var userInput = [];
function saveToSs(){
  const userTextArea =document.getElementById("textArea").value; 
  for (var i=0; i <5; i++){
    const userData=document.getElementsByTagName("input")[i].value;
    userInput.push(userData);
  }
  userInput.push(userTextArea);
  
  sessionStorage.setItem("userInput",JSON.stringify(userInput));
  
}
// Clear Storage
function clearStorage(){
  localStorage.clear();
  sessionStorage.clear();
}

//Change Theme Background
function changeToGreenFunction(){
  document.getElementsByTagName("body")[0].style.backgroundImage="url(/imgs/background4.png)";
}
function changeToGrayFunction(){
  document.getElementsByTagName("body")[0].style.backgroundImage="url(/imgs/background3.png)";
}
//Change Theme Font
function changeFont1Function(){
  document.getElementsByTagName('body')[0].style.fontFamily="'Source Sans Pro', sans-serif";
}
function changeFont2Function(){
  document.getElementsByTagName('body')[0].style.fontFamily="'Merriweather', serif";
}

