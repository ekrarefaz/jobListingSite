function manage(){
    const full_table = document.getElementById("full-table");
    const job_query = document.getElementById("job-query");
    const name_query = document.getElementById("name-query");
    const job_delete = document.getElementById("delete-query");
    const eoi_status = document.getElementById("eoi-query");

    const option = document.getElementById("query-option").value;

    if(option == 'job-query'){
        document.getElementById("jobref-input").classList.add('active');
    }
    else if(option != 'job-query'){
        document.getElementById("jobref-input").classList.remove('active');
    }

    if(option == 'name-query'){
        document.getElementById("name-input").classList.add('active');
    }
    else if(option != 'name-query'){
        document.getElementById("name-input").classList.remove('active');
    }
    if(option == 'eoi-query'){
        document.getElementById("eoi-input").classList.add('active');
    }
    else if(option != 'eoi-query'){
        document.getElementById("eoi-input").classList.remove('active');
    }
    if(option == 'delete-query'){
        document.getElementById("delete-input").classList.add('active');
    }
    else if(option != 'delete-query'){
        document.getElementById("delete-input").classList.remove('active');
    }

    const load_btn = document.getElementById("load-btn");
    load_btn.addEventListener('click',()=>{
        manage(); 
        
    });

}

window.addEventListener('load',manage());



