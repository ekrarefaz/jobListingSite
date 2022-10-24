<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Assignment 1" />
        <meta name="keywords" content="HTML, CSS" />
        <meta name="author" content="s103494172"  />
        <!-- <meta http-equiv="refresh" content="3" /> -->
        <!--Linking my css file. Keep in same folder for it to work-->
        <link rel="stylesheet" type="text/css" href="./styles/style.css">
        <link rel="stylesheet" id="theme-style" href="">
        <!--Adding fonts from google fonts-->
        <!--FONT VT32-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet"> 
        <!--Font AMATIC SC-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&display=swap" rel="stylesheet"> 
        <!--Font Press Start 2P-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet"> 
        <!-- Link to Javascripts -->
        <script src="./scripts/form-validation.js" defer></script>
        <script src="./scripts/script.js" defer></script>
        <!-- <script src="./scripts/enhancements.js" defer></script> -->
        <script src="./scripts/manager.js" defer></script>
        <title>Job Application</title>
    </head>
<body>
        <?php include_once "header.inc";
            session_start();
            if(empty($_SESSION["admin"])){
                header("location: login.php");
            }
        ?>


        <form id ="query-form" method="POST" action="processAdmin.php" novalidate="novalidate">
            <label for="show-table">Manage Options</label>
            <div class="opening">
                <div class="drop-down">
                    <label>Options:</label>
                        <select name="option" id="query-option" required="required">
                            <option value="full-db">Show Full Database</option>
                            <option value="job-query">Query By Job Reference</option>
                            <option value="name-query">Query by Name</option>
                            <option value="delete-query">Delete by Job</option>
                            <option value="eoi-query">Query by EOI</option>
                        </select>      
                </div>
                <div class="load-btn" id='load-btn'><a href="#" id="load-btn">Load</a></div>
            </div>

            <div class="form-control jobref-input" id ="jobref-input">
                <label for="job_ref">Job Reference Number</label>
                <input type="text" id='job_ref' name="job_ref">
            </div>

            <div class="form-control name-input" id="name-input">
                <label for="name">Name</label>
                <input type="text" id='name' name="name">
            </div>

            <div class="form-control eoi-input" id="eoi-input">
                <label for="eoi_id">EOI ID</label>
                <input type="text" id='eoi_id' name="eoi_id">
                <label>Status:</label>
                    <select name="status" id="status" required="required">
                        <option value="new">new</option>
                        <option value="current">current</option>
                        <option value="final">final</option>
                    </select>
            </div>

            <div class="form-control delete-input" id ="delete-input">
                <label for="delete_ref">Delete Job Reference</label>
                <input type="text" id='delete_ref' name="delete_ref">
            </div>

            <div>
                <input class ="submit-btn" type= "submit" value="Make Query"/>
            </div>
        </form>

</body>
</html>
