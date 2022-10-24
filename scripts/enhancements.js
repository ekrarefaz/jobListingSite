// Strict Mode
"use strict";
// Dark - Light Mode Function
function changeTheme(){
    const dark = document.getElementById("dark-mode");
    const light = document.getElementById("light-mode");
    // Toggle Dark Mode
    dark.addEventListener('click',()=>{
        document.getElementById("theme-style").href = './styles/dark-mode.css';
        sessionStorage.setItem("theme", './styles/dark-mode.css');
    });
    // Toggle Light Mode
    light.addEventListener('click',()=>{
        document.getElementById("theme-style").href = './styles/styles.css';
        sessionStorage.setItem("theme", './styles/style.css');
    });
}
// Set Selected Theme from Session Storage
function setTheme(){
    let theme = sessionStorage.getItem("theme");
    document.getElementById("theme-style").href = theme;
}
// Time Warning Notification
function showNotif(){
    const closebtn = document.getElementById("close");
    const popcontainer = document.getElementById("popup-container");
    popcontainer.classList.add('active');
    
    setTimeout(()=>{
    popcontainer.classList.remove('active');
    },5000);
}
// 2 Mintues Timer 
function setTimer(){
    const currentDate = new Date();
    const currentTime = currentDate.getMinutes();
    setTimeout(()=>{
        showNotif();
    },80000);
    setTimeout(()=>{
        window.location.href = "./jobs.php";
    },120000);
}
// Main Function 
function enhance(){
    const applyBody = document.getElementById("applybody");
    const enhancebody = document.getElementById("enhancebody");
    changeTheme();
    setTheme();
    if(applyBody){
        setTimer();
    }
    if(enhancebody){
        const themebtn = document.getElementById("enhance-click")
        themebtn.addEventListener('click', ()=>{
            document.getElementById("theme-wrapper").style.border = "2px solid var(--blue-bg)";
            console.log("Hello");
        });
    }
}
window.addEventListener('onload', enhance());