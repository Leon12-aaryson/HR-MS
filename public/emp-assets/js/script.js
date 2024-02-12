// Get references to DOM elements
const body = document.querySelector("body"),
  hourHand = document.querySelector(".hour"),
  minuteHand = document.querySelector(".minute"),
  secondHand = document.querySelector(".second"),
  modeSwitch = document.querySelector(".mode-switch");


const updateTime = () => {
  // Get current time and calculate degrees for clock hands
  let date = new Date(),
    secToDeg = (date.getSeconds() / 60) * 360,
    minToDeg = (date.getMinutes() / 60) * 360,
    hrToDeg = (date.getHours() / 12) * 360;

  // Rotate the clock hands to the appropriate degree based on the current time
  secondHand.style.transform = `rotate(${secToDeg}deg)`;
  minuteHand.style.transform = `rotate(${minToDeg}deg)`;
  hourHand.style.transform = `rotate(${hrToDeg}deg)`;
};

// call updateTime to set clock hands every second
setInterval(updateTime, 1000);

//call updateTime function on page load
updateTime();

const startBtn = document.getElementById("start");
let startTime, endTime;

startBtn.addEventListener("click", () => {
  if (startBtn.textContent === "Start time") {
    // Capture start time
    startTime = new Date();
    document.getElementById("display-start").textContent = `Start Time: ${startTime.toLocaleTimeString()}`;
    
    // Change button text to "Stop time"
    startBtn.textContent = "Stop time";
  } else {
    // Capture end time
    endTime = new Date();
    document.getElementById("display-end").textContent = `End Time: ${endTime.toLocaleTimeString()}`;
    
    // Change button text to "Start time"
    startBtn.textContent = "Start time";
  }
});



//javascript for todo list

const inputBox = document.getElementById("input-box");
const listContainer = document.getElementById("list-container");

function addTask(){
  if(inputBox.value === ''){
    alert("You must write something!");
  }
  else{
    let li = document.createElement("li");
    li.innerHTML = inputBox.value;
    listContainer.appendChild(li);

    let span = document.createElement("span");
    span.innerHTML = "\u00d7";

    li.appendChild(span);
  }
  inputBox.value = '';
}

listContainer.addEventListener("click", function(e){
  if(e.target.tagName === "LI"){
    e.target.classList.toggle("checked");
  }
  else if(e.target.tagName === "SPAN"){
    e.target.parentElement.remove();
  }
}, false) 