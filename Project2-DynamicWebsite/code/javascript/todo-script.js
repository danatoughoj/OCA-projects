//Global Variable
var tasks=[]
var completed_tasks=[];
var key=0;


function uncheckedFunction(){
    // Sections visibelity
    document.getElementById('unchecked').style.display = 'block';
    document.getElementById('checked').style.display = 'none';
    
    // Bar active style
    document.getElementById("unchecked_list").classList.add('selected-tab');
    document.getElementById("checked_list").classList.remove('selected-tab'); 
}


function checkedFunction(){
    console.log("You're in checkedFunction");
    // Sections visibelity
    document.getElementById('checked').style.display = 'block';
    document.getElementById('unchecked').style.display = 'none';
    
    // Bar active style
    document.getElementById("checked_list").classList.add('selected-tab');
    document.getElementById("unchecked_list").classList.remove('selected-tab'); 
}

//Function TaskLoad to load unfinished tasks from localStorage when you refresh,if available
function tasksLoad(){
    if(localStorage.getItem("tasks") != null){

        var element = document.getElementById('unchecked_tasks');
        var retrieved_tasks= localStorage.getItem("tasks");
        tasks = JSON.parse(retrieved_tasks);

        for (var i = 0; i < tasks.length; i++){
            var html =`
                <div class="task">
                    <span> <input type="checkbox" id="task${key}" name="task${key}" value="task${key}" onclick="completeTaskFunction(this.id)"> <label for="task${key}" id="label${key}"> ${tasks[i]} </label> </span>
                    <span> <button id="${key}" class="btn2" onclick="deleteTaskFunction(this.id)"> <i class="fas fa-trash-alt"></i></button></span>
                </div><hr>
            `
            element.insertAdjacentHTML('beforeend', html);
            key=key+1;
        }
        //Enable clear all button
        document.getElementById("clear_all_unchecked").style.display="block";
    }
    else{
        document.getElementById("unchecked_tasks").innerHTML="You dont have any tasks <br><br>"
        //disable clear all button
        document.getElementById("clear_all_unchecked").style.display="none";
    }
}


//Function completedTaskLoad to load unfinished tasks from localStorage when you refresh,if available
function completedTasksLoad(){
    if(localStorage.getItem("completed_tasks") != null){

        var element = document.getElementById('checked_tasks');
        var retrieved_tasks= localStorage.getItem("completed_tasks");
        completed_tasks = JSON.parse(retrieved_tasks);

        for (var i = 0; i < completed_tasks.length; i++){
            var html =`
                <div class="task">
                    <p>${completed_tasks[i]}</p>
                </div><hr>
            `
            element.insertAdjacentHTML('beforeend', html);
        }
        //Enable clear all button
        document.getElementById("clear_all_checked").style.display="block";
    }
    else{
        document.getElementById("checked_tasks").innerHTML="You dont have any finished tasks <br><br>"
        //disable clear all button
        document.getElementById("clear_all_checked").style.display="none";
    }
}


//Function addTask Function to add tasks when you press the add button
function addTaskFanction(){
    var value= document.getElementById("task").value; 
    if(value.length != 0){
        tasks.push(value);
        localStorage.setItem('tasks',JSON.stringify(tasks));
        var html =`
                <div class="task">
                    <span> <input type="checkbox" id="task${key}" name="task${key}" value="task${key}" onclick="completeTaskFunction(this.id)"> <label for="task${key}" id="label${key}"> ${value} </label> </span>
                    <span> <button id="${key}" class="btn2" onclick="deleteTaskFunction(this.id)"> <i class="fas fa-trash-alt"></i> </button></span>
                </div><hr>
                `
        var element = document.getElementById('unchecked_tasks');
        element.insertAdjacentHTML('beforeend', html);
        key=key+1;
        location.reload();
    }
    else{
        document.getElementById("task").value="You must enter your task!";
    }
}


//Function clearUncheckedFanction to delete the unchecked tasks when you press the clear button
function clearUncheckedFunction(){
    localStorage.removeItem("tasks");
    location.reload();
}

function clearcheckedFunction(){
    localStorage.removeItem("completed_tasks");
    location.reload();
}

//Function deleteTask/function to delete only the task that we pressed the delete button next to it
function deleteTaskFunction(id){
    console.log(id);
    if(tasks.length==1){
        // console.log(localStorage.getItem('tasks'));
        localStorage.removeItem("tasks");
    }
    else{
        //At position "id" remove one item
        tasks.splice(id, 1);
        localStorage.setItem('tasks',JSON.stringify(tasks));
    }
    location.reload();  
}

//Function completeTaskFunction to add the task to the completed tasks array when the checkbox nect to it is checked
function completeTaskFunction(id){
    var key;
    //Remove the text part of the id(take only the number)
    key= id.slice(4,5);
    var value=tasks[key];
    console.log("key",key);
    console.log("tasks[key]",tasks[key]);
    
    if (document.getElementById(id).checked ==1) {
        completed_tasks.push(value);
        localStorage.setItem("completed_tasks", JSON.stringify(completed_tasks));
        console.log(tasks.length);
        deleteTaskFunction(key);
        localStorage.setItem('tasks',JSON.stringify(tasks));
    }
}


//Change Theme Background
changeToGreenFunction = () => document.getElementById("todo").style.backgroundImage="url(../imgs/background1.png)";
changeToGrayFunction = () => document.getElementById("todo").style.backgroundImage="url(../imgs/background2.png)";
//Change Theme Font
changeFont1Function = () => document.getElementsByTagName('body')[0].style.fontFamily="'Source Sans Pro', sans-serif";
changeFont2Function = ()=>  document.getElementsByTagName('body')[0].style.fontFamily="'Merriweather', serif";