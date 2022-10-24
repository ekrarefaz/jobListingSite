"use strict";
// Save Reference No. in Local Storage
function referenceSet(){
    const job1 = document.getElementById("job1-apply");
    const job2 = document.getElementById("job2-apply");
    job1.addEventListener('click', () =>{
        localStorage.setItem('Ref-No', 'AX39B');       
    });
    job2.addEventListener('click',()=>{
        localStorage.setItem('Ref-No','B6Z20')
    });
}
// Set Reference Number in Apply Form Page
function jobSet(){
    const inputField = document.getElementById("reference-no");
    const titleSelect = document.getElementById("job-title");
    inputField.readOnly = true;
    titleSelect.disabled = true;
    const refNo = localStorage.getItem('Ref-No');
    if(refNo == "AX39B"){
        titleSelect.value = "Network Architect";
    }
    else if(refNo == "B6Z20"){
        titleSelect.value = "Junior System Admin";
    }
    inputField.value = refNo;  
}
// Main Function
function script(){
    const jobsPage = document.getElementById("jobsbody");
    const applyBody = document.getElementById("applybody");
    const form = document.getElementById("apply-form");
    // Call Function According to Page Load
    if (jobsPage){
        referenceSet();
    }
    else if(applyBody){
        jobSet();
    }
}
window.addEventListener('load',script())